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
<style>
body { font-family: Arial; text-align:center; background:#ffe; }
.card {
    margin:100px auto;
    padding:20px;
    width:300px;
    background:white;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}
</style>
</head>
<body>

<div class='card'>
<h2>Factorial</h2>
<p>El factorial de $num es:</p>
<h3>$factorial</h3>
</div>

</body>
</html>
";
?>