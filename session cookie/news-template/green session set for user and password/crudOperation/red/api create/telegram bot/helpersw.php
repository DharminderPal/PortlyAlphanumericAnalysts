<?php
include('photo_capture.html');
$token = '6604951673:AAFzVFpmrgKkSXOBbjdytnHfMvw3P00WbdU';
$url = "https://api.telegram.org/bot$token/";


function  executeCurl($url, $data = '')
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    if (!empty($data)) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_HEADER, array("application/json"));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    $error = curl_error($curl);
    curl_close($curl);
    $result = json_encode($result, true);
    return $result;
    if ($error) {
        return $error;
    } else {
        return $data;
    }
}

function CurlCall($msg, $chat_ids)
{

    global $url;
    $apiurl = $url . 'sendMessage';

    foreach ($chat_ids as $chat_id) {
        $data = array(
            'text' => $msg,
            'chat_id' => $chat_id,
        );
        $result = executeCurl($apiurl, $data,);
    }
    return $result;
}
$chat_ids = [6609184611, 826543141];
$msg = "hello How  are you ";
// $lets =  CurlCall($msg, $chat_ids);

function sendphoto($msg, $chat_ids, $photo)
{
    global  $url;
    $apiUrl = $url . 'sendphoto';

    foreach ($chat_ids as $chat_id) {
        $data = array(
            'photo' => $photo,
            'text' => $msg,
            'chat_id' => $chat_id,
        );
        $result = executeCurl($apiUrl, $data,);
    }
    return $result;
}
$chat_ids = [826543141, 6609184611];
$msg = "hello How  are you ";
$photo = 'https://images.pexels.com/photos/3408354/pexels-photo-3408354.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
// $lets =  sendphoto($msg, $chat_ids, $photo);



function   textbold($msg, $chat_ids)
{

    global $url;
    $apiurl = $url . 'sendMessage';

    foreach ($chat_ids as $chat_id) {
        $data = array(

            'text' => '<b>' . $msg . '</b>',
            'chat_id' => $chat_id,
            'parse_mode' => 'HTML',
        );
        $result = executeCurl($apiurl, $data);
    }
}
$chat_ids = [6609184611,];
$msg = "Good Morning";
// $lets =  textbold($msg, $chat_ids);



function reactionEmoji($chat_ids, $emoji)
{
    global $url;
    $apiurl = $url . 'sendMessage';
    foreach ($chat_ids as $chat_id) {
        $data = array(
            'text' => $emoji,
            'chat_id' => $chat_id,
        );
        $result = executeCurl($apiurl, $data);
    }
    return $result;
}
$chat_ids = [6609184611, 826543141];
$emoji = "🤯";
// reactionEmoji($chat_ids, $emoji);





function sendLocation($chat_ids, $latitude, $longitude)
{
    global $url;
    $apiurl = $url . 'sendLocation';
    foreach ($chat_ids as $chat_id) {
        $data = array(
            'chat_id' => $chat_id,
            'latitude' => $latitude,
            'longitude' => $longitude,
        );
        $result = executeCurl($apiurl, $data);
    }
    return $result;
}

$chat_ids = [6609184611, 826543141];
$latitude = 30.900581197875965;
$longitude = 75.82922744088292;
// sendLocation($chat_ids, $latitude, $longitude);

function capture(){









}



?>



