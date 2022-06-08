<?php 


ini_set('display_errors', 1);
// Atau
error_reporting(E_ALL && ~E_NOTICE);
	$data=array(1,2,3,4);
	$hit=count($data);
	for ($i=$hit; 0 <= $i; $i--) { 

		echo $data[$i];

	}
	// error_reporting();
 ?>