<?php


$host = getenv("POSTGRES_SERVICE_HOST");
$port = getenv("POSTGRES_SERVICE_PORT");
$user = getenv("databaseuser");
$pass = getenv("databasepassword");
$db =   getenv("databasename");

$con=postgresi_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".postgres_error());

}
else
{
	//echo("Connected");
}






?>
