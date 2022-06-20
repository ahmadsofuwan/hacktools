<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hack Tools</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/sb_admin2/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/sb_admin2/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/public/'); ?>css/body.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .opc-50 {
            opacity: 0.5
        }
    </style>
</head>

<body class="bg-gradient-primary" style="background-image: url(<?php echo base_url('asset/public/img/bg-hack.gif') ?>);">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-start text-light">
            <div class="col-lg">
                <div class="card o-hidden border-0  my-5" style="background-color: transparent;">
                    <!--bg di sini -->
                    <div class="fistEnable justify-content-center rounded border mb-5" style=" border-width: 3px !important;border-color: rgb(81, 255, 0) !important;background-color: rgb(32, 39, 29);">
                        <h1 class="text-uppercase text-center text-warning font-weight-bold"> slot game hacking tools</h1>
                        <h4 class="text-center" style="color: rgb(81, 255, 0) !important">Simple, Powerful, And Scure</h4>
                    </div>
                    <div class="fistEnable row justify-content-start rounded text-light pb-5 p-5" style="background-color: rgb(81, 255, 0);">
                        <div class="col-sm-12 rounded p-4" style="background-color: rgb(32, 39, 29)">
                            <div class="row p-2 input-group">
                                <div class="col-sm-3 text-center">
                                    <label for="">👩‍💻Your ID</label>
                                    <input type="text" class="form-control" id="ID">
                                </div>
                                <div class="col-sm-3 text-center">
                                    <label for="">💻 Devices Platform</label>
                                    <select class="custom-select" id="devices">
                                        <option value="Android">Android</option>
                                        <option value="iOS">iOS</option>
                                        <option value="Windows">Windows</option>
                                        <option value="Linux">Linux</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <label for="">🎰 Games</label>
                                    <select class="custom-select" id="games">
                                        <?php foreach ($listGame as $listGameKey => $listGameValue) { ?>
                                            <option value="<?php echo $listGameValue['name'] ?>"><?php echo $listGameValue['name'] ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-3 text-center">
                                    <label for=""><img src="<?php echo base_url('asset/public/img/whatsapp.png') ?>" alt=""> WhatsApp Number</label>
                                    <input type="number" class="form-control" placeholder="62" id="wa">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-2">☠️Hack Power</div>
                            </div>
                            <div class="row mt-3 mb-4">
                                <div class="col-sm-2">
                                    Off
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    On
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fistEnable justify-content-start mb-5" style="background-color: rgb(81, 255, 0);">
                        <div class="row">
                            <div class="col-sm-4 pl-5 ml-5 mb-5">
                                <button class="btn text-white" id="btnHack" style="background-color: #0e1fb9;"><b>RUN MOD v.2</b></button>
                            </div>
                        </div>
                    </div>
                    <div class="justify-content-center rounded border mb-5 opc-50" style=" border-width: 3px !important;border-color: rgb(81, 255, 0) !important;background-color: rgb(32, 39, 29);">
                        <h1 class="text-uppercase text-center text-warning font-weight-bold"> bonus Hack</h1>
                        <h4 class="text-center" style="color: rgb(81, 255, 0) !important">🎰 Silahkan Pilih Bonus yang ingin Anda Dapatkan 🎰</h4>
                    </div>
                    <div class="row p-5 text-light pb-5 opc-50" style="background-color: rgb(81, 255, 0);">
                        <div class="col-sm-6 px-5" id="coverHack">
                            <label class="mx-5">
                                <img src="<?php echo base_url('asset/public/img/diamond.png') ?>">
                                <img src="<?php echo base_url('asset/public/img/diamond.png') ?>">
                                <img src="<?php echo base_url('asset/public/img/diamond.png') ?>">
                            </label>
                            <select class="custom-select" id="option">
                                <?php foreach ($listOption as $listOptionKey => $listOptionValue) { ?>
                                    <option value="<?php echo $listOptionValue['name'] ?>"><?php echo $listOptionValue['name'] ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-12 justify-content-start my-3 px-5" id="console">
                            <button class="btn btn-primary btn-block py-3 text-uppercase" id="hack">hacking NOW!!!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/sb_admin2/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset/sb_admin2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/sb_admin2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/sb_admin2/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var consoleText = [
        'Performing server authentication: connect_to_server(332FS2);',
        'Response: Successfully authenticated secure server connection.',
        'Import: AES_256_Keys();',
        'Import: Open_SSL_Encryption();',
        'Import: Server_332FS2_Keychain();',
        'Response: All files were imported successfully;',
        'Retrieving form input information: kernel.forms.obtain_user_information();',
        'Response: Obtained user form input information',
        'USERNAME: sadsfdg',
        'DEVICE: Android',
        'HACK: undefined',
        'RTP: undefined',
        'Injecting the information securely into encryption server: kernel.generator.start_process();',
        'Encrypting request: kernel.open_ssl_enc(sadsfdg);',
        'Response: Successfully encrypted user request',
        'Encrypted Information: 608c4a1b463ec35ad0354c1edd5ae961add292b6675cbca8ac41d70d37d4e2a7dba2b',
        'Retrieving current PRS server script: read_PRS_server_source();',
        'Response: Successfully obtained current server script',
        'MD5 hash: 2c58b6d627de1c58cc4fda16e1037a08',
        'Local IP address: 192.168.5.6',
        'Current version: 2.320.23.1',
        'Login server version: 1.32.4.5',
        'Number external methods: 43267',
        'Initialization method: kernel.cc_server.application.main.init();',
        'Injecting into main method: inject_ssl(kernel.cc_server.application.main.init);',
        'Response: Successfully injected into PRS servers',
        'Items generation successful',
        'Sending item to (sadsfdg) from our server',
        'Initating redirect procedure',
    ]
    var proges = 1;
    var delay = 50;
    var typeWriterIndex = 0;
    $('#option').prop('disabled', true)
    $('#hack').prop('disabled', true)
    $("#btnHack").click(function() {
        var id = $('#ID').val()
        var wa = $('#wa').val()
        var devices = $('#devices').val()
        if (id == '' || wa == '') {
            notInput()
            return;
        }
        $.ajax({
                url: '<?php echo base_url('Hack/ajax/requesOtp') ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    wa: wa,
                    id: id,
                    devices: devices,
                },
            })
            .done(function() {
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
                                    Swal.fire({
                                        title: '<div class="spinner-border text-success" role="status"> <span class = "sr-only" > Loading... < /span> < /div > ',
                                        html: '<span>Connecting to ' + id + ' using ' + devices + '   MOD v.2.0</span><div class="progress">\
                                        <div id="progress" class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>\
                                        </div>',
                                        showConfirmButton: false,
                                        allowOutsideClick: false,
                                    })
                                    $(".swal2-container").css('background-color', 'rgba(43, 165, 137, 0.45)');
                                    $(".swal2-popup").css('background-color', 'rgb(81, 255, 0)');
                                    $(".swal2-popup").css('background-color', 'rgb(81, 255, 0)');
                                    progres()
                                    proges = 1;
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

            })
            .fail(function() {
                console.log('error');
            })
    })

    function progres() {
        proges++;
        setTimeout(function() {
            $("#progress").css('width', proges + '%')
            if (proges < 100) {
                progres()
            } else {
                unlock()
            }
        }, delay);
    }

    function unlock() {
        swal.closeModal()
        $('input').prop('disabled', true)
        $('select').prop('disabled', true)

        $('#option').prop('disabled', false)
        $('#hack').prop('disabled', false)
        $("#btnHack").prop('disabled', true)
        $('.opc-50').removeClass("opc-50")
        $('.fistEnable').addClass("opc-50");
    }

    function notInput() {
        var id = $('#ID').val()
        var wa = $('#devices').val()
        Swal.fire({
            title: 'Fill in All Input',
            html: '<img src="<?php echo base_url('asset/public/img/poison.png') ?>" class="w-25">',
            showConfirmButton: true,
            allowOutsideClick: false,
        })
    }
    $('#hack').click(function() {
        $('#console').html('<dl style="background-color: black;color: rgb(81, 255, 0);height: 200px;" id="lisConsole"><dt>#start</dt></dl>');
        $('#coverHack').remove();
        runConsole()
    })

    var ind = 0

    function runConsole() {
        if (ind < consoleText.length) {
            var obj = $('#lisConsole').find('dt');
            $(obj).first().before('<dt>#</dt>');
            obj = $('#lisConsole').find('dt');
            typeWriter(consoleText[ind], obj, 'firs')
            ind++;
        } else {
            $.ajax({
                    url: '<?php echo base_url('Hack/ajax') ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        name: $('#games').val()
                    },
                })
                .done(function(data) {
                    Swal.fire({
                        title: '<div class="justify-content-center rounded p-3" id="title-finis"><h2 class="fw-bold fw-bolder text-warning">HACKING SUCCESS!</h2></div>\
                <div class="justify-content-center rounded my-3"><h4 class="fw-bold fw-bolder text-primary">SELAMAT BERMAIN!</h4></div>',
                        html: '<a href="' + data.linkrtp + '" target="_blank" class="btn btn-danger fw-bold fw-bolder mb-3 text-light">Check RTP</a><br>\
                        <a href="' + data.link + '" target="_blank" class="btn btn-warning fw-bold fw-bolder">Klaim  Bonus Anda</a>',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    })
                    $(".swal2-container").css('background-color', 'rgba(43, 165, 137, 0.45)');
                    $("#title-finis").css('background-color', 'black');
                    $(".swal2-popup").css('background-color', 'rgb(81, 255, 0)');
                })



        }
    }

    function typeWriter(data, obj, status = '') {
        if (status == 'firs')
            typeWriterIndex = 0;

        if (typeWriterIndex < data.length) {
            $(obj).append(data.charAt(typeWriterIndex))
            typeWriterIndex++;
            setTimeout(function() {
                typeWriter(data, obj)
            }, 1);
        } else {
            runConsole()
        }
    }
</script>