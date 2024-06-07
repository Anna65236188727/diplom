<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_shop";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Определение критерия сортировки
$sortingType = isset($_POST['sorting'])? $_POST['sorting'] : 'increasing'; // Изменено на 'increasing' по умолчанию
$collection = isset($_POST['collection'])? $_POST['collection'] : '';

$order = '';
switch ($sortingType) {
    case 'increasing':
        $order = 'ASC';
        break;
    case 'decreasing':
        $order = 'DESC';
        break;
}

// Фильтрация по подборкам
$collectionFilter = $collection!= ''? " AND collection_name = '$collection'" : "";

$filter = isset($_GET['filter'])? $_GET['filter'] : '';

// Выполнение запроса SELECT с учетом критерия сортировки и фильтрации по подборкам
$sql = "SELECT id, name_product, price, image_1, image_2, image_3, image_4, image_5, materials, size, weight, description FROM products WHERE 1 $collectionFilter ORDER BY price $order";
$result = $conn->query($sql);

// Закрытие соединения
$conn->close();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Каталог</title>
</head>

<body>
    <?php 
    include 'header.php'; 
    ?>
    <div class="catalog">
        <div class="container">
            <ul class="breadcrumb_black">
                <li><a class="ul18_gray" href="index.php">Главная</a></li>
                <li class="ul18_gray">Каталог</li>
            </ul>
            <div class="ur30_black name_basket">Каталог товаров Мастерской “Северный Игрушечник”</div>
                <form class="filters" action="" method="post">
                    <select class="filters_sorting ur20_black" name="sorting">
                        <option value="increasing" <?php echo isset($_POST['sorting']) && $_POST['sorting'] == 'increasing' ? 'selected' : ''; ?>>По возрастанию цены</option>
                        <option value="decreasing" <?php echo isset($_POST['sorting']) && $_POST['sorting'] == 'decreasing' ? 'selected' : ''; ?>>По убыванию цены</option>
                    </select>
                    <select class="filters_sorting ur20_black" name="collection">
                        <option value="">Все товары</option>
                        <option value="Техника" <?php echo isset($_POST['collection']) && $_POST['collection'] == 'Техника' ? 'selected' : ''; ?>>Техника</option>
                        <option value="Новогодняя коллекция" <?php echo isset($_POST['collection']) && $_POST['collection'] == 'Новогодняя коллекция' ? 'selected' : ''; ?>>Новогодняя коллекция
                        </option>
                        <option value="Развивающие игрушки" <?php echo isset($_POST['collection']) && $_POST['collection'] == 'Развивающие игрушки' ? 'selected' : ''; ?>>Развивающие игрушки</option>
                    </select>
                    <input class="ur26_white button" type="submit" value="Применить фильтр">
                </form>
            <div class="cards">
                <?php
                while ($row = $result->fetch_assoc()) {

                    $detailUrl = "product.php?id=" . urlencode($row['id']);

                    echo '<a href="' . $detailUrl . '">';
                    echo '<div class="card">';
                    echo '<img class="border-radius" src="uploads/' . $row['image_1'] . '" alt="">';
                    echo '<div class="price_description">';
                    echo '<div class="ub26_black">' . $row['price'] . ' ₽</div>'; // Вывод цены
                    echo '<div class="ur18_black">' . $row['name_product'] . '</div>'; // Вывод названия продукта
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                }
                ?>
            </div>
            <div class="news_btn">
                <a href="#"><button class="button ur26_white">Загрузить ещё</button></a>
            </div>
        </div>
    </div>
    <?php 
    include 'footer.php'; 
    ?>
    <script>
        const toppings = ["пепперони", "грибы", "ветчина", "ананас"]; 

        // Функция для переключения видимости выпадающего списка
        document.querySelector('.dropdown').addEventListener('click', function (event) {
            this.querySelector('ul').style.display = 'block';
            event.stopPropagation(); // прекращаем дальнейшую передачу события!
        });

        window.addEventListener('click', function () {
            document.querySelector('.dropdown ul').style.display = 'none';
        });
    </script>
</body>