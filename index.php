<!DOCTYPE html>
<html lang='en-us'>
	<!-- start head -->
	<head>
		<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0' />
			<!-- title -->
			<title>Melony Smith Portfolio :: Web Design &amp; Development</title>
			<!-- font -->
			<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css' />
			<!-- CSS -->
			<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
			<link rel='stylesheet' type='text/css' href='css/font-awesome.css' />
			<link rel='stylesheet' type='text/css' href='css/style.css' />
			<link rel='stylesheet' type='text/css' href='css/projects.css' />

		</head>
		<!-- start body -->
		<body>
			<a name="top"></a>
			<!-- home -->
			<div class='jumbotron home home-fullscreen' id='home'>
				<div class='mask'></div>
				<!-- logo -->
				<a href='http://www.melonysmith.net' class='logo'>
					<img src='img/logo.png' alt='Melony Smith Design &amp; Development'>
					</a>
					<!-- hamburger -->
					<a href='' class='menu-toggle' id='nav-expander'>
						<i class='fa fa-bars'></i>
					</a>
					<!-- menu -->
					<nav class='menu'>
						<a href='' class='close'>
							<i class='fa fa-close'></i>
						</a>
						<h3>Menu</h3>
						<!-- menu: nav -->
						<ul class='nav'>
							<li>
								<a data-scroll href='#home'>Home</a>
							</li>
							<li>
								<a data-scroll href='#services'>Design, Development &amp; More</a>
							</li>
							<li>
								<a data-scroll href='#portfolio'>Projects</a>
							</li>
							<li>
								<a data-scroll href='#contact'>Contact</a>
							</li>
						</ul>
					</nav>
					<!-- main -->
					<div class='container'>
						<div class='header-info'>
							<!-- header and info -->
							<h1>Melony Smith</h1>
						  <h4>Front End Web Designer and Developer</h4>
							<br />
							<p>Soon-to-be graduate of Full Sail University with a Bachelor of
					      Science degree in Web Design &amp; Development. Please contact me with any inquries or
					      comments you may have!
				      </p>
							<br />
							<br />
							<!-- get in touch button -->
							<a href='#contact' class='btn btn-primary'>Get in Touch</a>
						</div>
					</div>
				</div>
				<!-- start desgin, development, & more -->
				<section id='services'>
					<div class='container'>
						<div class='row'>
							<!-- desgin -->
							<div class='col-md-4'>
								<div class='service-item'>
									<div class='icon'>
										<i class='fa fa-laptop'></i>
									</div>
									<h3>Design</h3>
									<p>This is what I love. I have a strong understanding of HTML5 and CSS3. I have
							      experience with Bootstrap, Foundation and Skeleton. I am also familiar with many apps
							      included in Adobe CC. I really enjoy working on the front end of things. Interactive
							      design is my passion.
						      </p>
									<br />
									<br />
								</div>
							</div>
							<!-- development -->
							<div class='col-md-4'>
								<div class='service-item'>
									<div class='icon'>
										<i class='fa fa-keyboard-o'></i>
									</div>
									<h3>Development</h3>
									<p>I love the challenge working in development provides. I have varying levels of
							      experience with JavaScript, PHP, and Python. I have also worked briefly with Node.js
							      and plan to expand my skills there. I have database experience and have worked with
							      MySQL.
						      </p>
									<br />
									<br />
								</div>
							</div>
							<!-- more -->
							<div class='col-md-4'>
								<div class='service-item'>
									<div class='icon'>
										<i class='fa fa-gratipay'></i>
									</div>
									<h3>More</h3>
									<p>I am a wife and a mother of four boys. I currently reside in Nebraska with plans
							      to relocate to Oregon. Music means more to me than I could ever express. I am drawn to
							      anything with lyrics that speak to me. What else do I do? Well, I think of myself as an
							      old soul. I am a homebody who loves to cook, bake, and crochet.
						      </p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- start portfolio -->

				<section id='portfolio' class='darker'>
					<div class='container'>
						<!-- header and info -->
						<header>
							<h2>Projects</h2>
							<p>Here are some examples of projects I have worked on. I have tried to include
								as much information as possible about the project.
				      </p>
						</header>

						<div class="gallery" align="center">
							<div class="thumbnails">
								<!-- <img onmouseover="preview.src=msdotnet.src" name="msdotnet" src="img/msdotnet.jpg" alt="MelonySmith.net"/> -->
								<img onmouseover="getElementById('preview').src=getElementById('msdotnet').src" id="msdotnet" src="img/msdotnet.jpg" alt="MelonySmith.net" />
								<!-- <img onmouseover="preview.src=hasidotcom.src" name="hasidotcom" src="img/hasidotcom.jpg" alt="HeartandSoulImages.com"/> -->
								<img onmouseover="getElementById('preview').src=getElementById('hasidotcom').src" id="hasidotcom" src="img/hasidotcom.jpg" alt="HeartandSoulImages.com" />
								<!-- <img onmouseover="preview.src=pcidotcom.src" name="pcidotcom" src="img/pcidotcom.jpg" alt="PlumCrazyImages.com"/> -->
								<img onmouseover="getElementById('preview').src=getElementById('pcidotcom').src" id="pcidotcom" src="img/pcidotcom.jpg" alt="PlumCrazyImages.com" />
							</div><br/>

							<div class="preview" align="center">
								<!-- <img name="preview" src="img/msdotnet.jpg" alt="MelonySmith.net"/> -->
								<img id="preview" src="img/msdotnet.jpg" alt="MelonySmith.net" />
							</div>

				</section>
				<!-- start contact -->
				<section id='contact'>
					<div class='container'>
						<!-- header and info -->
						<header>
							<h2>Get in Touch</h2>
							<p>I would love to hear from you! If you have any inquiries regarding my services or
					    even just a quick comment or hello, please don't hesitate to get in touch with me!
				      </p>
						</header>

						<?php
							if (!empty($error)) {
							echo '<p class="error"><strong>Your message was NOT sent<br/> The following error(s) returned:</strong><br/>' . $error . '</p>';
							} elseif (!empty($success)) {
							echo $success;
							}
						?>
							<form action="contact.php" method="post" />

						<!-- start form -->
						<div class='row'>
							<div class='col-md-8'>
								<form class='row'>
									<!-- form: visitor name -->
									<div class='form-group col-md-6'>
										<label>Your Name:</label>
										<input type='text' name='name' class='form-control' value='<?php if($_POST['name']) { echo $_POST['name']; } ?>' />
									</div>
									<!-- form: visitor email -->
									<div class='form-group col-md-6'>
										<label>Your Email Address:</label>
										<input type='text' name='email' class='form-control' value='<?php if($_POST['email']) { echo $_POST['email']; } ?>' />
									</div>
									<!-- form: visitor message -->
									<div class='form-group col-md-12'>
										<label>Your Message:</label>
										<textarea name='message' class='form-control' rows='10' cols='20'><?php if($_POST['message']) { echo $_POST['message']; } ?></textarea>
									</div>
									<!-- form: send button -->
									<div class='form-group col-md-12'>
										<input type='submit' class='submit' name='submit' value='Send Your Message' />
									</div>
								</form>
							</div>
							<!-- start side info -->
							<div class='col-md-3 col-md-offset-1'>
								<!-- address: location -->
								<address>
									<span>Location</span>
									<p>Nebraska, USA</p>
								</address>
								<!-- address: email -->
								<address>
									<span>Email</span>
									<p>
										<a href='mailto:smith.melonya@gmail.com?Subject=MelonySmith.net'>smith.melonya@gmail.com</a>
									</p>
								</address>
								<!-- address: phone -->
								<address>
									<span>Phone</span>
									<p>
										<a href='tel:+1-402-601-8783'>+1 402-601-8783</a>
									</p>
								</address>
							</div>
						</div>
					</div>
				</section>
				<!-- start footer -->
				<footer>
					<div class='container'>
						<div class='row'>
							<!-- footer: copyright -->
							<div class='col-md-8'>
								<p>Original Content &copy; 2017
									<a href='http://melonysmith.net'>MelonySmith.net</a>
								</p>
							</div>
							<!-- footer: social media -->
							<div class='col-md-4'>
								<ul class='social-icons'>
									<li>
										<a href='tel:+1-402-601-8783'>
											<i class='fa fa-android'></i>
										</a>
									</li>
									<li>
										<a href='https://www.facebook.com/msdotnet' target='_blank'>
											<i class='fa fa-facebook'></i>
										</a>
									</li>
									<li>
										<a href='https://github.com/melonysmith' target='_blank'>
											<i class='fa fa-github'></i>
										</a>
									</li>
									<li>
										<a href='https://plus.google.com/u/0/+MelonySmith3xgem' target='_blank'>
											<i class='fa fa-google-plus'></i>
										</a>
									</li>
									<li>
										<a href='https://www.pinterest.com/melonysmith/' target='_blank'>
											<i class='fa fa-pinterest'></i>
										</a>
									</li>
									<li>
										<a href='https://jaredismypersonaljesus.tumblr.com/' target='blank'>
											<i class='fa fa-tumblr'></i>
										</a>
									</li>
									<li>
										<a href='https://www.instagram.com/mrsmelonysmith' target='_blank'>
											<i class='fa fa-instagram'></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/melonysmith/' target='_blank'>
											<i class='fa fa-linkedin'></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/melsdotnet' target='_blank'>
											<i class='fa fa-twitter'></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
				<!-- javascript -->
				<!-- jquery -->
				<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
				<!-- bootstrap -->
				<script type='text/javascript' src='js/bootstrap.js'></script>
				<!-- smooth scroll -->
				<script type='text/javascript' src='js/smooth-scroll.js'></script>
				<script type="text/javascript" src="js/app.js"></script>

				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-97184369-1', 'auto');
				  ga('send', 'pageview');
				</script>

			</body>
		</html>
