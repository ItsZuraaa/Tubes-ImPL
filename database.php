<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Exile Hotel V2</title>
  </head>
  <body>
    <!-- HEADER --> 
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <img src="img/logo.png">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Logout</button>
        </div>
      </header>
    </div>  

    <!--DATABASE TABLE-->
    <div class="container" ng-app="formvalid">
      <div class="panel" data-ng-controller="validationCtrl">
      <div class="panel-heading border">    
        <h2>Pencatatan Reservasi
        </h2>
      </div>
      <div class="panel-body">
          <table class="table table-bordered bordered table-striped table-condensed datatable" ui-jq="dataTable" ui-options="dataTableOpt">
          <thead>
            <tr>
              <th>Code</th>
              <th>Name</th>
              <th>Check In</th>
              <th>Check Out</th>
              <th>Dewasa</th>
              <th>Anak</th>
              <th>Tipe Kamar</th>
              <th>Durasi(Malam)</th>
            </tr>
          </thead>
            <tbody>
              <tr ng-repeat="n in data">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
    </div>

    <!-- FOOTERS -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">&copy; 2022 Exile Hotel V2. Templated by Ilham Ripandi</p>
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Kamar</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Fasilitas</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Fitur</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Tentang Kami</a></li>
          </ul>
        </footer>
    </div>
  </body>
</html>