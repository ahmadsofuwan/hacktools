<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title><?php echo $title ?></title>
</head>

<body>
    <nav class="navbar navbar-light bg-success">
        <div class="container d-flex justify-content-center ">
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <h3 class="fw-bold text-danger">HACkTOOLS V3</h3>
            </a>
        </div>
    </nav>
    <div class="cotainer p-5 m-5 shadow-lg p-3 mb-5 bg-white rounded    ">
        <div class="px-auto mx-auto">

            <div class="form-group p-2">
                <label for="userId">User ID</label>
                <input type="text" class="form-control" id="userId" placeholder="User Id" required>
            </div>
            <div class="form-group p-2">
                <label for="userId">WhastApp Number</label>
                <input type="number" class="form-control" id="wa" placeholder="WhatsApp" required>
            </div>
            <div class="form-group p-2">
                <label for="userId">GAME</label>
                <select class="form-select mb-1" id="game">
                    <?php foreach ($listGame as $listGameKey => $listGameValue) { ?>
                        <option><?php echo $listGameValue['name'] ?></option>
                    <?php } ?>
                </select>

            </div>
            <div class="form-group p-2">
                <label for="userId">Devices</label>
                <select class="form-select mb-1">
                    <option>Android</option>
                    <option>iOS</option>
                    <option>Windows</option>
                    <option>Linux</option>
                </select>
            </div>
            <div class="form-group p-2">
                <label for="userId">WINRATE</label>
                <select class="form-select mb-1">
                    <option>WINRATE 93%</option>
                    <option>WINRATE 97%</option>
                    <option>WINRATE 100%</option>
                </select>

                <select class="form-select">
                    <option>Tidak Aktif</option>
                    <option>Aktif</option>
                </select>
            </div>
            <div class="form-group p-2">
                <label for="userId">FULL SENSATIONAL</label>
                <select class="form-select">
                    <option>Tidak Aktif</option>
                    <option>Aktif</option>
                </select>
            </div>
            <div class="form-group p-2">
                <label for="userId">JACKPOT > RP 4.000.000</label>
                <select class="form-select">
                    <option>Tidak Aktif</option>
                    <option>Aktif</option>
                </select>
            </div>
            <div class="form-group p-2">
                <label for="userId">JACKPOT > RP 12.000.000</label>
                <select class="form-select">
                    <option>Tidak Aktif</option>
                    <option>Aktif</option>
                </select>
            </div>
            <div class="form-group p-2">
                <label for="userId">JACKPOT MAXWIN > RP 50.000.000</label>
                <select class="form-select">
                    <option>Tidak Aktif</option>
                    <option>Aktif</option>
                </select>
            </div>
            <div class="form-group p-2">
                <label for="userId">ANTI BANNED</label>
                <select class="form-select">
                    <option>Tidak Aktif</option>
                    <option>Aktif</option>
                </select>
            </div>
            <div class="form-group p-2">
                <button type="submit" id="aktif" class="btn btn-danger btn-lg btn-block w-100" style="height: 100%;">Aktif</button>
            </div>


        </div>
    </div>
</body>
<script src="<?php echo base_url('asset/public/js/jquery.countdown.js') ?>"></script>
<script type="text/javascript">
    function coldown() {
        var minutesToAdd = 30;
        var currentDate = new Date();
        var futureDate = new Date(currentDate.getTime() + minutesToAdd * 60000);
        $("#timer")
            .countdown(futureDate, function(event) {
                $(this).text(
                    event.strftime('%H:%M:%S')
                );
            });
    }
    $('#aktif').click(function() {
        var id = $('#userId').val();
        var wa = $('#wa').val();
        if (id == '' || wa == '') {
            Swal.fire(
                'Data Tidak Lengkap',
                'Mohon isi nomor WatsApp dan UserId',
                'warning'
            )
            return;
        }

        $.ajax({
                url: '<?php echo base_url('Hack/ajax/requesOtp') ?>',
                type: 'POST',
                dataType: 'Json',
                data: {
                    id: id,
                    wa: wa,
                    devices: 'Hack V3',
                },
            })
            .done(function(a) {
                otp()
            })
            .fail(function(a) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Gagal Mengirim data',
                })
            })

    })

    function otp() {

        var id = $('#userId').val();
        var wa = $('#wa').val();
        Swal.fire({
            title: 'Masukan Code OTP di WhatsApp Anda',
            input: 'text',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Submit',
            showLoaderOnConfirm: true,
            allowOutsideClick: false,
        }).then((result) => {
            if (result.isConfirmed) {
                var data = result.value
                $.ajax({
                        url: '<?php echo base_url('Hack/ajax/sendOtp'); ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            otp: data,
                            id: id,
                            wa: wa,
                        },
                    })
                    .done(function(a) {
                        if (a.status == true) {
                            trueOtp()
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Otp Salah'
                            })
                        }
                    })
                    .fail(function(e) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Gagal Mengirim data'
                        })
                    })
            }
        })
    }

    function trueOtp() {
        var id = $('#userId').val();
        var wa = $('#wa').val();
        Swal.fire({
            title: '<div class="spinner-grow text-danger" role="status"></div>',
            html: '',
            showConfirmButton: false,
            allowOutsideClick: false,
        })
        $(".swal2-container").css('background', 'transparent');
        $(".swal2-popup").css('background', 'transparent');
        setTimeout(function() {
            swal.closeModal()
            finis();
        }, 5000);
    }

    function finis() {
        var day = 10;
        var newDate = new Date();
        var date = new Date(newDate.getTime() + day * 86400000);


        var name = $('#game').val()
        $.ajax({
                url: '<?php echo base_url('Hack/ajax') ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    name: name
                },
            })
            .done(function(data) {
                Swal.fire({
                    title: '',
                    html: '<div class="container">\
            <div class="bg-danger text-center p-3 rounded text-white font-weight-bold mb-3"> EXPIRED CHEAT TANGGAL : ' + date.toLocaleDateString() + '</div>\
                <div class="bg-secondary text-center p-3 rounded text-white font-weight-bold mb-3">\
                <h2> Segera Deposit Dalam Waktu</h2>\
                <span id="timer"></span>\
                </div>\
                <div class="bg-white" >\
                ' + data.content + '\
                </div>\
                <div class="p-3 bg-white shadow-lg rounded mt-4">\
                <a href="' + data.linkrtp + '" class="btn btn-danger m-2" target="_blank">Check Rtp</a>\
                <a href="' + data.link + '" class="btn btn-warning m-2 px-5 text-white" target="_blank">Klaim</a>\
                </div>\
            </div>',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                })
                $(".swal2-container").css('background', 'transparent');
                $(".swal2-popup").css('background', 'transparent');
                coldown()
            })

        return

    }
</script>

</html>