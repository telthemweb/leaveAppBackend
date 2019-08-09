$(document).ready(function(){

	$("#submit").click(function() {	 
		event.preventDefault();
		var ec_number = $("#ec_number").val();
		var password = $("#password").val();

		 if(ec_number.length == "" || password.length == ""){
        $("#message").html("Please fill out this fields first");
        $("#message").addClass("error");
         return false;
	}else{

		 $.ajax({
          type : 'POST',
          url  : './server/loginServer.php',
          data : {ec_number:ec_number,password:password},
          success : function(feedback){
             $("#text").html(feedback);
             if (feedback === 'failed')
                  alert('Please check your login details!');
              else
                  window.location = window.location;
           }
          });
	}
  });

	$(".ec_number_error_text").hide();
    $(".password_error_text").hide();

    var error_ec_num = false;
    var error_password = false;

      $("#ec_number").focusout(function(){
      check_ecnumber();
    });

    $("#password").focusout(function(){
      check_password();
    });

    function check_ecnumber() {
    	$("#message").hide();
    	var pattern = new RegExp(/^(([A-Za-z]+[0-9]|[0-9]+[A-Za-z])[A-Za-z0-9]*)+$/);
    	if(!pattern.test($("#ec_number").val())){
    	 $(".ec_number_error_text").html("Invalid EC Number");
         $(".ec_number_error_text").show().addClass("errorText");
         	error_ec_num = true;
    	}
    }
    function check_password() {
     $("#message").hide();
	    var password_length = $("#password").val().length;
	    if(password_length <8 ){
	         $(".password_error_text").html("Password should be at least 8 characters");
	         $(".password_error_text").show().addClass("errorText");
	         error_password = true;
	      }else{
	         $(".password_error_text").hide();
	      }
    }
	
});