<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo ('Yoga Hub'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php base_url('style/style.css'); ?>">
</head>
<body>
    <div class="nHome">
        <div class="container">
            <div class="d-flex flex-column p-5">
                <p class="nDescription">Yoga is the journey of the self, through the self, to the self.
                   <i>- The Bhagavad Gita</i></p>
                    <?php  $session = session();
        if($session->get('logged_in')) echo '<a class="btn btn-secondary w-25" href="/classes">Go to classes</a>';  
        else if (!$session->get('logged_in')) echo '<a class="btn btn-secondary w-25" href="/register">Register to access classes</a>';  ?>
                
            </div>
        </div>
    
    </div>
</body>
</html>