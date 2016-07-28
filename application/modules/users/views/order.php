




    
      
      <section class="section-default bg_custom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="wrap-title">
                <form action="<?php echo base_url().'users/order'; ?>"method="post" onsubmit="return formsubmit(this)"> 

                <h1>Place Your Order Below</h1>


              <!-- end posts-wrap --> 
            </div>
          </div>
            <div class="col-md-8">
              <div class="section-1">

              <h1>Choose Your Country of Study</h1>
              <!-- <img src="assets/media/us_flag.png" alt=""/>
              <img src="assets/media/uk_flag.png" alt=""/>
              <img src="assets/media/australia.jpeg" alt=""/> -->
              <div class="width"></div>
              <div class="row flags_edu">
                <div id="flagdiv"></div>
                <div class="col-xs-6 col-md-3 col-sm-3">     
                 <label style="text-align:center;">
                <input type="radio"  name="flag" value="USD $"  onClick="getResults(); " onchange="loadamount(this);"  id="1" />
                <img src="<?php echo base_url();?>assets/media/us_flag.png" width=120 height=80  >
                <br>
                <span style="margin-bottom: 5px;">United States</span>   
              </label>

              </div>
              
              <div class="col-xs-6 col-md-3 col-sm-3">
                <label style="text-align:center;">
                <input type="radio"  name="flag" value="GBP ₤"  onClick="getResults(); " onchange="loadamount(this);" id="2"  />
                <img src="<?php echo base_url();?>assets/media/australia.jpeg" width=120 height=80   > 
                <br>
                <span style="margin-bottom: 5px;">United Kingdom</span> 
              </label>

              </div>
              
              <div class="col-xs-6 col-md-3 col-sm-3">
                <label style="text-align:center;">
                <input type="radio"  name="flag" value="AUD $"  onClick="getResults();" onchange="loadamount(this);" id="3" />
                <img src="<?php echo base_url();?>assets/media/uk_flag.png" width=120 height=80  >
                <br>
                <span style="margin-bottom: 5px;">Australia</span>
              </label>

              </div>
              
              <div class="col-xs-6 col-md-3 col-sm-3">
                <label style="text-align:center;">
                <input type="radio"  name="flag" value="GBP ₤"  onClick="getResults();" onchange="loadamount(this);" id="4" />
                <img src="<?php echo base_url();?>assets/media/world-map.png" width=120 height=80  >
                <br>
                <span style="margin-bottom: 5px;">Other Country</span>
              </label>

              </div>

               <div class="row" id="c_text"> <p>please choose your country</p> </div>

             
               
             
             </div>

                      <div class="space"></div> 

                         <div class="row">
                          <form action="<?php echo base_url().'users/order'; ?>"method="post">
                           <div class="col-md-4">
                              <h2>Choose Your Product</h2>
                           
                         </div>
                       <div class="col-md-8">
                      <!-- end jelect -->
                      <div class="order_now_custom">
                    
                      

                        <select name="services" class="form-control"id="services" required  onchange="ShowHideDiv(this)" >
                         <option value="" >Select</option>
                          <option >Essay Writing Service</option>
                           <option>Dissertation writing service</option>
                            <option>Engineering Assignment</option>
                             <option>Exam Revision</option> 
                             <option>Marking and Proofreading service</option>
                             <option>Dissertation proposal</option>
                             <option>Literature review</option>
                             <option>Coursework</option>
                             <option>Assignment</option>
                             <option>Dissertation topic with titles</option>
                             <option>Legal Practice Course (LPC) Coursework</option>
                             <option>Bar Professional Training Course (BPTC) Coursework</option>
                             <option >Powerpoint presentation</option>
                             <option>Report</option>
                             <option>Reflective Practice</option>
                             <option>Portfolio</option>
                             <option>PhD Thesis</option>



                        </select>

                      
                      </div>
                      </div>
                      </div>
                     
                      <!-- end jelect -->
                      
                      <!-- </div> -->
                      <!-- end jelect --> 
                    <!-- </div> -->
                    <!-- end form-group -->
                   
                <!--   </form> -->

                <div class="row">
                  <div class="col-md-12">
                
                <h1 class="text-center">Choose Your Product Option</h1>
                   </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <h3>Subject</h3>
              </div>

                <div class="col-md-8">
                      <div class="custom_class">
                      
                          <select class="form-control" id="subjects" required name="subjects" >
                           <option value="" >Select</option>
                            <option>Accounting</option>
                            <option>Aeronautics Engineering</option>
                            <option>Law</option> 
                            <option>Finance</option>
                            <option>Electrical Engineering</option>
                            <option>International Law</option>
                            <option>Human Resource</option>
                            <option>Electronics Engineering </option>
                            <option>Islamic Law</option>
                            <option>Marketing</option>
                            <option>Computer Engineering</option>
                            <option>Law and legal Studies</option>
                            <option>Operations</option>
                            <option>Mechanical Engineering </option>
                            <option>Philosophy of Law</option>
                            <option>Economics</option>
                            <option>Automotive Engineering </option>
                            <option>Intellectual Property Law</option>
                            <option>Tourism </option>
                            <option>Civil Engineering  </option>
                            <option>European Law</option>
                            <option>E-commerce</option>
                            <option>FEA Analsys </option>
                            <option>Civil litigation Law</option>
                            <option>Total Quality Managment </option>
                            <option>2D and 3D Modelling/Drawings  </option>
                            <option>Commercial Law</option>
                            <option>International Business </option>
                            <option>CFD Analysis </option>
                            <option>Commercial property law</option>
                            <option>Information Technology</option>
                            <option>Engineering Simulation </option>
                            <option>Company law</option>
                            <option>Business Management</option>
                            <option>Hyperworks </option>
                            <option>Business Law</option>
                            <option>Foreign Investment</option>
                            <option>Ansys </option>
                            <option>Partnership law</option>
                            <option>Psychology </option>
                            <option>AutoCAD  </option>
                            <option>comparative/conflict of law</option>
                            <option>Portfolio Management </option>
                            <option>Solidworks  </option>
                            <option>Construction Law</option>
                            <option>Mass Communication</option>
                            <option>Material Selection  </option>
                            <option>Contract Law</option>
                            <option>Research Methodology</option>
                            <option>Mathematics</option>
                            <option>Criminal Law</option>
                            <option>Information Systems</option>
                            <option>Engineering Calculations </option>
                            <option>Employment law</option>
                            <option>Calculations </option>
                            <option>Property Law</option>
                            <option>Geological Engineering</option>
                            <option>Environment  </option>
                            <option>Biology  </option>
                            <option>Biotechnology</option>
                            <option>Medical </option>
                            <option>Science</option>
                            <option>Physics </option>
                            <option>Chemistry </option>
                            <option>Construction Engineering</option>
                             <option>VHDL</option>
                             <option>Analogue and Digital</option>
                             <option>Programming </option>
                             <option>Java</option>
                             <option>Website Development</option>
                             <option>Mobile Applications</option>
                             <option>Database Management</option>
                             <option>C Programming</option>
                             <option>C Sharp Programming</option>
                             <option>Python programming</option>
                             <option>Computer Networking</option>
                          </select>
                      </div>
                      </div>
                    </div>
                      
                      <div class="row">
                        <div class="col-md-4">
                          <h3>Grade Required</h3>
                        </div>
                      
                      <div class="col-md-8">
                      <div class="custom_class">
                    
                        <select class="form-control" id="grade" required name="grade" onchange="loadamount(this)" onchange="ShowHideDiv(this)">
                            <option value="" >Select</option>
                            <option value="gcse A">GCSE A Grade</option>  
                            <option  value="A grade A">A grade A</option>
                            <option value="gcse B ">GCSE B Grade</option> 
                            <option value="nvq"> NVQ level 2 (Pass)</option>

                            <option value="merit"> NVQ level 2 (Merit)</option>
                            <option value="A grade b">A Level B Grade</option>
                            <option value="A grade A">A Level A Grade</option>
                            <option value="diploma pass"> Diploma pass</option>
                            <option value="diploma merit">Diploma merit</option>
                            <option value="Undergraduate 2:2">Undergraduate 2:2 (50-59%)</option>
                            <option value="Undergraduate 2:1">Undergraduate 2:1 (60-69%)</option>
                            <option value="postgraduate Diploma 2:2">postgraduate Diploma 2:2 (50-59%)</option>
                            <option value="postgraduate Diploma 2:1">Postgraduate Diploma 2:1 (60-69%)</option>
                            <option value="Masters 2:1">Masters 2:1</option>
                            <option value="Masters 2:2">Masters 2:2</option>
                            <option value="Mphil Pass">Mphil Pass</option>
                            <option value="PhD">PhD</option> 
                            <option value="GDL Pass">GDL Pass (Graduate Diploma in Law)</option>
                            <option value="GDL commendation">GDL commendation</option>
                            <option value="LPC Pass" >LPC Pass (Legal Practice Course)</option>
                            <option value="LPC Pass 1" >LPC Pass</option>
                            <option value="BPTC Competent">BPTC Competent (Bar Professional Training Course)</option>
                            <option value="BPTC very Competent">BPTC very Competent</option>
                           
                           
                          </select>
                      </div>
                      </div>
                    </div>

                     
                     <div class="row" id="lengthshow" >
                       <div class="col-md-4">
                           <h3>Length</h3>
                       </div>
                     
                     <div class="col-md-8">
                      <div class="custom_class">
                        <select class="form-control" id="length" name="lenght" onchange="loadamount(this)">
                           <option value="" >Select</option>
                            <option>1000</option>
                            <option>2000</option>
                            <option>3000</option> 
                          </select>
                      </div>
                    </div>
                      </div>



                      <div class="row" id="lengthshow1" style="display:none" >
                       <div class="col-md-4">
                           <h3>Length</h3>
                       </div>
                     
                     <div class="col-md-8">
                      <div class="custom_class">
                        <select class="form-control" id="length1" name="lenght1" onchange="loadamount(this)">
                           <option value="" >Select</option>
                           <?php $value=1000; for ($i=0; $i <30 ; $i++) { 
                            
                            ?>
                            <option><?php echo $value;?></option>
                            <?php $value=$value+1000; } ?>
                            
                          </select>
                      </div>
                    </div>
                      </div>

                      <div class="row" id="lengthshow2" style="display:none" >
                       <div class="col-md-4">
                           <h3>Length</h3>
                       </div>
                     
                     <div class="col-md-8">
                      <div class="custom_class">
                        <select class="form-control" id="length2" name="lenght2" onchange="loadamount(this)">
                                                      <option value="" >Select</option>
                           <?php $value=1000; for ($i=0; $i <17 ; $i++) { 
                            
                            ?>
                            <option><?php echo $value;?></option>
                            <?php 
                            if($value>=10000){
                               $value=$value+10000; 
                            }
                           else{ $value=$value+1000; 
                           }

                          } ?>
                             </select>
                      </div>
                    </div>
                      </div>






                     <div class="row" style="display:none" id="slideshow">
                       <div class="col-md-4">
                           <h3>Number Of Slide </h3>
                       </div>
                     
                     <div class="col-md-8">
                      <div class="custom_class">
                        <select class="form-control" id="slide"  name="slide" onchange="loadamount(this)">
                           <option value="" >Select</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option> 
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                          </select>
                      </div>
                    </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <h3>Delivery Time</h3>
                        </div>
                      
                        <div class="col-md-8">
                        <div class="custom_class">
                        <select class="form-control" id="date" required name="date" onchange="loadamount(this)">
                          <option value="" >Select</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option> 
                          </select>
                       
                      </div>
                      </div>
                    </div>

<!-- '''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->
                   <div class="row"> 
                    <div class="text-center" style="margin-left: 5.2%;">
                        

                            <button class="main-slider__btn btn btn-warning btn-effect custom_button-class-total_price">Next Step Order-Details</button>
                             </div>
                   </div>
<!-- ......................................................................................................... -->
            

                  </div>
                </div>


             
                    
                      <div class="col-md-4">
                        <div class="sidebar1 section-1" >
                        <h2 class="text-center">Total Price</h2>
                        <span>Inc. VAT And Delivery</span>
                        <div class="row">
                          <div class="col-md-6">
                            <div id="usd"  class="form-control"><!-- <input class="form-control" type="text" readonly name="currency" placeholder="USD"> --> USD $</div> 

                            <div id="aud" style="display:none" class="form-control"><!-- <input class="form-control" type="text" readonly name="currency" placeholder="USD"> -->GBP ₤</div>
                            <div id="eur" style="display:none" class="form-control"><!-- <input class="form-control" type="text" readonly name="currency" placeholder="USD" -->AUD $ </div>
                            <div id="usa" style="display:none" class="form-control"><!-- <input class="form-control" type="text" readonly name="currency" placeholder="USD"> -->GBP ₤</div>
                             
                            
                          </div> 
                          <div class="col-md-6">
                          <div id="divtotal">
                            
                          </div>
                            <input class="form-control" readonly type="text" name="total" id="totalamount" value="" style ="color:#000;"/>
                            
                          </div>

                        </div>

                        <span>Estimated Delivery Date &nbsp;&nbsp;<a href="#">Find out more</span></a>
                        <p style="color: #C8C8C8;" id="dateshow"></p>
                        <div class="text-center">
                        
                      <h3 class="footer-title">Pay Securely With</h3>
              <img src="http://www.bike-discount.de/media/k23230/k78/k23150/38412_zahlung_paypal.jpg" style="width:150px;height:60px;">

                            <button class="main-slider__btn btn btn-warning btn-effect custom_button-class-total_price">Next Step Order-Details</button></div> </div>
                       
                        </form>
                        
                      
                      </div>


                    </div>

                 

              

            
            
            <!-- end col --> 
       
          <!-- end row --> 
        </div>
        <!-- end container --> 

        </div>
      </section>
      <!-- end section-default -->



 
 
<!-- <input type="text" id="amt" readonly name="available_amount" class="form-control" placeholder="" required=""> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>
              function loadamount(obj)
              {
               
                /*var x = document.getElementById("myRadio").value;*/

               
                

                  
                 var flag;    
                 
                 if(document.getElementById("1").checked){
                   var flag='USD';
                 }else if(document.getElementById("2").checked){
                     var flag='GBP';
                 }else if(document.getElementById("3").checked){
                    var flag='AUD';
                 }
                 else if (document.getElementById("4").checked){
                     var flag='GBP';
                 }
                 /*alert(flag);*/ 
                  

                var date=document.getElementById("date");
                var date1 = date.options[date.selectedIndex].value;

                 
                   var newDate = new Date(Date.now() + date1 * 24*60*60*1000);
                    var month = new Array();
                  month[0] = "January";
                  month[1] = "February";
                  month[2] = "March";
                  month[3] = "April";
                  month[4] = "May";
                  month[5] = "June";
                  month[6] = "July";
                  month[7] = "August";
                  month[8] = "September";
                  month[9] = "October";
                  month[10] = "November";
                  month[11] = "December";


               var d=month[newDate.getMonth()] + " - " + newDate.getDate() + " - " + newDate.getFullYear();
               document.getElementById("dateshow").innerHTML = d;

     
                var services=document.getElementById("services");
                var services1 = services.options[services.selectedIndex].value;
               

                var subjects=document.getElementById("subjects");
                var subjects1 = subjects.options[subjects.selectedIndex].value;


                var grade=document.getElementById("grade");
                var grade1 = grade.options[grade.selectedIndex].value;
 
              

                var length=document.getElementById("length");
                 var length1 = length.options[length.selectedIndex].value;
               /*alert(32423);*/

                 var lengthf=document.getElementById("length1");
                 var lengthfr = lengthf.options[lengthf.selectedIndex].value;

                 var lengthsc=document.getElementById("length2");
                 var lengthsce = lengthsc.options[lengthsc.selectedIndex].value;

                 var length6;
                 
                 if(length1){
                 length6=length1;
                 }else if(lengthfr){
                  length6=lengthfr;
                 }else {
                  length6=lengthsce;
                 }

                 
                /* alert(length6);*/
                // var currency=document.getElementById("currency");
                // var currency1 = currency.options[currency.selectedIndex].value;

                 var slide=document.getElementById("slide");
                var slide1 = slide.options[slide.selectedIndex].value;

                /*alert(slide1);*/ 
                /* alert(obj.value);*/

                var dd ={"services":services1,"grade":grade1,"subjects":subjects1,"length":length6,"date":date1,"slide":slide1,"flags":flag};
                /* alert(dd);*/
                   $.ajax({
                  'url' : "<?php echo base_url().'users/doOrder'; ?>",
                  'type' : 'POST',  //the way you want to send data to your URL
                  dataType: "json",
                  'data':dd,
                 /* 'data' : {'date' :date1, 'services' :services1, 'subjects' :subjects1, 'grade' :grade1, 'length' :length1, 'currency' :currency1},
                 */ 'success' : function(data){
                   /* alert(data);*/
                  
                   var amount=data;
                   $("#totalamount").val(amount);

                   /*var decimal=/^[-+]?[0-9]+\.[0-9]+$/; 

                  if(amount.value.match(decimal){
                    $("#totalamount").val(amount);
                     }else{
                    var amount=data.replace(/<\/?span[^>]*>/g,"");
                    $("#totalamount").val(amount);
                    }*/
                    
                   /* var regex = /\d+/g;
                    var total =amount.match(regex);*/
                    /* var result= Number((total).toFixed(2))*/
                    /*alert(result);*/

                    /*var result=total.toFixed(2);*/
                           /*var total=amount.split(" ");*/    
                    /* alert(result);*/

                    console.log(amount);

                     /* document.getElementById("demo").innerHTML 
                    console.log($('#total'));*/
                    // document.getElementById("divtotal").innerHTML=amount;
                    // document.getElementById('totalamount').value = amount;
                     

                     /*$("total").val(data);*/
                   /* document.getElementById("total").val(amount); */
                    /*$('#total').value(amount);*/
                    //$('#available_amount').value=a; //jquery selector (get element by id)
                     //alert(a);
                  },
                   'error': function(data){
                     /* console.log(data);*/
                     /* alert(data);*/
                     /* alert('Some Error Occurred');*/
                  }
                  });
              }
  
              /*function tAmount(obj)
              {
                var add_amount=parseInt(obj.value);
                var available_amount=parseInt(document.getElementById('amt').value);
                document.getElementById('total_amount').value=add_amount+available_amount;
              }*/
</script>


<script type="text/javascript">
    function ShowHideDiv(obj) { 
    
        var services= document.getElementById("services").value;
       
      if ( services == 'Powerpoint presentation')
      {

        $("#slide")[0].setAttribute('required',true);
        $("#slideshow").show();
         $("#lengthshow").hide();
         $("#lengthshow1").hide();
         $("#lengthshow2").hide();
          $("#length").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#length2").removeAttr('required',true);
      }
      else 
      {
       
        $("#length")[0].setAttribute('required',true);
        $("#lengthshow").show();
         $("#slideshow").hide();
          $("#lengthshow1").hide();
          $("#lengthshow2").hide();
          $("#slide").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#length2").removeAttr('required',true);
      }
        
    }
</script>

<!-- $(document).ready(function(){
    $("#1").click(function(){
        $("#c_text").html("You Have selected USA.");    
          $("#usd").show();
          $("#aud").hide(); 
          $("#eur").hide();
          $("#usa").hide();
    });
 -->

<script >
function formsubmit(obj){
/*alert(23424);*/

                var flag1=document.getElementById("1").checked;
                 var flag2=document.getElementById("2").checked;
                  var flag3=document.getElementById("3").checked;
                   var flag4=document.getElementById("4").checked;
                   
           /*  alert(flag1); 
             return false; */ 
  if(flag1==true){
   
       return true; 
  } else if(flag2==true){
    
     return true; 
  }
  else if(flag3==true){
    
     return true; 
  }
  else if(flag4==true){
    
     return true; 
  }else{
    

     
 
     document.getElementById("flagdiv").innerHTML = "Please Select Country..."; 
   return false;  
  }
        
    
         

         

}


</script>


<script>
$(document).ready(function(){
    $("#1").click(function(){
        $("#c_text").html("You Have selected USA.");    
          $("#usd").show();
          $("#aud").hide(); 
          $("#eur").hide();
          $("#usa").hide();
    });

    $("#2").click(function(){
        $("#c_text").html("You Have selected United Kingdom");

         $("#usd").hide();
          $("#aud").show(); 
          $("#eur").hide();
          $("#usa").hide();
    });

    $("#3").click(function(){
        $("#c_text").html("You Have selected Australia");
           $("#usd").hide();
          $("#aud").hide(); 
          $("#eur").show();
          $("#usa").hide();

    });

   $("#4").click(function(){
        $("#c_text").html("You Have selected Other Country");
         $("#usd").hide();
          $("#aud").hide(); 
          $("#eur").hide();
          $("#usa").show();

    });
});
</script>



<script>
$(document).ready(function(){
    $("#grade").change(function(){
         var value=this.value;
         var services = $( "#services" ).val();
        
       /*  if(value=='Mphil Pass'){   
          $("#length2")[0].setAttribute('required',true);
          $("#lengthshow2").show();
          $("#lengthshow").hide();
          $("#lengthshow1").hide();
          $("#slideshow").hide();
          $("#length").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#slide").removeAttr('required',true);
        }
        else if(value=='PhD'){
          $("#length2")[0].setAttribute('required',true);
          $("#lengthshow2").show();
          $("#lengthshow").hide();
          $("#lengthshow1").hide();
          $("#slideshow").hide();
          $("#length").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#slide").removeAttr('required',true);

        }
        else if(services == 'Powerpoint presentation'){
          $("#slide")[0].setAttribute('required',true);
          $("#slideshow").show();
          $("#lengthshow").hide();
          $("#lengthshow1").hide();
          $("#lengthshow2").hide();
          $("#length").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#length2").removeAttr('required',true);

        }
        else{
          $("#length")[0].setAttribute('required',true);
          $("#lengthshow").show();
          $("#lengthshow2").hide();
          $("#lengthshow1").hide();
          $("#slideshow").hide();
          $("#length2").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#slide").removeAttr('required',true);
        }*/
         if(services == 'Powerpoint presentation'){
          $("#slide")[0].setAttribute('required',true);
          $("#slideshow").show();
          $("#lengthshow").hide();
          $("#lengthshow1").hide();
          $("#lengthshow2").hide();
          $("#length").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#length2").removeAttr('required',true);
         
        }
        else if(value=='PhD'){
          $("#length2")[0].setAttribute('required',true);
          $("#lengthshow2").show();
          $("#lengthshow").hide();
          $("#lengthshow1").hide();
          $("#slideshow").hide();
          $("#length").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#slide").removeAttr('required',true);

        }
        else if (value=='Mphil Pass'){   
          $("#length2")[0].setAttribute('required',true);
          $("#lengthshow2").show();
          $("#lengthshow").hide();
          $("#lengthshow1").hide();
          $("#slideshow").hide();
          $("#length").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#slide").removeAttr('required',true);
        }
        else{
          $("#length")[0].setAttribute('required',true);
          $("#lengthshow").show();
          $("#lengthshow2").hide();
          $("#lengthshow1").hide();
          $("#slideshow").hide();
          $("#length2").removeAttr('required',true);
          $("#length1").removeAttr('required',true);
          $("#slide").removeAttr('required',true);
        }
    });

   
});
</script>




<script>
    $(document).ready(function(){
    $("#subjects").change(function(){
         var value=this.value;

        /* alert(1234);*/

         if (value=='2D and 3D Modelling/Drawings' )
         {
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         } 
         else if(value=='CFD Analysis'){
          window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='Engineering Simulation'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='Hyperworks'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='Ansys'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='AutoCAD'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if( value=='Solidworks'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }else if(value=='Material Selection'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }else if(value=='Mathematics'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if( value=='Engineering Calculations'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if( value=='FEA Analsys'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='VHDL'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if( value=='Analogue and Digital'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='Programming'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='Java'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
          else if(value=='Information Technology'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
          else if(value=='Website Development' ){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
          else if(value=='Mobile Applications'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
          else if(value=='Database Management'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
          else if( value=='C Programming'){
             window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
          
         }
         else if(value=='C Sharp Programming'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='Python programming'){
           window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         }
         else if(value=='Computer Networking'){
          
          window.location.replace("<?php echo base_url().'users/subjectQuery/'; ?>");
         };
        
        
    });

   
});

</script>

<script>

$(function () {
    var sidebar = $('.sidebar1');
    var top = sidebar.offset().top - parseFloat(sidebar.css('margin-top'));
  
    $(window).scroll(function (event) {
      var y = $(this).scrollTop();
      if (y >= top) {
        sidebar.addClass('fixed');
      } else {
        sidebar.removeClass('fixed');
      }
    });
});
</script>