<html>
<head>
	
	
	</head>
	<body>
		<?php
if(isset($_POST[''])==true){
	

	$x=$_POST['n1'];
	$y=	$_POST['n2'];
$a=	$_POST['n3'];
	$b=$_POST['n4'];
$c=	$_POST['n5'];
		$x=$_POST['n6'];
$d=	$_POST['n7'];
	$e=	$_POST['n7'];
	$f=$_POST['n8'];
$g=	$_POST['n10'];
	$x=$_POST['n11'];
$h=	$_POST['n12'];
		$x=$_POST['n13'];
$l=	$_POST['14'];
	$m=$_POST['n15'];
	
	
		

echo $x+$y;
require_once("connection.php");
$r=mysql_query("insert into donor registeration values('$x','$y','$a','$b','$c','$d','$e','$f','$g','$h','$l','$m')");
if($r==true){
	
echo "saved";	
	
	
}	
else{
echo "not saved";	
}	
}
	

	
	?>
	<form action="insert.php" method="post" name="formcheck">
	Name<br>
	<input type="text" name="n1"/><br>
	Phone<br>
	<input type="text" name="n2"/><br><br>
		
	<input type="submit" value="saved"/>
		
		
		
		
		
		</form>
	
	</body>
</html>