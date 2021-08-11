<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container a">
        <img src="bootstrap/css/resources/yobo.jpg" alt="Avatar">

        <div class="b">
            <p>hello</p>
        </div>

        <div>
            <!-- The overlay -->
            <div id="myNav" class="overlay">

                <!-- Button to close the overlay navigation -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>

                <!-- Overlay content -->
                <div class="overlay-content">
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Clients</a>
                    <a href="#">Contact</a>
                </div>
            </div>

            <!-- Use any element to open/show the overlay navigation menu -->
            <span onclick="openNav()">
                <button class="btn">open</button>
            </span>

            <script>
                function openNav() {
                    document.getElementById("myNav").style.height = "100%";
                }

                function closeNav() {
                    document.getElementById("myNav").style.height = "0%";
                }
            </script>
        </div>
    </div>
</body>
</html>