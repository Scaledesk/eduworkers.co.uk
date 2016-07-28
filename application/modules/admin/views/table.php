

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
                 <th>Status</th>
                <th>Action</th>
                <th>Users Name</th>
                <th>Service</th>
                <th>Grade</th>
                <th>Length/Slide</th>
                <th>Delivery Days</th>
                <th> Order Date</th>
                <th>Total Price </th>
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
        <tbody><?php foreach ($product as  $row) {
        ?>
            <tr>
               <td><?php echo $row['eduworkers_products_id']; ?></td>
               <td><?php echo $row['eduworkers_products_status']; ?></td>
               <td><?php if($row['eduworkers_products_status']=='payment_done') {?> <a onclick="return confirm('Are you sure you want to change Order Status to InProgress ?')" href="<?php echo base_url().'admin/inprogress/'.$row['eduworkers_products_id']; ?>">Inprogress</a><?php }else if($row['eduworkers_products_status']=='inprogress') { ?>   <a onclick="return confirm(' Are you sure you want to change Order Status to  Completed?')" href="<?php echo base_url().'admin/completed/'.$row['eduworkers_products_id']?>">Complete </a>  <?php } else if($row['eduworkers_products_status']=='completed'){ ?>  <?php }  else{ ?>  <?php } ?></td>
                
                 <td><?php echo $row['eduworkers_users_userfname']; ?></td>
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