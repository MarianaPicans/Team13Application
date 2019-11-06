<?php
$userID = $_GET["userID"];
$comments = $_GET["comments"];
$stars = $_GET["stars"];
$anonymity = $_GET["anonymity"];

$link = mysql_connect("localhost", "root", "nohaXorsPlz");

if (!$link){
    die('Connect Error ('. mysql_error());
    }
$db_selected = mysql_select_db(DB_NAME, $link);
if(!$db_selected){
    die('Can not use ' . DB_NAME .': ' . mysql_error());
}
$query = mysql_query("insert into ratings values('$userID', '$comments', '$stars', '$anonymity')");
if(!$query){
    die('Error: ' .mysql_error());
}

mysql_close();

?>
