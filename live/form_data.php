<?php


date_default_timezone_set("Asia/Singapore");

$my_file = 'genius-solutions-form.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);


$leadfname 		            = $_REQUEST['firstname'];
$leadlname 		            = $_REQUEST['lastname'];
$leademail 		            = urldecode($_REQUEST['email']);
$whyjoin                    = $_REQUEST['whyjoin'];
$website                    = $_REQUEST['company_website'];
$Annual_Turnover__pc        = $_REQUEST['company_revenue'];
$leadphone 		= $_REQUEST['payment_mobile_country_code'] ." ". $_REQUEST['phonec'];

$date   = new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d H:i:s');

$data = "\n".$leademail.",".$leadfname.",".$leadlname.",".$whyjoin.",".$leadphone.",".$website.",".$Annual_Turnover__pc.",".$result;

fwrite($handle, $data);

?>
