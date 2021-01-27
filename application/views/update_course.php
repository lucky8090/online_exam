<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Plans | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>
    <section id="main-content">
        <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Courses</h3>
        <div id="flash_msg">
            <?= $this->session->flashdata('msg') ?>
        </div>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <div class="col-md-12">
                        <h4>Edit Course</h4><hr class="horizontal"/>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div>       
                        <form action="<?php echo site_url('c_courses/update_course');?>" method="post">
                            <div class="form-group">
                                <input type="hidden" value="<?= $record_course[0]['c_id'] ?>" name="id"/>
                                <label class="col-sm-2 col-sm-2 control-label">UPDATE COURSE</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" value="<?= $record_course[0]['c_name'] ?>" name="course" placeholder="ENTER YOUR NEW COURSE HERE" required/>
                                </div>
                            </div><br>
                            <div class="clearfix"></div><br>
                            <button type="submit" class="btn btn-success" name="submit" value="Submit" style="margin-left: 16px;">Submit&nbsp;<i class="fa fa-paper-plane"></i></button><br><br>
                        </form>
                    </div>   
                </div>
            </div>
        </div>
    </section>
    </section> 
    <?php include('footer.php'); ?>
</body>
</html>
