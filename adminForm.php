<?php require_once("headerAdmin.html"); ?>

    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
             <div class="col-xs-offset-1 col-xs-10">
                    <div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title">Create  an account</h3>
                          </div>
                          <div class="panel-body">
                               <form  action="add.php" method="POST" role="form" enctype="multipart/form-data">
                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชั้นปีการศึกษา</label><br/>
                                                <input type="radio"   name="year" value="1" required>ปี 1&nbsp;&nbsp;<input type="radio"  name="year" value="2">ปี 2&nbsp;&nbsp;<input type="radio"  name="year" value="3">ปี 3&nbsp;&nbsp;<input type="radio"  name="year" value="4">ปี 4
                                        </div>
                                      </div>                         
                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                           <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ชื่อ</label>
                                           <input type="text" class="form-control" id="inputError1" name="name" required>
                                        </div>
                                      </div>

                                       <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">นามสกุล</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="lastname"  required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">ชื่อเล่น</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1" name="nickname" required>
                                        </div>
                                      </div>

                                    <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">รหัสนักศึกษา</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="studentId" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">สำเร็จการศึกษาจาก</label>
                                               <input type="text" class="form-control" 
                                               id="inputError1"
                                               name="school" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold"><br>เข้าศึกษาผ่านทาง</label><br/>
                                                <input type="radio" name="addmission" value="Admission" required> Admission&nbsp;&nbsp;<input type="radio"  name="addmission" value="โควตา"> โควตา&nbsp;<input type="radio"  name="addmission" value="โครงการพิเศษ"> โครงการพิเศษ
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold">เพศ</label><br/>
                                                <input type="radio" name="sex" value="ชาย" required> ผู้ชาย&nbsp;&nbsp;<input type="radio"  name="sex" value="หญิง"> ผู้หญิง
                                        </div>
                                      </div>
     
                                       <div class="form-group">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;"><br>ลักษณะเฉพาะ</label>
                                              <textarea class="form-control" id="inputError1" name="special" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">เบอร์ติดต่อ</label>
                                               <input type="text" class="form-control"
                                               id="inputError1"
                                                name="tel" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">อีเมล</label>
                                               <input type="text" class="form-control"
                                               id="inputError1"
                                                name="email" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">Line</label>
                                               <input type="text" class="form-control"
                                               id="inputError1"
                                                name="line" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">Twitter</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="twitter" required>
                                        </div>
                                      </div>

                                      <div class="form-group formField">
                                        <div class="col-xs-12 form-group has-error">
                                              <label class="control-label" for="inputError1" style="font-weight: bold;">Facebook</label>
                                               <input type="text" class="form-control"
                                               id="inputError1" name="facebook" required>
                                        </div>
                                      </div>
                                    
                                         <div class="form-group">
                                        <div class="col-xs-12 ">
                                              <label class="control-label" for="" style="font-weight: bold;"><br >รูปภาพ</label>
                                              <input type="file" name="img" id="img" required>
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
