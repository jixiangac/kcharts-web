KISSY.add(function(S,PieChart) {
	var $ = S.all,
		Evt = S.Event,
		IO = S.io;
	//产生配置
	function genConfig() {

		var defaultCfg = {
						 data:[
						 {label:"Chrome", data:1},
						 { label:"FireFox", data:2 },
						 { label:"IE", data:3 },
						 { label:"Opera",data:4 },
						 { label:"Safari", data:5 }],
						 color:{
							 initial:"#f00"
						 },
						 gradient:true,//开启渐变色
						 renderTo:"#demo1",
						 cx:350,cy:150,
						 rs:80,
						 interval:5,
						 anim:{
							 easing:'swing',
							 duration:800
						 }
					 };

		var config = {};

		$(".ks-chart-gen-attrs").each(function() {
			var attrName = this.attr("attrname"),
				subAttrName = this.attr("subattrname"),
				subAttrVal = (function(el) {
					if (el.attr("type") == "checkbox") {
						return el.attr("checked") ? true : false;
					} else {
						return el.val();
					}
				})(this),
				attrType = this.attr("attrtype");

			if (attrName && (subAttrVal || false === subAttrVal)) {
				if (!config[attrName]) {
					config[attrName] = {};
				}

				if (attrType && !config[attrName][attrType]) {
					config[attrName][attrType] = {};
				}

				if (subAttrName) {
					if (attrType) {
						config[attrName][attrType][subAttrName] = subAttrVal;
					} else {
						config[attrName][subAttrName] = subAttrVal;
					}
				} else {
					config[attrName] = subAttrVal;
				}

			}
		})
		return S.mix(defaultCfg, config, undefined, undefined, true);
	}


	var JsonUti = {
		//定义换行符
		n: "\n",
		//定义制表符
		t: "\t",
		//转换String
		convertToString: function(obj) {
			return JsonUti.__writeObj(obj, 1);
		},
		//写对象
		__writeObj: function(obj, level, isInArray) {
			//如果为空，直接输出null
			if (obj == null) {
				return "null";
			}
			//为普通类型，直接输出值
			if (obj.constructor == Number || obj.constructor == Date || obj.constructor == String || obj.constructor == Boolean) {
				var v = obj.toString();
				var tab = isInArray ? JsonUti.__repeatStr(JsonUti.t, level - 1) : "";
				if (obj.constructor == String || obj.constructor == Date) {
					//时间格式化只是单纯输出字符串，而不是Date对象
					return tab + ("\"" + v + "\"");
				} else
				if (obj.constructor == Boolean) {
					return tab + v.toLowerCase();
				} else {
					return tab + (v);
				}
			}

			//写Json对象，缓存字符串
			var currentObjStrings = [];
			//遍历属性
			for (var name in obj) {
				var temp = [];
				//格式化Tab
				var paddingTab = JsonUti.__repeatStr(JsonUti.t, level);
				temp.push(paddingTab);
				//写出属性名
				temp.push(name + " : ");

				var val = obj[name];
				if (val == null) {
					temp.push("null");
				} else {
					var c = val.constructor;

					if (c == Array) { //如果为集合，循环内部对象
						temp.push(JsonUti.n + paddingTab + "[" + JsonUti.n);
						var levelUp = level + 2; //层级+2
						var tempArrValue = []; //集合元素相关字符串缓存片段
						for (var i = 0; i < val.length; i++) {
							//递归写对象                         
							tempArrValue.push(JsonUti.__writeObj(val[i], levelUp, true));
						}

						temp.push(tempArrValue.join("," + JsonUti.n));
						temp.push(JsonUti.n + paddingTab + "]");
					} else
					if (c == Function) {
						temp.push("[Function]");
					} else {
						//递归写对象
						temp.push(JsonUti.__writeObj(val, level + 1));
					}
				}
				//加入当前对象“属性”字符串
				currentObjStrings.push(temp.join(""));
			}
			return (level > 1 && !isInArray ? JsonUti.n : "") //如果Json对象是内部，就要换行格式化
			+
				JsonUti.__repeatStr(JsonUti.t, level - 1) +
				"{" +
				JsonUti.n //加层次Tab格式化
			+
				currentObjStrings.join("," + JsonUti.n) //串联所有属性值
			+
				JsonUti.n +
				JsonUti.__repeatStr(JsonUti.t, level - 1) +
				"}"; //封闭对象
		},
		__isArray: function(obj) {
			if (obj) {
				return obj.constructor == Array;
			}
			return false;
		},
		__repeatStr: function(str, times) {
			var newStr = [];
			if (times > 0) {
				for (var i = 0; i < times; i++) {
					newStr.push(str);
				}
			}
			return newStr.join("");
		}
	};


	function genChart(){
		var config = genConfig();
		var piechart = new PieChart(config)
		$("#J_codePane").val(JsonUti.convertToString(config));
	}

	genChart()
	// $("#J_btnGen").on("click", function() {
	// 	var config = genConfig(),
	// 		seriesData,
	// 		xaxisData;

	// 	seriesData = formatData($("#J_series").val());
	// 	xaxisData = {xAxis:{text:seriesData.axis}};
	// 	var cfg = S.mix(S.mix(config, seriesData), xaxisData);
	// 	var barchart = new BarChart(cfg);

	// 	$("#J_codePane").val(JsonUti.convertToString(cfg));

	// });

	// $("#J_btnGen").fire("click");


}, {
	requires: ['gallery/kcharts/1.2/piechart/']
});