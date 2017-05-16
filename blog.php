


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
    
    $sql = "SELECT * FROM news_table";
    $result = $conn->query($sql);  
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>News</title>

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
                        <li  class="dropdown">
                                <a style="font-size: 25px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a style="font-size: 15px;" href="Admission1.html">Admission 1</a></li>
                                <li><a style="font-size: 15px;" href="Admission2.html">Admission 2</a></li>
                                <li><a style="font-size: 15px;" href="Admission3.html">Admission 3</a></li>
                            </ul>
                        </li>
                        <li class="active"><a style="font-size: 25px;" href="blog.php">News</a></li>
                            <li class="dropdown">
                                <a style="font-size: 25px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">People <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a style="font-size: 15px;" href="showYear1.php">Students Year 1</a></li>
                                <li><a style="font-size: 15px;" href="showYear2.php">Students Year 2</a></li>
                                <li><a style="font-size: 15px;" href="showYear3.php">Students Year 3</a></li>
                                <li><a style="font-size: 15px;" href="showYear4.php">Students Year 4</a></li>
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
                        <p style="font-size: 40px; font-weight: bold; color: black; padding-top: 30px ">ข่าวสารที่น่าสนใจ</p>
                    </div>
                </div>
            </div>
        </div><!--breadcrumb-->





        <div class="divide70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 margin30">
                    <div class="blog-post">
                     <?php while($row = $result->fetch_assoc()): ?>

                        <img src=<?=$row["img"]?> alt="" class="img-responsive" style="width: 600px; height:400px; padding-top: 30px" > 
                        <h3 class="post-title">
                            <a href="#"><?=$row["title_show"]?>...</a>
                        </h3>

                        <p style="padding-top: 10px">
                            <?=$row["detail_show"]?>...
                        </p>
                        <a href="medical-post.html" class="btn btn-theme-bg">Continue reading...</a>

                        <?php endwhile; ?>

                    </div><!--blog post-->

                    <ul class="pagination pull-right">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </div><!--post column end-->

                </div>
            </div>
         <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 margin30">
                        <div id="googleMap" style="width:100%;height:250px;"></div>

                            <script>
                            function myMap() {
                            var mapProp= {
                                center:new google.maps.LatLng(18.795673,98.9519858),
                                zoom:17,
                            };
                            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                            }
                            </script>

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ3UDvQLE6R5TABE8KHnpzb6yTrRJGzlY&callback=myMap"></script>
                    </div>
                    <div class="col-md-3 margin30">
                        <h3>Contact Us</h3>
                        <ul class="list-unstyled contact-details">
                            <li class="clearfix">
                                <i class="pe-7s-home"></i>
                                <p>
                                    239, ถนนห้วยเเก้ว ตำบลสุเทพ อำเภอเมือง จังหวัดเชียงใหม่ 50200
                                </p>
                            </li>
                            <li class="clearfix">
                                <i class="pe-7s-phone"></i>
                                <p>
                                    +668-4614-0006<br>
                                    +66-5394-2023
                                </p>
                            </li>
                            <li class="clearfix">
                                <i class="pe-7s-mail"></i>
                                <p>
                                    cpe@eng.cmu.ac.th
                                </p>
                            </li>
                        </ul>
                        <div class="socials-colored">
                            <a href="#" class="social-icon si-dark si-colored-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-google-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-google-plus">
                                <i class="fa fa-youtube-play"></i>
                                <i class="fa fa-youtube-play"></i>
                            </a>
                            <a href="#" class="social-icon si-dark si-colored-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div><!--col-->
                    <div class="col-md-3 margin30">
                        <h3>Quick links</h3>
                        <ul class="list-unstyled quick-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="blog.php">News</a></li>
                            <li><a href="showYear1.php">Studens year1</a></li>
                            <li><a href="showYear2.php">Studens year2</a></li>
                            <li><a href="showYear3.php">Studens year3</a></li>
                            <li><a href="showYear4.php">Studens year4</a></li>
                            <li><a href="showTecher.php">Academic</a></li>
                            <li><a href="showStaff.php">Staff</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-md-3 margin30">
                        <h3>Quick Contact</h3>
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-theme-bg btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <span>Copyright &copy; 2015. All right reserved.</span>
                </div>
            </div>
        </footer>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/pace.min.js" type="text/javascript"></script>
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/wow.min.js" type="text/javascript"></script>

        <!--revolution slider plugins-->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/revolution-custom.js"></script>
        <script src="js/medical-custom.js" type="text/javascript"></script>
    </body>
</html>