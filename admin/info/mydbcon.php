<?php
    $hName='a2nlmysql53plsk.secureserver.net:3306';
    $uName='admin_contact';   
    $password='@Aksh7453969143'; 
    $dbName = "ph19341370931_contact-form";
    $dbCon = mysqli_connect($hName,$uName,$password,"$dbName");
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>