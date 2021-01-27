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
                            <h4><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</h4><hr class="horizontal"/>
                        </div>
                        <form action="<?= site_url('c_qanswers/filter');?>" method="post">
                            <div class="form-group">
                                <!-- <div class="col-md-6">
                                    <label>Select Course</label>
                                    <select id="course" name="course" class="form-control">
                                        <option value="" hidden="hidden">SELECT COURSE</option>
                                        <?php if(isset($courses)) {  foreach($courses as $row) {
                                            ?>
                                            <option value="<?= $row['c_id'];?>"><?= $row['c_name'];?></option>
                                        <?php  }}?>
                                    </select>
                                </div> -->
                                <div class="col-md-6">
                                    <label>Select Subject</label>
                                    <select id="subject" name="subject" class="form-control">
                                        <option value="">SELECT SUBJECT</option>
                                        <?php if(isset($subjects)) {  foreach($subjects as $row) {
                                            ?>
                                            <option value="<?= $row['sub_id'];?>"><?= $row['sub_name'];?></option>
                                        <?php  }}?>
                                    </select>
                                </div>
                                <!-- <div class="col-md-6">
                                    <label>Select Question</label>
                                    <select id="question" name="ques_paper" class="form-control">
                                        <option value="">FIRST SELECT SUBJECT</option>
                                    </select>
                                </div> -->
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-warning btn-sm" name="submit" value="Submit" style="margin-top: 25px;">Search&nbsp;<i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div class="clearfix"></div><br/>   
                            <div class="form-group">
                                <div class="col-sm-6">
                                    
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel" style="overflow:auto">
                        <table id="tableData" class="table table-striped table-bordered search-table" cellspacing="0" width="100%">
                            <div style="float:left;margin-left: 13px;"><a href="<?php echo site_url('c_qanswers/add_quest_ans/'); ?>"><i class="btn btn-success">Add Question Answer&nbsp;&nbsp;<i class="fa fa-plus"></i></i></div>
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>DIFFICULTY LEVEL</th>
                                    <th>QUESTION</th>
                                    <th>CHOICE  1</th>
                                    <th>CHOICE  2</th>
                                    <th>CHOICE  3</th>
                                    <th>CHOICE  4</th>
                                    <th>CORRECT ANSWER</th>
                                    <th>DATE</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i =1; if(isset($qa)) { if(!empty($qa)) { foreach($qa as $row) {?>
                                    <tr id="<?= $row['q_id'];?>">
                                        <td><?= $i;?></td>
                                        <?php if(!empty($row['exam_level'])) {?>
                                        <?php if($row['exam_level'] == 1) {?>
                                            <td>Easy</td>
                                        <?php } else if($row['exam_level'] == 2){ ?>
                                            <td>Medium</td>
                                        <?php } else if($row['exam_level'] == 3){ ?>
                                            <td>High</td>
                                        <?php } } else {?>
                                            <td>N/A</td>
                                        <?php } ?>
                                        <td><?= $row['question'];?></td>
                                        <td><?= $row['ch1'];?></td>
                                        <td><?= $row['ch2'];?></td>
                                        <td><?= $row['ch3']?></td>
                                        <td><?= $row['ch4'];?></td>
                                        <td><?= $row['correct_ans'];?></td>
                                        <td><?= $row['date'];?></td>
                                        <td>
                                            <a href="#" onClick="Delete(<?= $row['q_id'];?>);" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o "></i></a>
                                            <a href="<?= site_url('c_qanswers/edit_quest_ans/'.$row['q_id']);?>" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                <?php $i++; }}  else {?> 
                                    <tr>
                                        <td colspan="10"> No Matching Records Found .</td>
                                    </tr>
                                <?php } } else { ?>
                                    <tr>
                                        <td colspan="10"> No Records Found .</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
		</section>
    </section>
    <script type="text/javascript">
        function Delete(p_id){
            if(confirm("This Record will be Permanently Removed !! Are You Sure ??")) {
                var value = {p_id: p_id}; 
                $.ajax({
                    type: "post", 
                    url: "<?php echo site_url('c_qanswers/delete'); ?>", 
                    data: value, 
                    
                    cache: false,
                    success: function(result) {
                        $('#'+p_id).remove();
                    }
                });
            }
        };
    </script>
    <?php include('footer.php'); ?>
</body>
</html>
