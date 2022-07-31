<html>
    <body>
      <form method="post" name="loginuser" action="<?= site_url('/authoriseUser') ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email:</label>
    <input value="" type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input value="" type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
  <div class="col-12 col-sm-8 text-right">
    <a href="/register">Register here if you don't have an account</a>
  </div>
</form>
    </body>
</html>

