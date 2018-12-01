<?php session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
</head>
<body>
    <h1>este es Principal prro :v </h1> 
</body>
</html>