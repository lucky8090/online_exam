
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/zabuto_calendar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/gritter/css/jquery.gritter.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>lineicons/style.css">    
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/DataTables/datatables.min.css'); ?>"/>
<script src="<?php echo base_url();?>js/chart-master/Chart.js"></script>
<script src="<?php echo base_url();?>js/jquery.js"></script>

<style type="text/css">
    .report thead tr th, .report tbody tr td {
        border: none;
    }
    .paging-nav {
        text-align: right;
        padding-top: 2px;
    }

    .paging-nav a {
        margin: auto 1px;
        text-decoration: none;
        display: inline-block;
        padding: 1px 7px;
        background: #91b9e6;
        color: white;
        border-radius: 3px;
    }

    .paging-nav .selected-page {
        background: #187ed5;
        font-weight: bold;
    }
    .horizontal {
        border-top: 1px solid #e1e8e2;
    }
</style>
    </head>
    <body>

    <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="<?php echo base_url();?>" class="logo"><b>Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
                <ul class="nav top-menu">
                 
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?= site_url('c_logout/index')?>">Logout</a></li>
            	</ul>
            </div>
        </header>
     