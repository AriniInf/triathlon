<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Payment Approval</title>
</head>
<body>
<?php foreach($users as $user){ ?>
    <h2>Hai <b><?= $user->nama_panjang ?></b>,</h2>
    <h4>Payment you made was rejected, please open your dashboard and upload a valid payment</h4>
    <table>
    <tr>
    <th>Order ID</th>
    <td><?= $user->id_invoice ?></td>
    </tr>
    <tr>
    <th>Order Date</th>
    <td><?= $user->tanggal_bayar ?></td>
    </tr>
    <tr>
    <th>Package</th>
    <td><?= $user->nama_sub ?></td>
    </tr>
    <tr>
    <th>Status</th>
    <td>Payment Rejected</td>
    </tr>
    </table>
<?php } ?>

</body>
</html>