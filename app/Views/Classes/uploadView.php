<html>
    <body class="nBody">
     <?php echo view ('Assets/header');  ?>
<br>
      <div class="container">
        <div class="nForm">
         <h1>Upload Class</h1> 
         <h6 class="error">
       
      <form method="post" name="loginuser" action="<?= site_url('/upload') ?>" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Video URL</label>
    <input value="" type="text" name="file" id="file" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input value="" type="text" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <input value="" type="text" name="description" class="form-control" >
  </div>
  <button type="submit" name="upload" class="btn btn-secondary">Submit</button>
</form>
</div>
</div>

 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>
