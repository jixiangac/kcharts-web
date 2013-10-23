<?php 
	include_once('header.php');
	include_once('service/getDemoPage.php');
?>
<style type="text/css">
.wrapper{
	width: 998px;
	margin: 20px auto;
	background:#fff;
	border:1px solid #ccc;
}
</style>
<div class="wrapper">
<?php echo $page['code']; ?>
</div>
<?php
	include_once('footer.php');
?>