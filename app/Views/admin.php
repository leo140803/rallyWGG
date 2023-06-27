<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Poin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <style>
        .bootstrap-select > .dropdown-toggle {
            height: 100% !important;
        }
    </style>

    <style>
        .button {
            text-align: right;
        }

        button {
            width: 10vw;
            height: 6vh;
            border: 3px solid #315cfd;
            border-radius: 45px;
            transition: all 0.3s;
            cursor: pointer;
            background: white;
            font-size: .7em;
            font-weight: 550;
            font-family: 'Montserrat', sans-serif;
        }

        button:hover {
            background: #315cfd;
            color: white;
            font-size: 1em;
        }
    </style>


</head>

<body>
    <div class="row justify-content-center vh-100 w-100 m-0 p-0">
        <!-- <div class="col-3"></div> -->
        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
            <!-- TITLE -->
            <!-- <div class="row mb-5"> -->
                <!-- <div class="col-3"></div> -->
                <!-- <div class="col-6"> -->
                    <h1 class="text-center mb-5">INPUT POIN</h1>
                <!-- </div> -->
            <!-- </div> -->

            

            <!-- START OF FORM -->
            <form method="POST" action="<?= site_url('/update_point') ?>" class="needs-validation w-100" id="updateForm">
                <!-- FORM INPUT -->
                <div class="row p-0">
                    <!-- INPUT NOMOR KELOMPOK -->
                    <?php if(session()->has('error')): ?>
                        <div class="alert alert-danger mb-4">
                            <?= session()->get('error'); ?>
                        </div>
                    <?php elseif(session()->has('success')): ?>
                        <div class="alert alert-success mb-4">
                            <?= session()->get('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-6 mb-4">
                        <!-- <div class="form-floating"> -->
                            <label for="input-kelompok">Pilih Kelompok</label>
                            <select class="form-control <?= ($validation->hasError('input-kelompok') ? 'is-invalid' : ''); ?>" id="input-kelompok" name="input-kelompok" data-live-search="true" data-size="5" required>
                                <?php foreach($kelompok as $k): ?>
                                    <option value="<?= $k->nama ?>" data-tokens="<?= $k->nama ?>"><?= $k->nama ?></option>
                                <?php endforeach; ?>
                            </select>

                            <div class="invalid-feedback">
                                <?= $validation->getError('input-kelompok'); ?>
                            </div>
                            <!-- <label for="floatingSelect">Pilih Nomor Kelompok</label> -->
                        <!-- </div> -->
                    </div>

                    <!-- INPUT KOIN -->
                    <div class="col-md-6 mb-4">
                        <label for="input-poin">Tambahan Poin</label>
                        <!-- <div class="form-floating"> -->
                            <input type="number" class="form-control <?= ($validation->hasError('input-poin') ? 'is-invalid' : ''); ?>" id="input-poin" placeholder="Input Poin Kelompok...." name="input-poin" required>
                            <!-- <label for="floatingInput">Tambahan Poin</label> -->
                        <!-- </div> -->
                        <div class="invalid-feedback">
                            <?= $validation->getError('input-poin'); ?>
                        </div>
                    </div>
                </div>
                <!-- CLOSE FORM INPUT -->

                <!-- BUTTON -->
                <!-- <div class="row button"> -->
                    <!-- <div> -->
                        <button type="submit" id="input-button" class="w-100">
                            Input Poin
                        </button>
                    <!-- </div> -->
                <!-- </div> -->
            </form>
            <!-- END OF FORM -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#input-kelompok').selectpicker();

            $("#input-kelompok").click(function() {
                $(this).parent().find('dropdown-menu show').attr("data-popper-placement", "bottom-start")
            })

            $("#input-button").click(function(e) {
                e.preventDefault();
                kelompok = $("#input-kelompok").val();
                poin = $("#input-poin").val();
                // if (poin == "") {
                //     // alert("Harap isi poin yang ingin ditambahkan!");
                // } else {
                    textAlert = "Apakah anda yakin ingin menambahkan poin sebanyak " + poin + " kepada kelompok " + kelompok + "?";
                    textAlert2 = "Berhasil menambahkan poin sebanyak " + poin + " kepada kelompok " + kelompok;

                    Swal.fire({
                        text: textAlert,
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#28A745',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Tidak',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $("#updateForm").submit();
                            // Swal.fire(
                            //     'Berhasil',
                            //     textAlert2,
                            //     'success'
                            // )
                        }
                    })
                // }
            })
        });
    </script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>