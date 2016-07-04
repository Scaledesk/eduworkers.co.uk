

   
      <section class="section-default bg_custom">
        <div class="container" ng-app="myApp">
          <div class="row" ng-controller="PasswordController">
            <div class="col-md-4"></div>
                    <div class="col-md-4 login_form-custom">
                    <h1 class="text-center custom_title">Sign up</h1>
                    <form action="<?php echo base_url().'users'; ?>" method="post" onSubmit="return myFunction()">

                      <div class="form-group form-group-icon-left">
                            <!-- <label>Username or email</label> -->
                            <input class="custom-input_class" placeholder="Your Name" required name="name" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left">
                            <!-- <label>Username or email</label> -->
                            <input class="custom-input_class" placeholder="Your Email" required name="email" type="email" />
                        </div>
                         <div class="form-group form-group-icon-left"> 
                            <!-- <label>Username or email</label> -->
                            <input class="custom-input_class" placeholder="Phone No." id="phone"title="Your Phone Number" required name="phone" type="text" maxlength="12"/>
                        </div>
                        <div class="form-group form-group-icon-left">
                                                    <!-- <label>Password</label> -->
                            <input class="custom-input_class" type="password" id="password" name="password" required  placeholder="Password" />
                        </div>
                   

                        <div class="form-group form-group-icon-left">
                            <!-- <label>Password</label> -->
                            <input class="custom-input_class" type="password" id="passcof"  required name="passcof" placeholder="Retype-Password" />
                        </div>
                         <div id="lengthPass" style="color:red"> </div>
                        <input class="btn btn-primary custom-button_class txt-lg" type="submit" value="Sign Up"  />
                        <?php echo form_hidden('todo', 'register'); ?>
                        <div class=" already_member">

                          Already member ? &nbsp;
                           <a href="<?php echo base_url().'users/login'; ?>"> <span>Login Here</span></a>
                        </div>
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
      
  
<script>
function myFunction() {

    var pass = document.getElementById('password').value;

     var cpass = document.getElementById('passcof').value;
   
      var passlength = pass.length;

    var phone=document.getElementById('phone');
   
 /*var phoneno = /^\(?([0-9]{3})\)?[-.+ x ]?([0-9]{3})[-.+ x ]?([0-9]{4})$/; */ 
 var phoneno = /^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\\/]?){0,})(?:[\-\.\ \\\/]?(?:#|ext\.?|extension|x)[\-\.\ \\\/]?(\d+))?$/i;


 
  if(phone.value.match(phoneno)) { 
    
     if(pass==cpass){

    if(passlength<=4){
         document.getElementById('lengthPass').innerHTML = 'Too Short';

          document.getElementById("password").focus();
         return false;

      }
      else if (passlength<=6) {
         document.getElementById('lengthPass').innerHTML = 'Too medium';
          return true;
      } else if(passlength<=8){document.getElementById('lengthPass').innerHTML = 'Too  Strong';
       return true;
     }


     }
     else{
       alert('password not match ');
       document.getElementById("passcof").focus();
       return false;
     }
   
    }  
   else  
     {  
       alert("Not a valid Phone Number");  
       return false;  
     }
  
   // x.value = xx.value.toUpperCase();
}
</script>


<!-- 
<script type="text/javascript">
function phonenumber()  
{  
 var pass=document.getElementById('phone');
 var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
  if(pass.value.match(phoneno)) { 

       return true;        
     }  
   else  
     {  
       alert("Not a valid Phone Number");  
       return false;  
     }  
}  
</script> -->