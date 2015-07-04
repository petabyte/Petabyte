<!DOCTYPE html>
<html lang="en">

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

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    <script  src="js/lib/jquery.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script  src="js/app/main.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
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
                <li class="active">Chopin Etude No.11 E flat major</li>
            </ol>
            <h1>Audio</h1>
            <h3>Chopin Etude No.11 E flat major</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" poster="img/chopin.png" controls="controls" title="Chopin Etude">
                    <source src="audio/chopin.mp3" type="audio/mp3" />
                    <source src="audio/chopin.ogg" type="audio/ogg" />
                </video>
            </div>
            <div>
                <h3>Audio Element</h3>
                <h3>Chopin Etude No.11 E flat major</h3>
                <audio controls="controls" title="Chopin Etude">
                    <source src="audio/chopin.mp3" type="audio/mp3" />
                    <source src="audio/chopin.ogg" type="audio/ogg" />
                </audio>
            </div>

        </div>


    </div>

</div>

<!-- /.container -->

<div class="container">
    <hr>
    <?php include 'footer.php'?>
</div>
<!-- /.container -->

</body>

</html>