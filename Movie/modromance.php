<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}

$path =ROOT."/Movie/romance.php";//mac dinh
$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	$ac = isset($_GET["ac"])?$_GET["ac"]:"";
	if ($ac == "detailromance")
	{
		$path = ROOT."/Movie/detailromance.php";
	}
	include $path;
