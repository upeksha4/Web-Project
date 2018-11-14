<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>::Retouch Division ::</title>
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

                <li><a href="albums.php"><i class="fa fa-tasks fa-lg" aria-hidden="true"></i>&nbsp;print Division</a></li>
                <li class="active"><a href="retouch.php">&nbsp;<i class="fa fa-camera fa-lg" aria-hidden="true"></i>&nbsp;Retouch Division</a></li>
                <li ><a href="Myaccount.php"><i class="fa fa-film fa-lg" aria-hidden="true"></i>&nbsp;Gallery</a></li>
                <li><a href="contact.php"><i class="fa fa-phone fa-lg" aria-hidden="true"></i>&nbsp;Contact Us</a></li>
                <li><a href="estudio.php"><i class="fa fa-sign-out fa-fw"></i> Logout </a></li>
            </ul>
        </div>
        <br />
        


        <div class="col-md-12">
            <font size="+1"> Select Your Edit Type<br>
                <form method="post" action="thanks.php">
                    <input type="radio" name="type" value="ThanksCard" onClick="this.form.submit();"> Thanks Card <br></input>
                </form>

                <input type="radio" name="type" value="PhotoEdit" checked> Re-touch Photos<br><br>
                <font size="+1">Which Size do You Want</font>
                <form method="post" action="aaa.php">
                    <select class="form-control">
    	<option>-- Select One --</option>
  		<option>3.5 x 5 (3R)</option>
 		<option>4 x 6 (4R)</option>
        <option>4 x 8 </option>
  		<option>6 x 6 </option>
        <option>4 x 10 </option>
        <option> Other </option>  	        
	</select>

                    <div class="form-group">
                        <font size="+1">Discription </font>
                        <textarea class="form-control" rows="3" placeholder="Please Add Bride & Groom's name and Vanule on going function" required></textarea>
                    </div>
                    Upload Your Image
                    <input type="file" id="upload"><br>
                    <button type="submit" class="btn btn-primary">Submit</button><br>
        </div>
        </form>

        
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
