<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>
        <?= $title ?>
    </title>
    <link href="output.css" rel="stylesheet">
    <script type="text/javascript" src="jquery.js"></script>



    <style>
    .diaporama {
        animation: slide 15.5s ease infinite 0s;
    }

    .diaporama {
        list-style: none;
        display: inline-block;
        width: 100%;
        padding: 0;
        margin: auto;
    }

    .diaporama li {
        padding-bottom: 2%;
    }

    .diaporama img {
        height: 300px;
        width: 100%;
    }

    .diaporama:hover {
        animation-play-state: paused;
        -webkit-animation-play-state: paused;
    }

    @keyframes slide {
        25% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(0, -25%);
        }

        75% {
            transform: translate(0, -50%);
        }

        100% {
            transform: translate(0, -75%);
        }
    }

    .cadre {
        margin: auto;
        margin-bottom: 50px;
        height: 300px;
        width: 70%;
        overflow: hidden;
    }

    .content {
        display: none;
    }

    button {
        margin-top: 30px;
    }

    .back {
        display: none;
    }

    .next {
        margin-left: 50px;
    }

    .logo {
        filter: invert(38%) sepia(88%) saturate(310%) hue-rotate(159deg) brightness(95%) contrast(81%);
        height: 24px;
    }

    .logo1 {
        filter: invert(38%) sepia(88%) saturate(310%) hue-rotate(159deg) brightness(95%) contrast(81%);
    }

    .logo:hover {
        filter: invert(100%) sepia(43%) saturate(4423%) hue-rotate(175deg) brightness(93%) contrast(117%);
    }
    </style>

</head>

<body class="bg-gray-200">
    <div class="container   mx-auto  flex flex-wrap flex-col md:flex-row items-center justify-between">
        <img src="img/logoaccueil.png" class=" -mt-6" width="170px">
        <ul class="flex items-stretch  space-x-8 ">
            <li>
                <a><img src="img/facebook.svg" class="logo" /></a>

            </li>
            <li>
                <a> <img src="img/instagram.svg" class="logo" /></a>

            </li>
            <li>
                <a> <img src="img/youtube.svg" class="logo" />
                </a>

            </li>
            <li>
                <a> <img src="img/twitter.svg" class="logo" />
                </a>

            </li>
        </ul>
    </div>
    <!-- component -->
    <?= $content ?>



    <?php require("Vue/MenuBarSansStyle.php");  ?>


</body>

</html>