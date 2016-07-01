<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/3/2015
 * Time: 4:07 PM
 */?>


<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/1/2015
 * Time: 6:57 PM
 */ ?>

   <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> SMPT Setting</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> SMPT Setting </h4>
                      <form class="form-horizontal style-form" method="post" action="<?php echo base_url().'Email_settings'; ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">SMTP HOST</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control"  name="smtp_host" placeholder="SMTP HOST" value="<?=$email_settings['smtp_host']?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">SMTP EMAIL</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="smtp_user" placeholder="SMTP EMAIL" value="<?=$email_settings['smtp_user']?>">
                                  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">SMTP PASSWORD</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="smtp_pass" placeholder="SMTP PASSWORD" value="<?=$email_settings['smtp_pass']?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">SMTP PORT</label>
                              <div class="col-sm-10">
                                  <input class="form-control"  type="text" name="smtp_port"  placeholder="SMTP PORT" min="1" value="<?=$email_settings['smtp_port']?>">
                              </div>
                          </div>
                         <?php echo form_hidden('todo','udeast003');?>
                          <input type="submit" class="btn btn-default" value="Update Email Settings" />
                      </form>
                  </div>
                </div><!-- col-lg-12-->         
            </div>     <!-- /row -->

</section>
</section>
