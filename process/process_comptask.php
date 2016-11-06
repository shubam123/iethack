<?php session_start(); ?>
<?php require_once "../class/db.php"; 
	 $db=new Database;
	 $db->connect();

	 $buck_id = $_GET['buck_id'];
	 $task_id = $_GET['task_id'];

	 $query = "UPDATE `tasks` SET `status`=1 WHERE taskid=$task_id";
	 if($db->makequery($query))
	 {
	 	echo "
		 	<script type=\"text/javascript\">
			alert(\"Task Completed!\");
			window.location.href = '../bucket.php?buck_id=$buck_id';
			</script>";
	 }
	else
	{
		die("query error" . mysqli_error($db->connection));
	}
	
?>

<?php $db->disconnect(); ?>