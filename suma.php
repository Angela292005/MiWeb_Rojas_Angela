<?php
$a = 5;
$b = 3;
$suma = $a + $b;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Suma</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial;
            text-align: center;
        }
        .card {
            background: white;
            padding: 20px;
            margin: 100px auto;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        h1 {
            color: #0077b6;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Resultado</h1>
    <p>La suma de <?php echo $a; ?> + <?php echo $b; ?> es:</p>
    <h2><?php echo $suma; ?></h2>
</div>

</body>
</html>