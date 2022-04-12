<?php
require "algo/algo.php";

if(isset($_POST["submit"])){
  var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
  </head>
  <body>
        <!-- table -->
    <section id="add">
    <div class="container">
      <div class="row">
        <div class="cal-md-6">
          <h1>Add File</h1>
          <form method="post" >
          <div class="card" >
            <ul class="mb-3" id="formL">
                <label for="name" class="form-label">Your Name</label>
                <input name="name" type="text" class="form-control" id="name" >
            </ul>            
            <ul class="mb-3" id="formL">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" >
            k</ul>
            <div class="card-body">

              <button href="#" class="btn btn-primary" name="submit">add</button>
              <a href="#" class="btn btn-danger">Cancel</a>
            </div>
            </div>
          </form>      
        </div>
      </div>
    </div>
    </section>
      <!-- end table -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>