<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Транслитерация и замена пробелов</title>
</head>
<body>

<h1>Транслитерация и замена пробелов</h1>

<form action="#" method="post">
    <label for="inputString">Введите строку на русском:</label>
    <input type="text" id="inputString" name="inputString" required>
    <button type="submit">Транслитерировать</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обработка формы при отправке
    $inputString = $_POST["inputString"];
    $result = transliterateAndReplaceSpaces($inputString);
    echo "<p>Результат: $result</p>";
}

function transliterateAndReplaceSpaces($inputString) {
    $translitTable = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
        'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
        ' ' => '_',
    );

    $transliterated = strtr(mb_strtolower($inputString, 'UTF-8'), $translitTable);

    return $transliterated;
}
?>

</body>
</html>