const $ = require('jquery');
const Handlebars = require("handlebars");



$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost/php-ajax-dischi/ajax-database.php',
      method: 'GET',
      success: function (data) {
        for (var i = 0; i < data.length; i++) {
          var thisCD = data[i];
          console.log(thisCD);
          
          
        }
        
      },
      error: function(error) {
        alert('errore');
      }
    }
  );  
});