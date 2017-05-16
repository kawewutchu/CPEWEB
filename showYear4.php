

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phpbasic";
	$conn = new mysqli($servername, $username, $password,$dbname);
	mysqli_set_charset($conn, "utf8");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT * FROM TABLE_4";
	$result = $conn->query($sql);
	
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bachelor's degree</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!--plugins css-->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <!--custom css for only medial template-->
        <link href="css/medical.css" type="text/css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Static navbar -->
         <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                    <a class="navbar-header" href="#">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <img class="logo" src="img/logo.png" alt=""></a>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a style="font-size: 25px;" href="index.html">Home</a></li>
                        <li class="dropdown">
                                <a style="font-size: 25px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a style="font-size: 15px;" href="Admission1.html">Admission 1</a></li>
                                <li><a style="font-size: 15px;" href="Admission2.html">Admission 2</a></li>
                                <li ><a style="font-size: 15px;" href="Admission3.html">Admission 3</a></li>
                            </ul>
                        </li>
                        <li><a style="font-size: 25px;" href="blog.php">News</a></li>
                            <li class="active"  class="dropdown">
                                <a style="font-size: 25px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">People <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li ><a style="font-size: 15px;" href="showYear1.php">Students Year 1</a></li>
                                <li><a style="font-size: 15px;" href="showYear2.php">Students Year 2</a></li>
                                <li><a style="font-size: 15px;" href="showYear3.php">Students Year 3</a></li>
                                <li class="active" ><a style="font-size: 15px;" href="showYear4.php">Students Year 4</a></li>
                                <li><a style="font-size: 15px;" href="showTecher.php">showTeacher</a></li>
                                <li><a style="font-size: 15px;" href="showStaff.php">Staff</a></li>
                            </ul>
                        </li>
                        <li><a style="font-size: 25px;" href="contract.html">Contact us</a></li>
                       <!--  <li><a style="font-size: 25px;" href="logout.php">Logout</a></li> -->
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
 <div class="medical-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Year 4th</h2>
                    </div>
                </div>
            </div>
</div><!--breadcrumb-->
<div class="divide70"></div>
     <section>
     <div class="container">
            <div class="row">
                <div class="col-md-12 margin-btm-40">
                    <div class="row">
                            <?php while($row = $result->fetch_assoc()): ?>
                            <div class="col-sm-4 margin-btm-30 staff">
                                <tr>
                                  <center>
                                   <a href="studentProfile4.php?studentId=<?=$row["studentId"]?>">
                                    
                                    <img src="52-59_60/<?echo($row["studentId"])?>.jpg" class="img-responsive" alt="">
                                    <h4></h4>
                                    
                                      <p style="font-size: 20px;  "><?=$row["name"]?> <?=$row["lastname"]?></p></a>
                                    <p style="margin-top: -20px;"><?=$row["studentId"]?></p>
                                    <h4></h4>
                                  </center>
                                 </tr>
                              </div>
                            <?php endwhile; ?>
    </section>
<?php $conn->close(); ?>

<?php require_once("footer.html"); ?> 


    