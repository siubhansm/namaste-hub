<html>
    <body class="nBody">
     <?php echo view ('Assets/header'); 
      ?>

      <div class="container d-flex flex-wrap justify-content-around">

          <?php foreach($table as $key){ ?>
            <div >
              <h3><?php echo $key['name']; ?></h3>
              <br>
             <iframe width="480" height="270" src="<?php echo $key['embedURL']; ?>" title="<?php echo $key['name']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             <br><p><?php echo $key['description']; ?></p>
        </div>
 
          <?php } ?>

         
</div>
<div class="blankSpace"></div>
 <?php echo view ('Assets/footer');  ?>
 
    </body>
</html>