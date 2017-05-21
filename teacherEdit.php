<?php require_once("headerAdmin.html");  
require_once("checkLoggedIn.php");
?>
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
  $sql = "SELECT * FROM TABLE_6 where id='".$_GET["id"]."'";
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
                            <h3 class="panel-title">Edit Teacher</h3>
                          </div>
                          <div class="panel-body">
                                <form action="editTeacher.php" method="POST" role="form" enctype="multipart/form-data" in>
                                <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
                                    <center>
                                        <img src="Prof/<?echo($row["id"])?>.jpg" class="img-responsive" alt="">
                                    </center>
                                     <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                           <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ชื่อ(Name)</label>
                                           <input type="text" class="form-control" id="inputError1" name="name" value="<?echo($row["name"])?>" required>
 
                                        </div>
                                      </div>
 
                                     
                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                           <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ชื่อภาษาอังกฤษ(English name)</label>
                                           <input type="text" class="form-control" id="inputError1" name="englishName" value="<?echo($row["englishName"])?>" required>
 
                                        </div>
                                      </div>
 
                                       <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">สถานที่ทำงาน(Workplace)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="workplace" value="<?echo($row["workplace"])?>" required>
                                        </div>
                                      </div>
 
                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ห้องพักอาจารย์(Room)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="room" value="<?echo($row["room"])?>" required>
                                        </div>
                                      </div>
 
                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">เบอร์โทรศัพท์(Phone number)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="phone" value="<?echo($row["phone"])?>" required>
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
 
                                      <div class="form-group">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;"><br>เว็บไซต์ส่วนตัว(Personal page)</label>
                                              <textarea class="form-control" id="inputError1" name="personalPage" rows="3"><?echo($row["personalPage"])?></textarea>
                                            </div>
                                        </div>
 
                                      <div class="form-group">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;"><br>กลุ่มงานวิจัย</label>
                                              <textarea class="form-control" id="inputError1" name="re_group" rows="3"><?echo($row["re_group"])?></textarea>
                                            </div>
                                        </div>
     
                                       <div class="form-group">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;"><br>แฟกซ์(Fax)</label>
                                              <textarea class="form-control" id="inputError1" name="fax" rows="3"><?echo($row["fax"])?></textarea>
                                            </div>
                                        </div>
 
                                        <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">ความเชี่ยวชาญเฉพาะ(Research interests)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1"
                                                name="researchInterests" value="<?echo($row["researchInterests"])?>" required>
                                        </div>
                                      </div>
 
                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">ระดับการศึกษา(Education)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1"
                                                name="education" value="<?echo($row["education"])?>" required>
                                        </div>
                                      </div>
 
                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">สำเร็จการศึกษาจาก(Graduation)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" value="<?echo($row["pastGraduation"])?>"
                                                name="pastGraduation" required>
                                        </div>
                                      </div>
 
                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">ประสบการณ์การทำงาน(Work experience)</label>
                                               <input type="text" class="form-control" value="<?echo($row["workExperience"])?>"
                                               id="inputError1" name="workExperience" required>
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