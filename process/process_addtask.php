<?php session_start(); ?>
<?php require_once "../class/db.php"; 
	 $db=new Database;
	 $db->connect();

		$title = htmlspecialchars($_POST['title']);
		$date = htmlspecialchars($_POST['date']);
		$desc = htmlspecialchars($_POST['desc']);
		
		$buck_id = htmlspecialchars($_POST['buck_id']);
	
		$title = mysqli_real_escape_string($db->connection, $title);
		$date = mysqli_real_escape_string($db->connection, $date);
		$desc = mysqli_real_escape_string($db->connection, $desc);
		
		$buck_id = mysqli_real_escape_string($db->connection, $buck_id);

		$query = "INSERT INTO `tasks`(`buckid`, `taskid`, `tasktitle`, `taskdescription`, `taskdate`) VALUES ($buck_id,NULL,'$title','$desc','$date')";

		if($db->makequery($query))
		{
		 echo "
            <script type=\"text/javascript\">
			alert(\"Task successfully added!\");
			window.location.reload(history.go(-1));
			</script>";
		}
		else
		{
			die("query error" . mysqli_error($db->connection));
		}
	
?>

<?php $db->disconnect(); ?>