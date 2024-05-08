<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please capture </title>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #my_camera {
            border: 1px solid black;
        }

        .container button {
            width: 480px;
            padding: 12px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .container a button {
            background-color: orangered;
            color: white;
        }
    </style>


<!-- </head>

<body onload="configure();">
    <div class="container">

        <div id="my_camera">


        </div>

        <div id="results" style="visibility:hidden; position:absolute">

        </div>
        <br>

        <button type="button" oneclick="savesnap();">Save</button>
        <br>
        <a href="image.php"><button type="button" name="button">GO to database &#2192;</button></a>
    </div>



    <script type="text/javascript" src="assets/webcam.min.js">
    </script>
    <script type="text/javascript">
        function configure() {
            webcam.set({
                width: 480,
                height: 360,
                image_format: 'jpeg',
                jpeg_quality: 90
            });

            webcam.attach('#my_camera')
        }

        function savesnap() {

            webcam.snap(function(data_uri) {
                document.getElementById('results').innerHTML =
                    '<img id = "webcam" src = "' + data_uri + '">';
            })
            webcam.reset();
            var base64image = document.getElementById("webcam").src;
            webcam.upload(base64image, 'function.php', function(code, text) {

                alert('save successfully');
                document.location.href = "image.php"

            });
        }
    </script>
</body>

</html> -->

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please capture </title>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #my_camera {
            border: 1px solid black;
            width: 100%;
            /* Full width for mobile */
        }

        .container button {
            width: 100%;
            /* Full width for mobile */
            padding: 12px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            background-color: orangered;
            color: white;
        }
    </style>

</head>

<body onload="configure();">
    <div class="container">
        <video id="my_camera" autoplay></video>
        <div id="results" style="visibility:hidden; position:absolute"></div>
        <br>
        <button type="button" onclick="savesnap();">Save</button>
        <br>
        <a href="image.php"><button type="button" name="button">GO to database &#2192;</button></a>
    </div>

    <script type="text/javascript" src="assets/webcam.min.js"></script>
    <script type="text/javascript">
        function configure() {
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({
                        video: true
                    })
                    .then(function(stream) {
                        var video = document.querySelector('#my_camera');
                        video.srcObject = stream;
                        video.play();
                    })
                    .catch(function(error) {
                        console.log("Camera access error: ", error);
                    });
            } else {
                console.log("getUserMedia not supported on this browser");
            }
        }

        function savesnap() {
            var video = document.querySelector('#my_camera');
            var canvas = document.createElement('canvas');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            var ctx = canvas.getContext('2d');
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
            var dataURI = canvas.toDataURL('image/jpeg');

            
            var xhr = new XMLHttpRequest();


        //    yaha pe anonymouse function ka use kiya gyaya  ahi 
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        alert('Image saved successfully!');
                        document.location.href = "image.php";
                    } else {
                        alert('Failed to save image!');
                    }
                }
            };
            xhr.open('POST', 'image.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('image_data=' + encodeURIComponent(dataURI));

            // You can remove the following line as it's just for displaying the captured image on the page
            document.getElementById('results').innerHTML = '<img id="webcam" src="' + dataURI + '">';
        }
    </script>
</body>

</html> 