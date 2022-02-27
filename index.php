<?php
require 'class.php';
$obj = new Calculator();
$result = "";
if(isset($_POST['+'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $result = $obj->add($a,$b);
    echo "<script>alert('Result = ".$result."');</script>";
}
elseif(isset($_POST['-'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $result = $obj->subtract($a,$b);
    echo "<script>alert('Result = ".$result."');</script>";
}
elseif(isset($_POST['*'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $result = $obj->multiply($a,$b);
    echo "<script>alert('Result = ".$result."');</script>";
}
elseif(isset($_POST['/'])){ 
    $a = $_POST['a'];
    $b = $_POST['b'];
    $result = $obj->divide($a,$b);
    echo "<script>alert('Result = ".$result."');</script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <style>
        form{
            width: 50%;
            margin: auto;
        }
        form input{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .btn{
            width: 100px;
            font-size: 30px;
            margin: 10px;
        }
    </style>

</head>
<body>
    <form method="post">
        <input type="text" class="form-control" name="a" placeholder="Enter First Number" id="">
        <input type="text" class="form-control" name="b" placeholder="Enter Second Number" id="">
        <input class="btn btn-primary" type="submit" name="+" value="+">
        <input class="btn btn-success" type="submit" name="-" value="-">
        <input class="btn btn-info" type="submit" name="*" value="*">
        <input class="btn btn-secondary" type="submit" name="/" value="/">
    </form>
    
</body>
</html>