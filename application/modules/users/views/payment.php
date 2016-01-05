
      
      <section class="edu_payment_section">
        <div class="container">
          <div class="row">
            <div class="section_1">
            <h1 class="edu_payment_title"><span>Please Pay Now</span></h1>
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

                <div class="row">
                  
                  <h1 class="edu_payment_title_2"><span>Your Order Summary</span></h1>
                  <div class="col-md-7">
                    <h2 class="edu_subheading_2">Order Details</h2>
                    <div class="row">

                    
                    <div class="col-md-3 border_style">
                      <div class="edu_service_details_1">Price:</div>
                    </div>

                    <div class="col-md-9">
                       <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['total']; ?></div>
                    </div>

                    

                    <div class="col-md-3">
                      <div class="edu_service_details_1">Amount To Pay:</div>
                    </div>

                    <div class="col-md-9">
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['total']; ?></div>
                    </div>

                    <div class="col-md-3">
                      <div class="edu_service_details_1"> Grade Required:</div>
                    </div>

                    <div class="col-md-9">
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['grade']; ?></div>
                    </div>

                    <div class="col-md-3">
                     <div class="edu_service_details_1"> Length:</div>
                    </div>

                    <div class="col-md-9">
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['lenght']; ?> Words (Estimated 2-3 pages)</div>
                    </div>

                    <div class="col-md-3">
                      <div class="edu_service_details_1">Delivery Time:</div>
                    </div>

                    <div class="col-md-9">
                      <div class="edu_service_details_2"><?php echo $this->session->userdata('user_products')['date']; ?>Days <br> <span> <p> The delivery time starts as soon as your writer begins work. Please note that until you receive confirmation that your writer has started work we can not guarantee the delivery time of your order.</p></span></div>
                    </div>

                    <div class="col-md-3">
                      <div class="edu_service_details_1">Subject Area:</div>
                    </div>

                    <div class="col-md-9">
                    <div class="edu_service_details_2"> <?php echo $this->session->userdata('user_products')['subjects']; ?></div>
                    </div>

                    <div class="col-md-3">
                     <div class="edu_service_details_1"> Time for requesting changes:</div>
                    </div>

                    <div class="col-md-9">
                     <div class="edu_service_details_2"> Standard - within 7 days of the due date
                     Standard - within 7 days of the due date
                     Standard - within 7 days of the due date Standard - within 7 days of the due date Standard - within 7 days of the due date</div>
                    </div>


                    <div class="col-md-3">
                    <div class="edu_service_details_1"> Referencing style:</div>
                    </div>

                    <div class="col-md-9">
                     <div class="edu_service_details_2"> Harvard - standard </div>
                    </div> 

                    <div class="col-md-12">
                      <div class="edu_service_details_1">Your essay question and requirements</div>
                    </div>

                    <div class="col-md-12">
                      <div class="edu_service_details_2">
                      7 Days The delivery time starts as soon as your writer begins work. Please note that until you receive confirmation that your writer has started work we can not guarantee the delivery time of your order.7 Days The delivery time starts as soon as your writer begins work. Please note that until you receive confirmation that your writer has started work we can not guarantee the delivery time of your order.7 Days The delivery time starts as soon as your writer begins work. Please note that until you receive confirmation that your writer has started work we can not guarantee the delivery time of your order.7 Days The delivery time starts as soon as your writer begins work. Please note that until you receive confirmation that your writer has started work we can not guarantee the delivery time of your order.7 Days The delivery time starts as soon as your writer begins work. Please note that until you receive confirmation that your writer has started work we can not guarantee the delivery time of your order.
                    </div>
                    </div>

                    <div class="col-md-12">
                     <div class="edu_service_details_1"> Required sources:</div>
                    </div>

                    <div class="col-md-12">
                     <div class="edu_service_details_2">  None - the writer may use whatever sources he or she feels are most appropriate.vcsdvsdv </div>
                    </div>

                    <div class="col-md-12">
                      <div class="edu_service_details_1"> Suggested sources: </div>
                    </div>

                    <div class="col-md-12">
                      <div class="edu_service_details_2"> Nonevdvas</div>
                    </div>

              </div>


      
                  </div>

                  <div class="col-md-5 other_half">
                <h1 class="edu_subheading_2">10% off your next order</h1>
                <p>If you recommend a friend to us and they place an order we'll give you an awesome reward of 10% off your next order!

                Start by visiting your customer account and click the 'Referrals' tab. Then enter the email address of the friend you would like to tell about us. They will then receive an email from us, telling them you have recommended that they look at our site.

                If they go on to have an order completed by us, you will receive a discount coupon, entitling you to 10% off your next order! As soon as your friends order is completed (this includes the amendment period), you'll be able to find your discount coupon under the 'Referrals' tab.</p>


                <p class="edu_service_details_1">Refer a friend' terms and conditions</p>

                <ul>
                  <li>We will only offer you the incentive once your friends order is complete and is a new customer.</li>

                  <li>Your friend must be a bona fide new customer placing an order for themselves.</li>
                  <li>Only one discount code may be redeemed per order.</li>
                  <li>Discount codes will remain valid for three months.</li>
                  <li>We reserve the right to alter or withdraw incentives from time to time. Any pending recommendations will be honoured.</li>
                  <li>The offer is non-transferable and subject to change without notice.</li>
                  <li>Coupons are issued once your friends order is completed, this includes the amendment period.</li>

                  <button class=" btn btn-warning btn-effect footer-btn">Refers a Friend Today</button>
                </ul>




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
      
      
