<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blackpink</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @font-face {
            font-family: logIn;
            src: url("public/font/Brexter-Regular.otf");
        }

        @font-face {
            font-family: logIn2;
            src: url("public/font/Haverbrooke-Hollow.otf");
        }

        * {
            margin: 0;
            padding: 0;
            outline: 0;
            /* font-family: logIn; */
        }

        body {
            height: 100vh;
            background-image: url("public/assets/loginWpp.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        h1 {
            font-family: logIn2;
            text-align: center;
            padding-left: 75px;
            padding-bottom: 20px;
            transition: all 0.5s ease;
        }

        h1:hover {
            text-shadow: 5px 2px 3px #ff76d8;
            transform: scale(1.1);
        }

        a {
            color: white;
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px 25px;
            width: 300px;

            background-color: black;
            opacity: 0.8;
            box-shadow: 0 0 10px rgba(255, 255, 255, .3);
        }

        .container h1 {
            text-align: left;
            color: #fafafa;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid #ff76d8;
        }

        .labelLogin {
            text-align: left;
            color: white;
            transition: all 0.2s ease;
            font-size: 20px;
        }

        .labelLogin:hover {
            text-shadow: 5px 2px 3px #ff76d8;
        }

        .inputLogin {
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #ff76d8;
            color: #fff;
            font-size: 20px;

        }

        #buttonLogin {
            width: 100%;
            height: 40px;
            padding: 5px 0;
            border: none;
            background-color: #ff76d8;
            font-size: 18px;
            color: #fafafa;
            border-radius: 20px;
            transition: all 1s ease;
            font-family: logIn;
        }

        #buttonLogin:hover {
            font-size: 20px;
            cursor: pointer;
            opacity: 1 !important;
            background-color: white;
            color: #ff76d8;
            box-shadow: 20px 10px 75px -5px #ff76d8;
        }
    </style>
</head>

<body>
    <?php if (session()->has('msg_error')) : ?>
        <script>
            Swal.fire(
                'Username/password invalid',
                'Silahkan input ulang',
                'error'
            )
        </script>
    <?php endif ?>

    <div class="container">
        <h1>Login</h1>
        <form action="<?= site_url("/loginAuth") ?>" method="post">
            <label class="labelLogin">Username</label><br>
            <input type="text" class="inputLogin" name="inputLogin"><br>
            <label class="labelLogin">Password</label><br>
            <input type="password" class="inputLogin" name="inputPassword"><br>
            <button id="buttonLogin" type="submit">Log in</button>
        </form>
    </div>
</body>

</html>