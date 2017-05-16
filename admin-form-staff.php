
 <?php require_once("header.html"); ?>

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

                
                   
                    
                    
                  

               
                <div class="col-md-3">
                   
                    
                    
                    
                </div>
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
                    <div class="col-md-3 margin30">
                        <h3>latest news</h3>
                        <ul class="list-unstyled latest-news">
                            <li>
                                <a href="#">Sed do eiusmod tempor incididunt ut labore</a>
                                <em><i class="fa fa-comments-o"></i> 6 comments</em>
                            </li>
                            <li>
                                <a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                                <em><i class="fa fa-comments-o"></i> 6 comments</em>
                            </li>
                            <li>
                                <a href="#">Sed do eiusmod tempor incididunt ut labore</a>
                                <em><i class="fa fa-comments-o"></i> 6 comments</em>
                            </li>                          
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
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/wow.min.js" type="text/javascript"></script>
         <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="js/medical-custom.js" type="text/javascript"></script>
    </body>
</html>