<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Question Answer | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Question Answer</h3>
            <div id="flash_msg">
                <?= $this->session->flashdata('msg') ?>
            </div>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <div class="col-md-12">
                            <h4>Edit Questions Details</h4><hr/>
                        </div>
                        <form action="<?= site_url('c_qanswers/update_quest_ans');?>" method="post">
                        <input type="hidden" name="id" value="<?= $details[0]['q_id']?>">
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Course</label>
                                    <select name="course" id="course" class="form-control">
                                        <option value="">SELECT COURSE</option>
                                            <?php  $i =1; if(isset($courses)) {  foreach($courses as $row) {?>
                                                <option value="<?= $row['c_id'];?>" <?= $row['c_id'] == $details[0]['c_id'] ? 'selected' : '' ?>><?= $row['c_name'];?></option>
                                            <?php $i++; }}?>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Subject</label>
                                    <select name="subject" id="subject" class="form-control">
                                        <option value="">Select Subject</option>
                                        <?php  $i =1; if(isset($subjects)) {  foreach($subjects as $row) {?>
                                            <option value="<?= $row['sub_id'];?>" <?= $row['sub_id'] == $details[0]['sub_id'] ? 'selected' : '' ?>><?= $row['sub_name'];?></option>
                                        <?php $i++; }}?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>SELECT DIFFICULTY LEVEL</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="" hidden="hidden">Select Level</option>
                                        <option value="1" <?= $details[0]['exam_level'] == 1 ? 'selected' : '' ?>>Easy</option>
                                        <option value="2" <?= $details[0]['exam_level'] == 2 ? 'selected' : '' ?>>Medium</option>
                                        <option value="3" <?= $details[0]['exam_level'] == 3 ? 'selected' : '' ?>>High</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Question Paper</label>
                                    <select name="ques_paper" id="question" class="form-control">
                                        <option value="<?= $details[0]['qp_id'];?>"><?= $details[0]['q_describe'];?></option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ADD QUESTION</label>
                                            <!-- <input type="text" class="form-control" value="<?= $details[0]['question'];?>" name="question" placeholder="Enter Question" required /> -->
                                            <textarea name="question" id="question" class="form-control" required><?= $details[0]['question'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ADD CHOICE 1</label>
                                            <input type="text" class="form-control" value="<?= $details[0]['ch1'];?>" name="ch1" placeholder="Enter 1st choice" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ADD CHOICE 2</label>
                                    <input type="text" class="form-control" value="<?= $details[0]['ch2'];?>" name="ch2" placeholder="Enter 2nd choice" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i></i>ADD CHOICE 3</label>
                                    <input type="text" class="form-control" value="<?= $details[0]['ch3'];?>" name="ch3" placeholder="Enter 3rd choice" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="inputSuccess"><i></i>ADD CHOICE 4</label>
                                    <input type="text" class="form-control" value="<?= $details[0]['ch4'];?>" name="ch4" placeholder="Enter 4th choice" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>SELECT CORRECT ANSWER</label>
                                    <!-- <input type="text" class="form-control" value="<?= $details[0]['correct_ans'];?>" name="answer" placeholder="Enter correct Answer" required /> -->
                                    <select name="answer" id="level" class="form-control">
                                        <option value="" hidden="hidden" required>Select Choice</option>
                                        <option value="ch1" <?= $details[0]['correct_ans'] == 'ch1' ? 'selected' : '' ?>>Choice1</option>
                                        <option value="ch2" <?= $details[0]['correct_ans'] == 'ch2' ? 'selected' : '' ?>>Choice2</option>
                                        <option value="ch3" <?= $details[0]['correct_ans'] == 'ch3' ? 'selected' : '' ?>>Choice3</option>
                                        <option value="ch4" <?= $details[0]['correct_ans'] == 'ch4' ? 'selected' : '' ?>>Choice4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-sm" name="submit" value="Submit" style="margin-top: 25px;">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                            <div class="clearfix"></div><br/>    
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php include('footer.php'); ?>
</body>
</html>
