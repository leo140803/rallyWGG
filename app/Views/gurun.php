<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@300&display=swap');

        body {
            background-color: #8D7B68;
        }

        .btn-coin {
            position: absolute;
            left: 85vw;
            top: 2vh;
            border: solid;
            border-radius: 50px;
            width: 8vw;
            height: 8vh;
            transition: all .5s ease-in-out;
        }

        .btn-coin:hover {
            background-color: #F1C376;
        }

        .img-coin {
            position: absolute;
            width: 3.5vw;
            height: 8vh;
            left: -0.1vw;
            top: -.5vh;
            transition: all .5s ease-in-out;
        }

        .btn-coin:hover .img-coin {
            transform: translateX(4.5vw);
        }

        .jumlah-coin {
            position: absolute;
            left: 3.8vw;
            top: 1.5vh;
            transition: all .1s ease-in-out;
            z-index: 0;
            font-family: 'Concert One', cursive;
        }

        .btn-coin:hover .jumlah-coin {
            transform: translateX(3vw);
            opacity: 0%;
        }

        .text-shop {
            position: absolute;
            left: 4vw;
            top: 1.3vh;
            opacity: 0%;
            transition: all .1s ease-in-out;
            font-family: 'Concert One', cursive;
        }

        .btn-coin:hover .text-shop {
            transform: translateX(0vw);
            left: 1vw;
            opacity: 100%;
        }

        .main {
            z-index: 0;
        }

        .shop {
            display: none;
            position: fixed;
            z-index: 1;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(5px);
            overflow-y: auto;
            overflow-x: hidden;
        }

        .img-item {
            width: 10vw;
            height: 30vh;
        }

        .coin-shop {
            width: 2vw;
            height: 5vh;
            margin-left: 2.5vw;

        }

        .card-item {
            backdrop-filter: blur(12px);
        }

        .card-item:hover .btn-buy {
            opacity: 100%;
            transform: translateY(-25vh);
        }

        .item-name {
            margin-left: 3.4vw;
            font-size: 12px;
            font-family: 'Concert One', cursive;
        }

        .price-shop {
            font-family: 'Concert One', cursive;
            margin-left: -1.2vw;
            margin-top: .5vh;
        }

        .btn-buy {
            border: none;
            width: 5vw;
            height: 5vh;
            border-radius: 2em;
            margin-left: 2.5vw;
            transition: all .5s ease-in-out;
            opacity: 0%;
        }

        .btn-buy:hover {
            background-color: #E7CEA6;
        }

        .img-cart {
            position: absolute;
            margin-left: -2vw;
            margin-top: -1.5vh;
            width: 1.5vw;
            height: 3vh;
            transition: all .5s ease-in-out;
        }

        .btn-buy:hover .img-cart {
            transform: translateX(1.2vw);
            /* animation: keranjang 2s infinite; */
        }

        .text-buy {
            font-size: 12px;
            position: absolute;
            margin-top: -1.3vh;
            margin-left: 1.9vw;
            opacity: 100%;
            transition: all .1s ease-in-out;
        }

        .btn-buy:hover .text-buy {
            opacity: 0%;
            transform: translateX(2.5vw);
        }

        .img-back {
            margin-left: 2vw;
            width: 5vw;
        }

        .img-back:hover {
            transform: translateX(-2px);
            cursor: pointer;
        }

        .pohon-gersang-1 {
            position: absolute;
            left: 15vw;
            top: 30vh;
            width: 20vw;
            height: 50vh;
            transition: all .5s ease-in-out;
            z-index: -1;
        }



        .pohon-gersang-2 {
            position: absolute;
            left: 55vw;
            top: 30vh;
            width: 20vw;
            height: 50vh;
            transition: all .5s ease-in-out;
            z-index: -1;
        }

        .pohon-g1-1 {
            position: absolute;
            width: 20vw;
            height: 50vh;
            left: 15vw;
            top: 30vh;
            display: none;
            transition: all .5s ease-in-out;


        }

        .pohon-g1-2 {
            position: absolute;
            width: 20vw;
            height: 50vh;
            left: 55vw;
            top: 30vh;
            display: none;
            transition: all .5s ease-in-out;

        }

        .img-butterfly {
            position: absolute;
            width: 4vw;
            height: 9vh;
            left: 65vw;
            top: 40vh;
            z-index: 0;
            display: none;
        }

        #btf2 {
            left: 65vw;
            top: 40vh;
        }

        #btf1 {
            left: 25vw;
            top: 40vh;
        }

        .btf-img {
            width: 8vw;
            height: 18vh !important;
        }

        .g1-repair {
            z-index: -2;
        }

        .footer {
            font-family: 'Ysabeau SC', sans-serif;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            color: black;
            text-align: center;
            font-weight: bold;
        }

        /* ANIMATION FIELD */
        @keyframes newPurchase {
            0% {
                filter: drop-shadow(0 0 0.2rem #FFD93D);
            }

            10% {
                filter: drop-shadow(0 0 0.7rem #FFD93D);
            }

            20% {
                filter: drop-shadow(0 0 .2rem #FFD93D);
            }

            30% {
                filter: drop-shadow(0 0 .7rem #FFD93D);
            }

            40% {
                filter: drop-shadow(0 0 .2rem #FFD93D);
            }

            50% {
                filter: drop-shadow(0 0 .7rem #FFD93D);
            }

            60% {
                filter: drop-shadow(0 0 .2rem #FFD93D);
            }

            70% {
                filter: drop-shadow(0 0 .7rem #FFD93D);
            }

            80% {
                filter: drop-shadow(0 0 .2rem #FFD93D);
            }

            90% {
                filter: drop-shadow(0 0 .7rem #FFD93D);
            }

            100% {
                filter: drop-shadow(0 0 .2rem #FFD93D);
            }
        }

        @keyframes zoom-in {
            0% {
                transform: scale(0.1);
            }

            10% {
                transform: scale(0.2);
            }

            20% {
                transform: scale(0.3);
            }

            30% {
                transform: scale(0.4);
            }

            40% {
                transform: scale(0.5);
            }

            50% {
                transform: scale(0.6);
            }

            60% {
                transform: scale(0.7);
            }

            70% {
                transform: scale(0.8);
            }

            80% {
                transform: scale(0.9);
            }

            90% {
                transform: scale(1);
            }

            100% {
                transform: scale(1);

            }
        }

        /* LOADER CSS */
        .loader {
            background-color: white;
            /* display: none; */
            position: fixed;
            z-index: 1;
            width: 100%;
            height: 100%;
            overflow-y: hidden;
            overflow-x: hidden;
        }

        .dots-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
        }

        .dot {
            height: 20px;
            width: 20px;
            margin-right: 10px;
            border-radius: 10px;
            background-color: #b3d4fc;
            animation: pulse 1.5s infinite ease-in-out;
        }

        .dot:last-child {
            margin-right: 0;
        }

        .dot:nth-child(1) {
            animation-delay: -0.3s;
        }

        .dot:nth-child(2) {
            animation-delay: -0.1s;
        }

        .dot:nth-child(3) {
            animation-delay: 0.1s;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.8);
                background-color: #b3d4fc;
                box-shadow: 0 0 0 0 rgba(178, 212, 252, 0.7);
            }

            50% {
                transform: scale(1.2);
                background-color: #6793fb;
                box-shadow: 0 0 0 10px rgba(178, 212, 252, 0);
            }

            100% {
                transform: scale(0.8);
                background-color: #b3d4fc;
                box-shadow: 0 0 0 0 rgba(178, 212, 252, 0.7);
            }
        }
    </style>
</head>

<body>

    <!-- LOADER -->
    <div class="loader">
        <section class="dots-container">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </section>
    </div>
    <div class="shop">
        <div class="row mt-5">
            <div class="col-3">
                <img src="/assets/back.png" alt="" class="img-back">
            </div>
            <div class="col-6">
                <div class="row">
                    <!-- ITEM 1 -->
                    <div class="col-4 card-item">
                        <img src="/assets/chedar.png" alt="" class="img-item chedar-img">
                        <div class="name">
                            <h5 class="item-name">CHEDAR</h5>
                        </div>
                        <div class="item-harga">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/assets/coin.png" alt="" class="coin-shop">
                                </div>
                                <div class="col-2">
                                    <h5 class="price-shop">200</h5>
                                </div>
                            </div>
                            <button class="btn-buy" value="g1">
                                <img src="/assets/cart.png" alt="" class="img-cart">
                                <h5 class="text-buy">BUY!</h5>
                            </button>
                        </div>
                    </div>

                    <!-- ITEM 2 -->
                    <div class="col-4 card-item">
                        <img src="/assets/pohon.png" alt="" class="img-item pohon-img">
                        <div class="name">
                            <h5 class="item-name">POHON 1</h5>
                        </div>
                        <div class="item-harga">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/assets/coin.png" alt="" class="coin-shop">
                                </div>
                                <div class="col-2">
                                    <h5 class="price-shop">200</h5>
                                </div>
                            </div>
                            <button class="btn-buy">
                                <img src="/assets/cart.png" alt="" class="img-cart">
                                <h5 class="text-buy">BUY!</h5>
                            </button>
                        </div>
                    </div>

                    <!-- ITEM 3 -->
                    <div class="col-4 card-item">
                        <img src="/assets/elm.png" alt="" class="img-item pohon-img">
                        <div class="name">
                            <h5 class="item-name">PHON 2</h5>
                        </div>
                        <div class="item-harga">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/assets/coin.png" alt="" class="coin-shop">
                                </div>
                                <div class="col-2">
                                    <h5 class="price-shop">200</h5>
                                </div>
                            </div>
                            <button class="btn-buy">
                                <img src="/assets/cart.png" alt="" class="img-cart">
                                <h5 class="text-buy">BUY!</h5>
                            </button>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-4 card-item">
                        <img src="/assets/butterfly.png" alt="" class="img-item btf-img">
                        <div class="name">
                            <h5 class="item-name">BUTTERFLY</h5>
                        </div>
                        <div class="item-harga">
                            <div class="row">
                                <div class="col-4">
                                    <img src="/assets/coin.png" alt="" class="coin-shop">
                                </div>
                                <div class="col-2">
                                    <h5 class="price-shop">200</h5>
                                </div>
                            </div>
                            <button class="btn-buy" value="38">
                                <img src="/assets/cart.png" alt="" class="img-cart">
                                <h5 class="text-buy">BUY!</h5>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="main">
        <div class="pohon1 g1">
            <img src="/assets/gersang.png" alt="" class="pohon-gersang-1">
        </div>


        <div class="butterfly">
            <img src="/assets/butterfly.png" alt="" class="img-butterfly g2-repair" id="btf1">
        </div>

        <div class="butterfly">
            <img src="/assets/butterfly.png" alt="" class="img-butterfly g2-repair" id="btf2">
        </div>

        <div class="pohon1 g1">
            <img src="/assets/gersang.png" alt="" class="pohon-gersang-2">
        </div>

        <div class="pohon1">
            <img src="/assets/chedar.png" alt="" class="pohon-g1-1 g1-repair">
        </div>

        <div class="pohon1">
            <img src="/assets/chedar.png" alt="" class="pohon-g1-2 g1-repair">
        </div>



        <button class="btn-coin">
            <img src="/assets/coin.png" alt="Coin Image" class="img-coin">
            <h5 class="jumlah-coin">200</h5>
            <span class="text-shop">SHOP!</span>
        </button>
    </div>


    <div class="footer">
        <i>Save The Earth!</i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(".loader").show().delay(1000).fadeOut();
            $(".btn-coin").click(function() {
                $(".shop").css("display", "block");
            });

            $(".img-back").click(function() {
                $(".shop").css("display", "none");
            })

            $(".btn-buy").click(function() {
                name = $(this).parent().parent().children(".name").children(".item-name").text();
                harga = $(this).parent().children(".row").children(".col-2").children(".price-shop").text();
                sure = "Apakah yakin ingin membeli " + name + " dengan harga " + harga + " koin?";
                group = $(this).val();
                Swal.fire({
                    text: sure,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#A6BB8D',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, buy!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/buy",
                            type: "POST",
                            data : {
                                'variant_id' : group,
                            },
                            success: function(data) {
                                data = JSON.parse(data);
                                Swal.fire({
                                    title : data.title,
                                    text: data.text,
                                    icon: data.icon,
                                    confirmButtonColor: '#A6BB8D',
                                })

                                if (data.icon == 'success') {
                                    $(".shop").css("display", "none");
                                    $(".loader").show().delay(5000).fadeOut();
                                    $(".g2").css("display", "none");
                                    $(".g2-repair").css({
                                        'display': 'block',
                                        'animation': 'newPurchase 10s ease-in-out',
                                    });
                                }
                            }
                        })
                    }
                })
            })
        });
    </script>
</body>

</html>