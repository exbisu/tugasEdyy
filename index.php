<?php

require 'algo/algo.php';

$outPut =query("SELECT * FROM tbAdmin");

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
    <section style="padding-top: 10rem;">
    <div class="container">
      <div class="row">
        <div class="cal-md-10">
          <h1>My Table</h1>
          <div class="card" >
              <table class="table ">
          <thead class="table-dark">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Matkul</th>
          <th scope="col">Action</th>
          </tr>
          </thead>
              <tbody>
              <?php $i=1; 
              foreach ($outPut as $isi) {?>
          <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $isi["name"];?></td>
              <td><?= $isi["email"];?></td>
              <td><?= $isi["matkul"];?></td>
              <td>
              <a href="#" class="btn btn-success">update</a>
              <a href="#" class="btn btn-danger">delete</a>
              </td>
           </tr> 
           <?php 
            $i++;
          } ?>

           </tbody>
              </table>
            <div class="card-body">
              <a href="add.php" class="btn btn-primary">add</a>
            </div>
          </div>
      
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