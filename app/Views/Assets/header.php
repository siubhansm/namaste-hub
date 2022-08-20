<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo ('Yoga Hub'); ?></title>
    <link rel="stylesheet" href="style/style.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     
</head>
<body>
  
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Yoga Hub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <?php // $session = session();
        //if(!$session->get('logged_in')) echo '<li class="nav-item">
        //  <a class="nav-link" href="/register">Register</a></li>';  ?>
      <li class="nav-item">
          <a class="nav-link" href="/classes">Classes</a>
        </li>
        <?php  $session = session();
        if(!$session->get('logged_in')) echo '<li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>';  ?>
        </li>
        
        <?php  $session = session();
        if($session->get('logged_in')) echo '<li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>';  ?>
        
        </ul>
       <ul class="navbar-nav ms-auto mb-2 mb-lg-0">  
         <?php  $session = session();
        if($session->get('admin_logged_in')) echo '<li class="nav-item">
          <a class="nav-link" href="/dashboardAdmin">My Dashboard</a>
        </li>';  
        else if ($session->get('logged_in')) echo '<li class="nav-item">
          <a class="nav-link" href="/dashboard">My Dashboard</a>
        </li>';  ?>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin Area
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php  $session = session();
           if(!$session->get('admin_logged_in')) echo '<li><a class="dropdown-item" href="/loginAdmin">Admin Login</a></li>';
             
        if($session->get('admin_logged_in')) echo '<li><a class="dropdown-item" href="/userView">View all users</a></li><li><a class="dropdown-item" href="/adminView">View all admin users</a></li><li><a class="dropdown-item" href="/classView">View all classes</a></li><li><a class="dropdown-item" href="/uploadView">Upload a class</a></li>';  ?>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>