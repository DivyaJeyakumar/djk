<?php
//connect to database
$link = mysqli_connect("localhost", "root", "", "di");
//check connection

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$id=$_GET['id'];
$sql="DELETE FROM phonedirectory WHERE id='$id'";

if(mysqli_query($link,$sql))
	
{

	header("refresh:1;url=index.php");
}
else
{
	echo"Not Deleted";
}

?>
<a href="#" onclick="location.href = document.referrer; return false;">Go Home</a>
