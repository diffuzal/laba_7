<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Города на букву "К"</title>
</head>
<body>

<?php
$regions_cities = array(
    'Московская область' => array('Москва', 'Зеленоград', 'Клин'),
    'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
    // Добавьте другие области и города по необходимости
);

echo '<p>Города на букву "К":</p>';
echo '<ul>';

foreach ($regions_cities as $region => $cities) {
    echo '<li>' . $region . ': ';
    $k_cities = array_filter($cities, function($city) {
        return mb_substr($city, 0, 1) === 'К';
    });
    echo implode(', ', $k_cities) . '</li>';
}

echo '</ul>';
?>

</body>
</html>