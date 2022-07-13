<?php
if(count($_POST)>0)
{    
     include 'mydbcon.php';
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

include('smtp/PHPMailerAutoload.php');
echo smtp_mailer($email,'Contact Us','Thanks To connect Us');
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug=3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "smtpout.secureserver.net";
	$mail->Port = "465"; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "noreply@sidmus.com";
	$mail->Password = 'sidmus123';
	$mail->SetFrom("noreply@sidmus.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		echo 'Sent';
	}
}
  header ("Location:contact.html");
?>