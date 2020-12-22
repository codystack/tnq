function payWithPaystack() {
    var myref=Math.floor((Math.random() * 1000000000) + 1);
    let handler = PaystackPop.setup({
        key: 'pk_test_274c204e073e2b9d908430573ba1603a843c66d4', // Replace with your public key
        email: document.getElementById("email").value,
        amount: 10000 * 100,
        ref: ''+myref,
        onClose: function(){

        },
        callback: function(response){
            if(myref==response.reference){
                submitData();
                location.replace("../regsuccess")
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
