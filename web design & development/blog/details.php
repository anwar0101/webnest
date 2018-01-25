<?php
$servername = "localhost";
$username = "root";
$password = "anikdipa";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];


$sql = "SELECT * FROM articles WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Simple Blog</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="/css/custom.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Awesome Blog</a>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Login/Register</a></li>

              </ul>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <div class="col-md-12" id="article">
                        <h1><?php echo $row['title'] ?></h1>
                        <img src="<?php echo $row['image'] ?>">
                        <p>
                            <?php echo $row['body']; ?>
                        </p>

                        <div class="col-md-12">
                            <div class="pull-left">
                                Tagged as:  Mercedes · Christmas
                            </div>
                            <div class="pull-right">
                                <span>
                                    <i class="fa fa-plus fa-2x"></i>
                                    <i class="fa fa-facebook fa-2x"></i>
                                    <i class="fa fa-twitter fa-2x"></i>
                                    <i class="fa fa-github fa-2x"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p>
                                no comments posted
                            </p>
                             <hr>
                        </div>

                        <div class="col-md-12">
                            <h2>Leave your comment</h2>
                            <form class="" action="index.html" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" value="" class="form-control" placeholder="* Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="name" value="" class="form-control" placeholder="* Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="name" class="form-control" rows="4" cols="80" placeholder="* your commnet here"></textarea>
                                </div>
                                <button type="submit" name="button" class="btn">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="sidebar">
                    <h3>Latest articles</h3>
                    <hr style="border-top: dotted 3px;" />
                    <div class="">
                        <i class="glyphicon glyphicon-euro"></i><a href="#">Article 1</a>
                        <p>
                            Jul, 2017 (minor update)
                        </p>
                    </div>
                    <div class="">
                        <i class="glyphicon glyphicon-euro"></i><a href="#">Article 1</a>
                        <p>
                            Jul, 2017 (minor update)
                        </p>
                    </div>
                    <div class="">
                        <i class="glyphicon glyphicon-euro"></i><a href="#">Article 1</a>
                        <p>
                            Jul, 2017 (minor update)
                        </p>
                    </div>
                    <div class="">
                        <i class="glyphicon glyphicon-euro"></i><a href="#">Article 1</a>
                        <p>
                            Jul, 2017 (minor update)
                        </p>
                    </div>
                    <div class="">
                        <i class="glyphicon glyphicon-euro"></i><a href="#">Article 1</a>
                        <p>
                            Jul, 2017 (minor update)
                        </p>
                    </div>
                    <div class="">
                        <i class="glyphicon glyphicon-euro"></i><a href="#">Article 1</a>
                        <p>
                            Jul, 2017 (minor update)
                        </p>
                    </div>
                    <div class="">
                        <i class="glyphicon glyphicon-euro"></i><a href="#">Article 1</a>
                        <p>
                            Jul, 2017 (minor update)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="pull-left" id="left">
                    <p>
                        <h3>Links</h3>
                        <a href="#">About us</a>
                        <a href="#">About us</a>
                        <a href="#">About us</a>
                    </p>
                </div>
                <div class="pull-right" id="right">
                    <a href="#"> <i class="fa fa-facebook fa-3x"> </i></a>
                    <a href="#"> <i class="fa fa-twitter fa-3x"> </i></a>
                    <a href="#"> <i class="fa fa-youtube fa-3x"> </i></a>
                    <a href="#"> <i class="fa fa-github fa-3x"> </i></a>
                </div>
            </div>
        </footer>
    </body>
</html>
