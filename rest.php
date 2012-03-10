<?php
		$arr = array();
		$x = date("Y");
		for($i=0;$i<50;$i++){
						
						$arr[$i]["Results"] = array($x+$i,rand(1,100));
		}
		echo json_encode($arr);

?>
