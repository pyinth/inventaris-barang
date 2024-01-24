<?php
    require_once('database.php');
    $data=tampildata("Select * from inventaris_barang");
    $number = 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Daftar Notes</title>
    <style>
      .btn-outline-success{
        float:right;
      }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Notes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inventory.php">Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Add</a>
      </li>
    </ul>
  </div>
</nav><br>

  <h1 class="text-center">Inventaris Barang</h1>
  <div class="container">
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">id</th>
        <th scope="col">tanggal</th>
        <th scope="col">kode_barang</th>
        <th scope="col">nama_barang</th>
        <th scope="col">uraian_barang</th>
        <th scope="col">distributor</th>
        <th scope="col">kwantitas</th>
        <th scope="col">thn</th>
        <th scope="col">asal_barang</th>
        <th scope="col">tgl_perolehan</th>
        <th scope="col">keadaan_barang</th>
        <th scope="col">harga</th>
        <th scope="col">ket</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $invtry) :?>
    <?php $number++;?>    
      <tr>
        <th scope="row"><?php echo "$number"?></th>
        <td><?php echo "$invtry[no]";?></td>
        <td><?php echo "$invtry[tanggal]";?></td>
        <td><?php echo "$invtry[kode_barang]";?></td>
        <td><?php echo "$invtry[nama_barang]";?></td>
        <td><?php echo "$invtry[uraian_barang]";?></td>
        <td><?php echo "$invtry[distributor]";?></td>
        <td><?php echo "$invtry[kwantitas]";?></td>
        <td><?php echo "$invtry[thn]";?></td>
        <td><?php echo "$invtry[asal_barang]";?></td>
        <td><?php echo "$invtry[tgl_perolehan]";?></td>
        <td><?php echo "$invtry[keadaan_barang]";?></td>
        <td><?php echo "$invtry[harga]";?></td>
        <td><?php echo "$invtry[ket]";?></td>
        <td><?php echo "<a href='edit.php?kode=$invtry[no]'>Edit</a> | <a href='delete.php?kode=$invtry[no]'>Delete</a>"; ?></td>
      </tr>
      <?php endforeach; ?>
     </tbody>
   </table>
 </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>