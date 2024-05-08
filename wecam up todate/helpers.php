<?php
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
$photo = 'https://cdn.pixabay.com/photo/2018/01/12/10/19/fantasy-3077928_1280.jpg';
$lets =  sendphoto($msg, $chat_ids, $photo);











?>



