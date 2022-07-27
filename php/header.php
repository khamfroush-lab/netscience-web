<?php
include_once("php/util.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NetScience</title>
    <link href="css/font.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/carousel-style.css">
    <style>
        #top-header {
            padding: 25px;
        }
        #navbar-bg {
            background-color: rgb(0, 51, 160);
        }
        #navbar {
            background: none !important;
        }
        #navbar .nav-link {
            color: white !important;
        }
        #navbar .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .student-carousel {

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .enable-blur {
            filter: blur(8px);
            -webkit-filter: blur(8px);
        }

        .disable-blur {
            filter: blur(0);
            -webkit-filter: blur(0);
        }

        #contact-footer {

        }
        #address-section {
            background-color: #0033a0;
            color: white;
            padding: 50px;
            border-bottom-style: solid;
            border-bottom-width: 1px;
            border-bottom-color: white;
        }
        #footer-section {
            background-color: #2a2c29;
            color: white;
            padding: 50px;
        }
    </style>
</head>

<body>

<?php include("navbar.php"); ?>