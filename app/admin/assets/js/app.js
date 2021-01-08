//script for contact page
$(document).ready(function(){

    $("#register").click(function(){
        $('#spinner').show();
        $('#success-message').hide(400);
        $('#error-message').hide(400);
        var x=$.ajax({
        type: "POST",
        url: './config/auth_controller.php',
        contentType: false,
        data: new FormData($('#contact-form').get(0)),
        dataType: "text",
        processData: false,
        cache:false,
        success: function(data){
            if (data == "success"){
                setTimeout(function() {
                    document.location.reload()
              }, 5000); 
              }
        }
        });
        
        x.done(function(serverResponse) {
            var x = serverResponse.trim();
            if (x == 'success'){
                $('#success-message').show(400);
            }else {
                $('#error-message').show(400);
            }$('#spinner').hide();
        });
        
        x.fail(function(){
            
        });
        
        x.always(function(){
            $('#spinner').hide();
        });
    });
});

