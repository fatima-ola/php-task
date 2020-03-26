<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Page</title>
</head>
<body>
		<h1>Thank you for submitting</<h1>
    	<p>Here is the information you have submitted:</p>
    <ol>
        <li><em>First Name:</em> <?php echo $_POST["fname"]?></li>
        <li><em>Last Name:</em> <?php echo $_POST["lname"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Department:</em> <?php echo $_POST["department"]?></li>
        <li><em>Gender:</em> <?php echo $_POST["gender"]?></li>
        <li><em>Message:</em> <?php echo $_POST["message"]?></li>
    </ol>

</body>
</html>








