<html>
    <body>
     <?php echo view ('Assets/header'); 
      ?>
      <div class="nDashboard">
      <div class="container">
        
     <?php  $session = session();
    
      if (!$session->get('admin_logged_in')) echo "<h3>Welcome back, ".$session->get('fName')." ".$session->get('lName')."</h3>"?>  

      <div class="nProfile">
      <table class="table table-striped">
    <tr>
        <td>First Name</td>
        <td><?php echo $session->get('fName'); ?></td> 
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo $session->get('lName') ?></td> 
    </tr>
       <tr>
        <td>Email</td>
        <td><?php echo $session->get('email') ?></td>
    </tr>
    <tr>
        <td>Date of Birth</td>
        <td><?php echo $session->get('dob') ?></td>
    </tr>
</table>
 <a class="btn btn-secondary" href="<?php echo base_url('profileEdit/'.$session->get('userId')); ?>">Update</a>
</div> 
      </div>
      </div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>

