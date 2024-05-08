
<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "capture");
$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['image_data'])) {
    $image_data = $_POST['image_data'];


    $encoded_image = str_replace('data:image/jpeg;base64,', '', $image_data);


    $decoded_image = base64_decode($encoded_image);


    $image_name = date("Y.m.d") . "-" . date("h.i.sa") . '.jpeg';

   
    $upload_path = 'img/' . $image_name;
    if (file_put_contents($upload_path, $decoded_image)) {
      
        $date = date("Y/m/d") . " &" . date("h.i.sa");
        $query = $query = "INSERT INTO photos (date, image) VALUES ('$date', '$upload_path')";
        if(mysqli_query($conn, $query)) {
            echo "Image saved successfully and inserted into database!";
        } else{
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } 
    else{
        echo "Failed to save image to server!";
    }
} else {
    echo "No image data received!";
}
mysqli_close($conn);
?>











?>