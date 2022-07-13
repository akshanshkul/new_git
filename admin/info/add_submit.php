<?php
if(count($_POST)>0)
{    
     include 'mydbCon.php';
     $name = $_POST['name'];
     $email= $_POST['email'];
     $subject= $_POST['subject'];
     $comment = $_POST['comment'];
 
     $query = "INSERT INTO contact_form_info (name,email,subject,comment)
     VALUES ('$name','$email','$subject','$comment')";
     mysqli_query($dbCon, $query);
     $lastId = mysqli_insert_id($dbCon);
 
     if (!empty($lastId)) {
        $message = "Your contact information is saved successfully";
     }
}
  header ("Location: admin_info_data.php");
?>