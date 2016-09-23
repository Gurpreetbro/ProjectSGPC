(function ($) {
    $.fn.shake = function (options) {
        // defaults
        var settings = {
            'shakes': 2,
            'distance': 10,
            'duration': 400
        };
        // merge options
        if (options) {
            $.extend(settings, options);
        }
        // make it so
        var pos;
        return this.each(function () {
            $this = $(this);
            // position if necessary
            pos = $this.css('position');
            if (!pos || pos === 'static') {
                $this.css('position', 'relative');
            }
            // shake it
            for (var x = 1; x <= settings.shakes; x++) {
                $this.animate({ left: settings.distance * -1 }, (settings.duration / settings.shakes) / 4)
                    .animate({ left: settings.distance }, (settings.duration / settings.shakes) / 2)
                    .animate({ left: 0 }, (settings.duration / settings.shakes) / 4);
            }
        });
    };
}(jQuery));


(function($, W, D) {
	var JQUERY4U = {};

	JQUERY4U.UTIL = {
		setupFormValidation : function() {
			// form validation rules
			$("#signupform")
					.validate(
							{
								rules : {
									email : {
										required : true,
										email : true
									},
									username : "required",
									userpass : {
										required : true,
										minlength : 5
									},
									confpass : {
					                    minlength : 5,
					                    equalTo : "#userpass"
					                }
								},
								messages : {
									username : "Please enter your desired UserName",
									userpass : {
										required : "Please provide a password",
										minlength : "Your password must be at least 5 characters long"
									},
									email : "Please enter a valid email address",
									confpass : "Confirm Password does not match"
								},
								errorPlacement: function(error, element){
									 if ( element.is(":radio") || element.is(":checkbox")){
										 error.insertAfter(element.parent()).shake();
										 //error.insertAfter(element.parent()).animate({opacity: 0.25, left: '+=50'});
									} else {
										error.insertAfter(element).shake();
										error.insertAfter(element).animate({opacity: 0.50});
										//error.insertAfter(element).animate({opacity: 0.25, left: '+=50'});
									}
								},
								submitHandler : function(form) {
									form.submit();
								}
							});
		}
	}

	// when the dom has loaded setup form validation rules
	$(D).ready(function($) {
		JQUERY4U.UTIL.setupFormValidation();
	});

})(jQuery, window, document);