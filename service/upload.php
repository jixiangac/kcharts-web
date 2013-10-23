<?php 

	include_once('db_conn.php');
	include_once('req.php');
	$nick = paramPost('nick');
	$title = paramPost('title');
	$code = addslashes(paramPost('code'));
	$link = paramPost('link');
	$catname = paramPost('catname');
	// 新增demo
	function addDemo($nick,$title,$link,$catname,$code){
		$sql = "INSERT INTO tb_demoupload (nick,title,link,time,catname,code) VALUES ('".$nick."','".$title."','".$link."',now(),'".$catname."','".$code."')";
		// echo $sql;
		$result = mysql_query($sql);
		return mysql_insert_id();
	}
	//上传
	if(addDemo($nick,$title,$link,$catname,$code)){
		header("location:../upload_success.php");
	}else{
		header("location:../upload_fail.php");
	}
?>