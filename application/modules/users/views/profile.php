
<script>  
  $(document).ready(function() {
    $('#example').DataTable();

});

</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.0.0/js/dataTables.fixedHeader.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">

 <section class="section-default bg_custom-2">
          <div class="wrap-title-page">
          <div class="container">
            <div class="row">
              <div class="col-xs-12"><h1 class="ui-title-page">Profile</h1></div>
            </div>
          </div><!-- end container-->
        </div><!-- end wrap-title-page -->
          <div class="container" style="margin-top: 40px;">
            <div class="row">
           
            <div class="col-md-3 custom_bg_color">
            
      <!-- tabs left -->
      
      <div class="tabbable tabs-left profile_sidebar">
        <ul class="nav nav-tabs edu-side-box">
          <li class="active"><a href="#a" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;Profile</a></li>
          <li ><a href="#b" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;Setting</a></li>
          <li ><a href="#c" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;Password Update</a></li>
          <li><a href="#d" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-history"></i>&nbsp;&nbsp;&nbsp;&nbsp;Order Management</a></li>
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
             <div class="col-md-6 edu-half">
              <input class="form-control" type="text" readonly placeholder="Phone"  value="<?php echo $profile[0]['eduworkers_users_phone']; ?>"required="">
               

             </div>
           </div>
         </div>
         <div class="tab-pane col-md-12" id="b">


                <form action="<?php echo base_url().'users/profile' ?>" method="post">
                <input class="form-control" type="text"  name="fname" placeholder="Usser Name" value="<?php echo $profile[0]['eduworkers_users_userfname']; ?>" required="">
              
      
               <input class="form-control" type="text"  name="phone" placeholder="Phone"  value="<?php echo $profile[0]['eduworkers_users_phone']; ?>"required="">
               <input class="btn btn-info" type="submit" value="update">
               </form>

       </div>
       <div class="tab-pane col-md-12" id="c">


                <form action="<?php echo base_url().'users/passwordUpdate' ?>" method="post">
                <input class="form-control" type="text"  name="old_pass" placeholder="Old Password" required="" >
              
                <input class="form-control" type="text"  name="new_pass" placeholder="New Password" id="pass" required="">
              
               <input class="form-control" type="text"  name="c_pass" placeholder="Conform Password" id="passcof" onchange="myFunction()" required="">
               <input class="btn btn-info" type="submit" value="update">
               </form>

       </div>
         <div class="tab-pane col-md-12" id="d">
          <div class="table-responsive">
        <table class="table" id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="edu_custom_thead">Product Id</th>
                <th class="edu_custom_thead">Service Name </th>
                <th class="edu_custom_thead">Total Price</th>
                <th class="edu_custom_thead">Status</th>
                <th class="edu_custom_thead">Action</th>
                
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($products as $row) {
         ?> 
            <tr>
                <td><?php echo $row['eduworkers_products_id'];  ?></td>
                <td><?php echo $row['eduworkers_products_services'];  ?></td>
                <td><?php echo $row['eduworkers_products_total'];  ?></td>
                <td><?php echo $row['eduworkers_products_status'];  ?></td>
                <td><a href="<?php echo base_url().'users/cancelled/'.$row['eduworkers_products_id']; ?>">Cancel</a></td>
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


        <script>
function myFunction() {

    var pass = document.getElementById('pass').value;
     var cpass = document.getElementById('passcof').value;
     /*alert(cpass);
     alert(pass);*/
     if(pass==cpass){

return true;

     }
     else{
       alert('password not match ');
       document.getElementById("passcof").focus();
     }

   // x.value = xx.value.toUpperCase();
}
</script>