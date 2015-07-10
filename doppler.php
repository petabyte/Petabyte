<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Development Portfolio">
    <meta name="author" content="George Sanchez">

    <title>George Sanchez</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Nova+Square" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet">
    <script  src="js/lib/jquery.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script  src="js/app/main.js"></script>
    <script src="js/lib/doppler.js"></script>
    <script src="js/app/dopplerMove.js"></script>
</head>
<body>
<?php include 'nav.php'?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <?php include 'sidemenu.php'?>
        <div class="col-md-9">
            <ol class="breadcrumb">
                <li><a href="samples.php">Samples</a></li>
                <li class="active">Doppler Motion</li>
            </ol>
            <h3>Allow browser to user your mic, Now blow!</h3>
        </div>
        <div class="col-md-9">
            <img src="img/pinwheel.png" id="box" />
        </div>
    </div>
</div>
<div class="container">
    <hr>
    <?php include 'footer.php'?>
</div>
</body>
</html>
