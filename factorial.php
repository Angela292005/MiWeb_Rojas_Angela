<?php
$num = 5;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "
<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
    <style>
        body {
            background-color: #fef9e7;
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
        <h2>📊 Cálculo de Factorial</h2>
        <p>El factorial de $num es: <b>$factorial</b></p>
    </div>
</body>
</html>
";
?>