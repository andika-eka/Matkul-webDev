<?php

//inisialisasi nilai awal
$f1Input = "0";         
$f2Input = "0";         
$nInput = "2";        

$temp = "0";            
$fn = "";            


if (isset($_POST['print'])) {     //button cliked

    $f1Input = $_POST["inputf1"];
    $f2Input = $_POST["inputf2"];
    $nInput = $_POST["inputn"];

    //supaya angka pada form tidak ikut berubah
    $f1 = $f1Input;
    $f2 = $f2Input;
    $n = $nInput;
   
    //algoritma fibonacci
    $fn = $f1 . ", " . $f2;
    for ($i = 0; $i < $n - 2; $i++) {
        $temp = $f1 + $f2;
        $f1 = $f2;
        $f2 = $temp;

        $fn = $fn . ", " . $temp;
    }
}
?>

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
                            tugas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="fibonacci.php">deret fibonacci</a>
                            <a class="dropdown-item" href="aritma.php">baris aritmatika</a>
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

            <h1>Deret fibonacci</h1>
            <hr>
            <div class="container">
                <div class="form-horizontal">
                    <div class="col-sm-9">
                        <form method="POST" action="#" class=" form-container">
                            <p>F<sub>n + 1</sub> = F <sub>n - 1</sub> + F<sub>n </sub></p>

                            <div class="form-group">
                                <label for="inputf1">F<sub>1</sub> = </label>
                                <input type="number" class="form-control" value="<?php echo $f1Input; ?>" id="inputf1"
                                    name="inputf1" required />
                            </div>
                            <div class="form-group">
                                <label for="inputf2">F<sub>2</sub> = </label>
                                <input type="number" class="form-control" value="<?php echo $f2Input; ?>" id="inputf2"
                                    name="inputf2" required />
                            </div>

                            <div class="form-group">
                                <label for="inputn">n</label>
                                <input type="number" class="form-control" value="<?php echo $nInput; ?>" id="inputn"
                                    name="inputn" required />
                            </div>
                            <button type="submit" class="btn btn-primary " name="print"> Print </button>
                            <br >
                            <div class="form-group">
                                <h5> <b>deret fibonacci: </b> </h5>
                                <p> F<sub>n = </sub> <?php echo $fn; ?> </p>
                            </div>

                        </form>
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

        </script>

</body>

</html>