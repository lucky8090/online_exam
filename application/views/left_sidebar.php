<aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="<?= base_url()?>assets/images/augurs_logo.png" ></a></p>
              	  	
                    <li class="mt">
                        <a  href="<?= site_url('c_adminhome/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_adminhome/index' ){ echo 'active';} else { echo '';} ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- <li class="sub-menu">
                        <a href="<?= site_url('c_plans/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_plans/index' || $this->uri->uri_string() == 'c_plans/add_plan' ){ echo 'active';} else { echo '';} ?>" >
                            <i class="fa fa-tasks"></i>
                            <span>Plans</span>
                        </a>
                    </li> -->
                    <!-- <li class="sub-menu">
                        <a href="<?= site_url('c_courses/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_courses/index' || $this->uri->uri_string() == 'c_courses/add_course' ){ echo 'active';} else { echo '';} ?>" >
                            <i class="fa fa-book"></i>
                            <span>Courses</span>
                        </a>
                    </li> -->
                    <li class="sub-menu">
                      <a href="<?= site_url('c_students/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_students/index' ){ echo 'active';} else { echo '';} ?>" >
                          <i class="fa fa-user"></i>
                          <span>Students</span>
                      </a>
                  </li>
                    <li class="sub-menu">
                      <a href="<?= site_url('c_subjects/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_subjects/index' || $this->uri->uri_string() == 'c_subjects/add_subject' || $this->uri->uri_string() == 'c_subjects/sel_course' ){ echo 'active';} else { echo '';} ?>" >
                          <i class="fa fa-heart"></i>
                          <span>Subjects</span>
                      </a>
                    </li>
                    <!-- <li class="sub-menu">
                      <a href="<?= site_url('c_testpapers/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_testpapers/index' ){ echo 'active';} else { echo '';} ?>" >
                          <i class="fa fa-th"></i>
                          <span>Test Papers</span>
                      </a>
                  </li> -->
                  <li class="sub-menu">
                      <a href="<?= site_url('c_qanswers/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_qanswers/index' ){ echo 'active';} else { echo '';} ?>" >
                          <i class="fa fa-desktop"></i>
                          <span>Question-Answers</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?= site_url('c_questionset/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_questionset/index' ){ echo 'active';} else { echo '';} ?>" >
                          <i class="fa fa-desktop"></i>
                          <span>Set Questions</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?= site_url('c_student_report/index');?>" class="<?php if ( $this->uri->uri_string() == 'c_student_report/index' ){ echo 'active';} else { echo '';} ?>" >
                          <i class="fa fa-file"></i>
                          <span>Report List</span>
                      </a>
                  </li>
                  <!-- <li class="sub-menu">
                      <a href="<?= site_url('c_resources/index');?>" >
                          <i class="fa fa-database"></i>
                          <span>Resources</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?= site_url('c_alerts/index');?>" >
                          <i class="fa fa-bars"></i>
                          <span>Alerts</span>
                      </a>
                  </li> -->
                  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Reports</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= site_url('c_reports/index');?>">Student Based</a></li>
                          <li><a  href="<?= site_url('c_reports/index');?>">">Class Based</a></li>
                      </ul>
                  </li> -->
                  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-cogs"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= site_url('c_settings/index');?>">">Edit Profile</a></li>
                          <li><a  href="<?= site_url('c_settings/index');?>">">Extras</a></li>
                      </ul>
                  </li> -->
                  <li class="sub-menu">
                      <a href="<?= site_url('c_logout/index');?>" >
                          <i class="fa fa-angle-up"></i>
                          <span>Logout</span>
                      </a>
                  </li>

              </ul>
          </div>
      </aside>