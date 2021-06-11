<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/post-coba">
    <!-- <input type="hidden" name="id[]" placeholder="nama1"> -->
    <input type="text" name="nama[]" placeholder="nama1">
    <input type="text" name="alamat[]" placeholder="alamat1">

    <!-- <input type="hidden" name="id[]" placeholder="nama1"> -->
    <input type="text" name="nama[]" placeholder="nama2">
    <input type="text" name="alamat[]" placeholder="alamat2">

 <button type="submit" name="submit">Simpan</button>
</form>
</body>
</html>
