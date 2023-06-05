<?php
// Database Configuration 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'expressocoffee'); 
define('DB_USERNAME', 'carlet'); 
define('DB_PASSWORD', 'faith'); 

// PayPal Configuration
define('PAYPAL_EMAIL', 'holychantal0@gmail.com'); 
define('RETURN_URL', 'file:///C:/Users/faith/Desktop/Computer%20Science/2.4%20IBL/Software%20Development/coffee%20website/coffee%20website/index.html#home/return.php'); 
define('CANCEL_URL', 'file:///C:/Users/faith/Desktop/Computer%20Science/2.4%20IBL/Software%20Development/coffee%20website/coffee%20website/index.html#home/cancel.php'); 
define('NOTIFY_URL', 'file:///C:/Users/faith/Desktop/Computer%20Science/2.4%20IBL/Software%20Development/coffee%20website/coffee%20website/index.html#home/notify.php'); 
define('CURRENCY', 'USD'); 
define('SANDBOX', TRUE); // TRUE or FALSE 
define('LOCAL_CERTIFICATE', FALSE); // TRUE or FALSE

if (SANDBOX === TRUE){
	$paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
}else{
	$paypal_url = "https://www.paypal.com/cgi-bin/webscr";
}
// PayPal IPN Data Validate URL
define('PAYPAL_URL', $paypal_url);