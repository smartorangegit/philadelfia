<?php session_start();

if( isset($_POST['width']) ){
	$_SESSION['screenWidth']	=	$_POST['width'] ;
	
require_once("Mobile-Detect/Mobile_Detect.php");
Global $detectMob;
$detect = new Mobile_Detect;
$detectMob=$detect->isMobile();

	if ($_SESSION['screenWidth']<=768 AND !$detectMob)  {	echo 1;	} else {	echo 0;	}
		
}

