<?php session_start(); ?>
<?php require_once "../class/db.php"; 
	 $db=new Database;
	 $db->connect();

		$title = htmlspecialchars($_POST['title']);
		$desc = htmlspecialchars($_POST['description']);
		$buck_id = htmlspecialchars($_POST['buck_id']);
 	
		$title = mysqli_real_escape_string($db->connection, $title);
		$desc = mysqli_real_escape_string($db->connection, $desc);
		$buck_id = mysqli_real_escape_string($db->connection, $buck_id);

		$query = "UPDATE `bucket` SET `title`='$title',`description`='$desc' WHERE bucket_id=$buck_id";
		

		if($db->makequery($query))
		{
			 echo "
            <script type=\"text/javascript\">
			alert(\"Updated successfully!\");			
			window.location.href = '../dashboard.php';
			</script>";
		
		}
		else
		{
			die("query error" . mysqli_error($db->connection));
		}
	
?>

<?php $db->disconnect(); ?>