<section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<a href="<?php echo base_url().'admin/getUsers/' ?>"><div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h4>Users Details</h4>
                  			</div>
					  			
                  		</div></a>

                  		<a href="<?php echo base_url().'admin/product/' ?>"><div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
								<h4>Order Management</h4>
                  			</div>
					  			
                  		</div> </a>

                         <div class="col-md-2 col-sm-2 box0" style="margin-left: 50px";>
                        <div class="box1">
                  <span class="li_cloud"></span>
                   <h4>Completed</h4> <h5><?php echo $counter['completed']; ?></h5>
                        </div>
                  
                      </div>

                      <div class="col-md-2 col-sm-2 box0" style="margin-left: 30px";>
                        <div class="box1">
                  <span class="li_cloud"></span>
                   <h4>Pending</h4> <h5><?php echo $counter['pending']; ?></h5>
                        </div>
                  
                      </div> 
                      <div class="col-md-2 col-sm-2 box0" style="margin-left: 50px";>
                        <div class="box1">
                  <span class="li_cloud"></span>
                   <h4>Cancelled</h4> <h5><?php echo $counter['cancelled']; ?></h5>
                        </div>
                  
                      </div>

                   <div class="col-md-2 col-sm-2 box0" style="margin-left: 50px";>
                        <div class="box1">
                  <span class="li_cloud"></span>
                   <h4>Payment Done</h4> <h5><?php echo $counter['payment_done']; ?></h5>
                        </div>
                  
                      </div>
                  		

                        </div>
                        </div>
                        </div>
                        </section>
                        </section>