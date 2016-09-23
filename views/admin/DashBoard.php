<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>SGPC | ADMIN | DashBoard</title>
</head>
<body> -->
<h1>DashBoard</h1>
<!-- </body>
</html> -->
<script>
	$(document).ready(function(){

		 $("#publish").click(function () {
			 var html = '<li><div class="panel-body" style="display: inline-block">'+$("#inputsm").val()+'</div></li>';
			 $(html).hide().prependTo("#news").fadeIn(1000);
			 $("#inputsm").val("");
		});
	});
		
</script>


<div class="form-group" style="width: 95%;">
    <label for="inputsm">Publish News</label>
    <input class="form-control input-sm" id="inputsm" type="text" placeholder="Enter News to publish">
   
  </div>  
  
  <div align="center"><button type="button" id="publish" class="btn btn-success">Publish</button></div><br/>
	<div id="panel" class="panel panel-primary" style="width: 95%;">
      <div class="panel-heading">News</div>
      <ul id="news" >
      	<li><div class="panel-body" style="display: inline-block">1) News1</div></li>
       	<li><div class="panel-body" style="display: inline-block">2) News2</div></li>
        <li><div class="panel-body" style="display: inline-block">1) News1</div></li>
       	<li><div class="panel-body" style="display: inline-block">2) News2</div></li>
        <li><div class="panel-body" style="display: inline-block">1) News1</div></li>
       	<li><div class="panel-body" style="display: inline-block">2) News2</div></li>
        <li><div class="panel-body" style="display: inline-block">1) News1</div></li>
       	<li><div class="panel-body" style="display: inline-block">2) News2</div></li>
        <li><div class="panel-body" style="display: inline-block" >1) News1</div></li>
       	<li><div class="panel-body" style="display: inline-block">2) News2</div></li>
       </ul>
    </div>