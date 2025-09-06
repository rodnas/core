<?php
//if (version_compare(phpversion(), '5.3.10', '>'))
//	{
	echo 'Current PHP version: '.phpversion().'<br>';
	error_reporting(-1);
//	}
//die();
ini_set('display_errors',-1);

ob_start();
if (!DEFINED('runOK')) define('runOK',true);
$config=Array();
$config["startPageTime"]=microtime(true);
$config["siteName"] = "mysys";
$sessionID = session_id();
if(empty($sessionID)) {
	session_id($config["siteName"]);
	session_start();
}

require(__DIR__ . "/../../core/admin/config/config.php");
include __DIR__ . "/config/config.php";
include __DIR__ . "/config/database.php";
$config["dbConnect"] = new PDO($config["configShare"]["databaseType"].':host='.$config["configShare"]["databaseServer"].';dbname='.$config["configShare"]["databaseSelect"], $config["configShare"]["databaseUser"], $config["configShare"]["databasePassword"]);
$setNames=$config["dbConnect"]->prepare($config["configShare"]["setNames"]);
$setNames->execute();
echo "<pre>";
echo print_r($config);
die();
include "../core/admin/index.php";
?>