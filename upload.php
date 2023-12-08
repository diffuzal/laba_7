<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, был ли выбран файл
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $uploadDir = "uploads/";  // Папка, куда будем сохранять загруженные файлы

        // Генерируем уникальное имя для файла, чтобы избежать перезаписи
        $uploadedFileName = uniqid() . '_' . basename($_FILES["file"]["name"]);
        $uploadPath = $uploadDir . $uploadedFileName;

        // Перемещаем файл из временной директории в папку uploads
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadPath)) {
            echo "Файл успешно загружен. Имя файла: " . $uploadedFileName;
        } else {
            echo "Ошибка при загрузке файла.";
        }
    } else {
        echo "Ошибка: Выберите файл для загрузки.";
    }
}
?>