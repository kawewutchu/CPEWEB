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
  $sql = "SELECT * FROM TABLE_7 where id='".$_GET["id"]."'";
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
                            <h3 class="panel-title">Edit Staff</h3>
                          </div>
                          <div class="panel-body">
                                <form action="editStaff.php" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
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
                                           <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ชื่อ(Name)</label>
                                           <input type="text" class="form-control" id="inputError1" name="name" value="<?echo($row["name"])?>" required>
 
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
                                               id="inputError1" name="email" value="<?echo($row["email"])?>" required>
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