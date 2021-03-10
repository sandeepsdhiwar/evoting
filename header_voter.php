<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<script src="jscript/validation.js" type="text/javascript"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    .card{
        margin-bottom: 30px;

    }
    .card img{
        width: 150px;
        height: 150px;
    }
.register-form .form-control{
     margin-bottom: 15px;
 }

 .navul{
    list-style: none;
    margin-top: 20px;

}
body{
    background-color: lightsteelblue ;
}
.logo, .leftitem {
    margin-top: 20px;
}.navigations{
    margin-top: 20px;   
}
.navul li{
float: left;
padding-right: 10px;
font-size: 20px;
}
.navbar-expand-sm{
    height: 130px;
}
.maincontant{
    margin-top: 10px;
}
.leftitem{
    float: right;
}
.navtext{
    font-family:Verdana, Geneva, Tahoma, sans-serif ;
    margin-top: -11px;
}

.voterinfo input{
    margin-bottom: 15px;
    
}
.changepwd input
{
    padding: 15px;
}
.navigations a{
    margin-bottom: 10px;
}

 
    </style>
</head>

<body bgcolor="#EBE9E9">

<!-- <center><font size='6' >
<a href="voter.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="lan_view.php">Vote Results</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="profile.php">Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php">Logout</a>
&nbsp;&nbsp;|&nbsp;&nbsp;<a href="change_pass.php">Change Password</a>
</font></center>  -->

<nav class="navbar-expand-sm bg-light">

<div class="container-fluid">
    <div class="row ">
        <div class="col-md-2">
            <div class="logo">
                    <center>
<?php 
include "connection.php"; 
if(!isset($_SESSION)) { 
session_start();
}
$user=$_SESSION['SESS_NAME'];
$pic=mysqli_query($con,'select voterpiv,addharpic from loginusers where username="'.$user.'" ');
$pro=mysqli_fetch_object($pic);
?>
                        <p> <span><a href="index.php">
                            <img src="evote.png" style="width:110px; height:80px;" alt=""><br>
                
                        </a>
                        <div class="navtext">
                        </span>Evotinng </p>
                        </div>
                    </center>
            </div>
        </div>
    
        <div class="col-md-5">
            <div class="navigations">

                <a href="voter.php"  class="btn btn-success" >Home</a>
                <a href="lan_view.php"  class="btn btn-primary" >Vote Results</a>
                <a href="profile.php"  class="btn btn-success" >Profile</a>
                <a href="change_pass.php"  class="btn btn-success" >Change Password</a>
                <a href="logout.php"  class="btn btn-success" >Logout</a>
                <a href="#aboutsecrion"  class="btn btn-success" >About US</a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="leftitem">

<?php
if(!isset($_SESSION)) { 
session_start();
}

?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="logo">
                    <center>

                        <p> <span><a href="">
                            <img src="voteimg/<?php echo $pro->voterpiv?>" style="width:110px; height:80px;" alt="">
                            <img src="addharimg/<?php echo $pro->addharpic?>" style="width:110px; height:80px;" alt=""><br>
                        </a>
                    
                       
                    </center>
            </div>
    </div>
</div>

</nav>


</body>
</html>
