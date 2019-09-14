<?php
// NOTE: This example uses the next generation Twilio helper library - for more
// information on how to download and install this version, visit
// https://www.twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

$accountSid = "AC579fd3bd74c37392a4cb0a1696afc7de";
$authToken = "f059c296f479280082b86cfd407978a4";

$serviceSid = "ISf6b5e2d20f0dbfdf294a85ecd377992e";

// Initialize the client
$client = new Client($accountSid, $authToken);

// Create a notification
$notification = $client
    ->notify->services($serviceSid)
    ->notifications->create([
        "toBinding" => '{"binding_type":"sms", "address":"+8437324910"}'
        'body' => 'Knok-Knok! This is your first Notify SMS'
    ]);

echo $notification->body; // => Knok-Knok! This is your first Notify SMS
