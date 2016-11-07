  $(document).ready(function(){
        /*$('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });*/
        $("#UserName").focus();
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

        $(".link").on('click', function(){
          alert("fuck it!");
        });

/*===============================================================*/

        $("#UserName").on('blur', function(){
          var text = $(this).val();
          if (text == "") {
            $(this).focus();
            $('.alert').fadeIn(500);
            setTimeout( "$('.alert').fadeOut(1500);",3000 );
          }
        });

        var hasLetters, hasNumbers, hasSymbols = false;
        $("#Passwod").on('keypress', function(){
          if((event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)){
        	hasLetters=true;
    	     }
          if((event.charCode>=48 && event.charCode<=57)){
        	hasNumbers = true;
    	     }
    	    if(event.charCode==41 || event.charCode==45 || event.charCode==95){
        	hasSymbols = true;
    	     }

           if(hasLetters && !hasNumbers && !hasSymbols || !hasLetters && hasNumbers && !hasSymbols){
             $(".low").removeClass("hidden");
             $(".low").css('background-color', 'red');
    	        }else if((hasLetters && hasNumbers && !hasSymbols) || (hasLetters && !hasNumbers && hasSymbols)){
                $(".medium").removeClass("hidden");
                $(".low").css('background-color', 'yellow');
                $(".medium").css('background-color', 'yellow');
    	           }else if(hasLetters && hasNumbers && hasSymbols){
                   $(".hard").removeClass("hidden");
                   $(".low").css('background-color', 'green');
                   $(".medium").css('background-color', 'green');
                   $(".hard").css('background-color', 'green');
    	              }
        });

        $('.log-btn').click(function(){
          var pass = $("#Passwod").val();
          var confpass = $("#ConfirmPasswod").val();
          if (confpass != pass) {
            $('.confpass').addClass('wrong-entry');
            $('.alert').fadeIn(500);
            setTimeout( "$('.alert').fadeOut(1500);",3000 );
          }
        });

    });
