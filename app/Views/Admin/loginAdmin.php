<html>
    <body>
     <?php echo view ('Assets/header');  ?>
     <div class="nAdmin">
      <br>
      <div class="container">
        <div class="nForm">
         <h1>Admin Login</h1> 
         <h6 class="error">
       
      <form method="post" name="loginuser" action="<?= site_url('/authoriseAdmin') ?>">
       <?php if (session()->getFlashdata('item') !== NULL) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('item'); ?>
        
    </div>
<?php endif; ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input value="" type="text" name="username" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input value="" type="password" name="password" class="form-control" >
  </div>
  
  <button type="submit" name="login" class="btn btn-secondary">Submit</button>
  
</form>
</div>
</div>
</div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>

