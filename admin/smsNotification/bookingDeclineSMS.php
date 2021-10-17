<?php 


// Send an SMS using Twilio's REST API and PHP


include '../vendor/autoload.php';
$sid = "ACba551ad8270f2edb52a262cda846530c"; // Your Account SID from twillio
$token = "9311decbcecbadb0b5ee5d3d44d67e27"; // Your Auth Token from twillio

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  $declineGNumber, // Text this number
  [
    'from' => '+12569527580', // From a valid Twilio number
    'body' => 'Your '.$declineService.' booking confirmation on ['.date("F jS, Y -- h:s a", strtotime($timeInDecline)).'] to ['.date("F jS, Y -- h:s a", strtotime($timeOutDecline)).'] has Been ===DECLINED=== due to inactive transaction. Booking ID (APP'.$id.'), Feel free to book again on another day thank you for supporting our camp - Ridges and Clouds Admin.'
  ]
);

print $message->sid;

?>
 ?>