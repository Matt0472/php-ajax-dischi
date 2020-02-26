<?php
  include 'server.php';
 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- link al nostro stile -->
    <link rel="stylesheet" href="dist/app.css">
    <title>Spotify Web</title>
  </head>
  <body>
    <header>
      <div class="container">
        <img src="img/logo.png" alt="logo" />
      </div>
    </header>

    <main>
      <div class="cds-container container">
      <?php if (!empty($database)) { ?>
        <?php foreach ($database as $key => $data) { ?>
          <div class="album">
            <img src="<?php echo $data['poster']; ?>" alt="">
            <h3><?php echo $data['title']; ?></h3>
            <span class="author"><?php echo $data['author']; ?></span>
            <span class="year"><?php echo $data['year']; ?></span>
          </div>
        <?php }  ?>
      <?php } else { ?>
        <h2>Spiacenti, non abbiamo trovato alcun CD</h2>
      <?php }  ?>
      </div>
    </main>

    <footer></footer>
  </body>
</html>
