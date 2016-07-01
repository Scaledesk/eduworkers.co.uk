

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
                 <th>Order Id</th>
               
                <th>Service</th>
                <th>Grade</th>
                <th>Length/Slide</th>
                <th>Delivery Days</th>
                <th>Order Date</th>
                <th>Total Price </th>
            </tr>
        </thead>
       
        <tbody><?php foreach ($order as  $row) {
        ?>
            <tr>
               <td><?php echo $row['eduworkers_products_id']; ?></td>
               
                <td><?php echo $row['eduworkers_products_services']; ?></td>
                <td><?php echo $row['eduworkers_products_grade']; ?></td>
               
                
                <td><?php echo $row['eduworkers_products_length']; ?></td>
                <td><?php echo $row['eduworkers_products_delivery_date']; ?></td>
                <td><?php echo $row['eduworkers_products_data']; ?></td>
                 <td><?php echo $row['eduworkers_products_total']; ?></td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
</div>
</section></section>