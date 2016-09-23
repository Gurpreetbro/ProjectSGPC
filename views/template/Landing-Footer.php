<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<c:if test="${properties['portal.status'] == 'ONLINE'}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
</c:if>
<c:if test="${properties['portal.status'] == 'OFFLINE'}">
<script src="${pageContext.request.contextPath}/resources/offline-bootstrap/jquery-1.12.0.min.js"></script>
<script src="${pageContext.request.contextPath}/resources/offline-bootstrap/bootstrap.min.js" ></script>
</c:if>

<script type="text/javascript" src="${pageContext.request.contextPath}/resources/js/MobileView.js"></script>