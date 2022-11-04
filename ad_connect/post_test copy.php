<?php


//------------------------
//LamdbdaにPOSTする
//------------------------
$base_url = 'https://amyx7iq73q7iksmtdtdf4phvza0crfcg.lambda-url.ap-northeast-1.on.aws/';
$params = [
'user_id'  => "1234",
'password' => "password"
];
$json_params = json_encode($params);

$headers = [
'Content-Type: application/json',
'Accept-Charset: UTF-8',
];

$cf = curl__Func($base_url,$params,$json_params,$headers);

echo $cf;

function curl__Func($base_url,$params,$json_params,$headers){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $base_url);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $login_info_return_value = curl_exec($ch);
    curl_close($ch);
    return $login_info_return_value;
}