<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>EduWorkers Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset_url(); ?>admin/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo asset_url(); ?>admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
      
      <!-- Mialbox css -->
      <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/css/mailbox.css"/>
        
    <!-- Custom styles for this template -->
    <link href="<?php echo asset_url(); ?>admin/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo asset_url(); ?>admin/assets/css/style-responsive.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo asset_url(); ?>admin/assets/js/jquery-1.11.3.min.js"></script>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>" class="logo"><b>EduWorkers </b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                   
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url().'users/logout' ;?>">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="<?php echo base_url(); ?>"><img src="<?php echo  asset_url();?>/img/final_logo.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Admin</h5>
              	  	
                  <li class="mt">
                      <a  <?php  if($active==0){ ?> class="active"<?php }?> href="<?php echo base_url(); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                 
                  
                  <li class="sub-menu">
                      <a <?php  if($active==1){ ?> class="active"<?php }?> href="<?php echo  base_url().'admin/product';?>" >
                          <i class="fa fa-tasks"></i>
                          <span> Order Management</span>
                      </a>
                    
                  </li>

                  <li class="sub-menu">
                      <a <?php  if($active==4){ ?> class="active"<?php }?> href="<?php echo  base_url().'admin/getUsers';?>" >
                          <i class="fa fa-tasks"></i>
                          <span> Users Details</span>
                      </a>
                    
                  </li>

                  <li  class="sub-menu">
                      <a <?php  if($active==3 or $active==2 ){ ?> class="active"<?php }?>  href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span  >Setting</span>
                      </a>
                      <ul class="sub">
                          <li  <?php  if($active==2){ ?> class="active"<?php }?>><a   href="<?php echo  base_url().'email_settings'; ?>">Smtp Setting</a></li>
                          <li <?php  if($active==3){ ?> class="active"<?php }?> ><a    href="<?php echo  base_url().'admin/password'; ?>">Update Password</a></li>
                        <!--  <li <?php  if($active==4){ ?> class="active"<?php }?> ><a    href="<?php echo  base_url().''; ?>"></a></li> -->
                      </ul>
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->




      <script type="text/javascript">
          setTimeout(function() {
              $('#notification1').fadeOut('fast');
          }, 5000);

      </script>

      <script type="text/javascript">
          setTimeout(function() {
              $('#notification').fadeOut('fast');
          }, 5000);
      </script>

      <?php



      $logout=$this->input->get('logout');
      if($logout){
          ?>
          <div class="notification" id="notification1">

              <h3> You are successfully logged out.</h3>
          </div>


          <?php

      }else if(getInformUser()){
          ?>
          <div class="notification" id="notification" >
              <h3>Welcome Admin</h3>
              <p>   <?php  echo getInformUser(); ?> </p>
          </div>


          <?php
      }
      ?>

