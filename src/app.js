const $ = require('jquery');
const Handlebars = require("handlebars");



$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost/php-ajax-dischi/ajax-database.php',
      method: 'GET',
      success: function (data) {
        printResult(data);
      },
      error: function(error) {
        alert('errore');
      }
    }
  );  
});


// FUNCTION

function printResult(result) {
  var source = $('#entry-template').html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < result.length; i++) {
    if (result.length > 0) {
      var thisCD = result[i];
      console.log(thisCD);
      var context = {
        poster: thisCD.poster,
        title: thisCD.title,
        author: thisCD.author,
        year: thisCD.year
      };
      var html = template(context);
      $('.cds-container').append(html);
    } else {
      printNoResult();
    }
  }
}


function printNoResult() {
  var source = $('#noresult-template').html();
  var template = Handlebars.compile(source);
  var html = template();
  $('.cds-container').append(html);
}