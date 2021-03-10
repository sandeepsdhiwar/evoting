<?php
if(!isset($_SESSION)) { 
session_start();
}
$user=$_SESSION['SESS_NAME'];
include "auth.php";
include "header_voter.php";
include "connection.php"; 
?>
<!-- <h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3> -->
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> What is your favorite political party? 
    </font></center><br>
    <div class="container" style="margin-left: 300px;">

        <input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" />
    </div><br>
<style>
.card-body{
    font-size: 24px;
    color: black;
}
.card-body input{
color: red;
}

</style>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>

<!-- card to vote -->
<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h3>bjp</h3>
                                <img src="bjp.png" alt=""><br>
                                <input type="radio" name="lan" value="BJP">BJP
                                
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                            <h3>CONGRESS</h3>
                                <img src="congress.png" alt=""><br>
                                <input type="radio" name="lan" value="CONGRESS">CONGRESS<BR>
                                
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                            <h3>AAP</h3>
                            <img src="aap.png" alt=""><br>
                            <input type="radio" name="lan" value="AAP">   AAP<BR>
                                
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                            <h3>NOTA</h3>
                            <img src="nota.jpg" alt=""><br>
                            <input type="radio" name="lan" value="NOTA">  NOTA<BR>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                            <h3>NIRDLIY</h3>
                            <img src="nirdaly.png" alt=""><br>
                            <input type="radio" name="lan" value="NIRDLIY">  NIRDLIY<BR>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
                
                </form>

                </div>
            
     
             <div class="col-lg-6">
                <div class="voterinfo">
                <?php
                        include "connection.php"; 

                        $sql=mysqli_query($con, 'SELECT voted,firstname,lastname,status from voters WHERE username="'.$_SESSION['SESS_NAME'].'"' );
                    $pro=mysqli_fetch_object($sql);
                    
                    $sql1=mysqli_query($con, 'SELECT state,city,addhar,address from loginusers WHERE username="'.$_SESSION['SESS_NAME'].'"' );
                    $pro1=mysqli_fetch_object($sql1);
                        
                        
                        ?>
                            <h2>Voter information</h2>
                    <form action="">
                        <div class="form-g">
                            
                            <label for="">First Name :-</label>
                            <input type="text" class="form-control" value="<?php echo "" . " ". $pro->firstname?>"></input>

                            <label for="">user Name :-</label>
                            <input type="text" class="form-control" value="<?php echo "" . " ". $user?>"></input>
                            
                            <label for="">Last Name :-</label>
                            <input type="text" class="form-control" value="<?php echo "" . " ". $pro->lastname?>"></input>
                            
                            <label for="">You Voted to :-</label>
                            <input type="text" class="form-control" value="<?php if($pro->voted!=""){
                                echo "" . " ". $pro->voted;
                            }
                                else
                                    echo 'not voted yet !please vote'
                                
                                ?>" placeholder="not voted yet!please vote"></input>

                            <label for="">State :-</label>
                            <input type="text" class="form-control" value="<?php echo "" . " ". $pro1->state?>"></input>

                            <label for="">City :-</label>
                            <input type="text" class="form-control" value="<?php echo "" . " ". $pro1->city?>"></input>

                            <label for="">Addhar number :-</label>
                            <input type="text" class="form-control" value="<?php echo "" . " ". $pro1->addhar?>"></input>

                            <label for="">Address :-</label>
                            <input type="text" class="form-control" value="<?php echo "" . " ". $pro1->address?>"></input>
                            
                            
                           <b> <label for="">Status :- <?php echo "" . " ". $pro->status?></label></b>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
 
    <?php include "footer.php"; ?>