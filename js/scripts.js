function searchApi(){
    var terminput = document.getElementById('term');
    var term = document.getElementById('term').value;

    if(term.length > 0){
        terminput.style.border = "1px solid #ced4da";
        showSpinner();

        $.ajax({
            type:'POST',
            url:'http://localhost/searchy-api/api.php',
            data: {
            'term': term,
            },
            dataType:'json'
          })
          .done(function(data) {
            var img;

            data.sort( function( a, b ) {
                a = a.name.toLowerCase();
                b = b.name.toLowerCase();

                return a < b ? -1 : a > b ? 1 : 0;
            });

              for (var key in data) {
                  if(data[key].origin == "iTunes music"){
                    img = "images/vinyl.png"
                  }else if(data[key].origin == "iTunes movie"){
                    img = "images/cboard.png"
                  }else if(data[key].origin == "TV Maze"){
                    img = "images/tv.png"
                  }else{
                    img = "images/person.png"
                  }

                  $('#results-table').find('tbody')
                  .append('<tr><td>'+ data[key].name +'</td><td>'+ data[key].origin +'</td>'+
                  '<td><img class="type-img" src="'+ img +'"></td></tr>');
            }

            hideSpinner();
            })
          .fail(function(data) {
              alert( "error" );
            })
    }else{
        terminput.style.border = "1px solid red";
    }

  }

function showSpinner(){
    var search_results = document.getElementById('search-results');
    var spinner = document.getElementById('spinner');
    search_results.style.display = "none";
    spinner.style.display = "block";
}

function hideSpinner(){
    var search_results = document.getElementById('search-results');
    var spinner = document.getElementById('spinner');
    search_results.style.display = "inline-flex";
    spinner.style.display = "none";
}