<html>
    <body class="nBody">
     <?php echo view ('Assets/header');  ?>
<br>
      <div class="container">
        <div class="nForm">
         <h1>Upload Class</h1> 
         <h6 class="error">
       
      <form method="post" name="loginuser" action="<?= site_url('/classUpdate') ?>" enctype="multipart/form-data">
  <div class="mb-3">
       <input type="hidden" name="classId" id="classId" value="<?php echo $classes['classId']; ?>">
    <label class="form-label">Video URL</label>
    <input value="<?php echo $classes['video']; ?>" type="text" name="file" id="file" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input value="<?php echo $classes['name']; ?>" type="text" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <input value="<?php echo $classes['description']; ?>" type="text" name="description" class="form-control" >
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
</div>
</div>

 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>