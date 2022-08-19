<html>
    <body>
     <?php echo view ('Assets/header');  ?>
     <div class="nGradient">
      <br>
      <div class="container">
       <h1>Admin Users</h1>
       <table class="table table-striped nTable">
        <thead>
          <th scope="col">#</th>
          <th scope="col">Admin Id</th>
          <th scope="col">Username</th>
          <th scope="col">Role</th>
          <th scope="col">Email</th>
        </thead>
        <tbody>
          <?php $i=1; foreach($table as $key){ ?>
            <tr>
              <td scope="row"><?php echo $i++; ?></td>
              <td scope="row"><?php echo $key['adminId']; ?></td>
              <td scope="row"><?php echo $key['username']; ?></td>
              <td scope="row"><?php echo $key['role']; ?></td>
              <td scope="row"><?php echo $key['email']; ?></td>
            </tr>

          <?php } ?>
          
 
        </tbody>
       </table>
        </div>
</div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>