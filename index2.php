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
      <select name="authors" id="authors">
          <option value="Seleziona un autore">Seleziona un autore</option>
          <option value="Queen">Queen</option>
          <option value="Oasis">Oasis</option>
          <option value="Michael Jackson">Michael Jackson</option>
          <option value="Club Dogo">Club Dogo</option>
          <option value="Gem Boy">Gem Boy</option>
          <option value="Gigi D'Agostino">Gigi D'Agostino</option>
          <option value="Articolo 31 - J-Ax">Articolo 31 - J-Ax</option>
          <option value="Billie Eilish">Billie Eilish</option>
          <option value="Elettra Lamborghini">Elettra Lamborghini</option>
          <option value="Tupac">Tupac</option>
          <option value="The Notorious B.I.G.">The Notorious B.I.G.</option>
          <option value="50 Cent">50 Cent</option>
        </select>
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
