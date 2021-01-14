<?php

include('../model/dbConnector.php');
$conn = getconnection();
$sql = "select * from users where usertype = 'user'";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	
<?php while($data = mysqli_fetch_assoc($res)){ ?>

			
		  <h2>  Name: <?=$data['uname']?><br>
				Email: <?=$data['email']?><br>
				Address: <?=$data['address']?><br>
				Number: <?=$data['contactno']?><br>
				Birth Date: <?=$data['dob']?><br>
		 </h2>
			
	<?php } ?>
	<h2>
<a href="../view/adminHome.php">Back</a>
</h2>
</table>
</body>
</html>