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

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-lg"></i> GAS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse topnavbar" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html"><i class="fa fa-circle-o fa-lg"></i> Home</a>
                </li>
                <li>
                    <a href="about.html"><i class="fa fa-circle-o fa-lg"></i> About</a>
                </li>
                <li>
                    <a href="samples.html"><i class="fa fa-circle-o fa-lg"></i> Samples</a>
                </li>
                <li>
                    <a href="contact.html"><i class="fa fa-circle-o fa-lg"></i> Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <div  id="sidemenu" class="list-group">
                <a href="index.html" class="list-group-item">Home</a>
                <a href="about.html" class="list-group-item">About</a>
                <a href="samples.html" class="list-group-item">Samples</a>
                <a href="contact.html" class="list-group-item">Contact</a>
            </div>
        </div>


        <div class="col-md-9">
            <ol class="breadcrumb">
                <li><a href="samples.html">Samples</a></li>
                <li class="active">Todo</li>
            </ol>

        </div>

        <div class="col-md-9">
            <h1>To do list generated from db/todo.db</h1>
            <ol id="todolist">
                <?php
                $db = new SQLite3("db/todo.db");
                $result = $db->query("select * from todo");
                while($row=$result->fetchArray()){
                    echo "<li data-id=".$row["id"].">".$row["todo_item"]."</li>";
                }
                ?>
            </ol>
        </div>
    </div>
</div>

<!-- /.container -->

<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; George Sanchez 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

</body>

</html>