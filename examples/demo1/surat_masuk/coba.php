<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if(isset($_POST["submit"])){
        var_dump($_POST);

    }
?>

    <form action="" method="POST">

    <ul>
        <li>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama">
        </li>
         <button type="submit" name="submit">Test</button>
    </ul>
    </form>
</body>
</html>