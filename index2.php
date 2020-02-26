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
        
        
      </div>
    </main>




    <!-- template cd handlebars -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="album">
        <img src= "{{poster}}" alt="">
        <h3>{{title}}</h3>
        <span class="author">{{author}}</span>
        <span class="year">{{year}}</span>
      </div>
    </script>
    <!-- template no risultati -->
      <script id="noresult-template" type="text/x-handlebars-template">
        <li>Nessun risultato per la tua ricerca</li>
      </script>
    <!-- nostro script -->
    <script src="dist/app.js"></script>
  </body>
</html>
