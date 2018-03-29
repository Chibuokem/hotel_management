<?php
require_once("connection.php");

$createtable="create table if not exists 
guests(id int(11) 
auto_increment, 
primary key(id),
name varchar(225),
email varchar(225),
phone varchar(225),
address varchar(225),
country varchar(225),
password varchar(225),
payment_method varchar(225))";
   
$sql = $db->query($createtable) or die($db->error);
if(isset($sql)){
	echo "guest table creation successful.<br/>";
}
else{
	echo"guest table was not created.<br/>";}

?>