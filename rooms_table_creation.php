<?php
require_once("connection.php");

$createtable="create table if not exists 
rooms(id int(11) 
auto_increment, 
primary key(id),
status varchar(225),
price varchar(225),
picture varchar(225))";
   
$sql = $db->query($createtable) or die($db->error);
if(isset($sql)){
	echo "rooms table creation successful.<br/>";
}
else{
	echo"rooms table was not created.<br/>";}

?>