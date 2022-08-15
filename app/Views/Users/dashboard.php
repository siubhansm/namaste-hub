<html>
    <body>
     <?php echo view ('Assets/header');  ?>
     <?php  $session = session();
      echo "Welcome back, ".$session->get('fName')." ".$session->get('lName');?>
 <?php echo view ('Assets/footer');  ?>
    </body>
</html>

