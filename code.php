<?php 
	include_once('header.php');
	include_once('service/getDemoPage.php');
?>

<link rel="stylesheet" href="http://softwaremaniacs.org/media/soft/highlight/styles/monokai.css">
<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
<div style="width:1000px;margin:20px auto;border:1px solid #ccc;border-radius:5px 5px 5px 5px;">
<pre><code>

	<? echo htmlspecialchars($page['code']); ?>



</code></pre>
</div>
<script type="text/javascript">
	hljs.initHighlightingOnLoad();
</script>

<?php
	include_once('footer.php');
?>