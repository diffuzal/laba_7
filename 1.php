<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP и HTML</title>
</head>
<body>

<h1>Пример подключения PHP к HTML</h1>

<?php
function power($val, $pow) {
    // Базовый случай: если степень равна 0, результат всегда равен 1
    if ($pow == 0) {
        return 1;
    }
    // Рекурсивный случай: умножаем число на результат возведения в степень (степень - 1)
    else {
        return $val * power($val, $pow - 1);
    }
}

// Пример использования
$val = 2;
$pow = 3;
$result = power($val, $pow);
echo "<p>{$val} в степени {$pow} равно {$result}</p>";
?>

</body>
</html>