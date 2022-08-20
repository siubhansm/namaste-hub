<html>
    <body>
     <?php echo view ('Assets/header');  ?>
     <div class="nLogin">
      <br>
      <div class="container">
        <div class="nForm">
         <h1>Log in to access classes</h1> 
         <h6 class="error">
       
      <form method="post" name="loginuser" action="<?= site_url('/authoriseUser') ?>">
       <?php if (session()->getFlashdata('item') !== NULL) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('item'); ?>
        
    </div>
<?php endif; ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input value="" type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input value="" type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="login" class="btn btn-secondary">Submit</button>
  <div class="col-12 col-sm-8 text-right">
    <a href="/register" class="nLink">Register here if you don't have an account</a>
  </div>
</form>
</div>
</div>
</div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>

