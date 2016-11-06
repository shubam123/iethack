
<?php session_start(); ?>
<?php

	
?>




<?php 
	require_once "../class/db.php";
    $db=new Database;
    $db->connect();

    $buck_id = $_POST['buckid'];
    $user_id = $_SESSION['uid'];
    $username = $_SESSION['username'];
    $comment = $_POST['comment'];


	$query = "INSERT INTO `comments`(`cmid`, `buckid`, `userid`, `username`, `comment`) VALUES (NULL,$buck_id,$user_id,'$username','$comment')";
		

	if($db->makeQuery($query))
	{		

		echo "
            <script type=\"text/javascript\">
			alert(\"Comment successful!\");			
			window.location.href = '../bucket.php?buck_id=$buck_id';
			</script>";


	}

	else
	{
		die("query error" . mysqli_error($db->connection));
	}


?>
