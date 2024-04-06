<?php


$api_url = 'https://api.nasa.gov/planetary/apod';
$;
$request_url = $api_url .'?api_key='. $api_key;
$response = file_get_contents($request_url);
$data = json_decode($response);
if ($data&&isset($data->url)) {
    $apod_url = $data->url;
    echo "<pre>";
     print_r($data);
     echo "</pre>";
    echo '<img src="'.$apod_url.'" alt="NASA APOD">';
} else {
    echo'Failed to fetch APOD data';
}
?>