<?php
echo "echo";

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL. "example.com");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $http_str = curl_exec($ch);
// curl_close();

// ------------------------------------------------------------------------------------


// $uid = 1234567890;
// $param['uid'] = $uid;
// $param['hoge2'] = "fuga";

// // $param = {"hoge2":"fuga"};
// $url = "https://amyx7iq73q7iksmtdtdf4phvza0crfcg.lambda-url.ap-northeast-1.on.aws/";
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL. $url);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($param));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
// $http_str = curl_exec($ch);
// curl_close($ch);

// echo $http_str;


// --------------------------------------------------------------------------------------

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

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $base_url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$login_info_return_value = curl_exec($ch);
curl_close($ch);


echo $login_info_return_value;



