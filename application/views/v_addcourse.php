<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Courses | Online Test App</title>
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
                                <h4>Add Course</h4><hr class="horizontal"/>
                            </div>
                            <div>       
                                <form action="<?php echo site_url('c_courses/add_course');?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-2">ADD COURSE</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="course" placeholder="ENTER COURSE" required />
                                        </div>
                                    </div><br>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="btn btn-success" name="submit" value="Submit"style="margin-left: 16px;" >Submit&nbsp;<i class="fa fa-paper-plane"></i></button><br><br>       
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
