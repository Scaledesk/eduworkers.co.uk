




<!-- Loader -->
<!-- Loader end -->

<div class="layout-theme animated-css" data-header="sticky" data-header-top="200"> 
       
      <section class="section-default bg_custom">
       <?php echo form_open_multipart('users/do_upload');?>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="wrap-title">
                
                <h1>Choose Your Option Below</h1>
              <!-- end posts-wrap --> 
            </div>
          </div>

            <div class="col-md-8">
              <div class="section-1">
                <h2>Title & Instructions</h2>
                <p>Please provide the details about the specifics of your order, including the instructions and the title of the work. </p>

                <div class="first_input">

                <lable>Title</lable>
                </div>
                <textarea class="form-control" rows="7" required name="title" placeholder="Message" style="height: 50px;"></textarea>
                <lable>Instructions</lable>

                <textarea class="form-control" rows="7" required name="message" placeholder="Message"></textarea>

                
             
             </div>
  </div>
             

                      <div class="col-md-4">
                        <div class="section-1">
                        <h2 class="text-center">Total Price</h2>
                        <span>Inc. VAT And Delivery</span>
                        <div class="row">
                          <div class="col-xs-6">
                            <select class="form-control">
                              <option>GBP&nbsp;&#8356;</option>
                              <option>USD&nbsp;&#36;</option>
                              <option>AUD&nbsp;&#36;</option>
                              <option>EUR&nbsp;&#128;</option>
                              
                            </select>
                            
                          </div>
                          <div class="col-xs-6">
                            <input type="text" readonly class="form-control" value="<?php echo $this->session->userdata('user_products')['total']; ?>">
                            
                          </div>

                        </div>

                        
                        <div class="text-center">
                      <button type="submit"  class="main-slider__btn btn btn-warning btn-effect custom_button-class-total_price" >Place Order </button></div> </div>
                        
                        </div>
                      </div>
            
            <div class="row">
            <div class="col-md-12">
              <div class="wrap-title">
                
                <h1>Upload Additional Files</h1>
              <!-- end posts-wrap --> 
            </div>
          </div>
            <div class="col-md-12">
              <div class="section-1">
                <h3>Please upload your file(s) here</h3>
                <p>*Upload Instructions : Only Doc/PDF/PPT Files allowed. Max File Size allowed : 2 MB.   </p>
                  
      <div class="row" > 
          
          <div class="col-md-12 upload_progress_bar"> 
              
             <div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
          
          </div>
                  
    </div>
         <div class="row">
             
             <div class="col-md-4">
                             
             <label class="btn btn-primary btn-effect"> 
                 
                  <input type="file" name="userfile[]" multiple id="userfile" onchange="modalval(this)" />
                 
                 Upload File 
             
             </label>

             
             
            
             </div>
             
             <div class="col-md-8">
                 
                <div class="row">
                    
                    <div class="col-md-12">
                    <input style="color:#000" type="text"  readonly="" id="userfileshow" value="">
                     
                        
                </div>
                 
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

        </form>
      </section>
      <!-- end section-default -->
    
      </div>

      <script type="text/javascript">
function modalval(){



var val1 = document.getElementById('userfile').value;

document.getElementById('userfileshow').value = val1;



}
</script>
