<?php 

   

 ?>
 
 onchange="loadamount(this)"
<input type="text" id="amt" readonly name="available_amount" class="form-control" placeholder="" required="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>
              function loadamount(obj)
              {
                 //alert(obj.value);
                   $.ajax({
                  'url' : "<?php echo base_url().'users/doOrder'; ?>",
                  'type' : 'POST',  //the way you want to send data to your URL
                  dataType: "json",
                  'data' : {'id' : obj.value},
                  'success' : function(data){
                    //alert(data);
                    var amount=data;
                    document.getElementById('amt').value = amount;
                    //$('#available_amount').value=a; //jquery selector (get element by id)
                     //alert(a);
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
