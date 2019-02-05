<html>

<head>
    <title>Lifestyle Store</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
                    <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="form-contain">
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>
                            LOGIN
                        </h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                        <form>
                        <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account? <a href="signup.php">Register</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="ff">
        <div class="container">
            Copyright © Lifestyle Store. All Rights Reserved” ​and ​“Contact Us: +91 90000 00000
        </div>
    </footer>

</body>


</html>