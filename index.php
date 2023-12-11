<?php
require __DIR__ . '/vendor/autoload.php';

use Cowsayphp\Farm;

header('Content-Type: text/plain');
#header('Access-Control-Allow-Origin: *');
#header('Access-Control-Allow-Methods: GET, POST');

#header("Content-Security-Policy: default-src 'self'");

header("Strict-Transport-Security 'max-age=16070400'");
#header("X-XSS-Protection: 0");
#header("X-Frame-Options: DENY");

$text = "Set a message by adding ?message=<message here> to the URL";
if(isset($_GET['message']) && $_GET['message'] != '') {
	$text = htmlspecialchars($_GET['message']);
}

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo $cow->say($text);
