<?php  /*All function*/ require_once('function.php');  
LangAdd();
if ($_POST['data']) {
	$str=substr($_POST['data'], 1, -1);

	if (isset($str)) { 	$a=array('title'=>$mes[$str.'-title']);	}
		echo json_encode($a);
}
	