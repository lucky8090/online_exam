<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Plans | Online Test App</title>

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
                      <a class="active" href="<?php echo base_url();?>c_plans" >
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
          	<h3><i class="fa fa-angle-right"></i>Add Plan</h3>
          	
              	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		          		<div class="col-lg-12">
                  <div >
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Add New Plan</h4>
					
                           <div class="col-sm-6 form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Plan Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="p_name" value="#" required>
                              </div>
                          </div>
                                                  <div class="col-sm-6 form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Plan Price</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="p_price" value="#" required>
                              </div>
                          </div> 
						<div class="col-sm-6 form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label">Plan Duration</label>
                                                    
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="p_duration" value="#" required>
                              </div>
                          </div> 						  
                   
                          <div class="form-group">
					  <div class="col-sm-10">
						<input type="submit" class="btn btn-success" name="add_plan" value="Add"/>
						</div>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
  	
          	</div><!-- /row -->
          	
          	
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once 'footer.php';?>
  </body>
</html>
