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
                            <h4>Edit Test Paper Details</h4><hr/>
                        </div>
                        <form action="<?= site_url('c_testpapers/update_q_p'); ?>" method="post">
                            <input type="hidden" value="<?= $number[0]['qp_id'];?>" name="id"/>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Course</label>
                                    <select name="course" id="course" class="form-control" >
                                        <option value="" hidden="hidden">SELECT COURSE</option>
                                        <?php  $i =1; if(isset($courses)) {  foreach($courses as $row) {?>
                                            <option value="<?= $row['c_id'];?>" <?= $row['c_id'] == $number[0]['c_id'] ? 'selected' : '' ?>><?= $row['c_name'];?></option>
                                        <?php $i++; }}?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Subjects</label>
                                    <select name="subject" id="subject"  class="form-control" >
                                        <option value="<?= $number[0]['sub_id'];?>"><?= $number[0]['sub_name'];?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fa fa-check"></i>ADD NUMBER OF QUESTIONS</label>
                                    <input type="text" class="form-control" name="q_no" id="q_no" value="<?= $number[0]['no_quests'];?>"  placeholder="UPDATE NUMBER OF QUESTION" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fa fa-check"></i>ADD QUESTIONS DESCRIPTION</label>
                                    <input type="text" class="form-control"  name="q_desc" id="q_desc" placeholder="UPDATE DESCRIPTION" value="<?= $number[0]['q_describe'];?>" required  />
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
