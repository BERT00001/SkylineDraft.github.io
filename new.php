<?php
$number =$_GET['phone'];
$username =$_GET['username'];
$order =$_GET['id'];
$payment=$_GET['payment'];
$otp = rand(100000,999999);
$message = $otp;
$apicode = "Go to Itexmo for API";
$passwd="Go to Itexmo for Password";
//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode,$passwd){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
$param = array(
'http' => array(
'header' => "Content-type: application/x-www-form-urlencoded\r\n",
'method' => 'POST',
'content' => http_build_query($itexmo),
),
);
$context = stream_context_create($param);
return file_get_contents($url, false, $context);
}
//##########################################################################

$message = 'Your Order #'. $order.' is Out for Delivery! Please ready your payment of ₱'. $payment;
$apicode = "Enter API Code go to itexmo";
$passwd="Enter Password from itextmo";
if(!empty($number) && ($message)){
$result = itexmo("$number","$message","$apicode", "$passwd");
if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.
Please CONTACT US for help. ";
}else if ($result == 0){
echo "Message Sent!";
echo '<script>window.location.href="Enter Localhost link or webhost link"</script>"';
}
else{
echo "Error Num ". $result . " was encountered!";
echo '<script>window.location.href="Enter Localhost link or webhost link"</script>"';
}

}
?>