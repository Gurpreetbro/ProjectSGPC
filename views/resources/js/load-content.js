$(document).ready(function() {
	var $loading = $('#loading').hide();
	$(document)
	  .ajaxStart(function () {
	    $loading.show();
	  })
	  .ajaxStop(function () {
	    $loading.hide();
	  });
	var trigger = $('#sidemenu ul li a'), container = $('#content');
	trigger.on('click', function() {
		container.html('');
		var $this = $(this), target = $this.data('target');
		var href = $this.attr('href');
		if(href == "#"){
			$.ajax({
		         type: "POST",
		         cache: false,
		         url: target,
		         data: "",
		         success: function(response){
		             container.html(response);
		         }
		    });
			return false;
		}
		else{
			return true;
		}
	});
	
	var buttTrigger = $("form :button");
	buttTrigger.on('click', function(){
		var values = {};
		$.each($(this).parents('form').serializeArray(), function(i, field) {
		    values[field.name] = field.value;
		});
		alert('JsonData: '+JSON.stringify(values));
		var $this = $(this), target = $this.data('target');
		$.ajax({
			type: "POST",
			/*url: "${pageContext.request.contextPath}/"+target,*/
			url: ""+target,
			contentType: "application/json; charset=utf-8",
		    data: JSON.stringify(values), //Stringified Json Object
		    cache: false,    //This will force requested pages not to be cached by the browser          
		    processData:false, //To avoid making query String instead of JSON
		    
			success: function(response){
				msgBox.html("Submit Successfully...");
			}
		});
		event.preventDefault();
	})
})
/*function getPage() {
	$('#content').html('<img src="./resources/images/loading.gif" />');
	jQuery.ajax({
		type: "POST",
		cache: false,
		url: "test",
		data:"",
		success: function(response){
            $('#content').html(response);
        }
	});
}*/

/*function getPage(content) {
	$('#content').html('<img src="loading.gif" />');
	jQuery.ajax({
		url: "/load",
		data:'content='+content,
		type: "POST",
		success:function(data){$('#content').html(data);}
	});
}*/

/*$(document).ready(function() {
	// Set trigger and container variables
	var trigger = $('#nav ul li a'), container = $('#content');

	// Fire on click
	trigger.on('click', function() {
		// Set $this for re-use. Set target from data attribute
		var $this = $(this), target = $this.data('target');

		// Load target page into container
		container.load(target);

		// Stop normal link behavior
		return false;
	});
});*/

/*$(function() {
	// don't cache ajax or content won't be fresh
	$.ajaxSetup({
		cache : false
	});
	var ajax_load = "<img src='./resources/images/loading.gif' alt='loading...' />";

	// load() functions
	var loadUrl = "load?content=test";
	$("#loadbasic").click(function() {
		$("#result").html(ajax_load).load(loadUrl);
	});

	// end
});*/