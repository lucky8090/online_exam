
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alerts | Online Test App</title>

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
                      <a href="<?php echo base_url();?>c_adminhome">
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
                      <a href="<?php echo base_url();?>c_resources" >
                          <i class="fa fa-database"></i>
                          <span>Resources</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active"  href="<?php echo base_url();?>c_alerts" >
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
          	<h3><i class="fa fa-angle-right"></i> Alerts</h3>
          	  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <form action="<?php echo site_url('c_alerts/add_alert');?>" method="post">
                          <label style="margin-left:10%;">Select Course</label>
  <br>
                         <select name="recipient" id="course" style="margin-left: 10%;">
                            <option value="All Courses">SELECT ALL</option>
                            
                           
                                <?php  $i =1; if(isset($record_course)) {  foreach($record_course->result() as $row) {?>
                            <option value="<?php echo $row->c_name;?>"><?php echo $row->c_name;?></option>
                            <?php $i++; }}?>
                       </select>
  
                     <div class="clearfix">
                    </div>                          
                <br>          
       
                        <div class="form-group">
                            
                          
                                              <label class="col-sm-8 col-sm-8 control-label">Add Alert</label>
                                              <div class="col-sm-10">
                        <textarea name="alert" class="form-control" cols="25" rows="5" style="width: 80%;height: 10%;" placeholder="ENTER YOUR MESSAGE !!!" reqiured></textarea>
                                              </div>
                        </div>
                            <br>
                            <div class="clearfix"></div>
<!--                        <div class="form-group">
                                              <label class="col-sm-2 col-sm-2 control-label">Recipient Address</label>
                                              <div class="col-sm-5">
                                              <input type="email" class="form-control" name="recipient" placeholder="ENTER EMAIL ADDRESS" required/>
                                              </div>
                        </div>-->
                            <br>
                            <div class="clearfix"></div>
                        
                            <br>
                            <div class="clearfix"></div>
                            <input type="submit" class="btn btn-success" name="submit" value="Submit"/>
                            
                        </form>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
<script type="text/javascript">
$(document).ready(function(){ 
           
$('#course').change(function(){ 
           var course=$('#course').val();
           alert(course);
           var request={course : course};
            $.ajax({
            type:"post",
            url:"<?php echo site_url('subject/sel_course'); ?>",
            data:request,
            success:function(){    
              //  console.log();
               alert('values has been passed to controller');
               //     $('#add').html(result);
                              
                           }
                    });
 });
 });

             </script>
      <!--main content end-->
<?php include_once 'footer.php';?>
   
</body>
</html>
