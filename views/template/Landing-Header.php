	<%@ taglib uri="http://tiles.apache.org/tags-tiles" prefix="tiles"%>
	<header id="header" role="banner">
		<div class="main-nav fixed-menu animated slideInDown">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
		        <div class="row">
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="${pageContext.request.contextPath}/resources/images/logo.png" alt="logo">
		                </a>
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">
		                    <!-- <li class="scroll active"><a href="home">Home</a></li>
		                    <li class="no-scroll"><a href="#study">Study More</a></li> -->
		                    <li><a href="<%= session.getAttribute("username") %>"><%= session.getAttribute("email") %></a></li>
		                    <li><a href="Logout">Logout</a></li>
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>
    </header>
    <!--/#header--> 