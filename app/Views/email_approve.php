<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Approval</title>
</head>
<body>

<?php foreach($users as $user){ ?>
    <h2>Hello <b><?= $user->nama_panjang ?></b>,</h2>
    <h4>Your Invoice is confirmed, Registration Success !!</h4>
    <table>
        <tr>
            <th style="text-align:left">Order ID</th>
            <td><?= $user->id_invoice ?></td>
        </tr>
        <tr>
            <th style="text-align:left">Order Date</th>
            <td><?= $user->tanggal_bayar ?></td>
        </tr>
            <tr>
            <th style="text-align:left">Package</th>
            <td><?= $user->nama_sub ?></td>
            </tr>
            <tr>
            <th style="text-align:left">Status</th>
            <td>Payment Completed</td>
        </tr>
    </table><br><br>


<?php } 

?>


    <table >
        <thead >
          <tr style="text-align: left; padding: 8px;">
            <th scope="col" style=" border: 1px solid black;">#</th>
            <th scope="col" style=" border: 1px solid black;">Registration ID</th>
            <th scope="col" style=" border: 1px solid black;">Full Name</th>
            <th scope="col" style=" border: 1px solid black;">ID Number</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; 
          foreach($members as $member){ ?>       
           <tr style=" border: 1px solid black;">
             
            <td style=" border: 1px solid black;"><?= $no++ ?></td>
            <td style=" border: 1px solid black;"><?= $member['id_regis'] ?></td>
            <td style=" border: 1px solid black;"><?= $member['nama_panjang'] ?></td>
            <td style=" border: 1px solid black;"><?= $member['no_ktp'] ?></td>
          </tr>
          <?php } ?>
        </tbody>
    </table>



</body>
</html>