<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
  <title>Eduworkers, - Essay and Dissertation Writing Service</title>
  <link href="<?php echo  asset_url();?>img/favicon.png" type="image/x-icon" rel="shortcut icon">
  <link href="<?php echo  asset_url();?>css/master.css" rel="stylesheet">
  
  <script src="<?php echo  asset_url();?>/plugins/jquery/jquery-1.11.3.min.js"></script>
   
</head>

<body>

  <!-- Loader -->
  <div id="page-preloader"><span class="spinner"></span></div>
  <!-- Loader end -->

  <div class="layout-theme animated-css" data-header="sticky" data-header-top="200">



    <div id="wrapper">

     

      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <a class="header-logo" href="<?php echo  base_url();?>"><img class="header-logo__img" src="<?php echo  asset_url();?>/img/final_logo.png" alt="Logo"></a>
            <a href="<?php echo  base_url();?>"><img class="img-crop text-center" src="<?php echo  asset_url();?>/img/final-logo-edit.png" alt=""></a>
            <div class="header-inner">
              <div class="header-search">
                <div class="navbar-search">
                  <form id="search-global-form">
                    <div class="input-group">
                      <input type="text" placeholder="Type your search..." class="form-control" autocomplete="off" name="s" id="search" value="">
                      <span class="input-group-btn">
                      <button type="reset" class="btn search-close" id="search-close"><i class="fa fa-times"></i></button>
                      </span> </div>
                  </form>
                </div>
              </div>
              <a id="search-open" href="#fakelink"><i class="icon stroke icon-Search"></i></a>
              <!--  <a class="header-cart" href="/"> <i class="icon stroke icon-ShoppingCart"></i></a> -->
              <nav class="navbar yamm">
                <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                  <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="<?php echo  base_url();?>">Home &nbsp;</a>

                    </li>
                    <li class="dropdown"> <a href="<?php echo base_url().'users/services'; ?>">Services&nbsp;<i class="fa fa-angle-down"></i></a>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Engineering Assignments</a>

                        </li>
                        <li><a href="#">Engineering Projects</a></li>
                        <li><a href="#">Essay Writing</a></li>
                        <li><a href="#">Dissertation Writing</a></li>
                        <li><a href="#">Exam Revision</a></li>
                        <li><a href="#">Marking and Proofreading service</a></li>
                        <li><a href="#">Dissertation proposal</a></li>
                        <li><a href="#">Literature review</a></li>
                        <li><a href="#">Coursework</a></li>
                        <li><a href="#">Assignment</a></li>
                        <li><a href="#">Dissertation topic with titles</a></li>
                        <li><a href="#">Legal Practice Course (LPC) Coursework</a></li>
                        <li><a href="#">Bar Professional Training Course (BPTC) Coursework</a></li>
                        <li><a href="#">presentation Powerpoint </a></li>
                        <li><a href="#">Report</a></li>
                        <li><a href="#">Reflective Practice</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">PhD Thesis</a></li>
                      </ul>
                    </li>
                    <li class="active-custom"> <a href="<?php echo base_url().'users/order'; ?>">Order Now</a>

                    </li>
                    <!-- <li class="dropdown"> <a href="javascript:void(0);">Guarantees</a>
                     
                    </li> -->
                    <li><a href="#">WRITERS&nbsp;<i class="fa fa-angle-down"></i></a>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="#">How we recruit</a> </li>
                        <li><a href="#">Career as a writer</a> </li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="javascript:void(0);">faq<!-- <span class="nav-subtitle">Latest News</span> --></a>

                    </li>

                    <li><a href="#">Contact&nbsp;<i class="fa fa-angle-down"></i><!-- <span class="nav-subtitle">say us hi</span> --></a>
                      <ul role="menu" class="dropdown-menu">
                        <!-- <li><a href="#">Check for the </a> </li> -->
                        <li><a href="#">info@eduworkers.co.uk</a> </li>
                      </ul>
                    </li> 
                     <?php if($this->session->userdata('user_data')!=''){  ?>
                    <li><a href="#" class="edu_active">Hi <?php echo $this->session->userdata['user_data']['user_fname']; ?>&nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php echo base_url().'users/profile'; ?>">Setting</a> </li>
                        <li><a href="<?php echo base_url().'users/logout' ;?>">Logout</a> </li>
                      </ul>
                    </li>
 
                  

                     
                    
                    
                          <?php } else{ ?>
                  <li> <a href="<?php echo base_url().'users/login'; ?>">My Account</a></li>
                               <?php } ?>
                    

                  
                  </ul>
                </div>
              </nav>
              <!--end navbar -->

            </div>
            <!-- end header-inner -->
          </div>
          <!-- end col  -->
        </div>
        <!-- end row  -->
      </div>
      <!-- end container-->
      </header>
      <!-- end header -->

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
      
    }else if (getInformUser()){ 
      ?>
       <div class="notification" id="notification" >
                <h3>Welcome User</h3>
            <p>   <?php  echo getInformUser(); ?> </p>
              </div>
       

        <?php
    }
    ?>
