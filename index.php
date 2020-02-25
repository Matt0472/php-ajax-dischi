<?php
  include 'server.php';
 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header></header>

    <main>
      <div class="wrapper_85">
        <?php foreach ($database as $key => $data) { ?>
          <div class="album">
            <img src="<?php echo $data['poster']; ?>" alt="">
            <h2><?php echo $data['title']; ?></h2>
            <h3><?php echo $data['author']; ?></h3>
            <h4><?php echo $data['year']; ?></h4>
          </div>
        <?php }  ?>

       
      </div>
    </main>

    <footer></footer>
  </body>
</html>
