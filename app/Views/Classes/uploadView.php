<html>
    <body class="nBody">
     <?php echo view ('Assets/header');  ?>
<br>
      <div class="container">
        <div class="nForm">
         <h1>Upload Class</h1> 
  
      <form method="post" name="loginuser" action="<?= base_url('/upload') ?>" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">YouTube URL</label>
    <input value="<?php echo $video; ?>" type="text" name="file" id="file" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input value="<?php echo $name; ?>" type="text" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <input value="<?php echo $description; ?>" type="text" name="description" class="form-control" >
  </div>
  <div class="error">
            <?php
             echo $msg; ?></div>
  <button type="submit" name="upload" class="btn btn-secondary">Submit</button>
</form>
</div>
<br>

<div class="nForm d-flex flex-column">
  <button class="btn btn-secondary mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Upload Instructions
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <h2>Guide to upload YouTube videos</h2> 
    <br>
         <h5>Copy the URL from YouTube video</h5>
 <br>
         <img src="images/youtube.png" alt="instructions" width="300" >
         <br>
         <h5>Paste the URL into the form</h5>
         <br>
       <img src="images/youtube2.png" alt="instructions" width="300" >
  </div>

<div class="blankSpace"></div>
</div>
 

 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>
