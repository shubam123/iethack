<?php //it will connect to the database ?>
<?php
	class Database
	{
		public $host;
		public $user;
		public $password;
		public $database;
		public $connection;
		public $id;
		public $id_no;
		public $row;
		function __construct()
		{
			$this->host="localhost";
			$this->user="root";
			$this->password="1q2w3e";
			$this->database="iet_bucket";
		}

		//function to connect to database	
		function connect()
		{
			$this->connection=mysqli_connect($this->host,$this->user,$this->password,$this->database) or die("Server problem" . mysqli_error($this->connection));
			//mysql_select_db() or die(mysql_error());
		}

		//function to insert data in database
		function makeQuery($insertQuery)
		{
			return mysqli_query($this->connection,$insertQuery);
		}
		


		function disconnect()
		{
			mysqli_close($this->connection);
		}
	}
	 
?>
