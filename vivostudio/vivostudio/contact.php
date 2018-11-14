<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>::Contact ::</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/local.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel=stylesheet>
    <link href="index_files/bootstrap.css" rel="stylesheet">
    <link href="index_files/justified-nav.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <img src="images/head_1.png" width="100%" height="100%">
        <br><br>
        <div class="masthead">
            <ul class="nav nav-justified">
                <li><a href="index.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i>&nbsp;Home</a></li>
                <li><a href="about.php"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>&nbsp;About Us</a></li>
                <li><a href="services.php"><i class="fa fa-tasks fa-lg" aria-hidden="true"></i>&nbsp;Services</a></li>
                <li><a href="estudio.php">&nbsp;<i class="fa fa-camera fa-lg" aria-hidden="true"></i>&nbsp;Vivo-Studio</a></li>
                <li><a href="sample.php"><i class="fa fa-film fa-lg" aria-hidden="true"></i>&nbsp;Samples</a></li>
                <li class="active"><a href="contact.php"><i class="fa fa-phone fa-lg" aria-hidden="true"></i>&nbsp;Contact Us</a></li>
            </ul>
        </div>
        <br />
       
        <div class="row">
            <div class="col-md-12">
                <p>
                    <font size="+2" face="Helvetica" color="#2B2B2B">
                        We're happy to answer any questions you have or provide you any estimate. Just send us a message in the form below with any questions you may have. </font>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6">

                <form>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" id="pass" name="pass" placeholder="Subject" required />
                    </div>

                    <div class="form-group">
                        <label> Message </label>
                        <textarea cols="3" class="form-control" rows="3" name="msg" placeholder="Enter Your Message"></textarea>
                    </div>

                     <button type="submit" class="btn btn-primary" href="cont_done.php"> Submit </button>
                    <button type="reset" class="btn btn-danger"> Clear </button>
                </form>


            </div>

            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <font color="#2B2B2B" size="3">
                        EMAIL <br>
                    </font>
                    <font color="#2B2B2B" size="3">
                        vivostudios@gmail.com<br>
                    </font>
                    <hr>
                </div>

                <div class="col-xs-6 col-md-6">
                    <font color="#2B2B2B" size="3">
                        TELEPHONE <br>
                    </font>
                    <font color="#2B2B2B" size="3">
                        +94 889 000 999 | +94 788 999 555 | +94 00 777 99 00<br>
                    </font>
                    <hr>
                </div>

                <div class="col-xs-6 col-md-6">
                    <font color="#2B2B2B" size="3">
                        ADDRESS <br>
                    </font>
                    <font color="#2B2B2B" size="3">
                        #202/1, D. S. Senanayake Street, <br> Kandy,
                        <br> Sri Lankka.
                    </font>

                </div>
            </div>
        </div>
        
        <hr>

        <div class="row">
            <div class="col-md-12">
                <p>
                    <font size="+2" face="Helvetica" color="#2B2B2B">
                        You Can find Us Here..
                    </font>
            </div>
            <div class="col-xs-12 col-md-12">
            <style>
                #map_canvas {
                    width: 100%;
                    height: 400px;
                }

            </style>
            <div id="map_canvas" class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55405.37628037267!2d80.59076174015716!3d7.2945439521395805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!5e1!3m2!1sen!2slk!4v1515634472577" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        </div>

        
       

        <br><br>
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
   

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>

</html>
