<?php session_start(); ?>
<?php require_once "../class/db.php"; 
	 $db=new Database;
	 $db->connect();

	 if(!isset($_POST['secur']))
	 {
	 	$secur = 0;
	 }
	 else
	 {
	 	$secur=1;
	 }


		$title = htmlspecialchars($_POST['title']);
		$desc = htmlspecialchars($_POST['description']);
	
		$title = mysqli_real_escape_string($db->connection, $title);
		$desc = mysqli_real_escape_string($db->connection, $desc);
		$uid = $_SESSION['uid'];

	$query = "INSERT INTO `bucket`(`user_id`, `bucket_id`, `title`, `description`,`secur`) VALUES ($uid,NULL,'$title','$desc', '$secur')";
		if($db->makequery($query))
		{
		 echo "
            <script type=\"text/javascript\">
			alert(\"Created successfully!\");			
			window.location.href = '../dashboard.php';
			</script>";
		}
		else
		{
			die("query error" . mysqli_error($db->connection));
		}
	
?>

<?php $db->disconnect(); ?>