<?php
	require('header.php');
 ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to Secure</h1>
      <h2>This is the application to demonstrate safe coding practices preventing SQL injection and XSS attacks</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Instructions</h3>
            <p class="fst-italic">
              To execute SQL injection attack: Go to Login
			  To execute XSS attack: Go to 'Submit a testimonial' section available in the footer
			  <br> <br>
			  Note: The 'Submit a testimonial' section is only available after login
            </p>
            <p>
              The login details are attached in the github repository as well as the email.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
	
	<!-- ======= Testimonials Section to demonstrate XSS Attack======= -->
    <section id="testimonial" class="testimonial">
      <div class="container">
		<div class="section-title"> <h2>Testimonials</h2> </div>
        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
			<?php
				$sql = "SELECT name,testimonial FROM testimonials";
				$result = $connection->prepare($sql);
				$result->execute();
				$rows = $result->fetchAll();
				if(count($rows) >= 1){
					foreach($rows as $row){
						echo htmlentities($row['name']).": ".htmlentities($row['testimonial']); ?><br><br><?php
					}
				}
				else{
					echo "No testimonials yet";
				}
			?>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
	
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php
	require('footer.php');
 ?>
