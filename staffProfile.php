
<?php require_once("header.html"); ?> 
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

  $sql = "SELECT * FROM `TABLE 1` where studentId='".$_GET["studentId"]."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc()

  ?>
  <!-- MAIN SECTION -->
  <div class="divide40"></div>
     <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
             <div class="col-xs-offset-1 col-xs-10">
                    <div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title">Information</h3>
                          </div>
                          <div class="panel-body">
                                <form action="add4.php" method="POST" role="form" enctype="multipart/form-data">
                                    <center>
                                        <img src="52-59_60/<?echo($row["studentId"])?>.jpg" class="img-responsive" alt="">
                                    </center>
                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชื่อ</label>
                                                <p><?=$row["name"]?></p>
                                        </div>
                                      </div >
                                      
                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">งานที่ทำ</label>
                                           <input type="text" class="form-control" id="inputError1" name="job" value="<?echo($row["job"])?>" required>

                                        </div>
                                      </div>

                                       <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ตำแหน่ง</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="role" value="<?echo($row["role"])?>" required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ระดับการศึกษา</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1" name="education" value="<?echo($row["education"])?>" required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">อีเมลล์</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="email" value="<?echo($row["email"])?>" required>
                                        </div>
                                      </div>

                                      

                                </form>
                         </div>
                    </div>
             </div>
        </div>
          
      </div>
    </section>
 
<?php $conn->close(); ?>
<?php require_once("footer.html"); ?> 


    