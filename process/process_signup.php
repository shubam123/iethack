<?php session_start(); ?>
<?php require_once "../class/db.php"; 
	 $db=new Database;
	 $db->connect();

		$fname = htmlspecialchars($_POST['fname']);
		$lname = htmlspecialchars($_POST['lname']);
		$username = htmlspecialchars($_POST['username']);
		$password = md5(htmlspecialchars($_POST['password']));
		$email = htmlspecialchars($_POST['email']);

		$fname = mysqli_real_escape_string($db->connection, $fname);
		$lname = mysqli_real_escape_string($db->connection, $lname);
		$username = mysqli_real_escape_string($db->connection, $username);
		$password = mysqli_real_escape_string($db->connection, $password);
		$email = mysqli_real_escape_string($db->connection, $email);

	$query = "INSERT INTO `users`(`id`, `fname`, `lname`, `username`, `password`,`email`) VALUES (NULL,'$fname','$lname','$username','$password','$email')";
		if($db->makequery($query))
		{
		echo "
            <script type=\"text/javascript\">
			alert(\"Acount created successfully!\");			
			window.location.href = '../index.php';
			</script>";
		}
		else
		{
			die("query error" . mysqli_error($db->connection));
		}
	
?>

<?php $db->disconnect(); ?>