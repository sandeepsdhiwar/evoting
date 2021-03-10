<?php
if(!isset($_SESSION)) { 
session_start();
}
$user=$_SESSION['SESS_NAME'];
include "auth.php";
include "header_voter.php";
include "connection.php";
?>

<?php
// $username = $_SESSION['SESS_NAME'];
// $query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
// if ($result = mysqli_query($con,$query)) {
// if (mysqli_num_rows($result) > 0) {
// $sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
// $row = mysqli_fetch_assoc($sql);
//         echo "You have voted for: " . " " . $row['voted'];
//     } else {
//         echo "You have not voted yet. Please submit your vote!";
//     }
// }
?>
<div class="container">
<div class="row">
    <div class="col-lg-12">

  



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
                            <div class="row">
                            <div class="col-lg-6">
                                
                                <label for="">First Name :-</label>
                                <input type="text" class="form-control" value="<?php echo "" . " ". $pro->firstname?>"></input>
                            </div>
                            <div class="col-lg-6">
                                
                                <label for="">user Name :-</label>
                                <input type="text" class="form-control" value="<?php echo "" . " ". $user?>"></input>
                            </div>
                            
                            
                            <div class="col-lg-6">
                                <label for="">Last Name :-</label>
                                <input type="text" class="form-control" value="<?php echo "" . " ". $pro->lastname?>"></input>
                            </div>

                                <div class="col-lg-6">
                                    <label for="">You Voted to :-</label>
                                    <input type="text" class="form-control" value="<?php if($pro->voted!=""){
                                        echo "" . " ". $pro->voted;
                                    }
                                    else
                                    echo 'not voted yet !please vote'
                                    
                                    ?>" placeholder="not voted yet!please vote"></input>
                                </div>


                            <div class="col-lg-6">
                                <label for="">State :-</label>
                                <input type="text" class="form-control" value="<?php echo "" . " ". $pro1->state?>"></input>
                            </div>
                            
                            
                            <div class="col-lg-6">
                                <label for="">City :-</label>
                                <input type="text" class="form-control" value="<?php echo "" . " ". $pro1->city?>"></input>
                            </div>
                                
                                <div class="col-lg-6">
                                    <label for="">Addhar number :-</label>
                                    <input type="text" class="form-control" value="<?php echo "" . " ". $pro1->addhar?>"></input>
                                </div>
                                
                                <div class="col-lg-6">
                                    <label for="">Address :-</label>
                                    <input type="text" class="form-control" value="<?php echo "" . " ". $pro1->address?>"></input>
                                </div>
                                <div class="col-lg-6">
                                <b> <label for="">Status :- <?php echo "" . " ". $pro->status?></label></b>
                                </div>
                            </div>
                 
                        </div>
                    </form>
                </div>
                </div>
                </div>
                </div>