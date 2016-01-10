
$(document).ready(function(){

$('#signup').click(function(event){

	$('#signupform').validate({
		rules:{
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			number: {
				required: true,
				number: true
			},
			univerisity: {
				required: true
			}
		},
		highlight: function(element) {
	        $(element).closest('.form-group').addClass('has-error');
	    },
	    unhighlight: function(element) {
	        $(element).closest('.form-group').removeClass('has-error');
	    },
	    errorElement: 'span',
	    errorClass: 'help-block',
	    errorPlacement: function(error, element) {
	        if(element.parent('.input-group').length) {
	            error.insertAfter(element.parent());
	        } else {
	            error.insertAfter(element);
	        }
	    }
	});

})

})