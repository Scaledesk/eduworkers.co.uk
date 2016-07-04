 
    
      <section class="section-default bg_custom">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
                    <div class="col-md-4 login_form-custom">
                    <h1 class="text-center custom_title">Login</h1>
                    <form action="<?php echo base_url().'users'; ?>" method="post">

                      <div class="row error_msg">  <?php  echo getInformUser(); ?>  </div>
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Username or email</label> -->
                            <input class="custom-input_class" name="email"  required placeholder="Your Email" type="email" />
                        </div>
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Password</label> -->
                            <input class="custom-input_class" type="password" required name="password" placeholder="Password" />
                        </div>
                        <div class="gap"></div>
                        <input class="btn btn-primary custom-button_class txt-lg" type="submit" name="login" value="Login" />
                       <!--  <h4 class="text-center custom-or">Or</h4> -->
                        <!-- <div class="text-center social-custom-btn">
                        <input class="custom-button-f" type="submit" value="Facebook login" />&nbsp;&nbsp;
                        <input class="custom-button-g" type="submit" value="Google login" />
                        <div class="forget_pass_custom">
                        <a href="#">Forget Your password ?</a>
                        </div> -->
                        <?php echo form_hidden('todo', 'login'); ?>
                        <div class=" sign_up_text">

                          Don't have a Account ? &nbsp;
                           <a href="<?php echo base_url().'users/signup'; ?>"> <span>Sign up</span></a><br/>

                           <a href="<?php echo base_url().'users/forgotMail'; ?>"> <span>Forget Password</span></a>
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
      
      
