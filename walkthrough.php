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
                <li><a href="about.php">About</a></li>
                <li credits="active">Walkthrough</li>
            </ol>
            <h1>Walkthrough</h1>
            <div class="col-md-9">
                <p>Technology and approached used:</p>
                <ol type="1">
                    <li>Content Map - <a href="contentmap.php">Content Map</a> </li>
                    <li>Wireframe - <a href="wireframe.php">Wire Frame</a> </li>
                    <li>HTML5 - used in every page</li>
                    <li>CSS Layout Bootstrap - used a template and have responsiveness out of the box</li>
                    <li>Home, About, Samples, Contact - top level sections</li>
                    <li>Create and include a unique favicon <a href="img/favicon.ico">favicon</a></li>
                    <li>Glyphs, icons - Used in the Home page, <a href="index.php">Home page</a></li>
                    <li>Video Element -  <a href="video.php">Video</a></li>
                    <li>Audio Element -  <a href="audio.php">Audio</a></li>
                    <li>Slideshow -  <a href="index.php">Slideshow</a></li>
                    <li>This is a web font-  <h4>Sample font</h4></li>
                    <li>Canvas Element -  <a href="canvas.php">Canvas - planets.csv</a></li>
                    <li>HTML 5 - input validation  <a href="contact.php">Name and Email is required</a></li>
                    <li>JSON Data interchange  <a href="credits.php">Credits</a>,<a href="weather.php">Third Party APi</a></li>
                    <li>Server side persistent storage  <a href="feedback.php">Feedback stored as JSON</a>,<a href="todo.php">To do</a></li>
                    <li>Visualization  <a href="visualization.php">Visualization - planets.csv</a></li>
                    <li>Asynchronous updates -  <a href="weather.php">Weather</a>,<a href="webcomponent.php">Web Component</a>,<a href="giphy.php">Giphy Asynchronous update</a></li>
                    <li>Client side scripting - jQuery - Used jquery</li>
                    <li>Server side scripting - <a href="feedback_json.php">Server side php</a>,<a href="todo.php">To do</a></li>
                    <li>Credits - Using json (credits.json) file to render all credits - <a href="credits.php">Credits</a></li>
                    <li>This is the walkthrough can be found in about - <a href="about.php">About</a></li>


                    <li>Extra - Weather - Using a third party API openweathermap.com and HTML Geo Location</li>
                    <li>Extra - Web Components - Using polymer - <a href="webcomponent.php">Web Component</a></li>
                    <li>Extra - CDN jQuery DataTables - <a href="feedback.php">Feedback</a></li>
                    <li>Extra - used jshint</li>
                    <li>Extra - used grunt as the build tool</li>

                </ol>
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