<?php
	//获取方法
	$method = isset($_GET['m']) && $_GET['m'];

	switch ($method) {
		case 'getDemoUrls':
			$chartType = isset($_GET['type']) ? $_GET['type'] : "linechart";
			$all_files = scandir("./demos/1.3/demo/".$chartType."/");
			
			$files = array_splice($all_files, 2);
			$__files = array();

			foreach ($files as $key => $value){
				// 仅读取php html文件
				if(strstr($value,".html") || strstr($value,".php")){
					  array_push($__files, $value);
				}
			}
			echo json_encode($__files);
			break;
		
		default:
			echo 'this is util';
			break;
	}
?>