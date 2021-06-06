<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Invoice</title>
  </head>
  <body>
    <?php foreach($users as $row){?>
      <h2 class="h2"><?= $row['no_ktp'] ?></h2>
      <h2 class="h2"><?= $row['nama_panjang'] ?></h2>
      <h2 class="h2"><?= $row['email'] ?></h2>
      <h2 class="h2"><?= $row['no_hp'] ?></h2>
      <h2 class="h2"><?= $row['alamat'] ?></h2>
    <?php }?> 
    <?php foreach($invoice as $row){?>
      <h2 class="h2"><?= $row['id_invoice'] ?></h2>
      <h2 class="h2"><?= $row['id_paket'] ?></h2>
      <h2 class="h2"><?= $row['harga'] ?></h2>
        <?php if($row['id_paket'] == 3){?>
            <?php if($row['age_group'] == 2){?>
                <h2 class="h2">18-20</h2>
            <?php } ?>
        <?php } ?>
        <?php if($row['status'] == 0){?>
            <h2 class="h2">Tertunda</h2>
        <?php } ?>
    <?php }?>   
  </body>
</html>