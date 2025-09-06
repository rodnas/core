<?php
$config["bannerROOT"]="../docroot/core_advert/";
$config["bannerDrROOT"]="../docroot/nocore_doctor_advert/";
$config["systemROOT"]="../";

$config["configShare"]["baseModul"] = "index.php?modulSelect=video&modulAction=list&videocmd=resetall";
$config["configShare"]["homeModul"] = "video";
// old
$config["configShare"]["serviceMenuCFG"] = "";
$config["configShare"]["javascriptCFG"] = "wysiwyg";
$config["configShare"]["cssCFG"] = array("css/wysiwyg.css","css/jquery.ui.all.css","css/demos.css");
$config["configShare"]["inputCFG"] = "css/wysiwyg.css<#>css/jquery.ui.all.css<#>css/demos.css<#>";
$config["configShare"]["listFilterCFG"] = "optionSelectShare<=>core_users<=>s_insertUserID<=>id<=>nickname<=><=>150<=>searchFilterNum<#>";
$config["configShare"]["relatedTablesCFG"] = "";

$config["configShare"]["topMenuItemCFG"] =
	"video<subMenu><#>
	health<subMenu>health<=>recipe<=>recipetopic<=>training<=>training_topic<=>medicine<=>medicine_topic<=>bloodpressure<#>
	admin<subMenu>admin<=>core_users<=>core_userstitle<=>core_groups<=>core_groups_rights<=>core_configs<=>core_config<=>core_language<=>core_themes<#>
	core_support<subMenu>core_support<=>core_support<=>core_support_action<=>core_support_topic<=>core_support_type<=>core_support_status<#>
	core_messagewall<subMenu><#>";
// new
$config["configShare"]["serviceMenu"] = array();
$config["configShare"]["javascript"] = array("wysiwyg");
$config["configShare"]["css"] = array("css/wysiwyg.css","css/jquery.ui.all.css","css/demos.css");
$config["configShare"]["input"] = array();
$config["configShare"]["listFilter"] = array("optionSelectShare","core_users","s_insertUserID","id","nickname","","150","searchFilterNum");
$config["configShare"]["relatedTables"] = array();

$config["configShare"]["topMenuItem"] = array(
	array("video"=>1),
	array("health"=>
		array("health","recipe","recipetopic","training","training_topic","medicine","medicine_topic","bloodpressure")
	),
	array("admin"=>
		array("admin","core_users","core_userstitle","core_groups","core_groups_rights","core_configs","core_config","core_language","core_themes")
	),
	array("core_support"=>
		array("core_support","core_support","core_support_action","core_support_topic","core_support_type","core_support_status")
	),
	array("core_messagewall"=>1)
);

?>