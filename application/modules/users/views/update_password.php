<?php
/**
 * Created by PhpStorm.
 * User: webo
 * Date: 9/22/2015
 * Time: 1:05 PM
 */
?>

<!-- 
<input  type="text" name="pasword" placeholder="Password">
<input  type="text" name="c_pasword" placeholder="Conform Password">
<input type="submit" name="submit" value="Submit">
 -->

<section class="section-default bg_custom">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
                    <div class="col-md-4 login_form-custom">
                    <h1 class="text-center custom_title">Please Type Your New Password</h1>
                   <?php echo form_open('users/recallMail'); ?>

                      
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Password</label> -->
                            <input class="custom-input_class" type="password" name="pasword" placeholder="New Password" />
                        </div>
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Password</label> -->
                            <input class="custom-input_class" type="password" name="c_pasword" placeholder="Confirm-Password" />
                        </div>
                        <input class="btn btn-primary custom-button_class" type="submit" value="Submit" />
                        <!-- <h4 class="text-center custom-or">Or</h4>
                        <div class="text-center social-custom-btn">
                        <input class="custom-button-f" type="submit" value="Facebook sign up" />&nbsp;
                        <input class="custom-button-g" type="submit" value="Google sign up" /> -->
                        
                        </div>
<?php echo form_close();?>
                </div>
      
            <!-- end col --> 
       
          <!-- end row --> 
        </div>
        <!-- end container --> 

        </div>
      </section>
      <!-- end section-default -->

