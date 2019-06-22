<?php
include('action.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>PHP Crud A</title>
</head>

<body class="bg-info">

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">PHP CRUD A</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>

        </div>
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-info" type="submit">Search</button>
        </form>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3 bg-light">
                <h4 class="text-center"><?= $vid; ?></h4>
                <h2 class="text-center"><?= $vname; ?></h2>
                <h2 class="text-center"><?= $vemail; ?></h2>
                <h2 class="text-center"><?= $vphone; ?></h2>
                <div class="text-center">
                <img src="<?= $vphoto; ?>" alt="" width="250" class="img-thumbnail text-center">
                </div>
                <h2><a href="index.php" class="badge badge-primary">Back</a></h2>
            </div>
           
           
        </div>
    </div>

</body>

</html>