
<!DOCTYPE html>
<html>
<head>
	
</head>

<body>
	<p><center><h3>Delete Records From Database</h3></center></p>
	<table border="1" cellpadding="5" cellspacing="1">
		<tr>
			
			<th>Name</th>
			<th>Phone Number</th>	
			<th>Delete</th>
		</tr>


<?php
//connect to database
$link = mysqli_connect("localhost", "root", "", "di");
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$sql = "SELECT id,Name,Phonenumber FROM phonedirectory";

$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
    	echo"<tr>";
    	
        echo "<td> ". $row["Name"]. "</td>";
        echo "<td> ". $row["Phonenumber"]. "</td>";
        echo "<td><a href=delete.php?id=".$row['id'].">Delete</td>";

    }
} 
else 
{
    echo "0 results";
}
$link->close();
?>
</table>
<a href="#" onclick="location.href = document.referrer; return false;">Go Home</a>

</body>
</html> 
