<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 9/21/2015
 * Time: 5:27 PM
 */
?>

<!-- Enter your Email

<input type="email" name="email">
<input type="submit" name="submit">
 -->

 
      <section class="section-default bg_custom">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
                    <div class="col-md-4 login_form-custom">
                    <h1 class="text-center custom_title">Please Confirm Your Email</h1>
                    <?php echo form_open('users/forgetPwd'); ?>

                      
                        
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Password</label> -->
                            <input class="custom-input_class" name="email" type="email" placeholder="Type Email" />
                        </div>
                        <div class="gap"></div>
                        <input class="btn btn-primary custom-button_class" type="submit" value="Confirm Email" />
                       
                        
                        </div>

                   <?php echo form_close();?>
                </div>
      
            <!-- end col --> 
       
          <!-- end row --> 
        </div>
        <!-- end container --> 

        </div>
      </section>