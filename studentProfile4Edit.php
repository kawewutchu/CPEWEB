<?php require_once("headerAdmin.html");
require_once("checkLoggedIn.php");?> 
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
  $sql = "SELECT * FROM TABLE_4 where studentId='".$_GET["studentId"]."'";
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
                                <form action="edit4.php" method="POST" role="form" enctype="multipart/form-data">
                                    <center>
                                        <img src="52-59_60/<?echo($row["studentId"])?>.jpg" class="img-responsive" alt="">
                                    </center>
                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชั้นปีการศึกษา</label>
                                                <p><?=$row["year"]?></p>
                                        </div>
                                      </div >
                                      
                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                           <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ชื่อ</label>
                                           <input type="text" class="form-control" id="inputError1" name="name" value="<?echo($row["name"])?>" required>

                                        </div>
                                      </div>

                                       <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">นามสกุล</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="lastname" value="<?echo($row["lastname"])?>" required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชื่อเล่น</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1"name="nickname" value="<?echo($row["nickname"])?>" required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">รหัสนักศึกษา</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="studentId" value="<?echo($row["studentId"])?>" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">สำเร็จการศึกษาจาก</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1"
                                               name="school" value="<?echo($row["school"])?>" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold"><br>เข้าศึกษาผ่านทาง</label><br/>
                                                <p><?=($row["addmission"])?></p>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">เพศ</label><br/>
                                                  <p><?=($row["sex"])?></p>
                                        </div>
                                      </div>
     
                                       <div class="form-group">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ลักษณะเฉพาะ</label>
                                              <textarea class="form-control" id="inputError1" name="detail" value="<?echo($row["character"])?>" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">เบอร์ติดต่อ</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" 
                                                name="tel" value="<?echo($row["tel"])?>" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">อีเมล</label>
                                               <input type="text" class="form-control"
                                               id="inputError1"
                                                name="email" value="<?echo($row["email"])?>" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">Line</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" value="<?echo($row["line"])?>"
                                                name="line" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">Twitter</label>
                                               <input type="text" class="form-control" value="<?echo($row["twitter"])?>"
                                               id="inputError1" name="twitter" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">Facebook</label>
                                               <input type="text" class="form-control" value="<?echo($row["facebook"])?>"
                                               id="inputError1" name="facebook" required>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-xs-12 ">
                                              <label class="control-label" for="" style="font-weight: bold;"><br >รูปภาพ</label>
                                              <input type="file" name="img" id="img">
                                            </div>

                                        </div>
                                      <div  class="form-group formField has-error">
                                            <div class="col-xs-12">
                                                <label></label>
                                                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Submit">
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