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
                        <div class="content-panel" style="padding-bottom: 43px;">
                            <div class="col-md-12">
                                <h4>Add Question Details</h4><hr/>
                            </div>
                            <form action="<?= site_url('c_qanswers/add_quest_ans');?>" method="post">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>SELECT SUBJECTS</label>
                                        <select name="subject" id="subject" class="form-control">
                                            <option value="" hidden="hidden">Select Subjects</option>
                                            <?php if(isset($subjects)) {  foreach($subjects as $row) {  ?>
                                                <option value="<?= $row['sub_id'];?>"><?= $row['sub_name'];?></option>
                                            <?php  }} ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>SELECT DIFFICULTY LEVEL</label>
                                        <select name="level" id="level" class="form-control">
                                            <option value="" hidden="hidden">Select Level</option>
                                            <option value="1">Easy</option>
                                            <option value="2">Medium</option>
                                            <option value="3">High</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ADD QUESTION</label>
                                                <textarea name="question" id="question" class="form-control" placeholder="Enter Question" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ADD CHOICE 1</label>
                                                <input type="text" class="form-control" name="ch1" placeholder="Enter 1st choice" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ADD CHOICE 2</label>
                                        <input type="text" class="form-control" name="ch2" placeholder="Enter 2nd choice" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><i></i>ADD CHOICE 3</label>
                                        <input type="text" class="form-control" name="ch3" placeholder="Enter 3rd choice" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess"><i></i>ADD CHOICE 4</label>
                                        <input type="text" class="form-control" name="ch4" placeholder="Enter 4th choice" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>SELECT CORRECT ANSWER</label>
                                        <!-- <input type="text" class="form-control" name="answer" placeholder="Enter correct Answer" required /> -->
                                        <select name="answer" id="level" class="form-control">
                                            <option value="" hidden="hidden" required>Select Choice</option>
                                            <option value="ch1">Choice1</option>
                                            <option value="ch2">Choice2</option>
                                            <option value="ch3">Choice3</option>
                                            <option value="ch4">Choice4</option>
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
