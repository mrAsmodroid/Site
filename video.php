<?php
// Получение идентификатора видео из запроса
$videoId = $_POST['id'];
$path = $_POST['path'];

$videoId = "qwerty12345";
$pathWay = __DIR__ . "/" . $path;

$pathWay = __DIR__ . "/" . "PourLeSite" . "/" . "MON_AMI_HARRIS.mp4";

//echo  $pathWay;

if ($videoId == "qwerty12345")
{
	header("Content-Type: video/mp4");
	header("Content-Length: " . filesize($pathWay));
    header('Accept-Ranges: bytes');
	// readfile($pathWay);
    // $fileContents = file_get_contents($pathWay);
    // echo $fileContents;
    $handle = fopen($pathWay, 'rb');
    ob_clean();
    if ($handle) {
        while (!feof($handle)) {
            echo fread($handle, 8192); // Отправка данных по частям
            flush(); // Сброс буфера вывода
        }
        fclose($handle);
    }
}
?>

<?php
$videoId = $_POST['id'];
$path = $_POST['path'];

$videoId = "qwerty12345";

if ($videoId == "qwerty12345")
{
    // Генерация временной ссылки
    function generateTemporaryLink($videoPath, $expirationTime) {
        // Генерируем уникальный ключ для ссылки
        $key = generateUniqueKey();

        // Записываем информацию о ссылке в базу данных или файл
        // Ваш код сохранения информации о ссылке здесь

        // Строим временную ссылку со сгенерированным ключом
        $temporaryLink = 'http://194.187.149.254/mov/video.php?key=' . $key;

        return $temporaryLink;
    }

    // Генерация уникального ключа
    function generateUniqueKey() {
        $keyLength = 10; // Длина ключа (можете настроить по своему усмотрению)
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // Допустимые символы для ключа
        $keys = '';

        // Генерация случайного ключа
        for ($i = 0; $i < $keyLength; $i++) {
            $keys .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $keys;
    }

    // Получение пути к видео и время истечения ссылки из запроса
    //$pathWay = __DIR__ . "/" . $path;
    $pathWay = __DIR__ . "/" . "PourLeSite" . "/" . "MON_AMI_HARRIS.mp4"; 
    $expirationTime = time() + 7200; // Время истечения ссылки (в данном случае, через 1 час)

    // Генерация временной ссылки
    $temporaryLink = generateTemporaryLink($pathWay, $expirationTime);

    // Редирект пользователя на временную ссылку
    //header('Location: ' . $temporaryLink);
    exit;
}
?>