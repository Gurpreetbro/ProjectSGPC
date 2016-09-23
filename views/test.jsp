<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OnlineTestPortal | TEST PAGE</title>

    <!-- Bootstrap -->
    <link href="${pageContext.request.contextPath}/resources/offline-bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="${pageContext.request.contextPath}/resources/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animation -->
    <link href="${pageContext.request.contextPath}/resources/styles/animate.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="${pageContext.request.contextPath}/resources/styles/custom.css" rel="stylesheet">
    
    <script src="${pageContext.request.contextPath}/resources/offline-bootstrap/jquery-1.12.0.min.js"></script>
<script src="${pageContext.request.contextPath}/resources/offline-bootstrap/bootstrap.min.js" ></script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="right_col" role="main">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                  </div>
                  <div class="count">179</div>

                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i>
                  </div>
                  <div class="count">179</div>

                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                  </div>
                  <div class="count">179</div>

                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i>
                  </div>
                  <div class="count">179</div>

                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
            </div>
          </div>
       </div>
     </div>
     
<script>
$.fn.serializeObject = function()
{
	alert();
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

$(function() {
    $('form').submit(function() {
    	alert();
        $('#result').text(JSON.stringify($('form').serializeObject()));
        return false;
    });
});
</script>
     
<h2>Form</h2>
<form action="" method="post">
First Name:<input type="text" name="Fname" maxlength="12" size="12"/> <br/>
Last Name:<input type="text" name="Lname" maxlength="36" size="12"/> <br/>
Gender:<br/>
Male:<input type="radio" name="gender" value="Male"/><br/>
Female:<input type="radio" name="gender" value="Female"/><br/>
Favorite Food:<br/>
Steak:<input type="checkbox" name="food[]" value="Steak"/><br/>
Pizza:<input type="checkbox" name="food[]" value="Pizza"/><br/>
Chicken:<input type="checkbox" name="food[]" value="Chicken"/><br/>
<!-- <textarea wrap="physical" cols="20" name="quote" rows="5">Enter your favorite quote!</textarea><br/> -->
Select a Level of Education:<br/>
<select name="education">
<option value="Jr.High">Jr.High</option>
<option value="HighSchool">HighSchool</option>
<option value="College">College</option></select><br/>
Select your favorite time of day:<br/>
<select size="3" name="TofD">
<option value="Morning">Morning</option>
<option value="Day">Day</option>
<option value="Night">Night</option></select>
<p><input type="submit" /></p>
</form>
<h2>JSON</h2>
<pre id="result">
</pre>
     
     
   </body>
</html>