<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //TESTING
        $(document).ready(function() {
            $("#input-button").click(function(e) {
                e.preventDefault();
                jurusan = $("#input-jurusan").val();
                nomor = $("#input-nomor-kelompok").val();
                poin = $("#input-poin").val();
                if (poin == "") {
                    alert("Harap Isi poin yang ingin ditambahkan!");
                } else {
                    textAlert = "Apakah anda yakin ingin menambahkan poin sebanyak " + poin + " kepada kelompok " + jurusan + " " + nomor + "?";
                    textAlert2 = "Berhasil menambahkan poin sebanyak " + poin + " kepada kelompok " + jurusan + " " + nomor;

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
                            Swal.fire(
                                'Berhasil',
                                textAlert2,
                                'success'
                            )
                        }
                    })
                }
            })
        })
    </script>

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
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col-6">
            <!-- TITLE -->
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h1 style="margin-left: 2vw;">INPUT POIN</h1>
                </div>
            </div>

            <!-- START OF FORM -->
            <form method=" POST" class="needs-validation">
                <!-- FORM INPUT -->
                <div class="row mt-5 mb-4">
                    <!-- INPUT JURUSAN -->
                    <div class="col-4">
                        <div class="form-floating">
                            <select class="form-select" id="input-jurusan" name="input-jurusan" required>
                                <option value="Infor-SIB-DSA" selected>Infor-SIB-DSA</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Arsitektur">Arsitektur</option>
                            </select>
                            <label for="floatingSelect">Pilih Jurusan</label>
                        </div>
                    </div>
                    <!-- INPUT NOMOR KELOMPOK -->
                    <div class="col-4">
                        <div class="form-floating">
                            <select class="form-select" id="input-nomor-kelompok" name="input-nomor-kelompok" required>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="floatingSelect">Pilih Nomor Kelompok</label>
                        </div>
                    </div>

                    <!-- INPUT KOIN -->
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="input-poin" placeholder="Input Poin Kelompok...." name="input-poin" required>
                            <label for="floatingInput">Tambahan Poin</label>
                        </div>
                    </div>
                </div>
                <!-- CLOSE FORM INPUT -->

                <!-- BUTTON -->
                <div class="row button">
                    <div>
                        <button type="submit" name="submit" id="input-button">
                            Input Poin
                        </button>
                    </div>
                </div>
            </form>
            <!-- END OF FORM -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
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