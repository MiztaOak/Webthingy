-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- V�rd: 127.0.0.1
-- Tid vid skapande: 03 feb 2016 kl 01:13
-- Serverversion: 5.6.17
-- PHP-version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `prov20160201`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `Country` varchar(32) DEFAULT NULL,
  `City` varchar(32) DEFAULT NULL,
  `AccentCity` varchar(32) DEFAULT NULL,
  `Region` int(8) DEFAULT NULL,
  `Population` bigint(10) DEFAULT NULL,
  `Latitude` float DEFAULT NULL,
  `Longitude` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `cities`
--

INSERT INTO `cities` (`Country`, `City`, `AccentCity`, `Region`, `Population`, `Latitude`, `Longitude`) VALUES
('ae', 'dubai', 'Dubai', 3, 1137376, 25.2582, 55.3047),
('af', 'kabul', 'Kabul', 13, 3043589, 34.5167, 69.1833),
('am', 'yerevan', 'Yerevan', 11, 1093499, 40.1811, 44.5136),
('ao', 'luanda', 'Luanda', 20, 2776125, -8.8368, 13.2332),
('ar', 'cordoba', 'Cordoba', 5, 1441007, -31.4135, -64.1811),
('ar', 'rosario', 'Rosario', 21, 1218497, -32.9468, -60.6393),
('at', 'vienna', 'Vienna', 9, 1569315, 48.2, 16.3667),
('au', 'adelaide', 'Adelaide', 5, 1074168, -34.9287, 138.599),
('au', 'brisbane', 'Brisbane', 4, 1843459, -27.471, 153.024),
('au', 'melbourne', 'Melbourne', 7, 3730212, -37.8139, 144.963),
('au', 'perth', 'Perth', 8, 1446715, -31.9522, 115.861),
('au', 'sydney', 'Sydney', 2, 4394585, -33.8615, 151.205),
('az', 'baku', 'Baku', 9, 1116513, 40.3953, 49.8822),
('bd', 'dhaka', 'Dhaka', 81, 6493177, 23.7231, 90.4086),
('bd', 'khulna', 'Khulna', 82, 1342429, 22.8, 89.55),
('be', 'brussels', 'Brussels', 11, 1019022, 50.8333, 4.33333),
('bf', 'ouagadougou', 'Ouagadougou', 53, 1031330, 12.3703, -1.52472),
('bg', 'sofia', 'Sofia', 42, 1062065, 42.6833, 23.3167),
('br', 'belem', 'Bel�m', 16, 1407737, -1.45, -48.4833),
('br', 'belo horizonte', 'Belo Horizonte', 15, 2373255, -19.9167, -43.9333),
('br', 'brasilia', 'Bras�lia', 7, 2207812, -15.7833, -47.9167),
('br', 'campinas', 'Campinas', 27, 1031573, -22.9, -47.0833),
('br', 'curitiba', 'Curitiba', 18, 1718433, -25.4167, -49.25),
('br', 'fortaleza', 'Fortaleza', 6, 2416920, -3.31667, -41.4167),
('br', 'goiania', 'Goi�nia', 29, 1171209, -16.6667, -49.2667),
('br', 'guarulhos', 'Guarulhos', 27, 1169601, -23.4507, -46.5262),
('br', 'manaus', 'Manaus', 4, 1598227, -3.11333, -60.0253),
('br', 'nova iguacu', 'Nova Igua�u', 21, 1002129, -22.7592, -43.4319),
('br', 'porto alegre', 'Porto Alegre', 23, 1372763, -30.0333, -51.2),
('br', 'recife', 'Recife', 30, 1478118, -8.05, -34.9),
('br', 'rio de janeiro', 'Rio de Janeiro', 21, 6023742, -22.9, -43.2333),
('br', 'salvador', 'Salvador', 5, 2711903, -12.9833, -38.5167),
('br', 'sao paulo', 'S�o Paulo', 27, 10021437, -23.4733, -46.6658),
('by', 'minsk', 'Minsk', 4, 1742123, 53.9, 27.5667),
('ca', 'montreal', 'Montreal', 10, 3268513, 45.5, -73.5833),
('ca', 'toronto', 'Toronto', 8, 4612187, 43.6667, -79.4167),
('ca', 'vancouver', 'Vancouver', 2, 1837970, 49.25, -123.133),
('cd', 'kinshasa', 'Kinshasa', 6, 7787832, -4.3, 15.3),
('cd', 'lubumbashi', 'Lubumbashi', 5, 1374808, -11.6667, 27.4667),
('cg', 'brazzaville', 'Brazzaville', 12, 1115773, -4.25917, 15.2847),
('ci', 'abidjan', 'Abidjan', 82, 3692570, 5.30966, -4.01266),
('cl', 'santiago', 'Santiago', 12, 4837248, -33.45, -70.6667),
('cm', 'douala', 'Douala', 5, 1338144, 4.05028, 9.7),
('cm', 'yaounde', 'Yaound�', 11, 1299446, 3.86667, 11.5167),
('cn', 'anshan', 'Anshan', 19, 1199275, 41.1236, 122.99),
('cn', 'changchun', 'Changchun', 5, 2537421, 43.88, 125.323),
('cn', 'chengdu', 'Chengdu', 32, 3950437, 30.6667, 104.067),
('cn', 'chongqing', 'Chongqing', 33, 3967028, 29.5628, 106.553),
('cn', 'dalian', 'Dalian', 19, 2035307, 38.9122, 121.602),
('cn', 'datong', 'Datong', 24, 1052678, 40.0936, 113.291),
('cn', 'fushun', 'Fushun', 19, 1400646, 41.7, 123.883),
('cn', 'fuzhou', 'Fuzhou', 7, 1179720, 26.0614, 119.306),
('cn', 'guangzhou', 'Guangzhou', 30, 3152825, 23.1167, 113.25),
('cn', 'guiyang', 'Guiyang', 18, 1171633, 26.5833, 106.717),
('cn', 'handan', 'Handan', 10, 1358318, 36.5667, 114.533),
('cn', 'hangzhou', 'Hangzhou', 2, 1878129, 30.2936, 120.161),
('cn', 'harbin', 'Harbin', 8, 3229883, 45.75, 126.65),
('cn', 'hefei', 'Hefei', 1, 1388904, 31.8639, 117.281),
('cn', 'huainan', 'Huainan', 1, 1027655, 32.6264, 116.997),
('cn', 'jilin', 'Jilin', 5, 1881977, 43.8508, 126.56),
('cn', 'jinan', 'Jinan', 25, 2069266, 36.6683, 116.997),
('cn', 'kunming', 'Kunming', 29, 1023674, 25.0389, 102.718),
('cn', 'lanzhou', 'Lanzhou', 15, 1417742, 36.0564, 103.792),
('cn', 'luoyang', 'Luoyang', 9, 1390581, 34.6836, 112.454),
('cn', 'nanchang', 'Nanchang', 3, 1871351, 28.55, 115.933),
('cn', 'nanjing', 'Nanjing', 4, 3087010, 32.0617, 118.778),
('cn', 'peking', 'Peking', 22, 7480601, 39.9289, 116.388),
('cn', 'qingdao', 'Qingdao', 25, 1642245, 36.0986, 120.372),
('cn', 'rongcheng', 'Rongcheng', 30, 1001985, 23.5289, 116.364),
('cn', 'shanghai', 'Shanghai', 23, 14608512, 31.0456, 121.4),
('cn', 'shenyang', 'Shenyang', 19, 3512192, 41.7922, 123.433),
('cn', 'shenzhen', 'Shenzhen', 30, 1002592, 22.5333, 114.133),
('cn', 'suzhou', 'Suzhou', 4, 1343091, 31.3114, 120.618),
('cn', 'taiyuan', 'Taiyuan', 24, 2722475, 37.7269, 112.471),
('cn', 'tangshan', 'Tangshan', 10, 2054526, 37.3325, 114.701),
('cn', 'tianjin', 'Tianjin', 28, 3766207, 39.1422, 117.177),
('cn', 'urumqi', '�r�mqi', 13, 1508225, 43.801, 87.6005),
('cn', 'wuhan', 'Wuhan', 12, 4184206, 30.5801, 114.273),
('cn', 'wuxi', 'Wuxi', 4, 1108647, 31.5689, 120.289),
('cn', 'xian', 'Xian', 26, 3953191, 34.2583, 108.929),
('cn', 'xianyang', 'Xianyang', 26, 1034081, 34.3378, 108.703),
('cn', 'xinyang', 'Xinyang', 9, 1590668, 32.0958, 114.12),
('cn', 'xuzhou', 'Xuzhou', 4, 1199193, 34.1805, 117.157),
('co', 'barranquilla', 'Barranquilla', 4, 1380437, 10.9639, -74.7964),
('co', 'bogota', 'Bogot�', 34, 7102602, 4.64918, -74.0628),
('co', 'cali', 'Cali', 29, 2392897, 3.43722, -76.5225),
('co', 'medellin', 'Medell�n', 2, 2000001, 6.25184, -75.5636),
('cz', 'prague', 'Prague', 52, 1154508, 50.0833, 14.4667),
('de', 'berlin', 'Berlin', 16, 3398362, 52.5167, 13.4),
('de', 'hamburg', 'Hamburg', 4, 1733846, 53.55, 10),
('de', 'munich', 'Munich', 2, 1246133, 48.15, 11.5833),
('dk', 'copenhagen', 'Copenhagen', 17, 1089958, 55.6667, 12.5833),
('do', 'santo domingo', 'Santo Domingo', 5, 2202016, 18.4667, -69.9),
('dz', 'algiers', 'Algiers', 1, 1980242, 36.7631, 3.05056),
('ec', 'guayaquil', 'Guayaquil', 10, 1952029, -2.16667, -79.9),
('ec', 'quito', 'Quito', 18, 1399814, -0.216667, -78.5),
('eg', 'alexandria', 'Alexandria', 6, 3811512, 31.1981, 29.9192),
('eg', 'cairo', 'Cairo', 11, 7734602, 30.05, 31.25),
('eg', 'gizeh', 'Gizeh', 8, 2443490, 30.0086, 31.2122),
('es', 'barcelona', 'Barcelona', 56, 1570378, 41.3984, 2.1741),
('es', 'madrid', 'Madrid', 29, 3102644, 40.4086, -3.69222),
('et', 'addis abeba', 'Addis Abeba', 44, 2757807, 9.02433, 38.7492),
('fr', 'paris', 'Paris', 0, 2110694, 48.8667, 2.33333),
('gb', 'london', 'London', 0, 7421228, 51.5141, -0.093689),
('ge', 'tbilisi', 'Tbilisi', 19, 1049516, 41.725, 44.7908),
('gh', 'accra', 'Accra', 1, 1963460, 5.55, -0.216667),
('gh', 'kumasi', 'Kumasi', 2, 1468797, 6.68333, -1.61667),
('gn', 'conakry', 'Conakry', 4, 1871185, 9.50917, -13.7122),
('ht', 'port-au-prince', 'Port-au-Prince', 11, 1234750, 18.5392, -72.335),
('hu', 'budapest', 'Budapest', 5, 1708088, 47.5, 19.0833),
('id', 'bandung', 'Bandung', 30, 1699822, -6.90389, 107.619),
('id', 'bekasi', 'Bekasi', 30, 1520204, -6.2349, 106.99),
('id', 'depok', 'Depok', 30, 1198195, -6.34333, 106.499),
('id', 'jakarta', 'Jakarta', 4, 8540306, -6.17444, 106.829),
('id', 'makasar', 'Makasar', 38, 1321832, -5.14, 119.422),
('id', 'medan', 'Medan', 26, 1751190, 3.58333, 98.6667),
('id', 'palembang', 'Palembang', 32, 1241334, -2.91667, 104.75),
('id', 'semarang', 'Semarang', 7, 1288221, -6.9932, 110.42),
('id', 'surabaya', 'Surabaya', 8, 2374920, -7.24917, 112.751),
('id', 'tangerang', 'Tangerang', 30, 1372185, -6.17806, 106.63),
('ie', 'dublin', 'Dublin', 7, 1024027, 53.3331, -6.24889),
('in', 'agra', 'Agra', 36, 1430194, 27.1833, 78.0167),
('in', 'ahmadabad', 'Ahmadabad', 9, 3719933, 23.0333, 72.6167),
('in', 'allahabad', 'Allahabad', 36, 1073544, 25.45, 81.85),
('in', 'amritsar', 'Amritsar', 23, 1092528, 31.6331, 74.8656),
('in', 'aurangabad', 'Aurangabad', 16, 1016520, 19.8833, 75.3333),
('in', 'bangalore', 'Bangalore', 19, 4931603, 12.9833, 77.5833),
('in', 'bhopal', 'Bhopal', 35, 1600080, 23.2667, 77.4),
('in', 'bombay', 'Bombay', 16, 12692717, 18.975, 72.8258),
('in', 'calcutta', 'Calcutta', 28, 4631819, 22.5697, 88.3697),
('in', 'delhi', 'Delhi', 7, 10928270, 28.6667, 77.2167),
('in', 'faridabad', 'Faridabad', 10, 1280909, 28.4333, 77.3167),
('in', 'ghaziabad', 'Ghaziabad', 36, 1199306, 28.6667, 77.4333),
('in', 'haora', 'Haora', 28, 1027771, 22.5892, 88.3103),
('in', 'hyderabad', 'Hyderabad', 2, 3598199, 17.3753, 78.4744),
('in', 'indore', 'Indore', 35, 1837230, 22.7167, 75.8333),
('in', 'jabalpur', 'Jabalpur', 35, 1030276, 23.1667, 79.95),
('in', 'jaipur', 'Jaipur', 24, 2711937, 26.9167, 75.8167),
('in', 'kalyan', 'Kalyan', 16, 1262355, 19.25, 73.15),
('in', 'kanpur', 'Kanpur', 36, 2823523, 26.4667, 80.35),
('in', 'lakhnau', 'Lakhnau', 36, 2472250, 26.85, 80.9167),
('in', 'ludhiana', 'Ludhiana', 23, 1545476, 30.9, 75.85),
('in', 'madras', 'Madras', 25, 4328416, 13.0833, 80.2833),
('in', 'nagpur', 'Nagpur', 16, 2228191, 21.15, 79.1),
('in', 'new delhi', 'New Delhi', 7, 10928270, 28.6, 77.2),
('in', 'patna', 'Patna', 34, 1600085, 25.6, 85.1167),
('in', 'pimpri', 'Pimpri', 16, 1284702, 18.6167, 73.8),
('in', 'pune', 'Pune', 16, 2935968, 18.5333, 73.8667),
('in', 'rajkot', 'Rajkot', 9, 1177434, 22.3, 70.7833),
('in', 'surat', 'Surat', 9, 2894675, 20.9667, 72.9),
('in', 'thana', 'Thana', 16, 1486453, 19.2, 72.9667),
('in', 'vadodara', 'Vadodara', 9, 1409565, 22.3, 73.2),
('in', 'varanasi', 'Varanasi', 36, 1164520, 25.3333, 83),
('in', 'visakhapatnam', 'Visakhapatnam', 2, 1063293, 17.7, 83.3),
('iq', 'baghdad', 'Baghdad', 7, 5672516, 33.3386, 44.3939),
('ir', 'esfahan', 'Esfahan', 28, 1547241, 32.6572, 51.6776),
('ir', 'karaj', 'Karaj', 44, 1448996, 35.8355, 51.0103),
('ir', 'mashhad', 'Mashhad', 42, 2307254, 36.297, 59.6062),
('ir', 'qom', 'Qom', 39, 1011103, 34.6401, 50.8764),
('ir', 'shiraz', 'Shiraz', 7, 1249972, 29.6036, 52.5388),
('ir', 'tabriz', 'Tabriz', 33, 1424701, 38.08, 46.2919),
('it', 'milan', 'Milan', 9, 1156903, 45.4667, 9.2),
('it', 'rome', 'Rome', 7, 2643736, 41.9, 12.4833),
('jp', 'hiroshima', 'Hiroshima', 11, 1143850, 34.4348, 132.741),
('jp', 'kawasaki', 'Kawasaki', 19, 1306804, 35.5206, 139.717),
('jp', 'kobe', 'Kobe', 13, 1528487, 34.6913, 135.183),
('jp', 'nagoya', 'Nagoya', 1, 2191291, 35.1802, 136.907),
('jp', 'saitama', 'Saitama', 34, 1077730, 35.8955, 139.677),
('jp', 'tokyo', 'Tokyo', 40, 31480498, 35.685, 139.751),
('ke', 'nairobi', 'Nairobi', 5, 2750561, -1.28333, 36.8167),
('kh', 'phnum penh', 'Phnum P�nh', 11, 1573523, 11.55, 104.917),
('kr', 'seoul', 'Seoul', 11, 10323448, 37.5985, 126.978),
('kz', 'almaty', 'Almaty', 2, 1204820, 43.25, 76.95),
('lb', 'bayrut', 'Bayrut', 4, 1252010, 33.8719, 35.5097),
('lb', 'beirut', 'Beirut', 4, 1252010, 33.8719, 35.5097),
('ly', 'tripoli', 'Tripoli', 61, 1150990, 32.8925, 13.18),
('ma', 'casablanca', 'Casablanca', 45, 3609698, 33.5928, -7.61916),
('ma', 'fez', 'Fez', 46, 1160239, 34.0372, -4.9998),
('ma', 'rabat', 'Rabat', 49, 1894386, 34.0138, -6.84427),
('mg', 'antananarivo', 'Antananarivo', 5, 1391506, -18.9167, 47.5167),
('ml', 'bamako', 'Bamako', 1, 1297390, 12.65, -8),
('mm', 'mandalay', 'Mandalay', 8, 1208227, 22, 96.0833),
('mm', 'rangoon', 'Rangoon', 17, 4477782, 16.7833, 96.1667),
('mx', 'ecatepec', 'Ecatepec', 15, 1806297, 19.6011, -99.0525),
('mx', 'guadalajara', 'Guadalajara', 14, 1640649, 20.6667, -103.333),
('mx', 'juarez', 'Juarez', 15, 1403025, 31.7333, -106.483),
('mx', 'leon', 'Le�n', 11, 1114662, 21.1167, -101.667),
('mx', 'mexico', 'Mexico', 9, 8720916, 19.4342, -99.1386),
('mx', 'monterrey', 'Monterrey', 19, 1122912, 25.6667, -100.317),
('mx', 'nezahualcoyotl', 'Nezahualc�yotl', 15, 1232565, 19.4136, -99.0331),
('mx', 'puebla', 'Puebla', 21, 1392137, 19.05, -98.2),
('mx', 'tijuana', 'Tijuana', 2, 1376494, 32.5333, -117.017),
('my', 'kuala lumpur', 'Kuala Lumpur', 14, 1453978, 3.16667, 101.7),
('mz', 'maputo', 'Maputo', 4, 1191613, -25.9653, 32.5892),
('ng', 'benin', 'B�nin', 37, 1125126, 6.33504, 5.62749),
('ng', 'ibadan', 'Ibadan', 32, 3565810, 7.38778, 3.89639),
('ng', 'kaduna', 'Kaduna', 23, 1582211, 10.5222, 7.43828),
('ng', 'kano', 'Kano', 29, 3626204, 11.9944, 8.51381),
('ng', 'lagos', 'Lagos', 5, 8789133, 6.45306, 3.39583),
('ng', 'maiduguri', 'Maiduguri', 27, 1112511, 11.8464, 13.1603),
('ng', 'port harcourt', 'Port Harcourt', 50, 1148753, 4.77742, 7.0134),
('ni', 'managua', 'Managua', 10, 1140499, 12.1508, -86.2683),
('pe', 'lima', 'Lima', 15, 7646786, -12.05, -77.05),
('ph', 'davao', 'Davao', 0, 1212285, 7.07306, 125.613),
('ph', 'manila', 'Manila', 0, 10443877, 14.6042, 120.982),
('pk', 'faisalabad', 'Faisalabad', 4, 2507302, 31.4167, 73.0833),
('pk', 'gujranwala', 'Gujranwala', 4, 1384869, 32.1617, 74.1883),
('pk', 'hyderabad', 'Hyderabad', 5, 1386840, 25.3924, 68.3737),
('pk', 'karachi', 'Karachi', 5, 11627378, 24.9056, 67.0822),
('pk', 'lahore', 'Lahore', 4, 6312576, 31.5497, 74.3436),
('pk', 'multan', 'Multan', 4, 1437644, 30.1956, 71.4753),
('pk', 'peshawar', 'Peshawar', 3, 1219248, 34.008, 71.5785),
('pk', 'rawalpindi', 'Rawalpindi', 4, 1743599, 33.6007, 73.0679),
('pl', 'warsaw', 'Warsaw', 78, 1651676, 52.25, 21),
('ro', 'bucharest', 'Bucharest', 10, 1877155, 44.4333, 26.1),
('rs', 'belgrade', 'Belgrade', 2, 1115200, 44.8186, 20.4681),
('ru', 'chelyabinsk', 'Chelyabinsk', 13, 1062931, 55.1544, 61.4297),
('ru', 'kazan', 'Kazan', 73, 1104750, 55.7887, 49.1221),
('ru', 'moscow', 'Moscow', 48, 10381288, 55.7522, 37.6156),
('ru', 'nizhniy novgorod', 'Nizhniy Novgorod', 51, 1284176, 56.3269, 44.0075),
('ru', 'novosibirsk', 'Novosibirsk', 53, 1419016, 55.0415, 82.9346),
('ru', 'omsk', 'Omsk', 54, 1129289, 55, 73.4),
('ru', 'rostov-na-donu', 'Rostov-na-Donu', 61, 1074495, 47.2313, 39.7233),
('ru', 'saint petersburg', 'Saint Petersburg', 66, 4039751, 59.8944, 30.2642),
('ru', 'samara', 'Samara', 65, 1134742, 53.1835, 50.1182),
('ru', 'ufa', 'Ufa', 8, 1033350, 54.7852, 56.0456),
('ru', 'volgograd', 'Volgograd', 84, 1010331, 48.7194, 44.5018),
('ru', 'yekaterinburg', 'Yekaterinburg', 71, 1287586, 56.8519, 60.6122),
('sa', 'jiddah', 'Jiddah', 14, 2545728, 21.5169, 39.2192),
('sa', 'mecca', 'Mecca', 14, 1199659, 21.4267, 39.8261),
('sa', 'riyadh', 'Riyadh', 10, 3469290, 24.6537, 46.7152),
('sd', 'khartoum', 'Khartoum', 29, 1974780, 15.5881, 32.5342),
('sd', 'umm durman', 'Umm Durman', 29, 2810328, 15.6361, 32.4372),
('se', 'stockholm', 'Stockholm', 26, 1253309, 59.3333, 18.05),
('sg', 'singapore', 'Singapore', 0, 3547809, 1.29306, 103.856),
('sl', 'freetown', 'Freetown', 4, 1190761, 8.49, -13.2342),
('sn', 'dakar', 'Dakar', 1, 2702820, 14.6708, -17.4381),
('so', 'mogadishu', 'Mogadishu', 2, 2590180, 2.06667, 45.3667),
('sy', 'aleppo', 'Aleppo', 9, 2139878, 36.2028, 37.1586),
('sy', 'damascus', 'Damascus', 13, 1576843, 33.5, 36.3),
('th', 'bangkok', 'Bangkok', 40, 5104475, 13.754, 100.501),
('tr', 'adana', 'Adana', 81, 1249680, 37.0017, 35.3289),
('tr', 'ankara', 'Ankara', 68, 3519177, 39.9117, 32.8403),
('tr', 'bursa', 'Bursa', 16, 1413485, 40.1917, 29.0611),
('tr', 'gaziantep', 'Gaziantep', 83, 1066561, 37.0594, 37.3825),
('tr', 'istanbul', 'Istanbul', 34, 9797536, 41.0186, 28.9647),
('tr', 'izmir', 'Izmir', 35, 2501895, 38.4127, 27.1384),
('tw', 'kaohsiung', 'Kaohsiung', 2, 1512832, 22.6178, 120.301),
('tw', 'kaohsiung', 'Kaohsiung', 4, 1512832, 22.6333, 120.35),
('tw', 'taichung', 'Taichung', 4, 1083582, 24.1433, 120.681),
('tw', 'taipei', 'Taipei', 3, 2514794, 25.0392, 121.525),
('tz', 'dar es salaam', 'Dar es Salaam', 23, 2698651, -6.8, 39.2833),
('ua', 'kiev', 'Kiev', 12, 2514227, 50.4333, 30.5167),
('ua', 'odesa', 'Odesa', 17, 1001553, 46.4639, 30.7386),
('ug', 'kampala', 'Kampala', 37, 1353236, 0.315556, 32.5656),
('us', 'phoenix', 'Phoenix', 0, 1428509, 33.4483, -112.073),
('us', 'los angeles', 'Los Angeles', 0, 3877129, 34.0522, -118.243),
('us', 'san diego', 'San Diego', 0, 1287050, 32.7153, -117.156),
('us', 'chicago', 'Chicago', 0, 2841952, 41.85, -87.65),
('us', 'new york', 'New York', 0, 8107916, 40.7142, -74.0064),
('us', 'philadelphia', 'Philadelphia', 0, 1453268, 39.9522, -75.1642),
('us', 'dallas', 'Dallas', 0, 1211704, 32.7833, -96.8),
('us', 'houston', 'Houston', 0, 2027712, 29.7631, -95.3631),
('us', 'san antonio', 'San Antonio', 0, 1256810, 29.4239, -98.4933),
('uy', 'montevideo', 'Montevideo', 10, 1305865, -34.8581, -56.1708),
('uz', 'tashkent', 'Tashkent', 13, 1978078, 41.3167, 69.25),
('ve', 'caracas', 'Caracas', 25, 1815681, 10.5, -66.9167),
('ve', 'maracaibo', 'Maracaibo', 23, 1948269, 10.6317, -71.6406),
('ve', 'valencia', 'Valencia', 7, 1385202, 10.1806, -68.0039),
('vn', 'hanoi', 'Hanoi', 44, 1431377, 21.0333, 105.85),
('vn', 'ha noi', 'Ha Noi', 44, 1431377, 21.0333, 105.85),
('vn', 'ho chi minh city', 'Ho Chi Minh City', 20, 3467426, 10.75, 106.667),
('za', 'cape town', 'Cape Town', 11, 3433504, -33.9258, 18.4232),
('za', 'durban', 'Durban', 2, 3120340, -29.8579, 31.0292),
('za', 'johannesburg', 'Johannesburg', 6, 2026466, -26.2052, 28.0498),
('za', 'pretoria', 'Pretoria', 6, 1619485, -25.7069, 28.2294),
('za', 'soweto', 'Soweto', 6, 1695094, -26.2678, 27.8585),
('zm', 'lusaka', 'Lusaka', 9, 1267458, -15.4167, 28.2833),
('zw', 'harare', 'Harare', 4, 2213701, -17.8178, 31.0447);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;