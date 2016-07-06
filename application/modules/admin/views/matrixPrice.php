

  <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/css/jquery.dataTables.min.css"/>

<script type="text/javascript" src="<?php echo asset_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>

  <script> 
 $(document).ready(function() {
    $('.display').DataTable();
} );
  </script>
        <section id="main-content">
          <section class="wrapper">

        
  <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                
                 <th>Level</th>
                <th>Pl1</th>
                <th>Time</th>
                <th>Pt2</th>
                <th>Pt3</th>
                
            </tr>
        </thead>
       <!--  <tfoot>
            <tr>
                <th>Service</th>
                <th>Grade</th>
                <th>Length</th>
                <th>Delivery Date</th>
                <th>Date</th>
                <th>Total Price</th>
            </tr>
        </tfoot> -->
        <tbody><?php foreach ($price as  $row) {
        ?>
            <tr>
              
               <td> 
               <a data-toggle="modal" data-target="#myModal<?php echo $row['eduworkers_matrix_id'];?>"><?php echo $row['eduworkers_matrix_level']; ?> </a>
               </td>

                
                 <td><?php echo $row['eduworkers_matrix_pl1']; ?></td>
                <td><?php echo $row['eduworkers_matrix_time']; ?></td>
                <td><?php echo $row['eduworkers_matrix_pt2']; ?></td>
               
                
                <td><?php echo $row['eduworkers_matrix_pt3']; ?></td>
                
            </tr>

           
  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $row['eduworkers_matrix_id'];?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Price Matrix </h4>
        </div>
        <div class="modal-body">
           <div class="row">
              <form class="form"  method="post" action="<?php echo base_url().'admin/updateMatrixPrice/'.$row['eduworkers_matrix_id'];?>" >
              <div class="col-md-3"> Level </div>
              <div class="col-md-9">
                 <input class="form-control" type="text" name="level" readonly value="<?php echo $row['eduworkers_matrix_level']; ?>" >

             </div> 
              
                <div class="col-md-3"> Pl1 </div> 
              <div class="col-md-9">
                 <input  class="form-control"type="text" name="pl1"  value="<?php echo $row['eduworkers_matrix_pl1']; ?>" >

             </div> 

               <div class="col-md-3"> Time </div>
              <div class="col-md-9">
                 <input class="form-control" type="text" name="time"  value="<?php echo $row['eduworkers_matrix_time']; ?>" >

             </div> 

                <div class="col-md-3"> Pt2 </div>
              <div class="col-md-9">
                 <input class="form-control" type="text" name="pt2"  value="<?php echo $row['eduworkers_matrix_pt2']; ?>" >

             </div> 
              <div class="col-md-3"> Pt3 </div>
              <div class="col-md-9">
                 <input class="form-control" type="text" name="pt3" value="<?php echo $row['eduworkers_matrix_pt3']; ?>" >

             </div> 

              
           </div>
          
         
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-default">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>




           <?php } ?>
        </tbody>
    </table>

</div>
</section>
</section>

   
