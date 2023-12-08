<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Области и города</title>
</head>
<body>

<?php
$regions_cities = array(
    'Московская область' => array('Москва', 'Зеленоград', 'Клин'),
    'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
    // Добавьте другие области и города по необходимости
);

echo '<p>Области и города:</p>';
echo '<ul>';

foreach ($regions_cities as $region => $cities) {
    echo '<li>' . $region . ': ' . implode(', ', $cities) . '</li>';
}

echo '</ul>';
?>

</body>
</html>