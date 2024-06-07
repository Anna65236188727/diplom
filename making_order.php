<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Проверяем, был ли запрос отправлен методом POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Если нет, просто продолжаем выполнение скрипта без проверки наличия ключей в $_POST
} else { // Теперь мы уверены, что метод запроса - POST
    if (!isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['sity'], $_POST['delivery_method'], $_POST['recipient_name'], $_POST['street'], $_POST['house'], $_POST['apartment'], $_POST['order_comment'], $_POST['total_price'], $_POST['checkbox'])) {
        die("Не все поля формы были заполнены");
    }

    // Получение данных из POST запроса
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sity = $_POST['sity'];
    $delivery_method = $_POST['delivery_method'];
    $recipient_name = $_POST['recipient_name'];
    $street = $_POST['street'];
    $house = $_POST['house'];
    $apartment = $_POST['apartment'];
    $order_comment = $_POST['order_comment'];
    $total_price = $_POST['total_price'];
    $checkbox = $_POST['checkbox'] == 'on' ? true : false;

    // Подготовка SQL запроса
    $sql = "INSERT INTO orders (name, email, phone, sity, delivery_method, recipient_name, street, house, apartment, order_comment, total_price, checkbox) 
    VALUES ('$name', '$email', '$phone', '$sity', '$delivery_method', '$recipient_name', '$street', '$house', '$apartment', '$order_comment', '$total_price', '$checkbox')";

    if ($conn->query($sql) === TRUE) {
        echo "Заказ успешно добавлен!";
    } else {
        echo "Ошибка: " . $conn->error;
    }

    // Закрытие соединения
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Оформление заказа</title>
</head>

<body>
    <?php 
    include 'header.php'; 
    ?>
    <div class="making_order">
        <div class="container">
            <ul class="breadcrumb_black">
                <li><a class="ul18_gray" href="index.html">Главная</a></li>
                <li><a class="ul18_gray" href="product_milk.html">Игрушка из дерева Молоковоз</a></li>
                <li><a class="ul18_gray" href="basket.html">Корзина</a></li>
                <li class="ul18_gray">Оформление заказа</li>
            </ul>
            <div class="ur30_black name_basket">Оформление заказа</div>
            <div class="making_order_block">
                <div class="making_order_product20">
                    <div class="ur20_black">Ваш заказ:</div>
                    <hr>
                    <div class="product_basket">
                        <div class="img_name_order">
                            <img class="width140" src="img/slaider_moloco1.png" alt="">
                            <div class="name_composition">
                                <div class="ur20_black">Игрушка из дерева Молоковоз</div>
                                <div class="ur18_gray">Бук, берёза, натуральное масло.</div>
                            </div>
                        </div>
                        <div class="ur26_black">1 шт</div>
                        <div class="ub36_oranj">850 ₽</div>
                    </div>
                    <hr>
                </div>
                <form action="making_order.php" method="post">
                    <input class="input_making_order ur18_gray" type="text" name="name" placeholder="Ваше имя" required>
                    <input class="input_making_order ur18_gray" type="email" name="email" placeholder="Ваш email"
                        required>
                    <input class="input_making_order ur18_gray" type="tel" name="phone"
                        placeholder="Телефон в формате 123-456-78" required>
                    <input class="input_making_order ur18_gray" type="email" name="sity" placeholder="Город" required>
                    <select class="input_making_order ur18_gray" name="delivery_method" required>
                        <option value="">Выберите метод доставки</option>
                        <option value="Почта">Почта</option>
                        <option value="Boxberry">Boxberry</option>
                        <option value="CDEK">CDEK</option>
                        <option value="Самовывоз">Самовывоз</option>
                    </select>
                    <input class="input_making_order ur18_gray" type="text" name="recipient_name"
                        placeholder="Имя получателя" required>
                    <input class="input_making_order ur18_gray" type="text" name="street" placeholder="Улица" required>
                    <input class="input_making_order ur18_gray" type="text" name="house" placeholder="Дом" required>
                    <input class="input_making_order ur18_gray" type="text" name="apartment"
                        placeholder="Квартира / офис" required>
                    <textarea class="input_making_order ur18_gray" name="order_comment"
                        placeholder="Комментарий к заказу" required></textarea>
                    <input class="input_making_order ur18_gray" type="number" name="total_price"
                        placeholder="Общая сумма" required>
                    <input class="input_making_order ur18_gray checkbox" type="checkbox" name="checkbox" value="1"
                        required> Согласен с условиями покупки
                    <input class="btn ur26_white" type="submit" value="Оформить заказ">
                </form>
            </div>
        </div>
    </div>
    <?php 
    include 'footer.php'; 
    ?>
</body>