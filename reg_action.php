<?php
session_start();
$captcha = "" ;
include "connection.php"; 
if(isset($_POST['submit'])) {


	$filename = $_FILES['voterpiv']['name']; 
	$tempname = $_FILES['voterpiv']['tmp_name'];
	$newfilename=$_POST['firstname'].$filename;     
	$folder = 'voteimg/'.$newfilename;
	move_uploaded_file($tempname, $folder);
//   $folder = 'voteimg/'.$filename;
$adharname = $_FILES['addharpic']['name']; 
$adhartempname = $_FILES['addharpic']['tmp_name'];
$newadharname=$_POST['firstname'].$adharname;     
$folder = 'addharimg/'.$newadharname;
move_uploaded_file($adhartempname, $folder);
  
	
$name = mysqli_real_escape_string($con, $_POST['firstname']);
$name2 = mysqli_real_escape_string($con,$_POST['lastname']);
$name3 = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
$state = mysqli_real_escape_string($con,$_POST['state']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$addhar = mysqli_real_escape_string($con,$_POST['addhar']);
$address = mysqli_real_escape_string($con,$_POST['address']);
// $filename = mysqli_real_escape_string($con,$_POST['voterpiv']);



$sq = mysqli_query($con, 'SELECT username FROM loginusers WHERE username="'.$_POST['username'].'"');
$exist = mysqli_num_rows($sq);
	
		if($exist==1){
		$nam="<center><h4><font color='#FF0000'>The username already exist, peak another.</h4></center></font>";
		unset($username);
		include('register.php');
		exit();
		}
$sql = mysqli_query($con, 'INSERT INTO voters(firstname,lastname,username)
         VALUES("'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['username'].'")');
		 if (!$sql) { 
		 die (mysqli_error($con));
		 }
	 
$sql2 = mysqli_query($con, 'INSERT INTO loginusers(firstname,lastname,username,password,state,city,addhar,address,voterpiv,addharpic)
         VALUES("'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['username'].'","'.$_POST['password'].'","'.$_POST['state'].'","'.$_POST['city'].'","'.$_POST['addhar'].'","'.$_POST['address'].'","'.$newfilename.'","'.$newadharname.'")'); 


      
if (!$sql2) { 
	die (mysqli_error($con));
}
else {
	// echo ;
	echo '<script language="javascript">alert("Successfully Registered!");</script>';
	header("Location:login.php"); 
	
// echo "Successfully Registered!  <a href= 'login.php'>Clich here to Login </a>";
}
}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"register.php";
}
?>
