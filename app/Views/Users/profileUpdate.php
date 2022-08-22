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
        <?php
    echo view ('Assets/header');   
    ?>

    <div class="nRegister">

    <div class="container ">
      <br>
       <form method="post" name="profileUpdate" action="<?= base_url('/profileUpdate') ?>" >
       
        <h1>Update User</h1> 
        <input type="hidden" name="userId" id="iuserId" value="<?php echo $users['userId']; ?>">
            <div class="form-row" >
                <div class="form-group">
                    <label>First Name</label>
                <input type="text" name="fName" class="form-control" value="<?php echo $users['fName']; ?>" >
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                <input type="text" name="lName" class="form-control" value="<?php echo $users['lName']; ?>" >
                </div>
            </div>
            <div class="form-row">
            <div >
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $users['email']; ?>" >
            </div>
            <div >
                <label >Date of Birth</label>
                <input type="text" name="dob" class="form-control" value="<?php echo $users['dob']; ?>" >         
            </div>
            </div>
            <input type="submit" value="submit" class="btn btn-secondary">
        </form>
        </div>
        </div>
 <?php
    echo view ('Assets/footer');   

    
    ?>
    </body>
</html>