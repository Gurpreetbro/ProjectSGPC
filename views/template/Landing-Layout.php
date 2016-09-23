<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ taglib uri="http://tiles.apache.org/tags-tiles" prefix="tiles"%>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title><tiles:insertAttribute name="title" /></title>
	<c:if test="${properties['portal.status'] == 'ONLINE'}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </c:if>
    <c:if test="${properties['portal.status'] == 'OFFLINE'}">
    <link rel="stylesheet" href="${pageContext.request.contextPath}/resources/offline-bootstrap/bootstrap.min.css"/>
    <script src="${pageContext.request.contextPath}/resources/offline-bootstrap/jquery-1.12.0.min.js"></script>
    </c:if>
    <link href="${pageContext.request.contextPath}/resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="${pageContext.request.contextPath}/resources/styles/main.css" rel="stylesheet" />
    <link href="${pageContext.request.contextPath}/resources/styles/responsive.css" rel="stylesheet" />
    <link href="${pageContext.request.contextPath}/resources/styles/sidebar.css" rel="stylesheet">
    <link href="${pageContext.request.contextPath}/resources/styles/animate.css" rel="stylesheet">
</head>
<body>
	<tiles:insertAttribute name="header"/>
	<tiles:insertAttribute name="body"/>
	<tiles:insertAttribute name="footer"/>
</body>
</html>