<!DOCTYPE html>
<html>
<head>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400&display=swap" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- my css -->
    <link rel="stylesheet" href="css/styles.css">

<title>Searchy!</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Searchy</a>
              </div>
            </div><!-- /.container-fluid -->
          </nav>
    </header>

<div class="container-fluid content-wrapper">

    <div class="row justify-content-center">
        <div class="col-md-6 d-flex justify-content-center text-center">
            <p class="search-label">Introduzca su término de búsqueda</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 d-flex justify-content-center text-center">

                <div class="input-group search-form">
                    <input class="form-control main-search" type="text" name="term" id="term" required>
                    <button type="submit" class="btn btn-info" onclick="searchApi()">
                        <i class="icon-search"></i>
                    </button>
                </div>

        </div>
    </div>

    <hr>

    <div class="row justify-content-center">
        <div class="loader" id="spinner"></div>
    </div>

    <div class="row justify-content-center" id="search-results">
        <div class="col-md-8 d-flex justify-content-center">
            <div class="card">
                <div class="table-responsive" id="table-container">
                    <table class="table table-bordered table-striped" id="results-table">
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Origen</th>
                        <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


<footer>

    <!-- bootstrap JS -->
    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
crossorigin="anonymous"></script>

<!-- my JS -->
<script src="js/scripts.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
</footer>
</body>
</html>