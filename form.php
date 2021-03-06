<!DOCTYPE html>
<html lang="en">

<head>
    <title>andika web</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="owners" content="andika eka" />
    <meta name="keywords" content="test" />
    <meta name="layout" content="main" />
    <!-- <meta http-equiv="refresh" content="10"> -->
    <link rel="stylesheet" href="assets/css/style.css?ver=2.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Press+Start+2P&display=swap"
        rel="stylesheet">
</head>




<body>
    <!-- navbar >>>>-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand-1" href="#">Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">link 1</a>
                            <a class="dropdown-item" href="#">link 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">link 3</a>
                            <a class="dropdown-item" href="#">link 4</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/andika-eka">My github</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- <<<<< navbar -->

    <div class="jumbotron jumbotron-fluid" style="  padding-top: 100px;">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <b>Menu</b>
            <h3>list 1</h3>
            <a href="#link1">link 1.1</a>
            <a href="#link2">link 1.2</a>
            <a href="#link3">link 1.3</a>
            <h3>list 2</h3>
            <a href="#link1">link 2.1</a>
            <a href="#link2">link 2.2</a>
            <a href="#link3">link 2.3</a>
            <h3>list 3</h3>
            <a href="#link1">link 3.1</a>
            <a href="#link2">link 3.2</a>
            <a href="#link3">link 3.3</a>
        </div>



        <div class="content">

            <h1>Form Registrasi kos-kosan</h1>
            <hr>

            <form class=" form-horizontal" action="">
                <div class="form-group">
                    <label class="control-label col-sm-3">Nama:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" required placeholder="Masukkan Nama" name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">NIK:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" required placeholder="Masukkan NIK" name="nik">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">No Hp:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control " required placeholder="Masukkan No Hp" name="hp">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Status Pekerjaan:</label>
                    <div class="col-sm-9">
                        <select name="status_pekerjaan" class="form-control sp">
                            <option value="">Pilih</option>
                            <option value="bekerja">Bekerja</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="siswa">Siswa</option>
                            <option value="tidakbekerja">Tidak Bekerja</option>
                        </select>
                    </div>
                </div>

                <div class="form-group hide spo">
                    <label class="control-label col-sm-3 ket">Nama Perusahaan :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="Perusahaan" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">penaggung jawab:</label>
                    <div class="col-sm-9">
                        <select name="penaggung jawab" class="form-control sp">
                            <option value="">Pilih</option>
                            <option value="sendiri">sendiri</option>
                            <option value="orang tua/wali">orang tua/wali</option>
                            <option value="institusi">institusi</option>
                        </select>
                    </div>
                </div>
                
               
                <div class="form-group">
                    <label class="control-label col-sm-3">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control psw" placeholder="Enter password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Re Password:</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control repsw" placeholder="re - Enter password">
                        <small class="errpsw"></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember me </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Berhasil</h4>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid">
                <footer class="footer">
                    <div class="container">
                        <p>contact me :</p>
                        <p>E-mail : andikaeka1201@gmail.com</p>
                        <p>gitHub : https://github.com/andika-eka</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $(".form-horizontal").submit(function () {
                var ps1 = $('.psw').val();
                var ps2 = $('.repsw').val();
                var valid = 0;
                $('.err').html('');
                if (ps1 == ps2) {
                    valid = 1;
                } else {
                    $('.errpsw').html('Passsword Tidak Sama');
                }
                if (valid == 0) {
                    event.preventDefault();
                } else {
                    $('p').html("terimakasih " + $('input[name="nama"]').val() +
                        " pendaftaran berhasil ");
                    $('.modal').modal('show');
                    event.preventDefault();
                }
            });
            $('.sp').change(function () {
                $('.spo').addClass('hide');
                if ($(this).val() == 'bekerja') {
                    $('.ket').html('Nama Perusahaan');
                }
                if ($(this).val() == 'mahasiswa') {
                    $('.ket').html('Nama Universitas');
                }
                if ($(this).val() == 'siswa') {
                    $('.ket').html('Nama Sekolah');
                }
                else{
                    $('.ket').addClass("hide");
                }
            });
        });
    </script>

</body>

</html>