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
    <?php echo $user ?>
    <?php foreach($paket as $row){?>
      <h2 class="h2"><?= $row['id_paket'] ?></h2>
      <h2 class="h2"><?= $row['nama_paket'] ?></h2>
          <div class="mb-5">  
              <span><?= $row['harga']?></span>
              <form action="/daftar" method="post">
                <input type="hidden" name="harga" value="<?= $row['harga']?>">
                <?php if($row['id_paket'] == 3){?>
                  <select name="age_group">
                    <option value="1">16-18</option>
                    <option value="2">18-20</option>
                    <option value="3">20-40</option>
                  </select>
                <?php } ?>
                <button name="id_paket" type="submit" value="<?=$row['id_paket'];?>">DAFTAR</button>
              </form>
          </div>
    <?php }?>   
  </body>
</html>