<?php      
    $host = "a2nlmysql53plsk.secureserver.net:3306";  
    $user = "admin_contact";  
    $password = '@Aksh7453969143';  
    $db_name = "ph19341370931_contact-form";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  echo "yes";
?>  