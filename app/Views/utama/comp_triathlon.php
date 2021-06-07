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