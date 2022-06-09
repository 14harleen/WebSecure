<?php
	require('header.php');
 ?>

  <!-- ======== Login ======= -->
  <main id="main">
	<br><br><br>
    <?php
	ob_start(); // session management
 
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$errors = array();
	
	if (empty($username)) 
	{ array_push($errors, "Username required!"); }
	if (empty($password)) 
	{ array_push($errors, "Password required!"); }
		//Check the database (Check user information)
		//-------SQLi-------Use prepared statements along with escaped input
		//-------SQLi-------Check for only username instead of both username and password
		try{
		$sql = $connection->prepare("SELECT * FROM login WHERE username = :username;");
		$sql->bindParam(':username', $username, PDO::PARAM_STR);
		$sql->execute();
		$pass = $sql->fetch();
		$returnedpassword=$pass['password'];		
		if( ($sql->rowCount() == 1 && $password==$returnedpassword)){
			$_SESSION['username'] = $_POST['uname'];
		?>
		<br><br><h3 align="center" style="color:#000000"> Login Successful! Redirecting to Homepage. </h3> </div>
		<?php
		header("refresh:1; url=index.php ");
		}
		else {
		?>
		<h3 align="center" style="color:#000000"> Login Unsuccessful! Click <a href="login.php">here</a> to try again </h3>
		</div>
		<?php }
		}
		catch(PDOException $e){
			error_log($e->getMessage());
			die();
		}
		ob_end_flush();
		?>
	<br><br><br>
  </main><!-- End #main -->

  <?php
	require('footer.php');
 ?>