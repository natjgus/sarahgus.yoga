<!DOCTYPE html>
<?php session_start(); // place it on the top of the script ?>
<html lang="en">

<head>
	<title>Two Pugs Yoga</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Two Pugs Yoga, run by Sarah Gustafson is a holistic yoga program for people of all ages and backgrounds."/>

	<link rel="canonical" href="https://sarahgus.yoga" />

	<!--- Latest compiled and minified Bootstrap CSS --->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!--  Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<!-- My custom CSS -->
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>

	<!-- jQuery Form, Additional Methods, Validate -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator and logo animation -->
	<script src="javascript/jquery-validate.js"></script>
	<script src="javascript/plugins.js"></script>
	<script src="javascript/mailer.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134749642-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-134749642-1');
	</script>




</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-md navbar-light">
				<a class="navbar-brand" href="#">
					<img src="images/sarahLogo.jpg" id="logo" alt="yoga logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
					<div class="navbar-nav text-center">
						<a class="nav-item nav-link" href="#aboutSarah">About Sarah</a>
						<a class="nav-item nav-link" href="#publicClasses">Public Classes</a>
						<a class="nav-item nav-link" href="#privateClass">Private Sessions</a>
						<a class="nav-item nav-link" href="#contact">Contact</a>
					</div>
				</div>
			</nav>
		</header>

		<!-- Modal Pop Up -->
		<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
						<div class="modal-header yellow">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body blue">
							<div class="modal-image text-center">
								<img src="images/sarahLogo.jpg" alt="yoga logo">
							</div>
								<h3 class="text-center">Hitting the "pause" button...</h3>
								<p class="text-center">Due to summer adventures, Sarah’s public classes will be on hold until fall. She'll continue to teach private sessions when she’s in town. Subscribe to her mailing list for schedule updates.</p>
								<div id="wrapper" class="text-center">
									<form id="signup" class="formee" action="php/subscribe.php" method="post">
											<fieldset>
													<div class="form-group my-auto p-1">
															<label for="fname">First Name:</label> <input name="fname" id="fname" type="text" />
													</div>
													<div class="form-group my-auto p-1">
															<label for="lname">Last Name:</label> <input name="lname" id="lname" type="text" />
													</div>
													<div class="form-group my-auto p-1">
															<label for="email">Email Address:</label> <input name="email" id="email" type="text" />
													</div>
													<div class="text-center">
															<button type="submit" class="btn btn-primary yellow text-dark">Send Away and Namaste</button>
													</div>
											</fieldset>
									</form>
								<div id="response"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- Intro Section -->
		<section>
			<div class="container-fluid main-image">
					<h1 class="intro-text">Two Pugs Yoga</h2>
			</div>
		</section>


		<!-- About Sarah Section-->
	 <div id="aboutSarah" class="container-fluid px-5 py-5">
			 <h2>About Sarah</h2>
		 <div class="row">
			 <div class="col-sm-12 col-lg-4">
				 <p>Sarah met yoga over tea one morning years ago, and they hit it off famously. She
					 began teaching in 2008, and currently offers public classes and private sessions
					 to adults and children in Los Alamos, New Mexico.</p>

				 <p>With a background in both biology and science writing, Sarah views yoga in part
					 as a process of deciphering the stories encoded in our bodies. She encourages
					 her students to explore their own somatic stories with a spirit of curiosity and
					 appreciation. She also brings this narrative approach to her teaching, whether
					 taking four-year olds on an adventure to outer-space or adults on a search for
					 their psoas.</p>
			 </div>
			 <div class="col-sm-12 col-lg-4">
				 <img src="images/sarah-gustafson-headshot.jpg" class="image-thumbnail headshot" alt="Sarah Gustafson's Headshot">
			 </div>
			 <div class="col-sm-12 col-lg-4">
				 <p>A lifelong student, Sarah’s primary teachers are <a href="http://www.prajnayoga.net/tias-little/" target="_blank">Tias</a> and <a href="http://www.prajnayoga.net/surya/" target="_blank">Surya</a> Little, founders
					 of <a href="http://www.prajnayoga.net/" target="_blank">Prajna Yoga</a>, a world-renowned school that weaves asana, anatomy, and
					 mindfulness training. Sarah assists at Prajna Teacher Trainings and workshops
					 in Santa Fe on a regular basis, and is one of the few instructors certified to teach
					 Prajna’s <a href="http://www.prajnayoga.net/yoga-training/satya/" target="_blank">SATYA</a> movements. Sarah also trains in therapeutic yoga with <a href="https://essentialyogatherapy.com/about/" target="_blank">Robin
						 Rothenberg</a>, and is certified to teach Robin’s highly effective <a href="https://essentialyogatherapy.com/essential-low-back-teacher-training/" target="_blank">Essential Low Back
						 Program</a>.</p>
				 <p>When she’s not on the mat, Sarah’s probably outside growing food and flowers, hiking, or rock climbing with her husband and pugs. The mother of three adult
					 children, Sarah’s yoga journey has always been a practice of crafting a
					 constantly evolving balance between the various facets of a full and meaningful
					 life. She strives to impart her passion for yoga by offering classes that are
					 inclusive, inspiring, and playful.</p>
			 </div>
		 </div>
	 </div>

<!-- Tracy Parallax Section -->
	 <div class="parallax">
	 </div>


		<!-- Public Classes Section -->
		<section class="jumbotron blue">
			<!-- <div " class="container"> -->
				<div class="row" id="publicClasses">
					<div class="col-md-6 my-auto my-auto-text padding">
						<h2>Adult Classes</h2>
						<h6>Reduce stress and increase energy while gaining strength, flexibility, and focus.</h6>
						<p>Prajna Yoga integrates the outer practice of asana with deep insight into the inner experience. Sarah’s skillfully sequenced classes combine guided alignment and somatic awareness with breath-based movement to nourish and challenge students of all levels.
						</p>
						<h5>Mixed-level adult classes: beginners and all body types welcome</h5>
						<ul>
							<li>Mondays, 6:00-7:30 pm (except most Monday holidays)</li>
							<li style="list-style-type:none">
								<ul>
									<li>Unitarian Church, 1738 North Sage Street, Los Alamos, NM</li>
									<li>Drop-in: $15; 4-punch pass: $50; 8-punch pass: $92</li>
								</ul>
							</li>
							<li>Thursdays, 5:45-6:45 pm</li>
							<li style="list-style-type:none">
								<ul>
									<li>Los Alamos Senior Center, 1101 Bathtub Row, Los Alamos, NM</li>
									<li>Drop in: $12 <b>(First class free!)</b>; 4-punch pass: $40; 8-punch pass: $72</li>
								</ul>
							</li>
						</ul>
					</div>
			<!-- </div> -->
					<div class="col-md-6 vertical-align">
						<img src="images/sarah-prajna-53-web.jpg"  class="img-fluid" alt="triangle pose with pogo keeping watch">
					</div>
				</div>
			</section>
			<section class="jumbotron yellow">
				<div class="row">
					<div class="col-md-6 order-md-2 my-auto my-auto-text padding">
						<h2>Family Yoga</h2>
						<h6>Designed for ages 2-5 with an adult, Family Yoga weaves poses into story, song, and games to foster creative expression while developing focus, sensorimotor and self-calming skills.</h6>
						<ul>
							<li>Tuesdays, 9:30-10:15 am</li>
							<li style="list-style-type:none">
								<ul>
									<li>Family Strengths Network, 3540 Orange Street, Los Alamos, NM</li>
									<li>Free to FSN Partners; $10 or 6 classes for $50 for non-members</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="col-md-6 order-md-1 vertical-align">
						<img src="images/flower-yoga-pool.jpg"  class="img-fluid" alt="Sarah with family yoga students">
					</div>
				</div>
			</section>

			<section class="jumbotron blue">
					<div class="row" id="privateClass">
						<div class="col-md-6 my-auto my-auto-text padding">
							<h2>Private Sessions @ $60/hour</h2>
							<p>Sarah seeks to improve the overall health and well-being of her clients by offering personalized sessions that are integrative, educational, and rejuvenating. She often collaborates with local physical therapists and other body workers to facilitate patient recovery.</p>
							<p class="ul-title">Unlike public classes, private sessions allow you to tailor your practice to your:</p>
							<ul>
								<li>level of experience and capabilities</li>
								<li>physical conditions or injuries</li>
								<li>phase of life, including prenatal and postpartum</li>
								<li>athletic pursuits </li>
							</ul>
							<p class="ul-title">Private sessions also provide the opportunity to focus on:</p>
							<ul>
								<li>particular types of poses (ie standing poses, arm balances, inversions, twists, backbends, forward bends, restoratives)</li>
								<li>specific areas of the body</li>
								<li>experiential anatomy</li>
								<li>yogic practices such as pranayama or meditation</li>
								<li>using personalized adjustments and props—including Sarah’s yoga wall ropes!!—to deepen your poses</li>
							</ul>
						</div>
				<!-- </div> -->
						<div class="col-md-6 vertical-align">
							<img src="images/sarah-prajna-16-web.jpg"  class="img-fluid" alt="Sarah adjusting student in class">
						</div>
					</div>
				</section>


		<!-- Testimonial/photo gallery--->

		<section class="jumbotron yellow">
			<div class="container-fluid testimonial py-5">
				<div class="row padding">
						<h2>Testimonials</h2>
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Carousel indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
								<li data-target="#myCarousel" data-slide-to="4"></li>
							</ol>
							<!-- Wrapper for carousel items -->
							<div class="carousel-inner">
								<div class="item carousel-item active">
									<div class="img-box"><img src="images/sarahLogo.jpg" alt="yoga logo"></div>
									<p class="testimonial">You will never be on autopilot in a class led by Sarah. Her dedication
										to continuous learning and her ease with words make every class fresh:
										new material, new ways to illuminate asanas you thought you knew.
										She offers careful attention to each student, offering adjustments
										or suggestions that, while subtle, can result in great improvement
										in form.</p>
									<p class="overview">ES</p>
								</div>
								<div class="item carousel-item">
									<div class="img-box"><img src="images/sarahLogo.jpg" alt="yoga logo"></div>
									<p class="testimonial">My 5-year-old and I disagree on just about everything, but going to Family Yoga every week is something we both absolutely love.</p>
									<p class="overview">KD</p>
								</div>
								<div class="item carousel-item">
									<div class="img-box"><img src="images/sarahLogo.jpg"  alt="yoga logo"></div>
									<p class="testimonial">Yoga has changed my life by bringing greater peace and wellness into it. I started private lessons with Sarah after hip-replacement surgery a few years ago. Her expertise and individualized program is just what my body needs and wants.</p>
									<p class="overview">SB</p>
								</div>
								<div class="item carousel-item">
									<div class="img-box"><img src="images/sarahLogo.jpg" alt="yoga logo"></div>
									<p class="testimonial">Sarah's teaching has greatly expanded my practice. Through her meticulous and generous approach, I have discovered new aspects of yoga. Her classes, often designed as guided explorations, encourage dialog and inquiry into mind-body awareness.</p>
									<p class="overview">CH</p>
								</div>
							</div>
							<!-- Carousel controls -->
							<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
				</div>
			</div>
		</section>

		<!-- Pogo Parallax Section -->
			 <div class="parallax2">
			 </div>

<!-- Calendar Sections -->
<!-- <div class="responsiveCal">
			<iframe src="https://calendar.google.com/calendar/embed?src=i740esvk8ooodcrk1cnk0nj5n4%40group.calendar.google.com&ctz=Europe%2FMadrid" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div> -->
		<!-- <div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://calendar.google.com/calendar/embed?src=i740esvk8ooodcrk1cnk0nj5n4%40group.calendar.google.com&ctz=Europe%2FMadrid" style="border: 0" frameborder="0" scrolling="no"></iframe>
		</div> -->
		<!-- <section class="calendar">
			<div class="responsiveCal">
				<iframe src="https://calendar.google.com/calendar/embed?src=i740esvk8ooodcrk1cnk0nj5n4%40group.calendar.google.com&ctz=Europe%2FMadrid" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div> -->
			<!-- <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%2300cccc&amp;src=i740esvk8ooodcrk1cnk0nj5n4%40group.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FNorth_Dakota%2FCenter" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe> -->


		</section>

		<!-- Contact Form -->
		<section id="contact" class="contact-section blue jumbotron">
			<div class="container">
				<h2>Want to stay up to date with Two Pugs Yoga? Subscribe to the mailing list!</h2>
				<!-- Button trigger modal -->
				<div class="text-center mt-3">
					<button type="button" class="btn btn-primary btn-lg yellow text-dark text-center" data-toggle="modal" data-target="#subscribe">
					  Subscribe
					</button>
				</div>
				<div id="subscribe" class="modal">
				<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
								<div class="modal-header yellow">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body blue">
									<div class="modal-image text-center">
										<img src="images/sarahLogo.jpg" alt="yoga logo">
									</div>
									<h3 class="text-center">Subscribe to the list!</h3>
										<div id="wrapper" class="text-center">
														<form id="signup" class="formee" action="php/subscribe.php" method="post">
																<fieldset>
																		<div class="form-group my-auto p-1">
																				<label for="fname">First Name:</label> <input name="fname" id="fname" type="text" />
																		</div>
																		<div class="form-group my-auto p-1">
																				<label for="lname">Last Name:</label> <input name="lname" id="lname" type="text" />
																		</div>
																		<div class="form-group my-auto p-1">
																				<label for="email">Email Address:</label> <input name="email" id="email" type="text" />
																		</div>
																		<div class="text-center">
																				<button type="submit" class="btn btn-primary yellow text-dark">Send Away and Namaste</button>
																		</div>
																</fieldset>
														</form>
														<div id="response"></div>
													</div>
										</div>
								</div>
						</div>
				</div>
			</div>
			</div>
			<div class="container ">
				<h2>Send Sarah a Note!</h2>
				<form method="post" id="contact-form" action="php/mailer.php">

					<!-- Name input -->
					<div class="form-group ">
						<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name">
					</div>

					<!-- Email input -->
					<div class="form-group ">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Email">

					</div>

					<!-- Subject input -->
					<div class="form-group ">
							<label for="subject">Subject</label>
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
					</div>

					<!-- Message input -->
					<div class="form-group ">
							<label for="message">Message</label>
							<textarea class="form-control" id="message" name="message" placeholder="Type message here!"
										 rows="5"></textarea>
					</div>

					<!-- reCAPTCHA -->
					<div class="g-recaptcha" data-sitekey="6LfU2kcUAAAAAH8LVYOqDtTDPWIIxjcmO45oa0we"></div>

 						<!-- Submit button !-->
					<div class="text-center">
						<button class="btn btn-primary yellow text-dark mx-auto" id="submit" name="submit" type="submit"><i class="fa fa-paper-plane"></i>Send Away and Namaste</button>
					</div>
				</form>

					<!-- Empty output for possible error messages -->
					<div class="">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
			</div>
		</section>


	<!-- Footer -->
	<footer class="yellow container-fluid">
		<div class="text-center center-block">
			<p id="footerText" class="txt-railway">Website crafted by Nathaniel Gustafson
			<br>
<!--			<div class="container" id="logoContainer">-->
			<a href="https://www.instagram.com/supernatalio/" target="_blank"><i id="instagram fontawesome" class="fab fa-instagram fa-2x inline" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/in/nathanielgustafson/" target="_blank"><i id="fontawesome" class="fab fa-linkedin fa-2x" aria-hidden="true"></i></a>
			</p>
<!--			</div>-->
		</div>
	</footer>
		<script src="javascript/jquery.js"></script>
 </body>
</html>
