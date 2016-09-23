<?php
//Remove request parameters:
$path = explode('/', $_SERVER['REQUEST_URI']);

if(empty($path[3])){
	$url="";
}
else{
	$url="../adj/";
}
?>