<?php
	require('header.php');
 ?>

  <!-- ======== Login ======= -->
  <main id="main">
	<br><br><br>
    <div id="LoginForm" align="center">
		<table>
		<h1> Login </h1>
		<form action="checklogin.php" target="_self" method="post">
			<label for="uname">Username: </label> &nbsp;
			<input type="text" name="uname" id="uname" required><br><br>
			<label for="password">Password: </label> &nbsp;
			<input type="password" name="password" id="password" required><br><br>
			<input type="submit" value="Submit">
		</form>
	</div>
	<br><br><br>
  </main><!-- End #main -->

 <?php
	require('footer.php');
 ?>