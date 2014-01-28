KISSY.use("node",function(S){

  function initLineChart(){
    if(initLineChart.initflag)
      return;

    initLineChart.initflag = 1;
    S.use('gallery/kcharts/1.3/linechart/index',function(S,LineChart){
      function data() {
        var sin = [],
            cos = [];
        for (var i = 0; i < 100; i++) {
          sin.push(Math.sin(i/10));
          cos.push(.5 * Math.cos(i/10));
        }
        return [
          {
            data: sin,
            text: 'Sine Wave'
          },
          {
            data: cos,
            text: 'Cosine Wave'
          }
        ];
      }
      function axis(){
        var tmp = [];
        for(var i = 0;i < 100;i++){
          tmp.push(i);
        }
        return tmp;
      }
      var linechart = new LineChart({
        line:{
          attr:{
            "stroke-width":2
          },
          hoverAttr:{
            "stroke-width":2
          }
        },
        renderTo:"#J_Line1",
        points:{
          template:function(e){
            return e.stockIndex % 10 == 0 ? e.paper.circle(e.x,e.y,e.attr.r).attr(e.attr) : "";
          },
          attr:{
            type:"circle",
            "r":3,
            "stroke-width":0
          },
          hoverAttr:{
            "r":5,
            "stroke-width":3,
            opacity:0.8,
            fill:"#FFF",
            stroke:"{COLOR}"
          }
        },
        // colors:["#ff7f0e","#2ca02c"],
        yLabels:{
          css:{
            "marginLeft":"-4px",
            "font-family":"Microsoft Yahei",
            "font-size":"10px"
          }
        },
        xLabels:{
          css:{
            "font-family":"Microsoft Yahei",
            "font-size":"10px"
          },
          template:function(i,txt){
            return i % 20===0 ? txt : "";
          }
        },
        xGrids:{
          template:function(e){
            return e.index % 10 == 0 ? e.paper.lineY(e.x,e.y,e.height).css(e.css) :"";
          },
          css:{
            "border-color":"#aaa"
          }
        },
        yGrids:{
          css:{
            "border-color":"#aaa"
          }
        },
        anim:{},
        lineType:"arc",
        xAxis: {
          isShow:false,
          text:axis()
        },
        yAxis:{
          css:{
            "border-color":"#000"
          },
          num:7
        },
        comparable:true,
        series:data(),
        legend:{
          isShow:true,y:-10
        },
        tip:{
          offset:{
            x:10,
            y:10
          },
          template:function(e){
            var html = "";
            for(var i in e.datas){
              html +="<span style='font-size:10px;color:"+e.datas[i]['color']+"'>"+e.datas[i]['text'] +" "+(e.datas[i]['y']/1).toFixed(2)+"</span><br/>"
            }
            return html;
          }
        }
      });
    });
  }

  initLineChart();


  function initBarChart(){
    S.use('gallery/kcharts/1.3/barchart/index',function(S,BarChart){
      function data() {
        var sin = [],
            cos = [];
        for (var i = 0; i < 100; i++) {
          sin.push(Math.sin(i/10));
          cos.push(.5 * Math.cos(i/10));
        }
        return [
          {
            data: sin,
            text: 'Sine Wave'
          },
          {
            data: cos,
            text: 'Cosine Wave'
          }
        ];
      }
      function axis(){
        var tmp = [];
        for(var i = 0;i < 100;i++){
          tmp.push(i);
        }
        return tmp;
      }
      var barchart = new BarChart({
        line:{
          attr:{
            "stroke-width":2
          },
          hoverAttr:{
            "stroke-width":2
          }
        },
        renderTo:"#J_Line1",
        points:{
          template:function(e){
            return e.stockIndex % 10 == 0 ? e.paper.circle(e.x,e.y,e.attr.r).attr(e.attr) : "";
          },
          attr:{
            type:"circle",
            "r":3,
            "stroke-width":0
          },
          hoverAttr:{
            "r":5,
            "stroke-width":3,
            opacity:0.8,
            fill:"#FFF",
            stroke:"{COLOR}"
          }
        },
        // colors:["#ff7f0e","#2ca02c"],
        yLabels:{
          css:{
            "marginLeft":"-4px",
            "font-family":"Microsoft Yahei",
            "font-size":"10px"
          }
        },
        xLabels:{
          css:{
            "font-family":"Microsoft Yahei",
            "font-size":"10px"
          },
          template:function(i,txt){
            return i % 20===0 ? txt : "";
          }
        },
        xGrids:{
          template:function(e){
            return e.index % 10 == 0 ? e.paper.lineY(e.x,e.y,e.height).css(e.css) :"";
          },
          css:{
            "border-color":"#aaa"
          }
        },
        yGrids:{
          css:{
            "border-color":"#aaa"
          }
        },
        anim:{},
        lineType:"arc",
        xAxis: {
          isShow:false,
          text:axis()
        },
        yAxis:{
          css:{
            "border-color":"#000"
          },
          num:7
        },
        comparable:true,
        series:data(),
        legend:{
          isShow:true,y:-10
        },
        tip:{
          offset:{
            x:10,
            y:10
          },
          template:function(e){
            var html = "";
            for(var i in e.datas){
              html +="<span style='font-size:10px;color:"+e.datas[i]['color']+"'>"+e.datas[i]['text'] +" "+(e.datas[i]['y']/1).toFixed(2)+"</span><br/>"
            }
            return html;
          }
        }
      });
    });
  }


  
});
