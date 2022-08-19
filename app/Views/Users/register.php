
<html>
    <body>
        <?php
    echo view ('Assets/header');   
    ?>

    <div class="nRegister">

    <div class="container ">
      <br>
       <form class="nForm" method="post" action="<?= base_url('submit')?>">
        <h1>Register at Yoga Hub</h1> 
        <?php if (session()->getFlashdata('item') !== NULL) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('item'); ?>
        
    </div>
<?php endif; ?>

            <div class="form-row" >
                <div class="form-group">
                    <label>First Name</label>
                <input type="text" name="fName" class="form-control" value="<?php
             echo $fName; ?>" >
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                <input type="text" name="lName" class="form-control" value="<?php
             echo $lName; ?>" >
                </div>
            </div>
            <div class="form-row">
            <div >
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php
             echo $email; ?>" >
            </div>
            <div >
                <label >Date of Birth</label>
                <input type="text" name="dob" class="form-control" value="<?php
             echo $dob; ?>" placeholder="YYYY-MM-DD">         
            </div>
            </div>
            <div class="form-row">
                <div class="form group ">
                <label >Password</label>
                <input  type="password" name="password" class="form-control" >
                </div>
                <div class="form group ">
                <label >Confirm Password</label>
                <input  type="password" name="confirmpassword"class="form-control" >
                </div>
            </div>
            <div class="error">
            <?php
             echo $msg; ?></div>
            <br/>
            <input type="submit" class="btn btn-secondary">
        </form>
        </div>
        </div>
 <?php
    echo view ('Assets/footer');   

    
    ?>
    </body>
</html>

