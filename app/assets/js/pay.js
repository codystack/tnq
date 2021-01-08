function payWithPaystack() {
    var myref=Math.floor((Math.random() * 1000000000) + 1);
    let handler = PaystackPop.setup({
        key: 'pk_live_ec05a07c60abfd2f90a7254a22c1e3dfb1cee7c4', // Replace with your public key
        email: document.getElementById("email").value,
        amount: 10000 * 100,
        ref: ''+myref,
        onClose: function(){

        },
        callback: function(response){
            if(myref==response.reference){
                submitData();
            }
        }
    });
    handler.openIframe();
}


function submitData(){
    //$('#success-message').hide(400);
    //$('#error-message').hide(400);
    var x=$.ajax({
    type: "POST",
    url: './config/controller.php',
    contentType: false,
    data: new FormData($('#register-form').get(0)),
    dataType: "text",
    processData: false,
    cache:false
    });
    
    x.done(function(serverResponse) {
        var x = serverResponse.trim();
        //if (x == 'success'){
            //$('#success-message').show(400);
        //}else {
            //$('#error-message').show(400);
        //}
    });
    
    x.fail(function(){
        
    });
    
    x.always(function(){
        //$('#spinner').hide();
    });
}