<section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<a href="<?php echo base_url().'admin/getUsers/' ?>"><div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>Users Details</h3>
                  			</div>
					  			
                  		</div></a>

                  		<a href="<?php echo base_url().'admin/product/' ?>"><div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
								<h3>Order Management</h3>
                  			</div>
					  			
                  		</div> </a>

                         <div class="col-md-2 col-sm-2 box0" style="margin-left: 50px";>
                        <div class="box1">
                  <span class="li_cloud"></span>
                   <h3>Completed</h3> <h4><?php echo $counter['completed']; ?></h>
                        </div>
                  
                      </div>

                      <div class="col-md-2 col-sm-2 box0" style="margin-left: 30px";>
                        <div class="box1">
                  <span class="li_cloud"></span>
                   <h3>Pending</h3> <h4><?php echo $counter['pending']; ?></h>
                        </div>
                  
                      </div>
                      <div class="col-md-2 col-sm-2 box0" style="margin-left: 50px";>
                        <div class="box1">
                  <span class="li_cloud"></span>
                   <h3>Cancelled</h3> <h4><?php echo $counter['cancelled']; ?></h>
                        </div>
                  
                      </div>

                  
                  		

                        </div>
                        </div>
                        </div>
                        </section>
                        </section>