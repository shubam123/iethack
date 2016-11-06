<?php session_start(); ?>
<?php require_once "../class/db.php"; 
	 $db=new Database;
	 $db->connect();

	$username = htmlspecialchars($_POST['username']);
	$password = md5(htmlspecialchars($_POST['password']));

	$username = mysqli_real_escape_string($db->connection, $username);
	$password = mysqli_real_escape_string($db->connection, $password);

	$query = " SELECT * FROM users WHERE (username = '$username' or email = '$username') and password = '$password' ";
	$select_user_query = $db->makequery($query) or die('Query failed!'.mysqli_error($db->connection));

	$num_rows = mysqli_num_rows($select_user_query);

	if($num_rows == 1)
	{	
		$row = mysqli_fetch_assoc($select_user_query);
			$id = $row['id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$username = $row['username'];
			$email = $row['email'];
			

			$_SESSION['uid'] = $id;
			$_SESSION['fname'] = $fname;
			$_SESSION['lname']=$lname;
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;

		 echo "
            <script type=\"text/javascript\">
			alert(\"Login successful!\");			
			window.location.href = '../index.php';
			</script>";

	}
	else
	{
		die("error");
		exit();
	}
?>
