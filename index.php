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
            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="img/slideshow1.png" alt="Rocket1">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/slideshow2.png" alt="Rocket2">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/slideshow3.png" alt="Rocket3">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/slideshow4.png" alt="Rocket4">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/slideshow5.png" alt="Rocket5">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/home.png" alt="home">
                        <div class="caption">
                            <h4 class="pull-right"><i class="fa fa-rocket fa-lg"></i></h4>
                            <h4><a href="index.php">Home</a>
                            </h4>
                            <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/about.png" alt="about">
                        <div class="caption">
                            <h4 class="pull-right"><i class="fa fa-star fa-lg"></i></h4>
                            <h4><a href="about.php">About</a>
                            </h4>
                            <p>Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/samples.png" alt="samples">
                        <div class="caption">
                            <h4 class="pull-right"><i class="fa fa-thumbs-up fa-lg"></i></h4>
                            <h4><a href="samples.php">Samples</a>
                            </h4>
                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/contact.png" alt="contact">
                        <div class="caption">
                            <h4 class="pull-right"><i class="fa fa-phone-square fa-lg"></i></h4>
                            <h4><a href="contact.php">Contact</a>
                            </h4>
                            <p>Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
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