<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>
        body {
            background-color: black;
        }

        .navbar {
            box-shadow: 2px -1px 14px 5px rgba(255, 166, 252, 0.45);
            -webkit-box-shadow: 2px -1px 14px 5px rgba(255, 166, 252, 0.45);
            -moz-box-shadow: 2px -1px 14px 5px rgba(255, 166, 252, 0.45);
            width: 100%;
            margin-right: 0;


        }

        button {
            position: relative;
            padding: 10px 20px;
            border-radius: 7px;
            border: 0px;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 2px;
            background-color: black;
            color: white;
            overflow: hidden;
            box-shadow: 0 0 0 0 transparent;
            -webkit-transition: all 0.2s ease-in;
            -moz-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }

        button:hover {
            background-color: #ffa6fc;
            color: black;
            box-shadow: 0 0 3px 5px rgba(255, 255, 255, 0.815);
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
        }

        button:hover::before {
            -webkit-animation: sh02 0.5s 0s linear;
            -moz-animation: sh02 0.5s 0s linear;
            animation: sh02 0.5s 0s linear;
        }

        button::before {
            content: '';
            display: block;
            width: 0px;
            height: 86%;
            position: absolute;
            top: 7%;
            left: 0%;
            opacity: 0;
            background: #fff;
            box-shadow: 0 0 50px 30px #fff;
            -webkit-transform: skewX(-20deg);
            -moz-transform: skewX(-20deg);
            -ms-transform: skewX(-20deg);
            -o-transform: skewX(-20deg);
            transform: skewX(-20deg);
        }

        @keyframes sh02 {
            from {
                opacity: 0;
                left: 0%;
            }

            50% {
                opacity: 1;
            }

            to {
                opacity: 0;
                left: 100%;
            }
        }

        button:active {
            box-shadow: 0 0 0 0 transparent;
            -webkit-transition: box-shadow 0.2s ease-in;
            -moz-transition: box-shadow 0.2s ease-in;
            transition: box-shadow 0.2s ease-in;
        }

        h1 {
            font-weight: 900;
            font-size: 60px;
            transition: all 1s ease;
            border: none;
        }

        .content {
            transition: all 0.1s ease;
        }

        .content:hover {
            text-shadow: 5px 2px 3px rgba(255, 166, 252, 0.45);
            transform: scale(1.1) scaleY(1.2);
        }

        #welcome {
            overflow: hidden;
            border-right: none;
            animation: typing 3s steps(40, end), blink-caret .75s step-end 4;
        }

        #nama {
            overflow: hidden;
            width: 0%;
            border-right: none;
            animation: typing 3s 3s forwards steps(40, end), blink-caret .75s 3s step-end 4;
        }

        @media screen and (max-width:768px) {

            #welcome,
            #nama {
                font-size: 2em;
            }
        }

        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        /* The typewriter cursor effect */
        @keyframes blink-caret {

            from,
            to {
                border-right: 0.15em solid transparent
            }

            50% {
                border-right: 0.15em solid pink;
            }
        }
    </style>
</head>

<body>
    <?php
    if (!isset($_SESSION['user'])) :
    ?>
        <a href="<?= site_url('/') ?>">
            <h1>LOGIN TERLEBIH DAHULU</h1>
        </a>
    <?php else : ?>
        <nav class="navbar container-fluid" style="opacity: 1;">
            <a class="navbar-brand" href="#">
                <img src="public/assets/logoNavbar.jpg" alt="Bootstrap" width="120" height="45">
                <ul class="navbar-nav me-auto" style="margin-top: -2em;">
                    <li class="nav-item">
                        <div class="row" style="margin-top: -3em;">
                            <div class="col-4">
                                <a class="nav-link active" aria-current="page" href="<?php site_url("/home") ?>"><button>Home</button></a>
                            </div>
                            <div class="col-1">

                            </div>
                            <div class="col-4" style="margin-top: 1.9em;">
                                <form action="<?= site_url("/crew") ?>">
                                    <a class="nav-link active" aria-current="page" href="views/crew.php"><button>Crew</button></a>
                                </form>
                            </div>
                        </div>

                    </li>
                </ul>
            </a>
            <form class="d-flex" role="search" method="get" style="margin-right: 2em;" action="<?= site_url('/logout') ?>">
                <button>
                    Logout
                </button>
            </form>
            </div>
        </nav>

        <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="content text-center" style="z-index:10;" id="text">
                <h1 class="text-white" id="welcome">WELCOME,</h1>
                <h1 class="text-white" id="nama">
                    <?= $_SESSION['user']; ?>
                </h1>
            </div>
        </div>
    <?php endif ?>
</body>

</html>