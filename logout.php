<?php
	require('header.php');
 ?>

  <!-- ======== Logout ======= -->
  <main id="main">
	<br><br><br>
    <?php 
			if($_SESSION){
				session_destroy();
				header("Location: index.php ");
			}
		?>
	<br><br><br>
  </main><!-- End #main -->

<?php
	require('footer.php');
 ?>