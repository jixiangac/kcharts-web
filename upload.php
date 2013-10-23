<?php 
	include_once('header.php');

?>
<link rel="stylesheet" href="js/codemirror-3.19/lib/codemirror.css">
<link rel="stylesheet" href="js/codemirror-3.19/theme/monokai.css">
<script src="js/codemirror-3.19/lib/codemirror.js"></script>
<script src="js/codemirror-3.19/mode/javascript/javascript.js"></script>
<style>
table{
	width: 1000px;
	margin:10px auto;
}
table td{
	height: 40px;
	padding: 3px 0px;
}
table td .txt{
	padding: 4px 5px;
	border:1px solid #ccc;
}
table td .title,table td .link{
	width: 460px;
}
table td .nick{width: 100px;}
.code{
	/*display: block;*/
	/*width: 800px;*/
	/*margin:0px auto;*/
	min-height: 300px;
	border:1px solid #ccc;
}
.submit{
	width: 80px;
	height: 30px;
}
</style>
<form id="J_form" action="service/upload.php" method="post" enctype="multipart/form-data">
<table>
	<tbody valign="top">
	<tr>
		<td>demo标题：</td>
		<td><input type="text" class="txt title" value="" data-valid="{}" name="title" placeholder="please enter a title"></td>
	</tr>
	<tr>
		<td>上传者：</td>
		<td><input type="text" class="txt nick" value="" data-valid="{}" name="nick" placeholder="jack"></td>
	</tr>
	<tr>
		<td>分类：</td>
		<td>
			<select name="catname">
				<option>折线图</option>				
				<option>柱状图</option>
				<option>饼图</option>
				<option>其他</option>
			</select>
		</td>
	</tr>
	<!-- <tr>
		<td>demo链接：</td>
		<td>
			<input type="text" class="txt link"  value="" name="link" >
		</td>
	</tr> -->
	<tr>
		<td>源码：</td>
		<td>
			<textarea name="code" id="code" class="code" data-valid="{}">//代码粘贴至此		
			</textarea>
		</td>
	</tr>
	<tr><td colspan="2" style="text-align:center">
		<input class="submit" id="J_Submit" type="button" value="提交">
	</td></tr>
</tbody>
</table>
</form>
<script type="text/javascript">
KISSY.use("gallery/validation/1.1/",function(S,Validation){
 	var $ = S.all;
 	var form = new Validation('#J_form',{
        style:'under'
    });
 	var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
	    lineNumbers: true,
	    styleActiveLine: true,
	    matchBrackets: true
	  });
 	editor.setOption("theme","monokai");
 	$("#J_Submit").on('click',function(){
 		if(form.isValid()){
 			$("#J_form")[0].submit();
 		}
 	})
    
 
});
</script>
<?php
	include_once('footer.php');
?>