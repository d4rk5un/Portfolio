<?php include 'assets/php/contact.php'; ?>
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
  <meta name="description" content="My cv, experience, skills, education, highlights, download my cv">
  <meta name="keywords" content="php, javascript, jQuery, html5, css3, object oriented programming, MVC, curriculum vitae, work experience">

  <title><Kiril Kostov Portfolio - CV/></title>

	<!-- Facebook graphs goes here -->
	<meta property="og:url"           content="http://www.kirilkostov.com" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Kiril Kostov Portfolio - CV" />
  <meta property="og:description"   content="My cv, experience, skills, education, highlights, download my cv" />
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
        		<a itemprop="url" class="navbar-brand" href="index.php#brand"><img itemprop="image" id="logo" src="assets/img/logo2.png" alt="brand, website logo image"></a>
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
						<a itemprop="url" href="#cv">
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


                <div class="clearfix"></div>

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

									<div class="section-space"></div>


                <!-- CV -->
								<section id="cv" class="cd-section">
									<div class="container">
										<h2 class="title text-center">Curriculum Vitae</h2>
										<br />
										<!-- Tabs with icons on Card -->
                                        <div class="cvdropdown" id="dopbtn"><img src="assets/img/dropdownicon.png" alt="" /></div>
										<div id="card_cv" class="card card-nav-tabs mrg2">

											<div id="header" class="header header-primary smsection">

												<div class="nav-tabs-navigation ">
													<div class="nav-tabs-wrapper">
														<ul class="nav nav-tabs nav-justified" data-tabs="tabs">
															<li itemscope itemtype="http://schema.org/ListItem" class="active">
																<a itemprop="url" href="#summary" data-toggle="tab">
																	<i class="material-icons">perm_contact_calendar</i>
																	Summary
																</a>
															</li>
															<li itemscope itemtype="http://schema.org/ListItem">
																<a itemprop="url" href="#experience" data-toggle="tab">
																	<i class="material-icons">assignment</i>
																	Work Experience
																</a>
															</li>
															<li itemscope itemtype="http://schema.org/ListItem">
																<a itemprop="url" href="#skills" data-toggle="tab">
																	<i class="material-icons">assignment_turned_in</i>
																	Skills
																</a>
															</li>
															<li itemscope itemtype="http://schema.org/ListItem">
																<a itemprop="url" href="#highlights" data-toggle="tab">
																	<i class="material-icons">stars</i>
																	Highlights
																</a>
															</li>
															<li itemscope itemtype="http://schema.org/ListItem">
																<a itemprop="url" href="#education" data-toggle="tab">
																	<i class="material-icons">school</i>
																	Education
																</a>
															</li>
															<li itemscope itemtype="http://schema.org/ListItem">
																<a itemprop="url" href="assets/cv/cv.pdf" onclick="ga('send', 'event', 'Downloads', 'PDF', 'assets/cv/cv.pdf');" download="cv.pdf" data-toggle="tooltip" data-placement="top" title="Download CV">
																	<i class="material-icons">picture_as_pdf</i>
																	Download
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="content">
												<div class="tab-content text-center">

                          <!-- Summary Tab -->
													<div class="tab-pane active" id="summary">
														<div class="card_big summary_tune">
															<img itemprop="image" class="card-image-cv img-responsive img-raised skills_img" src="assets/img/summary.jpg" alt="CV Summary - Card image">
															<div>
																<br>
																<p class="card-title">First Class Degree</p>
																<p class="card-paragraph">Graduated with 1st degree from Westminster University, always trying to excel myself in what I am doing.</p>
																<br>
																<p class="card-title">Dean's List Awards</p>
																<p class="card-paragraph">Dean’s List Awards, for outstanding achievement and grade above 70% at level 4 and level 5.</p>
																<br>
																<p class="card-title">Eager to Learn</p>
																<p class="card-paragraph">Eager to learn, as a young developer, I accepted the challenge to vigorously work towards acquiring new skills which will aid my way to progress in my career.</p>
																<br>
															</div>
														</div>
													</div>
                          <!-- End Summary Tab -->

                          <!-- Experience Tab -->
													<div class="tab-pane" id="experience">
														<div class="card_big" id="card_cv_small">
															<img itemprop="image" class="card-image-cv img-responsive img-raised" src="assets/img/2014.jpg" alt="CV Expereince - Card image1">
															<div>
																<br>
																<p class="card-title">Front of House Customer Service (0.5fte)</p>
																<div class="card-paragraph">
																	<p class="text-muted">Friends House Hospitality, London, January 2014 – Present</p>
																	<p>Joined as Room steward, promoted rapidly through a series of increasingly responsible positions based on strong organizational skills, willingness to work in a team and strong desire to progress.</p>
																	<br>
																	<p class="card-title">Exceptional customer service</p>
																	<p>Maintain customer service standards on a day to day basis to ensure maximum satisfaction levels.</p>
																	<br>
																	<p class="card-title">Skills utilization</p>
																	<p>Utilized some of my skills to produce several types of report sheets in order to minimize the time spent to complete daily duties.</p>
																	<br>
																	<p class="card-title">Team work</p>
																	<p>Worked hard in a team to achieve 99.7% customer satisfaction levels at reception.</p>
																</div>
																<br>
															</div>
														</div>

														<img itemprop="image" class="verticalLine" src="assets/img/verLine.png" alt="vertical line image">
														<div class="card_big" id="cv_card_tune">
															<img itemprop="image" class="card-image-cv img-responsive img-raised" src="assets/img/2015.jpg" alt="CV Experience - Card image2">
															<div>
																<br>
																<p class="card-title">Quaker Life Support Officer (0.2fte)</p>
																<div class="card-paragraph">
																	<p class="text-muted">Friends House Hospitality, London, 2015 – Present</p>
																	<p>While working my way up, I have taken on a role as a ‘Quaker Voices’ officer. Main responsibilities are; managing bi-monthly magazine, leasing with customers over the phone and email, updating subscriptions, deal with payments, updating the magazine page, organizing volunteers to stuff envelopes, communicating with the magazine editor on a day to day basis.</p>
																	<br>
																	<p class="card-title">Digital catalogue</p>
																	<p>Introduced digital catalogue to organize better our archives.</p>
																	<br>
																	<p class="card-title">Tasks automation</p>
																	<p>Automated some time consuming procedures previously on place in order to save time. (e.g. setup occurring weekly emails).</p>
																	<br>
																	<p class="card-title">Reports and meetings</p>
																	<p>Carried over regular reports and meetings with my line manager and the editor of the magazine.</p>
																</div>
																<br>
															</div>
														</div>
													</div>
                          <!-- End Experience Tab -->

                          <!-- Skills Tab -->
													<div class="tab-pane" id="skills">
														<div class="card_big skills_card">
															<img itemprop="image" class="card-image-cv img-responsive img-raised skills_img" src="assets/img/skills2.png" alt="CV Skills - Card image">
															<div>
																<br>
																<div class="card-paragraph">
																	<p>HTML5</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																		100%
																		</div>
																	</div>
																	<p>CSS3</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																		100%
																		</div>
																	</div>
																	<p>JavaScript</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
																		80%
																		</div>
																	</div>
																	<p>jQuery</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar  progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
																		80%
																		</div>
																	</div>
																	<p>MySQL</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
																		90%
																		</div>
																	</div>
																	<p>PHP</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
																		70%
																		</div>
																	</div>
																	<p>Java</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
																		70%
																		</div>
																	</div>
																	<p>OOP</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
																		75%
																		</div>
																	</div>
																	<p>MVC</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
																		90%
																		</div>
																	</div>
																	<p>Swift3</p>
																	<div class="progress progress-line-primary">
																		<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																		60%
																		</div>
																	</div>
																</div>
																<br>
															</div>
														</div>
													</div>
                          <!-- End Skills Tab -->

                          <!-- highlights Tab -->
													<div class="tab-pane" id="highlights">
														<div class="card_big skills_card">
															<img itemprop="image" class="card-image-cv img-responsive img-raised skills_img" src="assets/img/highlights2.jpg" alt="CV Highlights - Card image">
															<div>
																<br>
																<p class="card-title">Conferencing venue booking app</p>
																<p class="card-paragraph">Developed venue booking web application for my current employee’s events department during my final year’s project.</p>
																<br>
																<p class="card-title">Group leader level 5 project</p>
																<p class="card-paragraph">Group leader of 5, during level 5 Group Project module at university. Led to successfully completing the requirements on time and achieved 65%.</p>
																<br>
																<p class="card-title">Class rep Barnet College</p>
																<p class="card-paragraph">Class rep at Southgate and Barnet College while studying Access to HE Diploma.</p>
																<br>
															</div>
														</div>
													</div>
                          <!-- End Highlights Tab -->

                          <!-- Education Tab -->
													<div class="tab-pane" id="education">
														<div class="card_big skills_card">
															<img itemprop="image" class="card-image-cv img-responsive img-raised skills_img" src="assets/img/education.png" alt="CV Education - Card image">
															<div>
																<br>
																<p class="card-title">University of Westminster</p>
																<p class="card-paragraph">Computer Science BSc, University of Westminster, London.</p>
																<br>
																<p class="card-title">HIT training</p>
																<p class="card-paragraph">BTEC Level 2 Diploma in Business Administration (QCF) – HIT training London.</p>
																<br>
																<p class="card-title">Barnet and Soutgate College</p>
																<p class="card-paragraph">Access to HE Diploma - Computing, Barnet and Southgate College, London.</p>
																<br>
															</div>
														</div>
													</div>
                          <!-- End Education Tab -->
												</div>
											</div>
										</div>
										<!-- End Tabs with icons on Card -->
									</div>
								</section>
                <!-- <div class="section-space"></div> -->
                <!-- End CV -->


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
								<div id="fb" class="fb-like" data-href="http://kirilkostov.com" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
            </nav>
            <div class="copyright pull-right">
                &copy; 2017, made with <i class="fa fa-heart heart"></i> and lots of <i class="fa fa-coffee coffee"></i> by Kiril Kostov
            </div>
						<div class="small_font text-center">Please note that this a temporary website which serves as part of an <br>assignment for the studies of the website’s author. For more information, please check
							<a href="#terms.php" data-toggle="modal" data-target="#myModal">Terms of Use.</a></div>
						<div class="small_font text-center">Please note that I use cookies. For more information about cookies please check
							<a href="#cookies.php" data-toggle="modal" data-target="#myModal2">Cookies Policy.</a></div>

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
