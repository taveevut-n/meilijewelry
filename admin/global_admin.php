<?php session_start();

	if(eregi("^C",$_SERVER['SCRIPT_FILENAME'])){
		$global_vars = array(
			"DB_HOST"		=>	"localhost",
			"DB_NAME"		=>	"meili_job",
			"DB_USER"		=>	"meili_job",
			"DB_PWD"		=>	"twe31219#",
			"ENDPOINT"		=>	""
		);
	}else{
		$global_vars = array(
			"DB_HOST"		=>	"localhost",
			"DB_NAME"		=>	"meili_job",
			"DB_USER"		=>	"meili_job",
			"DB_PWD"		=>	"twe31219#",
			"ENDPOINT"		=>	""
		);
	}

	include("inc/config.php");

	$db = @mysql_pconnect("localhost","meili_job","twe31219#");

	$db = new nDB();

	@mysql_query("SET NAMES 'utf8'");
	@mysql_query("SET character_set_results=utf8");
	@mysql_query("SET character_set_client=utf8");
	@mysql_query("SET character_set_connection=utf8");
	@include_once("language.php");
	@include_once("func/zabi_func.php");
	@include_once("func/zabi_page.php");

	$conn = mysql_connect("localhost","meili_job","twe31219#");
	mysql_select_db("meili_job",$conn);
	mysql_query("SET NAMES UTF8");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
	date_default_timezone_set('Asia/Bangkok');
?>