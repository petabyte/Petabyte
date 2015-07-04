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
                <li credits="active">Samples</li>
            </ol>
            <h1>Samples</h1>
            <a href="visualization.php" class="list-group-item">Solar System Visualization using SVG</a>
            <a href="canvas.php" class="list-group-item">Solar System Animation using Canvas</a>
            <a href="weather.php" class="list-group-item">Weather (Using 3rd party API)</a>
            <a href="todo.php" class="list-group-item">Todo</a>
            <a href="webcomponent.php" class="list-group-item">Web Component Sample</a>
            <a href="video.php" class="list-group-item">Discovery Launch Video</a>
            <a href="audio.php" class="list-group-item">Chopin Etude No.11 E flat major</a>
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