<html>
  <head>
    <title><?php echo ('Yoga Hub'); ?></title>
  </head>
    <body class="nBody">
     <?php echo view ('Assets/header');  ?>
     <div >
      <br>
      <div class="container">
       <h1>Classes</h1>
       <table class="table table-striped nTable">
        <thead>
          <th scope="col">#</th>
          <th scope="col">Class Id</th>
          <th scope="col">Video</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
        </thead>
        <tbody>
<!--This loop goes through each row of data in the database gotten in the controller, the variable i is used to represent the index of each row of data-->
          <?php $i=1; foreach($table as $key){ ?>
            <tr>   
              <td scope="row"><?php echo $i++; ?></td>
              <td scope="row"><?php echo $key['classId']; ?></td>
              <td scope="row"><iframe src="<?php echo $key['embedURL'];?>" title="<?php echo $key['name']; ?>"></iframe></td>
              <td scope="row"><?php echo $key['name']; ?></td>
              <td scope="row"><?php echo $key['description']; ?></td>
              <td scope="row"><a href="<?php echo base_url('classEdit/'.$key['classId']); ?>">Update</a></td>
              <td scope="row"><a href="<?php echo base_url('classDelete/'.$key['classId']); ?>">Delete</a></td>
            </tr>

          <?php } ?>
           
          
 
        </tbody>
       </table>
       <div class="blankSpace"></div>
       <div class="blankSpace"></div>
       <div class="blankSpace"></div>
       <div class="blankSpace"></div>
        </div>
</div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>