<?php
	require('header.php');
 ?>

  <!-- ======== Processing the Testimonial ======= -->
  <main id="main">
	<br><br><br>
    <?php 
			$name = $_POST['name'];
			$test = $_POST['testimonial'];
			$errors = array();
			if (empty($name)) 
			{ array_push($errors, "Name required!"); }
			if (empty($test)) 
			{ array_push($errors, "Testimonial required!"); }
			
			//print_r(count($errors));
			
			if (count($errors) == 0) {
				$sql = "INSERT INTO testimonials VALUES ('$name','$test')";
				$post = $connection->prepare($sql);
				if ($post->execute() === TRUE) {
					echo "<h3 align='center'>Testimonial submitted</h3>";
				} else { 	
					echo "<h3 align='center'>Oops! Something went wrong</h3>";
					error_log($connection->error);
				}
			}
			else{
				echo "<h3 align='center'>Oops! Something went wrong</h3>";
			}
		?>
	<br><br><br>
  </main><!-- End #main -->

  <?php
	require('footer.php');
 ?>