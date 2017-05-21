
<?php

  $servername = "www.innogaku.com";
  $username = "group2";
  $password = "group2";
  $dbname = "group2";
  $conn = new mysqli($servername, $username, $password,$dbname);
  mysqli_set_charset($conn, "utf8");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT * FROM TABLE_7 where id='".$_GET["id"]."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc()

  ?><!DOCTYPE html>
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
                                <li><a style="font-size: 15px;" href="showYear4.php">Students Year 4</a></li>
                                <li><a style="font-size: 15px;" href="showTecher.php">showTeacher</a></li>
                                <li  class="active"><a style="font-size: 15px;" href="showStaff.php">Staff</a></li>
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
                        <h2>Staff</h2>
                    </div>
                </div>
            </div>
</div><!--breadcrumb-->
<div class="divide70"></div>
    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
             <div class="col-xs-offset-1 col-xs-10">
                    <div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title" style="color: maroon">staff's information</h3>
                          </div>
                          <div class="panel-body">
                               
                                    <!-- <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชั้นปีการศึกษา</label><br/>
                                                <input type="radio"   name="year" value="=ชั้นปี 1" required>ปี 1&nbsp;&nbsp;<input type="radio"  name="year" value="ชั้นปี 2">ปี 2&nbsp;&nbsp;<input type="radio"  name="year" value="ชั้นปี 3">ปี 3&nbsp;&nbsp;<input type="radio"  name="year" value="ชั้นปี 4">ปี 4
                                        </div>
                                      </div> -->

                                    
                                    <form  action="add-staff.php" method="POST" role="form" enctype="multipart/form-data"> <!--FIX THIS -->
                                      
                                      <center>
                                        <img src="Staff/<?echo($row["id"])?>.jpg" class="img-responsive" alt="">
                                    </center>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                           <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ตำแหน่งงาน(Job)</label>
                                           <input type="text" class="form-control" id="inputError1" name="job" value="<?echo($row["job"])?>" required>
                                        </div>
                                      </div>

                                       <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชื่อ(Name)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="name" value="<?echo($row["name"])?>" value="<?echo($row["name"])?>" required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ขอบข่ายงานที่ทำ(Role)</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1" name="role" value="<?echo($row["role"])?>" required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ระดับการศึกษา(Education)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="education" value="<?echo($row["education"])?>" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">อีเมลล์(Email)</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1"
                                               name="email" value="<?echo($row["email"])?>" required>
                                        </div>
                                      </div>
                                </form>
                         </div>
                    </div>
             </div>
        </div>
          
      </div>
    </section>
<?php require_once("footer.html"); ?>
