<?php session_start(); ?>
<?php require_once "../class/db.php"; 
	 $db=new Database;
	 $db->connect();


$buck_id = (int)$_GET['buck_id'];
echo $buck_id;

$query = "DELETE FROM `bucket` WHERE `bucket_id`=$buck_id";
		

		if($db->makequery($query))
		{
			 echo "
            <script type=\"text/javascript\">
			alert(\"Deleted successfully!\");			
			window.location.href = '../dashboard.php';
			</script>";
		
		}
		else
		{
			die("query error" . mysqli_error($db->connection));
		}
	
?>

<?php $db->disconnect(); ?>