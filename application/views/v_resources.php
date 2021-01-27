<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Resources | Online Test App</title>

  <?php include_once 'header.php';?>    
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
     <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="<?php echo base_url();?>img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Administrator</h5>
              	  	
                  <li class="mt">
                      <a  href="<?php echo base_url();?>c_adminhome">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>c_plans" >
                          <i class="fa fa-tasks"></i>
                          <span>Plans</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>c_courses" >
                          <i class="fa fa-book"></i>
                          <span>Courses</span>
                      </a>
                  </li>
                                    <li class="sub-menu">
                      <a href="<?php echo base_url();?>c_subjects" >
                          <i class="fa fa-heart"></i>
                          <span>Subjects</span>
                      </a>
                  </li>
                                    <li class="sub-menu">
                      <a href="<?php echo base_url();?>c_students" >
                          <i class="fa fa-user"></i>
                          <span>Students</span>
                      </a>
                  </li>
                                    <li class="sub-menu">
                      <a href="<?php echo base_url();?>c_testpapers" >
                          <i class="fa fa-th"></i>
                          <span>Test Papers</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>c_qanswers" >
                          <i class="fa fa-desktop"></i>
                          <span>Question-Answers</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="<?php echo base_url();?>c_resources" >
                          <i class="fa fa-database"></i>
                          <span>Resources</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>c_alerts" >
                          <i class="fa fa-bars"></i>
                          <span>Alerts</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Reports</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>c_reports">Student Based</a></li>
                          <li><a  href="<?php echo base_url();?>c_reports">">Class Based</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-cogs"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>c_settings">">Edit Profile</a></li>
                          <li><a  href="<?php echo base_url();?>c_settings">">Extras</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>c_logout" >
                          <i class="fa fa-angle-up"></i>
                          <span>Logout</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Resources</h3>
          	  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                    <table id="tableData" class="table table-striped table-bordered search-table" cellspacing="0" width="100%">
        <div style="float:left;"><a href="<?php echo site_url('c_resources/add_resource');?>"><i class="btn btn-success">Add Resources</i></div>
                        <thead>
            <tr>
               <th>S.no</th>
                <th>Resource</th>
                <th>Course</th>
                <th>Subject</th>
                <th>Description</th>
                <th>Filename</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody id="">
                     <?php  $i =1; if(isset($record_resource)) {  foreach($record_resource->result() as $row) {?>
              
                        <tr id="<?php echo $row->res_id;?>">
                        <td><?php echo $i;?></td>
                        <td><?php echo $row->res_name;?></td>
                        <td><?php echo $row->res_desc;?></td>
                        <td><?php echo $row->res_filename;?></td>
                        <td><?php echo $row->res_date;?></td>
                    <td>
                        
                    <button class="btn btn-success btn-xs" title="Active"><i class="fa fa-check"></i></button>
                    
                    <button onClick="Delete(<?php echo $row->res_id;?>);" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o "></i></button>
                    <form action="<?php echo site_url('c_resources/edit_resource/'.$row->res_id);?>" method="post">
                    <button  class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    </form>
                    </td>
             
            
            </tr>
                     <?php $i++; }}?>
        </tbody>
        </tbody>
    </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
  <script type="text/javascript">
    
      function Delete(p_id){
//    var p_id = $('#del').val();
   // alert(p_id);
       if(confirm("This Record will be Permanently Removed !! Are You Sure ??"))
           {
          var value = {p_id: p_id}; //passing value to using ajax url
      $.ajax({
             type: "post", // data passing type
             url: "<?php echo site_url('c_resources/delete'); ?>", // this will be the url of the jsp page where the values will be submitted
             data: value, //values
            
             cache: false,
             success: function(result) {
              
              $('#'+p_id).remove();
            }
        }
             )};
             };
                
</script>
      <!--main content end-->
<?php include_once 'footer.php';?>
   
</body>
</html>
