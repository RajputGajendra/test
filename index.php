<?php 
include "app/config.php";
date_default_timezone_set('asia/calcutta');
$browser_t="web";
$split = explode("?",$page_name);
if ($page_name=='') {$index="active";
	include $browser_t.'/index.php';
	}
	
	elseif ($page_name=='index.php') {$index="active";
	include $browser_t.'/index.php';
	}
	
	
	elseif ($page_name=='error.html') {
	include $browser_t.'/404.php';	}
else
	{
		$index="active";
		include $browser_t.'/index.php';
	}
?>