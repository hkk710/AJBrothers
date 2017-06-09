<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AJ Brothers</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	@if(Session::has('success'))
        <div class="card-panel teal lighten-2" style="background-color:#f21263 ;color:white;width:100%;margin:0px;top:0px;font-size:25px;text-align: center">
            {{ Session::get('success') }}
        </div>
    @endif
<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">AJ Brothers</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#work" class="smoothScroll">WORK</a></li>
				<li><a href="#about" class="smoothScroll">ABOUT</a></li>
				<li><a href="#team" class="smoothScroll">TEAM</a></li>
				<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>WEB DESIGN / WEB DEVELOPMENT / SOCIAL MEDIA</h3>
				<h1 style="color:#00c6d7">AJ Brothers</h1>
				<hr>
				<a href="#work" class="smoothScroll btn btn-danger">What we do</a>
				<a href="#contact" class="smoothScroll btn btn-default">Talk to us</a>
			</div>
		</div>
	</div>
</section>

<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>01</strong>
					<h1 class="heading bold">WHAT WE DO</h1>
					<hr>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<i class="icon-cloud medium-icon"></i>
					<h3>WEB Designing & Developing</h3>
					<hr>
					<p>Specialized for developing in php(laravel) also femiliar with python(django),jsp and asp.net(C#)</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="icon-mobile medium-icon"></i>
					<h3>UI &amp; UX DESIGN</h3>
					<hr>
					<p>AJ Brothers creates using free responsive Bootstrap v3.3.5. </p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-laptop medium-icon"></i>
					<h3>ECOMMERCE</h3>
					<hr>
					<p>We also creates ecommerce websites with shopping carts and online payment gateways.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-compass medium-icon"></i>
					<h3>MOBILE APP</h3>
					<hr>
					<p>We are also able to create mobile apps for android phones.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-chat medium-icon"></i>
					<h3>SOCIAL MEDIA</h3>
					<hr>
					<p>We also created social media websites with public and private chat facilities</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-browser medium-icon"></i>
					<h3>Desktop Applications</h3>
					<hr>
					<p>We are also creates Desktop Applications using c# and java with data base</p>
			</div>
		</div>
	</div>
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>02</strong>
					<h1 class="heading bold">OUR AGENCY</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="images/extra.jpg" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12">
				<h3 class="bold" style="color:#00c6d7">AJ Brothers</h3>
				<h1 class="heading bold">Best Design Team from India</h1>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">ABOUT</a></li>
				</ul>
				<!-- tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="design">
						<p>We are a fast growing Web Development team in India.We are students who really interested in Desiging and Developing websites</p>
						<p>We are always interested in updating ourself with the latest updates in securing the websites from online attacks.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>03</strong>
					<h1 class="heading bold">TALENTED TEAM</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn col-md-offset-3" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/hkk710.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Harikrishna AJ</h4>
							<h3>Core Developer</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="https://www.facebook.com/HKK710" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="https://twitter.com/HARIKRI32583827" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="https://plus.google.com/u/0/101243148586515942281" class="fa fa-google-plus wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/advaith1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Advaith AJ</h4>
							<h3>Core Developer</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="http://facebook.com/advaith3600" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="http://twitter.com/advaith3600" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="https://plus.google.com/+AdvaithAJ" class="fa fa-google-plus wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>04</strong>
					<h1 class="heading bold">OUR PREVIOUS WORKS </h1>
					<hr>
				</div>
				<!-- ISO section -->
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" data-filter="*" class="selected opc-main-bg">Some</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".html">of</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".photoshop">our</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".wordpress">recent</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".mobile">works</a></li>
               		</ul>
               		<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
               			<div class="iso-box-wrapper col4-iso-box">

							<div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
							   <a href="images/mihu.png" data-lightbox-gallery="portfolio-gallery"><img src="images/mihu.png" alt="portfolio img"></a>
							</div>
               				 <div class="iso-box html wordpress mobile col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/csaportal.png" data-lightbox-gallery="portfolio-gallery"><img src="images/csaportal.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/sports.png" data-lightbox-gallery="portfolio-gallery"><img src="images/sports.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html mobile col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/kalotsavam.png" data-lightbox-gallery="portfolio-gallery"><img src="images/kalotsavam.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/kst.png" data-lightbox-gallery="portfolio-gallery"><img src="images/kst.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/evs.png" data-lightbox-gallery="portfolio-gallery"><img src="images/evs.png" alt="portfolio img"></a>
               				 </div>

               			</div>
               		</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>06</strong>
					<h1 class="heading bold">CONTACT US</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">CONTACT INFO</h2>
				<p>AJ Brothers</p>
				<p>Trivandrum, Kerala, India</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>hkk710@gmail.com &nbsp; advaitharunjeena@gmail.com</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
					<p>9447103444 | 04712384003</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<form action="/send" method="POST" class="wow fadeInUp" data-wow-delay="0.6s" data-parsley-validate>
	                    {{ csrf_field() }}
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name="comment"></textarea>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
						<input type="submit" class="form-control" value="SEND MESSAGE">
					</div>
				</form>
			</div>
			@if (count($errors) > 0)
                    <div class="w3-container w3-red" style="margin-top: 10px">
                        <h3>Sorry!</h3>
                        <p>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
                </p>
                </div>
                @endif
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © 2017| Design: <span style="color:#00c6d7">AJBrothers</span></p>
				<hr>
			</div>
		</div>
	</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
