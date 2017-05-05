<?php
	if(!isset($_SESSION['login']) || !$_SESSION['login']){
		header('Location: /login.php');
		die();
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic|Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="style.min.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<link rel="stylesheet" href="css/intro-fonts.css" type="text/css" />
	<link rel="stylesheet" href="css/colors.php?color=3EA98D" type="text/css" />
	<link rel="stylesheet" href="css/custom.min.css" type="text/css" />
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<!-- Document Title
	============================================= -->
	<title>LCD Virtual Assistant</title>
<style>
.iportfolio .portfolio-image { overflow: visible; }

.iportfolio img {
	opacity: 1;
	-webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.1), 0 5px 17px rgba(0, 0, 0, 0.15);
	box-shadow: 0 0 1px rgba(0, 0, 0, 0.1), 0 5px 17px rgba(0, 0, 0, 0.15);
	-webkit-transition: opacity .4s ease;
	-o-transition: opacity .4s ease;
	transition: opacity .4s ease;
}

.iportfolio img:hover { opacity: 0.85; }

.iportfolio .portfolio-desc h3 {
	font-weight: 400;
	font-size: 14px;
	text-transform: uppercase;
	letter-spacing: 1px;
	margin-top: 15px;
}

.iportfolio .portfolio-desc h3 a:hover { color: #777; }

.iportfolio .portfolio-desc h3 a span {
	display: inline-block;
	position: relative;
	top: -1px;
	vertical-align: middle;
	margin: 0 0 0 3px;
	font-size: 11px !important;
	padding: 5px 7px;
	font-weight: 400;
	color: #FFF;
	letter-spacing: 0;
	text-transform: none;
}

.testimonials-rating {
	margin-top: 15px;
	color: #FFD700;
	font-size: 16px;
	line-height: 1;
}

.testi-content p {
	font-size: 18px;
	color: white;
}

.testi-content p:before,
.testi-content p:after { display: none; }

.testi-meta:before { display: none; }
.testi-meta span { padding-left: 0; }

.intro-support-block {
	border-top: 1px solid #EEE;
	overflow: hidden;
}

.intro-support-block > div:before {
	position: absolute;
	content: '';
	top: 0;
	left: -1px;
	width: 0;
	height: 100%;
	border-left: 1px solid #e0e3e6;
}

.intro-support-block a.col-padding {
	display: block;
	-webkit-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

.intro-support-block a.col-padding:hover { background-color: #F5F5F5; }

.intro-support-block span {
	display: block;
	font-size: 20px;
	color: #444;
	margin-top: 15px;
}

.device-xs .intro-support-block > div:before,
.device-xxs .intro-support-block > div:before {
	top: -1px;
	left: 0;
	width: 100%;
	height: 0;
	border-left: 0;
	border-top: 1px solid #EEE;
}

#page-menu {
	height: 0;
	overflow: hidden;
	-webkit-backface-visibility: hidden;
}

#page-menu #page-menu-wrap {
	opacity: 0;
	pointer-events: none;
	-webkit-transition: all .4s ease;
	-o-transition: all .4s ease;
	transition: all .4s ease;
	-webkit-transform: translate3d(0,-44px,0);
	-o-transform: translate3d(0,-44px,0);
	transform: translate3d(0,-44px,0);
	transform-style: preserve-3d;
	-webkit-backface-visibility: hidden;
}

#page-menu.sticky-page-menu { overflow: visible; }

#page-menu.sticky-page-menu #page-menu-wrap {
	opacity: 1;
	pointer-events: auto;
	-webkit-transform: translate3d(0,0,0);
	-o-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="https://www.leonardcheshire.org/" class="standard-logo" data-dark-logo="images/logo-dark.png" target="_blank"><img src="images/lcd/logo.png" alt="Canvas Logo"></a>
						<a href="https://www.leonardcheshire.org/" class="retina-logo" data-dark-logo="images/logo-dark@2x.png" target="_blank"><img src="images/lcd/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="mobile-menu-off-canvas dark">
						<ul class="primary-menu-list js-primary-menu-list">
							<li><a href="#" data-origin="#section-home" data-href="#section-home"><div>HOME</div></a></li>
							<li><a href="#" data-origin="#section-challenge" data-href="#section-challenge-onepage-anchor"><div>CHALLENGE</div></a></li>
							<li><a href="#" data-origin="#section-mvp" data-href="#section-mvp-anchor"><div>MVP</div></a></li>
							<li><a href="#" data-origin="#section-solution" data-href="#section-solution"><div>SOLUTION</div></a></li>
							<li><a href="#" data-origin="#section-keynumbers" data-href="#section-keynumbers" data-offset="103"><div>KEY RESULTS</div></a></li>
							<li><a href="#" data-origin="#section-timeline" data-href="#section-timeline-anchor"><div>TIMELINE</div></a></li>
							<li><a href="#" data-origin="#section-testimonials" data-href="#section-testimonials" data-offset="103"><div>TESTIMONIALS</div></a></li>
							<li><a href="#" data-origin="#section-team" data-href="#section-team-anchor" data-offset="103"><div>TEAM</div></a></li>
							<li><a href="#" data-origin="#section-contact" data-href="#section-contact" data-offset="103"><div>CONTACT</div></a></li>
						</ul>

						<!-- Top Cart
						============================================= -->
				<!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
								<div class="wrap-txtsize"><span>TEXT SIZE :</span> <div class="txtsize"><button id="decfont">-&nbsp;A</button><button id="incfont">+&nbsp;A</button></div></div>
								<div class="lineaDivisoria"></div>
								<div id="activateSound" class="voice-switch apagado">
									<span class="voice-mobile">
										voice <span id="switch-text">OFF</span>
									</span>
								</div>
						</div><!-- #top-search end -->



					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				<div id="section-home" class="section nobg nomargin center clearfix diapositiva" style="padding: 150px 0;">
					<div class="container clearfix">



						<p class="lead center divcenter texto-sup ctexto" style="max-width: 900px; font-size: 24px;">
							<span class="span-mobile-block">ACIT Cloud Studio's Prototype</span>
							<span class="span-mobile-block">for Leonard Cheshire Disability</span>
						</p>
						<div class="emphasis-title bottommargin-lg">
							<h3 class="ctexto">NANDINI&nbsp;-&nbsp;THE VIRTUAL REGISTRATION ASSISTANT</h3>
						</div>


					</div>
					<a href="#section-challenge" data-scrollto="#section-challenge" data-offset="50" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
				</div>



				<!-- Page Sub Menu
				============================================= -->
				<div id="page-menu">
					<div id="page-menu-wrap">
						<div  class="container clearfix">



							<nav class="one-page-menu">
								<ul class="js-page-submenu-list">
									<li><a href="#" data-origin="#section-home" data-href="#section-home"><div>HOME</div></a></li>
									<li><a href="#" data-origin="#section-challenge" data-href="#section-challenge-onepage-anchor"><div>CHALLENGE</div></a></li>
									<li><a href="#" data-origin="#section-mvp" data-href="#section-mvp-anchor"><div>MVP</div></a></li>
									<li><a href="#" data-origin="#section-solution" data-href="#section-solution"><div>SOLUTION</div></a></li>
									<li><a href="#" data-origin="#section-keynumbers" data-href="#section-keynumbers" data-offset="103"><div>KEY RESULTS</div></a></li>
									<li><a href="#" data-origin="#section-timeline" data-href="#section-timeline-anchor"><div>TIMELINE</div></a></li>
									<li><a href="#" data-origin="#section-testimonials" data-href="#section-testimonials" data-offset="103"><div>TESTIMONIALS</div></a></li>
									<li><a href="#" data-origin="#section-team" data-href="#section-team-anchor" data-offset="103"><div>TEAM</div></a></li>
									<li><a href="#" data-origin="#section-contact" data-href="#section-contact" data-offset="103"><div>CONTACT</div></a></li>
								</ul>
							</nav>

						<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

						</div>
					</div>
				</div><!-- #page-menu end -->
				<div id="changeText">

				<div id="section-challenge" class="page-section">
					<div class="row common-height clearfix">

						<div class="col-md-7 col-padding col-padding-mobile allow-overflow-y">
							<div class="wrapChallenge">
								<div class="heading-block" id="section-challenge-onepage-anchor">
									<span style="font-family: CorpidE1sRegular;font-size: 16px; font-weight: normal;font-style: normal;font-stretch: normal;line-height: 1.88;letter-spacing: normal; color: #a6a6a6!important;">All about</span>

									<h2 class="section-title">LCD &amp; THE <span class="section-title-highlight">CHALLENGE</span></h2>
								</div>

								<div class="row clearfix challenge-text-container">

									<div class="col-md-12">

										<p class="textoChallenge">
											Leonard Cheshire Disability (LCD) is one of the UK’s oldest and largest disability-focused civil society organizations with over 65 years of experience supporting disabled people in various ways. One of LCD’s key initiatives is the Access to Livelihoods (A2L) program, for people with disabilities seeking employment in Africa and Asia. LCD provides training, career guidance and links between employees and employers to help people with disabilities get <a href="https://en.wikipedia.org/wiki/Decent_work" class="paragraph-link">decent work</a>.
										</p><br/>
										<p class="textoChallenge">
											The priority challenge is their current information retrieval process for the A2L program, which includes identification, registration and assessment. The manual process is resulting in beneficiary drop-outs, and is neither an engaging experience to persons with disabilities, nor an efficient process for LCD. While being relevant globally, the initial focus is on the A2L program in India.
										</p>
										<button class="btnChallenge" id="btChallenge" onclick="window.open('http://www.jobability.org/');">
											VISIT THE WEB
										</button>
									</div>



								</div>

							</div>
						</div>

						<div class="col-sm-5 col-padding challenge-wrapper-image" style="background: url('images/lcd-compressed/intro.jpeg') center center no-repeat; background-size: cover;"></div>

					</div>
				</div>

					<div id="section-mvp" class="page-section section parallax clearfix dark mvpFondo " data-stellar-background-ratio="0.4">
						<span id="section-mvp-anchor"></span>
					   	<div class="heading-block center nobottomborder nobottommargin">

							<h2 class="t500 nott texto-sup whitetitle"><span class="greentitle">MVP</span> STATEMENT</h2>
							<span class="textMVP">
								With <span style="color:#17b5a9;line-height: 37px;">guidance</span> from a <span style="color:#17b5a9;">virtual assistant</span>,
								persons with <span style="color:#17b5a9;">disabilities</span> can access and easily complete the registration process <span style="color:#17b5a9;">by themselves</span>,
								 so that they can feel <span style="color:#17b5a9;">confident and happy</span> about taking the first step towards <span style="color:#17b5a9;">getting a decent job</span>.
							</span>
						</div>
				  	</div>

				<div id="section-solution" class="page-section container">

						<h2 class="t500 nott texto-sup">SOLUTION </h2>
						<div class="textoTeam" style="margin-bottom: 10px;">

						We built a <b>virtual registration assistant</b>, Nandini, for Leonard Cheshire Disability (LCD) to allow job seekers with varied disabilities to <b>digitally register themselves</b> in an easy, engaging and accessible manner. Nandini guides the job seeker through <b>6 sections of questions</b> to complete the initial registration process as the <b>first step towards getting a decent job</b>. Throughout the process Nandini provides <b>multiple choice answers, responds to help requests, analyzes the user's emotional state, and provides examples and the reasoning</b> behind her questions while always showing the progress toward completion and making sure the user is engaged.<br /><br />
						The expected results are <b>happier, more engaged users</b> with less drop-outs during and after registration, as well as reducing time spent by LCD staff, increased data quality and the primary goal: <b>getting more people into decent and relevant jobs</b>.
						</div>


							<div class="fslider bottommarginslider" data-animation="fade">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<a>
										<img src="images/lcd-compressed/solution-slider/img_slider_solution1.jpg" alt="Slide 1">
									</a>
								</div>
								<div class="slide">
									<a>
										<img src="images/lcd-compressed/solution-slider/img_slider_solution2.jpg" alt="Slide 2">
									</a>
								</div>
								<div class="slide">
									<a>
										<img src="images/lcd-compressed/solution-slider/img_slider_solution3.jpg" alt="Slide 3">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="footerSolution" style="margin-bottom: 20px;">
					<div class="textoTeam" style="margin-bottom: 30px;">Nandini uses the IBM Bluemix Platform along with IBM Watson Conversation, Tone Analyzer and Text-to-Speech services.</div>



						<div class="solutions-container">
							<div class="solutions-item">
								<a href="https://console.ng.bluemix.net" target="_blank" class="solutions-item__link">
									<img src="images/lcd/bluemix.png" alt="ibm bluemix" class="solutions-item__link-image"/>
									<span class="solutions-item__link-text"><span class="link-hover">IBM BLUEMIX</span></span>
								</a>
							</div>
							<div class="solutions-item">
								<a href="https://www.ibm.com/watson/developercloud/conversation.html" target="_blank" class="solutions-item__link">
									<img src="images/lcd/conversation.png" alt="ibm bluemix" class="solutions-item__link-image"/>
									<span class="solutions-item__link-text"><span class="link-hover">CONVERSATION</span></span>
								</a>
							</div>
							<div class="solutions-item">
								<a href="https://www.ibm.com/watson/developercloud/tone-analyzer.html" target="_blank" class="solutions-item__link">
									<img src="images/lcd/service-icon.png" alt="ibm bluemix" class="solutions-item__link-image"/>
									<span class="solutions-item__link-text"><span class="link-hover">TONE ANALYZER</span></span>
								</a>
							</div>
							<div class="solutions-item">
								<a href="https://www.ibm.com/watson/developercloud/text-to-speech.html" target="_blank" class="solutions-item__link">
									<img src="images/lcd/textto-speech.png" alt="ibm bluemix" class="solutions-item__link-image"/>
									<span class="solutions-item__link-text"><span class="link-hover">TEXT TO SPEECH</span></span>
								</a>
							</div>
							<div class="solutions-item">
								<a href="https://www.ibm.com/watson/" target="_blank" class="solutions-item__link">
									<img src="images/lcd/watson.png" alt="ibm bluemix" class="solutions-item__link-image"/>
									<span class="solutions-item__link-text"><span class="link-hover">IBM WATSON</span></span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div id="section-keynumbers" class="page-section">

					<div class="clearfix">

						<div class="col-sm-6 col-md-3 center key-result">
							<div class="key-result__image">
								<img src="images/lcd/virtualassistant.png" alt="virtual agent"/>
							</div>
							<div class="key-result__description">
								Guided virtual<br> agent
							</div>
						</div>

						<div class="col-sm-6 col-md-3 center key-result">
							<div class="key-result__image">
								<img src="images/lcd/chat.png" alt="natural dialog"/>
							</div>
							<div class="key-result__description">
								Adaptative and<br> natural dialogue
							</div>
						</div>

						<div class="col-sm-6 col-md-3 center key-result">
							<div class="key-result__image">
								<img src="images/lcd/lowvision.png" alt="low vision"/>
							</div>
							<div class="key-result__description">
								Low vision<br> accesibility
							</div>
						</div>

						<div class="col-sm-6 col-md-3 center key-result">
							<div class="key-result__image">
								<img src="images/lcd/gamification.png" alt="gamification"/>
							</div>
							<div class="key-result__description">
								Gamification
							</div>
						</div>
					</div>

				</div>

				<div id="section-timeline" class="page-section">

					<div class="content-wrap fondoTimeline">

						<span id="section-timeline-anchor"></span>
						<h2 class="t500 texto-sup">PROTOTYPE <span class="greentitle">TIMELINE</span> </h2>
						<div class="container clearfix">

							<!-- Posts
							============================================= -->

							<div id="posts" class="post-grid grid-container post-masonry post-timeline grid-2 clearfix">

								<div class="timeline-border"></div>

								<div class="entry entry-date-section notopmargin"><span class="borderBoxDateTimeline">FEBRUARY 2017</span></div>

								<div class="entry clearfix boxBorder">
									<div class="entry-timeline">
										<div class="timeline-divider"></div>
									</div>

									<div class="entry-title cajasIzqTimeline">
										<h2><span class="txtSixeTm">DESIGN THINKING WORKSHOPS</span> <a class="rigthdateTimeline">1<span class="date-detail">st</span>/2<span class="date-detail">nd</span></a></h2>

									</div>

									<div class="entry-content">
										<p style="text-align: end;" class="txtInP">Initial creative workshop in London, UK, to ideate on concept and define scope for the prototype. Attendees from LCD UK and India, as well as Accenture Corporate Citizenship and ACIT Cloud Studio, participated.</p>
									</div>
								</div>

							   <div class="entry clearfix boxBorder">
									<div class="entry-timeline">
										<div class="timeline-divider"></div>
									</div>
									<div class="entry-title">
										<h2><a class="leftdateTimeline">9<span class="date-detail">th</span>/</a><p class="txtSixeTm">FIRST ITERATION WIREFRAMES</p></h2>
									</div>

									<div class="entry-content">
										<p class="txtInP">Defined concepts after the initial workshop, creating and iterating paper & digital wireframes. Focus on including key components for questions, progress and gamification in an accessible and engaging manner.</p>
									</div>

							</div>

								   <div class="entry clearfix boxBorder">
									<div class="entry-timeline">
										<div class="timeline-divider"></div>
									</div>
									<div class="entry-title">
										<h2><a class="leftdateTimeline">21<span class="date-detail">st</span>/</a><p class="txtSixeTm">USER TESTING</p></h2>
									</div>

									<div class="entry-content">
										<p class="txtInP">On-site usability testing with a low vision user at Accenture India offices, to evaluate and get input on the application. Design & UX was then refined based on observed user behavior and feedback.</p>

									</div>
							</div>

							<div class="entry clearfix boxBorder">
									<div class="entry-timeline">
										<div class="timeline-divider"></div>
									</div>

									<div class="entry-title cajasIzqTimeline">
										<h2><span class="txtSixeTm">FIRST DEVELOPMENT ITERATION DONE</span> <a class="rigthdateTimeline">/16<span class="date-detail">th</span></a></h2>
									</div>

									<div class="entry-content">
										<p style="text-align: end;" class="txtInP">Completed wireframes after several iterations with LCD and Accenture stakeholders. Based on that process, the first working version of the virtual registration assistant based on IBM Watson technology was implemented and ready for user testing.</p>
									</div>
								</div>


							   <div class="entry clearfix boxBorder">
									<div class="entry-timeline">
										<div class="timeline-divider"></div>
									</div>
									<div class="entry-title">
										<h2><a class="leftdateTimeline">23<span class="date-detail">rd</span>/</a><p class="txtSixeTm">GRAPHIC DESIGN COMPLETED</p></h2>
									</div>

									<div class="entry-content">
										<p class="txtInP">The graphic design was completed, enabling the front-end team to radically improve the feel and accessibility of the application.</p>

									</div>
							</div>


								<div class="entry entry-date-section"><span class="borderBoxDateTimeline">MARCH 2017</span></div>

								<div class="entry clearfix boxBorder">
									<div class="entry-timeline">
										<div class="timeline-divider"></div>
									</div>

									<div class="entry-title cajasIzqTimeline">
										<h2><span class="txtSixeTm">FINALIZING PROTOTYPE</span> <a class="rigthdateTimeline">/2<span class="date-detail">nd</span></a></h2>
									</div>

									<div class="entry-content">
										<p style="text-align: end;" class="txtInP">Refined design and UX based on 2nd round of usability testing. Implemented additional intelligent features to better guide the user through the registration process. Showcased the benefits and capabilities of the application through a live demo. Discussed next steps to move toward production deployment.</p>
									</div>
								</div>

							</div><!-- #posts end -->


						</div>

					</div>


				</div>

						<div id="section-testimonials" class="page-section parallax nomargin notopborder dark" style="background-image: url('images/lcd-compressed/testimonials_img.jpg'); background-size: cover;padding-top: 50px;" data-stellar-background-ratio="0.3"; >
					<div class="container clearfix">

						<div class="heading-block center" id="section-challenge-onepage-anchor">
							<h2 class="section-title">TESTIMONIALS</span></h2>
						</div>

						<div class="row">

							<div class="col-md-6 bottommargin" style="display: flex;flex-direction: column;">
							<div class="testi-image fotoEmpresa fix-testi-image">
										<a class="fix-testi-a"><img src="images/lcd/logo2.png" alt="Customer Testimonails" class="logo-fix-mobile"></a>
									</div>
								<div class="testimonial">

									<div class="testi-content">

										<div class="testi-text-container default">
											<p class="textotestimonials">The ACIT methodology helped us review our current processes and <a class="verde">identify areas for improvement</a> from day one. In each sprint we were <a class="verde">able to move very fast</a>, and in only four weeks we managed to reduce the time spent on registration and assessment by more than half, while also <a class="verde">making the process more engaging</a> for our users.
											<p class="textotestimonials">When fully implemented, we expect the solution to<a class="verde"> significantly scale our reach</a> and enable additional <a class="verde">custom-tailored services</a> to be offered.</p>
										</div>


										<div class="testimonials-author">
											<div class="testimonials-author__image">
												<img src="images/lcd-compressed/testimonials-pics/alessandra.png" alt="alessandra furtado" class="image">
											</div><!--
											--><div class="testimonials-author__info">
												<div class="testi-meta">ALESSANDRA FURTADO</div>
												<span style=" font-family: CorpidE1sRegular;font-size: 14px;text-align: center;color: #a6a6a6;">Assistant Director International Resourcing & Development<br> Leonard Cheshire Disability</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6 bottommargin" style="display: flex;flex-direction: column;padding-top: 41px;">
								<div class="testi-image fotoEmpresa fix-testi-image">
										<a class="fix-testi-a" style="margin-left: -8%;"><img src="images/lcd/accenture-logo.png" alt="Customer Testimonails" class="logo-fix-mobile small"></a>
									</div>
								<div class="testimonial">

									<div class="testi-content">
										<div class="testi-text-container default">
											<p class="textotestimonials">This has been a <a class="verde">dynamic, inclusive and fast-moving project</a>.  At the end of these four weeks, we have an application that meets the stated needs we established at the onset. I believe this is<a class="verde"> a first, and significant step</a> towards an enablement platform that will help people with disabilities position themselves for <a class="verde">success via on-line, digital resources.</a></p>
										</div>
										<div class="testimonials-author">
											<div class="testimonials-author__image">
												<img src="images/lcd-compressed/testimonials-pics/heidi.png" alt="heidi strawson" class="image">
											</div><!--
											--><div class="testimonials-author__info small">
												<div class="testi-meta">HEIDI STRAWSON</div>
												<span style=" font-family: CorpidE1sRegular;font-size: 14px;text-align: center;color: #a6a6a6;">Global Giving Lead<br> Accenture Corporate Citizenship</span>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

					<span id="section-team-anchor"></span>
					<div id="section-team" class="page-section topmargin-lg-team">
					<!--section id="section-team" class="page-section topmargin-lg"-->
					<div class="center">

						<h2 class="section-title">OUR <span class="section-title-highlight">TEAM</span></h2>
					</div>
						<a class="lineaBordeRosa"></a>
					<div class="container clearfix">
				<div class="textoTeam">
				The ACIT Norway Cloud Studio team is a <b>multi-disciplinary team</b> with resources from Accenture Technology, Digital and Security. <br>Our <b>diversity is one of our strengths</b>; working with people with different backgrounds and skills helps us see the bigger picture and <b>think outside the box</b>.
As a Cloud Studio team, our goal is <b>speed and innovation</b>, which we accomplish by embracing change and the <b>New IT mindset</b>.<br/><br />
This prototype, while primarily driven from Norway, was a real cross-studio initiative including key resources from our Spain, India and US Cloud Studios collaborating in a distributed manner.
<br />


				</div>


				<div class="team-people-list">

					<div class="row-4-elm">

						<div class="team-people-item">
							<div class="team-people-item__image">
								<img src="images/lcd-compressed/team-pics/christer.s.idland.png" alt="Christer">
							</div>
							<div class="team-people-item__name">
								CHRISTER
							</div>
							<div class="team-people-item__role">
								Prototype Lead
							</div>

						</div>
						<div class="team-people-item">
							<div class="team-people-item__image">
								<img src="images/lcd-compressed/team-pics/lars.henrik.nordli.png" alt="Lars Henrik">
							</div>
							<div class="team-people-item__name">
								LARS HENRIK
							</div>
							<div class="team-people-item__role">
								Front-end Developer
							</div>
						</div>
						<div class="team-people-item">
							<div class="team-people-item__image">
								<img src="images/lcd-compressed/team-pics/tiril.syversen.png" alt="Tiril Syversen">
							</div>
							<div class="team-people-item__name">
								TIRIL
							</div>
							<div class="team-people-item__role">
								UX Designer
							</div>
						</div>
						<div class="team-people-item">
							<div class="team-people-item__image">
								<img src="images/lcd-compressed/team-pics/kjetil.aamodt.png" alt="Kjetil Aamodt">
							</div>
							<div class="team-people-item__name">
								KJETIL
							</div>
							<div class="team-people-item__role">
								Technical Architect
							</div>
						</div>


					</div>


					<div class="row-3-elm">
						<div class="team-people-item">
							<div class="team-people-item__image">
								<img src="images/lcd-compressed/team-pics/alba.fernandez.png" alt="Alba Fernandez">
							</div>
							<div class="team-people-item__name">
							ALBA
							</div>
							<div class="team-people-item__role">
							UI Designer
							</div>
						</div>
						<div class="team-people-item">
							<div class="team-people-item__image">
								<img src="images/lcd-compressed/team-pics/siri.oyen.larsen.png" alt="Siri">
							</div>
							<div class="team-people-item__name">
							SIRI
							</div>
							<div class="team-people-item__role">
							Analytics Specialist
							</div>
						</div>
						<div class="team-people-item">
							<div class="team-people-item__image">
								<img src="images/lcd-compressed/team-pics/jonny.mauland.png" alt="Jonny">
							</div>
							<div class="team-people-item__name">
							JONNY
							</div>
							<div class="team-people-item__role">
							Cloud Studio Lead
							</div>
						</div>
					</div>


				</div>

						</div>
					</div>
				<!--/section-->
					</div>

					<div id="section-contact" class="row common-height noleftmargin norightmargin intro-support-block clearfix">
						<div class="col-sm-6 col-md-3 nopadding center">
							<div class="clearfix">
								<a href="mailto:acit-ww@accenture.com" class="col-padding-contact">
									<img src="images/lcd/send.png"/>
									<span class="txtcontact">SEND US AN EMAIL</span>
								</a>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 nopadding center">
							<div class="clearfix">
								<a href="https://ts.accenture.com/sites/Accenture%20Innovation%20Center%20for%20IBM%20Technologies/ACIT%20Microsite/SitePages/Home.aspx" class="col-padding-contact" target="_blank">
									<img src="images/lcd/home.png"/>
									<span class="txtcontact">VISIT OUR HOME</span>
								</a>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 nopadding center">
							<div class="clearfix">
								<a href="https://ts.accenture.com/sites/Accenture%20Innovation%20Center%20for%20IBM%20Technologies/ACIT%20Microsite/SitePages/cloudstudio.aspx" class="col-padding-contact" target="_blank">
									<img src="images/lcd/cloud.png"/>
									<span class="txtcontact">ABOUT CLOUD STUDIO</span>
								</a>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 nopadding center">
							<div class="clearfix">
								<a href="https://acit-demo-catalog.mybluemix.net/#/catalog-landing" class="col-padding-contact" target="_blank">
									<img src="images/lcd/archive.png"/>
									<span class="txtcontact">DEMO CATALOG</span>
								</a>
							</div>
						</div>
					</div>
				</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container center clearfix">
					<p class="textFooter">ACIT <font class="pink">CLOUD STUDIO</font></p>
					<a class="textFooter2" href="https://ts.accenture.com/sites/Accenture%20Innovation%20Center%20for%20IBM%20Technologies/ACIT%20Microsite/SitePages/Home.aspx " target="_blank">&copy; 2017  Accenture Center for IBM Technologies (ACIT)</a><br>


				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="" style="margin-left: 40%;">
		<i class="icon-angle-up"></i>
	</div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.min.js"></script>

<script>
jQuery(window).load(function(){

	var $container = $('#posts');

	$container.isotope({
		itemSelector: '.entry',
		masonry: {
			columnWidth: '.entry:not(.entry-date-section)'
		}
	});

});

</script>


	<script type="text/javascript">
		 $(document).ready(function() {
			$('#incfont').click(function( event ){
				event.preventDefault();
					        curSize= parseInt($('.ctexto').css('font-size')) +6;

				$('.testi-text-container').toggleClass('default font-big');

			if(curSize<=40)
	        $('#changeText *').css('font-size', curSize);
	        });
			$('#decfont').click(function( event ){
				event.preventDefault();
		        curSize= parseInt($('.ctexto').css('font-size')) - 2;
				$('.testi-text-container').toggleClass('default font-big');
			if(curSize>=14)
	        $('#changeText *').css('font-size', curSize);
	        });
		});
	</script>

	<script>

	var mediaquery = window.matchMedia("(max-width: 600px)");

	/*
	if (mediaquery.matches) {
		console.log('menos de 600')
		document.getElementById('activateSound').innerHTML='';
	} else {

	}
	*/
	</script>

	<script type="text/javascript">

		jQuery(window).load(function(){

			var $container = $('#posts');

			$container.isotope({
				itemSelector: '.entry',
				masonry: {
					columnWidth: '.entry:not(.entry-date-section)'
				}
			});

			$container.infinitescroll({
				loading: {
					finishedMsg: '<i class="icon-line-check"></i>',
					msgText: '<i class="icon-line-loader icon-spin"></i>',
					img: "images/preloader-dark.gif",
					speed: 'normal'
				},
				state: {
					isDone: false
				},
				nextSelector: "#load-next-posts a",
				navSelector: "#load-next-posts",
				itemSelector: "div.entry",
				behavior: 'portfolioinfiniteitemsloader'
			},
			function( newElements ) {
				$container.isotope( 'appended', $( newElements ) );
				var t = setTimeout( function(){ $container.isotope('layout'); }, 2000 );
				SEMICOLON.initialize.resizeVideos();
				SEMICOLON.widget.loadFlexSlider();
				SEMICOLON.widget.masonryThumbs();
				var t = setTimeout( function(){
					SEMICOLON.initialize.blogTimelineEntries();
				}, 2500 );
			});

			var t = setTimeout( function(){
				SEMICOLON.initialize.blogTimelineEntries();
			}, 2500 );

			$(window).resize(function() {
				$container.isotope('layout');
				var t = setTimeout( function(){
					SEMICOLON.initialize.blogTimelineEntries();
				}, 2500 );
			});

		});

	</script>
	<script>
		var currentAudio = new Audio();
		var currentSection = '';
		var btnSound = $('#activateSound');
		var switchText = $('#switch-text');
		var soundActivated = false;

		btnSound.on('click',function(){
			if (soundActivated) {
				currentAudio.pause();
				switchText.html('ON');
			} else {
				currentSection = SEMICOLON.header.onePageCurrentSection();
				currentAudio = getCurrentAudio(currentSection);
				currentAudio.play();
				switchText.html('OFF');
			}
			btnSound.toggleClass('apagado encendido');
			soundActivated = !soundActivated;
		});

		$(window).scroll(function() {
			if (soundActivated) {
				var scrollSection = SEMICOLON.header.onePageCurrentSection();
				if (currentSection !== scrollSection) {
					currentSection = scrollSection;
					currentAudio.pause();
					currentAudio = getCurrentAudio(currentSection);
					currentAudio.play();
				}
			}
		});

		function getCurrentAudio(section) {
			var newAudio = undefined;
			switch (currentSection) {
				case 'home':
					newAudio = new Audio('transcription/Home.ogg');
			 		break;
				case 'section-challenge':
			 		newAudio = new Audio('transcription/TheChallenge.ogg');
			 		break;
				case 'section-mvp':
					newAudio = new Audio('transcription/mvp.ogg');
			 		break;
				case 'section-solution':
					newAudio = new Audio('transcription/Solution.ogg');
			 		break;
				case 'section-keynumbers':
					newAudio = new Audio('transcription/keyRdos.ogg');
			 		break;
				case 'section-timeline':
					newAudio = new Audio('transcription/timeline.ogg');
			 		break;
				case 'section-testimonials':
					newAudio = new Audio('transcription/testimonials.ogg');
			 		break;
				case 'section-team':
					newAudio = new Audio('transcription/team.ogg');
			 		break;
			}
			return newAudio;
		}
	</script>

</body>
</html>
