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
                  <div>       
                        <form action="<?php echo site_url('c_resources/update_resource');?>" method="post">
                            <?php  $i =1; if(isset($record_resource)) {  foreach($record_resource->result() as $row) {?>
              
                        <div class="form-group">
                             <input type="hidden" value="<?php echo $row->res_id;?>" name="id"/>
                          
                                              <label class="col-sm-2 col-sm-2 control-label">ADD TITLE</label>
                                              <div class="col-sm-5">
                                              <input type="text" value="<?php echo $row->res_name;?>" class="form-control" name="name" placeholder="ENTER TITLE" />
                                              </div>
                        </div>
                            <br>
                            <div class="clearfix"></div>
                        <div class="form-group">
                                              <label class="col-sm-2 col-sm-2 control-label">ADD DESCRIPTION</label>
                                              <div class="col-sm-5">
                                              <input type="text" value="<?php echo $row->res_desc;?>" class="form-control" name="desc" placeholder="ENTER DESCRIPTION" />
                                              </div>
                        </div>
                            <br>
                            <div class="clearfix"></div>
<!--                        <div class="form-group">
                                              <label class="col-sm-2 col-sm-2 control-label">ADD FILENAME</label>
                                               
                                              <div class="col-sm-5">
                                                  <input type="text" value="<?php //echo $row->res_filename;?>" class="form-control" name="file" placeholder="ENTER FILENAME" />
                                              </div>
                        </div>-->
                            <?php $i++; }}?>
                            <br>
                            <div class="clearfix"></div>
                            <input type="submit" class="btn btn-success" name="submit" value="Submit"/>
                            
                        </form>
                        </div> 
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

          
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once 'footer.php';?>
   
</body>
</html>
