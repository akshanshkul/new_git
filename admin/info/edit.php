<?php
include 'mydbcon.php';
if(count($_POST)>0) {
mysqli_query($dbCon,"UPDATE contact_form_info set name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', subject='" . $_POST['subject'] . "', comment='" . $_POST['comment'] ."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($dbCon,"SELECT * FROM contact_form_info WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="admin_info_data.php">All Data</a>
</div>
Id: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
 Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Email :<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
subject:<br>
<input type="text" name="subject" class="txtField" value="<?php echo $row['subject']; ?>">
<br>
Comment:<br>
<input type="text" name="comment" class="txtField" value="<?php echo $row['comment']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="submit-btn" onclick="checkValidations()">
	
</form>

</body>
</html>





