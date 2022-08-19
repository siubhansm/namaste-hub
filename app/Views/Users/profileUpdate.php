
<html>
    <body>
        <?php
    echo view ('Assets/header');   
    ?>

    <div class="nRegister">

    <div class="container ">
      <br>
       <form method="post" name="profileUpdate" action="<?= site_url('/profileUpdate') ?>" >
       
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
            <input type="submit" class="btn btn-secondary">
        </form>
        </div>
        </div>
 <?php
    echo view ('Assets/footer');   

    
    ?>
    </body>
</html>