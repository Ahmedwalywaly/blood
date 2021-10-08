<html>

<head>
	
	
	
	
	</head>

<body>
	
<?php
			$server="localhost";
			$user="root";
			$password="";
			$database="bloodbank";
			$r=mysql_connect($server , $user , $password);
			if ($r==false)
				die("database connection error");
			$r=mysql_select_db($database);
			if($r==false)
				die("database name error");
	if($r==true)
	echo "done";	
	
	           
	
		?>	
	
	</body>