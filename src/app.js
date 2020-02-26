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
      error: function (request, state, errors) {
        alert('errore');
      }
    }
  );  


  $('#authors').change(function() {
    var thisAuthor = $(this).val();
    console.log(thisAuthor);
    $.ajax(
      {
        url: 'http://localhost/php-ajax-dischi/ajax-database.php',
        method: 'GET',
        data: {
          author: thisAuthor
        },
        success: function (data) {
          printResult(data);
        },
        error: function (request, state, errors) {
          alert('errore');
        }
      }
    );  
  });
});


// FUNCTION
// funzione per la stampa dei risultati
function printResult(result) {
  reset();
  var source = $('#entry-template').html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < result.length; i++) {
    if (result.length > 0) {
      var thisCD = result[i];
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

// funzione se non ci sono risultati
function printNoResult() {
  var source = $('#noresult-template').html();
  var template = Handlebars.compile(source);
  var html = template();
  $('.cds-container').append(html);
}

function reset() {
  $('.cds-container').html('');
}