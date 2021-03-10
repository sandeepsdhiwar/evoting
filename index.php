<?php include "header.php";
include "connection.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
   <style>
    .card{
        margin-bottom: 30px;

    }
    .card img{
        width: 150px;
        height: 150px;
    }
    .uppertext{
        font-size: 24px;
        color: red;
        text-shadow: 2px 2px 1px #fff;
        
    }
    </style>

<p style="background-color: white;"><center><legend><font color='#008000' size='12'>
<div class="uppertext">
This system allows all registered users to vote for their favorite POLITICAL PARTY.</p>
<p>In order to make a vote you have to register first and then login.
</div>
</font></legend></center>
    <p>&nbsp;&nbsp;</p>
<?php global $msg; echo $msg;?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h3>bjp</h3>
                                <img src="bjp.png" alt=""><br>
							<?php 
							$bjp= mysqli_query($con, 'SELECT votecount FROM languages where fullname="bjp"' );
                            $voteco=mysqli_fetch_object($bjp)
							
							?>
							<h3>total vote:- <?php echo $voteco->votecount ?></h3>
                              
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                            <h3>CONGRESS</h3>
                                <img src="congress.png" alt="">
                                <!-- <input type="radio" name="lan" value="CONGRESS">CONGRESS<BR> -->
								<?php 
							$bjp= mysqli_query($con, 'SELECT votecount FROM languages where fullname="congress"' );
                            $voteco=mysqli_fetch_object($bjp)
							
							?>
							<h3>total vote:- <?php echo $voteco->votecount ?></h3>
                                
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                            <h3>AAP</h3>
                            <img src="aap.png" alt="">
                            <!-- <input type="radio" name="lan" value="AAP">   AAP<BR> -->
							<?php 
							$bjp= mysqli_query($con, 'SELECT votecount FROM languages where fullname="Aap"' );
                            $voteco=mysqli_fetch_object($bjp)
							
							?>
							<h3>total vote:- <?php echo $voteco->votecount ?></h3>
                                
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                            <h3>NOTA</h3>
                            <img src="nota.jpg" alt="">
                            <!-- <input type="radio" name="lan" value="NOTA">  NOTA<BR> -->
							<?php 
							$bjp= mysqli_query($con, 'SELECT votecount FROM languages where fullname="NoTA"' );
                            $voteco=mysqli_fetch_object($bjp)
							
							?>
							<h3>total vote:- <?php echo $voteco->votecount ?></h3>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <div class="card-body text-center">
                            <h3>NIRDLIY</h3>
                            <img src="nirdaly.png" alt="">
                            <!-- <input type="radio" name="lan" value="NIRDLIY">  NIRDLIY<BR> -->
							<?php 
							$bjp= mysqli_query($con, 'SELECT votecount FROM languages where fullname="Nirdaly"' );
                            $voteco=mysqli_fetch_object($bjp)
							
							?>
							<h3>total vote:- <?php echo $voteco->votecount ?></h3>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <!-- <div class="col-lg-6">

            </div> -->
        </div>
    </div>


    <!-- footer -->

<?php include "footer.php";?>
