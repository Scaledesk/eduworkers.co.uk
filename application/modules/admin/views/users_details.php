

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
                
                <th>Name</th>
                <th>Email</th>
               <th>Phone No.</th>
                <th> Status</th>
                <th>Action</th>
                
            </tr>
        </thead>
      
        <tbody><?php foreach ($users as  $row) { 
             
             if($row['eduworkers_users_username']=='admin@admin.com'){
             continue;
             }
             ?>
            <tr>
              
                <td><a href="<?php echo base_url().'admin/orderDetails/'. $row['eduworkers_users_id']; ?>"><?php echo $row['eduworkers_users_userfname']; ?></a></td>
                <td><?php echo $row['eduworkers_users_username']; ?></td>
                 <td><?php echo $row['eduworkers_users_phone']; ?></td>
                <td><?php  if($row['eduworkers_users_state']==1) { ?> Enabled <?php } else { ?> Disabled <?php } ?> </td>

                <td><?php  if($row['eduworkers_users_state']==1) { ?> <a href="<?php echo base_url().'admin/disable/'.$row['eduworkers_users_id']; ?>"  onclick="return confirm('Are you sure you want to Disable user ?')"  >Disable </a>  <?php } else { ?> <a onclick="return confirm('Are you sure you want to Enable user ?')"  href="<?php echo base_url().'admin/enable/'.$row['eduworkers_users_id']; ?>"> Enable</a> <?php } ?> </td>
                
               
            </tr>
           <?php } ?>
        </tbody>
    </table>
</div>
</section></section>