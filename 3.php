<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Числа, делящиеся на 3</title>
</head>
<body>

<?php
$num = 0;

echo '<p>Числа, делящиеся на 3 без остатка в промежутке от 0 до 100:</p>';
echo '<ul>';

while ($num <= 100) {
    if ($num % 3 === 0) {
        echo '<li>' . $num . '</li>';
    }
    $num++;
}

echo '</ul>';
?>

</body>
</html>