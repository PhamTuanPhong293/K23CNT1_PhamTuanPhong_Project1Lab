-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 07:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptp_lesson10_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_16_150104_create_ptpvattu_table', 1),
(6, '2024_12_16_150208_create_ptpnhacc_table', 1),
(7, '2024_12_16_150534_create_ptpnhacc_table', 2),
(9, '2024_12_16_150922_create_ptpdondh_table', 3),
(10, '2024_12_16_152232_add_email_to_ptpnhacc_table', 4),
(15, '2024_12_16_152511_add_status_to_ptpnhacc_table', 5),
(16, '2024_12_16_155855_create_ptpctdondh_table', 5),
(17, '2024_12_16_161439_create_ptppxuat_table', 6),
(18, '2024_12_16_161746_create_ptpctpxuat_table', 7),
(19, '2024_12_16_162304_create_ptppnhap_table', 8),
(20, '2024_12_16_162759_create_ptpctpnhap_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptpctdondh`
--

CREATE TABLE `ptpctdondh` (
  `ptpSoDH` varchar(255) NOT NULL,
  `ptpMaVTu` varchar(255) NOT NULL,
  `ptpSlDat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptpctpnhap`
--

CREATE TABLE `ptpctpnhap` (
  `ptpSoPN` varchar(255) NOT NULL,
  `ptpMaVTu` varchar(255) NOT NULL,
  `ptpSlNhap` int(11) NOT NULL,
  `ptpDgNhap` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptpctpxuat`
--

CREATE TABLE `ptpctpxuat` (
  `ptpSoXP` varchar(255) NOT NULL,
  `ptpMaVTu` varchar(255) NOT NULL,
  `ptpSlXuat` int(11) NOT NULL,
  `ptpDgXuat` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptpdondh`
--

CREATE TABLE `ptpdondh` (
  `ptpSoDH` varchar(255) NOT NULL,
  `ptpNgayDH` date NOT NULL,
  `ptpMaNCC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptpnhacc`
--

CREATE TABLE `ptpnhacc` (
  `ptpMaNCC` varchar(255) NOT NULL,
  `ptpTenNCC` varchar(255) NOT NULL,
  `ptpDiachi` varchar(255) NOT NULL,
  `ptpDienthoai` varchar(255) NOT NULL,
  `ptpemail` varchar(255) NOT NULL,
  `ptpstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptpnhacc`
--

INSERT INTO `ptpnhacc` (`ptpMaNCC`, `ptpTenNCC`, `ptpDiachi`, `ptpDienthoai`, `ptpemail`, `ptpstatus`) VALUES
('0218df64-e4d6-3afa-83fc-a61362b11df7', 'Dolores ipsum enim velit molestiae nihil.', '441 Larson Common\nCristland, AL 44401-6838', '+17734939144', 'bberge@hotmail.com', ''),
('03481acc-3d5f-36db-9668-3fd2430669dd', 'Dolorem dolores hic itaque eum eius non.', '8222 VonRueden Stravenue\nLake Kelvin, TN 63268', '+1-984-466-8088', 'medhurst.judah@yahoo.com', ''),
('038b5f06-28bf-3f7e-b628-a7321e44ee94', 'Sequi enim omnis temporibus.', '608 Prohaska Ramp\nAlannaland, NV 19948-8777', '1-618-577-4675', 'smitham.marvin@yahoo.com', ''),
('06320972-5216-36de-ae4d-71228751e68e', 'Rerum aspernatur dolor et aperiam odit laboriosam.', '98360 Hoppe Island Suite 113\nNoahmouth, WY 92984', '+1.662.499.1945', 'antwan.kuphal@ferry.net', ''),
('067ca6ea-cd9e-32f9-bdb1-e5664902ea4d', 'Enim laudantium quam sunt in.', '815 Talon River\nNorth Elwinville, AR 78096', '(737) 444-7888', 'americo86@hackett.com', ''),
('07bf39ff-5ef5-3366-a45b-437bc3ad1523', 'Facilis dolorem pariatur consequatur consequatur delectus.', '964 Macey Brooks Apt. 708\nCordiatown, CO 03082', '(754) 505-7325', 'stiedemann.francesca@yahoo.com', ''),
('0c0aeeba-f08a-31cd-a9d5-4d7173f70eba', 'Et consequatur quasi unde cumque et odio.', '97913 Crona Forges Suite 693\nPearliestad, KS 10614-5864', '351.816.0178', 'myrtie.bauch@yahoo.com', ''),
('0c91c3c0-c2a9-30b2-a148-df4fa08952f4', 'Nulla inventore odit et.', '7224 Kathleen Fall\nEast Nasirshire, OH 94928', '+1.734.390.9317', 'lester14@gmail.com', ''),
('0d8047ab-439b-34da-aa06-3527eb1b28d7', 'Sed et ducimus enim.', '10837 Fleta Stream\nBartonshire, ND 01373', '678-625-4042', 'mgreenfelder@hotmail.com', ''),
('1348da10-59b0-3060-af9f-5ab4a7ddbce0', 'Maxime dolores consequuntur nihil quo.', '96728 Willow Meadows Apt. 008\nEast Ima, OR 90696-2172', '(223) 517-8517', 'kailee95@skiles.com', ''),
('16c2774e-17e5-3e1b-88e8-4b9755b347b9', 'Sunt illo voluptas debitis quas nihil facilis.', '813 Harris Landing\nPort Chaimburgh, IA 32547', '225.497.6644', 'adolphus.upton@zieme.biz', ''),
('191de34e-5dbc-3b79-99b8-c18395de78e8', 'Non culpa asperiores perspiciatis commodi.', '9992 O\'Kon Creek Suite 175\nLake Jovani, CA 34991', '+1 (954) 231-7683', 'cbode@gmail.com', ''),
('19dbeee2-b5b8-30d1-adbe-ef409539e224', 'Dolores facere in reiciendis veritatis.', '56025 Brown Turnpike\nSouth Eliport, NJ 46270', '(551) 299-1986', 'ola10@rogahn.com', ''),
('1a89af6f-b3bd-3a52-9ca2-3beb4c0a7c2a', 'Quae minima quam et vitae.', '679 Nickolas Harbors\nEast Annalise, OR 18616', '+1.458.417.9769', 'nbartoletti@murray.org', ''),
('1b8f1d70-af71-3e7b-873e-5b4df2c5f849', 'Blanditiis nihil labore eius.', '5521 Spencer Knoll Suite 793\nWest Bonita, OK 77952-2578', '1-657-968-2959', 'wolff.andreane@tremblay.com', ''),
('1bbb46f8-c0e6-3db5-87eb-4f5365bbb7b6', 'Et nulla quisquam cumque.', '910 Jada Harbor Suite 227\nNew Alysa, DC 51550', '+1 (630) 680-6437', 'maddison10@kuhlman.biz', ''),
('1e8c2073-a827-3051-a430-7ae2b71bf0c5', 'Unde rerum eos qui voluptatem.', '60158 Devan Motorway\nRathview, OK 57633', '+14586038378', 'pboehm@yahoo.com', ''),
('1f3ddda7-bdb2-35c2-864e-6ae46db8a996', 'Molestias sunt error consectetur sed laudantium.', '348 Cristobal Prairie Suite 965\nPort Orlandochester, LA 71692-5048', '1-337-221-1865', 'pberge@hotmail.com', ''),
('1f9a0c8a-b016-3cbd-b348-5dabc3b9f560', 'Molestias sunt non nesciunt.', '17433 Nannie Shores\nLake Magdalenaberg, NC 89520-5153', '351-490-9004', 'psmith@gmail.com', ''),
('28658856-1f53-3907-b7f7-eee65e1a5449', 'Ex beatae harum a.', '3859 Katelyn Avenue Suite 113\nLake Gilbert, VT 85144-4372', '323.984.8121', 'keira.beahan@gmail.com', ''),
('288e8b37-fed3-3471-ac3e-21a81a6bfd96', 'Aut quisquam maxime repudiandae delectus fugit repudiandae.', '983 Murphy Walks\nWest Jayme, FL 68823-1452', '(856) 269-4004', 'makenzie.cartwright@bashirian.biz', ''),
('29b4caba-1788-3748-922e-b6fa9d5ddfd1', 'Rerum quis voluptatibus saepe.', '68114 Eino Divide\nJaedenland, MD 11217-5720', '470.521.2833', 'fahey.cordell@farrell.com', ''),
('2a9c21c5-c992-3c45-8364-b7ae7f9e1afe', 'Ut corrupti aspernatur provident.', '8159 Russel Island Apt. 718\nWilkinsonmouth, MO 11399-0424', '(989) 602-6544', 'mherman@gmail.com', ''),
('2da4ab9a-8a47-36a0-ac87-88e5c9e9083b', 'Vero officiis atque minus quisquam odio.', '6253 Merle Wells\nEast Eliezer, KY 60596-2361', '+1.575.533.3716', 'blair.williamson@schuster.com', ''),
('2dd9c3e2-fef8-32ec-9cf5-c90a49037432', 'Sapiente adipisci earum pariatur quia.', '175 Gordon Mews\nBechtelarfurt, WY 99353-0403', '1-936-998-2317', 'zschmeler@yahoo.com', ''),
('2e82cf84-ab7a-323b-943d-1aea62773446', 'Accusamus qui accusantium commodi aut consequatur.', '999 Kiel Canyon Suite 357\nPort Cameron, IL 68442', '484.862.3598', 'bradtke.marquis@schmeler.biz', ''),
('2fe3599f-1aee-35e5-8f3f-501196891667', 'Quia error assumenda quis delectus aspernatur at ut.', '59496 Bins Place\nFeestbury, NC 92862', '+1-629-272-8218', 'emerald26@gmail.com', ''),
('319a8419-cf1d-3b94-96f6-f258a704b6df', 'Delectus perferendis non ut.', '333 Brain Brook\nLillachester, WY 75883', '+1.970.322.2041', 'kristin.reichert@hotmail.com', ''),
('3205d5e1-5461-35ad-b093-10eaeaf3b8a9', 'Autem non nesciunt corrupti numquam vitae.', '6883 Narciso Groves Suite 757\nWest Rashawntown, AK 95803-0477', '+1-715-318-5747', 'bernhard.dameon@terry.biz', ''),
('32bd5b10-12b8-313b-aaf7-435794322521', 'Sint id repudiandae in illum.', '12630 Dare Road\nHicklefort, AZ 10782', '930-757-5153', 'hill.providenci@toy.com', ''),
('34c311b8-959a-3631-a562-f36b34ebc6e8', 'Occaecati sed repellat autem vero rerum.', '355 Hane Mountains Apt. 383\nDantown, WI 69412-5475', '+1-937-362-9144', 'rowe.gladyce@hotmail.com', ''),
('4001150e-a9d2-324e-aee3-5d0b9eeee6d3', 'Eum est itaque amet dolorem odit perspiciatis.', '181 Hills Trail\nNorth Maci, AK 71621', '321-892-6074', 'franecki.brennon@yahoo.com', ''),
('415173e5-e9e7-378a-aaed-a4b0edb8b98d', 'Quas ipsam aperiam est eveniet.', '25844 Roberts Row\nSouth Rahsaanfurt, MT 20979-1757', '(904) 860-0953', 'hyatt.anastasia@hotmail.com', ''),
('43d03623-8612-3535-a8ce-d61f1a821d2c', 'Reiciendis qui voluptatem sit.', '27784 Stiedemann Plains Suite 059\nHauckton, NY 74565-0536', '+1.458.488.0474', 'abel.nader@schiller.com', ''),
('43f151f6-f823-339d-b037-051fd886a1fe', 'Earum quisquam totam adipisci nam ea.', '235 Justina Circles\nPort Michaela, NV 73201-9068', '863-899-5195', 'vparisian@abshire.com', ''),
('470d471d-4ecc-3b1d-88b9-ca42b7d2eb51', 'Saepe doloremque nostrum aut.', '609 Hahn Squares Apt. 685\nNevaberg, NJ 19420-3902', '+12726581279', 'mable75@yahoo.com', ''),
('486cbf00-bc0b-3913-b627-7b3a4cf5a24e', 'Consequatur voluptatum ratione nam dolor.', '743 Kuhn Mission Suite 824\nRogahnmouth, MI 64815-9402', '754-928-1107', 'hegmann.aniyah@gmail.com', ''),
('4979e5a6-b38d-3402-bc50-8d4a0428328d', 'Eos officia ipsam quis.', '640 Fiona Ranch\nMatildechester, DC 66252', '+13362643175', 'russel.frida@sawayn.org', ''),
('4f25fbab-119c-38e8-a4ce-f1757915fb7b', 'Fuga incidunt debitis et inventore perferendis.', '12802 Douglas Landing Suite 448\nNew Trevionberg, DC 72545', '248.578.0044', 'howard50@krajcik.com', ''),
('51054290-736e-343e-b22b-44981ad57b0c', 'Architecto voluptas rem vero ipsa qui.', '91570 Becker Roads Suite 909\nTremblaychester, NH 13666-2975', '1-848-216-8603', 'michel.klocko@gmail.com', ''),
('51ca626e-fab2-3415-ad2e-051913902a56', 'Esse error nulla a.', '2653 Kuhn Villages\nEmelyborough, IN 90280-6716', '878-673-2685', 'lleuschke@morissette.com', ''),
('563f9519-64b7-34c8-8527-a1395117bc68', 'Cumque aut quo quibusdam saepe.', '80732 Gulgowski Stravenue Apt. 015\nSouth Mariam, RI 34983', '+1-458-212-0815', 'jones.erna@yahoo.com', ''),
('5a1192f2-e737-3770-bdf6-f704dd67a0c5', 'Dolor qui tenetur impedit iusto ut.', '8294 Wuckert Ramp\nNorth Walker, WY 93875-2664', '+18025663883', 'conroy.alessia@oconnell.net', ''),
('5ebec24a-37cd-321c-8b9b-d70e61cf5260', 'Est pariatur ipsam quisquam.', '49376 Liana View Apt. 047\nWest Arne, NH 06074-5913', '1-725-714-2171', 'frederique.parker@heller.biz', ''),
('6039b05d-45d2-3322-8d51-e28f493563d9', 'Dolor rerum amet neque nobis eum consectetur.', '5909 Bergstrom Mountain Suite 990\nPort Quincy, TX 48082-4398', '1-210-386-1971', 'bertha.hoeger@gmail.com', ''),
('61326832-0535-3666-9e93-3c01cf84a1a7', 'Dolores quisquam sed aut doloremque provident.', '1197 Maggio Underpass Suite 251\nLonnyburgh, HI 20337', '1-516-780-9887', 'fharvey@hotmail.com', ''),
('62861b5a-f464-3799-9b4d-fe1aaee528e9', 'Minima non tempora quam esse.', '40947 Bahringer Mountains Apt. 058\nNew Chelseyfurt, OR 21123-0948', '223-683-0484', 'clarissa58@gmail.com', ''),
('67c0e3f6-3849-3c54-a361-beb6ecc7e609', 'Voluptatum atque asperiores quisquam.', '927 Billie Square\nChrisside, CT 62013-8981', '820.549.5235', 'nconroy@hotmail.com', ''),
('680a9e21-704c-3513-a124-0bc511cde267', 'Ad est animi cum.', '3481 Roob Courts Apt. 431\nSouth Marge, UT 93107', '(574) 287-6701', 'jovani.fritsch@yahoo.com', ''),
('6844f35e-ea14-36f7-93e9-05ab4bf6cfe3', 'Modi necessitatibus et maxime debitis.', '6428 Durgan Island\nNorth Calista, CA 25784-1114', '858.286.2440', 'lucy23@hotmail.com', ''),
('69f87ac7-039e-327c-9502-71abad5038b3', 'Omnis explicabo sunt sint aut distinctio soluta.', '73965 King Overpass\nNorth Koby, MS 30390-9812', '+17268173048', 'altenwerth.eryn@lakin.com', ''),
('6bb084b4-4755-30ed-890d-e2ed09959f1a', 'Aspernatur itaque facere quae culpa dolore est.', '2538 Adolfo Ports Suite 217\nLake Ruben, WI 96768', '+1.417.670.3615', 'buckridge.emiliano@pouros.org', ''),
('6f68fb19-c7e2-3381-9ee9-1750a42f486c', 'Doloribus voluptas in illum fugiat aut tempora.', '780 Favian Heights Apt. 022\nKuhnburgh, NH 48001', '(541) 445-6395', 'alize34@gmail.com', ''),
('7eb66e73-f739-3e03-a069-54a2c0edcdc4', 'Tempora corporis consectetur sit.', '833 McCullough Circle Apt. 774\nEast Leonardoville, WY 61379-6038', '+16468014012', 'julien89@kessler.net', ''),
('802abc78-0a41-3b6a-b7a4-4e34e3f6f9d5', 'Qui quia harum sit aperiam.', '8988 Hintz Mission Apt. 809\nEast Jimmieland, VT 70470-1617', '267-321-7694', 'wbode@kiehn.info', ''),
('83494d4f-c193-3f48-97c0-bd6b55cce14b', 'A ut illo omnis.', '183 Tommie Tunnel\nNorth Hellenberg, ID 20318', '(773) 755-2308', 'zboncak.tess@kunde.biz', ''),
('89a4ed1b-29d9-3569-b906-16d9512facb7', 'Neque nulla consequatur fugiat dicta cupiditate.', '88830 Boehm View Apt. 135\nNew Amandafurt, NM 67992', '+1.351.939.3273', 'gbeahan@yahoo.com', ''),
('90e8bae2-d8ee-3f26-b9ad-dad2944d5379', 'Molestias aut voluptas modi sed amet animi.', '47016 Henderson View\nBaileyview, AK 97197', '(508) 282-9699', 'bradtke.elvie@gmail.com', ''),
('9261ac77-5ec0-343e-96c3-ae8669c58505', 'Id non ipsa maxime laborum aliquid velit.', '27586 Blake Creek Suite 375\nBodeview, ID 87063', '(337) 860-6996', 'haylie02@hudson.com', ''),
('933b79dd-6875-35fb-8d6d-1cb746ca6c10', 'Placeat fugit et quia.', '495 Santina Summit\nEast Mariahport, MN 14562-8277', '(757) 513-7546', 'cruz.marquardt@oreilly.com', ''),
('93c410ad-64dc-3a4e-8075-e1341a7facbf', 'Voluptatum voluptates hic aut aliquam eum et.', '82162 Coy Stream Suite 640\nMannbury, NE 45379-7708', '+1-781-618-9344', 'pprice@hegmann.com', ''),
('96c6ba52-6bf4-36c5-9d2e-621e3ac126ed', 'Quod iste sunt consequatur.', '8217 Dalton Plain Suite 211\nEmiliechester, NY 20241-1999', '(661) 247-9188', 'bernhard38@gmail.com', ''),
('97075c7c-f20b-3068-acbc-cbdde51af58f', 'Explicabo sequi voluptate consequatur et sunt at.', '5242 Wilkinson Ville Suite 028\nLake Mattie, FL 51135-6468', '+13134877617', 'kimberly29@leuschke.com', ''),
('99c2bd34-126a-39d3-9379-e1cd6202e76e', 'Dolorem ut rerum dolore consequatur qui.', '5089 Bartoletti Throughway\nJaskolskiborough, DE 55627', '+1 (979) 618-9002', 'vincent61@gmail.com', ''),
('9cbb63b7-ba76-34c8-97e9-bb932f9e6689', 'Suscipit at non blanditiis ex perspiciatis.', '5751 Holly Glens\nJasonburgh, ID 02924', '909-260-0259', 'flarson@roberts.org', ''),
('9f0b6ffc-d47d-34ab-94d0-e229b42bd251', 'At facere quibusdam aut.', '5549 Glover Bypass\nPredovicport, PA 62105-0350', '+1 (252) 277-3058', 'reggie.braun@gmail.com', ''),
('9feac9b0-2c8d-3d1f-90ce-fcd1803301da', 'Tempore et et ut occaecati debitis.', '933 Jordan Isle Suite 259\nNew Rita, IL 69159-2006', '(515) 875-8791', 'ncremin@hegmann.com', ''),
('a22f9f45-c986-32c2-bdb2-7e2afa7e24c7', 'Quisquam quia nobis quis alias.', '895 Borer Extension\nZiemeville, MS 44592', '(351) 889-8100', 'gislason.halie@beier.com', ''),
('a43a2db4-bc93-3edb-be37-04df67964f75', 'Voluptatem eaque necessitatibus iure similique.', '3089 Nedra Shoals Suite 694\nJaydaton, NV 96907-8385', '(469) 422-7251', 'amara43@yahoo.com', ''),
('a514e042-6c69-34d8-9c8c-ecf275288e5f', 'Est praesentium quis facilis officia.', '12302 Lily Avenue Apt. 089\nLake Deionstad, MT 11951-3241', '518.717.0163', 'polly50@gmail.com', ''),
('ad0c9457-bab8-3db9-9fb3-c4a8748fb375', 'Quasi quia modi sit quia est.', '995 Domingo Ports Suite 116\nEast Providenciborough, ND 02594-8949', '1-330-847-2237', 'ellsworth50@hotmail.com', ''),
('ae703c98-0fef-3a95-b76e-9fa3c4765398', 'Nihil est quia est occaecati eius dolor.', '57418 Leif Springs\nWest Alyce, NJ 54531', '+1 (518) 858-7259', 'brad59@hotmail.com', ''),
('aee19747-9122-3ffd-9841-87082c1afe7a', 'Voluptatem corporis est nobis.', '6230 Boyer Wall Apt. 401\nEast Moriah, AZ 99538', '1-785-322-0721', 'lindsey.franecki@yahoo.com', ''),
('b13f51ef-7702-3dcd-931f-ec5b207e9fc7', 'Sed voluptatum blanditiis aut.', '74444 Roberts Loop Suite 245\nDavebury, WY 58695-0952', '+1-628-560-7814', 'stroman.enrique@cassin.info', ''),
('b752c9a2-60c7-33ce-a5bb-ce32e103bc9c', 'Non cum in dignissimos velit incidunt.', '3806 Lang Gardens\nWest Daniella, DC 29561', '334.948.3368', 'xterry@cronin.org', ''),
('b774d419-4934-3663-80e3-816c734b85cf', 'Dolor magni ut eaque rerum aut.', '307 Steuber Forks\nOlafmouth, AL 25323', '1-623-329-2358', 'marvin.mclaughlin@cormier.com', ''),
('b857ce7c-72e4-35e0-96b3-13cbe7416bcd', 'Et temporibus enim perferendis quaerat odit.', '519 Harris Roads\nNorth Amos, AK 92198-2672', '+1.563.412.3900', 'hollis.rowe@hotmail.com', ''),
('b8c1fc64-a8ab-398d-8e04-6eb0a814d7c9', 'Beatae dolorem tenetur provident rem cum.', '617 Monahan Mountains Suite 877\nHilpertville, SD 92061', '(281) 446-4018', 'nhegmann@torp.net', ''),
('baa4e987-3f24-32e4-9369-1928fcb84a02', 'Ipsam qui voluptatem maxime odio.', '8207 Orrin Trail\nAlysaside, MN 17540', '640.530.6530', 'ronny75@hotmail.com', ''),
('bb69cc51-20ad-31b1-a6af-f3492bac168d', 'Accusantium qui et quo sapiente necessitatibus vero.', '991 Heller Mills Apt. 088\nBenberg, TX 32718-2823', '971-221-2536', 'strosin.maximillia@hotmail.com', ''),
('c6235e73-205b-3329-a286-792ce07a30b1', 'Voluptas beatae qui magni qui.', '895 Jared Shoal\nNew Nick, AL 07446', '908-491-2053', 'rosalinda91@hotmail.com', ''),
('c688c7a4-63fc-36cf-b4a9-3b8d5424707f', 'Cumque possimus voluptas tempora.', '940 Mosciski Lake\nTyshawnside, AZ 51403', '1-531-315-8194', 'stacey.barrows@yahoo.com', ''),
('c9f6fcee-f5c0-37ea-a938-56970c703431', 'Aut minima accusamus sed cum.', '67034 Schoen Mall\nHenriview, WA 90169', '+1.815.775.0945', 'qtrantow@collier.com', ''),
('ce53209e-ac80-3e55-ae97-e3ca5b564e4b', 'Assumenda laudantium blanditiis omnis.', '400 Maryam Lodge Apt. 061\nMuellerton, WI 49663-6876', '(872) 719-4521', 'aliya.harris@hotmail.com', ''),
('d09b8c38-4a07-3e64-b7c8-97074fc5189c', 'Dolorum reprehenderit quo voluptas neque tempora praesentium.', '954 Kuhn Pine Apt. 409\nWest Jaida, GA 31921-4294', '+1 (570) 282-0913', 'frederique.mueller@leffler.com', ''),
('d20119b9-990e-3545-8b88-86afdc60f9c4', 'Ut ad aliquam in a.', '9313 D\'Amore Forest\nRossieburgh, CO 39726', '828-841-7998', 'travon.johnston@hotmail.com', ''),
('d57fbfe9-452a-3f25-af20-95d91ca9f91b', 'Deleniti non autem velit.', '314 Hayes Ways Apt. 152\nNew Betsy, WI 03469-0203', '854.522.8432', 'rowland.lang@yahoo.com', ''),
('d609d37e-f49d-3a4b-a496-86136c603027', 'Numquam expedita veritatis quos.', '1925 Alejandrin Cliffs\nBartellshire, IA 29232-7723', '831.662.4053', 'zechariah04@gmail.com', ''),
('d91470e3-b432-34ad-95c2-01e0dabfb2ba', 'Corrupti vel commodi perferendis repellat.', '554 Leonor Radial\nRosettaland, CO 10771', '510.435.7176', 'white.hosea@pfannerstill.com', ''),
('db092c1b-d905-3ddd-baa2-cf9dba6e3684', 'Vel hic et qui qui.', '72051 Desiree Mountains Apt. 194\nNorth Maribel, NM 39282', '+17263067330', 'jackson.lindgren@mohr.com', ''),
('e61e9123-a1d7-3611-9586-38c1b4b8722f', 'Itaque suscipit necessitatibus aut ipsa sit aut.', '9986 Alessandra Cliffs Suite 477\nEichmannmouth, TX 55755', '+1.629.633.0478', 'hill.reid@vonrueden.info', ''),
('e6c66317-ee62-37bb-ac37-195919f5899e', 'Sed voluptas nisi voluptatem atque non.', '256 Green Mission\nNorth Tommie, NJ 30043-0427', '+1-223-958-4992', 'randi.ryan@bruen.info', ''),
('e8f07111-36f8-31ae-9bbe-f19ebd01346f', 'Iure ut aliquam quibusdam repudiandae.', '207 Loraine Tunnel\nShanahanfurt, HI 74798', '1-716-367-3978', 'auer.leonie@yahoo.com', ''),
('eab79e27-b7d1-3286-96ca-36d28e4bfe50', 'Placeat nam dicta ipsum molestiae in.', '4060 Adela Freeway\nWeissnatmouth, OK 79334-7443', '(610) 664-5901', 'gerhard.rolfson@schneider.com', ''),
('eb90ba71-1413-34df-aa52-d486bb26e4bb', 'At molestiae molestiae rerum aut optio.', '24353 Gorczany Dale\nVonRuedenstad, KS 32644', '931.380.6774', 'geovanni18@gmail.com', ''),
('ed8de012-a5fd-3d05-819c-416275f741db', 'Velit aut sit alias.', '267 Araceli Way\nEast Jannie, MA 31987', '+1 (854) 850-0463', 'jgottlieb@gmail.com', ''),
('ef882604-5a1a-395b-9b2f-47f4d79c475e', 'A similique repellat quasi.', '237 Modesto Camp Apt. 905\nCasperburgh, WV 05416', '+1 (617) 659-8682', 'eprosacco@denesik.com', ''),
('f665174b-8d70-3c44-84ef-dacc6d79dbce', 'Tempora neque sed sapiente sunt optio.', '469 Jameson Heights Apt. 353\nNorth Tessie, TN 62998-6445', '1-872-519-6405', 'rogelio.vandervort@cronin.net', ''),
('fd310e0a-e7ef-3ee6-b6fd-ed7c8855543c', 'Occaecati voluptas voluptatem nihil ut.', '90190 Stokes Walks Apt. 826\nHuelshire, MI 93126-0115', '+1-480-233-2126', 'ejerde@hotmail.com', ''),
('ff93bb3b-62dc-3557-8438-0394e74234cd', 'Quos voluptatum sint eos quis ut laboriosam aut.', '84149 McCullough Centers\nBartellstad, HI 35529-8357', '+1-425-917-1269', 'deontae.jacobs@hotmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `ptppnhap`
--

CREATE TABLE `ptppnhap` (
  `ptpSoPN` varchar(255) NOT NULL,
  `ptpNgayNhap` date NOT NULL,
  `ptpSoDH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptppxuat`
--

CREATE TABLE `ptppxuat` (
  `ptpSoXP` varchar(255) NOT NULL,
  `ptpNgayXuat` date NOT NULL,
  `ptpTenKH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptpvattu`
--

CREATE TABLE `ptpvattu` (
  `ptpMaVTu` varchar(255) NOT NULL,
  `ptpTenVTu` varchar(255) NOT NULL,
  `ptpDVTinh` varchar(255) NOT NULL,
  `ptpPhanTram` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptpvattu`
--

INSERT INTO `ptpvattu` (`ptpMaVTu`, `ptpTenVTu`, `ptpDVTinh`, `ptpPhanTram`) VALUES
('DD01', 'Đầu DVD Hitachi 1 cửa', 'Bộ', 40.00),
('DD02', 'Đầu DVD Hitachi 2 cửa', 'Bộ', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ptpctdondh`
--
ALTER TABLE `ptpctdondh`
  ADD PRIMARY KEY (`ptpSoDH`),
  ADD KEY `ptpctdondh_ptpmavtu_foreign` (`ptpMaVTu`);

--
-- Indexes for table `ptpctpnhap`
--
ALTER TABLE `ptpctpnhap`
  ADD PRIMARY KEY (`ptpSoPN`),
  ADD KEY `ptpctpnhap_ptpmavtu_foreign` (`ptpMaVTu`);

--
-- Indexes for table `ptpctpxuat`
--
ALTER TABLE `ptpctpxuat`
  ADD PRIMARY KEY (`ptpSoXP`),
  ADD KEY `ptpctpxuat_ptpmavtu_foreign` (`ptpMaVTu`);

--
-- Indexes for table `ptpdondh`
--
ALTER TABLE `ptpdondh`
  ADD PRIMARY KEY (`ptpSoDH`),
  ADD KEY `ptpdondh_ptpmancc_foreign` (`ptpMaNCC`);

--
-- Indexes for table `ptpnhacc`
--
ALTER TABLE `ptpnhacc`
  ADD PRIMARY KEY (`ptpMaNCC`);

--
-- Indexes for table `ptppnhap`
--
ALTER TABLE `ptppnhap`
  ADD PRIMARY KEY (`ptpSoPN`),
  ADD KEY `ptppnhap_ptpsodh_foreign` (`ptpSoDH`);

--
-- Indexes for table `ptppxuat`
--
ALTER TABLE `ptppxuat`
  ADD PRIMARY KEY (`ptpSoXP`);

--
-- Indexes for table `ptpvattu`
--
ALTER TABLE `ptpvattu`
  ADD PRIMARY KEY (`ptpMaVTu`),
  ADD UNIQUE KEY `ptpvattu_ptptenvtu_unique` (`ptpTenVTu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ptpctdondh`
--
ALTER TABLE `ptpctdondh`
  ADD CONSTRAINT `ptpctdondh_ptpmavtu_foreign` FOREIGN KEY (`ptpMaVTu`) REFERENCES `ptpvattu` (`ptpMaVTu`),
  ADD CONSTRAINT `ptpctdondh_ptpsodh_foreign` FOREIGN KEY (`ptpSoDH`) REFERENCES `ptpdondh` (`ptpSoDH`);

--
-- Constraints for table `ptpctpnhap`
--
ALTER TABLE `ptpctpnhap`
  ADD CONSTRAINT `ptpctpnhap_ptpmavtu_foreign` FOREIGN KEY (`ptpMaVTu`) REFERENCES `ptpvattu` (`ptpMaVTu`),
  ADD CONSTRAINT `ptpctpnhap_ptpsopn_foreign` FOREIGN KEY (`ptpSoPN`) REFERENCES `ptppnhap` (`ptpSoPN`);

--
-- Constraints for table `ptpctpxuat`
--
ALTER TABLE `ptpctpxuat`
  ADD CONSTRAINT `ptpctpxuat_ptpmavtu_foreign` FOREIGN KEY (`ptpMaVTu`) REFERENCES `ptpvattu` (`ptpMaVTu`),
  ADD CONSTRAINT `ptpctpxuat_ptpsoxp_foreign` FOREIGN KEY (`ptpSoXP`) REFERENCES `ptppxuat` (`ptpSoXP`);

--
-- Constraints for table `ptpdondh`
--
ALTER TABLE `ptpdondh`
  ADD CONSTRAINT `ptpdondh_ptpmancc_foreign` FOREIGN KEY (`ptpMaNCC`) REFERENCES `ptpnhacc` (`ptpMaNCC`);

--
-- Constraints for table `ptppnhap`
--
ALTER TABLE `ptppnhap`
  ADD CONSTRAINT `ptppnhap_ptpsodh_foreign` FOREIGN KEY (`ptpSoDH`) REFERENCES `ptpdondh` (`ptpSoDH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
