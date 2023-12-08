<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Текущее время с правильными склонениями</title>
</head>
<body>

<h1>Текущее время с правильными склонениями</h1>

<?php
// Устанавливаем часовой пояс в Московское время
date_default_timezone_set('Europe/Moscow');

function getCurrentTime() {
    // Получаем текущее время
    $currentTime = time();

    // Получаем текущий час и минуту
    $hours = date('G', $currentTime);
    $minutes = date('i', $currentTime);

    // Определяем склонение для часов
    $hoursForm = getWordForm($hours, 'час', 'часа', 'часов');

    // Определяем склонение для минут
    $minutesForm = getWordForm($minutes, 'минута', 'минуты', 'минут');

    // Составляем строку с отформатированным временем
    $formattedTime = "{$hours} {$hoursForm} {$minutes} {$minutesForm}";

    return $formattedTime;
}

function getWordForm($number, $form1, $form2, $form5) {
    $number = abs($number) % 100;
    $mod = $number % 10;

    if ($number >= 11 && $number <= 19) {
        return $form5;
    } elseif ($mod == 1) {
        return $form1;
    } elseif ($mod >= 2 && $mod <= 4) {
        return $form2;
    } else {
        return $form5;
    }
}

// Пример использования
echo "<p>Текущее время в Москве: " . getCurrentTime() . "</p>";
?>

</body>
</html>