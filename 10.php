<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простой калькулятор на PHP</title>
    <style>
        input {
            width: 50px;
        }
    </style>
</head>
<body>

<h1>Простой калькулятор на PHP</h1>

<form action="" method="post">
    <div>
        <label for="num1">Число 1:</label>
        <input type="text" id="num1" name="num1" value="<?= isset($_POST['num1']) ? $_POST['num1'] : '' ?>">
    </div>

    <div>
        <label for="operator">Оператор:</label>
        <select id="operator" name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </div>

    <div>
        <label for="num2">Число 2:</label>
        <input type="text" id="num2" name="num2" value="<?= isset($_POST['num2']) ? $_POST['num2'] : '' ?>">
    </div>

    <button type="submit">Вычислить</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем значения из формы
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operator = $_POST['operator'];

    // Выполняем вычисление в зависимости от выбранной операции
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            // Проверка деления на ноль
            if ($num2 == 0) {
                echo '<p style="color: red;">На ноль делить нельзя.</p>';
                break;
            }
            $result = $num1 / $num2;
            break;
        default:
            echo '<p style="color: red;">Выбрана некорректная операция.</p>';
            break;
    }

    // Выводим результат
    echo '<div><label>Результат:</label><input type="text" value="' . $result . '" readonly></div>';
}
?>

</body>
</html>