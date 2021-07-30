<?php
error_reporting(E_ALL);

$url = urldecode($_POST['geniusuRequest']);
$mode = $_POST['mode'];
$phone = $_POST['phone'];

$strictMode = [
    'first_name'   => $_POST['first_name'],
    'last_name'    => $_POST['last_name'],
    'email'        => $_POST['email'],
    'event_name'   => $_POST['event_name']
];

$liteMode = [
    'first_name'   => $_POST['first_name'],
    'last_name'    => $_POST['last_name'],
    'email'        => $_POST['email'],
    'event_name'   => $_POST['event_name']
];

$userdata = array();
if($mode == 'strict'){
    $userdata = $strictMode;
}else{
    $userdata = $liteMode;
}

if(isset($phone) && $phone != 'null'){
    $userdata['phone'] = $phone;
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userdata));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "cookie: ahoy_track=true",
    "Content-Type: application/x-www-form-urlencoded"
 );
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$data = curl_exec($ch);

curl_close($ch);

$response = $data;

echo $response;

?>
