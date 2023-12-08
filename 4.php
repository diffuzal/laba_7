<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод чисел с описаниями</title>
</head>
<body>

<?php
$num = 0;

echo '<p>Вывод чисел с описаниями:</p>';
echo '<ul>';

do {
    if ($num === 0) {
        echo '<li>' . $num . ' – это ноль</li>';
    } elseif ($num % 2 === 0) {
        echo '<li>' . $num . ' – четное число</li>';
    } else {
        echo '<li>' . $num . ' – нечетное число</li>';
    }

    $num++;
} while ($num <= 10);

echo '</ul>';
?>

</body>
</html>