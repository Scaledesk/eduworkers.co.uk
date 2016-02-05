


    
      
      <section class="section-default bg_custom">
        <div class="container">
          <div class="wrap-title">
           <h1>Get your custom quote here </h1>
         </div>
          <div class="row col-md-12" style="margin-bottom:25px;">
            <h4>
              As you have selected one of Engineering subjects and we being the specialists and experts of engineering assignments, we understand that amount of work required to be done for these kind of tasks cannot be gauged only by the word count and instead of revising prices later we suggest you to send us the assignment brief with all other relevant files that will be required or helpful to complete task. We will get back to you in 24 hours time with a fair quote.
            </h4>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="wrap-title">
                <form action="<?php echo base_url().'users/subjectQuerySend'; ?>"method="post" enctype="multipart/form-data" onSubmit="return myFunction()">

               
                <div class="order_now_custom">
                <input type="text" class="form-control" required name="name" placeholder="User Name"> 
                  
              </div>

               <div class="order_now_custom">
                <input type="email" class="form-control" required name="email" placeholder="Email"> 
                  
              </div>

               <div class="order_now_custom">
                <input type="text" class="form-control" id="phone" required name="phone" placeholder="Phone No." maxlength="12"> 
                  
              </div>

                <div class="order_now_custom">
                <select class="form-control" name="subject">
                 <option> 2D and 3D Modelling/Drawings</option>
                  <option>CFD Analysis</option>
                 <option> Engineering Simulation</option> 
                  <option>Hyperworks</option>
                 <option> Ansys</option>
                 <option> AutoCAD</option>
                 <option> Solidworks</option>
                 <option> Material Selection </option>
                 <option> Mathematics</option>
                 <option> Engineering Calculations</option>
                 <option> Calculations</option>
                 <option> FEA Analsys</option>
                 <option> VHDL</option>
                 <option> Analogue and Digital</option>
                 <option> Programming </option>
                  <option>Java</option>
                  <option>Information Technology</option>
                 <option> Website Development</option>
                 <option> Mobile Applications</option>
                 <option> Database Management</option>
                 <option> C Programming</option>
                  <option>C Sharp Programming</option>
                  <option>Python programming</option>
                  <option>Computer Networking</option>
                </select>
              </div>
<!-- 
              <div class="order_now_custom">
                <input type="text" class="form-control" required name="title" placeholder="Title"> 
                  
              </div> -->

              <div class="order_now_custom">
                <textarea class="form-control" rows="6" required name="description" placeholder="Description"></textarea>
              </div>

              
              <div class="order_now_custom">
                <input type="file" class="form-control" name="uploadfile">
                  
              </div>
              <div class="order_now_custom"> 
              <div class="text-center" style="margin-left: 5.2%;">
                        

                  <button class="main-slider__btn btn btn-warning btn-effect custom_button-class-total_price">Request Quote</button>
                             </div>
                   </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      </section>


<script>
function myFunction() {

  

    var phone=document.getElementById('phone');
   

 var phoneno = /^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\\/]?){0,})(?:[\-\.\ \\\/]?(?:#|ext\.?|extension|x)[\-\.\ \\\/]?(\d+))?$/i;


 
  if(phone.value.match(phoneno)) { 
    
     
     
       return true;
     }


   
   else  
     {  
       alert("Not a valid Phone Number"); 
        document.getElementById("phone").focus(); 
       return false;  
     }
  
   
}
</script>