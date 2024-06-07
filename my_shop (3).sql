-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2024 г., 11:29
-- Версия сервера: 8.2.0
-- Версия PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `sity` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `delivery_method` enum('Почта','Boxberry','CDEK','Самовывоз') COLLATE utf8mb4_general_ci NOT NULL,
  `recipient_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `street` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `house` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `apartment` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `order_comment` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `checkbox` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `sity`, `delivery_method`, `recipient_name`, `street`, `house`, `apartment`, `order_comment`, `total_price`, `checkbox`) VALUES
(1, '1', '1', '1', '1', 'Почта', '1', '1', '1', '1', '1', 1.00, 1),
(2, '2', '2@mail.com', '123-133', 'CDEK', 'CDEK', '2', '2', '2', '2', '22', 2.00, 0),
(3, '2', '2@mail.com', '123-133', 'CDEK', 'CDEK', '2', '2', '2', '2', '22', 2.00, 0),
(4, '2', '2@mail.com', '123-133', 'CDEK', 'CDEK', '2', '2', '2', '2', '22', 2.00, 0),
(5, 'Анна Подосёнова', 'annadance3@gmail.com', '89005051108', 'dasf@fdg', 'Почта', '2', '2', '2', '2', 'dsgs', 8.00, 0),
(6, 'Анна Подосёнова', 'annadance3@gmail.com', '89005051108', 'dasf@fdg', 'Почта', '2', '2', '2', '2', 'dsgs', 8.00, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `materials` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_5` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `collection_name` enum('Техника','Новогодняя коллекция','Развивающие игрушки') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name_product`, `materials`, `size`, `weight`, `price`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `description`, `collection_name`, `quantity`) VALUES
(1, 'Деревянная машинка \"Молоковоз\"', 'бук, берёза, натуральное масло', '12*5, 5*8,5 см', '140 г', 850.00, 'molocovoz.png', 'molocovoz2.png', 'molocovoz3.png', 'molocovoz4.png', '', '\"Машина-корова\"... Оказывается, так смешно называют молоковоз её водители.\r\nМы сделали машинку из светлых пород дерева. Как будто её вареной сгущёнкой облили.\r\nМолоковоз также представляет серию спецтехники по мотивам эскизов Вологодской фабрики игрушек.\r\nК машинке приятно прикасаться: все элементы в ней округлые, без острых углов, так что малыш не поранится в процессе игры.\r\nС «Коровкой» можно придумывать игры на демонстрацию цепочки производства продуктов питания и доставки их покупателям. Например, рассказать о том, как молоко оказывается в молоковозе.', 'Техника', 8),
(2, 'Деревянная машинка \"Почта\"', 'дерево, масло', '12*5,5*8 см', '170г', 850.00, 'pochta1.png', 'pochta2.png', 'pochta3.png', '', '', 'А какая машинка возит радостные, не очень радостные, весёлые послания или посылки, бандероли?\r\n\r\nКонечно, ПОЧТОВОЗ. Мы сделали его ярким, удобным и очень быстрым. Так что пишите письма - мы обязательно доставим адресатам.', 'Техника', 3),
(3, 'Деревянная машинка \"Малыш\"', 'бук, орех', '6*7*7,5 см', '110 г', 450.00, 'malih1.png', 'malih2.png', 'malih3.png', 'malih4.png', '', 'Яркая машинка с гладкими краями станет украшением игрушечного гаража.\r\n\r\nЕё удобно держать в руке, а благодаря форме с отверстиями даже маленькая ручка сможет ухватиться за новое авто.\r\n\r\nМашинка может использоваться для игр дома, в детских садах и на уроках в детских садах', 'Техника', 6),
(4, 'Деревянная игрушка Трактор с прицепом \"Лес\"', 'дерево', '16*6*9 см', '240 г', 950.00, 'forest1.png', 'forest2.png', 'forest3.png', 'forest4.png', '', 'Трудолюбивый Трактор обзавёлся грузом. Теперь он не только тянет машинки на буксире, подвозит других игрушек, но и сам везёт брёвна для строительства новых зданий в Царстве Игрушек.', 'Техника', 12),
(6, 'Деревянная игрушка каталка \"Жираф\"', 'бук, орех, берёза', '18*11,5*6 см', '', 950.00, 'giraffe1.png', 'giraffe2.png', 'giraffe3.png', '', '', 'Каталка - незаменимый помощник в играх и на занятиях в детских садах, студиях раннего развития.\r\n\r\nЖирафик может:\r\n-ездить от задания к заданию;\r\n-становиться переходящей наградой;\r\n-стать подвижным помощником на уроках.\r\n\r\nКроме того, игры с каталкой: развивают мелкую моторику, координацию и смекалку.', 'Развивающие игрушки', 18),
(5, 'Набор деревянных машинок \"Техника\"', 'бук, берёза, грецкий орех, натуральное масло', 'размер каждой машинки 11-12 см', '', 3750.00, 'technic1.png', 'technic2.png', 'technic3.png', 'technic4.png', '', 'Очень полезный набор.\r\n\r\nЕщё какой полезный! Ведь в нём целых ПЯТЬ машинок!\r\n\r\nБез этого спецтранспорта не обойтись, если вы задумали большую стройку или организовали прибыльную ферму.\r\n\r\nА сколько игрушек можно сделать водителями! Безработными точно никто не останется.', 'Техника', 15),
(7, 'Деревянная игрушка каталка \"Уточка\"', 'берёза, бук, грецкий орех, натуральное масло', '10*5,5*10 см', '140г', 850.00, 'duck1.png', 'duck2.png', 'duck3.png', 'duck4.png', '', 'Уточка-каталка\r\n\r\nУдивительный ребёнок!\r\nТолько вышел из пелёнок\r\nМожет плавать и нырять,\r\nКак его родная мать!\r\n\r\nЗабавная Уточка из разных пород дерева понравится и девочкам, и мальчикам.\r\n\r\nС Уточкой весело и очень удобно играть. Её размеры позволяют брать игрушку с собой в дорогу, на приём в поликлинику.\r\n\r\nКаталки - это не только познавательно, но и удобно.', 'Развивающие игрушки', 3),
(8, 'Деревянная игрушка каталка \"Дракончик\"', 'бук, грецкий орех, клён, натуральное масло', '10*9*3,5 см', '', 850.00, 'dragon_catalka1.png', 'dragon_catalka2.png', 'dragon_catalka3.png', '', '', 'Добродушный Дракончик-каталка.\r\n\r\nМилый Дракоша на колёсиках сделан из разных пород дерева: он приятный на ощупь и очень симпатичный внешне.\r\n\r\nЭта игрушка станет любимым другом малыша и полезным помощником взрослых в обучающих играх. Например, в обучении чтению: Дракоша катается от буквы к букве и знакомит ребёнка с алфавитом.\r\n\r\nКаталку можно привлекать на занятиях в школах раннего развития, в работе с логопедом и дома.', 'Развивающие игрушки', 4),
(9, 'Игрушка из дерева \"Дракончик\"', 'бук, грецкий орех, клён, натуральное масло', '10*9*3,5 см', '', 650.00, 'dragon1.png', 'dragon2.png', 'dragon3.png', 'dragon4.png', 'dragon5.png', 'НОВИНКА! Братья-дракоши.\r\n\r\nДружные, смешливые, в меру упитанные и очень добродушные!\r\n\r\nИзготовлены из разных пород дерева, гладкие, приятные на ощупь и универсальны для любых игр: от обучающих до коротающих время в очереди в поликлинике.\r\n\r\nДракончиков можно передвигать, поворачивая вправо-влево, можно пересчитывать шипы на гребне, а можно рассказывать сказки и стихи от имени Дракоши.', 'Развивающие игрушки', 6),
(12, 'Деревянная игрушка каталка \"Зайка\"', 'берёза, бук, грецкий орех, натуральное масло', '12*5*11 см', '120г', 950.00, 'bunny1.png', 'bunny2.png', 'bunny3.png', 'bunny4.png', 'bunny5.png', 'Очаровательный Зайка обязательно понравится вашему малышу. Ведь он -маневренный,\r\n-удобный в управлении и ооочень приятный на ощупь.\r\n\r\nА как же иначе, если речь о деревянной игрушке?!\r\n\r\nКаталка подходит для самых маленьких, только-только познающих мир и для деток постарше, которые учатся различать лево - право, понимать, как придать ускорение предмету.', 'Развивающие игрушки', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
