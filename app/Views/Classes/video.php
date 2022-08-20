<html>
    <body>
     <?php echo view ('Assets/header'); 
      ?>
       <div class="nDashboard">
      <div class="container d-flex flex-column">
        <h1  class="mx-auto" ><?php echo $video['name']; ?></h1>
        <br><br>
      <iframe class="mx-auto" width="960" height="540" src="<?php echo $video['video']; ?>" title="<?php echo $video['name']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br><br>
<p  class="mx-auto" ><?php echo $video['description']; ?></p>
</div>
      </div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>