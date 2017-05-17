
 <?php require_once("headerAdmin.html"); 
 require_once("checkLoggedIn.php");
 ?>

    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
             <div class="col-xs-offset-1 col-xs-10">
                    <div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title" style="color: maroon">Enter staff's information</h3>
                          </div>
                          <div class="panel-body">
                               
                                    <!-- <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชั้นปีการศึกษา</label><br/>
                                                <input type="radio"   name="year" value="=ชั้นปี 1" required>ปี 1&nbsp;&nbsp;<input type="radio"  name="year" value="ชั้นปี 2">ปี 2&nbsp;&nbsp;<input type="radio"  name="year" value="ชั้นปี 3">ปี 3&nbsp;&nbsp;<input type="radio"  name="year" value="ชั้นปี 4">ปี 4
                                        </div>
                                      </div> -->

                                    
                                    <form  action="add-staff.php" method="POST" role="form" enctype="multipart/form-data"> <!--FIX THIS -->
                                      
                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                           <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ตำแหน่งงาน(Job)</label>
                                           <input type="text" class="form-control" id="inputError1" name="job" required>
                                        </div>
                                      </div>

                                       <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชื่อ(Name)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="name"  required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ขอบข่ายงานที่ทำ(Role)</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1" name="role" required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ระดับการศึกษา(Education)</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="education" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">อีเมลล์(Email)</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1"
                                               name="email" required>
                                        </div>
                                      </div>

                                         <div class="form-group">
                                        <div class="col-xs-12 ">
                                              <label class="control-label" for="" style="font-weight: bold;"><br >รูปภาพ(Picture)</label>
                                              <input type="file" name="img" id="img " required>
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
<?php require_once("footer.html"); ?>
                   <!-- end-->

                
 