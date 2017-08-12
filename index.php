<!doctype html>
<html lang="en">

<!-- Head Start-->
<head>
	<meta charset="utf-8"/>
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link rel="canonical" href="http://kirilkostov.com"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta content='width=device-width, initial-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="description" content="Kiril Kostov's Portfolio page. A software developer from London. Email me: me@kirilkostov.com">
  <meta name="keywords" content="personal portfolio, agile development, UX, intuitive, responsive design">

  <title><Kiril Kostov`s Portfolio/></title>

	<!-- Facebook graphs goes here -->
	<meta property="og:url"           content="http://www.kirilkostov.com" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Kiril Kostov`s Portfolio" />
  <meta property="og:description"   content="Kiril Kostov's Portfolio page. A software developer from London. Email me: me@kirilkostov.com" />
  <meta property="og:image"         content="http://www.kirilkostov.com/assets/img/logo2.png" />

	<!-- Fonts and icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/master.css">

	<!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/material-kit.css" rel="stylesheet"/>
  <link href="assets/css/vertical-nav.css" rel="stylesheet" />

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <![endif]-->

	<!-- GA Tracking -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97024398-1', 'auto');
  ga('send', 'pageview');
</script>

</head>
<!-- Head End -->

<!-- Body Start-->
<body data-spy="scroll" data-target="#navigation-spy" data-offset="150" class="profile-page" itemscope itemtype="http://schema.org/WebPage">
<?php include_once("assets/php/analyticstracking.php") ?>

<!-- FB Share Tracking -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- Nav Start-->
  <nav itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation" class="navbar navbar-primary navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div id="navbar" class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-spy">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a itemprop="url" class="navbar-brand" href="#brand"><img itemprop="image" id="logo" src="assets/img/logo2.png" alt="brand, website logo image"></a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-spy">
        		<ul class="nav navbar-nav navbar-right"> <!--id="nav_tune" nav-justified -->
					<li itemscope itemtype="http://schema.org/ListItem">
    					<a itemprop="url" href="index.php">
    						<p class="p_em">About</p>
    					</a>
    				</li>
    				<li itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="url" href="portfolio.php">
							<p class="p_em">Portfolio</p>
						</a>
    				</li>
						<li itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="url" href="cv.php">
							<p class="p_em">CV</p>
						</a>
    				</li itemscope itemtype="http://schema.org/ListItem">
						<li>
						<a itemprop="url" href="hobbies.php">
							<p class="p_em">Hobbies</p>
						</a>
    				</li>
            <!-- <li itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="url" href="#testimonials">
							<p class="p_em">Testimonials</p>
						</a>
    				</li> -->
						<li itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="url" href="contact.php">
							<p class="p_em">Contact</p>
						</a>
    				</li>
        		</ul>
        	</div>
    	</div>
    </nav>
    <!-- End Nav -->

    <!-- Main -->
    <main itemprop="mainContentOfPage" class="wrapper" >
    <!-- Header Start-->
		<header itemscope itemtype="http://schema.org/WPHeader" class="header cd-section" id="brand" style="background-image: url('assets/img/patrick-tomasso-151382.jpg'); background-size:cover;">
			<div class="container-fluid">
            <div class="intro_text_outer">
			  <div class="row">
			    <div class="col-md-6 ">
						<h4 class="intro_text intro_text_r">...hand tailored to perfection, to serve as a creative and  <br> minimal personal portfolio page,
						aiming to provide an overview <br> of my skillset acquired during Computer Science BSc degree. <br />
						<a itemprop="url" href="cv.php#cv" class="btn btn-primary btn-transparent btn-raised btn-lg">
							 See my CV <i class="fa fa-file-text-o i_tune"></i>
						</a>
						</h4>
						<br />
			    </div>

			    <div class="col-md-6 ">
						<h4 class="intro_text inbottom">Your eye gets attracted by exquisitely crafted responsive <br> website design, succinct content,
							  and smooth and clean <br> user experience? – You will feel right at home here.<br />
						    <a itemprop="url" href="portfolio.php#portfolio" class="btn btn-primary btn-transparent btn-raised btn-lg">
							    See my work <i class="fa fa-briefcase i_tune"></i>
						    </a>
						</h4>
						<br />
			    </div>

                <div class="clearfix"></div>
			  </div>

              </div>
			</div>
    </header>
    <!-- Header End-->

		<div class="main main-raised">
      <!--Vertical nav start-->
      <nav itemscope itemtype="http://schema.org/SiteNavigationElement" id="cd-vertical-nav">
      	<ul>
          <li itemscope itemtype="http://schema.org/ListItem">
      			<a itemprop="url" href="#brand" data-number="1" class="">
      				<span class="cd-dot"></span>
      				<span class="cd-label">Top</span>
      			</a>
      		</li>
      		<li itemscope itemtype="http://schema.org/ListItem">
      			<a itemprop="url" href="#about" data-number="2" class="">
      				<span class="cd-dot"></span>
      				<span class="cd-label">About</span>
      			</a>
      		</li>
      		<li itemscope itemtype="http://schema.org/ListItem">
      			<a itemprop="url" href="#portfolio" data-number="3" class="">
      				<span class="cd-dot"></span>
      				<span class="cd-label">Portfolio</span>
      			</a>
      		</li>
      		<li itemscope itemtype="http://schema.org/ListItem">
      			<a itemprop="url" href="#cv" data-number="4" class="">
      				<span class="cd-dot"></span>
      				<span class="cd-label">CV</span>
      			</a>
      		</li>
      		<li itemscope itemtype="http://schema.org/ListItem">
      			<a itemprop="url" href="#hobbies" data-number="5" class="">
      				<span class="cd-dot"></span>
      				<span class="cd-label">Hobbies</span>
      			</a>
      		</li>
      		<li itemscope itemtype="http://schema.org/ListItem">
      			<!-- <a itemprop="url" href="#testimonials" data-number="6" class="">
      				<span class="cd-dot"></span>
      				<span class="cd-label">Testimonials</span>
      			</a> -->
      		</li>
          <li itemscope itemtype="http://schema.org/ListItem">
      			<a itemprop="url" href="#contact" data-number="7" class="">
      				<span class="cd-dot"></span>
      				<span class="cd-label">Contact me</span>
      			</a>
      		</li>
      	</ul>
      </nav>
      <!--Vertical nav end-->

			<div class="profile-content">
							<!-- Mid-main content -->
	            <div class="container">
                <!-- Intro profile -->
	                <section itemscope itemtype="http://schema.org/Person" class="row">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img itemprop="image" src="assets/img/kiril.jpg" alt="Circle profile Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
                              <h3 itemprop="name" class="title">Kiril Kostov</h3>
								              <h6 itemprop="jobTitle">Software Developer</h6>
	                        </div>
	                    </div>
	                </section>
	                <div class="description text-center" >
                        <p>Front-End Developer with some practical experience with PHP. <br> Devoted to clean and efficient coding.</p>
	                </div>
                <!-- End Intro profile -->
									<div class="section-space"></div>

                <!-- About me -->
								<section class="cd-section" id="about">
									<div class="profile">
										<h2 class="title">About me</h2>
												<p>Hi… my name is Kiril. I have graduated Westminster University with a 1st class degree.
												I always try hard to excel in everything I am doing – it's just who I am.<br>
												Aside of university, I am also part of freecodecamp community, which serves me as an extracurricular coding experience. The amount of the lessons <br> provided (for free) are enormous and I highly recommending it!
										    </p>
									</div>
										<div class="card">
											<img itemprop="image" class="card-image img-responsive img-raised" src="assets/img/skills.jpg" alt="Skills - Card image">
											<div class="">
												<h4 class="card-title"><i class="fa fa-lightbulb-o"></i> Skills</h4>
												<p class="card-paragraph">Wide range of front-end and some back-end development experience. HTML5, CSS3, JavaScript, jQuery, PHP, MySQL, to name just a few.</p>
												<p class="card-paragraph"><small class="text-muted">Last updated 3 mins ago</small></p>
											</div>
										</div>

										<div class="card">
											<img itemprop="image" class="card-image img-responsive img-raised" src="assets/img/ux.jpg" alt="User Experience - Card image">
											<div class="">
												<h4 class="card-title"><i class="fa fa-smile-o"></i> User Experience</h4>
												<p class="card-paragraph">UX is a crucial part of the development process, ensuring a natural flow, intuitive and minimalistic design, everyone can enjoy. </p>
												<p class="card-paragraph"><small class="text-muted">Last updated 3 mins ago</small></p>
											</div>
										</div>

										<div class="card">
											<img itemprop="image" class="card-image img-responsive img-raised" src="assets/img/development.jpg" alt="Development - Card image">
											<div class="">
												<h4 class="card-title"><i class="fa fa-connectdevelop"></i> Development</h4>
												<p class="card-paragraph">Precise development and design, meets timely deliverables acomplished with great passion and love via Agile development</p>
												<p class="card-paragraph"><small class="text-muted">Last updated 3 mins ago</small></p>
											</div>
										</div>

										<div class="card">
											<img itemprop="image" class="card-image img-responsive img-raised" src="assets/img/analytics.jpg" alt="Analytics - Card image">
											<div class="">
												<h4 class="card-title"><i class="fa fa-line-chart"></i> Analytics</h4>
												<p class="card-paragraph">Creative social media campaings, flourishing email marketing strategies, combined with successful search engne optimizations.</p>
												<p class="card-paragraph"><small class="text-muted">Last updated 3 mins ago</small></p>
											</div>
										</div>

										<div class="card">
											<img itemprop="image" class="card-image img-responsive img-raised" src="assets/img/aim.jpg" alt="Target - Card image">
											<div class="">
												<h4 class="card-title"><i class="fa fa-bullseye"></i> Target</h4>
												<p class="card-paragraph">Your simple ideas, my knowledge, abilities and experience, translated into our collaborative successful project.</p>
												<p class="card-paragraph"><small class="text-muted">Last updated 3 mins ago</small></p>
											</div>
										</div>

										<div class="card">
											<img itemprop="image" class="card-image img-responsive img-raised" src="assets/img/dedication.jpg" alt="Dedication - Card image">
											<div class="">
												<h4 class="card-title"><i class="fa fa-thumbs-o-up"></i> Dedication</h4>
												<p class="card-paragraph">Responsible person, with an excellent time managment skils, who is working very hard towards reaching any deadlines.</p>
												<p class="card-paragraph"><small class="text-muted">Last updated 3 mins ago</small></p>
											</div>
										</div>
                  </section>
                  <!-- End About me -->

							</div>


								<div class="section-space"></div>

							</div>
	        </div>
		</main>

    <!-- Footer area -->
    <footer itemscope itemtype="http://schema.org/WPFooter" class="footer" id="footer">
        <div class="container">
            <nav class="pull-left footerinner">
        				<ul>
        					<!-- <li itemscope itemtype="http://schema.org/ListItem">
        						<a itemprop="url" href="#"><img itemprop="image" id="logo" src="assets/img/logo.jpg" alt="brand, website logo image">
        							Brand
        						</a>
        					</li> -->
        					<li itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" class="btn btn-primary btn-just-icon btn-round btn-raised btn-facebook" href="http://facebook.com/d4rk5un">
        	              <i class="fa fa-facebook"> </i></a>
        	              <div class="ripple-container"></div>
        					</li>
        					<li itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" class="btn btn-info btn-just-icon btn-round btn-raised btn-twitter" href="http://twitter.com/d4rk5un">
        	              <i class="fa fa-twitter"></i></a>
        	              <div class="ripple-container"></div>
        					</li>
                  <li itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" class="btn btn-danger btn-just-icon btn-round btn-raised btn-google" href="https://plus.google.com/u/0/+KirilKostov">
        	              <i class="fa fa-google"></i></a>
        	              <div class="ripple-container"></div>
                  </li>
        					<li itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" class="btn btn-just-icon btn-round btn-raised btn-linkedin" href="https://www.linkedin.com/in/kiril-kostov-9b3560134/">
        	              <i class="fa fa-linkedin"></i></a>
        	              <div class="ripple-container"></div>
        					</li>
                  <li itemscope itemtype="http://schema.org/ListItem"<i><a itemprop="url" class="btn btn-just-icon btn-round btn-raised btn-github" href="https://github.com/d4rk5un">
        	              <i class="fa fa-github"></i></a>
        	              <div class="ripple-container"></div>
                  </li>
        				</ul>
								<div id="fb" class="fb-like" data-href="http://kirilkostov.com" onclick="ga('send', 'event', 'facebook', 'share');" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
            </nav>
            <div class="copyright pull-right">
                &copy; 2017, made with <i class="fa fa-heart heart"></i> and lots of <i class="fa fa-coffee coffee"></i> by Kiril Kostov
            </div>

								<div class="small_font text-center">Please note that this a temporary website which serves as part of an <br>assignment for the studies of the website’s author. For more information, please check
									<a href="#terms" data-toggle="modal" data-target="#myModal">Terms of Use.</a></div>
								<div class="small_font text-center">Please note that I use cookies. For more information about cookies please check
									<a href="#cookies" data-toggle="modal" data-target="#myModal2">Cookies Policy.</a></div>

									<!-- Modal Core -->
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									        <h4 class="modal-title title" id="myModalLabel">Terms of Use</h4>
									      </div>
									      <div class="modal-body">
													<p class="title">Exclusions and limitations of liability</p>
													<p class="small_font"><em>This is not a ‘University of Westminster’ website. This website serves as part of an assignment for the studies of the website’s author. Author of this website gives no warranty whatsoever that any such information will be accurate or complete at any particular time or at all.<br><br>
													The author excludes all liability to the fullest extent permitted by law in respect of any loss of profits, revenue, goodwill, business opportunity, any loss of or cost of restoration of data or any direct, indirect or consequential loss or damage resulting or arising from any non-availability or use of the website or any website and social media pages linked to it or from reliance on any contents of the website or any material or information accessed through it.<br><br>
													The website and all information or other material contained in it are made available strictly on the basis that you accept it on an ‘as is’ and ‘as available’ basis. Where you rely on any information or other material contained in it, you do so entirely at your own risk and you accept that all warranties, conditions and undertakings, express or implied, in respect of the website (including without limitation in respect of quality, performance, fitness or suitability for purpose or non-infringement of any intellectual property rights) are excluded by the author to the fullest extent permitted by law.</em></p>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>

									<!-- Modal Core 2-->
									<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title title" id="myModalLabel2">Cookies Policy</h4>
												</div>
												<div class="modal-body">
													<p class="title">a)	What is a cookie?</p>
													<p class="small_font"><em>The general term for the cookie is: a text file which stores information downloaded on your computer or mobile device (source: https://www.westminster.ac.uk/about-us/our-university/corporate-information/policies-and-documents-a-z/website-terms-of-use/cookies).</em><br><br></p>
													<p class="title">b) What cookies do I use and how you can disable them?</p>
													<p class="small_font"><em>I use Google Analytics Cookies to analyse traffic and then make recommendations for improvements regarding the website’s design and web marketing strategies. The whole process serves as a requirement for my coursework. For more information about the cookies I use and how to disable them please visit: https://www.westminster.ac.uk/about-us/our-university/corporate-information/policies-and-documents-a-z/website-terms-of-use/cookies</em><br><br></p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
        </div>
    </footer>
    <!-- End Footer area -->

    <!--   Core JS Files   -->
  	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
  	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  	<script src="assets/js/material.min.js"></script>
  	<script src="assets/js/script.js" type="text/javascript"></script>
    <script src="assets/js/vertical-nav.js" type="text/javascript"></script>
    <script src="assets/js/modernizr.js" type="text/javascript"></script>

  	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

  	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
  	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

  	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
  	<script src="assets/js/material-kit.js" type="text/javascript"></script>

    <script>
			$(document).ready(function(){
			    $("#dopbtn").click(function(){
			        $(".smsection").toggle();
			    });
				});
		</script>




</body>
<!-- Body End -->

</html>
