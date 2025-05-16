<?php
	function getHttpVar ($pname, $def_val = "", $vtype = "string") {
		$val = $def_val;
		if (isset($_POST[$pname]))
			$val = $_POST[$pname];
		else if (isset($_GET[$pname]))
			$val = $_GET[$pname];
		
		if($vtype != "string") {
			switch($vtype) {
				case "int":
					$val = intval($val);
					break;
				case "float":
					$val = floatval($val);
					break;
				
			}
		}
		
		return $val;
	}
	
	function updGet($name, $value) {
    $params = $_GET;
    unset($params[$name]);
    $params[$name] = $value;
    return basename($_SERVER['PHP_SELF']).'?'.http_build_query($params);
}