
<section id="main-content">
          <section class="wrapper">





 <div class="row mt">
                <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Password Setting </h4>
                      <form class="form-horizontal style-form" method="post" action="<?php echo base_url().'admin/password'; ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Old Password</label>
                              <div class="col-sm-10">
                                 <input type="password"   class="form-control" name="old_pass"  placeholder="Old Password" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">New Password </label>
                              <div class="col-sm-10">
                                  <input type="password" name="new_pass" class="form-control"  placeholder="New Password" id="pass" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Conform Password </label>
                              <div class="col-sm-10">
                                 <input type="password" name="c_pass" class="form-control" placeholder=" Conform  Password" id="passcof" onchange="myFunction()" required >
                              </div>
                          </div>
                          
                          <input type="submit" class="btn btn-default" value="Update" />
                      </form>
                  </div>
                </div><!-- col-lg-12-->         
            </div>     <!-- /row -->

</section>
</section>


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