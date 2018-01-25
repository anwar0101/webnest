
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

$sql = "SELECT * FROM articles";
$result = $conn->query($sql);

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

        <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                <li><a href="#left">Contact</a></li>
                <li><a href=""  data-toggle="modal" data-target="#login">Login</a></li>
                <li><a href=""  data-toggle="modal" data-target="#register">Register</a></li>


              </ul>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="Login">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" id="exampleModalLabel">Login</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="control-label">Email:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="control-label">Password:</label>
                <input type="button" name="name" class="form-control" value="">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Login</button>
          </div>
        </div>
        </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="Register">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" id="exampleModalLabel">Register</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="control-label">Full Name:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="control-label">Email:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="control-label">Password:</label>
                <input type="button" name="name" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="message-text" class="control-label">Confirm Password:</label>
                <input type="button" name="name" class="form-control" value="">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Register</button>
          </div>
        </div>
        </div>
        </div>


            <div class="row">
                <div class="col-md-9">
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) { ?>

                            <div class="col-md-12" id="article">
                                <a href="details.html"><h1><?php echo $row['title']; ?></h1></a>
                                <img src="<?php echo $row['image'] ?>" class="img-responsive">
                                <p>
                                    <?php
                                        echo mb_strimwidth($row['body'], 0, 500, " ...");
                                    ?>
                                </p>
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h4>0 Comment</h4>
                                    </div>
                                    <div class="pull-right">
                                        <a href="details.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-default btn-sm" name="button">more</button></a>
                                    </div>
                                </div>
                                <hr>
                            </div>

                        <?php }
                    } else {
                        echo "0 results";
                    }
                     ?>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm" id="sidebar">
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
