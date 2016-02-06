<style>
  #selectedFiles img {
    max-width: 125px;
    max-height: 125px;
    float: left;
    margin-bottom:10px;
  }
</style>
<script>
  var selDiv = "";
    
  document.addEventListener("DOMContentLoaded", init, false);
  
  function init() {
    document.querySelector('#userfile').addEventListener('change', handleFileSelect, false);
    selDiv = document.querySelector("#selectedFiles");
  }
    
  function handleFileSelect(e) {
    
    if(!e.target.files) return;
    
    selDiv.innerHTML = "";
    
    var files = e.target.files;
    for(var i=0; i<files.length; i++) {
      var f = files[i];
      
      selDiv.innerHTML += f.name + "<br/>";

    }
    
  }
  </script>

<!-- Loader -->
<!-- Loader end -->

<div class="layout-theme animated-css" data-header="sticky" data-header-top="200"> 
       
      <section class="section-default bg_custom">
     <!--   <?php echo form_open_multipart('');?> -->
       <form id="myForm" method="post" enctype="multipart/form-data" action="<?php base_url().'users/do_upload' ?>">
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
                            
                            <input type="text" readonly class="form-control" value="<?php echo $this->session->userdata('user_products')['flag'];?>">
                            
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
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" >
   <!--  <span class="sr-only">60% Complete (warning)</span> -->
   


  </div>

</div>
          
          </div>
                  
    </div>
         <div class="row">
             
             <div class="col-md-4">
                             
             <label class="btn btn-primary btn-effect"> 
                 
                  <input class="js-file-upload" type="file" name="userfile[]" multiple id="userfile"/>
                 <!--  <input type="file" name="files[]" multiple id="files" onchange="modalval(this)" /> -->
                 
                 Upload File 
             
             </label>

             
             
            
             </div>
             
             <div class="col-md-8">
                 
                <div class="row">
                    
                    <div class="col-md-12">

                    <div id="selectedFiles"></div>
                     <!-- <div id="mulitplefileuploader">Upload</div>

                    <div id="status"></div> -->
                 <!--    <input style="color:#000" type="text"  readonly="" id="userfileshow" value=""> -->
                     
                        
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

vallength=val1.length;
alert(vallength);
var filename = val1.replace(/^.*\\/, "");
 
document.getElementById('userfileshow').value = filename;



}
</script>


<!-- ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->

<!-- <div class="progress progress-striped active">
   <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
    </div>
</div> -->
 
      <!-- <input type="checkbox" name="done" class="done" value="100">
    -->

<script>
$(document).ready(function(){

$(".js-file-upload").on("change", function(e){

 var files = e.target.files.length;
 
  var valeur = 0;  

 
    var max = 100;
        
        function update() {
            if(files==10){
            valeur += 1; 
            }
           
            else if(files==9){
               valeur += 1; 
            }
            else if(files==8){
               valeur +=1 ; 
            }
            else if(files==7){
               valeur += 4; 
            }
            else if(files==8){
              valeur += 4; 
            }
            else if(files==7){
              valeur += 4; 
            }
            else if(files==6){
              valeur += 4; 
            }
            else if(files==5){
              valeur += 10; 
            }
            else if(files==4){
              valeur += 10; 
            }
            else if(files==3){
              valeur += 20; 
            }
            else if(files==2){
              valeur += 20; 
            }
            else if(files==1){
              valeur += 25; 
            }
            else{
              valeur += 1; 
            }
            
            $("progress-bar").val(valeur);
            if (valeur >= max) clearInterval(interval);
         $('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur); 
            
           };
        
       
         var interval = setInterval(update, 100);  
          




});

/*     var interval = setInterval(update, 100); */
});
</script>

<!-- ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->