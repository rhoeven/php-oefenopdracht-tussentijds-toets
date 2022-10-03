<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Keuze </h1>
<p>
        <?php
            session_start();
            echo "Beste " . $_SESSION['name']. ", uw keuze voor de film is geworden: ". $_SESSION['movie'];
        ?>
</p>
</body>
</html>