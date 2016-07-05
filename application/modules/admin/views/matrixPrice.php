

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
              
               <td><?php echo $row['eduworkers_matrix_level']; ?></td>

                
                 <td><?php echo $row['eduworkers_matrix_pl1']; ?></td>
                <td><?php echo $row['eduworkers_matrix_time']; ?></td>
                <td><?php echo $row['eduworkers_matrix_pt2']; ?></td>
               
                
                <td><?php echo $row['eduworkers_matrix_pt3']; ?></td>
                
            </tr>
           <?php } ?>
        </tbody>
    </table>
</div>
</section></section>