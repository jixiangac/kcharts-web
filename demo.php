<?php
	include_once('header.php');
	include_once('service/getDemoList.php');
?>
<style>
.container{
	width:1000px;
	margin: 0px auto;
}
.container a{
	color:#74aed2;
}
.top-nav{
	height: 40px;
	line-height: 40px;
	font-size: 14px;
	border:1px solid #74aed2;
	margin: 5px;
	position: relative;
}
.top-nav .cat-name{
	color:#000;
	font-weight: bold;
	float: left;
	text-align: center;
	width: 60px;
}
.top-nav .cat-list li,.top-nav .cat-list li a{
	color:#74aed2;
	text-decoration: none;
	display: block;
	float: left;
	height: 40px;
	width: 50px;
	text-align: center;
}
.top-nav .cat-list li.cur a,.top-nav .cat-list li a:hover{
	background: #74aed2;
	color:#fff;
}
.top-nav .go-upload{
	display: block;
	line-height: 40px;
	font-size: 14px;
	font-weight: bold;
	color:#f60;
	position: absolute;
	right: 10px;
}
.list-wrapper {
	padding: 10px;
}
.list-wrapper table{
	width:1000px;
}
.list-wrapper table td{
	line-height: 26px;
	border-bottom: 1px dotted #ccc;
}
.list-wrapper table td a.title{
	color:#444;
}
.list-wrapper table td .date{
	color:#888;
}
.list-wrapper table td a.title:hover{
	color:#f60;
}

</style>
<div class="container">
	<div class="top-nav">
		<a class="go-upload"  href="upload.php">上传demo&gt;</a>
		<h1 class="cat-name">分类</h1>
		<ul class="cat-list">
			<li<?php if($catname == ""){ ?> class="cur" <?php } ?> ><a href="demo.php">全部</a></li>
			<li<?php if($catname == "折线图"){ ?> class="cur" <?php } ?>><a href="demo.php?cat=折线图">折线图</a></li>
			<li<?php if($catname == "柱状图"){ ?> class="cur" <?php } ?>><a href="demo.php?cat=柱状图">柱状图</a></li>
			<li<?php if($catname == "饼图"){ ?> class="cur" <?php } ?>><a href="demo.php?cat=饼图">饼图</a></li>
			<li<?php if($catname == "其他"){ ?> class="cur" <?php } ?>><a href="demo.php?cat=其他">其他</a></li>
		</ul>
	</div>
	<div class="list-wrapper">
		<table>
			<?php foreach($demolist as $item){ ?>
			<tr>
				<td><a class="title" href="demo_page.php?id=<?php echo $item['id'];?>" target="_blank">[<?php echo $item['catname'];?>] <?php echo $item['title'];?></a></td>
				<td><span class="date"><?php echo $item['time'];?></span></td>
				<td><a href="demo_page.php?id=<?php echo $item['id'];?>" target="_blank">查看demo</a> [<a href="code.php?id=<?php echo $item['id'];?>" target="_blank">查看源码</a>]</td>
				<td><?php echo $item['nick'];?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="pagination-wrapper">
		<div class="ks-pagination" id="J_page"></div>
	</div>
</div>

<input type="hidden" value="<?php echo $page; ?>" id="H_CurPage">
<input type="hidden" value="<?php echo $totalPage; ?>" id="H_TotalPage">
<script>
(function(S){
	var $ = S.all;
	S.Config.debug = true;
	S.config({
		packages:[
			{
				name:"js",
				path:"./"
			}
		]
	});
	S.use("js/pagination/",function(S,Pagination){
		var pn = new Pagination({
			container:"#J_page",
			curPage:$("#H_CurPage").val(),
			pageSize:6,
			totalPage:$("#H_TotalPage").val(),
			tpl:{
                    page:"<a class='page page-trigger' href='javascript:void(0)'>{{page}}</a>",
                    curPage:"<strong class='current page-cur'>{{curPage}}</strong>",
                    prevPage:"<a class='page-prev page-trigger' href='#{{prevPage}}'>上一页</a>",
                    nextPage:"<a class='page-next page-trigger' href='#{{nextPage}}'>下一页</a>",
                    prevDisable:"<a class='page-prev page-trigger prev-disable page-disable'>上一页</a>",
                    nextDisable:"<a class='page-next page-trigger next-disable page-disable'>下一页</a>",
                    more:"<span class='page-more'>...</span>"
            },
			autoRender:true,
			onclick:function(page){
				if(!isNaN(page) && page > 0 && page <= $("#H_TotalPage").val()){
					location.href="demo.php?page="+page+"&cat=<?php echo $catname; ?>";
				}
			}
		});
	});
})(KISSY)
</script>
<?php
	include_once('footer.php');
?>