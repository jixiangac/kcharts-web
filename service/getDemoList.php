<?php 
include_once('db_conn.php');
include_once('req.php');
	$pagesize = 10;
	$page = paramGet('page') ? paramGet('page') : 1;
	$totalPage;
	$catname = paramGet('cat') ? paramGet('cat') : "";
	$wheresql = "";
	if($catname){
		$wheresql = " where catname = '".$catname."' ";
	}

	function findListByPage($page){
		global $pagesize;
		global $totalPage;
		global $wheresql;
		$total = mysql_query("select COUNT(*) as total FROM tb_demoupload".$wheresql);
		$totalNum = 0;
		while($row = mysql_fetch_array($total,MYSQL_ASSOC)){
			$totalNum = $row['total'];
		}
		$totalPage = ceil($totalNum/$pagesize);
		$page = ($page <= 0 || $page > $totalPage) ? 1 : $page;
		$result = mysql_query("SELECT * FROM tb_demoupload ".$wheresql." order by time desc limit ".($page-1) * $pagesize.",".$pagesize);
		$list = array();
		while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
			array_push($list, $row);
		}
		return $list;
	}

	$demolist = findListByPage($page);
?>