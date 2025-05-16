<?php
	include "inc/init-inc.php";
	
	$page = getHttpVar("p", "index");
	$page_view = "";
	
	switch ($page) {
		case "index":
			include "pages/index.php";
			break;
		case "calc":
			include "pages/calc.php";
			break;
		case "countdown":
			include "pages/countdown.php";
			break;
		case "variables":
			include "pages/variables.php";
			break;
		case "fmanager":
			include "pages/fmanager.php";
			break;	
		case "xmlparser":
			include "pages/xmlparser.php";
			break;	
		default:
			header("HTTP/1.1 404 NOT FOUND");
			exit();
	}
	
	include "inc/header.php";
	
	switch ($page_view) {
		case "index":
			include "views/index.php";
			break;
		case "calc":
			include "views/calc.php";
			break;
		case "variables":
			include "views/variables.php";
			break;
		case "fmanager":
			include "views/fmanager.php";
			break;
		case "xmlparser":
			include "views/xmlparser.php";
			break;
		case "countdown":
			include "views/countdown.php";
			break;
	} 
	
	include "inc/footer.php";