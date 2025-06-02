-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: 01 مايو 2025 الساعة 04:47
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4475128_sights`
--
CREATE DATABASE IF NOT EXISTS `4475128_sights` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4475128_sights`;

-- --------------------------------------------------------

--
-- بنية الجدول `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`) VALUES
(1, 'موسم الرياض', 'مهرجان ترفيهي ضخم يُقام من أكتوبر حتى فبراير ، يشمل الفعاليات ، مسرحيات ، معارض .', 'Raiydah.png'),
(2, 'معرض LEAP', 'مؤتمر تقني عالمي يُقام سنويًا في فبراير في الرياض ، يجمع قادة التكنولوجيا والمبتكرين.', 'leap.png'),
(3, 'موسم الدرعية', 'يُقام من ديسمبر حتى مارس ، ويحتفي بالتراث والثقافة السعودية بفعاليات رياضية وترفيهية', 'riyadh3.jpg'),
(4, 'معرض الرياض الدولي للكتاب', 'حدث ثقافي سنوي في مارس ، يجمع دور نشر عالمية والكتاب ، ويقدم كتبا متنوعة في فعاليات ثقافية مميزة.', 'riyadh4.jpg'),
(5, 'مهرجان الرياض للمأكولات والمشروبات', 'يُقام في مايو ، ويقدم تجارب فريده لعشاق الطعام ، تجمع أشهر الطها والمطاعم مع عروض تذوق وفعاليات ترفيهية .', 'ksafood.png'),
(6, 'مهرجان الملك عبدالعزيز للصقور', 'يُقام في ديسمبر ، حدث سنوي يعزز تراث الصقارة ، ويضم مسابقات وعروضًا ثقافية .', 'ksa1.png'),
(7, 'مهرجان الرياض للألعاب الإلكترونية', 'حدث سنوي يُقام في نوفمبر ، يستضيف بطولات يجمع عشاق الألعاب من جميع الأعمار، ويقدم فعاليات ومسابقات تتعلق بأحدث الألعاب والتقنيات في عالم الألعاب', 'ksa2.png'),
(8, 'معرض هوريكا (HORECA)', 'أحد أكبر معارض الضيافة ، يُقام من 5الى 7 سبتمبر وتركزعلى صناعة الضيافة والمأكولات، وقطاع الضيافة و المطاعم.', 'food.png');

-- --------------------------------------------------------

--
-- بنية الجدول `eventseng`
--

DROP TABLE IF EXISTS `eventseng`;
CREATE TABLE IF NOT EXISTS `eventseng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `eventseng`
--

INSERT INTO `eventseng` (`id`, `title`, `description`, `image`) VALUES
(1, 'Riyadh Season', 'A large entertainment festival held from October to February, featuring events, plays, and exhibitions.', 'Raiydah.png'),
(2, 'LEAP Exhibition', 'A global technology conference held annually in February in Riyadh, gathering technology leaders and innovators.', 'leap.png'),
(3, 'Diriyah Season', 'Held from December to March, celebrating Saudi heritage and culture with sports and entertainment events.', 'riyadh3.jpg'),
(4, 'Riyadh International Book Fair', 'An annual cultural event in March, gathering international publishers and authors, offering diverse books in distinguished cultural activities.', 'riyadh4.jpg'),
(5, 'Riyadh Food & Beverage Festival', 'Held in May, offering unique experiences for food lovers, bringing together famous chefs and restaurants with tasting sessions and entertainment.', 'ksafood.png'),
(6, 'King Abdulaziz Falconry Festival', 'Held in December, an annual event that promotes falconry heritage, including competitions and cultural shows.', 'ksa1.png'),
(7, 'Riyadh Electronic Games Festival', 'An annual event held in November, hosting tournaments that gather gaming enthusiasts of all ages, featuring events and competitions related to the latest games and technologies.', 'ksa2.png'),
(8, 'HORECA Exhibition', 'One of the largest hospitality exhibitions, held from September 5 to 7, focusing on the hospitality, food, and restaurant sectors.', 'food.png');

-- --------------------------------------------------------

--
-- بنية الجدول `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `number`, `message`) VALUES
(0, 'test', 'example@gmail.com', '', 'hello?');

-- --------------------------------------------------------

--
-- بنية الجدول `shopping_places`
--

DROP TABLE IF EXISTS `shopping_places`;
CREATE TABLE IF NOT EXISTS `shopping_places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `shopping_places`
--

INSERT INTO `shopping_places` (`id`, `title`, `description`, `image`, `type`) VALUES
(1, 'النخيل مول', 'يعتبر من المراكز التجارية الكبرى في الرياض، ويتميز بتنوع محلاته التي تقدم الأزياء، الإلكترونيات، والمستلزمات المنزلية، بالإضافة إلى العديد من المطاعم والمقاهي.\r\n\r\nساعات العمل السبت إلى الخميس:\r\n9:30 صباحًا - 11:00 مساءً \r\nيوم الجمعة: \r\n2:00 مساءً – 11 مساءً\r\n', 'nakheel_mall.jpg', 'عصري'),
(2, 'سوق الزل', 'سوق الزل الشعبي يقع في منطقة قصر الحكم بالرياض. تأسس عام 1901م ويتميز ببيع المنتجات التراثية مثل البشوت والسيوف والسجاد ( الزل ) والأحذية، بالإضافة إلى كونه مقرًا للصناعات الحرفية.\r\n\r\nساعات العمل جميع الأيام:\r\n3:30 مساءً -10:30 مساءً \r\n', 'al_zal.jpg', 'شعبي'),
(3, 'سوق طيبة', 'سوق طيبة الشعبي يقع في حي الملك فهد بالرياض. تأسس عام 1989م ويتميز بأنه أكبر تجمع لمحلات الملابس والذهب، المجوهرات .\r\n\r\nساعات العمل السبت إلى الخميس:\r\n9:00 صباحًا -12:00 صباحًا\r\nيوم الجمعة: \r\n4:00 مساءً –11:0 مساءً\r\n', 'shopping.png', 'شعبي'),
(4, 'سوق التعمير', 'سوق التعمير الشعبي يقع في منطقة قصر الحكم بالرياض حي الديرة. تأسس عام 1994م ويتميز بأنه يضم العديد من متاجر الملابس والعبايات البخور،العطور،العطارة . بالإضافة إلى كونه مقرًا مميزاً لبيع القهوة السعودية بأنواعها .\r\n\r\nساعات العمل السبت إلى الخميس:\r\n9:00 صباحًا -12:00 ظهرًا\r\n4:00 مساءً –12:0 صباحًا\r\nيوم الجمعة: \r\n4:00 مساءً –12:00 صباحًا\r\n', 'alt3meer.jpg', 'شعبي'),
(5, 'شارع الثميري', 'شارع الثميري الشعبي يقع في حي الديرة . تأسس عام 1923م وهو أقدم شارع في مدينة الرياض ويتميز بسلع عتيقة وذات قيمة كبيرة مثل التحف الخناجر،الساعات بالإضافة إلى الحرف اليدوية والأقمشة .\r\n\r\nساعات العمل السبت إلى الخميس:\r\n9:00 صباحًا -12:00 ظهرًا\r\n4:00 مساءً –12:0 صباحًا\r\nيوم الجمعة: \r\n4:00 مساءً –12:00 صباحًا', 'althmeri.jpg', 'شعبي'),
(6, 'مركز المملكة', 'يقع في قلب الرياض ويعد من أشهر المولات الفاخرة في المدينة. يتميز بتصميمه العصري ويضم العديد من الماركات العالمية.\r\n\r\nساعات العمل السبت إلى الخميس:\r\n9:30 صباحًا -10:30 مساءً \r\nيوم الجمعة: \r\n3:35 مساءً – 10:30 مساءً\r\n', 'kingdom.jpg', 'عصري'),
(7, 'الفيصلية مول', 'هو مركز تجاري راقٍ في الرياض، يشتهر بهندسته المعمارية الفريدة وبرج الفيصلية المميز. يحتوي على مجموعة من المتاجر الراقية .\r\n\r\nساعات العمل السبت إلى الخميس:\r\n10:00 صباحًا - 11:00 مساءً \r\nيوم الجمعة: \r\n2:00 مساءً – 11 مساءً\r\n', 'mall.png', 'عصري'),
(8, 'بارك أفنيو', 'يضم المركز مجموعة متنوعة من المحلات التجارية، المطاعم، والمقاهي، بالإضافة إلى مرافق ترفيهية للعائلات. يُعتبر وجهة مميزة للتسوق والترفيه في الرياض. \r\nبالإضافة إلى سوبر ماركت “مانويل ماركت”\r\n\r\nيستغرق الوصول إلى “بارك أفنيو” حوالي 20 إلى 25 دقيقة بالسيارة. حسب حركة المرور', 'park.jpeg', 'عصري'),
(9, 'غرناطة مول', 'يُعتبر من أكبر مراكز التسوق في المدينة، حيث يضم طابقين يحتويان على مجموعة واسعة من المحلات التجارية العالمية والمحلية، بالإضافة إلى صالات ألعاب للأطفال ومرافق ترفيهية أخرى. \r\nبالإضافة إلى سوبر ماركت “كارفور هايبر ماركت \"\r\n\r\nيستغرق الوصول إلى “غرناطة مول” حوالي 20 إلى 25 دقيقة بالسيارة. حسب حركة المرور', 'مول-غرناطة.png', 'عصري'),
(10, 'الرياض بارك', 'يتميز بتصميمه العصري ويضم مجموعة متنوعة من المحلات التجارية الراقية، بالإضافة إلى منطقة “ذا زون” الخارجية التي تحتوي على مطاعم ومقاهٍ توفر أماكن جلوس داخلية وخارجية، مما يجعلها مثالية للاستمتاع بالطقس اللطيف.\r\n\r\nبالإضافة إلى سوبر ماركت “كارفور هايبر ماركت \"\r\n\r\nيستغرق الوصول إلى “الرياض بارك” حوالي 25 إلى 30 دقيقة بالسيارة. حسب حركة المرور', 'الرياض-بارك.png', 'عصري'),
(11, 'واجهة الرياض', 'تميز “واجهة الرياض” بتصميم معماري يجمع بين المساحات الخضراء والمناظر المائية، مما يخلق بيئة مريحة وجاذبة للزوار. تحتوي على مجموعة من المحلات التجارية، المطاعم، والمقاهي، بالإضافة إلى مرافق ترفيهية مخصصة للعائلات.\r\n\r\nيستغرق الوصول إلى “واجهة الرياض” حوالي 15 إلى 20 دقائق بالسيارة. حسب حركة المرور', 'واجهة-الرياض.png', 'عصري');

-- --------------------------------------------------------

--
-- بنية الجدول `shopping_placesang`
--

DROP TABLE IF EXISTS `shopping_placesang`;
CREATE TABLE IF NOT EXISTS `shopping_placeseng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `shopping_placeseng`
--

INSERT INTO `shopping_placeseng` (`id`, `title`, `description`, `image`, `type`) VALUES
(1, 'Nakheel Mall', 'One of the major shopping centers in Riyadh, known for its variety of stores offering fashion, electronics, and household supplies, along with many restaurants and cafes.\r\n\r\nWorking hours Saturday to Thursday:\r\n9:30 AM - 11:00 PM\r\nFriday:\r\n2:00 PM – 11:00 PM\r\n', 'nakheel_mall.jpg', 'Modern'),
(2, 'Al-Zal Market', 'The traditional Al-Zal Market is located in the Qasr Al-Hukm area of Riyadh. Established in 1901, it is known for selling heritage products like bishts, swords, carpets (zal), and shoes, as well as being a center for handicrafts.\r\n\r\nWorking hours daily:\r\n3:30 PM - 10:30 PM\r\n', 'al_zal.jpg', 'Traditional'),
(3, 'Taybah Market', 'Taybah traditional market is located in the King Fahd neighborhood in Riyadh. Established in 1989, it is the largest cluster of clothing, gold, and jewelry shops.\r\n\r\nWorking hours Saturday to Thursday:\r\n9:00 AM - 12:00 AM\r\nFriday:\r\n4:00 PM – 11:00 PM\r\n', 'shopping.png', 'Traditional'),
(4, 'Al-Tameer Market', 'Al-Tameer traditional market is located in Qasr Al-Hukm area, Al-Deira district, Riyadh. Established in 1994, it features many stores selling clothes, abayas, incense, perfumes, and spices. It is also a notable place for selling various types of Saudi coffee.\r\n\r\nWorking hours Saturday to Thursday:\r\n9:00 AM - 12:00 PM\r\n4:00 PM – 12:00 AM\r\nFriday:\r\n4:00 PM – 12:00 AM\r\n', 'alt3meer.jpg', 'Traditional'),
(5, 'Al-Thumairi Street', 'Al-Thumairi traditional street is located in Al-Deira district. Established in 1923, it is the oldest street in Riyadh, known for antique and valuable goods such as antiques, daggers, watches, as well as handicrafts and fabrics.\r\n\r\nWorking hours Saturday to Thursday:\r\n9:00 AM - 12:00 PM\r\n4:00 PM – 12:00 AM\r\nFriday:\r\n4:00 PM – 12:00 AM', 'althmeri.jpg', 'Traditional'),
(6, 'Kingdom Center', 'Located in the heart of Riyadh, it is one of the most famous luxury malls in the city. Known for its modern design and hosting many international brands.\r\n\r\nWorking hours Saturday to Thursday:\r\n9:30 AM - 10:30 PM\r\nFriday:\r\n3:35 PM – 10:30 PM\r\n', 'kingdom.jpg', 'Modern'),
(7, 'Al Faisaliah Mall', 'A high-end shopping center in Riyadh, famous for its unique architecture and the iconic Faisaliah Tower. It contains a range of upscale stores.\r\n\r\nWorking hours Saturday to Thursday:\r\n10:00 AM - 11:00 PM\r\nFriday:\r\n2:00 PM – 11:00 PM\r\n', 'mall.png', 'Modern'),
(8, 'Park Avenue', 'The center includes a variety of shops, restaurants, and cafes, as well as family entertainment facilities. It is a distinctive destination for shopping and entertainment in Riyadh.\r\nIncludes "Manuel Market" supermarket.\r\n\r\nIt takes about 20 to 25 minutes by car to reach Park Avenue, depending on traffic.', 'park.jpeg', 'Modern'),
(9, 'Granada Mall', 'Considered one of the largest shopping centers in the city, it has two floors with a wide variety of international and local stores, as well as children’s play areas and other entertainment facilities.\r\nIncludes "Carrefour Hypermarket".\r\n\r\nIt takes about 20 to 25 minutes by car to reach Granada Mall, depending on traffic.', 'مول-غرناطة.png', 'Modern'),
(10, 'Riyadh Park', 'Known for its modern design and a variety of upscale stores, along with "The Zone" outdoor area that contains restaurants and cafes with indoor and outdoor seating, ideal for enjoying pleasant weather.\r\nIncludes "Carrefour Hypermarket".\r\n\r\nIt takes about 25 to 30 minutes by car to reach Riyadh Park, depending on traffic.', 'الرياض-بارك.png', 'Modern'),
(11, 'Riyadh Front', 'Riyadh Front features architectural design combining green spaces and water features, creating a comfortable and attractive environment for visitors. It includes a range of shops, restaurants, cafes, and family entertainment facilities.\r\n\r\nIt takes about 15 to 20 minutes by car to reach Riyadh Front, depending on traffic.', 'واجهة-الرياض.png', 'Modern');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
