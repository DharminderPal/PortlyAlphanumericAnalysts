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
            border: 140px solid black;
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


</head>

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

</html>