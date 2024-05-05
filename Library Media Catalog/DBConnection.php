<!--?php
$con = mysqli_connect("127.0.0.1", "root", "librarymediacatalog");
?-->




<!--?php

	$hostname = "localhost";
	$username = "username";
	$password = "password";
	$DBname = "librarymediacatalog";
	
	// Create connection
	$con = new mysqli($hostname, $username, $password);
	
	// Check connection
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}
	echo "Connected successfully";

		
	//Constructor
	function __construct($host = NULL, $uid = NULL, $pw = NULL, $db = NULL)
	{
			$this->hostname = $host;
			$this->username = $uid;
			$this->password = $pw;
			$this->DBname = $db;
			
	//Connect to database
	$this->Con = mysqli_connect($host, $uid, $pw, $db);
		if(mysqli_connect_errno())
		{
			echo "Failed to connect" . mysqli_connect_error();
		}
		else
			echo "Successful Connection<br />";
		}	
		
	//Destructor
	function __destruct()
	{
		
	//Close connection
		mysqli_close($conn);
	}

?-->