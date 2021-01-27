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
                    <table id="tableData" class="table table-striped table-bordered search-table" cellspacing="0" width="100%">
                    
                        <div style="float:left;margin-left: 13px;"><a href="<?= site_url('c_courses/add_course');?>"><i class="btn btn-success">Add Course&nbsp;&nbsp;<i class="fa fa-plus"></i></i></div>
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
        
                    <tbody id="">
                     <?php  $i =1; if(isset($record_course)) {  foreach($record_course->result() as $row) {?>
                        <tr id="<?php echo $row->c_id;?>">
                        <td><?php echo $i;?></td>
                        <td><?php echo $row->c_name;?></td>
                        <td><?php echo $row->c_date;?></td>
                    <td>
                    
                    <a href="#" onClick="Delete(<?php echo $row->c_id;?>);" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o "></i></a> &nbsp;&nbsp;
                    <a href="<?= site_url('c_courses/edit_course/'.$row->c_id);?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    </td>
             
            
                </tr>
                     <?php $i++; }}?>
                    </tbody>
                </table>
                      </div>
                  </div>
              </div>
          
          	
		</section>
      </section>

      <script type="text/javascript">
    
      function Delete(p_id){
       if(confirm("This Record will be Permanently Removed !! Are You Sure ??"))
           {
          var value = {p_id: p_id}; 
      $.ajax({
             type: "post",
             url: "<?php echo site_url('c_courses/delete'); ?>", 
             data: value, 
            
             cache: false,
             success: function(result) {
              
              $('#'+p_id).remove();
            }
        }
             )};
             };
                
</script>
      
      <?php include('footer.php'); ?>
   
</body>
</html>
