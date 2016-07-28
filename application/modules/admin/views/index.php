<section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<a href="<?php echo base_url().'admin/getUsers/' ?>"><div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1 box2">
					  			<span class="li_heart"></span>
					  			<h4>Users Details</h4>
                  			</div>
					  			
                  		</div></a>

                  		<a href="<?php echo base_url().'admin/product/' ?>"><div class="col-md-2 col-sm-2 box0">
                  			<div class="box1 box2">
					  			<span class="li_cloud"></span>
								<h4 >Order Management</h4>
                  			</div>
					  			
                  		</div> </a>    </div>


                      <div class="row">

                         <div class="col-md-12 col-sm-12 box0 " style="margin-left: 50px";>

                        <div class="box1 box2">
                  <span class="li_cloud"></span>
                  <div >
                  <div class="col-md-6">
                   <h4 class="pull-left">Completed</h4></div> </div>

               <div class="row">
                  <div class="col-md-6 pull-right">
                   <h5><?php echo $counter['completed']; ?></h5>
                 </div></div>
                        </div>
                  
                      </div></div><br>

             

                      <div class="row">

                         <div class="col-md-12 col-sm-12 box0 " style="margin-left: 50px";>

                        <div class="box1 box2">
                  <span class="li_cloud"></span>
                  <div >
                  <div class="col-md-6">
                    <h4 class="pull-left">Pending</h4></div> </div>

               <div class="row">
                  <div class="col-md-6 pull-right">
                    <h5><?php echo $counter['pending']; ?></h5>
                 </div></div>
                        </div>
                  
                      </div></div><br>



                      <div class="row">

                         <div class="col-md-12 col-sm-12 box0 " style="margin-left: 50px";>

                        <div class="box1 box2">
                  <span class="li_cloud"></span>
                  <div >
                  <div class="col-md-6">
                   <h4 class="pull-left">Cancelled</h4></div> </div>

               <div class="row">
                  <div class="col-md-6 pull-right">
                        <h5><?php echo $counter['cancelled']; ?></h5>
                 </div></div>
                        </div>
                  
                      </div></div><br>



                      <div class="row">

                         <div class="col-md-12 col-sm-12 box0 " style="margin-left: 50px";>

                        <div class="box1 box2">
                  <span class="li_cloud"></span>
                  <div >
                  <div class="col-md-6">
                    <h4 class="pull-left">Payment Done</h4></div> </div>

               <div class="row">
                  <div class="col-md-6 pull-right">
                        <h5><?php echo $counter['payment_done']; ?></h5>
                 </div></div>
                        </div>
                  
                      </div></div><br>



                   


                        </div>
                        </div>
                    
                        </section>
                        </section>