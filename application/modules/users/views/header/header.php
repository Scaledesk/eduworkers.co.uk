<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
  <title>Eduworkers, - Essay and Dissertation Writing Service</title>
  <link href="favicon.png" type="image/x-icon" rel="shortcut icon">
  <link href="<?php echo  asset_url();?>css/master.css" rel="stylesheet">
  <!-- SWITCHER -->
  <link href="<?php echo  asset_url();?>plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all">
  <link href="<?php echo  asset_url();?>plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all">
  <link href="<?php echo  asset_url();?>pluginsswitcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all">
  <link href="<?php echo  asset_url();?>plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all">
  <link href="<?php echo  asset_url();?>plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all">
  <link href="<?php echo  asset_url();?>plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5" media="all">
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
                    <li class="dropdown"><a href="index.html">Home &nbsp;</a>

                    </li>
                    <li class="dropdown"> <a href="#">Services&nbsp;<i class="fa fa-angle-down"></i></a>
                      <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Engineering Assignments</a>

                        </li>
                        <li><a href="#">Engineering Projects</a></li>
                        <li><a href="#">Essay Writing</a></li>
                        <li><a href="#">Dissertation Writing</a></li>
                      </ul>
                    </li>
                    <li class="active-custom"> <a href="order_now.html">Order Now</a>

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
                        <li><a href="#">Setting</a> </li>
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
