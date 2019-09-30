<?php
//connect Database
$link = mysqli_connect("localhost", "root", "", "di");
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security

// $ID = mysqli_real_escape_string($link, $_REQUEST['ID']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Phonenumber = mysqli_real_escape_string($link, $_REQUEST['Phonenumber']);
 
// Attempt insert query execution
echo "Database connected successfully<br>";
$sql = "INSERT INTO phonedirectory(Name,Phonenumber) VALUES ('$Name','$Phonenumber')";
if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";

} 
else
{
    echo "Record not added. " . mysqli_error($link);
}
 // Close connection
mysqli_close($link);
?>

<a href="#" onclick="location.href = document.referrer; return false;">Go Home</a>