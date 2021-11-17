



<?php

include '../vendor/autoload.php';
$sid = "ACba551ad8270f2edb52a262cda846530c"; // Your Account SID from twillio
$token = "c815cf817e569d7c411f8d39ed44eb1f"; // Your Auth Token from twillio

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  $dayGNumber, // Text this number
  [
    'from' => '+12569527580', // From a valid Twilio number
    'body' => 'Your Daytour booking confirmation on ['.date("F jS, Y -- h:s a", strtotime($startDate)).'] to ['.date("F jS, Y -- h:s a", strtotime($endDate)).'] has Been ====CONFIRMED===. Booking ID (APP'.$id.'), You can now print your booking details under our website account. Present the booking details copy on onsite reception as proof of booking.  Your support means the world to us! Thank for your choosing our camp. - Ridges and Clouds Admin.'
  ]
);

print $message->sid;

?>