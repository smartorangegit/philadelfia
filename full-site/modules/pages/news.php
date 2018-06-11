<?php   
$postnumbers=6;
$offset=0;

	$ReaNews =LoadingNews($postnumbers, $offset);
		
	$PAG=Pagination ($postnumbers, $offset,$ReaNews['num']);