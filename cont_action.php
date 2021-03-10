<?php
include "connection.php"; 
if(isset($_POST['submit1'])){
 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    // echo $name,$email,$phone,$message;
    // exit();
    
$sql = mysqli_query($con, 'INSERT INTO contactus(name,email,phone,message)
VALUES("'.$_POST['name'].'","'.$_POST['email'].'","'.$_POST['phone'].'","'.$_POST['message'].'")');


 if (!$sql) { 
	die (mysqli_error($con));
 
}
else {
	// echo ;
	echo '<script language="javascript">alert("your query has been send!");</script>';
    header('location:'.$_SERVER['HTTP_REFERER']);

	
// echo "Successfully Registered!  <a href= 'login.php'>Clich here to Login </a>";
}   
    
}


?>
