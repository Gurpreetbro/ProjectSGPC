<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>SGPC Admin | SpiceDigital</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="../resources/offline-bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" href="../resources/offline-bootstrap/font-awesome.min.css"/> -->
	
	<link rel="stylesheet" href="../../resources/admin-styles/admin-header.css"/>
	<link rel="stylesheet" href="../../resources/admin-styles/admin-sidebar.css"/>
	<link rel="stylesheet" href="../../resources/admin-styles/admin-main.css"/>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="../../resources/js/load-content.js"></script>

</head>
<body>

	<?php include("Admin-Header.php"); ?>
	<?php include("../../fragments/admin_SideBar.htm"); ?>

	<div class="container" style="margin: 58px 0 20px 325px">
    <div id="content">
    	<div id="loading" class='loader size64'>
    		<div class='container'>
    			<div class="dotwrap"><div class="dot">&#x2b23;</div></div>
    			<div class="dotwrap"><div class="dot">&#x2b23;</div></div>
    			<div class="dotwrap"><div class="dot">&#x2b23;</div></div>
    			<div class="dotwrap"><div class="dot">&#x2b23;</div></div>
    			<div class="dotwrap"><div class="dot">&#x2b23;</div></div>
    		</div>
    		<!-- <span class='loader-text'>Loading&hellip;</span> -->
		</div>
    
    	<div id="loadImage" style="width: 300px; height: 100px; padding: 20px; position: absolute; top: 50%; left: 50%; margin: -70px 0 0 -170px;">
    		<img src="../../resources/images/loading.gif" />
    	</div>
    	<!-- <c:if test="${directContent != null }">
			<jsp:include page="../../admin/${directContent}.jsp"/>
		</c:if>
		<c:if test="${directContent == null }"> -->
    		<?php include("../../admin/DashBoard.php"); ?>
    	<!-- </c:if> -->
    </div>
	</div>
	
	<tiles:insertAttribute name="footer" />
</body>
</html>