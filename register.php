			<script src='https://www.google.com/recaptcha/api.js'></script>
			<?php include "header.php";
			if (!isset($_SESSION)) {
				session_start();
			}
			if (isset($_SESSION['SESS_NAME']) != "") {
				header("Location: voter.php");
			}
			?>
			<br>
			<br>
			<div class="container">
			<div class="regbg">
			<center>
				<legend>
					<h3> Register </h3>
				</legend>
			</center>
			<?php global $nam;
			echo $nam; ?>
			<?php global $error;
			echo $error; ?>
			<center>
				<font size="4">
					<form action="reg_action.php" method="POST" id="myform" enctype="multipart/form-data">
				
<div class="container register-form">



						<div class="row ">
						
							<div class="col">
							<input type="text" class="form-control" name="firstname" value="" placeholder="first name" />
							</div>
							<div class="col">
							<input type="text" class="form-control" name="lastname" value="" placeholder=" last name" 		/>
							</div>
						</div>
						<div class="row">
						
							<div class="col">
							<input type="text" class="form-control" name="username" value="" placeholder=" user name" required/>
							</div>
							<div class="col">
							<input type="password" class="form-control" name="password" value="" placeholder="password"required />
							</div>
						</div>
						<div class="row">
						
							<div class="col">
								<input type="text" class="form-control" id="email" placeholder="enter State" name="state"required>
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="Enter city" name="city">
							</div>
						</div>
						<div class="row">
						
							<div class="col">
								<input type="number" class="form-control" id="email" maxlength="12" minlength="12" placeholder="Adhar Number" name="addhar" required>
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="Enter address" name="address" required>
							</div>
						</div>
						<div class="row">
						 <label for="">profile img</label>
								<input type="file" class="form-control" id="voterpiv" placeholder="Adhar card" name="voterpiv" >
							
							
						</div>
						<div class="row">
						 <label for="">Addhar pic</label>
						 
							<input type="file" class="form-control" name="addharpic" id="inputGroupFile01">
					
							
							
						</div>
						</div>
						<input type="submit" name="submit" value="Next" />
					</form>
				</font>
			</center>
			</div>
			</div>
			<script type="text/javascript">
				var frmvalidator = new Validator("myform");
				frmvalidator.addValidation("firstname", "req", "Please enter  firstname");
				frmvalidator.addValidation("firstname", "maxlen=50");
				frmvalidator.addValidation("lastname", "req", "Please enter  lastname");
				frmvalidator.addValidation("lastname", "maxlen=50");
				frmvalidator.addValidation("username", "req", "Please enter  username");
				frmvalidator.addValidation("username", "maxlen=50");
				frmvalidator.addValidation("password", "req", "Please enter  password");
				frmvalidator.addValidation("password", "minlen=6", "Password must not be less than 6 characters.");
				frmvalidator.addValidation("state", "req", "Please enter student state");
				frmvalidator.addValidation("state", "maxlen=50");
			</script>
			<?php include "footer.php"; ?>