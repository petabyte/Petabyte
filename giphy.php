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
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script  src="js/app/giphy.js"></script>

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
                <li class="active">Giphy Asynchronous Gif update</li>
            </ol>
            <h3>Gif is updated asychronously from giphy.com every 20 seconds</h3>
        </div>

        <div class="col-md-9">
            <div>
                <h4 id="gifId"></h4>
                <h4 id="gifUrl"></h4>
                <img id="giphyGif" class="img-rounded" height="400px" width="500px"/>
            </div>
            <br/>
            <label for="inputCategory">Gif Category</label>
            <input id="inputCategory" type="text" class="form-control" value="rocket"/>
            <br />
            <button id="updateCategory" class="btn btn-default">
                Search
                <i class="fa"></i>
            </button>
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