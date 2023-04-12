<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $("body").on("click", ".buttonEdit", function() {

                $oldUsername = $(this).parent().parent().children(".colUsername").text();
                $oldName = $(this).parent().parent().children(".colName").text();
                $oldEmail = $(this).parent().parent().children(".colEmail").text();
                $oldTelpon = $(this).parent().parent().children(".colTelpon").text();
                $("#editUsername").val($oldUsername);
                $("#editNama").val($oldName);
                $("#editEmail").val($oldEmail);
                $("#editTelpon").val($oldTelpon);
            });
        });
    </script>
    <style>
        body {
            background-color: black;
        }

        .navbar {
            box-shadow: 2px -1px 14px 5px rgba(255, 166, 252, 0.45);
            -webkit-box-shadow: 2px -1px 14px 5px rgba(255, 166, 252, 0.45);
            -moz-box-shadow: 2px -1px 14px 5px rgba(255, 166, 252, 0.45);
            width: 100%;


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

        .input {
            color: #ff59c7;
        }

        #inputNama:focus,
        #inputEmail:focus,
        #inputTelpon:focus,
        #inputUsername:focus,
        #inputPassword:focus {
            /* background-color: #ffa6fc; */
            box-shadow: 2px -1px 14px 1px rgba(255, 166, 252, 1);
            -webkit-box-shadow: 2px -1px 14px 1px rgba(255, 166, 252, 1);
            -moz-box-shadow: 2px -1px 14px 1px rgba(255, 166, 252, 1);
        }


        #editNama:focus,
        #editEmail:focus,
        #editTelpon:focus {
            /* background-color: #ffa6fc; */
            box-shadow: 2px -1px 14px 1px rgba(0, 0, 0, 1);
            -webkit-box-shadow: 2px -1px 14px 1px rgba(0, 0, 0, 1);
            -moz-box-shadow: 2px -1px 14px 1px rgba(0s, 0, 0, 1);
            transform: scale(1.02);
        }



        .submitButton {
            padding: 0.5em 2em 0.5em 2.5em;
            font-size: 1em;
            font-weight: bold;
            border-radius: 15px;
            color: #fff6fb;
            letter-spacing: 0.3em;
            text-shadow: -2px 2px 5px #FD3084;
            background-color: transparent;
            border: 2px solid #FEB1DE;
            box-shadow: 0 0 0px 1px #F11271,
                0 0 10px 2px #FD3084,
                inset 0 0 0px 1px #F11271,
                inset 0 0 10px 2px #FD3084;
            transition: 100ms;
        }

        .submitButton:hover {
            box-shadow: 0 0 0px 1px #F11271,
                0 0 10px 2px #FD3084,
                inset 0 0 0px 1px #F11271,
                inset 0 0 5px 2px #FD3084;
            text-shadow: 0 0 10px #FD3084;

            transform: translateY(-5px) scale(1.05);
        }

        .submitButton:active {
            box-shadow: 0 0 0px 1px #F11271,
                0 0 25px 2px #FD3084,
                inset 0 0 0px 1px #F11271,
                inset 0 0 30px 2px #FD3084;
            transform: translateY(1px);
        }

        .buttonDel {
            transition: all 0.5s ease;
        }

        .buttonDel:hover {
            background-color: #ffa6fc !important;
        }

        #imgDelete {
            transition: all 1s ease;
        }

        #imgDelete:hover {
            transform: rotate(180deg) scale(1.1);
        }

        .buttonEdit {
            transition: all 0.5s ease;
        }

        .buttonEdit:hover {
            background-color: #ffa6fc !important;
        }

        #imgEdit {
            transition: all 1s ease;
        }

        #imgEdit:hover {
            transform: rotate(360deg) scale(1.1);
        }

        @media only screen and (max-width: 1150px) {
            .buttonEdit {
                margin-top: 5px;
            }

            .buttonDel {
                margin-left: 0.5em;
            }
        }

        /* @media only screen and (max-width: 750px){
            .cardActor{
                margin-left: 5em;
            }
        } */

        .btnClose,
        .btnSave {
            transition: all 0.5s ease;
        }

        .btn-close {
            transition: all 0.5s ease;
        }

        .btn-close:hover {
            box-shadow: none !important;
            background-color: pink !important;
            transform: scale(1.03) rotate(180deg);

        }

        .btnClose:hover,
        .btnSave:hover {
            transform: scale(1.1);
        }

        .imgActor {
            transition: all 0.5s ease;
            filter: grayscale(100%);
        }

        .imgActor:hover {
            filter: grayscale(0%);

        }

        .cardActor {
            transition: all 0.5s ease;
        }

        .cardActor:hover {
            transform: scale(1.05);
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
        <?php if (session()->has('add_success')) : ?>
            <script>
                Swal.fire(
                    'Data berhasil ditambahkan',
                    'Silahkan cek di table',
                    'success'
                )
            </script>
        <?php endif ?>
        <?php if (session()->has('edit_success')) : ?>
            <script>
                Swal.fire(
                    'Data berhasil diedit',
                    'Silahkan cek di table',
                    'success'
                )
            </script>
        <?php endif ?>
        <?php if (session()->has('success')) : ?>
            <script>
                Swal.fire(
                    'Data berhasil dihapus',
                    'Silahkan cek di table',
                    'success'
                )
            </script>
        <?php endif ?>
        <?php if (session()->has('error_val')) : ?>
            <script>
                Swal.fire(
                    'Username sudah dipakai',
                    'Gunakan username yang lain (must be unique)',
                    'error'
                )
            </script>
        <?php endif ?>
        <nav class="navbar container-fluid" style="opacity: 1;">
            <a class="navbar-brand" href="#">
                <img src="public/assets/logoNavbar.jpg" alt="Bootstrap" width="120" height="45">
                <ul class="navbar-nav me-auto" style="margin-top: -2em;">
                    <li class="nav-item">
                        <div class="row" style="margin-top: -3em;">
                            <div class="col-4">
                                <form action="<?= site_url("/home") ?>" style="margin-top: -1.9em;">
                                    <a class="nav-link active" aria-current="page" href="<?php site_url("/home") ?>"><button>Home</button></a>
                                </form>
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
                <!-- <button>Home</button>
                <button>Crew</button> -->
            </a>
            <form class="d-flex" role="search" method="get" style="margin-right: 2em;" action="<?= site_url('/logout') ?>">
                <button>
                    Logout
                </button>
            </form>
            </div>
        </nav>

        <div class="row mt-5" style="z-index: -99;">
            <div class="col-lg-4 col-md-12  mx-5 input">
                <h2>ADD CREW ACCOUNT</h2>
                <form action="<?= site_url('crew/tambah') ?>" method="POST">
                    <div class="mb-3 mt-4">
                        <label for="inputUsername" class="form-label" style="color:white">Username</label>
                        <input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="Must be unique!" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputPassword" class="form-label" style="color:white">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="seng aman" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputNama" class="form-label" style="color:white">Nama Lengkap</label>
                        <input type="text" class="form-control" id="inputNama" name="inputNama" placeholder="Ex: Steven King" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputEmail" class="form-label" style="color: white">Email address</label>
                        <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="name@example.com" required>
                    </div>

                    <div class="mb-5">
                        <label for="inputTelpon" class="form-label" style="color: white">Phone Number</label>
                        <input type="tel" name="inputTelpon" class="form-control" id="inputTelpon" placeholder="Ex: 08563194650" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn end-0 float-end submitButton">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col my-5" style="margin-left:3em;">
                <div class="row">
                    <div class="col-md-3 col-6 mt-sm-3 cardActor">
                        <img src="public/assets/lisa.jpg" class="imgActor" alt="" style="width: 9em; height: 11em;">
                        <div class="name" style="color: white; background-color: pink; width: 9em; height: 2em; text-align: center;">
                            <h4 style="color: black;">Lisa</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-6  mt-sm-3 cardActor">
                        <img src="public/assets/rose.jpg" class="imgActor" alt="" style="width: 9em; height: 11em;">
                        <div class="name" style="color: white; background-color: pink; width: 9em; height: 2em; text-align: center;">
                            <h4 style="color: black;">Rose</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-6  mt-sm-3 cardActor">
                        <img src="public/assets/Jennie.jpg" class="imgActor" alt="" style="width: 9em; height: 11em;">
                        <div class="name" style="color: white; background-color: pink; width: 9em; height: 2em; text-align: center;">
                            <h4 style="color: black;">Jennie</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-6  mt-sm-3 cardActor">
                        <img src="public/assets/jisoo.jpg" class="imgActor" alt="" style="width: 9em; height: 11em;">
                        <div class="name" style="color: white; background-color: pink; width: 9em; height: 2em; text-align: center;">
                            <h4 style="color: black;">Jisoo</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-1">

            </div>
            <div class="col-10">
                <table class="table table-bordered">
                    <thead>
                        <tr style="color: #FEB1DE;">
                            <th scope="col" style="width: 12em;">Username</th>
                            <th scope="col" style="width: 13em;">Nama Lengkap</th>
                            <th scope="col" style="width: 10em;">Email</th>
                            <th scope="col" style="width: 9em;">Nomor Telepon</th>
                            <th class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody style="color: white;" class="result">
                        <?php foreach ($data_crew as $x) : ?>
                            <tr>
                                <td class="colUsername"><?= htmlspecialchars($x->username) ?></td>
                                <td class="colName"><?= htmlspecialchars($x->nama) ?></td>
                                <td class="colEmail"><?= htmlspecialchars($x->email) ?></td>
                                <td class="colTelpon"><?= htmlspecialchars($x->telpon) ?></td>
                                <td>
                                    <a href="<?= site_url('/crew/delete/' . $x->username) ?>">
                                        <div class="buttonDel btn" style="background-color:#ff59c7;"><img src="public/assets/delIcon.png" id="imgDelete" alt="" style="width: 2em; height:2em;"></div>
                                    </a>
                                    <div class="buttonEdit btn mx-2" style="background-color:#ffffff;" data-bs-toggle="modal" data-bs-target="#modalEdit"><img src="public/assets/editIcon.png" id="imgEdit" alt="" style="width: 2em; height:2em;"></div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: pink;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Crew</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= site_url('/crew/edit/') ?>" method="get">
                        <div class="modal-body">
                            <div class="mb-3 mt-2">
                                <label for="editUsername" class="form-label" style="color:black">Username</label>
                                <input type="text" class="form-control" id="editUsername" name="editUsername" placeholder="" required readonly="readonly">
                            </div>

                            <div class="mb-3">
                                <label for="editNama" class="form-label" style="color:black">Nama Lengkap</label>
                                <input type="text" class="form-control" id="editNama" name="editNama" placeholder="Ex: Steven King" required>
                            </div>

                            <div class="mb-3">
                                <label for="editEmail" class="form-label" style="color: black">Email address</label>
                                <input type="email" class="form-control" id="editEmail" name="editEmail" placeholder="name@example.com" required>
                            </div>

                            <div class="mb-5">
                                <label for="editTelpon" class="form-label" style="color: black">Phone Number</label>
                                <input type="tel" class="form-control" id="editTelpon" name="editTelpon" placeholder="Ex: 08563194650" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btnClose" data-bs-dismiss="modal" style="background-color: white; color: red; border: none; margin-right: 0.5em;">Close</button>
                            <a href="<?= site_url('/crew/edit/') ?>"><button type="submit" class="btn btn-primary btnSave" style="background-color: black; color: #FEB1DE;" data-bs-dismiss="modal">Save changes</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>