<%-- <%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Online Test Portal | Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<spring:url value="/resources/styles/header.css"/>"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
	<jsp:include page="../views/fragments/OLDheader.jsp"/> --%>
	<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
	<div class="container">
		Result: ${register_result}
		<c:if test="${register_result == 'success' }">
			<h1>${email} Registered Successfully</h1>
		</c:if>
		<c:if test="${register_result == 'UserAlreadyExist' }">
			<h1>${email} Already Exist</h1>
		</c:if>
	</div>
	<%-- <jsp:include page="../views/fragments/footer.jsp"/>
</body>
</html> --%>