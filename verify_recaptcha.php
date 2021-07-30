<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'secret'   => '6LcLy74aAAAAAEWYiXqDVrA30iPgYJwLdEq5Ji2u',
    'response' => $_POST['userdata'],
]));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);

curl_close($ch);

$response = @json_decode($data);

if ($response && $response->success)
{
    echo 'success';
    // validation succeeded, user input is correct
}
else
{
    echo 'failed';
    // response is invalid for some reason
    // you can find more in $data->{"error-codes"}
}

?>
