const $ = require('jquery');
const Handlebars = require("handlebars");



$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost/php-ajax-dischi/ajax-database.php',
      method: 'GET',
      success: function (data) {
        var source = $('#entry-template').html();
        var template = Handlebars.compile(source);
        for (var i = 0; i < data.length; i++) {
          var thisCD = data[i];
          console.log(thisCD);
          var context = { 
            poster: thisCD.poster,
            title: thisCD.title, 
            author: thisCD.author,
            year: thisCD.year 
          };
          var html = template(context);
          $('.cds-container').append(html);
        }
        
      },
      error: function(error) {
        alert('errore');
      }
    }
  );  
});