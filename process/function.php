<?php

	require_once "class/db.php"; 
	$db=new Database;
	$db->connect();

//user from bucket id
function ufrmbid($buck_id)
{
	$db=new Database;
	$db->connect();
	$query = "SELECT user_id FROM bucket WHERE bucket_id=$buck_id";
	$result = $db->makequery($query);
	$row = mysqli_fetch_assoc($result);
	return $row['user_id'];
}

//username from userid
function unmfrmuid($user_id)
{
	$db=new Database;
	$db->connect();
	$query = "SELECT username FROM users WHERE id=$user_id";
	$result = $db->makequery($query);
	$row = mysqli_fetch_assoc($result);
	return $row['username'];
}










?>