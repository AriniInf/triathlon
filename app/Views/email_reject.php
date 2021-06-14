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
    <h2>Hai <b><?= $user->nama_panjang ?></b>,</h2>
    <h4>Pembayaran yang kamu lakukan ditolak, tolong unggah bukti bayar yang valid</h4>
    <table>
    <tr>
    <th>Order ID</th>
    <td><?= $user->id_invoice ?></td>
    </tr>
    <tr>
    <th>Tanggal Pembayaran</th>
    <td><?= $user->tanggal_bayar ?></td>
    </tr>
    <tr>
    <th>Paket</th>
    <td><?= $user->nama_sub ?></td>
    </tr>
    <tr>
    <th>Status</th>
    <td>Pembayaran ditolak</td>
    </tr>
    </table>
<?php } ?>

</body>
</html>