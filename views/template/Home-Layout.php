<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Student Management System | SpiceDigital</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!--
    <link rel="stylesheet" href="${pageContext.request.contextPath}/resources/offline-bootstrap/bootstrap.min.css"/>
    <script src="${pageContext.request.contextPath}/resources/offline-bootstrap/jquery-1.12.0.min.js"></script>
    -->
    <link href="../resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../resources/styles/main.css" rel="stylesheet" />
    <link href="../resources/styles/responsive.css" rel="stylesheet" />
</head>

<body>
	<?php include("Home-Header.php"); ?>
	<?php include("Model/loginModel.htm"); ?>
	<?php include("Model/registerModel.htm"); ?>
    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="../resources/images/slider/bg1.jpg" alt="slider">						
					<div class="carousel-caption">
						<h2>Job Skill Tests </h2>
						<h4>What Job Skills Do You Have?</h4>
						<a href="#test">Start Test Now <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="../resources/images/slider/bg2.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>Test Your Skills </h2>
						<h4>Think about the things you are good at doing</h4>
						<a href="#test">Start Test Now <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="../resources/images/slider/bg3.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>Find the Resources </h2>
						<h4>Resources That Will Help You Most</h4>
						<a href="#study" >Learn What you Like <i class="fa fa-angle-right"></i></a>
					</div>
				</div>			
			</div>
		</div>    	
    </section>
    <!--/#home-->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
    <!-- <script src="../resources/offline-bootstrap/bootstrap.min.js" ></script> -->

	<script type="text/javascript" src="../resources/js/MobileView.js"></script>
</body>
</html>