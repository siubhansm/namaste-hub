<html>
    <body>
     <?php echo view ('Assets/header'); 
      ?>
      <div class="nDashboard">
      <div class="container">
        
     <?php  $session = session();
      echo "<h3>Welcome back, ".$session->get('username')."</h3>";?>
      <div class="nProfile"> 
      <?php $i=0; foreach($table as $key)$i++?>
    <?php echo "<h2> There are currently ".$i." users </h2>" ?>
         <a class="btn btn-secondary" href="<?php echo base_url('userView/'); ?>">View All Users</a>
          
         <h2> Here are the latest registrations: </h2>
          <?php foreach(array_reverse(array_slice($table, 0, 9)) as $key)
     echo "<li>".$key['regsitration']." <b>".$key['fName']." ".$key['lName']."</b></li>"; ?>
     </div> 
      </div>
      </div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>

