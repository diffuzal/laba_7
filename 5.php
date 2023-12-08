<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод чисел от 0 до 9</title>
</head>
<body>

<?php
echo '<p>Числа от 0 до 9:</p>';
echo '<ul>';

for ($i = 0; $i < 10; print '<li>' . $i++ . '</li>') {}

echo '</ul>';
?>

</body>
</html>