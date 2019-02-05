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
                <a href="#" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="form-contain">
    <div class="container">
        <div class="row">
            <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
                <h4><b>Change Password</b></h4>
                <form>
                    <div class="form-group">
                    <input type="password" name="email" class="form-control" placeholder="Old password"></div>
                    <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="New Password"></div>
                    <div class="form-group">
                    <input type="password" name="contact" class="form-control" placeholder="Re-type New Password"></div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="signup">Change</button></div>
                </form>
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