
      
      <section class="edu_payment_section">
        <div class="container">
          <div class="row">
            <div class="section_1">
            <h1 class="edu_payment_title">Please Pay Now</h1>
            <hr>
            <h2 class="edu_subheading">Once we have received your payment, we will begin to find you the best researcher to complete your order.</h2>

            <div class="col-md-4">
              <div class="payment_option_card">
              <h1>Pay by Credit or Debit Card</h1>
              <p>We use a secure payment system, and we NEVER store any of your card details.</p>
              <button class=" btn btn-warning btn-effect footer-btn">Pay Now By credit/Debit Card</button>
              </div>
            </div>


            <div class="col-md-4">
              <div class="payment_option_paypal">
              <h1>Pay by PayPal</h1>
              <p>We take online card payments via PayPal, but you do not require an account with PayPal in order to pay with your credit or debit card.</p>
              <button class=" btn btn-warning btn-effect footer-btn">
              <a href="<?php echo base_url().'payment/buy'; ?>">Pay Using Paypal</a></button>
            </div>
            </div>

            <div class="col-md-4">
              <div class="payment_option_transfer">
              <h1>Pay by Bank Transfer</h1>
              <p>Please note that, in using this option, we will only start your order when payment has cleared which will take up to 3-5 hours or 3-5 days if paying via international bank transfer..</p>
              <button class=" btn btn-warning btn-effect footer-btn"><a href="<?php echo base_url().'users/payment'; ?>">Pay By Bank Transfer</a></button>
            </div>
            </div>
            </div>


                </div>

                <div class="row custom_size">
                  <div class="col-md-12">
                     <h1 class="edu_payment_title_2">Your Order Summary</h1>
                     <hr>
                  </div>
<hr>
                    <div class="row">

                    <div class="col-md-3 border_style">
                      <div class="edu_service_details_1">Price:</div>
                    </div>

                    <div class="col-md-9">
                       <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['total']; ?></div>
                    </div>
                  </div>

                    <hr>
                    <div class="row">
                    <div class="col-md-3">
                      <div class="edu_service_details_1">Amount To Pay:</div>
                    </div>

                    <div class="col-md-9">
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['total']; ?></div>
                    </div>

                    </div>
<hr>
                    <div class="row">
                    <div class="col-md-3">
                      <div class="edu_service_details_1"> Grade Required:</div>
                    </div>

                    <div class="col-md-9">
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['grade']; ?></div>
                    </div>
                    </div>
                    <hr>
                    <?php if ($this->session->userdata('user_products')['services']=='Powerpoint presentation') {
                    ?>
                    <div class="row">
                    <div class="col-md-3">
                     <div class="edu_service_details_1"> Number Of Slide</div>
                    </div>

                    <div class="col-md-9">
                   
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['slide']; ?> Slide </div>
                    </div>
                    </div>
                    <?php }else{ ?>
                     <div class="row">
                    <div class="col-md-3">
                     <div class="edu_service_details_1"> Length:</div>
                    </div>

                    <div class="col-md-9">
                   
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['lenght']; ?> Words (Estimated 2-3 pages)</div>
                    </div>
                    </div>
                    <?php } ?>
<hr>
                    <div class="row">
                    <div class="col-md-3">
                      <div class="edu_service_details_1">Delivery Time:</div>
                    </div>

                    <div class="col-md-9">
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['date']; ?>Days <br> <span> <p> The delivery time starts as soon as your writer begins work. Please note that until you receive confirmation that your writer has started work we can not guarantee the delivery time of your order.</p></span></div>
                    </div>
                    </div>
<hr>
                    <div class="row">
                    <div class="col-md-3">
                      <div class="edu_service_details_1">Subject Area:</div>
                    </div>

                    <div class="col-md-9">
                    <div class="edu_service_details_2"> <?php echo $this->session->userdata('user_products')['subjects']; ?></div>
                    </div>
                    </div>


<hr>
                    <div class="row">
                    <div class="col-md-3">
                     <div class="edu_service_details_1"> Time for requesting changes:</div>
                    </div>

                    <div class="col-md-9">
                     <div class="edu_service_details_2"> 
                     Standard - within 7 days of the due date Standard </div>
                    </div>
                    </div>


                <hr>

                    <div class="row">
                    <div class="col-md-12">
                      <div class="edu_service_details_1">Your essay question and requirements</div>
                    </div>
                    </div>

                <hr>

                    <div class="row">
                    <div class="col-md-12">
                     <div class="edu_service_details_1"> Required sources:</div>
                    </div>
                    </div>
<hr>
                    <div class="row">
                    <div class="col-md-12">
                     <div class="edu_service_details_2">  None - The writer may use whatever sources he or she feels are most appropriate. </div>
                    </div>
                    </div>

                   

                   

              </div>


      
                  </div>

                


                  </div>
                </div>
      
            <!-- end col --> 
       
          <!-- end row --> 
        </div>
        <!-- end container --> 

        </div>
      </section>
      <!-- end section-default -->
      
      
