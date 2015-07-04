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
    <link href="css/tipsy.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Nova+Square" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/app/main.js"></script>
    <script src="js/app/contact.js"></script>


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
        <div class="col-md-2">
            <img src="img/george.png" alt="samples" class="img-responsive img-rounded">
        </div>

        <div class="col-md-6">
            <h3>George Sanchez</h3>
            <h4>petabyte.gs@gmail.com</h4>

            <p>Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Curabitur non nulla sit amet nisl
                tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget
                malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque
                nec, egestas non nisi. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta
                dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget
                consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Vivamus
                suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed,
                convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet
                quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus.</p>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div>
                <a href="feedback.php" class="list-group-item">Look at Feedback - Click Here!</a>
            </div>
            <br />
            <div id="feedbackAlert" class="alert alert-success collapse">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> Your feedback has been sent successfully.
            </div>
            <form role="form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input id="name"  class="form-control" type="text" autofocus required/>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" class="form-control" type="email" required/>
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea id="comment" class="form-control" rows="10"></textarea>
                </div>
                <button class="btn btn-default">Submit</button>
            </form>
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