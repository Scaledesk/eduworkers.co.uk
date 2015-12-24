
   
   <?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>   
      <section class="section-default bg_custom">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
                    <div class="col-md-4 login_form-custom">
                    <h1 class="text-center custom_title">Sign up</h1>
                    <form action="<?php echo base_url().'users'; ?>" method="post">

                      <div class="form-group form-group-icon-left">
                            <!-- <label>Username or email</label> -->
                            <input class="custom-input_class" placeholder="Your Name" required name="name" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Username or email</label> -->
                            <input class="custom-input_class" placeholder="Your Email" required name="email" type="email" />
                        </div>
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Password</label> -->
                            <input class="custom-input_class" type="password" id="password" name="password" required  placeholder="Password" />
                        </div>
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Password</label> -->
                            <input class="custom-input_class" type="password" id="passcof" onchange="myFunction()" required name="passcof" placeholder="Retype-Password" />
                        </div>
                        <input class="btn btn-primary custom-button_class" type="submit" value="Sign Up" />
                        <?php echo form_hidden('todo', 'register'); ?>
                        <div class=" already_member">

                          Already member ? &nbsp;
                           <a href="<?php echo base_url().'users/login'; ?>"> <span>login Here</span></a>
                        </div>
                        </div>

                    </form>
                </div>
      
            <!-- end col --> 
       
          <!-- end row --> 
        </div>
        <!-- end container --> 

        </div>
      </section>
      <!-- end section-default -->
      
  
<script>
function myFunction() {

    var pass = document.getElementById('password').value;
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
