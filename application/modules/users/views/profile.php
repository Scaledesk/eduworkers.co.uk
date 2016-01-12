
 <section class="section-default bg_custom-2">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
              <h1 class="text-center edu-profile-heading">Profile</h1>
             

              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
           
            <div class="col-md-3 custom_bg_color">
            
      <!-- tabs left -->
      
      <div class="tabbable tabs-left ">
        <ul class="nav nav-tabs edu-side-box">
          <li><a href="#a" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;Profile</a></li>
          <li class="active"><a href="#b" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;Setting</a></li>
          <li><a href="#c" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-history"></i>&nbsp;&nbsp;&nbsp;&nbsp;History</a></li>
        </ul>
        </div>
      </div>
        <div class="tab-content col-md-9 edu-custom">
         <div class="tab-pane col-md-12 active" id="a">
           <div class="row">
             <div class="col-md-6 edu-half">
               <input class="form-control" type="text" readonly  placeholder="Usser Name" value="<?php echo $profile[0]['eduworkers_users_userfname']; ?>" required="">
              
               <input class="form-control" type="text" readonly placeholder="Email"  value="<?php echo $profile[0]['eduworkers_users_username']; ?>"required="">
               
             
               
             </div>
           </div>
         </div>
         <div class="tab-pane col-md-12" id="b">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
         Aliquam in felis sit amet augue.</div>
         <div class="tab-pane col-md-12" id="c">
          <div class="table-responsive">
        <table class="table" id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Service Name </th>
                <th>Total Price</th>
                <th>Action</th>
                
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($products as $row) {
         ?> 
            <tr>
                <td><?php echo $row['eduworkers_products_id'];  ?></td>
                <td><?php echo $row['eduworkers_products_services'];  ?></td>
                <td><?php echo $row['eduworkers_products_total'];  ?></td>
                <td><a href="">Cancel</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
              </div>
        </div>
      </div>
      <!-- /tabs -->
      
    </div>
    
              </div> <!--end of col-md-4-->
              <!-- <div class="col-md-8">
                
              </div> -->
            </div> <!--end of row-->
          </div> <!--end container-->
        </section> <!--section end-->