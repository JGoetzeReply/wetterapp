<?php
/**
 * Created by PhpStorm.
 * User: jensgoetze
 * Date: 21.08.17
 * Time: 14:30
 */



$apikey = "2f64cae0b27f72ac6fb12d363a0386c0";
//$apiurl = "http://api.openweathermap.org/data/2.5/forecast?&APPID=";
$apiurl = "http://api.openweathermap.org/data/2.5/weather?&APPID=";


$get["city"] = "Berlin";
$get["country"] = "de";

//$username = "testnachricht";
//$username2 = "testnachricht2";
//
//$html = file_get_contents("template.html"); // opens template.html
//$html = str_replace("{{username}}", $username, $html); // replaces placeholder with $username
//$html = str_replace("{{username2}}", $username2, $html); // replaces placeholder with $username
//
//echo $html;

if ((isset($get["city"]) && $get["city"] !== "") && (isset($get["country"]) && $get["country"] !== ""))  {
	$url = $apiurl . $apikey . "&q=" . $get["city"] . "," . $get["country"] . "&units=metric";
}

