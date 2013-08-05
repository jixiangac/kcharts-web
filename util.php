<?php
	//获取方法
	$method = isset($_GET['m']) && $_GET['m'];

	switch ($method) {
		case 'getDemoUrls':
			$chartType = isset($_GET['type']) ? $_GET['type'] : "linechart";
			// $all_files = scandir("../gallery/kcharts/1.1/demo/".$chartType."/");
			$fp = fsockopen("gallery.kissyui.com",80);
			print_r($fp);
			$file="GET  /xssh/kcharts/1.1/demo/\nHost:gallery.kissyui.com\n\n";  
		    fputs($fp,$file);  
		     while(!feof($fp)){
		     	echo  fgets($fp,100);
		     }  
              fclose($fp);  
			// $files = array_splice($all_files, 2);
			// $__files = array();

			// foreach ($files as $key => $value){
			// 	// 仅读取php html文件
			// 	if(strstr($value,".html") || strstr($value,".php")){
			// 		  array_push($__files, $value);
			// 	}
			// }
			// echo json_encode($__files);
			break;
		
		default:
			echo 'this is util';
			break;
	}
?>