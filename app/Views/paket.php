<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Paket</title>
  </head>
  <body>
  <?php foreach($paket as $row):?>
    <h2 class="h2"><?= $row['id_paket'] ?></h2>
    <h2 class="h2"><?= $row['nama_paket'] ?></h2>
        <div class="mb-5">  
            <span><?= $row['harga']?></span>
            <a href="/daftar/<?=$row['id_paket'];?>">Daftar</a>
        </div>
        
  </body>
  <?php endforeach;?>
</html>