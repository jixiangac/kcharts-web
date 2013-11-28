<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>KCharts</title>
<link rel="Shortcut Icon" href="favicon.ico" />
<link rel="stylesheet" href="http://a.tbcdn.cn/p/global/1.0/global-min.css" />
<title>html转模板小工具</title>
<script src="http://a.tbcdn.cn/??s/kissy/1.3.0/kissy-min.js"></script>
<style>
.container{
	width: 1000px;
	margin:0px auto;
}
textarea{
	margin:5px;
	display: block;
	height: 300px;
	overflow-y:scroll;
	overflow-x:hidden;
	border:2px solid #ccc;
	width: 100%;
}
</style>
</head>
<body>
<h1 style="font-size:30px;text-align:center">html转模板小工具</h1>
<div class="">
<textarea id="input">
	<div class="bottom"></div>
		<div class="infor-list">
			<p class="fs22">影片</p>
			<ul>
				<li class="fs30">步履不停</li>
				<li class="introduce"><span class="fs21">2D中文</span><span class="fs21">片长126分钟</span></li>
			</ul>
		</div>
		<div class="infor-list">
			<p class="fs22">影院</p>
			<ul>
				<li class="fs30">杭州UME国际影城  8号厅</li>
				<li class="introduce"><span class="fs21">杭州市西湖区文二西路551号西城广场4楼</span></li>
			</ul>
		</div>
		<div class="infor-list">
			<p class="fs22">时间</p>
			<ul>
				<li class="fs30">今天 10月29日  21:00</li>
				<li class="introduce"><span class="fs21">预计23:00结束</span></li>
			</ul>
		</div>
		<div class="infor-list height100">
			<p class="fs22 lineH100">座位</p>
			<ul>
				<li class="fs30 lineH100 seat"><span>5排5座</span><span>5排6座</span><span>5排7座</span></li>
			</ul>
		</div>
		<div class="infor-list height100">
			<p class="fs22 lineH100">共计</p>
			<ul>
				<li class="fs30 lineH100"><span class="red">￥105.00</span><span class="fs21">￥35.0×3</span></li>
			</ul>
		</div>
		<div class="phone">
			<p class="fs22">手机</p>
			<input type="tel" name="phoneNum" placeholder="请填写手机号码,用于接收订单信息"/>
		</div>
</textarea>
<div>
</div>
<textarea id="output"></textarea>
</div>
<script type="text/javascript">
(function(S) {
	var $ = S.all;
	format()
	function format() {
		var input = $("#input").val().replace(/\n/g, "|").split("|");
		input.pop();
		var len = input.length;
		var os = [];
		for (var i = 0; i < len; i++) {
					var dot = /'/g.test(input[i]) ? '"' : "'";
			var tmp = input[i].replace(/^\s+/g, function($1, $2) {
				return $1 + "KC_SPLIT";
			}).split("KC_SPLIT")
			os.push(tmp[0]);
			os.push(dot);
			os.push(tmp[1].replace(/^\s+/g, ""))
			i == len - 1 && len > 1  ? os.push(dot + "\n") : os.push(dot + "+\n");
		}
		$("#output").val(os.join(""))
	}
	$("#input").on("keyup paste", format)
})(KISSY)
</script>
</body>
</html>