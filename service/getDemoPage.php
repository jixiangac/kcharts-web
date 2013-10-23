<?php 
	include_once('db_conn.php');
	include_once('req.php');
	$id = paramGet('id');
	$page;
	function getPageById($id){
		$result = mysql_query("select * FROM tb_demoupload where id = '".$id."'");
		global $page;
		while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
			$page = $row;
		}
		return $page;
	}
	$page = getPageById($id);
?>