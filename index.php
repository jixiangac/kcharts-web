<?php 
	include_once('header.php');
?>

<div id="JSlide" class="slide-style kc-banner">
    <ul class="tab-nav clearfix"><!--选项卡导航，内容可以是空-->
        <!--若内容为空，则Slide会创建<li></li>-->
        <li class="selected"><a href="#">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
    </ul>
    <div class="tab-content"><!--选项卡内容的父容器-->
        <div class="tab-pannel"><!--选项卡的每项的容器-->
           <img src="http://img03.taobaocdn.com/tps/i3/T1bvKWXBhXXXa_hgjH-1500-641.png">
        </div>
        <!--一般情况下，需要指定默认情况非首帧是否显示-->
        <div class="tab-pannel">
           <img src="http://img02.taobaocdn.com/tps/i2/T1t3R_FcdfXXa_hgjH-1500-641.png">
        </div>
        <div class="tab-pannel">
           <img src="http://img03.taobaocdn.com/tps/i3/T1b6GUXwXfXXa_hgjH-1500-641.png">
        </div>
    </div>
</div>

<div class="kc-main-content">
	<div class="inner">
		<h1 id="J_ChartName">折线图</h1>
		<h6 id="J_ChartContent">折线图可显示随X轴（多为时间）变化的连续数据，适用于显示在相等时间间隔下数据的趋势。</h6>
		<a href="lib.php" class="see-all">查看所有图表</a>
		<div class="clearfix preview-bd bd-outer">
			<div class="preview bd-inner">
				<iframe id="J_Iframe" src="demos/linechart.html" scrolling="no" width="917" height="371"></iframe>
			</div>
		<div class="chart-list">
			<div id="J_ChartList" class="scrollable">
			    <span id="scroller-prev" class="prev disable">&lsaquo;</span>
			    <span id="scroller-next" class="next">&rsaquo;</span>
			    <div class="scroller">
			        <div class="ks-switchable-content" id="J_ChartIcons">
			        	<div class="chart-icon linechart" charttype="linechart" chartname="折线图" chartcontent="折线图可显示随X轴（多为时间）变化的连续数据，适用于显示在相等时间间隔下数据的趋势。"><a class="cur" href='javascript:void(0)'></a></div>
			            <div class="chart-icon barchart" charttype="barchart" chartname="柱状图" chartcontent="柱状图易于比较各组数据之间的差别。"><a href='javascript:void(0)'></a></div>
			            <div class="chart-icon piechart" charttype="piechart" chartname="饼图" chartcontent="饼图能够直接以图形的方式直接显示各个组成部分所占比例。"><a href='javascript:void(0)'></a></div>
			            <div class="chart-icon dashboard" charttype="dashboard" chartname="仪表盘" chartcontent="仪表盘"><a href='javascript:void(0)'></a></div>
			            <div class="chart-icon scatterchart" charttype="scatterchart" chartname="散点图" chartcontent="如果数据集中包含非常多的点（例如，几千个点），那么散点图便是最佳图表类型。"><a href='javascript:void(0)'></a></div>
			            <div class="chart-icon ratiochart" charttype="ratiochart" chartname="画报" chartcontent="画报"><a href='javascript:void(0)'></a></div>
			            <div class="chart-icon mapchart last" charttype="mapchart" chartname="地图" chartcontent="地图用于展示数据在各个区域内的分布情况。"><a href='javascript:void(0)'></a></div>
			        </div>
			        <ul class="ks-switchable-nav">
			            <li class="ks-active">&bull;</li>
			            <li>&bull;</li>
			            <li>&bull;</li>
			        </ul>
			    </div>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="kc-apps-center">
	<div class="inner">
		<h1>最近正在使用KCharts的项目</h1>
		<div class="wrapper">
		<ul class="clearfix">
			<li><img src="http://img04.taobaocdn.com/tps/i4/T17EChFeFaXXaZNWYj-176-80.png" alt="旺铺装修分析"/></li>
			<li><img src="http://img04.taobaocdn.com/tps/i4/T1RYidFmdgXXaZNWYj-176-80.png" alt="店铺实验室"/></li>
			<li><img src="http://img01.taobaocdn.com/tps/i1/T1Z55gFh4aXXaZNWYj-176-80.png" alt="实拍保护"/></li>
			<li><img src="http://img03.taobaocdn.com/tps/i3/T19XKeFlVgXXaZNWYj-176-80.png" alt="麦麦"/></li>
			<li><a href="http://jing.alibaba-inc.com/?ticket=95b3ffa4-7485-462c-af80-fea610e111f6" target="_blank"><img src="http://img02.taobaocdn.com/tps/i2/T14G1gFmFbXXaZNWYj-176-80.png" alt="昆仑镜"/></a></li>
		</ul>
		</div>
		<div class="contect-wrapper">
			<span  class="ww-light ww-large" data-nick="KCharts%E4%BD%BF%E7%94%A8%E4%BA%A4%E6%B5%81" 
data-tnick="KCharts%E4%BD%BF%E7%94%A8%E4%BA%A4%E6%B5%81" data-encode="true" data-display="inline">
<a class="contect-us" href="http://www.taobao.com/webww/?ver=1&touid=818302516&
siteid=cntaobao&status=2&portalId=&
gid=b2be10ade26ceb489a62d1b95eba0619&itemsId=" target="_blank" 
class="ww-inline ww-online" >联系我们</a></span><span class="coperation"> 期待和你合作:)</span></div>
	</div>
</div>

<div class="kc-bottom-banner">
	<div class="inner">
		<div class="offer">
			我们为您提供
		</div>
		<div class="clearfix">
			<div class="item left bd-outer">
				<div class="bd-inner">
					<h3>图表加工</h3>
					<p>KCharts提供的图表样式上不满足需求，我们将帮你进行调整，达到你想要的外观。</p>
				</div>
			</div>
			<div class="item right bd-outer">
				<div class="bd-inner">
					<h3>新图表定制</h3>
					<p>KCharts没有你需要的图表？不用担心，可以直接给我们提需求，我们帮你定制图表。</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/index.js"></script>
<?php
	include_once('footer.php');
?>
