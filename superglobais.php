<?php
// Super Globais
/*

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/

$x = 10;
$y = 15;

function soma(){
	echo $x + $y."<br>"; // Não consegue acessar o valor das váriaveis x e y
	echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();

echo "<hr>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

echo "<hr>";
