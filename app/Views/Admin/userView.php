<html>
  <head>
    <title><?php echo ('Yoga Hub'); ?></title>
  </head>
    <body>
     <?php echo view ('Assets/header');  ?>
     <div class="nGradient">
      <br>
      <div class="container">
       <h1>Users</h1>
       <table class="table table-striped nTable">
        <thead>
          <th scope="col">#</th>
          <th scope="col">User Id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Date of Birth</th>
        </thead>
        <tbody>
          <?php $i=1; foreach($table as $key){ ?>
            <tr>
              <td scope="row"><?php echo $i++; ?></td>
              <td scope="row"><?php echo $key['userId']; ?></td>
              <td scope="row"><?php echo $key['fName']; ?></td>
              <td scope="row"><?php echo $key['lName']; ?></td>
              <td scope="row"><?php echo $key['email']; ?></td>
              <td scope="row"><?php echo $key['dob']; ?></td>
              <td scope="row"><a href="<?php echo base_url('userEdit/'.$key['userId']); ?>">Update</a></td>
              <td scope="row"><a href="<?php echo base_url('userDelete/'.$key['userId']); ?>">Delete</a></td>
            </tr>

          <?php } ?>
           
          
 
        </tbody>
       </table>
        </div>
</div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>
