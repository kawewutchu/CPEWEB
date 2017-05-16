<?php require_once("header.html"); ?>
<!DOCTYPE html>


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

        <div class="divide40"></div>

        <div class="cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <h3>Take a tour of our medical facility</h3>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#" class="btn btn-white-border btn-lg">Make an appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 margin30">
                        <h3>About Medical</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <ul class="list-unstyled contact-details">
                            <li class="clearfix">
                                <i class="pe-7s-home"></i>
                                <p>
                                    124, Munna wali street, queens road, 302012
                                </p>
                            </li>
                            <li class="clearfix">
                                <i class="pe-7s-phone"></i>
                                <p>
                                    +01 1800 555 33
                                </p>
                            </li>
                            <li class="clearfix">
                                <i class="pe-7s-mail"></i>
                                <p>
                                    support@assanmedical.com
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
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Faqs</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">make an appointment</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy & policy</a></li>
                            <li><a href="#">Terms & conditions</a></li>
                        </ul>
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
        <script src="js/medical-custom.js" type="text/javascript"></script>

    </body>
</html>