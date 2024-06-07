<!-- ДОБАВЛЕНИЕ ТОВАРОВ В КОРЗИНУ -->

<?php
header('Content-Type: application/json');

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_shop";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

function addProductToCart($productId, $quantity = 1) {
    session_start(); // Начинаем сессию

    // Проверяем, установлен ли массив корзины в сессии
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Проверяем, есть ли уже этот продукт в корзине
    if (array_key_exists($productId, $_SESSION['cart'])) {
        // Увеличиваем количество существующего продукта
        $_SESSION['cart'][$productId] += $quantity;
    } else {
        // Добавляем новый продукт в корзину
        $_SESSION['cart'][$productId] = $quantity;
    }
}

if (isset($_POST['addToCart'])) {
    $productId = isset($_POST['productId'])? intval($_POST['productId']) : null;
    if ($productId!== null) {
        $quantity = isset($_POST['quantity'])? $_POST['quantity'] : 1; // Количество, полученное из формы
        addProductToCart($productId, $quantity); // Убедитесь, что функция addProductToCart определена здесь или подключена
        header("Location: product.php?id=$productId"); // Перенаправляем пользователя обратно на страницу продукта
        exit;
    }
}

$conn->close();
?>


<!-- УДАЛЕНИЕ ТОВАРОВ ИЗ КОРЗИНЫ -->
<?php
// header('Content-Type: application/json');

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST['productId'];
    
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
        
        // Здесь можно добавить логику для обновления общей стоимости корзины и т.д.
        
        header("Location: basket.php"); // Перенаправление обратно на страницу корзины
        exit;
    } else {
        echo "Товар не найден в корзине.";
    }
}
?>


<?php

// ОБНОВЛЕНИЕ КОЛИЧЕСТВА ТОВАРОВ В КОРЗИНЕ

if (isset($_POST['product_id'], $_POST['new_quantity'])) {
    $productId = $_POST['product_id'];
    $newQuantity = $_POST['new_quantity'];

    // Подключение к базе данных
    $mysqli = new mysqli('localhost', 'root', '', 'my_shop');
    if ($mysqli->connect_error) {
        die("Ошибка подключения: ". $mysqli->connect_error);
    }

    // Подготовка и выполнение запроса
    $stmt = $mysqli->prepare("UPDATE products SET quantity =? WHERE id =?");
    $stmt->bind_param('ii', $newQuantity, $productId);
    $stmt->execute();

    echo "Количество успешно обновлено";
    $stmt->close();
    $mysqli->close();
}

?>