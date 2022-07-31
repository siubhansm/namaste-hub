<html>
    <body>
        <form method="post" name="updateuser" action="<?= site_url('/update') ?>" >
        <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
            name: <input type="text" name="fName" value="<?php echo $user_obj['name'];?>"><br>
           
            <input type="submit" name="s" value="Update"><br>
            </form>
    </body>
</html>