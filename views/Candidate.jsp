<%-- <%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>OnlineTestPortal | CANDIDATE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<spring:url value="/resources/styles/header.css"/>" />
	<link rel="stylesheet" href="<spring:url value="/resources/styles/candidate.css"/>" />
	<link rel="stylesheet" href="<spring:url value="/resources/styles/home.css"/>" /> --%>
	<script src="${pageContext.request.contextPath}/resources/js/countdown-timer.js" type="text/javascript"></script>
<%-- </head>
<body>
	<jsp:include page="../views/fragments/OLDheader.jsp" /> --%>
	<div class="container" style="margin-top: 80px">
		<div class="row profile">
			<jsp:include page="../views/fragments/candidate_SideBar.jsp" />
			<div class="col-md-9">
				<div class="profile-content">
					Some Candidate related content goes here...
					<div id="timer">
						<input id="minutes" type="text" style="width: 14px; border: none; background-color: none; font-size: 16px; font-weight: bold;">
						:
						<input id="seconds" type="text" style="width: 26px; border: none; background-color: none; font-size: 16px; font-weight: bold;">
					</div>
					<div class="row" style="width: ">
    					<!-- <div class="col-md-2 col-md-offset-5"> -->
    						<p id="Question">${question}1. fkjdfhkjshfkjdhdskfhjfdsfhkjfhkjdfhjkshfdshfjshfkshkjfhfsdkjfhfbsjbskfbjkfhsfsjfkhsdfhdffhfhjskdfhhfkjshfhkfhshfkjsdhjfhsjdhf</p>
    						<div class="row">
    							<div class="col-md-6">a) sddsdsdsdsd dsdsddsdsd</div>
    							<div class="col-md-6">b) fdfdfdfdff fdfdfdfdfdsdfe</div>
    						</div>
    						<div class="row" style="margin-top: 20px">
    							<div class="col-md-6">c) dfsdfvvsdfdf dsdsddsdsd</div>
    							<div class="col-md-6">d) nkjfnfnosfns fslfjoifh87e</div>
    						</div>
    					<!-- </div> -->
					</div>
					<button class="btn btn-primary" onclick="countdown()">Start Timer</button>
				</div>
			</div>
		</div>
	</div>
	<%-- <jsp:include page="../views/fragments/footer.jsp" />
</body>
</html> --%>