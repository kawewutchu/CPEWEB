<?php require_once("header.html"); ?>

    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
          	 <div class="col-xs-offset-1 col-xs-10">
             		<div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title">Create  news</h3>
                          </div>
                          <div class="panel-body">
                                <form action="add_news.php" method="POST" role="form" enctype="multipart/form-data">
                                      
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">หัวเรื่อง</label>
                                           <input type="text" class="form-control" name="title" name="title_show" placeholder="Title" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">หัวเรื่องโชว์</label>
                                           <input type="text" class="form-control" name="title_show" name="title_show" placeholder="Title" required>
                                        </div>
                                      </div>
                                      
                                       <div class="form-group">
                                        <div class="col-xs-12">
                                              <label for="">รายละเอียด</label>
                                              <textarea class="form-control" name="detail" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="col-xs-12">
                                              <label for="">รายละเอียดโชว์</label>
                                              <textarea class="form-control" name="detail_show" rows="3"></textarea>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                        <div class="col-xs-12">
                                              <label for="">รูปภาพ</label>
                                              <input type="file" name="img" id="img" required>
                                            </div>

                                        </div>
                                      <div class="form-group formField">
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
    