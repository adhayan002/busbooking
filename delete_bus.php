<?php

include('db_connect.php');
extract($_POST);
$remove = $conn->query("DELETE FROM bus where id =".$id);
if($remove)
	echo 1;
?>