<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
<meta charset="utf-8"/>
<meta name="baidu-site-verification" content="kc2vd1sYCO" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>KCharts</title>
<link rel="Shortcut Icon" href="favicon.ico" />
<link rel="stylesheet" href="http://a.tbcdn.cn/p/global/1.0/global-min.css" />
<link rel="stylesheet" href="css/index.css" />
<link rel="stylesheet" href="generator/css/common.css" />
<script src="http://a.tbcdn.cn/??s/kissy/1.3.0/kissy-min.js"></script>
</head>
<?php
	$location = $_SERVER['PHP_SELF'];
?>
<body>
<div class="kc-header">
	<div class="inner">
		<ul class="nav" id="nav">
			<li <?php if(strstr($location, "index.php")){ ?>class="cur" <?php } ?> ><a href="index.php">首页</a></li>
			<li <?php if(strstr($location, "lib.php")){ ?>class="cur" <?php } ?>><a href="lib.php">图表库</a></li>
			<li <?php if(strstr($location, "demo.php")){ ?>class="cur" <?php } ?>><a href="demo.php">Demo贡献</a></li>
			<li <?php if(strstr($location, "generator.php")){ ?>class="cur" <?php } ?>><a href="generator.php">生成器</a></li>
			<li><a target="_blank" href="http://gallery.kissyui.com/kcharts/1.2/guide/index.html?spm=0.0.0.0.WpVybg">文档</a></li>
			<li <?php if(strstr($location, "utils.php")){ ?>class="cur" <?php } ?>><a href="utils.php">工具</a></li>
			<li><a href="https://github.com/kissygalleryteam/kcharts" target="_blank">github</a></li>
			<li class="box"></li>
		</ul>
	</div>

</div>
<script type="text/javascript" src="js/nav.js"></script>