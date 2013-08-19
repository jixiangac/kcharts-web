<?php
include_once('header.php');
?>
    <style>
        .main-container {
            padding-top: 86px;
            padding-bottom: 80px;
            background: url('http://img03.taobaocdn.com/tps/i3/T1YXWgFcVbXXcCXlfb-25-25.png') repeat;
        }

        .main-container .inner {
            width: 1000px;
            margin: 0px auto;
        }

        .main-container .inner .sel-type {
            display: block;
            width: 185px;
            height: 35px;
            background: #666;
            color: #fff;
            text-decoration: none;
            font-family: Microsoft Yahei;
            font-size: 14px;
            text-decoration: center;
        }

        .main-container .inner .sel-type span.cur {
            float: left;
            display: block;
            height: 35px;
            width: 96px;
            text-align: center;
            line-height: 35px;
        }

        .main-container .inner .sel-type .arrow {
            display: block;
            overflow: hidden;
            float: left;
            height: 35px;
            width: 44px;
            background: url('http://img02.taobaocdn.com/tps/i2/T1Kp5fFjJdXXbiP06j-56-16.png') no-repeat;
        }

        .main-container .inner .sel-type .arrow-down {
            background-position: 13px 10px;
        }

        .main-container .inner .sel-type .arrow-up {
            background-position: -21px 10px;
        }

        .main-container .inner .sel-content {
            display: none;
        }

        .main-container .inner .sel-content-inner {
            padding: 16px 28px;
        }

        .main-container .inner .sel-content-inner ul li {
            margin-right: 6px;
        }

        .main-container .inner .sel-content-inner ul li, .main-container .inner .sel-content-inner ul li a {
            width: 80px;
            height: 80px;
            display: block;
            float: left;
        }

        .bd-outer {
            border: 7px solid #ebebeb;
        }

        .bd-inner {
            border: 1px solid #d3d3d3;
        }

        .bd-outer, .bd-inner {
            border-radius: 3px 3px 3px 3px;
            -moz-border-radius: 3px 3px 3px 3px;
            -webket-border-radius: 3px 3px 3px 3px;
        }

        .icon-linechart a {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat 0px 0px;
        }

        .icon-linechart:hover, .icon-linechart .cur {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat 0px -156px;
        }

        .icon-barchart {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -88px 0px;
        }

        .icon-barchart:hover, .icon-barchart .cur {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -88px -156px;
        }

        .icon-barchart-stack {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -175px 0px;
        }

        .icon-barchart-stack:hover, .icon-barchart-stack .cur {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -175px -156px;
        }

        .icon-piechart {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -263px 0px;
        }

        .icon-piechart:hover, .icon-piechart .cur {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -263px -156px;
        }

        .icon-scatterchart {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -524px 0px;
        }

        .icon-scatterchart:hover, .icon-scatterchart .cur {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -524px -156px;
        }

        .sel-container {
            padding-bottom: 90px;
        }

        .icon-datetime:hover, .icon-datetime .cur {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -700px -156px;
        }

        .icon-datetime {
            background: url('http://img01.taobaocdn.com/tps/i1/T1iVSfFb8dXXbOZtQq-955-236.png') no-repeat -700px 0px;
        }
    </style>
    <div class="main-container">
        <div class="inner">
            <div class="sel-container">
                <a class="sel-type" id="J_SelType" href="#">
                    <i class="arrow arrow-up"></i>
                    <span class="cur" id="J_TxtType">折线图</span>
                    <i class="arrow arrow-up"></i>
                </a>

                <div class="sel-content bd-outer" id="J_SelContent" style="height: 0;">
                    <div class="bd-inner sel-content-inner">
                        <ul class="clearfix">
                            <li class="icon-chart icon-linechart" data-type="折线图"><a class="cur"
                                                                                     href="generator/linechart.html"
                                                                                     target="J_Frame"></a></li>
                            <li class="icon-chart icon-barchart" data-type="柱状图"><a href="generator/barchart.html"
                                                                                    target="J_Frame"></a></li>
                            <li class="icon-chart icon-barchart-stack" data-type="横向柱状图"><a
                                    href="generator/barchart-stack.html" target="J_Frame"></a></li>
                            <li class="icon-chart icon-piechart" data-type="饼图"><a href="generator/piechart.html"
                                                                                   target="J_Frame"></a></li>
                            <li class="icon-chart icon-scatterchart" data-type="散点图"><a
                                    href="generator/scatterchart.html" target="J_Frame"></a></li>
                            <li class="icon-chart icon-datetime" data-type="时间线"><a href="generator/datetime.html"
                                                                                    target="J_Frame"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <iframe id="J_Frame" name="J_Frame" class="gen-inframe" scrolling="no" frameborder="0"
                    src="generator/linechart.html"></iframe>
        </div>
    </div>
    <script type="text/javascript" src="js/generator.js"></script>
<?php
include_once('footer.php');
?>