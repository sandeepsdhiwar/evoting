<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<center><h3> Voting So Far  </h3></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
// if (mysqli_num_rows($member)== 0 ) {
// 	echo '<font color="red">No results found</font>';
// }
// else {
// 	echo '<center><table><tr bgcolor="#FF6600">
// <td width="30px">ID</td>		
// <td width="100px">LANGAUAGE</td>
// <td width="100px">ABOUT</td>
// <td width="30px">VOTE</td>
// </tr>';
// while($mb=mysqli_fetch_object($member))
// 		{	
// 			$id=$mb->lan_id;
// 			$name=$mb->fullname;
// 			$about=$mb->about;
// 			$vote=$mb->votecount;
// 			echo '<tr bgcolor="#BBBEFF">';
// 	echo '<td>'.$id.'</td>';		
// 	echo '<td>'.$name.'</td>';
// 	echo '<td>'.$about.'</td>';
// 	echo '<td>'.$vote.'</td>';
// 	echo "</tr>";
// 		}
// 		echo'</table></center>';
	// }
?>
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