
<html>
    <body>
        <?php
    echo view ('Assets/header');   

    
    ?>
        <h1>Register at Namaste Yoga</h1>
       <form method="post" action="<?= base_url('submit')?>">
            <div class="form-row" >
                <div class="form-group col-md-6">
                    <label>First Name</label>
                <input type="text" name="fName" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                    <label>Last Name</label>
                <input type="text" name="lName" class="form-control"  >
                </div>
            </div>
            <div class="form-row">
            <div class="col-6">
                <label >Email</label>
                <input type="text" name="email" class="form-control"  >
            </div>
            <div class="col-6">
                <label >Date of Birth</label>
                <input type="text" name="dob" class="form-control" >         
            </div>
            </div>
            <div class="form-row">
                <div class="form group col-6">
                <label >Password</label>
                <input  type="password" name="confirmpassword" class="form-control" >
                </div>
                <div class="form group col-6">
                <label >Confirm Password</label>
                <input  type="password" name="password"class="form-control" >
                </div>
            </div>
            <?php
            if (isset($validation)): 
            ?> <div class="aler alert-danger" role="alert">
                <?php echo $validation->listErrors()
                ?>
            </div>
            <?php
            endif;
            ?>
            <input type="submit" class="btn btn-primary">
        </form>
 <?php
    echo view ('Assets/footer');   

    
    ?>
    </body>
</html>

