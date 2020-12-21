function payWithPaystack() {
    var fname=document.getElementById("fname").value;
    var otherdata = {fname:fname, lastName:"nothing"};
    var myref=Math.floor((Math.random() * 1000000000) + 1);
    let handler = PaystackPop.setup({
        key: 'pk_test_274c204e073e2b9d908430573ba1603a843c66d4', // Replace with your public key
        email: document.getElementById("email").value,
        metadata: otherdata,
        amount: document.getElementById("amount").value * 100,
        ref: ''+myref,
        onClose: function(){

        },
        callback: function(response){
            if(myref==response.reference){
                location.replace("regsuccess")
            }
        }
    });
    handler.openIframe();
}
