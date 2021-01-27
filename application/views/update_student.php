<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Students | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Students</h3>
                <?= $this->session->flashdata('msg') ?>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel" style="padding-bottom: 43px;">
                        <div class="col-md-12">
                            <h4>Edit Students Details</h4><hr/>
                        </div>
                        <form action="<?= site_url('c_students/update_student');?>" method="post">
                            <input type="hidden" value="<?= $record[0]['std_id'];?>" name="id"/>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="<?= $record[0]['std_name'];?>" class="form-control" name="name" id="name" required autofocus />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Course</label>
                                    <select id="course" name="course" class="form-control">
                                        <option value="">Select Course</option>
                                        <?php if(isset($record_courses)) {  foreach($record_courses as $row) {
                                            ?>
                                            <option value="<?php echo $row['c_id'];?>" <?= $row['c_id'] == $record[0]['course'] ? 'selected' : '' ?>><?php echo $row['c_name'];?></option>
                                        <?php  }}?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control"name="email" id="email" value="<?= $record[0]['std_email'];?>" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" value="<?= $record[0]['std_pass'];?>" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" value="<?= $record[0]['std_mob'];?>" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Plan</label>
                                    <select id="plan" name="plan" class="form-control">
                                        <option value="" hidden="hidden">Select Plan</option>
                                        <?php if(isset($record_plans)) {  foreach($record_plans as $row) {
                                            ?>
                                            <option value="<?= $row['p_id'];?>" <?= $row['p_id'] == $record[0]['plan'] ? 'selected' : '' ?>><?= $row['p_name'];?></option>
                                        <?php  }}?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" value="<?= $record[0]['father_name'];?>" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" id="dob" value="<?= $record[0]['dob'];?>" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" id="address" class="form-control" required><?= $record[0]['std_home'];?></textarea>
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