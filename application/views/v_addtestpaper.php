<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TestPapers | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> TestPapers</h3>
            <div id="flash_msg">
                <?= $this->session->flashdata('msg') ?>
            </div>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel" style="padding-bottom: 43px;">
                        <div class="col-md-12">
                            <h4>Add Test Paper</h4><hr/>
                        </div>
                        <form action="<?= site_url('c_testpapers/add_q_p'); ?>" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Course</label>
                                    <select name="course" id="course" class="form-control" >
                                        <option value="">SELECT COURSE</option>
                                        <?php  $i =1; if(isset($courses)) {  foreach($courses as $row) {?>
                                            <option value="<?= $row['c_id'];?>"><?= $row['c_name'];?></option>
                                        <?php $i++; }}?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Subjects</label>
                                    <select name="subject" id="subject"  class="form-control" >
                                        <option value="">--First Select Course--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fa fa-check"></i>ADD TOTAL NUMBER OF QUESTIONS</label>
                                    <input type="text" class="form-control" name="q_no" id="q_no" value=""  placeholder="UPDATE NUMBER OF QUESTION"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fa fa-check"></i>ADD TESTPAPER DESCRIPTION</label>
                                    <input type="text" class="form-control"  name="q_desc" id="q_desc" placeholder="UPDATE DESCRIPTION" value=""  />
                                </div>
                            </div>
                            <div class="clearfix"></div><br/>   
                            <div class="form-group">
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-success btn-sm" name="submit" value="Submit">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php include('footer.php'); ?>
</body>
</html>
