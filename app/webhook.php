<?php
$conn = new mysqli('localhost', 'nigeabvg_tnq', 'Webify2020!!', 'nigeabvg_tnq');
//add the db call here
if ((strtoupper($_SERVER['REQUEST_METHOD']) != 'POST' ) || !array_key_exists('HTTP_X_PAYSTACK_SIGNATURE', $_SERVER) ) {
    // only a post with paystack signature header gets our attention
    exit();
}
// Retrieve the request's body
$input = @file_get_contents("php://input");
define('PAYSTACK_SECRET_KEY','sk_test_0e30a39f85963904df8dc24ce2110a6e2061bd6b');
if(!$_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] || ($_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] !== hash_hmac('sha512', $input, PAYSTACK_SECRET_KEY))){
  // silently forget this ever happened
  exit();
}
http_response_code(200);
// parse event (which is json string) as object
// Do something - that will not take long - with $event

//loop and check which event is recieved and act accordingly
$event = json_decode($input);
$xx=$event->event;
if($xx=='charge.success')
{

  $email=$event->data->customer->email;

  $result=mysqli_query($conn," SELECT * from users where email='$email'");
  if(mysqli_num_rows($result)>0) {
    mysqli_query($conn," UPDATE users SET status='true' WHERE email='$email'");
  }else {
      $sql = "INSERT INTO users (email,status) VALUES ('$email','true')";
      mysqli_query($conn, $sql);
  }

}


//http_response_code(200);
exit();
?>