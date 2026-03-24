<?php
$a = 5;
$b = 3;
$suma = $a + $b;

echo "
<!DOCTYPE html>
<html>
<head>
    <title>Suma</title>
    <style>
        body {
            background-color: #e8f8f5;
            font-family: Arial;
            text-align: center;
            margin-top: 100px;
        }
        .box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0px 0px 10px gray;
        }
    </style>
</head>
<body>
    <div class='box'>
        <h2>Cálculo de Suma</h2>
        <p>$a + $b = <b>$suma</b></p>
    </div>
</body>
</html>
";
?>