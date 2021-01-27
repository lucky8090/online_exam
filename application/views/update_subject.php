<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Subjects | Online Test App</title>
        <?php include('header.php'); ?>
        <?php include('left_sidebar.php'); ?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Subjects</h3>
            <div id="flash_msg">
                <?= $this->session->flashdata('msg') ?>
            </div>
          	  <div class="row mt">
                  <div class="col-md-12">
                  <div class="content-panel" style="padding-bottom: 43px;">
                        <div class="col-md-12">
                            <h4>Edit Subject</h4><hr class="horizontal"/>
                        </div>
                          <div class="clearfix"></div>
                            <form action="<?php echo site_url('c_subjects/update_subject');?>" method="post">
                                <!-- <div class="form-group">
                                    <label class="col-sm-2">SELECT COURSE</label>
                                    <div class="col-sm-5">
                                        <select id="course" name="course" class="form-control">
                                            <option value="" hidden="hidden">SELECT COURSE</option>
                                            <?php if(isset($record_courses)) {  foreach($record_courses as $row) {
                                                ?>
                                                <option value="<?= $row['c_id'];?>" <?= $row['c_id'] == $record[0]['c_id'] ? 'selected' : '' ?>><?php echo $row['c_name'];?></option>
                                            <?php  }}?>
                                        </select>
                                    </div>
                                </div> -->

                            <div class="clearfix"></div>
                        <br>
                        <div class="form-group">
                             <input type="hidden" value="<?= $record[0]['sub_id'];?>" name="id" />
                          
                            <label class="col-sm-2">UPDATE SUBJECT</label>
                            <div class="col-sm-5">
                        <input type="text" class="form-control" value="<?= $record[0]['sub_name'];?>" name="subject" placeholder="ENTER SUBJECT" required />
                        </div>
                        </div>          
                            <br>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                    <div class="col-sm-5">
                                        <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit&nbsp;&nbsp;<i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </div>
                        
                        </form>
                        </div>            
                       
                </div>
                  </div>
              </div>

          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->    
      
           <!--main content end-->
           <?php include('footer.php'); ?>
   
</body>
</html>
