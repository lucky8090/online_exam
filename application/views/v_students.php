<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Students | Online Test App</title>
    <?php include('header.php'); ?>
    <?php include('left_sidebar.php'); ?>
    <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Students</h3>
                <div id="flash_msg">
                    <?= $this->session->flashdata('msg') ?>
                </div>
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel" style="padding-bottom: 43px;">
                            <div class="col-md-12">
                                <h4><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</h4><hr class="horizontal"/>
                            </div>
                            <form action="<?php echo site_url('c_students/sel_course');?>" method="post">
                                <div class="form-group">
                                    <label class="col-sm-2">Select Course</label>
                                    <div class="col-sm-5">
                                        <select id="course" name="course" class="form-control">
                                            <option value="" hidden="hidden">SELECT COURSE</option>
                                            <?php if(isset($record_courses)) {  foreach($record_courses as $row) {
                                                ?>
                                                <option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
                                            <?php  }}?>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div><br/>   
                                <div class="form-group">
                                    <div class="col-sm-5">
                                    <button type="submit" class="btn btn-warning btn-sm" name="submit" value="Submit">Search&nbsp;&nbsp;<i class="fa fa-search"></i></button>
                                    </div>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
          	  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <div class="clearfix">
                    </div>
                          
                    <table id="tableData" class="table table-striped table-bordered search-table" cellspacing="0" width="100%">
                        <div style="float:left;"><a href="<?php echo site_url('c_students/add_student');?>"><i class="btn btn-success">Add Student&nbsp;&nbsp;<i class="fa fa-plus"></i></i></div>    
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>STUDENT</th>
                                <th>PASSWORD</th>
                                <th>EMAIL</th>
                                <th>MOBILE</th>
                                <th>ADDRESS</th>
                                <th>COURSE</th>
                                <th>PLAN</th>
                                <th>FATHER NAME</th>
                                <th>DATE OF BIRTH</th>
                                <th>REGISTRATION</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            <tr>
                                <?php  $i =1; if(isset($record)) { if(!empty($record)) { foreach($record as $row) {?>
                                    <tr id="<?= $row['std_id'];?>">
                                        <td><?= $i;?></td>
                                        <td><?= $row['std_name'];?></td>
                                        <td><?= $row['std_pass'];?></td>
                                        <td><?= $row['std_email'];?></td>
                                        <td><?= $row['std_mob'];?></td>
                                        <td><?= $row['std_home'];?></td>
                                        <td><?= $row['course'];?></td>
                                        <td><?= $row['plan'];?></td>
                                        <td><?= $row['father_name'];?></td>
                                        <td><?= $row['dob'];?></td>
                                        <td><?= $row['reg_date'];?></td>
                                        <td>
                                            
                                            <a href="#" onClick="Delete(<?php echo $row['std_id'];?>);" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o "></i></a>
                                            <a href="<?= site_url('c_students/edit_student/'.$row['std_id']);?>" class="btn btn-primary btn-xs"  ><i class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                <?php $i++; }}  else {?>
                                    <tr>
                                        <td colspan="9"> No Records Found .</td>
                                    </tr>
                                <?php } }?>
                    
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
                    url: "<?php echo site_url('c_students/delete'); ?>", 
                    data: value, 
                    cache: false,
                    success: function(result) {
                        $('#'+p_id).remove();
                    }
                });
            }
        }       
    </script>
    <?php include('footer.php'); ?>
</body>
</html>
