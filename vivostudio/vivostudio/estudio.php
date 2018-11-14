<?php include('sever.php'); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>::vivo studio ::</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/local.css" rel="stylesheet" type="text/css">
    <link href="index_files/bootstrap.css" rel="stylesheet">
    <link href="index_files/justified-nav.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel=stylesheet>
    <script type="text/javascript" src="js/jquery.js">
</script>

    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" />
    <script src="js/jquery-1.8.2.min.js" type="text/javascript">


    </script>
    <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">


    </script>
    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">


    </script>
    <script>
        $(document).ready(function() {
            
            $("#frm_signin").validationEngine();
        });

    </script>

</head>

<body>
    <div class="container">
        <img src="images/head_1.png" width="100%" height="100%">
        <br><br>
        <div class="masthead">
            <ul class="nav nav-justified">
                <li><a href="index.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i>&nbsp;Home</a></li>
                <li><a href="about.php"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>&nbsp;About Us</a></li>
                <li ><a href="services.php"><i class="fa fa-tasks fa-lg" aria-hidden="true"></i>&nbsp;Services</a></li>
                <li class="active"><a href="estudio.php" >&nbsp;<i class="fa fa-camera fa-lg" aria-hidden="true"></i>&nbsp;Vivo-Studio</a></li>
                <li><a href="sample.php"><i class="fa fa-film fa-lg" aria-hidden="true"></i>&nbsp;Samples</a></li>
                <li><a href="contact.php"><i class="fa fa-phone fa-lg" aria-hidden="true"></i>&nbsp;Contact Us</a></li>
            </ul>
        </div>
        <br />
      
        <div class="alert">
        </div>

        <h2>
            <font color="#000000"> Sign in Today.. </font>
        </h2>

        <form class="form-inline" role="form" method="post" action="estudio.php">
            <?php include('errors.php');?>
            <div class="form-group">
                <label class="sr-only" for="emailAddress">Email address</label>
                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label class="sr-only" for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password1" placeholder="Password">
            </div>
            <a href="index.php"><button type="submit" class="btn btn-primary" name="login">Login</button></a>
        </form> <br>

        <h4>
            <font color="#1996B2"><b>or Sign Up Here </b></font>
        </h4>
        <form>
            <button type="button" class="btn btn-success btn-md navbar-btn" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</button>
        </form>

        <div class="container">
            <div class="modal fade" id="signup" role="dialog">
                <div class="modal-dialog modal-sm">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Create a new Account</h4>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="estudio.php">
                                <?php include('errors.php');?>

                                <div class="form-group">

                                    <label for="usr">First Name:</label>
                                    <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
                                </div>

                                <div class="form-group">

                                    <label for="usr">Last Name:</label>
                                    <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="usr">User Name:</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Email:</label>
                                    <input type="text" class="form-control" name="email" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" name="password1">
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Confirm Your Password:</label>
                                    <input type="password" class="form-control" name="password2">
                                </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" name="register1">Register</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


        <br>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <?php 
			include 'footer.php';
           	?>
            </div>

            <div class="col-md-6" align="right">
                <?php 
			include 'footer_contact.php';
           	?>
            </div>
        </div><br><br><br><br><br>

    </div>
   

    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>
    <script>
        $("#btn_submit").click(function() {
            $.post("logHadle.php", $("#frm_signin").serialize(),
                function(data) {
                    if (data == 'ok') {
                        document.location = "user_type.php";
                    } else {
                        $(".alert").html("<p> Wrong User Name or Password</p>");
                        $(".alert").fadeIn(500).delay(5000).fadeOut(400);
                    }
                });
        });

    </script>
</body>

</html>
