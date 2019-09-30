<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheeet.css">
</head>
<body>
	<h1><center>PHONE DIRECTORY</center></h1>
<div id="start">
	<form action="page.php" method="POST">
		
	    Name:</n><input type="text" id="Name" name="Name"  placeholder="Your Name.."
		pattern="[A-Za-z]{0-20}" title="Enter a valid value.." required></br><br>
		<p>Phone Number :</p>
		<p><input type="tel" id="Phonenumber" name="Phonenumber"
		placeholder="Your Phonenumber.." pattern="[0-9]{10}" title="Enter a valid number with ten digit.."size="6" required></br>
		<p><input type="Submit" id="btn" value="Submit">
		
	</form>
	<form action="insert.php" method="POST">
		<input type="Submit" id="btn" value="Fetch Entries"></button></p>
	</form>
</div>
</body>
</html>