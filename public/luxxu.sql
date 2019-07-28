-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jul-2019 às 19:48
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luxxu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_type_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `published_at` date NOT NULL,
  `key_words` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `article_divisions`
--

CREATE TABLE `article_divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `article_languages`
--

CREATE TABLE `article_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `article_products`
--

CREATE TABLE `article_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `article_types`
--

CREATE TABLE `article_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `article_types`
--

INSERT INTO `article_types` (`id`, `name`) VALUES
(1, 'Press Release'),
(2, 'Press Cliping'),
(3, 'Ambience'),
(4, 'Ebook');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `family_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `family_id`, `slug`) VALUES
(1, 1, 'chandelier'),
(2, 1, 'suspension'),
(3, 1, 'pendant'),
(4, 1, 'wall'),
(5, 1, 'plafond'),
(6, 1, 'floor'),
(7, 1, 'table-lamp'),
(8, 2, 'sideboard'),
(9, 2, 'console'),
(10, 2, 'dining-table'),
(11, 2, 'center-table'),
(12, 2, 'side-table'),
(13, 2, 'tv-cabinet'),
(14, 2, 'upholstery'),
(15, 2, 'display'),
(16, 2, 'screen'),
(17, 2, 'mirror'),
(18, 2, 'office'),
(19, 2, 'bedroom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category_languages`
--

CREATE TABLE `category_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `category_languages`
--

INSERT INTO `category_languages` (`id`, `category_id`, `language_id`, `name`) VALUES
(1, 1, 1, 'Chandelier'),
(2, 2, 1, 'Suspension'),
(3, 3, 1, 'Pendant'),
(4, 4, 1, 'Wall'),
(5, 5, 1, 'Plafond'),
(6, 6, 1, 'Floor'),
(7, 7, 1, 'Table Lamp'),
(8, 8, 1, 'Sideboard'),
(9, 9, 1, 'Console'),
(10, 10, 1, 'Dining Table'),
(11, 11, 1, 'Center Table'),
(12, 12, 1, 'Side Table'),
(13, 13, 1, 'TV Cabinet'),
(14, 14, 1, 'Upholstery'),
(15, 15, 1, 'Display'),
(16, 16, 1, 'Screen'),
(17, 17, 1, 'Mirror'),
(18, 18, 1, 'Office'),
(19, 19, 1, 'Bedroom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `occupation_id` int(10) UNSIGNED NOT NULL,
  `hear_about_id` int(10) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `collections`
--

CREATE TABLE `collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_words` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `collection_languages`
--

CREATE TABLE `collection_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `collection_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `collection_products`
--

CREATE TABLE `collection_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `collection_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`) VALUES
(1, 'Andorra', 'AD'),
(2, 'United Arab Emirates', 'AE'),
(3, 'Afghanistan', 'AF'),
(4, 'Antigua and Barbuda', 'AG'),
(5, 'Anguilla', 'AI'),
(6, 'Albania', 'AL'),
(7, 'Armenia', 'AM'),
(8, 'Angola', 'AO'),
(9, 'Antarctica', 'AQ'),
(10, 'Argentina', 'AR'),
(11, 'Austria', 'AT'),
(12, 'Australia*', 'AU'),
(13, 'Aruba', 'AW'),
(14, 'Aland Islands', 'AX'),
(15, 'Azerbaijan', 'AZ'),
(16, 'Bosnia and Herzegovina', 'BA'),
(17, 'Barbados', 'BB'),
(18, 'Bangladesh', 'BD'),
(19, 'Belgium', 'BE'),
(20, 'Burkina Faso', 'BF'),
(21, 'Bulgaria', 'BG'),
(22, 'Bahrain', 'BH'),
(23, 'Burundi', 'BI'),
(24, 'Benin', 'BJ'),
(25, 'Saint Barthélemy', 'BL'),
(26, 'Bermuda', 'BM'),
(27, 'Brunei Darussalam', 'BN'),
(28, 'Bolivia, Plurinational State of', 'BO'),
(29, 'Bonaire, Sint Eustatius and Saba', 'BQ'),
(30, 'Brazil*', 'BR'),
(31, 'Bahamas', 'BS'),
(32, 'Bhutan', 'BT'),
(33, 'Bouvet Island', 'BV'),
(34, 'Botswana', 'BW'),
(35, 'Belarus', 'BY'),
(36, 'Belize', 'BZ'),
(37, 'Canada*', 'CA'),
(38, 'Cocos (Keeling) Islands', 'CC'),
(39, 'Congo, the Democratic Republic of the', 'CD'),
(40, 'Central African Republic', 'CF'),
(41, 'Congo', 'CG'),
(42, 'Switzerland', 'CH'),
(43, 'Cote d’Ivoire', 'CI'),
(44, 'Cook Islands', 'CK'),
(45, 'Chile', 'CL'),
(46, 'Cameroon', 'CM'),
(47, 'China*', 'CN'),
(48, 'Colombia', 'CO'),
(49, 'Costa Rica', 'CR'),
(50, 'Cuba', 'CU'),
(51, 'Cape Verde', 'CV'),
(52, 'Curaçao', 'CW'),
(53, 'Christmas Island', 'CX'),
(54, 'Cyprus', 'CY'),
(55, 'Czech Republic', 'CZ'),
(56, 'Germany', 'DE'),
(57, 'Djibouti', 'DJ'),
(58, 'Denmark', 'DK'),
(59, 'Dominica', 'DM'),
(60, 'Dominican Republic', 'DO'),
(61, 'Algeria', 'DZ'),
(62, 'Ecuador', 'EC'),
(63, 'Estonia', 'EE'),
(64, 'Egypt', 'EG'),
(65, 'Western Sahara', 'EH'),
(66, 'Eritrea', 'ER'),
(67, 'Spain', 'ES'),
(68, 'Ethiopia', 'ET'),
(69, 'Finland', 'FI'),
(70, 'Fiji', 'FJ'),
(71, 'Falkland Islands (Malvinas)', 'FK'),
(72, 'Faroe Islands', 'FO'),
(73, 'France', 'FR'),
(74, 'Gabon', 'GA'),
(75, 'United Kingdom', 'GB'),
(76, 'Grenada', 'GD'),
(77, 'Georgia', 'GE'),
(78, 'French Guiana', 'GF'),
(79, 'Guernsey', 'GG'),
(80, 'Ghana', 'GH'),
(81, 'Gibraltar', 'GI'),
(82, 'Greenland', 'GL'),
(83, 'Gambia', 'GM'),
(84, 'Guinea', 'GN'),
(85, 'Guadeloupe', 'GP'),
(86, 'Equatorial Guinea', 'GQ'),
(87, 'Greece', 'GR'),
(88, 'South Georgia and the South Sandwich Islands', 'GS'),
(89, 'Guatemala', 'GT'),
(90, 'Guinea-Bissau', 'GW'),
(91, 'Guyana', 'GY'),
(92, 'Heard Island and McDonald Islands', 'HM'),
(93, 'Honduras', 'HN'),
(94, 'Croatia', 'HR'),
(95, 'Haiti', 'HT'),
(96, 'Hungary', 'HU'),
(97, 'Indonesia', 'ID'),
(98, 'Ireland*', 'IE'),
(99, 'Israel', 'IL'),
(100, 'Isle of Man', 'IM'),
(101, 'India*', 'IN'),
(102, 'British Indian Ocean Territory', 'IO'),
(103, 'Iraq', 'IQ'),
(104, 'Iran, Islamic Republic of', 'IR'),
(105, 'Iceland', 'IS'),
(106, 'Italy*', 'IT'),
(107, 'Jersey', 'JE'),
(108, 'Jamaica', 'JM'),
(109, 'Jordan', 'JO'),
(110, 'Japan', 'JP'),
(111, 'Kenya', 'KE'),
(112, 'Kyrgyzstan', 'KG'),
(113, 'Cambodia', 'KH'),
(114, 'Kiribati', 'KI'),
(115, 'Comoros', 'KM'),
(116, 'Saint Kitts and Nevis', 'KN'),
(117, 'Korea, Democratic People’s Republic of', 'KP'),
(118, 'Korea, Republic of', 'KR'),
(119, 'Kuwait', 'KW'),
(120, 'Cayman Islands', 'KY'),
(121, 'Kazakhstan', 'KZ'),
(122, 'Lao People’s Democratic Republic', 'LA'),
(123, 'Lebanon', 'LB'),
(124, 'Saint Lucia', 'LC'),
(125, 'Liechtenstein', 'LI'),
(126, 'Sri Lanka', 'LK'),
(127, 'Liberia', 'LR'),
(128, 'Lesotho', 'LS'),
(129, 'Lithuania', 'LT'),
(130, 'Luxembourg', 'LU'),
(131, 'Latvia', 'LV'),
(132, 'Libyan Arab Jamahiriya', 'LY'),
(133, 'Morocco', 'MA'),
(134, 'Monaco', 'MC'),
(135, 'Moldova, Republic of', 'MD'),
(136, 'Montenegro', 'ME'),
(137, 'Saint Martin (French part)', 'MF'),
(138, 'Madagascar', 'MG'),
(139, 'Macedonia, the former Yugoslav Republic of', 'MK'),
(140, 'Mali', 'ML'),
(141, 'Myanmar', 'MM'),
(142, 'Mongolia', 'MN'),
(143, 'Macao', 'MO'),
(144, 'Martinique', 'MQ'),
(145, 'Mauritania', 'MR'),
(146, 'Montserrat', 'MS'),
(147, 'Malta', 'MT'),
(148, 'Mauritius', 'MU'),
(149, 'Maldives', 'MV'),
(150, 'Malawi', 'MW'),
(151, 'Mexico*', 'MX'),
(152, 'Malaysia', 'MY'),
(153, 'Mozambique', 'MZ'),
(154, 'Namibia', 'NA'),
(155, 'New Caledonia', 'NC'),
(156, 'Niger', 'NE'),
(157, 'Norfolk Island', 'NF'),
(158, 'Nigeria', 'NG'),
(159, 'Nicaragua', 'NI'),
(160, 'Netherlands', 'NL'),
(161, 'Norway', 'NO'),
(162, 'Nepal', 'NP'),
(163, 'Nauru', 'NR'),
(164, 'Niue', 'NU'),
(165, 'New Zealand', 'NZ'),
(166, 'Oman', 'OM'),
(167, 'Panama', 'PA'),
(168, 'Peru', 'PE'),
(169, 'French Polynesia', 'PF'),
(170, 'Papua New Guinea', 'PG'),
(171, 'Philippines', 'PH'),
(172, 'Pakistan', 'PK'),
(173, 'Poland', 'PL'),
(174, 'Saint Pierre and Miquelon', 'PM'),
(175, 'Pitcairn', 'PN'),
(176, 'Palestine', 'PS'),
(177, 'Portugal', 'PT'),
(178, 'Paraguay', 'PY'),
(179, 'Qatar', 'QA'),
(180, 'Reunion', 'RE'),
(181, 'Romania', 'RO'),
(182, 'Serbia', 'RS'),
(183, 'Russian Federation', 'RU'),
(184, 'Rwanda', 'RW'),
(185, 'Saudi Arabia', 'SA'),
(186, 'Solomon Islands', 'SB'),
(187, 'Seychelles', 'SC'),
(188, 'Sudan', 'SD'),
(189, 'Sweden', 'SE'),
(190, 'Singapore', 'SG'),
(191, 'Saint Helena, Ascension and Tristan da Cunha', 'SH'),
(192, 'Slovenia', 'SI'),
(193, 'Svalbard and Jan Mayen', 'SJ'),
(194, 'Slovakia', 'SK'),
(195, 'Sierra Leone', 'SL'),
(196, 'San Marino', 'SM'),
(197, 'Senegal', 'SN'),
(198, 'Somalia', 'SO'),
(199, 'Suriname', 'SR'),
(200, 'South Sudan', 'SS'),
(201, 'Sao Tome and Principe', 'ST'),
(202, 'El Salvador', 'SV'),
(203, 'Sint Maarten (Dutch part)', 'SX'),
(204, 'Syrian Arab Republic', 'SY'),
(205, 'Swaziland', 'SZ'),
(206, 'Turks and Caicos Islands', 'TC'),
(207, 'Chad', 'TD'),
(208, 'French Southern Territories', 'TF'),
(209, 'Togo', 'TG'),
(210, 'Thailand', 'TH'),
(211, 'Tajikistan', 'TJ'),
(212, 'Tokelau', 'TK'),
(213, 'Timor-Leste', 'TL'),
(214, 'Turkmenistan', 'TM'),
(215, 'Tunisia', 'TN'),
(216, 'Tonga', 'TO'),
(217, 'Turkey', 'TR'),
(218, 'Trinidad and Tobago', 'TT'),
(219, 'Tuvalu', 'TV'),
(220, 'Taiwan', 'TW'),
(221, 'Tanzania, United Republic of', 'TZ'),
(222, 'Ukraine', 'UA'),
(223, 'Uganda', 'UG'),
(224, 'United States*', 'US'),
(225, 'Uruguay', 'UY'),
(226, 'Uzbekistan', 'UZ'),
(227, 'Holy See (Vatican City State)', 'VA'),
(228, 'Saint Vincent and the Grenadines', 'VC'),
(229, 'Venezuela, Bolivarian Republic of', 'VE'),
(230, 'Virgin Islands, British', 'VG'),
(231, 'Vietnam', 'VN'),
(232, 'Vanuatu', 'VU'),
(233, 'Wallis and Futuna', 'WF'),
(234, 'Samoa', 'WS'),
(235, 'Yemen', 'YE'),
(236, 'Mayotte', 'YT'),
(237, 'South Africa', 'ZA'),
(238, 'Zambia', 'ZM'),
(239, 'Zimbabwe', 'ZW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`) VALUES
(1, 'Euros', '€'),
(2, 'Dollars', '$');

-- --------------------------------------------------------

--
-- Estrutura da tabela `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `division_languages`
--

CREATE TABLE `division_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `families`
--

CREATE TABLE `families` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `families`
--

INSERT INTO `families` (`id`, `slug`) VALUES
(2, 'furniture'),
(1, 'lighting');

-- --------------------------------------------------------

--
-- Estrutura da tabela `finishes`
--

CREATE TABLE `finishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `finishes`
--

INSERT INTO `finishes` (`id`, `slug`, `is_active`, `is_deleted`) VALUES
(1, 'metal', 1, 0),
(2, 'crystal-glass', 1, 0),
(3, 'swarovski', 1, 0),
(4, 'cords', 1, 0),
(5, 'marbles', 1, 0),
(6, 'wood', 1, 0),
(7, 'fabric-velvet', 1, 0),
(8, 'glasses', 1, 0),
(9, 'lacquers', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `finish_languages`
--

CREATE TABLE `finish_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `finish_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `finish_languages`
--

INSERT INTO `finish_languages` (`id`, `finish_id`, `language_id`, `name`, `description`) VALUES
(1, 1, 1, 'Metal', ''),
(2, 2, 1, 'Crystal Glass', ''),
(3, 3, 1, 'Swarovski Crystals', ''),
(4, 4, 1, 'Cords', ''),
(5, 5, 1, 'Marbles', ''),
(6, 6, 1, 'Wood', ''),
(7, 7, 1, 'Fabric Velvet', ''),
(8, 8, 1, 'Glasses', ''),
(9, 9, 1, 'Lacquers', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hear_abouts`
--

CREATE TABLE `hear_abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `hear_abouts`
--

INSERT INTO `hear_abouts` (`id`, `name`) VALUES
(1, 'Product Request'),
(2, 'Agent / Store / Showroom'),
(3, 'Business Partners'),
(4, 'Newsletter'),
(5, 'Facebook'),
(6, 'Linkedin'),
(7, 'Other Social Networks'),
(8, 'Email Marketing'),
(9, 'Blog or Online Publication'),
(10, 'Magazine');

-- --------------------------------------------------------

--
-- Estrutura da tabela `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `languages`
--

INSERT INTO `languages` (`id`, `name`, `slug`) VALUES
(1, 'English', 'EN');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `made_at` datetime NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_12_09_143802_create_user_levels_table', 1),
(3, '2018_12_09_143803_create_users_table', 1),
(4, '2018_12_09_143913_create_countries_table', 1),
(5, '2018_12_09_143933_create_occupations_table', 1),
(6, '2018_12_09_144221_create_hear_abouts_table', 1),
(7, '2018_12_09_144237_create_clients_table', 1),
(8, '2018_12_09_144254_create_languages_table', 1),
(9, '2018_12_09_144306_create_families_table', 1),
(10, '2018_12_09_144307_create_categories_table', 1),
(11, '2018_12_09_144347_create_category_languages_table', 1),
(12, '2018_12_09_144406_create_sub_categories_table', 1),
(13, '2018_12_09_144417_create_sub_category_languages_table', 1),
(14, '2018_12_09_144518_create_products_table', 1),
(15, '2018_12_09_144607_create_product_languages_table', 1),
(16, '2018_12_09_144625_create_similars_table', 1),
(17, '2018_12_09_144638_create_product_similars_table', 1),
(18, '2018_12_09_144654_create_finishes_table', 1),
(19, '2018_12_09_144707_create_samples_table', 1),
(20, '2018_12_09_144721_create_product_samples_table', 1),
(21, '2018_12_09_144738_create_finish_languages_table', 1),
(22, '2018_12_09_144756_create_sample_languages_table', 1),
(23, '2018_12_09_144812_create_article_types_table', 1),
(24, '2018_12_09_144825_create_articles_table', 1),
(25, '2018_12_09_144844_create_article_languages_table', 1),
(26, '2018_12_09_144859_create_article_products_table', 1),
(27, '2018_12_09_144913_create_divisions_table', 1),
(28, '2018_12_09_144936_create_division_languages_table', 1),
(29, '2018_12_09_144952_create_article_divisions_table', 1),
(30, '2018_12_09_145132_create_currencies_table', 1),
(31, '2018_12_09_145147_create_wish_lists_table', 1),
(32, '2018_12_09_145211_create_request_types_table', 1),
(33, '2018_12_09_145222_create_requests_table', 1),
(34, '2018_12_09_145233_create_orders_table', 1),
(35, '2018_12_09_145312_create_logs_table', 1),
(36, '2018_12_09_145348_create_product_currencies_table', 1),
(37, '2019_05_29_142453_create_collections_table', 1),
(38, '2019_05_29_142510_create_collection_languages_table', 1),
(39, '2019_05_29_142533_create_collection_products_table', 1),
(40, '2019_05_29_143426_create_order_lines_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `occupations`
--

CREATE TABLE `occupations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `occupations`
--

INSERT INTO `occupations` (`id`, `name`) VALUES
(1, 'Agent'),
(2, 'Architect'),
(3, 'Dealer'),
(4, 'Designer'),
(5, 'Decorator'),
(6, 'Interior Designer'),
(7, 'Manufacturer'),
(8, 'Press'),
(9, 'Retail'),
(10, 'Student'),
(11, 'Other');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `requested_at` datetime NOT NULL,
  `processed_at` datetime NOT NULL,
  `closed_at` datetime NOT NULL,
  `track_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iva` decimal(8,2) NOT NULL,
  `ship_tax` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `order_lines`
--

CREATE TABLE `order_lines` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qtd` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `best_seller` tinyint(1) NOT NULL,
  `is_new` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `has_pdf` tinyint(1) NOT NULL,
  `key_words` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `sub_category_id`, `name`, `slug`, `best_seller`, `is_new`, `is_active`, `is_deleted`, `has_pdf`, `key_words`, `meta_description`) VALUES
(1, 1, 'Empire Square', 'empire-square-chandelier', 0, 1, 1, 0, 1, '', 'An extravagant and modern chandelier with a twist, granted by the vintage-looking crystals. Inspired by the stunning architecture of the Empire State Building all the details contribute to a piece filled with personality and a vigorous splendor. Made of gold-plated brass, the Empire Chandelier Square becomes a unique object of desire.'),
(2, 1, 'Pharo', 'pharo-chandelier', 0, 1, 1, 0, 1, '', 'Inspired by the imponent and robust structure of Lighthouses, Pharo Chandelier represents the rupture of the darkness with an imense, bright and luxurious shine! Made with Gold Plated Brass and Crystal Glass, this piece, is the perfect solution for wide spaces, able to swipe every attention in the room.'),
(3, 1, 'Gala', 'gala-chandelier', 0, 0, 1, 0, 1, '', 'Combining the modern age and luxury, the Gala Chandelier is a revival experience from the palatial apogee. Made with brass and clear crystal glass, this imposing item is perfect for any entrance or ball room.'),
(4, 1, 'Majestic', 'majestic-chandelier', 0, 0, 1, 0, 1, '', 'Our Majestic Chandelier enhances a romantic and daring form perfectly able to adapt itself to any ambiance or style. The combination of traditional techniques and a selection of high quality materials results into an uncommon gold plated and crystal glass beauty that astonishes and empowers its surroundings.'),
(5, 1, 'Liberty', 'liberty-chandelier', 0, 0, 1, 0, 1, '', 'This masterpiece is inspired by one of the most famous statues in the world, The Statue of Liberty. Since the lady wants to enlighten the world, Luxxu intends with this elegant design to enlighten all your projects. It’s made in brass and crystal glass.'),
(6, 1, 'Babel', 'babel-chandelier', 0, 0, 1, 0, 1, '', 'Although the inspiration of this chandelier is still a myth, the elegance present in every crystal is real. We brought the fantasy of detail to reality through these magnificent and lush crystals.'),
(7, 1, 'Empire', 'empire-chandelier', 1, 0, 1, 0, 1, '', 'Our Empire Chandelier is inspired by the stunning architecture of The Empire State Building. It’s a masterpiece with an extravagant shape, capable of transforming every space into a stunning scenario. Due to its vigorous personality it creates an exclusive atmosphere.'),
(8, 1, 'Empire XL', 'empire-xl-chandelier', 0, 0, 1, 0, 1, '', 'With a closely egocentric attitude, the flamboyant Empire XL are conceived. Inspired in the Empire State Building, this new design has the extraordinary power to centralize any atmosphere and transform everything around it. The perfect piece to an exclusive ambience.'),
(9, 1, 'Scala', 'scala-chandelier', 0, 0, 1, 0, 1, '', 'A masterpiece poetically made with the most beautiful Swarovski crystals. All the details are so unique that they have the power to create not only a perfect space, but also to get you involved in passionate emotions.'),
(10, 1, 'Burj', 'burj-chandelier', 0, 0, 1, 0, 1, '', 'Burj chandelier is inspired by one of the most stunning hotels in the world, the Burj Al Arab. Like the hotel, this masterpiece is a symbol of modern age and luxury combined. It’s also a strong, decorative structure, fully made of gold plated brass, with a delicately handmade glass tubes.'),
(11, 1, 'McQueen', 'mcqueen-chandelier', 0, 0, 1, 0, 1, '', 'This amazing chandelier is inspired by one of the most irreverent designers of all time, Alexander McQueen. He is known for his dramatic designs and fashion shows. This masterpiece is as powerful as his exhibitions, combining the best luxury with the most exquisite handmade materials.\r\nMade with gold plated hammered brass, handmade butterflies and majestic flowers ending with the touch of beautiful Swarovski crystals. Bold and feminine, this creation is a real lumen sculpture.'),
(12, 1, 'Waterfall', 'waterfall-chandelier', 0, 0, 1, 0, 1, '', 'The best handmade techniques, the high-quality materials as a gold plated brass, the smooth and elegant shapes of the ribbed fine tubes of crystal glass and the extraordinary circular levels sensations of waterfalls, shows the exquisite capacity of this masterpiece to fill a contemporary loft as well as luxury lobby.'),
(13, 1, 'Guggenheim', 'guggenheim-chandelier', 0, 0, 1, 0, 1, '', 'The Guggenheim Museum is considered to be the “temple of the spirit”. Furthermore, it is the most important structure of its time. The Guggenheim chandelier was designed as a result of the leading-edge architecture.'),
(14, 1, 'Trump', 'trump-chandelier', 1, 0, 1, 0, 1, '', 'This large gold crystal chandelier was sculpted to convey a similar aesthetic of its lineage. On top, connected gold-plated brass structures serve as the main base for an opulent crystal glass masterpiece placed underneath. Each one of these sublime glass tears were designed with high attention to detail and traditional craftsmanship techniques. The perfect luxury chandelier for a refined ambiance.'),
(15, 2, 'Empire II', 'empire-II-suspension', 0, 1, 1, 0, 1, '', 'Empire II Suspension is born from the iconic lines of the Empire collection. A glamorous and extravagant crystal lamp that is the ultimate blend of classic and modern design. A suspension made with layers of gold plated brass and vintage-inspired crystal glass.'),
(16, 2, 'Pharo II', 'pharo-II-suspension', 0, 1, 1, 0, 1, '', 'Inspired by the architecture of lighthouses this crystal lighting fixture is a more detailed version of the Pharo Suspension. A gold plated brass suspension lamp to brighten up the most sumptuous interiors.'),
(17, 2, 'Pharo', 'pharo-suspension', 0, 1, 1, 0, 1, '', 'Pharos was a great lighthouse built hundreds of years ago. It stood on an island outside the ancient Alexandria. Inspired by the robust yet simple architecture of lighthouses, Pharo suspension is a gold plated brass and crystal fixture made to illuminate the most impressive interiors.'),
(18, 2, 'Liberty II', 'liberty-II-suspension', 0, 0, 1, 0, 1, '', 'Liberty II Suspension takes every environment back to ancient Greece where power was a way of living. The vigorous eagle is emphasized by the razor-sharp crystal glass yet the sumptuous gold plated brass steals all the attentions of the room, has only a woman can do. A superb opportunity to create a harmonious lighting installation by using more than one composition.'),
(19, 2, 'Waterfall Sputnik', 'waterfall-sputnik-suspension', 0, 0, 1, 0, 1, '', 'Preserving the inspiration on the natural sensation of waterfalls, this unique piece was born to complete the superb Waterfall Collection. Made with high-quality brass and beautifully handmade ribbed tubes of crystal glass, this powerful creation will fit perfectly into any ambiance.'),
(20, 2, 'Gala', 'gala-suspension', 0, 0, 1, 0, 1, '', 'Designed from the soft blend of emotional yet beautiful lines the Gala Suspension is the perfect outcome of brass and crystal glass. A superb piece for timeless creations.'),
(21, 2, 'Babel', 'babel-suspension', 0, 0, 1, 0, 1, '', 'The circular gold plated brass levels of the Babel Suspension brings elegance to any luxurious ambiance. The exclusive uneven shape of each crystal glass made by the craftsman\'s exceptional know-how creates a unique pattern of lighting refraction. An impressive object of desire.'),
(22, 2, 'Liberty', 'liberty-suspension', 0, 0, 1, 0, 1, '', 'The elegant and sublime lines of the Liberty family are now encompassed in the Liberty Suspension light. It’s complexity and richness blends harmoniously, and is perfect for the ones who love the attention given to detail. Made in brass and crystal glass, this blending is a promise to enlighten any project with its superb elegance.'),
(23, 2, 'Empire Oval', 'empire-oval-suspension', 0, 0, 1, 0, 1, '', 'The iconic Empire chandelier has been an infinite source of inspiration since its creation, and recreated in various forms. Empire Oval is another majestic creation of the omnipresence Empire family, offering a stunning blend of classic and modern design. Celebrating light in an oval dazzling form made with two layers of gold plated brass and crystal glass.'),
(24, 2, 'Tycho Rectangular', 'tycho-rectangular-suspension', 0, 0, 1, 0, 1, '', 'This creation, inspired by the water reflection of the most unusual planetarium in the world was shaped into a luxury lighting suspension perfect for enlighten all dining rooms. Following our high-quality materials, it\'s made with gold plated brass and combined with ribbed crystal glass.'),
(25, 2, 'Harpia', 'harpia-suspension', 1, 0, 1, 0, 1, '', 'Harpia Suspension takes every environment back to ancient Greece where power was a way of living. The vigorous eagle is emphasized by the razor-sharp crystal glass yet the sumptuous gold plated brass steals all the attentions of the room, has only a woman can do. A superb opportunity to create a harmonious lighting installation by using more than one composition.'),
(26, 2, 'Majestic II', 'majestic-II-suspension', 0, 0, 1, 0, 1, '', 'The Majestic Suspension takes the form of two delicate lighting fixtures whose golden plated brass and crystal glass cylinders create an outstanding and exclusive design. With fine attention to detail, the craftsmanship of the Majestic II enables an exquisite and passionate atmosphere to any environment.'),
(27, 2, 'Babel Snooker', 'babel-snooker-suspension', 0, 0, 1, 0, 1, '', 'The myth is shaped into a luxury lighting suspension and presented in every handmade crystal glass. The rectangular gold plated brass levels conceive an exclusive pattern of lighting refraction and create fantastical shades on their surroundings. Designed to brighten a contemporary space with the most elegant presence.'),
(28, 2, 'Trump', 'trump-suspension', 0, 0, 1, 0, 1, '', 'Designed to be one of the Trump’s successors lineage, the characteristic lines of this piece and its sublime tears of crystal glass makes it unique. With an extreme elegance and a luxurious presence, the perfect lighting for the perfect living room.'),
(29, 2, 'Majestic', 'majestic-suspension', 0, 0, 1, 0, 1, '', 'The recreation of the Majestic acquires another level, with bonhomie emancipation of lighting, the glow takes the form of a golden plated brass circle. Made with the finest material, each ribbed crystal glass cylinder creates an atmosphere of irresistible exposure and exclusivity.'),
(30, 2, 'Pearl', 'pearl-suspension', 0, 0, 1, 0, 1, '', 'Owner of a delicate beauty, Pearl is an extravagant shape full of refinement that can produce a special atmosphere by itself. It’s not just a metamorphosis of a jewelry piece formed within the shell, but also a transform into an exceptional piece of craftsman. Its essence is made of pearls and gold plated brass.'),
(31, 2, 'Explosion', 'explosion-suspension', 0, 0, 1, 0, 1, '', 'Explosion is reminiscent of the vast cosmos of modern lighting designs. With a high prestige and a revivalist attitude, this suspension salutes the Sputnik. A strong attention to mighty and luxury detail are reflected in the numerous slim gold plated brass and crystal arms which orbit around a center sphere.'),
(32, 2, 'Tycho Round', 'tycho-round-suspension', 1, 0, 1, 0, 1, '', 'The Tycho combines unique artistry and magnificence with the power of the reflection. Centrally gathered and held by a ring of gold plated brass, the luminous evocation of its design, is reflected in its ribbed crystal glass cylinders and its building of inspiration, the most unusual planetarium in the world.\r\nUse to create an elegant and highly decorative ambience in modern lounges or dining areas.'),
(33, 2, 'McQueen Round', 'mcqueen-round-suspension', 0, 0, 1, 0, 1, '', 'Strengthening the experimentalism in this new design of McQueen’s collection, the approaches to the epitome of contemporary luxury are kept in the tradition of the jewelry artisans. Each sheet is made of hammered brass with gold plated ending and a rhythmic luminosity of the Swarovski crystals. Bring up a savage mind to a perfect lighting solution for common areas like dining rooms or in a hotel lobby.'),
(34, 2, 'McQueen Globe', 'mcqueen-globe-suspension', 0, 0, 1, 0, 1, '', 'Like a savage beauty, this masterpiece brings the powerful evocation of the sublime. It’s perfect to use as a single item or in harmony with more than one element in the same area. Its lush presentation gained inspiration from Alexander McQueen creations and in each leaf is forging its identity in brass and gold plated finishes, giving a set of rhythmic, luminous branches that end up with the touch of beautiful Swarovski crystals.'),
(35, 2, 'Waterfall Round', 'waterfall-round-suspension', 0, 0, 1, 0, 1, '', 'A powerful creation characterized by a circular shape made with gold plated brass combined with ribbed fine tubes of glass. The perfect combination of a glamorous sensation of waterfalls.'),
(36, 2, 'Empire', 'empire-suspension', 0, 0, 1, 0, 1, '', 'The Empire suspension gets its inspiration from the Empire family’s first creation, the Empire chandelier. This exclusive fixture is made with one elegant layer of brass and crystal glass that will fit perfectly in any space.'),
(37, 2, 'Empire Snooker', 'empire-snooker-suspension', 0, 0, 1, 0, 1, '', 'Created with crystal glass and brass, finished with gold plated, this magn ificent suspension is capable of give a luxurious and glamorous look to any space. This product is a true jewelry for your decoration, creating a sophisticated and unique atmosphere.'),
(38, 2, 'Waterfall Rectangular', 'waterfall-rectangular-suspension', 0, 0, 1, 0, 1, '', 'Everything sparkles under this elegant work of art. This masterpiece made with gold plated brass combined with ribbed fine tubes of crystal glass brings a natural feeling of waterfalls to any space. The glamorous sensation of water in the tubes is handmade by glass master craftsman.'),
(39, 3, 'Pharo', 'pharo-pendant', 0, 1, 1, 0, 1, '', 'Representing a beacon of light in the darkness, Pharo is a crystal pendant with a delicate look but a strong structure. Made by the finest craftsmen using the best materials, crystal glass and gold plated brass.'),
(40, 3, 'Gala', 'gala-pendant', 0, 0, 1, 0, 1, '', 'The opulent Gala Pendant is a sign of times. This everlasting light fits neatly into every ambiance. A superb piece tied by a single string.'),
(41, 3, 'Liberty', 'liberty-pendant', 0, 0, 1, 0, 1, '', 'Inspired by The Statue of Liberty, this design was thought to enlighten any ambiance. Made with brass and crystal glass this masterpiece will bring the right luminosity to your home. After the huge success of the Liberty Wall, Liberty Pendant was the right path. More than an accessory, this pendant light is a brilliant solution to any space.'),
(42, 3, 'Guggenheim', 'guggenheim-pendant', 0, 0, 1, 0, 1, '', 'An inspirational illustration of leading-edge architecture, the Guggenheim Museum went far on expectations. After the Guggenheim Chandelier galvanized diverse rooms, the Guggenheim Pendant is now created as the perfect complement. Bold by definition this fixture is a promising focus of attention.'),
(43, 3, 'Babel', 'babel-pendant', 1, 0, 1, 0, 1, '', 'Babel pendant blends perfectly into placid and splendid interior design ambiences. The magnificent irregular shape of each crystal glass conquered by the craftsman’s mastery creates a unique pattern of lighting refraction. Ideal to use as a single item or in harmony with more than one element at the same luxurious ambiance.'),
(44, 3, 'Trump', 'trump-pendant', 0, 0, 1, 0, 1, '', 'Impetuous in its form, the confidence of the asymmetric stripes in gold plated brass and the sublime tears of crystal glass, make this classic contemporary design a true dash pendant of Trump.'),
(45, 3, 'Pearl', 'pearl-pendant', 0, 0, 1, 0, 1, '', 'This magnificent piece has the incomparable charm of the soft and warm lighting that gets even more beautiful when light being casted in its gold plated brass curves. The fluidity of the sculptural shape was achieved by the use of a common material with a piece of jewellery, the pearl.'),
(46, 3, 'Tycho', 'tycho-pendant', 0, 0, 1, 0, 1, '', 'An incredible and contemporary lighting item, in a pendant version of Tycho. Crystal glass held by a gold brass ring creates the most luxurious surroundings as its building inspiration and its reflection on the water. Perfect to be used in spaces illustrating an exuberant elegance.'),
(47, 3, 'McQueen', 'mcqueen-pendant', 0, 0, 1, 0, 1, '', 'The McQueen collection presents a dramatic design tied by a simple string. Showing in all its details a contemporary romantic nature. Creates a boast and dainty ambience.'),
(48, 3, 'Burj', 'burj-pendant', 0, 0, 1, 0, 1, '', 'This exuberant pendant is inspired by the stunning Burj Al Arab Hotel. Like a symbol of the modern age and luxury tied by a simple string.'),
(49, 3, 'Draycott', 'draycott-pendant', 1, 0, 1, 0, 1, '', 'Draycott Tower was the reason to create the Draycott pendant. Its structure has 3 tubes like the original inspiration made in brass and crystal glass. Transmitting elegance and purity to every space, the reception or lo bby areas can be a perfect place for this gorgeous masterpiece.'),
(50, 3, 'Empire', 'empire-pendant', 0, 0, 1, 0, 1, '', 'Like a precious treasure, this noble and elegant pendant is an exceptional decorative element of the Empire`s family, with a discrete side. Inspired by the Empire State Building created with brass and crystal glass, finished with gold plated, ideal to use with more than one piece.'),
(51, 3, 'Waterfall', 'waterfall-pendant', 1, 0, 1, 0, 1, '', 'Everything sparkles under this elegant pendant lamp, made with gold plated brass combined with ribbed fine tubes of crystal glass made by master craftsman. It gives the glamorous sensation of waterfalls, having in mind various ambiences.'),
(52, 4, 'Trump II', 'trump-II-wall', 0, 1, 1, 0, 1, '', 'A refined wall lamp inspired by the architectural lines of the Trump Hotel. A gold plated brass structure finished with sublime crystal glass tears. A wall lamp that provides charming lighting to the most elegant interiors.'),
(53, 4, 'Waterfall XL', 'waterfall-xl-wall', 0, 1, 1, 0, 1, '', 'An elegant and modern wall light made of gold plated brass and handmade fine crystal glass tubes that bring a natural feeling of waterfalls. This piece is a larger version of the standard, and is meant to decorate magnificent spaces.'),
(54, 4, 'Pharo II', 'pharo-II-wall', 0, 1, 1, 0, 1, '', 'Pharos was an island where the most famous and grand lighthouse stood in ancient Alexandria. Nowadays, lighthouses take on simpler forms, just like this wall lamp. Made of gold plated brass and crystal glass, Pharo Wall is a beacon of light to rupture the darkness.'),
(55, 4, 'Tycho Torch Small', 'tycho-torch-small-wall', 0, 1, 1, 0, 1, '', 'The epitome of elegance and distinctiveness that fits modern and classic styles. The combination of brass and ribbed crystals tubes brings the perfect classical and charming touch to both residential and hospitality projects. This small version of the Tycho Torch Wall is ideal for intimate spaces.'),
(56, 4, 'Pharo', 'pharo-wall', 0, 1, 1, 0, 1, '', 'Pharos was an island where the most famous and grand lighthouse stood in ancient Alexandria. Nowadays, lighthouses take on simpler forms, just like this wall lamp. Made of gold plated brass and crystal glass, Pharo Wall is a beacon of light to rupture the darkness.'),
(57, 4, 'Waterfall II', 'waterfall-II-wall', 0, 0, 1, 0, 1, '', 'Made with gold plated brass combined with ribbed fine tubes of crystal glass, this piece from the waterfall collection brings simplicity and elegance to every environment.'),
(58, 4, 'Burj II', 'burj-II-wall', 0, 0, 1, 0, 1, '', 'Burj II Like a symbol of modern age and luxury, Burj conveys the intimate lighting using gold plated brass and crystal glass. The ideal combination to be used as a single wall lighting or in harmony with other elements in the same area.'),
(59, 4, 'Wax', 'wax-wall', 1, 0, 1, 0, 1, '', 'The Wax collection brings an ancient luxury feel, with a contemporaneous variation. This wall fixture fully made of gold plated brass, brings a modern twist to any environment, despite being inspired in the ancient times. Composed of several fine tubes of handmade crystal glass that flow over unique and with a particular shape, gold plated brass. A graceful and unique piece fully made of the best high-end materials.'),
(60, 4, 'Empire II', 'empire-II-wall', 0, 0, 1, 0, 1, '', 'The elegant and extravagant lines of our Empire family deserve another homage in this Empire Wall II. This noble and sublime design is suitable for the most exquisite projects.\r\nThe opulent layers of brass and crystal glass are a promise to inspire even more glamour.'),
(61, 4, 'Gala Torch', 'gala-torch-wall', 0, 0, 1, 0, 1, '', 'The torch version of our Gala family is a symbol of modern age and luxury, giving an elegant and shimmering look to any hospitality and residential project. A graceful piece fully made of the best high-end materials.'),
(62, 4, 'Guggenheim', 'guggenheim-wall', 1, 0, 1, 0, 1, '', 'The awe-inspiring artistry Guggenheim family continues to grow, presenting now the Guggenheim Wall. A magnificent combination of gold plated brass and black Swarovski crystals, it is yet another avant-garde creation that pledges to dazzle everyone in the room. Let this dashing design inspire your projects, forging the most exquisite and elegant ambiances.'),
(63, 4, 'Tycho Torch', 'tycho-torch-wall', 0, 0, 1, 0, 1, '', 'From the classical to the most contemporary ambience, this torch wall version of our Tycho is the epitome of elegance and distinctiveness. A perfect fit for both hospitality and residential projects, the combination of brass and ribbed crystal glass will bring to your project the final twist of medieval charm you were looking for.'),
(64, 4, 'Scala', 'scala-wall', 0, 0, 1, 0, 1, '', 'Elegant and luxurious wall lighting item, incomparable and impressive as the romantic details of Swarovski crystals. Poetically made in gold plated brass, with the handwork techniques of the craftsman, will bring a warm light to any dining or living room set, involving you in passionate emotions.'),
(65, 4, 'Babel', 'babel-wall', 0, 0, 1, 0, 1, '', 'An original and exquisite décor fixture with an unmistakable presence, Babel wall lamp adds a classical appeal to any environment. The craftsman’s crystal work singularity shines back in the circular surfaces where smooth, glamorous shades are reflected and held by a gold plated brass ring. A sublime item for a perfect ambience.'),
(66, 4, 'Tycho Small', 'tycho-small-wall', 1, 0, 1, 0, 1, '', 'Following the creation line, the small version of Tycho Wall creates a cosmopolitan luxury environment that conveys an intimate lighting as its building inspiration and its reflection on the water. Brass with gold plated and crystal glass, ideal combination to be used with more than one piece.'),
(67, 4, 'Tycho', 'tycho-wall', 0, 0, 1, 0, 1, '', 'Just like a discovery, this item brings from the past the way to look beyond. Inspired in the most unusual planetarium in the world and its reflection on the water, conveys the intimate lighting using materials like brass with gold plated and crystal glass. Ideal combination to be used as a single wall lighting or in harmony with other elements in the same area.'),
(68, 4, 'Liberty I', 'liberty-I-wall', 0, 0, 1, 0, 1, '', 'This design presents sublime lines, yet gives at the same time a complex and rich aspect in details. It is very suited for the entrance hall and corridors. The design of Liberty I was created to bring the right brightness for your home decoration and gets its inspiration on the warmth of the statue of liberty torch.'),
(69, 4, 'Liberty II', 'liberty-II-wall', 0, 0, 1, 0, 1, '', 'Inspired by the Statue of Liberty, this design was made for the ones who loves to see all the details. This blending will bring a harmonious enlightenment to your project, not only for its characteristic brightness, but also it presents a superb elegance between the crystal glass and brass.'),
(70, 4, 'Waterfall Torch', 'waterfall-torch-wall', 0, 0, 1, 0, 1, '', 'Combined with the best of contemporary and modern design, made with the best brass, crystal glass and the ability of the craftsman, it’s perfectly fitting on your hospitality project.'),
(71, 4, 'Draycott I', 'draycott-I-wall', 0, 0, 1, 0, 1, '', 'This lighting design was created to decorate the walls of your projects, with the best materials. Made with a simple tube of crystal glass and brass, this lighting design was created to decorate the walls of your project. Showing exuberance and simplicity at the same time, it’s ideal to enlighten pieces of art like paintings or sculptures.'),
(72, 4, 'Draycott II', 'draycott-II-wall', 0, 0, 1, 0, 1, '', 'Following the footsteps of Draycott I wall, this wall lamp contemplates all details of the Draycott Tower in two tubes. For all that, the design remains delicate and exquisite. Another wall lighting solution made of brass and crystal glass.'),
(73, 4, 'Burj', 'burj-wall', 0, 0, 1, 0, 1, '', 'This wall fixture fully made of gold plated brass transmits elegance and sophistication. With delicate handmade crystal glass tubes, this piece brings a magical sensation to every space.'),
(74, 4, 'Empire', 'empire-wall', 0, 0, 1, 0, 1, '', 'The Empire wall gets its inspiration on The Empire State Building and that’s why this creation is so powerful and capable to transform every space in a stunning scenario.'),
(75, 4, 'McQueen', 'mcqueen-wall', 0, 0, 1, 0, 1, '', 'Made in brass with gold plated, handmade butterflies and majestic flowers, ending with the touch of the beautiful Swarovski crystals. The wall version of McQueen chandelier, evokes a dramatic and eccentric sensation of beauty.'),
(76, 4, 'Waterfall', 'waterfall-wall', 0, 0, 1, 0, 1, '', 'This creation represents a natural sensation of waterfalls. An elegant and modern wall lighting made of gold plated brass and handmade crystal glass tubes.'),
(77, 4, 'Trump', 'trump-wall', 0, 0, 1, 0, 1, '', 'A beautiful sight inspired by the subtle forms of the Trump lineage. Composed by high-quality materials only, the delicate forms of this wall lighting will bring a smooth ambience to every room.'),
(78, 5, 'Majestic', 'majestic-plafond', 0, 1, 1, 0, 1, '', 'Our Majestic collection enhances a romantic and daring form. This plafond made of gold plated brass and crystal glass it a piece full of personality. A modern design with a majestic inspiration.'),
(79, 5, 'Empire Square', 'empire-square-plafond', 0, 1, 1, 0, 1, '', 'Offering a functional lighting solution, the Empire plafond brings a twist with a square shape. Produced with the best materials and the finest handmade techniques the plafond creates a glaring and sublime design.'),
(80, 5, 'McQueen', 'mcqueen-plafond', 0, 0, 1, 0, 1, '', 'The McQueen collection, inspired by Alexander McQueen, continues to grow. Combining the most luxurious design with exquisite handmade materials, this gold plated, hammered brass and amber Swarovski crystal piece evokes a dramatic and feminine sensation of beauty. This McQueen Plafond is meticulously designed beauty object, perfect to complement the boldest of projects. It is a powerful and harmonious approach to contemporary luxury.'),
(81, 5, 'Scala', 'scala-plafond', 0, 0, 1, 0, 1, '', 'Designed to add a little more life and light to a luxurious ambiance. Combining the modern and classical design, this sumptuous plafond is made in brass and Swarovski crystals and will match perfectly in stately projects.'),
(82, 5, 'Empire', 'empire-plafond', 0, 0, 1, 0, 1, '', 'The Empire plafond was made not only to offer the best functional lighting, but also to decorate any space with its glaring and sublime design. Suitable for the most exquisite projects and produced with the best materials.'),
(83, 6, 'Pharo', 'pharo-floor', 0, 1, 1, 0, 1, '', 'Pharos Lighthouse was built hundred of years ago and stood on an island outside ancient Alexandria. Made of gold plated brass and crystal glass, Pharo II floor lamp is an interpretation of the robust yet simple architecture of modern lighthouses. A standing beacon of light to rupture the darkness.'),
(84, 6, 'Liberty', 'liberty-floor', 0, 1, 1, 0, 1, '', 'Inspired by the Statue of Liberty, this floor lamp will enlighten any space with its delicate and rich lines. A combination of brass and crystal with a marble base, the Liberty Floor Lamp brings harmony and elegance to any project.'),
(85, 6, 'Gala', 'gala-floor', 0, 0, 1, 0, 1, '', 'Allow yourself to fall for our unique Gala floor lamp elegantly made of gold plated brass and crystal glass. Our splendid floor lamp gets its inspiration in cheerful moments and intense design. It is the ideal contemporaneous shape to take a step further in interior design.\r\nThis masterpiece is the touch of luxury needed to create a prestigious ambiance whether it is exposed in a lounge or a hallway.'),
(86, 6, 'Waterfall', 'waterfall-floor', 0, 0, 1, 0, 1, '', 'Immerse into our Waterfall lighting, a series of ripped fine tubes of handmade crystal glass flowing over the tubular shapes in gold plated brass. An impressive presence in every ambiance made by master craftsman. A new glamorous expression of Waterfall light is given to accomplish a wider and complete range that will light your space.'),
(87, 6, 'Empire', 'empire-floor', 0, 0, 1, 0, 1, '', 'A statement floor lamp that will light up every room with its exuberant shape. Inspired by our Empire family, the Empire floor is made of crystal glass and complemented by a gold plated brass vigorous standing.'),
(88, 6, 'McQueen', 'mcqueen-floor', 1, 0, 1, 0, 1, '', 'Maintaining the elegant and feminine vibe of the entire family, this McQueen floor lamp will certainly brighten everything around it. \r\nThe perfect and complex combination of gold plated hammered leaves with amber Swarovski crystals encompasses a dainty light refraction pattern that will shed its light on everything around it. The romantic and creative nature of this piece provides an artistic and glamorous feeling to any project.'),
(89, 6, 'Tycho', 'tycho-floor', 1, 0, 1, 0, 1, '', 'Giving the Tycho a different twist, but maintaining the same elegant and timeless vibe, this floor lamp is the perfect complement for any project. The ribbed crystals create a unique light refraction that will set the tone for a charming and exquisite ambience.'),
(90, 6, 'Babel', 'babel-floor', 0, 0, 1, 0, 1, '', 'Although the inspiration of this floor light is still a myth, the elegance present in every crystal is real. We brought the fantasy of detail to reality through these magnificent and lush crystals.'),
(91, 6, 'Draycott', 'draycott-floor', 0, 0, 1, 0, 1, '', 'Draycott takes a different posture to create an elegant standing gold plated brass item with subtle lines, complemented by delicate crystals tubes like the original inspiration. Sober and exquisite, transmitting elegance and purity to every space, this floor lighting was designed to bring the most luxurious pleasure to any contemporary ambiance.'),
(92, 7, 'Pharo I', 'pharo-I-table-lamp', 0, 1, 1, 0, 1, '', 'A representation of the architectural lines of lighthouses in the shape of a table lamp. A marble base supports the delicate crystals topped with a brass plate. Pharo I is the perfect finishing touch for any desk or bedside table.'),
(93, 7, 'Pharo II', 'pharo-II-table-lamp', 0, 1, 1, 0, 1, '', 'A representation of the architectural lines of lighthouses in the shape of a table lamp. A marble base supports the delicate crystals topped with a brass plate. Pharo I is the perfect finishing touch for any desk or bedside table.'),
(94, 7, 'Waterfall', 'waterfall-table-lamp', 1, 0, 1, 0, 1, '', 'The Waterfall Table Lamp gives a new glamorous expression of the Waterfall lighting, to accomplish a wider and complete range that will light your space. \r\nThis unique table lamp has a series of ripped fine tubes of handmade crystal glass flowing over tubular shapes in gold plated brass. It combines a smooth and beautiful base, made of Emperador marble, that makes the Waterfall Table Lamp unique and immersive.'),
(95, 7, 'Liberty', 'liberty-table-lamp', 0, 0, 1, 0, 1, '', 'The Liberty Table Lamps is born from a collection that has never ceased to inspire us. Likewise, LUXXU wants you to be inspired by this elegant piece, designed to give a subtill yet inescapable richness to any room. \r\nThis highly detailed combination of brass and crystal glass with marble creates a sublime piece of design.'),
(96, 7, 'Tycho', 'tycho-table-lamp', 0, 0, 1, 0, 1, '', 'The ribbed crystal in this collection, evoking the reflection pattern on water of the Tycho Planetarium, gave place to another elegantly cosmopolitan piece of lighting. This Tycho Table Lamp, made in brass and crystal glass, was designed to fit perfectly any modern ambience, conveying a touch of timeless harmony.'),
(200, 8, 'Darian', 'darian-sideboard', 1, 0, 1, 0, 1, '', 'The Darian sideboard draws inspiration from the power of the shield and sphere of protection, as well as the dynamic from its irregular shape. A precise knowledge of production techniques and materials, each with different specialities, from metal-work to wood carving. It features a cluster of gold plated brass asymmetrical bars envelope a wood structure in black lacquer, the resulting works are a blend of artful and stout personality.\r\n\r\n'),
(201, 8, 'Tenor', 'tenor-sideboard', 1, 0, 1, 0, 1, ' ', 'Created to be magnanimous in its appearance, the smooth and elegant shapes of this black sideboard, highly stylish, provides a generous amount of storage space being imposing and lends an attractive presence to any room. The gold plated brass asymmetric bars give the extraordinary touch in framed of this particleboard ends with a textured surface used black lacquer finish. A unique product for those who have a peculiar taste for new editions and conceptual designs.'),
(202, 9, 'Scarp', 'scarp-console', 1, 0, 1, 0, 1, ' ', 'When rebel meets nature it creates nothing but an uncontrollable force. Scarp Console\'s insurgent gold plated brass legs and nero marquina marble bring out the strongest presence in modern projects.\r\nThe powerful strength of this console leaps any room into a deep sense of robustly dynamic.'),
(203, 9, 'Nubian', 'nubian-console', 0, 0, 1, 0, 1, ' ', 'The glorious geometrical construction of the Nubian pyramids outcome a contrasting shape design. Characterised by its complexity of noble materials such as glass, walnut root veneer and brass, Nubian Console is an elaborated embodiment of relief. A promising main focus in any surrounding.'),
(204, 9, 'Spear', 'spear-console', 0, 0, 1, 0, 1, ' ', 'Through the imposing, sharp pen the Spear console was designed. The diversity of its materials from brass, wood, leather and marble result into a console with straight lines. From the Ancient Rome comes its inspiration, bringing a timeless design to this art piece. A symbiosis of toughness and elegance, perfect to bring an environment to its most luxurious ambiance.'),
(205, 9, 'Beyond', 'beyond-console', 0, 0, 1, 0, 1, ' ', 'The best handmade techniques find balance in a delicate work in wood softened with touches of brass that reflect warm and golden tones on its polished surface. An impressive display of elegance, Beyond console shows the exquisite capacity to fill a variety of ambiances thanks to its luxury presence.'),
(206, 9, 'Vertigo', 'vertigo-console', 0, 0, 1, 0, 1, ' ', 'Prove to be impressive through its conspicuous and elegant lines, this prodigious console has a striking dynamic pose. In either modern or classic entrance halls, the shimmering line in gold plated brass merge in any living room decoration in Nero Marquina marble finish. A fascinating and exclusive console that exhales luxury and a cohesive style.'),
(207, 10, 'Darian', 'darian-dining-table', 0, 0, 1, 0, 1, '', 'The Darian dining table gets its inspiration from our prodigious Darian sideboard. This stunning handcraft table is made of round smoked glass placed on top of a wooden structure in black lacquer touched by gold plated brass bars.'),
(208, 11, 'Vertigo', 'vertigo-center-table', 1, 0, 1, 0, 1, ' ', 'Vertigo center table was made with sleek design giving a classy feel and a luxurious appeal. The unusual forms in gold plated brass involve the nero marquina marble making the center of living rooms the aura of your projects.'),
(209, 11, 'Beyond', 'beyond-center-table', 1, 0, 1, 0, 1, '', 'An impressive display of elegance, Beyond center table shows the exquisite capacity to fill a variety of ambiences thanks to its luxury presence. This delicate work of brass, wood and marble reflects warm and golden tones on its polished surface.\r\n\r\n'),
(210, 12, 'Prisma', 'prisma-side-table', 0, 0, 1, 0, 1, ' ', 'The Prisma side table conveys a spiral and passionate design that definitely seems to go beyond this world. A celestial piece handcrafted using traditional techniques and materials like black lacquer, brass and Nero Marquina marble with one purpose only – to transform any exclusive environment.\r\n\r\n'),
(211, 12, 'Beyond', 'beyond-side-table', 0, 0, 1, 0, 1, ' ', 'Beyond side table boasts elegance and discerning taste through inspirational symmetrical design. Featuring both contrasting shapes and materials from a geometric Nero Marquina marble to a gold plated brass detail and a unique black lacquer textured finish. An exclusive furniture item that stands out due to its perfectly balanced synthesis.\r\n\r\n'),
(212, 10, 'Beyond', 'beyond-dining-table', 1, 0, 1, 0, 1, ' ', 'The distinctive details make a delicate adjustment between, the best hand worked wood with touches of brass and the warm and golden tones on its polished surface. Created in an outstanding moment of inspiration, this luxury statement table makes the perfect center point of any dining setting.\r\n\r\n'),
(213, 10, 'Littus', 'littus-dining-table', 1, 0, 1, 0, 1, ' ', 'The creation of Littus Dining Table was made in order to strengthen a unique concept. This luxury dining table has come to symbolize the spiral, is a curve in the space, which runs around a centre in a special way like the great decisions are taken around powerful tables among determined minds. With quality signature, Littus Dining Table embodies handmade techniques such as marble cutting, gold plated brass, executed by some of the best craftsman.\r\n\r\n'),
(214, 11, 'Empire', 'empire-center-table', 1, 0, 1, 0, 1, ' ', 'This center table has an extravagant shape of refinement and style. It is carefully made in brass and nero marquina marble. This is a combination between classic and modern design, perfect for every interior setting.'),
(215, 12, 'Empire', 'empire-side-table-big', 0, 0, 1, 0, 1, ' ', 'Empire State Building was the inspiration for this stunning side table. It adds a classic yet modern appeal to any space. Made with the highest quality of brass and nero marquina marble, this is ideal to create a spectacular and sophisticated living room, entrance or bedroom.\r\n\r\n'),
(216, 12, 'Empire', 'empire-side-table-small', 0, 0, 1, 0, 1, ' ', 'Made with the highest quality of brass and nero marquina marble, Empire side table wins a new form. It’s a versatile item which gives a sophisticated ambiance to any setting, from living room to an entrance or a bedroom.'),
(217, 32, 'Charla', 'charla-two-seat-chair', 0, 0, 1, 0, 1, ' ', 'Charla two seat chair is a splendid object of boundless elegance with an opulent touch. This marvelous composition for two is the perfect example of timeless lines with a modern twist, by using a complexity of luxurious materials, such as velvet, brass and lacquered wood. An imperative in the Charla family successor lineage.'),
(218, 27, 'Charla', 'charla-dining-chair', 1, 0, 1, 0, 1, ' ', 'Charla dining chair is a splendid object of boundless elegance. This marvelous design is the perfect example of timeless lines with a modern twist, by using a complexity of luxurious materials, such as velvet, brass and lacquered wood.'),
(219, 28, 'Otto', 'otto-armchair', 1, 0, 1, 0, 1, '', 'Otto armchair is LUXXU’s omen to its prosperous future, a luxurious design Empire. Made with noble materials, such as velvet and leather, the brass detail elevates this armchair into a masterpiece. Meaning greatness and fortune, this armchair is a statement in every imperial ambience.'),
(220, 23, 'Prisma', 'prisma-stool', 0, 0, 1, 0, 1, ' ', 'The prisma stool is a symphony of meticulous proportions based on a simple square black velvet, created with the same empowering and passionate aesthetics in its design. The unified softness conceptions of well-defined geometric shapes end in a gold plated surplice. This luxury item adapts perfectly to any ambiance or style.'),
(221, 23, 'Noir', 'noir-stool', 0, 0, 1, 0, 1, ' ', 'The dual personality of this stool stays in a unique beautifully balance between softness black velvet and strong personality in a gold plated brass ring. The smooth curved lines and its versatility are rather appealing and destined to bring elegance to a luxurious space perfect for both a contemporary or classic setting.\r\n\r\n'),
(222, 23, 'Armour', 'armour-stool', 1, 0, 1, 0, 1, ' ', 'An upholstered delicacy emerging from the careful application of luscious black velvet touches and passionate design. Extra luxury feel is given by the gold plated brass finish to this marvelous stool, which will embellish the most sumptuous contemporary and classic setting.'),
(223, 33, 'Empire', 'empire-column-display', 0, 0, 1, 0, 1, '', 'Inspired by Empire State Building’s architecture, the Empire column display takes the same empowering and passionate aesthetics in its design. A luxury item capable of providing a classic yet modern feel to any space with its stunning gold plated brass and Nero Marquina marble. Perfect for classic entrance halls and livings rooms.'),
(224, 16, 'Delta', 'delta-screen', 0, 0, 1, 0, 1, ' ', 'Delta Screen explodes with a dramatic but elegant black, noting a sensual geometry in the flow of the four panels.\r\nThis unique folding screen is perfectly wrapped in polished brass & black lacquered wood and adorned with black leather.\r\nUnleash the reality of the unforgettable and addictive taste of uniqueness.'),
(225, 16, 'Empire', 'empire-screen', 0, 0, 1, 0, 1, ' ', 'If you\'ve always imagined your projects with exquisite details this Empire folding screen donates a deluxe feel to the most stylish spaces. The three panels are made in smoked mirror and gold plated brass. The Empire folding screen is not only important for decoration but these partitions are also convenient to divide spaces. The ultimate luxury for a dressing room by providing privacy.'),
(226, 17, 'Orbis', 'orbis-mirror', 0, 0, 1, 0, 1, ' ', 'The Orbis mirror was inspired by ancient times in history, adopting the same simplicity of the golden era. Creates an atmosphere of irresistible exposure and exclusivity, this creation aims to total immersion in sumptuously glamorous interiors and the gold colour enhances the luxurious details present in its design.'),
(227, 17, 'Explosion', 'explosion-mirror', 1, 0, 1, 0, 1, ' ', 'The recreation of the Explosion achieves a luxurious level. The perfect solution to highlight any ambience with its prestigious and revivalist attitude. A strong attention to mighty and luxury detail are reflected in the numerous slim gold plated brass and crystal arms which orbit around a smoked black mirror glass. This decorative mirror lives to burst interiors with its traditional craftsmanship and luxurious details.'),
(228, 17, 'Crown', 'crown-mirror', 0, 0, 1, 0, 1, ' ', 'More than just a simple piece of art, the Crown mirror represents a living tribute to the beauty. The breathtaking combination of smoked black mirror and gold plated brass, challenges the notion of exquisiteness and breaks all the creative boundaries.'),
(229, 34, 'Majestic XL', 'majestic-xl-wall-light-mirror', 0, 0, 1, 0, 1, ' ', 'The emancipation of lighting reflects a fascinating design of the craftsmen, giving Majestic a whole new dimension. The glow takes the form of a golden plated brass circle and each of its ribbed crystal glass cylinders evoke a petrifying effect in any setting. A mirror to desire.'),
(230, 17, 'Darian Gold', 'darian-gold-mirror', 0, 0, 1, 0, 1, ' ', 'Brass is the only material that has a perfect harmony in order to create a masterpiece like the Darian Gold. A simple yet unique luxury item that captures both the functionality of a mirror and the splendour of an art piece. Decorative, practical and divine.'),
(231, 17, 'Darian Black', 'darian-black-mirror', 1, 0, 1, 0, 1, ' ', 'Materials like black lacquer and brass are combined into a perfect harmony in order to create a masterpiece like the Darian Black. A simple yet unique luxury item that captures both the functionality of a mirror and the splendour of an art piece. Decorative, practical and divine.'),
(232, 17, 'Empire', 'empire-mirror', 1, 0, 1, 0, 1, ' ', 'Empire mirror found its inspiration in the extravagant and vigorous Empire Collection. With its will to keep up with the Empire family high standards on exquisite and exceptional design, the Empire mirror’s powerful lines are the result of an extraordinary precision of handmade techniques. Adequate to transform any space into a luxurious atmosphere.'),
(233, 34, 'Mcqueen', 'mcqueen-wall-light-mirror', 0, 0, 1, 0, 1, ' ', 'A meticulously designed beauty object. The approach to the epitome of contemporary luxury is kept in the tradition of the jewelry artisans. Like a savage beauty, this elegant mirror brings the powerful evocation of the sublime. The magnificent foliage is made of hammered brass with gold plated finish and a rhythmic luminosity of the Swarovski crystals.'),
(234, 34, 'Majestic ', 'majestic-wall-light-mirror', 0, 0, 1, 0, 1, ' ', 'The glow takes the form of a golden plated brass circle and each of your ribbed crystal glass cylinders evokes a petrifying effect in any setting. This emancipation of lighting reflects fascinating design of the craftsmen to become a mirror of desire. So is the Majestic.'),
(235, 9, 'Apotheosis', 'apotheosis-console', 0, 0, 1, 0, 1, '', 'A hymn to sophistication and design, the Apotheosis console creates a strong presence that will revolutionize the looks of any project. Its straight lines make for a glorious construction, embodying the spirit of exclusive design.<br>\r\nA daring and elegant balance between marble, lacquer and brass lines.'),
(236, 9, 'Suspicion', 'suspicion-console', 0, 0, 1, 0, 1, '', 'The zenith between elegance and balance, the Suspicion console is daringly sculpted in stone and fills any room with lavishing luxury. This console is the epitome of intricate equilibrium, joining marble with fine brass lines.'),
(237, 12, 'Spear', 'spear-side-table', 0, 0, 1, 0, 1, '', 'Inspired by Ancient Rome, the Spear Side Table features a timeless design on which sleek gold plated lines support a rectangular platform made in Nero Marquina marble. The base is dramatically tapered allowing a beautiful intersected boundary. A symbiosis of toughness and elegance to be paired with a mirrored surface.'),
(238, 12, 'Darian', 'darian-side-table', 0, 0, 1, 0, 1, '', 'Darian is a luxurious round side table, imponent and lavish. Resonates elegance in its luxurious silhouette with the composed blend of nero marquina marble, involved with fine gold plated brass detailing. This luxury item adapts perfectly to any ambiance or style.'),
(239, 10, 'Algerone', 'algerone-dining-table', 0, 0, 1, 0, 1, '', 'Algerone is an opulent round dining table, inspired by architectural elements, it was designed to remind us of the unique strength and class that only marble has. The carrara marble circular top is supported by a sleek base adorned with black leather and polished brass detailing. A design that will redefine the way you perceive dining tables.'),
(240, 28, 'Navis', 'navis-armchair', 0, 0, 1, 0, 1, '', 'Navis armchair, as its names suggest, is inspired by the epoch of the discoveries’ courageous vessels. A heritage of courageous ancestors prevails in this straight line handcrafted chair. The absolute elegant perspective of an era, perfect for the most sumptuous ambiances.'),
(241, 28, 'Saboteur', 'saboteur-armchair', 1, 0, 1, 0, 1, '', 'Inspired by the noir movie scene , the Saboteur is the perfect meeting between luxury and comfort. Using only the finest materials, such as velvet and brass, this armchair will become your favourite dwelling in the house.'),
(242, 34, 'Mcqueen Rectangular ', 'mcqueen-rectangular-wall-light-mirror', 0, 0, 1, 0, 1, '', 'In line with the entire McQueen family, this McQueen Rectangular Light Mirror is a meticulously designed beauty object. The tradition of the jewellery artisans is kept in this approach to contemporary luxury. <br>\r\nA sublime and powerful evocation of savage beauty. The magnificent foliage is made of hammered brass with gold plated finish and a rhythmic luminosity of the Swarovski crystals.'),
(243, 17, 'Scala', 'scala-mirror', 0, 0, 1, 0, 1, '', 'Surrender to the beauty of crown jewels forms, a gold round mirror that embodies a living tribute to ancient art and craftsmanship. Poetically made in gold plated brass, Scala mirror is combined with a black smoked glass, expanding the boundaries of creativity and sophistication.'),
(244, 17, 'Crackle', 'crackle-mirror', 0, 0, 1, 0, 1, '', 'The luxurious Crackle mirror is made of the finest gold plated brass and smoked black mirror. Inspired by the opulence of golden nuggets it is graced with the ability to create exclusive and refined ambiances. This geometric design resembles a shattered mirror and promises to create the most glamorous interiors.');
INSERT INTO `products` (`id`, `sub_category_id`, `name`, `slug`, `best_seller`, `is_new`, `is_active`, `is_deleted`, `has_pdf`, `key_words`, `meta_description`) VALUES
(245, 13, 'Apotheosis', 'apotheosis-tv-cabinet', 0, 0, 1, 0, 1, '', 'An anthem of sophistication and exclusive design. The Apotheosis TV Cabinet is a defining presence and will change any room it is part of, creating a glorious atmosphere around it. A daring, yet elegant balance between the finest materials, nero maquina marble, gold plated brass and black lacquered wood.'),
(246, 12, 'Imperium', 'imperium-side-table', 0, 0, 1, 0, 1, '', 'The Imperium Side Table draws its inspiration from the classical lines of dramatic castles and great city walls, reminding us of opulent crowns. A lacquered wood structure embellished with gold plated brass and nero marquina marble. Being a strong and powerful presence in any ambiance, this side table is a symbol of strength, that will bring greatness to every interior setting.'),
(247, 11, 'Darian', 'darian-center-table', 0, 0, 1, 0, 1, '', 'The Darian takes up a new form, this time in a lavish center table. A proof that precise knowledge and expert craftsmanship can create a luxurious silhouette. Involving the glossy black lacquered wood are fine gold plated brass lines and it’s finished off with a circular nero marquina marble top. A sumptuous piece that blends the splendor of art with a strong personality.\r\n\r\n'),
(248, 12, 'Nubian', 'nubian-side-table', 0, 0, 1, 0, 1, '', 'The glorious geometrical construction of the Nubian pyramids outcome a contrasting shape design. Characterised by its complexity of noble materials such as glass, wood, and brass, the Nubian Side Table is a complex embodiment of comfort. An auspicious highlight in any ambiance.'),
(249, 12, 'Darian II', 'darian-II-side-table', 0, 0, 1, 0, 1, '', 'Inspired by our remarkable Darian sideboard, the Darian Side Table II rises has a luxurious side table, impotent and lavish. A ravishing handcraft side table, that is made of round smoked glass placed on top of a wooden structure in black lacquer touched by gold-plated brass bars. This luxury item adapts perfectly to any ambiance or style.'),
(250, 12, 'Apotheosis', 'apotheosis-side-table', 0, 0, 1, 0, 1, '', 'A hymn to sophistication and design, this side table adds a vigorous presence that revolutionizes the look of any project. Its unique form reveals the talent of the craftsmen and the exclusivity of the design, resulting in a glorious construction. <br>  A daring and elegant balance of polished brass, black lacquer and emperador marble.'),
(251, 11, 'Apotheosis', 'apotheosis-center-table', 0, 0, 1, 0, 1, '', 'This center table represents a living anthem of sophistication and exclusive design. The Apotheosis will change any division, creating a remarkable and unique atmosphere. This c is center table audacious and splendid harmony between the finest materials, polished brass, black lacquer and emperador dark marble.'),
(252, 24, 'Anguis', 'anguis-sofa', 0, 0, 1, 0, 1, '', 'Inspired by its peculiar shape, the Anguis is a modular and adaptable Sofa, built to take a variety of profiles without losing its comfortable and luxurious facet. <br>\r\nThe skin that covers it reflects the refinement of its manufacture and ensures high levels of strength and durability, while the lacquered wood conveys a sense of refinement in the details. <br>\r\nA timeless piece built using manual processes, and high quality materials, able to adapt to the most varied ambiences.'),
(253, 17, 'Explosion XL', 'explosion-XL-mirror', 0, 0, 1, 0, 1, '', 'The recreation of the Explosion XL Mirror achieves a new luxurious level, without losing its roots. The perfect solution to highlight any ambience with its prestigious and revivalist attitude. A strong attention to mighty and luxury detail are reflected in the numerous slim gold plated brass and crystal arms which orbit around a sizable smoked and black mirror glass. The Explosion XL Mirror rises to burst interiors with its traditional craftsmanship and luxurious details.'),
(254, 31, 'Anguis', 'anguis-sofa-center', 0, 0, 1, 0, 1, '', 'The beauty of this piece dwels in the contrast of it’s textures. Comfort and elegance have a harmonious relation here, either by the subtle use of brass either by the use of the leather. A modular piece that can be easily customized 	without losing its identity. The result of the coordinated work between design and craftsmanship.'),
(255, 11, 'Crackle', 'crackle-center-table', 0, 0, 1, 0, 1, '', 'Following the same inspirational lines as the Crackler family, this pieces stands itself by the complexity of the manual work on the brass and the technique used to apply the walnut root veneer. It will fit as an hotel lobby element as well as a table for the intimacy of your house.'),
(256, 12, 'Crackle', 'crackle-side-table', 0, 0, 1, 0, 1, '', 'Following the lines of the glamorous Crackle Family, this Side Table proposed refined lines and an elegant approach of design. The geometric aspect of this piece reflect the expertise and manual work from our craftsmen. Opulent and Majestic, the Crackle Side Table will elevate any interior decoration!'),
(257, 24, 'Saboteur', 'saboteur-sofa', 0, 0, 1, 0, 1, '', 'Continuing the elegant Saboteur line, this sofa was created with the perfect combination between velvet and brass, merging into a true luxury symbiosis. Made with the best handmade techniques, this masterpiece gives the best comfort touch to any exquisite look.'),
(258, 30, 'Charla', 'charla-bar-chair', 1, 0, 1, 0, 1, '', 'Created to complete the Charla timeless line, this exquisite piece joins the best materials, such as velvet, brass, lacquered wood with the finest techniques of our craftsman. Reuniting our finest luxury values, this design promises to steal the attention of any interior.'),
(259, 24, 'Navis', 'navis-sofa', 0, 0, 1, 0, 1, '', 'Navis brings with itself the strength of an era. A symbol of courage and daring.  The design meets comfort creating a strong but elegant piece. This sofa puts together velvet, leather and a touch of polished brass in order to offer a discreet but sumptuous contrast.'),
(260, 10, 'Littus Oval', 'littus-oval-dining-table', 0, 1, 1, 0, 1, '', 'Littus oval dining table Littus, with a very strong style and sculptural features, has come to be recognised by its distinctive spiral. With the same quality signature of the collection, this oval table embodies handmade techniques by some of the best craftsman.'),
(261, 12, 'Vertigo', 'vertigo-side-table', 0, 1, 1, 0, 1, '', 'With a sublime shape, this side table is the highest proof of ultimate design. It\'s composed by perfectly crafted marble, polished brass and smoked glass which creates a unique and sophisticated environment wherever it\'s placed. A fascinating and exclusive piece that exhales luxury and a cohesive style. The Vertigo Side Table is the definition of a luxurious lifestyle.'),
(262, 29, 'Tenor', 'tenor-ottoman', 0, 1, 1, 0, 1, '', 'A highly stylish ottoman with a smooth and elegant shape. Made with grey velvet and with polished brass legs, this upholstered beauty will bring an attractive presence to any room, hotel suite or master bedroom. '),
(263, 39, 'Waltz', 'waltz-nightstand', 0, 1, 1, 0, 0, '', 'Honouring a refined and unmistakable character that seduces by the beauty of its contrasts, the Waltz nighstand was born. Transpiring elegance, sobriety and decisiveness,the high material quality dismisses the ordinary to create exclusive and versatile solutions.'),
(264, 35, 'Waltz', 'waltz-desk', 0, 1, 1, 0, 1, '', 'Functional and contemporary with an unmistakable style, the metal feet is decorative as well as structural, offering a new interpretation of design. The contrast of it’s textures is the result of a coordinated work between design and craftsmanship.'),
(265, 24, 'Charla', 'charla-sofa', 0, 1, 1, 0, 1, '', 'Designed in leather with a brass and lacquered wood base, Charla Sofa is an item of boundless elegance. Timeless with a modern twist this comfortable sofa is ideal for living rooms, dressing rooms, or commercial spaces as boutiques.'),
(266, 28, 'Charla', 'charla-armchair', 0, 1, 1, 0, 1, '', 'Charla Armchair is a modern twist on timeless and classic armchairs. Finished with leather upholstery the Charla fits into most interior design styles and can be customized to fit into any color scheme. An item of boundless elegance that blends luxury and comfort into one.'),
(267, 28, 'Anguis', 'anguis-armchair', 0, 1, 1, 0, 1, '', 'A modern armchair that stands out in any lounge or living room due to its contrasting, yet harmonious, textures.The round shape ensures comfort. Made only with finest materials, the brass legs contrast with the black velvet and wood finish and create a sophisticated and lavish armchair that brings a touch of luxury to any interior.'),
(268, 28, 'Ocadia', 'ocadia-armchair', 0, 1, 1, 0, 1, '', 'A brass frame supports the arched backrest, designed to provide comfort. High durability, comfort and style define the Ocadia Armchair, a velvet armchair that provides just the right amount of luxury. Inspired by turtles’ shells the Ocadia is a luxurious way to sit back. Ideal for bedrooms, living rooms, lounges or office spaces.'),
(269, 27, 'Galea', 'galea-dining-chair', 0, 1, 1, 0, 1, '', 'Galea is a glamorous dining chair that blends ancient with modern. It draws inspiration from an helmet worn by warriors in the Roman Empire and is brought to life through traditional production techniques. The result is a velvet and leather modern armchair, which elegant silhouette ensures it’s perfect for upscale restaurants and modern dining rooms.'),
(270, 26, 'Charla', 'charla-chaise-longue', 0, 1, 1, 0, 1, '', 'Chaise Longues have long been associated with luxury design and opulent master bedrooms. The Charla Chaise Longue takes on the Charla lines and brings a modern twist to these timeless furnishings. Upholstered in leather, the high-end modern chaise longue is the ultimate expression of luxury, comfort and elegance.'),
(271, 23, 'Charla', 'charla-stool', 0, 1, 1, 0, 1, '', 'A leather stool with a tufted finish that brings luxury and comfort together into one. Its versatile nature ensures it adapts to most styles and functions and can be placed accordingly - by a dressing table, in a dining or living room. Timeless with a modern twist, Charla Stool is an item of boundless elegance.'),
(272, 27, 'Nura', 'nura-dining-chair', 0, 1, 1, 0, 1, '', 'Featuring a uniquely shaped backrest, Nura Dining Chair is the ultimate expression of cozy luxury. Shaped like an U, Nura is made of leather, brass and wood and provides an embracing comfort only found in armchairs with the same shape. Ideal for cozy yet glamorous dining rooms and restaurants.'),
(273, 25, 'Anguis', 'anguis-single-sofa', 0, 1, 1, 0, 1, '', 'The Anguis single sofa is a a modern and comfortable sofa for one. The round shape ensures comfort, while the contrasting colors and materials create a sophisticated design. Made for powerful offices and lavish master bedrooms, this sofa made of velvet, wood, brass and leather brings the ideal touch of luxury.'),
(274, 22, 'Charla', 'charla-office-chair', 0, 1, 1, 0, 1, '', 'Its ergonomic shape ensures a right posture, which allows working comfortably for hours, and the best materials, velvet, brass and lacquered wood ensure high-quality. All combined into one office chair, that ties comfort and luxury together. Timeless with a modern twist, Charla office Chair is an item of boundless elegance.'),
(275, 22, 'Charla Small', 'charla-small-office-chair', 0, 1, 1, 0, 1, '', 'The smaller version of the Charla Office Chair much like the bigger version ties luxury and comfort together. No comfortability was compromised in this smaller version, an office chair made with the best materials. Like the original design, it’s an item of boundless elegance and a timeless design that offers a modern twist to office spaces.'),
(276, 9, 'Myllo', 'myllo-console', 0, 1, 1, 0, 1, '', 'Inspired by the distinct engineering present in the tallest bridges, Myllo Console functions as symbol of solitude and inovation. Composed by Marble and Polished Brass it reflects the rawness and perfection of an engineer\'s masterpiece, fragile as it may appear but solid and firm that promises to hold your breath. It\'s a statement piece that holds any room\'s highest expectations.'),
(277, 10, 'Apotheosis', 'apotheosis-dining-table', 0, 1, 1, 0, 1, '', 'Inspired by the Greek Mythology, the Apotheosis Dining Table is the glorification of design and innovation. The polished brass legs give an unusual and chic effect to this piece that supports a marble and wood top. This combination and design reflect the elevation of what is earthly to a godlike stature, it defines the creation of something that is perfect. \r\nThis piece is the ultimate luxury of a modern dining room.'),
(278, 11, 'Vertigo Outdoor', 'vertigo-outdoor-center-table', 0, 1, 1, 0, 1, '', 'Vertigo collection is the ultimate expression of luxury lifestyle.Made of the finest materials, stainless steel and carrara marble, this center table fits into any setting, from outdoor lounge areas to the indoors. Made for the outdoors, it’s a center table that exhales luxury and style.'),
(279, 33, 'Vertigo', 'vertigo-column-display', 0, 1, 1, 0, 1, '', 'The elegant lines of the Vertigo Collection are the proof of ultimate design. The column display strikes a pose and becomes the perfect luxury display for collector items, art, or watches. Made of gold plated brass with a marble top, Vertigo exhales luxury.'),
(280, 36, 'Waltz', 'waltz-bookcase', 0, 1, 1, 0, 1, '', 'With an unmistakable style, this exquisite piece joins the best materials with the finest techniques of our craftsman. An anthem of sophistication and exclusive design.'),
(281, 37, 'Waltz', 'waltz-closet', 0, 1, 1, 0, 1, '', 'Waltz closet is an elegant modular clothing storage solution. Made with the finest materials, walnut root veneer, black leather, black lacquered wood, brass and smoked mirror. Waltz is the ideal closet for a luxury master bedroom or to create a dreamy organization system featuring shelves, rods and drawers.'),
(282, 38, 'Waltz', 'waltz-dresser', 0, 1, 1, 0, 1, '', 'The Waltz dresser dismisses the ordinary and creates an exclusive and versatile solution for storage, with eight spacious drawers, which are embellished with brass hardware. An elegant dresser, ideal for a luxury master bedroom or wardrobe and made of the finest materials and the best luxury finishes.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_currencies`
--

CREATE TABLE `product_currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `currency_id` int(10) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `product_currencies`
--

INSERT INTO `product_currencies` (`id`, `product_id`, `currency_id`, `price`) VALUES
(1, 1, 1, '16370.00'),
(2, 1, 2, '20510.00'),
(3, 2, 1, '23970.00'),
(4, 2, 2, '29970.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_languages`
--

CREATE TABLE `product_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tec_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensions` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `product_languages`
--

INSERT INTO `product_languages` (`id`, `name`, `product_id`, `language_id`, `description`, `tec_info`, `dimensions`) VALUES
(1, 'Empire Square Chandelier', 1, 1, 'An extravagant and modern chandelier with a twist, granted by the vintage-looking crystals. Inspired by the stunning architecture of the Empire State Building all the details contribute to a piece filled with personality and a vigorous splendor. Made of gold-plated brass, the Empire Chandelier Square becomes a unique object of desire.', '<h5>MATERIALS</h5>\r\nBody: Brass, Glass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Smoked glass\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n107 kg | 236 lbs', '<h5>BULBS</h5>\r\n75x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 150 cm | 59\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(2, 'Pharo Chandelier', 2, 1, 'Inspired by the imponent and robust structure of Lighthouses, Pharo Chandelier represents the rupture of the darkness with an imense, bright and luxurious shine! Made with Gold Plated Brass and Crystal Glass, this piece, is the perfect solution for wide spaces, able to swipe every attention in the room.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n160 kg | 352,74 lbs\r\n', '<h5>BULBS</h5>\r\n47x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 187 cm | 112\'\'\r\n<br>\r\nDiam. 121 cm | 47,64\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(3, 'Gala Chandelier', 3, 1, 'Combining the modern age and luxury, the Gala Chandelier is a revival experience from the palatial apogee. Made with brass and clear crystal glass, this imposing item is perfect for any entrance or ball room.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n150 kg | 331 lbs', '<h5>BULBS</h5>\r\n52x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 240 cm | 94,5\'\'\r\n<br>\r\nDiam. 142 cm | 56\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(4, 'Majestic Chandelier', 4, 1, 'Our Majestic Chandelier enhances a romantic and daring form perfectly able to adapt itself to any ambiance or style. The combination of traditional techniques and a selection of high quality materials results into an uncommon gold plated and crystal glass beauty that astonishes and empowers its surroundings.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n75 kg | 165,3 lbs', '<h5>BULBS</h5>\r\n88x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 84,7 cm | 33,3\'\'\r\n<br>\r\nDiam. 141,7 cm | 55,8\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,7\'\''),
(5, 'Liberty Chandelier', 5, 1, 'This masterpiece is inspired by one of the most famous statues in the world, The Statue of Liberty. Since the lady wants to enlighten the world, Luxxu intends with this elegant design to enlighten all your projects. It’s made in brass and crystal glass.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n70 kg | 154,32 lbs', '<h5>BULBS</h5>\r\n40x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 203 cm | 79,9\'\'\r\n<br>\r\nL 85 cm | 33,5\'\'\r\n<br>\r\nD 85 cm | 33,5\'\'\r\n<br>\r\nChain Height: customizable on purchase'),
(6, 'Babel Chandelier', 6, 1, 'Although the inspiration of this chandelier is still a myth, the elegance present in every crystal is real. We brought the fantasy of detail to reality through these magnificent and lush crystals.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n190 kg | 418,9 lbs', '<h5>BULBS</h5>\r\n50 x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 233 cm | 91,73\'\'\r\n<br>\r\nDiam. 120 cm | 47,24\'\''),
(7, 'Empire Chandelier', 7, 1, 'Our Empire Chandelier is inspired by the stunning architecture of The Empire State Building. It’s a masterpiece with an extravagant shape, capable of transforming every space into a stunning scenario. Due to its vigorous personality it creates an exclusive atmosphere.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n107 kg | 236 lbs', '<h5>BULBS</h5>\r\n75x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 150 cm | 59\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(8, 'Empire XL Chandelier', 8, 1, 'With a closely egocentric attitude, the flamboyant Empire XL are conceived. Inspired in the Empire State Building, this new design has the extraordinary power to centralize any atmosphere and transform everything around it. The perfect piece to an exclusive ambience.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n300 kg | 661,4 lbs', '<h5>BULBS</h5>\r\n132x g9 Halogen Bulbs (40W max) *USA not included \r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 400 cm | 157,48\'\'\r\n<br>\r\nL 165 cm | 64,96\'\'\r\n<br>\r\nD 165 cm | 64,96\'\''),
(9, 'Scala Chandelier', 9, 1, 'A masterpiece poetically made with the most beautiful Swarovski crystals. All the details are so unique that they have the power to create not only a perfect space, but also to get you involved in passionate emotions.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Gold teak Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n88 kg | 194 lbs', '<h5>BULBS</h5>\r\n37x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 200 cm | 78,74\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(10, 'Burj Chandelier', 10, 1, 'Burj chandelier is inspired by one of the most stunning hotels in the world, the Burj Al Arab. Like the hotel, this masterpiece is a symbol of modern age and luxury combined. It’s also a strong, decorative structure, fully made of gold plated brass, with a delicately handmade glass tubes.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n64 kg | 141 lbs', '<h5>BULBS</h5>\r\n114x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 130 cm | 51,18\'\'\r\n<br>\r\nDiam. 120 cm | 47,24\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,7\'\''),
(11, 'McQueen Chandelier', 11, 1, 'This amazing chandelier is inspired by one of the most irreverent designers of all time, Alexander McQueen. He is known for his dramatic designs and fashion shows. This masterpiece is as powerful as his exhibitions, combining the best luxury with the most exquisite handmade materials.\r\nMade with gold plated hammered brass, handmade butterflies and majestic flowers ending with the touch of beautiful Swarovski crystals. Bold and feminine, this creation is a real lumen sculpture.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Hammered Brass, Gold plated & Amber Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n16 kg | 35,2 lbs', '<h5>BULBS</h5>\r\n11x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 185 cm | 72,5\'\'\r\n<br>\r\nL 135 cm | 53,15\'\'\r\n<br>\r\nD 66 cm | 25,98\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(12, 'Waterfall Chandelier', 12, 1, 'The best handmade techniques, the high-quality materials as a gold plated brass, the smooth and elegant shapes of the ribbed fine tubes of crystal glass and the extraordinary circular levels sensations of waterfalls, shows the exquisite capacity of this masterpiece to fill a contemporary loft as well as luxury lobby.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n69 kg | 152,1 lbs', '<h5>BULBS</h5>\r\n168x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 156 cm | 61,4\'\'\r\n<br>\r\nDiam. 109 cm | 42,9\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(13, 'Guggenheim Chandelier', 13, 1, 'The Guggenheim Museum is considered to be the “temple of the spirit”. Furthermore, it is the most important structure of its time. The Guggenheim chandelier was designed as a result of the leading-edge architecture.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Black Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n24 kg | 53 lbs', '<h5>BULBS</h5>\r\n24x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 105 cm | 41,3\'\'\r\n<br>\r\nDiam. 80 cm | 31,5\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(14, 'Trump Chandelier', 14, 1, 'This large gold crystal chandelier was sculpted to convey a similar aesthetic of its lineage. On top, connected gold-plated brass structures serve as the main base for an opulent crystal glass masterpiece placed underneath. Each one of these sublime glass tears were designed with high attention to detail and traditional craftsmanship techniques. The perfect luxury chandelier for a refined ambiance.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n100 kg | 220,5 lbs', '<h5>BULBS</h5>\r\n24x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 180 cm | 70,9\'\'\r\n<br>\r\nDiam. 90 cm | 35,43\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(15, 'Empire II Suspension', 15, 1, 'Empire II Suspension is born from the iconic lines of the Empire collection. A glamorous and extravagant crystal lamp that is the ultimate blend of classic and modern design. A suspension made with layers of gold plated brass and vintage-inspired crystal glass.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n85 kg | 187,4 lbs', '<h5>BULBS</h5>\r\n32x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 92 cm | 36,2\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(16, 'Pharo II Suspension', 16, 1, 'Inspired by the architecture of lighthouses this crystal lighting fixture is a more detailed version of the Pharo Suspension. A gold plated brass suspension lamp to brighten up the most sumptuous interiors.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n100 kg | 220,46 lbs', '<h5>BULBS</h5>\r\n33x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 86 cm | 33,86\'\'\r\n<br>\r\nDiam. 121 cm | 47,64\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(17, 'Pharo Suspension', 17, 1, 'Pharos was a great lighthouse built hundreds of years ago. It stood on an island outside the ancient Alexandria. Inspired by the robust yet simple architecture of lighthouses, Pharo suspension is a gold plated brass and crystal fixture made to illuminate the most impressive interiors.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n80 kg | 176,37 lbs', '<h5>BULBS</h5>\r\n33x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 48 cm | 18,9\'\'\r\n<br>\r\nDiam. 121 cm | 47,6\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(18, 'Liberty II Suspension', 18, 1, 'Liberty II Suspension takes every environment back to ancient Greece where power was a way of living. The vigorous eagle is emphasized by the razor-sharp crystal glass yet the sumptuous gold plated brass steals all the attentions of the room, has only a woman can do. A superb opportunity to create a harmonious lighting installation by using more than one composition.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n60 kg | 132,28 lbs', '<h5>BULBS</h5>\r\n30x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 100 cm | 39,4\'\'\r\n<br>\r\nDiam. 103 cm | 40,6\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(19, 'Waterfall Sputnik Suspension', 19, 1, 'Preserving the inspiration on the natural sensation of waterfalls, this unique piece was born to complete the superb Waterfall Collection. Made with high-quality brass and beautifully handmade ribbed tubes of crystal glass, this powerful creation will fit perfectly into any ambiance.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n45 kg | 99,2 lbs', '<h5>BULBS</h5>\r\n96x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 130 cm | 51,18\'\'\r\n<br>\r\nDiam. 133 cm | 52,36\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(20, 'Gala Suspension', 20, 1, 'Designed from the soft blend of emotional yet beautiful lines the Gala Suspension is the perfect outcome of brass and crystal glass. A superb piece for timeless creations.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n100 kg | 220,5 lbs', '<h5>BULBS</h5>\r\n34x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 160 cm | 63\'\'\r\n<br>\r\nDiam. 142 cm | 56\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(21, 'Babel Suspension', 21, 1, 'The circular gold plated brass levels of the Babel Suspension brings elegance to any luxurious ambiance. The exclusive uneven shape of each crystal glass made by the craftsman\'s exceptional know-how creates a unique pattern of lighting refraction. An impressive object of desire.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n98,6 kg | 217,38 lbs', '<h5>BULBS</h5>\r\n24x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 63 cm | 24,8\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\''),
(22, 'Liberty Suspension', 22, 1, 'The elegant and sublime lines of the Liberty family are now encompassed in the Liberty Suspension light. It’s complexity and richness blends harmoniously, and is perfect for the ones who love the attention given to detail. Made in brass and crystal glass, this blending is a promise to enlighten any project with its superb elegance.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n50 kg | 110,2 lbs', '<h5>BULBS</h5>\r\n24x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 60 cm | 23,6\'\'\r\n<br>\r\nDiam. 120 cm | 47,2\'\''),
(23, 'Empire Oval Suspension', 23, 1, 'The iconic Empire chandelier has been an infinite source of inspiration since its creation, and recreated in various forms. Empire Oval is another majestic creation of the omnipresence Empire family, offering a stunning blend of classic and modern design. Celebrating light in an oval dazzling form made with two layers of gold plated brass and crystal glass.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n80 kg | 176 lbs', '<h5>BULBS</h5>\r\n16x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 50 cm | 19,7\'\'\r\n<br>\r\nL 145 cm | 57,1\'\'\r\n<br>\r\nD 46 cm | 18,1\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(24, 'Tycho Rectangular Suspension', 24, 1, 'This creation, inspired by the water reflection of the most unusual planetarium in the world was shaped into a luxury lighting suspension perfect for enlighten all dining rooms. Following our high-quality materials, it\'s made with gold plated brass and combined with ribbed crystal glass.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n80 kg | 176,4 lbs', '<h5>BULBS</h5>\r\n32x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 60 cm | 23,6\'\'\r\n<br>\r\nL 175 cm | 68,9\'\'\r\n<br>\r\nD 33 cm | 13\'\'\r\n<br>\r\nPole Height: Fixed, available in 3 sizes; 60 cm | 23,6\'\' ; 80 cm | 31,4\'\' ; 100 cm | 39,4\'\''),
(25, 'Harpia Suspension', 25, 1, 'Harpia Suspension takes every environment back to ancient Greece where power was a way of living. The vigorous eagle is emphasized by the razor-sharp crystal glass yet the sumptuous gold plated brass steals all the attentions of the room, has only a woman can do. A superb opportunity to create a harmonious lighting installation by using more than one composition.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n10 kg | 22 lbs', '<h5>BULBS</h5>\r\n2x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 9 cm | 3,5\'\'\r\n<br>\r\nL 120 cm | 47,2\'\'\r\n<br>\r\nD 9 cm | 3,5\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(26, 'Majestic II Suspension', 26, 1, 'The Majestic Suspension takes the form of two delicate lighting fixtures whose golden plated brass and crystal glass cylinders create an outstanding and exclusive design. With fine attention to detail, the craftsmanship of the Majestic II enables an exquisite and passionate atmosphere to any environment.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n50 kg | 110,2 lbs', '<h5>BULBS</h5>\r\n60x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 21,6 cm | 8,5\'\'\r\n<br>\r\nDiam. 141,7 cm | 55,8\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,7\'\''),
(27, 'Babel Snooker Suspension', 27, 1, 'The myth is shaped into a luxury lighting suspension and presented in every handmade crystal glass. The rectangular gold plated brass levels conceive an exclusive pattern of lighting refraction and create fantastical shades on their surroundings. Designed to brighten a contemporary space with the most elegant presence.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n85 kg | 187,4 lbs', '<h5>BULBS</h5>\r\n20x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 63 cm | 24,8\'\'\r\n<br>\r\nL 166 cm | 65,4\'\'\r\n<br>\r\nD 51 cm | 20,1\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,7\" '),
(28, 'Trump Suspension', 28, 1, 'Designed to be one of the Trump’s successors lineage, the characteristic lines of this piece and its sublime tears of crystal glass makes it unique. With an extreme elegance and a luxurious presence, the perfect lighting for the perfect living room.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n70 kg | 154,32 lbs', '<h5>BULBS</h5>\r\n24x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 40 cm | 15,7\'\'\r\n<br>\r\nDiam. 90 cm | 35,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(29, 'Majestic Suspension', 29, 1, 'The recreation of the Majestic acquires another level, with bonhomie emancipation of lighting, the glow takes the form of a golden plated brass circle. Made with the finest material, each ribbed crystal glass cylinder creates an atmosphere of irresistible exposure and exclusivity.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n21 kg | 46,30 lbs', '<h5>BULBS</h5>\r\n28x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 6,6 cm | 2,6\'\' \r\n<br>\r\nDiam. 112 cm | 44,1\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(30, 'Pearl Suspension', 30, 1, 'Owner of a delicate beauty, Pearl is an extravagant shape full of refinement that can produce a special atmosphere by itself. It’s not just a metamorphosis of a jewelry piece formed within the shell, but also a transform into an exceptional piece of craftsman. Its essence is made of pearls and gold plated brass.', '<h5>MATERIALS</h5>\r\nBody: Brass & Pearls\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>BULBS</h5>\r\n24x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 273 cm | 107,5\'\'\r\n<br>\r\nDiam. 75 cm | 29,5\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,7\'\''),
(31, 'Explosion Suspension', 31, 1, 'Explosion is reminiscent of the vast cosmos of modern lighting designs. With a high prestige and a revivalist attitude, this suspension salutes the Sputnik. A strong attention to mighty and luxury detail are reflected in the numerous slim gold plated brass and crystal arms which orbit around a center sphere.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n18 kg | 39 lbs', '<h5>BULBS</h5>\r\n18x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 134 cm | 52,8\'\'\r\n<br>\r\nDiam. 71 cm | 27,95\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\' '),
(32, 'Tycho Round Suspension', 32, 1, 'The Tycho combines unique artistry and magnificence with the power of the reflection. Centrally gathered and held by a ring of gold plated brass, the luminous evocation of its design, is reflected in its ribbed crystal glass cylinders and its building of inspiration, the most unusual planetarium in the world.\r\nUse to create an elegant and highly decorative ambience in modern lounges or dining areas.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n80 kg | 176,4 lbs', '<h5>BULBS</h5>\r\n36x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 59 cm | 23,3\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(33, 'McQueen Round Suspension', 33, 1, 'Strengthening the experimentalism in this new design of McQueen’s collection, the approaches to the epitome of contemporary luxury are kept in the tradition of the jewelry artisans. Each sheet is made of hammered brass with gold plated ending and a rhythmic luminosity of the Swarovski crystals. Bring up a savage mind to a perfect lighting solution for common areas like dining rooms or in a hotel lobby.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Hammered Brass, Gold plated & Amber Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n16 kg | 19,8 lbs', '<h5>BULBS</h5>\r\n18x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 25 cm | 9,8\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(34, 'McQueen Globe Suspension', 34, 1, 'Like a savage beauty, this masterpiece brings the powerful evocation of the sublime. It’s perfect to use as a single item or in harmony with more than one element in the same area. Its lush presentation gained inspiration from Alexander McQueen creations and in each leaf is forging its identity in brass and gold plated finishes, giving a set of rhythmic, luminous branches that end up with the touch of beautiful Swarovski crystals.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Hammered Brass, Gold plated & Amber Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n9 kg | 19,8 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 124cm | 48,8\'\'\r\n<br>\r\nDiam. 72 cm | 28,3\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(35, 'Waterfall Round Suspension', 35, 1, 'A powerful creation characterized by a circular shape made with gold plated brass combined with ribbed fine tubes of glass. The perfect combination of a glamorous sensation of waterfalls.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n70 kg | 154,32 lbs', '<h5>BULBS</h5>\r\n144x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 59,4 cm | 23,38\'\'\r\n<br>\r\nDiam. 125 cm | 49,21\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(36, 'Empire Suspension', 36, 1, 'The Empire suspension gets its inspiration from the Empire family’s first creation, the Empire chandelier. This exclusive fixture is made with one elegant layer of brass and crystal glass that will fit perfectly in any space.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n70 kg | 154,32 lbs', '<h5>BULBS</h5>\r\n24x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 40 cm | 15,7\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(37, 'Empire Snooker Suspension', 37, 1, 'Created with crystal glass and brass, finished with gold plated, this magn ificent suspension is capable of give a luxurious and glamorous look to any space. This product is a true jewelry for your decoration, creating a sophisticated and unique atmosphere.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n80 kg | 176 lbs', '<h5>BULBS</h5>\r\n16x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 50 cm | 19,7\'\'\r\n<br>\r\nL 165 cm | 65\'\'\r\n<br>\r\nD 50 cm | 19,7\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,7\'\''),
(38, 'Waterfall Rectangular Suspension', 38, 1, 'Everything sparkles under this elegant work of art. This masterpiece made with gold plated brass combined with ribbed fine tubes of crystal glass brings a natural feeling of waterfalls to any space. The glamorous sensation of water in the tubes is handmade by glass master craftsman.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n35 kg | 77,2 lbs', '<h5>BULBS</h5>\r\n88x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 62 cm | 24,4\'\'\r\n<br>\r\nL 160 cm | 62,99\'\'\r\n<br>\r\nD 50 cm | 19,69\'\'\r\n<br>\r\nPole Height: Fixed, available in 3 sizes: \r\n60 cm | 23,6\'\' ; 80 cm | 31,4\'\' ; 100 cm | 39,4\'\' '),
(39, 'Pharo Pendant', 39, 1, 'Representing a beacon of light in the darkness, Pharo is a crystal pendant with a delicate look but a strong structure. Made by the finest craftsmen using the best materials, crystal glass and gold plated brass.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n15 kg | 33,1 lbs', '<h5>BULBS</h5>\r\n4x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 33 cm | 13\'\'\r\n<br>\r\nDiam. 15 cm | 5,9\'\''),
(40, 'Gala Pendant', 40, 1, 'The opulent Gala Pendant is a sign of times. This everlasting light fits neatly into every ambiance. A superb piece tied by a single string.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n30 kg | 66 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 82 cm | 63\'\'\r\n<br>\r\nDiam. 35 cm | 56\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(41, 'Liberty Pendant', 41, 1, 'Inspired by The Statue of Liberty, this design was thought to enlighten any ambiance. Made with brass and crystal glass this masterpiece will bring the right luminosity to your home. After the huge success of the Liberty Wall, Liberty Pendant was the right path. More than an accessory, this pendant light is a brilliant solution to any space.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n15 kg | 33,1 lbs', '<h5>BULBS</h5>\r\n8x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 70 cm | 27,6\'\'\r\n<br>\r\nL 31 cm | 12,2\'\'\r\n<br>\r\nD 31 cm | 7,2\'\''),
(42, 'Guggenheim Pendant', 42, 1, 'An inspirational illustration of leading-edge architecture, the Guggenheim Museum went far on expectations. After the Guggenheim Chandelier galvanized diverse rooms, the Guggenheim Pendant is now created as the perfect complement. Bold by definition this fixture is a promising focus of attention.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Black Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n12 kg | 26,5 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (10W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 80 cm | 31,5\'\'\r\n<br>\r\nDiam. 35 cm | 13,8\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(43, 'Babel Pendant', 43, 1, 'Babel pendant blends perfectly into placid and splendid interior design ambiences. The magnificent irregular shape of each crystal glass conquered by the craftsman’s mastery creates a unique pattern of lighting refraction. Ideal to use as a single item or in harmony with more than one element at the same luxurious ambiance.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n35 kg | 77,2 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 113 cm | 44,5\'\'\r\n<br>\r\nDiam. 40 cm | 15,7\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,7\'\''),
(44, 'Trump Pendant', 44, 1, 'Impetuous in its form, the confidence of the asymmetric stripes in gold plated brass and the sublime tears of crystal glass, make this classic contemporary design a true dash pendant of Trump.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>BULBS</h5>\r\n8x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 90 cm | 35,4\'\'\r\n<br>\r\nDiam. 36,5 cm | 14,4\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(45, 'Pearl Pendant', 45, 1, 'This magnificent piece has the incomparable charm of the soft and warm lighting that gets even more beautiful when light being casted in its gold plated brass curves. The fluidity of the sculptural shape was achieved by the use of a common material with a piece of jewellery, the pearl.', '<h5>MATERIALS</h5>\r\nBody: Brass & Pearls\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n3 kg | 6,6 lbs', '<h5>BULBS</h5>\r\n4x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 53 cm | 20,9\'\'\r\n<br>\r\nDiam. 28 cm | 11,02\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,7\'\''),
(46, 'Tycho Pendant', 46, 1, 'An incredible and contemporary lighting item, in a pendant version of Tycho. Crystal glass held by a gold brass ring creates the most luxurious surroundings as its building inspiration and its reflection on the water. Perfect to be used in spaces illustrating an exuberant elegance.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n15 kg | 33 lbs', '<h5>BULBS</h5>\r\n6x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 58 cm | 22,8\'\'\r\n<br>\r\nDiam. 33 cm | 13\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(47, 'McQueen Pendant', 47, 1, 'The McQueen collection presents a dramatic design tied by a simple string. Showing in all its details a contemporary romantic nature. Creates a boast and dainty ambience.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Hammered Brass, Gold plated & Amber Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n5 kg | 11,02 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 85 cm | 33,5\'\'\r\n<br>\r\nL 22 cm | 8,66\'\'\r\n<br>\r\nD 22 cm | 8,66\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(48, 'Burj Pendant', 48, 1, 'This exuberant pendant is inspired by the stunning Burj Al Arab Hotel. Like a symbol of the modern age and luxury tied by a simple string.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n3,7 kg | 8,16 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 45 cm | 17,71\'\'\r\n<br>\r\nL 20 cm | 7,90\'\'\r\n<br>\r\nD 20 cm | 7,90\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(49, 'Draycott Pendant', 49, 1, 'Draycott Tower was the reason to create the Draycott pendant. Its structure has 3 tubes like the original inspiration made in brass and crystal glass. Transmitting elegance and purity to every space, the reception or lo bby areas can be a perfect place for this gorgeous masterpiece.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n15 kg | 33,07 lbs', '<h5>BULBS</h5>\r\n6x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 124 cm | 48,82\'\'\r\n<br>\r\nL 21,5 cm | 8,46\'\'\r\n<br>\r\nD 21,5 cm | 8,46\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(50, 'Empire Pendant', 50, 1, 'Like a precious treasure, this noble and elegant pendant is an exceptional decorative element of the Empire`s family, with a discrete side. Inspired by the Empire State Building created with brass and crystal glass, finished with gold plated, ideal to use with more than one piece.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n18 kg | 39,68 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 75 cm | 29,53\'\'\r\n<br>\r\nDiam. 40 cm | 15,75\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(51, 'Waterfall Pendant', 51, 1, 'Everything sparkles under this elegant pendant lamp, made with gold plated brass combined with ribbed fine tubes of crystal glass made by master craftsman. It gives the glamorous sensation of waterfalls, having in mind various ambiences.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n3 Kg | 6,61 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 55 cm | 21,65\'\'\r\n<br>\r\nL 16 cm | 6,3\'\'\r\n<br>\r\nD 16 cm | 6,3\'\'\r\n<br>\r\nCord Height: Adjustable with 200 cm | 78,74\'\''),
(52, 'Trump II Wall', 52, 1, 'A refined wall lamp inspired by the architectural lines of the Trump Hotel. A gold plated brass structure finished with sublime crystal glass tears. A wall lamp that provides charming lighting to the most elegant interiors.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n6,7 kg | 14,8 lbs', '<h5>BULBS</h5>\r\n8x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 82 cm | 32,3\'\'\r\n<br>\r\nL 25 cm | 9,9\'\'\r\n<br>\r\nD 12 cm | 4,7\'\''),
(53, 'Waterfall XL Wall', 53, 1, 'An elegant and modern wall light made of gold plated brass and handmade fine crystal glass tubes that bring a natural feeling of waterfalls. This piece is a larger version of the standard, and is meant to decorate magnificent spaces.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n3,2 kg | 7,05 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 75 cm | 29,53\'\'\r\n<br>\r\nL 20 cm | 7,87\'\'\r\n<br>\r\nD 25 cm | 9,84\'\''),
(54, 'Pharo II Wall', 54, 1, 'Pharos was an island where the most famous and grand lighthouse stood in ancient Alexandria. Nowadays, lighthouses take on simpler forms, just like this wall lamp. Made of gold plated brass and crystal glass, Pharo Wall is a beacon of light to rupture the darkness.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n38 kg | 83,8 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max)*USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 122 cm | 48,03\'\'\r\n<br>\r\nL 22 cm | 8,7\'\'\r\n<br>\r\nD 26 cm | 10,23\'\''),
(55, 'Tycho Torch Small Wall', 55, 1, 'The epitome of elegance and distinctiveness that fits modern and classic styles. The combination of brass and ribbed crystals tubes brings the perfect classical and charming touch to both residential and hospitality projects. This small version of the Tycho Torch Wall is ideal for intimate spaces.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n8 kg | 17,6 lbs', '<h5>BULBS</h5>\r\n2x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 94 cm | 37\'\'\r\n<br>\r\nL 34 cm | 13,4\'\'\r\n<br>\r\nD 20 cm | 7,9\'\''),
(56, 'Pharo Wall', 56, 1, 'Pharos was an island where the most famous and grand lighthouse stood in ancient Alexandria. Nowadays, lighthouses take on simpler forms, just like this wall lamp. Made of gold plated brass and crystal glass, Pharo Wall is a beacon of light to rupture the darkness.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n35 kg | 77,2 lbs', '<h5>BULBS</h5>\r\n9x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 113 cm | 44,5\'\'\r\n<br>\r\nL 18 cm | 7,1\'\'\r\n<br>\r\nD 22 cm | 8,7\'\''),
(57, 'Waterfall II Wall', 57, 1, 'Made with gold plated brass combined with ribbed fine tubes of crystal glass, this piece from the waterfall collection brings simplicity and elegance to every environment.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n1,5 kg | 3,31 lbs', '<h5>BULBS</h5>\r\n2x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 57 cm | 22,45\'\'\r\n<br>\r\nL 8 cm | 3,15\'\'\r\n<br>\r\nD 12 cm | 4,72\'\''),
(58, 'Burj II Wall', 58, 1, 'Burj II Like a symbol of modern age and luxury, Burj conveys the intimate lighting using gold plated brass and crystal glass. The ideal combination to be used as a single wall lighting or in harmony with other elements in the same area.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n2,3 kg | 3,31 lbs', '<h5>BULBS</h5>\r\n2x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 44 cm | 17,32\'\'\r\n<br>\r\nL 14 cm | 5,51\'\'\r\n<br>\r\nD 10 cm | 3,93\'\''),
(59, 'Wax Wall', 59, 1, 'The Wax collection brings an ancient luxury feel, with a contemporaneous variation. This wall fixture fully made of gold plated brass, brings a modern twist to any environment, despite being inspired in the ancient times. Composed of several fine tubes of handmade crystal glass that flow over unique and with a particular shape, gold plated brass. A graceful and unique piece fully made of the best high-end materials.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>BULBS</h5>\r\n3x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 80 cm | 31,5\'\'\r\n<br>\r\nL 24 cm | 9,5\'\'\r\n<br>\r\nD 22 cm | 8,7\'\''),
(60, 'Empire II Wall', 60, 1, 'The elegant and extravagant lines of our Empire family deserve another homage in this Empire Wall II. This noble and sublime design is suitable for the most exquisite projects.\r\nThe opulent layers of brass and crystal glass are a promise to inspire even more glamour.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n30 kg | 66,1 lbs', '<h5>BULBS</h5>\r\n7x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 140 cm | 55,1\'\'\r\n<br>\r\nL 40 cm | 15,75\'\'\r\n<br>\r\nD 24 cm | 9,45\'\''),
(61, 'Gala Torch Wall', 61, 1, 'The torch version of our Gala family is a symbol of modern age and luxury, giving an elegant and shimmering look to any hospitality and residential project. A graceful piece fully made of the best high-end materials.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n7 kg | 15,4 lbs', '<h5>BULBS</h5>\r\n3x g9 (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 118 cm | 46,5\'\'\r\n<br>\r\nL 20 cm | 7,9\'\'\r\n<br>\r\nL 20 cm | 7,9\'\''),
(62, 'Guggenheim Wall', 62, 1, 'The awe-inspiring artistry Guggenheim family continues to grow, presenting now the Guggenheim Wall. A magnificent combination of gold plated brass and black Swarovski crystals, it is yet another avant-garde creation that pledges to dazzle everyone in the room. Let this dashing design inspire your projects, forging the most exquisite and elegant ambiances.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Black Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n10 kg | 22 lbs', '<h5>BULBS</h5>\r\n4x g9 Halogen Bulbs (10W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 80 cm | 31,5\'\'\r\n<br>\r\nL 35 cm | 13,8\'\'\r\n<br>\r\nD 27,5 cm | 10,8\'\''),
(63, 'Tycho Torch Wall', 63, 1, 'From the classical to the most contemporary ambience, this torch wall version of our Tycho is the epitome of elegance and distinctiveness. A perfect fit for both hospitality and residential projects, the combination of brass and ribbed crystal glass will bring to your project the final twist of medieval charm you were looking for.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n10 kg | 22 lbs', '<h5>BULBS</h5>\r\n2x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 162 cm | 64,1\'\'\r\n<br>\r\nL 34 cm | 13,4\'\'\r\n<br>\r\nD 20 cm | 7,9\'\''),
(64, 'Scala Wall', 64, 1, 'Elegant and luxurious wall lighting item, incomparable and impressive as the romantic details of Swarovski crystals. Poetically made in gold plated brass, with the handwork techniques of the craftsman, will bring a warm light to any dining or living room set, involving you in passionate emotions.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Gold Teak Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n18 kg | 39,7 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 84,5 cm | 33,3\'\'\r\n<br>\r\nL 42,6 cm | 16,8\'\'\r\n<br>\r\nD 21,9 cm | 8,6\'\''),
(65, 'Babel Wall', 65, 1, 'An original and exquisite décor fixture with an unmistakable presence, Babel wall lamp adds a classical appeal to any environment. The craftsman’s crystal work singularity shines back in the circular surfaces where smooth, glamorous shades are reflected and held by a gold plated brass ring. A sublime item for a perfect ambience.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n23 kg | 50,7 lbs', '<h5>BULBS</h5>\r\n3x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 90,5 cm | 35,6\'\'\r\n<br>\r\nL 30 cm | 11,8\'\'\r\n<br>\r\nD 23,5 cm | 9,3\'\''),
(66, 'Tycho Small Wall', 66, 1, 'Following the creation line, the small version of Tycho Wall creates a cosmopolitan luxury environment that conveys an intimate lighting as its building inspiration and its reflection on the water. Brass with gold plated and crystal glass, ideal combination to be used with more than one piece.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n1,8 kg | 3,97 lbs', '<h5>BULBS</h5>\r\n2x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 59 cm | 23,2\'\'\r\n<br>\r\nL 13 cm | 5,1\'\'\r\n<br>\r\nD 18 cm | 7,1\'\'');
INSERT INTO `product_languages` (`id`, `name`, `product_id`, `language_id`, `description`, `tec_info`, `dimensions`) VALUES
(67, 'Tycho Wall', 67, 1, 'Just like a discovery, this item brings from the past the way to look beyond. Inspired in the most unusual planetarium in the world and its reflection on the water, conveys the intimate lighting using materials like brass with gold plated and crystal glass. Ideal combination to be used as a single wall lighting or in harmony with other elements in the same area.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n2 kg | 11,03 lbs', '<h5>BULBS</h5>\r\n2x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 90 cm | 35,4\'\'\r\n<br>\r\nL 13 cm | 5,1\'\'\r\n<br>\r\nD 18 cm | 7,1\'\''),
(68, 'Liberty I Wall', 68, 1, 'This design presents sublime lines, yet gives at the same time a complex and rich aspect in details. It is very suited for the entrance hall and corridors. The design of Liberty I was created to bring the right brightness for your home decoration and gets its inspiration on the warmth of the statue of liberty torch.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n12 kg | 26,46 lbs', '<h5>BULBS</h5>\r\n4x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 64,5 cm | 25,39\'\'\r\n<br>\r\nL 31 cm | 12,2\'\'\r\n<br>\r\nD 18,3 cm | 7,2\'\''),
(69, 'Liberty II Wall', 69, 1, 'Inspired by the Statue of Liberty, this design was made for the ones who loves to see all the details. This blending will bring a harmonious enlightenment to your project, not only for its characteristic brightness, but also it presents a superb elegance between the crystal glass and brass.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n18 kg | 39,68 lbs', '<h5>BULBS</h5>\r\n8x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 72 cm | 28,35\'\'\r\n<br>\r\nL 31 cm | 12,2\'\'\r\n<br>\r\nD 40 cm | 15,75\'\''),
(70, 'Waterfall Torch Wall', 70, 1, 'Combined with the best of contemporary and modern design, made with the best brass, crystal glass and the ability of the craftsman, it’s perfectly fitting on your hospitality project.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n10 kg | 22,05 lbs', '<h5>BULBS</h5>\r\n14x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 178 cm | 70,1\'\'\r\n<br>\r\nL 28,6 cm | 11,26\'\'\r\n<br>\r\nD 21,8 cm | 8,58\'\''),
(71, 'Draycott I Wall', 71, 1, 'This lighting design was created to decorate the walls of your projects, with the best materials. Made with a simple tube of crystal glass and brass, this lighting design was created to decorate the walls of your project. Showing exuberance and simplicity at the same time, it’s ideal to enlighten pieces of art like paintings or sculptures.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n5 kg | 11,03 lbs', '<h5>BULBS</h5>\r\n2x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 100 cm | 39,4\'\'\r\n<br>\r\nL 10 cm | 3,9\'\'\r\n<br>\r\nD 12 cm | 4,7\'\''),
(72, 'Draycott II Wall', 72, 1, 'Following the footsteps of Draycott I wall, this wall lamp contemplates all details of the Draycott Tower in two tubes. For all that, the design remains delicate and exquisite. Another wall lighting solution made of brass and crystal glass.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n10 kg | 22,05 lbs', '<h5>BULBS</h5>\r\n4x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 108 cm | 42,5\'\'\r\n<br>\r\nL 20 cm | 7,8\'\'\r\n<br>\r\nD 12 cm | 4,7\'\''),
(73, 'Burj Wall', 73, 1, 'This wall fixture fully made of gold plated brass transmits elegance and sophistication. With delicate handmade crystal glass tubes, this piece brings a magical sensation to every space.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n3,7 kg | 8,16 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 45 cm | 17,71\'\'\r\n<br>\r\nL 20 cm | 7,87\'\'\r\n<br>\r\nD 23 cm | 9,05\'\''),
(74, 'Empire Wall', 74, 1, 'The Empire wall gets its inspiration on The Empire State Building and that’s why this creation is so powerful and capable to transform every space in a stunning scenario.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n14 kg | 31 lbs', '<h5>BULBS</h5>\r\n5x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 80 cm | 31,5\'\'\r\n<br>\r\nL 40 cm | 15,75\'\'\r\n<br>\r\nD 24 cm | 9,45\'\''),
(75, 'McQueen Wall', 75, 1, 'Made in brass with gold plated, handmade butterflies and majestic flowers, ending with the touch of the beautiful Swarovski crystals. The wall version of McQueen chandelier, evokes a dramatic and eccentric sensation of beauty.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Hammered Brass, Gold plated & Amber Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n5 kg | 11,02 lbs', '<h5>BULBS</h5>\r\n7x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 135 cm | 53,15\'\'\r\n<br>\r\nL 47 cm | 18,50\'\'\r\n<br>\r\nD 21 cm | 8,27\'\''),
(76, 'Waterfall Wall', 76, 1, 'This creation represents a natural sensation of waterfalls. An elegant and modern wall lighting made of gold plated brass and handmade crystal glass tubes.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n3 kg | 6,61 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 55 cm | 21,65\'\'\r\n<br>\r\nL 20 cm | 7,87\'\'\r\n<br>\r\nD 25 cm | 9,84\'\''),
(77, 'Trump Wall', 77, 1, 'A beautiful sight inspired by the subtle forms of the Trump lineage. Composed by high-quality materials only, the delicate forms of this wall lighting will bring a smooth ambience to every room.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n4,9 kg | 108 lbs', '<h5>BULBS</h5>\r\n4x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 60 cm | 24\'\'\r\n<br>\r\nL 23 cm | 9,06\'\'\r\n<br>\r\nD 18 cm | 7,1\'\''),
(78, 'Majestic Plafond', 78, 1, 'Our Majestic collection enhances a romantic and daring form. This plafond made of gold plated brass and crystal glass it a piece full of personality. A modern design with a majestic inspiration.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n25 kg | 55,12 lbs', '<h5>BULBS</h5>\r\n28x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 13,5 cm | 5,32\'\'\r\n<br>\r\nDiam. 110 cm | 43,31\'\''),
(79, 'Empire Square Plafond', 79, 1, 'Offering a functional lighting solution, the Empire plafond brings a twist with a square shape. Produced with the best materials and the finest handmade techniques the plafond creates a glaring and sublime design.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n45 kg | 99,2 lbs', '<h5>BULBS</h5>\r\n8x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 35 cm | 13,8\'\'\r\n<br>\r\nL 60 cm | 23,6\'\'\r\n<br>\r\nD 60 cm | 23,6\'\''),
(80, 'McQueen Plafond', 80, 1, 'The McQueen collection, inspired by Alexander McQueen, continues to grow. Combining the most luxurious design with exquisite handmade materials, this gold plated, hammered brass and amber Swarovski crystal piece evokes a dramatic and feminine sensation of beauty. This McQueen Plafond is meticulously designed beauty object, perfect to complement the boldest of projects. It is a powerful and harmonious approach to contemporary luxury.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Hammered Brass, Gold plated & Amber Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n35 kg | 77,2 lbs', '<h5>BULBS</h5>\r\n16x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 18 cm | 7,1\'\'\r\n<br>\r\nDiam. 72 cm | 28,3\'\''),
(81, 'Scala Plafond', 81, 1, 'Designed to add a little more life and light to a luxurious ambiance. Combining the modern and classical design, this sumptuous plafond is made in brass and Swarovski crystals and will match perfectly in stately projects.', '<h5>MATERIALS</h5>\r\nBody: Brass & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Gold teak Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n88 kg | 194 lbs', '<h5>BULBS</h5>\r\n10x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 61 cm | 24\'\'\r\n<br>\r\nDiam. 92 cm | 36,3\'\''),
(82, 'Empire Plafond', 82, 1, 'The Empire plafond was made not only to offer the best functional lighting, but also to decorate any space with its glaring and sublime design. Suitable for the most exquisite projects and produced with the best materials.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n45 kg | 99,2 lbs', '<h5>BULBS</h5>\r\n8x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 35 cm | 13,8\'\'\r\n<br>\r\nDiam. 72,8 cm | 28,7\'\''),
(83, 'Pharo Floor', 83, 1, 'Pharos Lighthouse was built hundred of years ago and stood on an island outside ancient Alexandria. Made of gold plated brass and crystal glass, Pharo II floor lamp is an interpretation of the robust yet simple architecture of modern lighthouses. A standing beacon of light to rupture the darkness.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n60 kg | 132,30 lbs', '<h5>BULBS</h5>\r\n12x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 175 cm | 68,9\'\'\r\n<br>\r\nDiam. 22 cm | 8,66\'\''),
(84, 'Liberty Floor', 84, 1, 'Inspired by the Statue of Liberty, this floor lamp will enlighten any space with its delicate and rich lines. A combination of brass and crystal with a marble base, the Liberty Floor Lamp brings harmony and elegance to any project.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Carrara marble\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n30 kg | 66,14 lbs', '<h5>BULBS</h5>\r\n8x g9 Halogen Bulbs (40W max)*USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 182 cm | 71,65\'\'\r\n<br>\r\nDiam. 43 cm | 16,92\'\''),
(85, 'Gala Floor', 85, 1, 'Allow yourself to fall for our unique Gala floor lamp elegantly made of gold plated brass and crystal glass. Our splendid floor lamp gets its inspiration in cheerful moments and intense design. It is the ideal contemporaneous shape to take a step further in interior design.\r\nThis masterpiece is the touch of luxury needed to create a prestigious ambiance whether it is exposed in a lounge or a hallway.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n18 kg | 39,7 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 175 cm | 69\'\'\r\n<br>\r\nDiam. 35 cm | 13,8\'\''),
(86, 'Waterfall Floor', 86, 1, 'Immerse into our Waterfall lighting, a series of ripped fine tubes of handmade crystal glass flowing over the tubular shapes in gold plated brass. An impressive presence in every ambiance made by master craftsman. A new glamorous expression of Waterfall light is given to accomplish a wider and complete range that will light your space.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Carrara marble\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>BULBS</h5>\r\n18x g9 Halogen Bulbs (40W max)*USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 195 cm | 77,7\'\'\r\n<br>\r\nDiam. 42 cm | 17\'\''),
(87, 'Empire Floor', 87, 1, 'A statement floor lamp that will light up every room with its exuberant shape. Inspired by our Empire family, the Empire floor is made of crystal glass and complemented by a gold plated brass vigorous standing.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n50 kg | 110 lbs', '<h5>BULBS</h5>\r\n12x g9 Halogen Bulbs (40W max)*USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 185 cm | 73\'\'\r\n<br>\r\nDiam. 64 cm | 25,2\'\''),
(88, 'McQueen Floor', 88, 1, 'Maintaining the elegant and feminine vibe of the entire family, this McQueen floor lamp will certainly brighten everything around it. \r\nThe perfect and complex combination of gold plated hammered leaves with amber Swarovski crystals encompasses a dainty light refraction pattern that will shed its light on everything around it. The romantic and creative nature of this piece provides an artistic and glamorous feeling to any project.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Hammered Brass, Gold Plated & \r\nNero Marquina Marble\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n45 kg | 20,4 lbs', '<h5>BULBS</h5>\r\n8x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 187 cm | 74\'\'\r\n<br>\r\nL 22 cm | 8,66\'\'\r\n<br>\r\nD 22 cm | 8,66\'\''),
(89, 'Tycho Floor', 89, 1, 'Giving the Tycho a different twist, but maintaining the same elegant and timeless vibe, this floor lamp is the perfect complement for any project. The ribbed crystals create a unique light refraction that will set the tone for a charming and exquisite ambience.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n15 kg | 33,1 lbs', '<h5>BULBS</h5>\r\n4x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 200 cm | 78,7\'\'\r\n<br>\r\nL 44 cm | 17,3\'\'\r\n<br>\r\nD 44 cm | 17,3\'\''),
(90, 'Babel Floor', 90, 1, 'Although the inspiration of this floor light is still a myth, the elegance present in every crystal is real. We brought the fantasy of detail to reality through these magnificent and lush crystals.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Nero marquina marble\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n55 kg | 44,1 lbs', '<h5>BULBS</h5>\r\n9x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 185,5 cm | 73\'\'\r\n<br>\r\nDiam. 40 cm | 15,7\'\''),
(91, 'Draycott Floor', 91, 1, 'Draycott takes a different posture to create an elegant standing gold plated brass item with subtle lines, complemented by delicate crystals tubes like the original inspiration. Sober and exquisite, transmitting elegance and purity to every space, this floor lighting was designed to bring the most luxurious pleasure to any contemporary ambiance.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>BULBS</h5>\r\n6x g9 Led Bulbs (2W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 183 cm | 72\'\'\r\n<br>\r\nDiam. 35 cm | 13,8\'\''),
(92, 'Pharo I Table Lamp', 92, 1, 'A representation of the architectural lines of lighthouses in the shape of a table lamp. A marble base supports the delicate crystals topped with a brass plate. Pharo I is the perfect finishing touch for any desk or bedside table.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated, Polished Emperador Marble & Crystal\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>BULBS</h5>\r\n4x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 56 cm | 22\'\'\r\n<br>\r\nDiam. 24 cm | 9,5\'\''),
(93, 'Pharo II Table Lamp', 93, 1, 'A representation of the architectural lines of lighthouses in the shape of a table lamp. A marble base supports the delicate crystals topped with a brass plate. Pharo I is the perfect finishing touch for any desk or bedside table.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated, Polished Emperador Marble & Crystal\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40Wmax) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 58 cm | 22,8\'\'\r\n<br>\r\nDiam. 24 cm | 9,5\'\''),
(94, 'Waterfall Table Lamp', 94, 1, 'The Waterfall Table Lamp gives a new glamorous expression of the Waterfall lighting, to accomplish a wider and complete range that will light your space. \r\nThis unique table lamp has a series of ripped fine tubes of handmade crystal glass flowing over tubular shapes in gold plated brass. It combines a smooth and beautiful base, made of Emperador marble, that makes the Waterfall Table Lamp unique and immersive.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Emperador dark marble\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n10 kg | 22 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 78 cm | 30,7\'\'\r\n<br>\r\nDiam. 18 cm | 7,1\'\''),
(95, 'Liberty Table Lamp', 95, 1, 'The Liberty Table Lamps is born from a collection that has never ceased to inspire us. Likewise, LUXXU wants you to be inspired by this elegant piece, designed to give a subtill yet inescapable richness to any room. \r\nThis highly detailed combination of brass and crystal glass with marble creates a sublime piece of design.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Carrara marble\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n22 kg | 48,5 lbs', '<h5>BULBS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 74,5 cm | 29,33\'\'\r\n<br>\r\nDiam. 35,5 cm | 13,98\'\''),
(96, 'Tycho Table Lamp', 96, 1, 'The ribbed crystal in this collection, evoking the reflection pattern on water of the Tycho Planetarium, gave place to another elegantly cosmopolitan piece of lighting. This Tycho Table Lamp, made in brass and crystal glass, was designed to fit perfectly any modern ambience, conveying a touch of timeless harmony.', '<h5>MATERIALS</h5>\r\nBody: Brass & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n14 kg | 30,86 lbs', '<h5>BULBS</h5>\r\n3x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 44 cm | 17,32\'\'\r\n<br>\r\nDiam. 19,5 cm | 7,68\'\''),
(200, 'Darian Sideboard', 200, 1, 'The Darian sideboard draws inspiration from the power of the shield and sphere of protection, as well as the dynamic from its irregular shape. A precise knowledge of production techniques and materials, each with different specialities, from metal-work to wood carving. It features a cluster of gold plated brass asymmetrical bars envelope a wood structure in black lacquer, the resulting works are a blend of artful and stout personality.', '<h5>MATERIALS</h5>\r\nBody: Brass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Black lacquer', '<h5>WEIGHT</h5>\r\n180 kg | 132,3 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 92 cm | 36,2\'\'\r\n<br>\r\nL 210 cm | 82,7\'\'\r\n<br>\r\nD 50 cm | 19,7\'\''),
(201, 'Tenor Sideboard', 201, 1, 'Created to be magnanimous in its appearance, the smooth and elegant shapes of this black sideboard, highly stylish, provides a generous amount of storage space being imposing and lends an attractive presence to any room. The gold plated brass asymmetric bars give the extraordinary touch in framed of this particleboard ends with a textured surface used black lacquer finish. A unique product for those who have a peculiar taste for new editions and conceptual designs.', '<h5>MATERIALS</h5>\r\nBody: Brass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Black lacquer', '<h5>WEIGHT</h5>\r\n200 kg | 441 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 76 cm | 30,1\'\'\r\n<br>\r\nL 228,8 cm | 89,8\'\'\r\n<br>\r\nD 50 cm | 19,7\'\''),
(202, 'Scarp Console', 202, 1, 'When rebel meets nature it creates nothing but an uncontrollable force. Scarp Console\'s insurgent gold plated brass legs and nero marquina marble bring out the strongest presence in modern projects.\r\nThe powerful strength of this console leaps any room into a deep sense of robustly dynamic.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Nero Marquina Marble', '<h5>WEIGHT</h5>\r\n70 kg | 154,3 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 90 cm | 35,4\'\'\r\n<br>\r\nL 162 cm | 64\'\'\r\n<br>\r\nD 44 cm | 17,3\'\''),
(203, 'Nubian Console', 203, 1, 'The glorious geometrical construction of the Nubian pyramids outcome a contrasting shape design. Characterised by its complexity of noble materials such as glass, walnut root veneer and brass, Nubian Console is an elaborated embodiment of relief. A promising main focus in any surrounding.', '<h5>MATERIALS</h5>\r\nBody: Brass, Glass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black glass, Black lacquer & Walnut root veneer', '<h5>WEIGHT</h5>\r\n75 kg | 154,3 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 89 cm | 35\'\'\r\n<br>\r\nL 158 cm | 62,2\'\'\r\n<br>\r\nD 40 cm | 15,7\'\''),
(204, 'Spear Console', 204, 1, 'Through the imposing, sharp pen the Spear console was designed. The diversity of its materials from brass, wood, leather and marble result into a console with straight lines. From the Ancient Rome comes its inspiration, bringing a timeless design to this art piece. A symbiosis of toughness and elegance, perfect to bring an environment to its most luxurious ambiance.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood Leather & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer, Black leather & Nero marquina marble', '<h5>WEIGHT</h5>\r\n85 kg | 187,4 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 88,5 cm | 34,8\'\'\r\n<br>\r\nL 138 cm | 54,3\'\'\r\n<br>\r\nD 44 cm | 17,3\'\''),
(205, 'Beyond Console', 205, 1, 'The best handmade techniques find balance in a delicate work in wood softened with touches of brass that reflect warm and golden tones on its polished surface. An impressive display of elegance, Beyond console shows the exquisite capacity to fill a variety of ambiances thanks to its luxury presence.', '<h5>MATERIALS</h5>\r\nBody: Brass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Black lacquer', '<h5>WEIGHT</h5>\r\n60 kg | 132,3 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 90 cm | 35,4\'\'\r\n<br>\r\nL 160 cm | 63\'\'\r\n<br>\r\nD 40 cm | 15,7\'\''),
(206, 'Vertigo Console', 206, 1, 'Prove to be impressive through its conspicuous and elegant lines, this prodigious console has a striking dynamic pose. In either modern or classic entrance halls, the shimmering line in gold plated brass merge in any living room decoration in Nero Marquina marble finish. A fascinating and exclusive console that exhales luxury and a cohesive style.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Nero Marquina Marble', '<h5>WEIGHT</h5>\r\n80 kg | 176,4 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 92,5 cm | 36,4\'\'\r\n<br>\r\nL 160 cm | 63,1\'\'\r\n<br>\r\nD 45 cm | 17,7\'\''),
(207, 'Darian Dining Table', 207, 1, 'The Darian dining table gets its inspiration from our prodigious Darian sideboard. This stunning handcraft table is made of round smoked glass placed on top of a wooden structure in black lacquer touched by gold plated brass bars.', '<h5>MATERIALS</h5>\r\nBody: Brass, Glass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Smoked glass', '<h5>WEIGHT</h5>\r\n80 kg | 176,4 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\n80 kg | 176,4 lbs\r\n<br>\r\nDiam. 130 cm | 63,1\'\''),
(208, 'Vertigo Center Table', 208, 1, 'Vertigo center table was made with sleek design giving a classy feel and a luxurious appeal. The unusual forms in gold plated brass involve the nero marquina marble making the center of living rooms the aura of your projects.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Nero marquina marble', '<h5>WEIGHT</h5>\r\n120 kg | 265 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 32 cm | 12,6\'\'\r\n<br>\r\nL 122,5 cm | 48,2\'\'\r\n<br>\r\nD 85 cm | 33,5\'\''),
(209, 'Beyond Center Table', 209, 1, 'An impressive display of elegance, Beyond center table shows the exquisite capacity to fill a variety of ambiences thanks to its luxury presence. This delicate work of brass, wood and marble reflects warm and golden tones on its polished surface.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Nero marquina marble', '<h5>WEIGHT</h5>\r\n55 kg | 121,3 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 43,1 cm | 17\'\'\r\n<br>\r\nL 121,5 cm | 47,8\'\'\r\n<br>\r\nD 102,7 cm | 40,4\'\''),
(210, 'Prisma Side Table', 210, 1, 'The Prisma side table conveys a spiral and passionate design that definitely seems to go beyond this world. A celestial piece handcrafted using traditional techniques and materials like black lacquer, brass and Nero Marquina marble with one purpose only – to transform any exclusive environment.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass Marble nero marquina & Black lacquer', '<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 46 cm | 18,1\'\'\r\n<br>\r\nL 63,5 cm | 25\'\'\r\n<br>\r\nD 63,5 cm | 25\'\''),
(211, 'Beyond Side Table', 211, 1, 'Beyond side table boasts elegance and discerning taste through inspirational symmetrical design. Featuring both contrasting shapes and materials from a geometric Nero Marquina marble to a gold plated brass detail and a unique black lacquer textured finish. An exclusive furniture item that stands out due to its perfectly balanced synthesis.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Nero marquina marble', '<h5>WEIGHT</h5>\r\n15 kg | 33,07 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 60 cm | 23,62\'\'\r\n<br>\r\nL 49,5 cm | 19,5\'\'\r\n<br>\r\nD 49,5 cm | 19,5\'\''),
(212, 'Beyond Dining Table', 212, 1, 'The distinctive details make a delicate adjustment between, the best hand worked wood with touches of brass and the warm and golden tones on its polished surface. Created in an outstanding moment of inspiration, this luxury statement table makes the perfect center point of any dining setting.', '<h5>MATERIALS</h5>\r\nBody: Brass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Black lacquer', '<h5>WEIGHT</h5>\r\n120 kg | 264,55 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 250 cm | 98,43\'\'\r\n<br>\r\nD 120 cm | 47,24\'\' \r\n<br>\r\nH 74 cm | 29,13\'\''),
(213, 'Littus Dining Table', 213, 1, 'The creation of Littus Dining Table was made in order to strengthen a unique concept. This luxury dining table has come to symbolize the spiral, is a curve in the space, which runs around a centre in a special way like the great decisions are taken around powerful tables among determined minds. With quality signature, Littus Dining Table embodies handmade techniques such as marble cutting, gold plated brass, executed by some of the best craftsman.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated, Black lacquer, Marble nero marquina', '<h5>WEIGHT</h5>\r\n160 kg | 353 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 77 cm | 30,3\'\'\r\n<br>\r\nDiam. 160 cm | 63,1\'\''),
(214, 'Empire Center Table', 214, 1, 'This center table has an extravagant shape of refinement and style. It is carefully made in brass and nero marquina marble. This is a combination between classic and modern design, perfect for every interior setting.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Nero marquina marble', '<h5>WEIGHT</h5>\r\n54 Kg | 119 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 40 cm | 15,75\'\'\r\n<br>\r\nDiam. 80 cm | 31,50\'\''),
(215, 'Empire Side Table Big', 215, 1, 'Empire State Building was the inspiration for this stunning side table. It adds a classic yet modern appeal to any space. Made with the highest quality of brass and nero marquina marble, this is ideal to create a spectacular and sophisticated living room, entrance or bedroom.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Nero marquina marble', '<h5>WEIGHT</h5>\r\n28 kg | 61 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 61 cm | 24\'\'\r\n<br>\r\nDiam. 43 cm | 16,93\'\''),
(216, 'Empire Side Table Small', 216, 1, 'Made with the highest quality of brass and nero marquina marble, Empire side table wins a new form. It’s a versatile item which gives a sophisticated ambiance to any setting, from living room to an entrance or a bedroom.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Nero marquina marble', '<h5>WEIGHT</h5>\r\n32 kg | 70 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 50 cm | 19,6\'\'\r\n<br>\r\nDiam. 50 cm | 19,6\'\''),
(217, 'Charla Two Seat Chair', 217, 1, 'Charla two seat chair is a splendid object of boundless elegance with an opulent touch. This marvelous composition for two is the perfect example of timeless lines with a modern twist, by using a complexity of luxurious materials, such as velvet, brass and lacquered wood. An imperative in the Charla family successor lineage.', '<h5>MATERIALS</h5>\r\nBody: Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Brown velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n45 kg | 99,2 lbs', '<h5>DIMENSIONS</h5>\r\nH 80 cm | 31,5\'\'\r\n<br>\r\nL 132 cm | 52,\'\'\r\n<br>\r\nD 60 cm | 23,6\'\'\r\n<br>\r\nSeat Height: 42 cm | 16,5\'\'\r\n<br>\r\nSeat Lenght: 120 cm | 47,3\'\'\r\n<br>\r\nSeat Depth: 47,5 cm | 18,7\'\''),
(218, 'Charla Dining Chair', 218, 1, 'Charla dining chair is a splendid object of boundless elegance. This marvelous design is the perfect example of timeless lines with a modern twist, by using a complexity of luxurious materials, such as velvet, brass and lacquered wood.', '<h5>MATERIALS</h5>\r\nBody: Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Brown velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>DIMENSIONS</h5>\r\nH 87 cm | 34,3\'\'\r\n<br>\r\nL 51 cm | 20,1\'\'\r\n<br>\r\nD 60 cm | 23,6\'\'\r\n<br>\r\nSeat Height: 47 cm | 18,5\'\'\r\n<br>\r\nSeat Depth: 47 cm | 18,5\'\''),
(219, 'Otto Armchair', 219, 1, 'Otto armchair is LUXXU’s omen to its prosperous future, a luxurious design Empire. Made with noble materials, such as velvet and leather, the brass detail elevates this armchair into a masterpiece. Meaning greatness and fortune, this armchair is a statement in every imperial ambience.', '<h5>MATERIALS</h5>\r\nBody: Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Black velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n30 kg | 66,1 lbs', '<h5>DIMENSIONS</h5>\r\nH 80 cm | 31,5\'\'\r\n<br>\r\nL 72 cm | 28,3\'\'\r\n<br>\r\nD 72 cm | 28,3\'\'\r\n<br>\r\nSeat Height: 43 cm | 17\'\'\r\n<br>\r\nSeat Depth: 43 cm | 17\'\''),
(220, 'Prisma Stool', 220, 1, 'The prisma stool is a symphony of meticulous proportions based on a simple square black velvet, created with the same empowering and passionate aesthetics in its design. The unified softness conceptions of well-defined geometric shapes end in a gold plated surplice. This luxury item adapts perfectly to any ambiance or style.', '<h5>MATERIALS</h5>\r\nBody: Brass & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Black velvet', '<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 45 cm | 17,7\'\'\r\n<br>\r\nL 32 cm | 12,6\'\'\r\n<br>\r\nD 32 cm | 12,6\'\''),
(221, 'Noir Stool', 221, 1, 'The dual personality of this stool stays in a unique beautifully balance between softness black velvet and strong personality in a gold plated brass ring. The smooth curved lines and its versatility are rather appealing and destined to bring elegance to a luxurious space perfect for both a contemporary or classic setting.', '<h5>MATERIALS</h5>\r\nBody: Brass & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Black velvet', '<h5>WEIGHT</h5>\r\n8 kg | 17,6 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 46 cm | 18,11\'\'\r\n<br>\r\nDiam. 52 cm | 20,5\'\''),
(222, 'Armour Stool', 222, 1, 'An upholstered delicacy emerging from the careful application of luscious black velvet touches and passionate design. Extra luxury feel is given by the gold plated brass finish to this marvelous stool, which will embellish the most sumptuous contemporary and classic setting.', '<h5>MATERIALS</h5>\r\nBody: Cotton velvet and Brass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Cotton velvet', '<h5>WEIGHT</h5>\r\n15 kg | 33,06 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 43 cm | 16,92\'\'\r\n<br>\r\nDiam. 35,5 cm | 13,97\'\''),
(223, 'Empire Column Display', 223, 1, 'Inspired by Empire State Building’s architecture, the Empire column display takes the same empowering and passionate aesthetics in its design. A luxury item capable of providing a classic yet modern feel to any space with its stunning gold plated brass and Nero Marquina marble. Perfect for classic entrance halls and livings rooms.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Marble nero marquina', '<h5>WEIGHT</h5>\r\n40 kg | 18,1 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 107 cm | 42,1\'\'\r\n<br>\r\nL 34 cm | 13,4\'\'\r\n<br>\r\nD 34 cm | 13,4\'\''),
(224, 'Delta Screen', 224, 1, 'Delta Screen explodes with a dramatic but elegant black, noting a sensual geometry in the flow of the four panels.\r\nThis unique folding screen is perfectly wrapped in polished brass & black lacquered wood and adorned with black leather.\r\nUnleash the reality of the unforgettable and addictive taste of uniqueness.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Black lacquered wood & Black leather', '<h5>WEIGHT</h5>\r\n85 kg | 188 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nL 202 cm | 79,5\'\'\r\n<br>\r\nH 160 cm | 63\'\'\r\n<br>\r\nD 6 cm | 2,4\'\''),
(225, 'Empire Screen', 225, 1, 'If you\'ve always imagined your projects with exquisite details this Empire folding screen donates a deluxe feel to the most stylish spaces. The three panels are made in smoked mirror and gold plated brass. The Empire folding screen is not only important for decoration but these partitions are also convenient to divide spaces. The ultimate luxury for a dressing room by providing privacy.', '<h5>MATERIALS</h5>\r\nBody: Brass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Smoked black mirror', '<h5>WEIGHT</h5>\r\n120 kg | 264,6 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 209 cm | 82,3\'\'\r\n<br>\r\nL 180 cm | 70,9\'\'\r\n<br>\r\nD 4 cm | 1,6\'\''),
(226, 'Orbis Mirror', 226, 1, 'The Orbis mirror was inspired by ancient times in history, adopting the same simplicity of the golden era. Creates an atmosphere of irresistible exposure and exclusivity, this creation aims to total immersion in sumptuously glamorous interiors and the gold colour enhances the luxurious details present in its design.', '<h5>MATERIALS</h5>\r\nBody: Brass & Mirror\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished Brass & Smoked black mirror', '<h5>WEIGHT</h5>\r\n25 kg | 55,1 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 9,1 cm | 3,58\'\'\r\n<br>\r\nDiam. 101,3 cm | 39,8\'\''),
(227, 'Explosion Mirror', 227, 1, 'The recreation of the Explosion achieves a luxurious level. The perfect solution to highlight any ambience with its prestigious and revivalist attitude. A strong attention to mighty and luxury detail are reflected in the numerous slim gold plated brass and crystal arms which orbit around a smoked black mirror glass. This decorative mirror lives to burst interiors with its traditional craftsmanship and luxurious details.', '<h5>MATERIALS</h5>\r\nBody: Brass, Mirror & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Smoked black mirror', '<h5>WEIGHT</h5>\r\n27 kg | 59,5 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 6,5 cm | 2,56\'\'\r\n<br>\r\nDiam. 90,1 cm | 35,47\'\''),
(228, 'Crown Mirror', 228, 1, 'More than just a simple piece of art, the Crown mirror represents a living tribute to the beauty. The breathtaking combination of smoked black mirror and gold plated brass, challenges the notion of exquisiteness and breaks all the creative boundaries.', '<h5>MATERIALS</h5>\r\nBody: Brass & Mirror\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Smoked black mirror', '<h5>WEIGHT</h5>\r\n30 kg | 66,1 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 7,1 cm | 2,8\'\'\r\n<br>\r\nDiam. 82,8 cm | 32,6\'\''),
(229, 'Majestic XL Wall Light Mirror', 229, 1, 'The emancipation of lighting reflects a fascinating design of the craftsmen, giving Majestic a whole new dimension. The glow takes the form of a golden plated brass circle and each of its ribbed crystal glass cylinders evoke a petrifying effect in any setting. A mirror to desire.', '<h5>MATERIALS</h5>\r\nBody: Brass, Mirror & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Smoked black mirror\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n25 kg | 55,1 lbs', '<h5>DIMENSIONS</h5>\r\n32x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 6,6 cm | 2,6\'\'\r\n<br>\r\nDiam. 141 cm | 55,5\'\''),
(230, 'Darian Gold Mirror', 230, 1, 'Brass is the only material that has a perfect harmony in order to create a masterpiece like the Darian Gold. A simple yet unique luxury item that captures both the functionality of a mirror and the splendour of an art piece. Decorative, practical and divine.', '<h5>MATERIALS</h5>\r\nBody: Brass & Mirror\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Black mirror', '<h5>WEIGHT</h5>\r\n35 kg | 77,2 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 15 cm | 5,9\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\''),
(231, 'Darian Black Mirror', 231, 1, 'Materials like black lacquer and brass are combined into a perfect harmony in order to create a masterpiece like the Darian Black. A simple yet unique luxury item that captures both the functionality of a mirror and the splendour of an art piece. Decorative, practical and divine.', '<h5>MATERIALS</h5>\r\nBody: Brass, Mirror & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black mirror & Black lacquer', '<h5>WEIGHT</h5>\r\n35 kg | 77,2 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 15 cm | 5,9\'\'\r\n<br>\r\nDiam. 100 cm | 39,4\'\''),
(232, 'Empire Mirror', 232, 1, 'Empire mirror found its inspiration in the extravagant and vigorous Empire Collection. With its will to keep up with the Empire family high standards on exquisite and exceptional design, the Empire mirror’s powerful lines are the result of an extraordinary precision of handmade techniques. Adequate to transform any space into a luxurious atmosphere.', '<h5>MATERIALS</h5>\r\nBody: Brass & Mirror\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Smoked Black Mirror', '<h5>WEIGHT</h5>\r\n52 kg | 115 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 90 cm | 35,4\'\'\r\n<br>\r\nD 5,8 cm | 2,3\'\'\r\n<br>\r\nH 175 cm | 68,9\'\''),
(233, 'McQueen Wall Light Mirror', 233, 1, 'A meticulously designed beauty object. The approach to the epitome of contemporary luxury is kept in the tradition of the jewelry artisans. Like a savage beauty, this elegant mirror brings the powerful evocation of the sublime. The magnificent foliage is made of hammered brass with gold plated finish and a rhythmic luminosity of the Swarovski crystals.', '<h5>MATERIALS</h5>\r\nBody: Brass, Mirror & Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Hammered Brass, Gold plated, Smoked Black Mirror & Amber Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,09 lbs', '<h5>DIMENSIONS</h5>\r\n6x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 20 cm | 7,87\'\'\r\n<br>\r\nDiam. 94,5 cm | 37,2\'\''),
(234, 'Majestic Wall Light Mirror', 234, 1, 'The glow takes the form of a golden plated brass circle and each of your ribbed crystal glass cylinders evokes a petrifying effect in any setting. This emancipation of lighting reflects fascinating design of the craftsmen to become a mirror of desire. So is the Majestic.', '<h5>MATERIALS</h5>\r\nBody: Brass, Mirror & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Smoked Black Mirror\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 39 lbs', '<h5>DIMENSIONS</h5>\r\n28x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 6,6 cm | 2,6\'\'\r\n<br>\r\nDiam. 107 cm | 42\'\''),
(235, 'Apotheosis Console', 235, 1, 'A hymn to sophistication and design, the Apotheosis console creates a strong presence that will revolutionize the looks of any project. Its straight lines make for a glorious construction, embodying the spirit of exclusive design.\r\nA daring and elegant balance between marble, lacquer and brass lines.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Nero Marquina Marble', '<h5>WEIGHT</h5>\r\n60 kg | 132,3 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 87 cm | 34,3\'\'\r\n<br>\r\nL 180 cm | 70,9\'\'\r\n<br>\r\nD 53 cm | 21\'\''),
(236, 'Suspicion Console', 236, 1, 'The zenith between elegance and balance, the Suspicion console is daringly sculpted in stone and fills any room with lavishing luxury. This console is the epitome of intricate equilibrium, joining marble with fine brass lines.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Nero marquina marble & amarillo triana Marble', '<h5>WEIGHT</h5>\r\n120 kg | 265 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 88 cm | 35\'\'\r\n<br>\r\nL 170 cm | 66,93\'\'\r\n<br>\r\nD 50 cm | 20\'\''),
(237, 'Spear Side Table', 237, 1, 'Inspired by Ancient Rome, the Spear Side Table features a timeless design on which sleek gold plated lines support a rectangular platform made in Nero Marquina marble. The base is dramatically tapered allowing a beautiful intersected boundary. A symbiosis of toughness and elegance to be paired with a mirrored surface.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass Black lacquer & Nero marquina marble', '<h5>WEIGHT</h5>\r\n35 kg | 77,2 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 63 cm | 25\'\'\r\n<br>\r\nL 50 cm | 19,7\'\'\r\n<br>\r\nD 44 cm | 17,3\'\''),
(238, 'Darian Side Table', 238, 1, 'Darian is a luxurious round side table, imponent and lavish. Resonates elegance in its luxurious silhouette with the composed blend of nero marquina marble, involved with fine gold plated brass detailing. This luxury item adapts perfectly to any ambiance or style.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Nero Marquina Marble', '<h5>WEIGHT</h5>\r\n13 kg | 28,7 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 58 cm | 23,83\'\'\r\n<br>\r\nL 71 cm | 28,1\'\'\r\n<br>\r\nD 71 cm | 28,1\'\''),
(239, 'Algerone Dining Table', 239, 1, 'Algerone is an opulent round dining table, inspired by architectural elements, it was designed to remind us of the unique strength and class that only marble has. The carrara marble circular top is supported by a sleek base adorned with black leather and polished brass detailing. A design that will redefine the way you perceive dining tables.', '<h5>MATERIALS</h5>\r\nBody: Brass, Marble & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold Plated, Carrara Marble & Black Leather', '<h5>WEIGHT</h5>\r\n366 kg | 806,89 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 180 cm | 70,87\'\'\r\n<br>\r\nD 180 cm | 70,87\'\'\r\n<br>\r\nH 74,5 cm | 29,33\'\''),
(240, 'Navis Armchair', 240, 1, 'Navis armchair, as its names suggest, is inspired by the epoch of the discoveries’ courageous vessels. A heritage of courageous ancestors prevails in this straight line handcrafted chair. The absolute elegant perspective of an era, perfect for the most sumptuous ambiances.', '<h5>MATERIALS</h5>\r\nBody: Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather, Black velvet & Brown velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n35 kg | 77,2 lbs', '<h5>DIMENSIONS</h5>\r\nH 78 cm | 30,7\'\'\r\n<br>\r\nL 90 cm | 35,4\'\'\r\n<br>\r\nD 87 cm | 34,3\'\'\r\n<br>\r\nSeat Height: 60 cm | 23,6\'\'\r\n<br>\r\nSeat Depth: 46 cm | 18,1\'\''),
(241, 'Saboteur Armchair', 241, 1, 'Inspired by the noir movie scene , the Saboteur is the perfect meeting between luxury and comfort. Using only the finest materials, such as velvet and brass, this armchair will become your favourite dwelling in the house.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Gray velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n40 kg | 88,2 lbs', '<h5>DIMENSIONS</h5>\r\nH 74 cm | 29,1\'\'\r\n<br>\r\nL 107 cm | 42,1\'\'\r\n<br>\r\nD 86 cm | 33,9\'\'\r\n<br>\r\nSeat Height: 40 cm | 15,7\'\'\r\n<br>\r\nSeat Depth: 60 cm | 24\'\''),
(242, 'McQueen Retangular Wall Light Mirror', 242, 1, 'In line with the entire McQueen family, this McQueen Rectangular Light Mirror is a meticulously designed beauty object. The tradition of the jewellery artisans is kept in this approach to contemporary luxury. \r\nA sublime and powerful evocation of savage beauty. The magnificent foliage is made of hammered brass with gold plated finish and a rhythmic luminosity of the Swarovski crystals.', '<h5>MATERIALS</h5>\r\nBody: Brass, Mirror & Swarovski Crystals\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Brass, Mirror & Swarovski Crystal\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n40 kg | 88,2 lbs', '<h5>DIMENSIONS</h5>\r\n12x g9 Halogen Bulbs (40W max) *USA not included\r\n<br>\r\nVoltage: 220-240V\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 76 cm | 30\'\' \r\n<br>\r\nD 13 cm | 51,2\'\'\r\n<br>\r\nH 106 cm | 42\'\'');
INSERT INTO `product_languages` (`id`, `name`, `product_id`, `language_id`, `description`, `tec_info`, `dimensions`) VALUES
(243, 'Scala Mirror', 243, 1, 'Surrender to the beauty of crown jewels forms, a gold round mirror that embodies a living tribute to ancient art and craftsmanship. Poetically made in gold plated brass, Scala mirror is combined with a black smoked glass, expanding the boundaries of creativity and sophistication', '<h5>MATERIALS</h5>\r\nBody: Brass & Mirror\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Smoked black mirror', '<h5>WEIGHT</h5>\r\n30 kg | 66,1 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 7,2 cm | 2,8\'\'\r\n<br>\r\nDiam. 135 cm | 53\'\''),
(244, 'Crackle Mirror', 244, 1, 'The luxurious Crackle mirror is made of the finest gold plated brass and smoked black mirror. Inspired by the opulence of golden nuggets it is graced with the ability to create exclusive and refined ambiances. This geometric design resembles a shattered mirror and promises to create the most glamorous interiors.', '<h5>MATERIALS</h5>\r\nBody: Brass & Mirror\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass & Smoked black mirror', '<h5>WEIGHT</h5>\r\n45 kg | 99,21 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 82 cm | 32,28\'\' \r\n<br>\r\nD 12,9 cm | 5,08\'\'\r\n<br>\r\nH 144 cm | 56,69\'\''),
(245, 'Apotheosis TV Cabinet', 245, 1, 'An anthem of sophistication and exclusive design. The Apotheosis TV Cabinet is a defining presence and will change any room it is part of, creating a glorious atmosphere around it. A daring, yet elegant balance between the finest materials, nero maquina marble, gold plated brass and black lacquered wood.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Nero marquina marble', '<h5>WEIGHT</h5>\r\n130 kg | 286,60 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 42 cm | 16,54\'\'\r\n<br>\r\nL 230 cm | 90,55\'\'\r\n<br>\r\nD 50 cm | 19,69\'\''),
(246, 'Imperium Side Table', 246, 1, 'The Imperium Side Table draws its inspiration from the classical lines of dramatic castles and great city walls, reminding us of opulent crowns. A lacquered wood structure embellished with gold plated brass and nero marquina marble. Being a strong and powerful presence in any ambiance, this side table is a symbol of strength, that will bring greatness to every interior setting.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Nero marquina marble', '<h5>WEIGHT</h5>\r\n20 kg | 44,09 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 52 cm | 20,47\'\'\r\n<br>\r\nL 53 cm | 20,87\'\'\r\n<br>\r\nD 53 cm | 20,87\'\''),
(247, 'Darian Center Table', 247, 1, 'The Darian takes up a new form, this time in a lavish center table. A proof that precise knowledge and expert craftsmanship can create a luxurious silhouette. Involving the glossy black lacquered wood are fine gold plated brass lines and it’s finished off with a circular nero marquina marble top. A sumptuous piece that blends the splendor of art with a strong personality.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Nero marquina marble', '<h5>WEIGHT</h5>\r\n45 kg | 99,21 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 41 cm | 16,14\'\'\r\n<br>\r\nL 131 cm | 51,57\'\'\r\n<br>\r\nD 131 cm | 51,57\'\''),
(248, 'Nubian Side Table', 248, 1, 'The glorious geometrical construction of the Nubian pyramids outcome a contrasting shape design. Characterised by its complexity of noble materials such as glass, wood, and brass, the Nubian Side Table is a complex embodiment of comfort. An auspicious highlight in any ambiance.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Black glass', '<h5>WEIGHT</h5>\r\n35 kg | 77,16 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 40 cm | 15,75\'\'\r\n<br>\r\nD 40 cm | 15,75\'\'\r\n<br>\r\nH 50 cm | 19,69\'\''),
(249, 'Darian II Side Table', 249, 1, 'Inspired by our remarkable Darian sideboard, the Darian Side Table II rises has a luxurious side table, impotent and lavish. A ravishing handcraft side table, that is made of round smoked glass placed on top of a wooden structure in black lacquer touched by gold-plated brass bars. This luxury item adapts perfectly to any ambiance or style.', '<h5>MATERIALS</h5>\r\nBody: Brass, Glass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Smoked glass', '<h5>WEIGHT</h5>\r\n28 kg | 61,73 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 50 cm | 19,69\'\'\r\n<br>\r\nDiam. 50 cm | 19,69\'\''),
(250, 'Apotheosis Side Table', 250, 1, 'A hymn to sophistication and design, this side table adds a vigorous presence that revolutionizes the look of any project. Its unique form reveals the talent of the craftsmen and the exclusivity of the design, resulting in a glorious construction.\r\nA daring and elegant balance of polished brass, black lacquer and emperador marble.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Emperador Marble', '<h5>WEIGHT</h5>\r\n25 kg | 55,12 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 50 cm | 19,69\'\'\r\n<br>\r\nL 54 cm | 21,26\'\'\r\n<br>\r\nD 54 cm | 21,26\'\''),
(251, 'Apotheosis Center Table', 251, 1, 'This center table represents a living anthem of sophistication and exclusive design. The Apotheosis will change any division, creating a remarkable and unique atmosphere. This c is center table audacious and splendid harmony between the finest materials, polished brass, black lacquer and emperador dark marble.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Emperador dark marble', '<h5>WEIGHT</h5>\r\n75 kg | 165,35 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 35 cm | 13,78\'\'\r\n<br>\r\nL 160 cm | 62,99\'\'\r\n<br>\r\nD 100 cm | 39,37\'\''),
(252, 'Anguis Sofa', 252, 1, 'Inspired by its peculiar shape, the Anguis is a modular and adaptable Sofa, built to take a variety of profiles without losing its comfortable and luxurious facet. \r\nThe skin that covers it reflects the refinement of its manufacture and ensures high levels of strength and durability, while the lacquered wood conveys a sense of refinement in the details. \r\nA timeless piece built using manual processes, and high quality materials, able to adapt to the most varied ambiences.', '<h5>MATERIALS</h5>\r\nBody: Synthetic Leather & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Grey leather & Black lacquer\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n221 kg | 487,22 lbs', '<h5>DIMENSIONS</h5>\r\nH 69 cm | 27,2\'\'\r\n<br>\r\nL 330 cm | 129,9\'\'\r\n<br>\r\nD 143 cm | 32,3\'\'\r\n<br>\r\nSeat Height: 41 cm | 16,1\'\'\r\n<br>\r\nSeat Depth: 65 cm | 25,6\'\''),
(253, 'Explosion XL Mirror', 253, 1, 'The recreation of the Explosion XL Mirror achieves a new luxurious level, without losing its roots. The perfect solution to highlight any ambience with its prestigious and revivalist attitude. A strong attention to mighty and luxury detail are reflected in the numerous slim gold plated brass and crystal arms which orbit around a sizable smoked and black mirror glass. The Explosion XL Mirror rises to burst interiors with its traditional craftsmanship and luxurious details.', '<h5>MATERIALS</h5>\r\nBody: Brass, Mirror & Crystal Glass\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Smoked black mirror', '<h5>WEIGHT</h5>\r\n48 kg | 105,82 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nD 6,5 cm | 2,56\'\'\r\n<br>\r\nDiam. 117 cm | 46,06\'\''),
(254, 'Anguis Sofa Center', 254, 1, 'The beauty of this piece dwels in the contrast of it’s textures. Comfort and elegance have a harmonious relation here, either by the subtle use of brass either by the use of the leather. A modular piece that can be easily customized without losing its identity. The result of the coordinated work between design and craftsmanship.', '<h5>MATERIALS</h5>\r\nBody: Synthetic Leather, Brass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Grey leather, Polished brass & Black lacquer', '<h5>WEIGHT</h5>\r\n110 kg | 242,5 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 68 cm | 26,8\'\'\r\n<br>\r\nDiam. 330 cm | 129,9\'\'\r\n<br>\r\nSeat Height: 43 cm | 16,9\'\''),
(255, 'Crackle Center Table', 255, 1, 'Following the same inspirational lines as the Crackler family, this pieces stands itself by the complexity of the manual work on the brass and the technique used to apply the walnut root veneer. It will fit as an hotel lobby element as well as a table for the intimacy of your house.', '<h5>MATERIALS</h5>\r\nBody: Brass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Emperador dark marble', '<h5>WEIGHT</h5>\r\n72 kg | 158,72 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 38 cm | 14,96\'\'\r\n<br>\r\nL 140 cm | 55,12\'\'\r\n<br>\r\nD 80 cm | 31,5\'\''),
(256, 'Crackle Side Table', 256, 1, 'Following the lines of the glamorous Crackle Family, this Side Table proposed refined lines and an elegant approach of design. The geometric aspect of this piece reflect the expertise and manual work from our craftsmen. Opulent and Majestic, the Crackle Side Table will elevate any interior decoration!', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Emperador marble', '<h5>WEIGHT</h5>\r\n30 kg | 66,14 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 51,5 cm | 20,28\'\'\r\n<br>\r\nD 37,5 cm | 14,76\'\'\r\n<br>\r\nH 49 cm | 19,29\'\''),
(257, 'Saboteur Sofa', 257, 1, 'Continuing the elegant Saboteur line, this sofa was created with the perfect combination between velvet and brass, merging into a true luxury symbiosis. Made with the best handmade techniques, this masterpiece gives the best comfort touch to any exquisite look.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Gray velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n90 kg | 198,4 lbs', '<h5>DIMENSIONS</h5>\r\nH 74 cm | 29,1\'\' \r\n<br>\r\nL 207 cm | 81,49\'\'\r\n<br>\r\nD 86 cm | 33,9\'\'\r\n<br>\r\nSeat Height: 40 cm | 15,7\'\'\r\n<br>\r\nSeat Depth: 60 cm | 24\'\' '),
(258, 'Charla Bar Chair', 258, 1, 'Created to complete the Charla timeless line, this exquisite piece joins the best materials, such as velvet, brass, lacquered wood with the finest techniques of our craftsman. Reuniting our finest luxury values, this design promises to steal the attention of any interior.', '<h5>MATERIALS</h5>\r\nBody: Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Brown velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>DIMENSIONS</h5>\r\nH 96 cm | 37,8\'\'\r\n<br>\r\nL 53 cm | 20,9\'\'\r\n<br>\r\nD 60 cm | 23,6\'\'\r\n<br>\r\nSeat Height: 75 cm | 29,5\'\'\r\n<br>\r\nSeat Depth: 47 cm | 18,5\'\''),
(259, 'Navis Sofa', 259, 1, 'Navis brings with itself the strength of an era. A symbol of courage and daring. The design meets comfort creating a strong but elegant piece. This sofa puts together velvet, leather and a touch of polished brass in order to offer a discreet but sumptuous contrast.', '<h5>MATERIALS</h5>\r\nBody: Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather, Black Velvet & Brown Velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n90 kg | 198,4 lbs\r\n', '<h5>DIMENSIONS</h5>\r\nH 82 cm | 32,3\'\' \r\n<br>\r\nL 217 cm | 85,4\'\'\r\n<br>\r\nD 90 cm | 35,4\'\'\r\n<br>\r\nSeat Height: 43 cm | 16,9\'\'\r\n<br>\r\nSeat Depth: 64 cm | 25,2\'\' '),
(260, 'Littus Oval Dining Table', 260, 1, 'Littus oval dining table Littus, with a very strong style and sculptural features, has come to be recognised by its distinctive spiral. With the same quality signature of the collection, this oval table embodies handmade techniques by some of the best craftsman.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Nero marquina', '<h5>WEIGHT</h5>\r\n320 kg | 705,48 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 250 cm | 110,23\'\'\r\n<br>\r\nD 140 cm | 55,12\'\'\r\n<br>\r\nH 76 cm | 29,92\'\''),
(261, 'Vertigo Side Table', 261, 1, 'With a sublime shape, this side table is the highest proof of ultimate design. It\'s composed by perfectly crafted marble, polished brass and smoked glass which creates a unique and sophisticated environment wherever it\'s placed. A fascinating and exclusive piece that exhales luxury and a cohesive style. The Vertigo Side Table is the definition of a luxurious lifestyle.', '<h5>MATERIALS</h5>\r\nBody: Brass, Glass & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Smoked glass & Emperador dark marble', '<h5>WEIGHT</h5>\r\n35 kg | 77,16 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 40 cm | 15,74\'\'\r\n<br>\r\nD 42,5 cm | 16,73\'\'\r\n<br>\r\nH 53,3 cm | 20,98\'\''),
(262, 'Tenor Ottoman', 262, 1, 'A highly stylish ottoman with a smooth and elegant shape. Made with grey velvet and with polished brass legs, this upholstered beauty will bring an attractive presence to any room, hotel suite or master bedroom.', '<h5>MATERIALS</h5>\r\nBody: Brass & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished Brass & Grey Velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n45 kg | 99,21 lbs', '<h5>DIMENSIONS</h5>\r\nH 44 cm | 17,32\'\'\r\n<br>\r\nL 170 cm | 66,93\'\'\r\n<br>\r\nD 60 cm | 23,62\'\'\r\n<br>\r\nSeat Height: 44 cm | 17,32\'\'\r\n<br>\r\nSeat Depth: 60 cm | 23,62\'\''),
(263, 'Waltz Nightstand', 263, 1, 'Honouring a refined and unmistakable character that seduces by the beauty of its contrasts, the Waltz nighstand was born. Transpiring elegance, sobriety and decisiveness,the high material quality dismisses the ordinary to create exclusive and versatile solutions.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood, Glass & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer, Walnut Root, Smoked Glass & Black Leather', '<h5>WEIGHT</h5>\r\n45 kg | 99,21 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 69 cm | 27,17\'\'\r\n<br>\r\nH 49 cm | 19,30\'\'\r\n<br>\r\nD 47 cm | 18,50\'\''),
(264, 'Waltz Desk', 264, 1, 'Functional and contemporary with an unmistakable style, the metal feet is decorative as well as structural, offering a new interpretation of design. The contrast of it’s textures is the result of a coordinated work between design and craftsmanship.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer, Walnut Root & Black Leather', '<h5>WEIGHT</h5>\r\n75 kg | 165,35 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 140 cm | 55,12\'\'\r\n<br>\r\nD 59 cm | 23,23\'\'\r\n<br>\r\nH 88 cm | 34,65\'\''),
(265, 'Charla Sofa', 265, 1, 'Designed in leather with a brass and lacquered wood base, Charla Sofa is an item of boundless elegance. Timeless with a modern twist this comfortable sofa is ideal for living rooms, dressing rooms, or commercial spaces as boutiques.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass, Leather & Synthetic Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Gray Synthetic Leather\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n120 kg | 264,6 lbs', '<h5>DIMENSIONS</h5>\r\nH 76 cm | 29,9\'\'\r\n<br>\r\nL 198 cm | 78\'\'\r\n<br>\r\nD 89 cm | 35\'\'\r\n<br>\r\nSeat Height: 40 cm | 15,75\'\'\r\n<br>\r\nSeat Depth: 66 cm | 26\'\''),
(266, 'Charla Armchair', 266, 1, 'Charla Armchair is a modern twist on timeless and classic armchairs. Finished with leather upholstery the Charla fits into most interior design styles and can be customized to fit into any color scheme. An item of boundless elegance that blends luxury and comfort into one.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Gray Synthetic Leather\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n40 kg | 88,2 lbs', '<h5>DIMENSIONS</h5>\r\nH 76 cm | 29,9\'\'\r\n<br>\r\nL 86 cm | 33,9\'\'\r\n<br>\r\nD 89 cm | 35\'\'\r\n<br>\r\nSeat Height: 40 cm | 15,7\'\'\r\n<br>\r\nSeat Depth: 60 cm | 24\'\''),
(267, 'Anguis Armchair', 267, 1, 'A modern armchair that stands out in any lounge or living room due to its contrasting, yet harmonious, textures.The round shape ensures comfort. Made only with finest materials, the brass legs contrast with the black velvet and wood finish and create a sophisticated and lavish armchair that brings a touch of luxury to any interior.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Walnut Root Wood, Black leather & Brown velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>DIMENSIONS</h5>\r\nH 75 cm | 30,1\'\'\r\n<br>\r\nL 72 cm | 28,35\'\'\r\n<br>\r\nD 62 cm | 24,41\'\'\r\n<br>\r\nSeat Height: 52 cm | 20,47\'\'\r\n<br>\r\nSeat Depth: 40 cm | 15,75\'\''),
(268, 'Ocadia Armchair', 268, 1, 'A brass frame supports the arched backrest, designed to provide comfort. High durability, comfort and style define the Ocadia Armchair, a velvet armchair that provides just the right amount of luxury. Inspired by turtles’ shells the Ocadia is a luxurious way to sit back. Ideal for bedrooms, living rooms, lounges or office spaces.', '<h5>MATERIALS</h5>\r\nBody: Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Gray velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n45 kg | 99,2 lbs', '<h5>DIMENSIONS</h5>\r\nH 96 cm | 37,8\'\'\r\n<br>\r\nL 66 cm | 26,1\'\'\r\n<br>\r\nD 63 cm | 25\'\'\r\n<br>\r\nSeat Height: 44 cm | 17,3\'\'\r\n<br>\r\nSeat Depth: 43 cm | 17\'\''),
(269, 'Galea Dining Chair', 269, 1, 'Galea is a glamorous dining chair that blends ancient with modern. It draws inspiration from an helmet worn by warriors in the Roman Empire and is brought to life through traditional production techniques. The result is a velvet and leather modern armchair, which elegant silhouette ensures it’s perfect for upscale restaurants and modern dining rooms.', '<h5>MATERIALS</h3>\r\nBody: Wood, Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Walnut Root, Polished brass, Black leather & Black velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n28 kg | 61,73 lbs', '<h5>DIMENSIONS</h5>\r\nH 76 cm | 30,1\'\'\r\n<br>\r\nL 63 cm | 24,8\'\'\r\n<br>\r\nD 51 cm | 20,1\'\'\r\n<br>\r\nSeat Height: 48 cm | 18,5\'\'\r\n<br>\r\nSeat Depth: 45 cm | 17,71\'\''),
(270, 'Charla Chaise Longue', 270, 1, 'Chaise Longues have long been associated with luxury design and opulent master bedrooms. The Charla Chaise Longue takes on the Charla lines and brings a modern twist to these timeless furnishings. Upholstered in leather, the high-end modern chaise longue is the ultimate expression of luxury, comfort and elegance.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Gray Synthetic Leather\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n60 kg | 132,3 lbs', '<h5>DIMENSIONS</h5>\r\nH 76 cm | 29,9\'\'\r\n<br>\r\nL 98 cm | 38,6\'\'\r\n<br>\r\nD 175 cm | 68,9\'\'\r\n<br>\r\nSeat Height: 40 cm | 15,7\'\'\r\n<br>\r\nSeat Depth: 152 cm | 59,8\'\''),
(271, 'Charla Stool', 271, 1, 'A leather stool with a tufted finish that brings luxury and comfort together into one. Its versatile nature ensures it adapts to most styles and functions and can be placed accordingly - by a dressing table, in a dining or living room. Timeless with a modern twist, Charla Stool is an item of boundless elegance.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black Lacquer, Black leather & Grey Velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n8 kg | 17,64 lbs', '<h5>DIMENSIONS</h5>\r\nH 40 cm | 15,75\'\'\r\n<br>\r\nL 43 cm | 16,93\'\'\r\n<br>\r\nD 44 cm | 17,32\'\'\r\n<br>\r\nSeat Height: 40 cm | 15,75\'\'\r\n<br>\r\nSeat Depth: 42 cm | 16,54\'\''),
(272, 'Nura Dining Chair', 272, 1, 'Featuring a uniquely shaped backrest, Nura Dining Chair is the ultimate expression of cozy luxury. Shaped like an U, Nura is made of leather, brass and wood and provides an embracing comfort only found in armchairs with the same shape. Ideal for cozy yet glamorous dining rooms and restaurants.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Walnut Root\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>DIMENSIONS</h5>\r\nH 68 cm | 26,8\'\'\r\n<br>\r\nL 57 cm | 22,4\'\'\r\n<br>\r\nD 54 cm | 21,3\'\'\r\n<br>\r\nSeat Height: 44 cm | 17,3\'\'\r\n<br>\r\nSeat Depth: 44 cm | 17,3\'\''),
(273, 'Anguis Single Sofa', 273, 1, 'The Anguis single sofa is a a modern and comfortable sofa for one. The round shape ensures comfort, while the contrasting colors and materials create a sophisticated design. Made for powerful offices and lavish master bedrooms, this sofa made of velvet, wood, brass and leather brings the ideal touch of luxury.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Walnut Root,Black leather & Gray velvet\r\n<br><br>\r\n\r\n<h5>WEIGHT</h5>\r\n30 kg | 66,14 lbs', '<h5>DIMENSIONS</h5>\r\nH 76 cm | 29,92\'\'\r\n<br>\r\nL 96 cm | 37,80\'\'\r\n<br>\r\nD 72 cm | 28,35\'\'\r\n<br>\r\nSeat Height: 43 cm | 16,93\'\'\r\n<br>\r\nSeat Depth: 54 cm | 21,26\'\''),
(274, 'Charla Office Chair', 274, 1, 'Its ergonomic shape ensures a right posture, which allows working comfortably for hours, and the best materials, velvet, brass and lacquered wood ensure high-quality. All combined into one office chair, that ties comfort and luxury together. Timeless with a modern twist, Charla office Chair is an item of boundless elegance.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass, Leather & Velvet\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather, Black Lacquer & Gray Velvet\r\n\r\n<br><br>\r\n<h5>WEIGHT</h5>\r\n50 kg | 110,23 lbs', '<h5>DIMENSIONS</h5>\r\nH 103 cm | 40,55\'\'\r\n<br>\r\nL 70 cm | 27,56\'\'\r\n<br>\r\nD 70 cm | 27,56\'\'\r\n<br>\r\nSeat Height: 45 cm | 17,71\'\'\r\n<br>\r\nSeat Depth: 48 cm | 18,9\'\''),
(275, 'Charla Small Office Chair', 275, 1, 'The smaller version of the Charla Office Chair much like the bigger version ties luxury and comfort together. No comfortability was compromised in this smaller version, an office chair made with the best materials. Like the original design, it’s an item of boundless elegance and a timeless design that offers a modern twist to office spaces.', '<h5>MATERIALS</h5>\r\nBody: Wood, Brass & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black leather & Gray Synthetic Leather\r\n\r\n<br><br>\r\n<h5>WEIGHT</h5>\r\n20 kg | 44,1 lbs', '<h5>DIMENSIONS</h5>\r\nH 87 cm | 34,3\'\'\r\n<br>\r\nL 51 cm | 20,1\'\'\r\n<br>\r\nD 60 cm | 23,6\'\'\r\n<br>\r\nSeat Height: 47 cm | 18,5\'\'\r\n<br>\r\nSeat Depth: 47 cm | 18,5\'\''),
(276, 'Myllo Console', 276, 1, 'Inspired by the distinct engineering present in the tallest bridges, Myllo Console functions as symbol of solitude and inovation. Composed by Marble and Polished Brass it reflects the rawness and perfection of an engineer\'s masterpiece, fragile as it may appear but solid and firm that promises to hold your breath. It\'s a statement piece that holds any room\'s highest expectations.', '<h5>MATERIALS</h5>\r\nBody: Brass, Glass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black glass, Black lacquer & Nero marquina', '<h5>WEIGHT</h5>\r\n220 kg | 485,02 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 142 cm | 55,9\'\'\r\n<br>\r\nD 36 cm | 15,17\'\'\r\n<br>\r\nH 100 cm | 39,37\'\''),
(277, 'Apotheosis Dining Table', 277, 1, 'Inspired by the Greek Mythology, the Apotheosis Dining Table is the glorification of design and innovation. The polished brass legs give an unusual and chic effect to this piece that supports a marble and wood top. This combination and design reflect the elevation of what is earthly to a godlike stature, it defines the creation of something that is perfect. \r\nThis piece is the ultimate luxury of a modern dining room.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood & Marble\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer & Emperador marble', '<h5>WEIGHT</h5>\r\n240 kg | 529,12 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 250 cm | 98,43\'\'\r\n<br>\r\nD 120 cm | 47,24\'\'\r\n<br>\r\nH 74 cm | 29,13\'\''),
(278, 'Vertigo Outdoor Center Table', 278, 1, 'Vertigo collection is the ultimate expression of luxury lifestyle.Made of the finest materials, stainless steel and carrara marble, this center table fits into any setting, from outdoor lounge areas to the indoors. Made for the outdoors, it’s a center table that exhales luxury and style.', '<h5>MATERIALS</h5>\r\nBody: Brass & Stainless Steel\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished stainless steel & Carrara marble', '<h5>WEIGHT</h5>\r\n120 kg | 265 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 33,5 cm | 13,19\'\'\r\n<br>\r\nL 122,5 cm | 48,2\'\'\r\n<br>\r\nD 100 cm | 39,37\'\''),
(279, 'Vertigo Column Display', 279, 1, 'The elegant lines of the Vertigo Collection are the proof of ultimate design. The column display strikes a pose and becomes the perfect luxury display for collector items, art, or watches. Made of gold plated brass with a marble top, Vertigo exhales luxury.', '<h5>MATERIALS</h5>\r\nBody: Brass & Wood\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Gold plated & Black Gloss', '<h5>WEIGHT</h5>\r\n30 kg | 66,14 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nH 106 cm | 41,73\'\'\r\n<br>\r\nL 35 cm | 13,78\'\'\r\n<br>\r\nD 35 cm | 13,78\'\''),
(280, 'Waltz Bookcase', 280, 1, 'With an unmistakable style, this exquisite piece joins the best materials with the finest techniques of our craftsman. An anthem of sophistication and exclusive design.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood, Glass & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer, Walnut Root, Smoked Glass & Black Leather', '<h5>WEIGHT</h5>\r\n100 kg | 220,46 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 134 cm | 52,76\'\'\r\n<br>\r\nH 200 cm | 78,74\'\'\r\n<br>\r\nD 52 cm | 20,47\'\''),
(281, 'Waltz Closet', 281, 1, 'Waltz closet is an elegant modular clothing storage solution. Made with the finest materials, walnut root veneer, black leather, black lacquered wood, brass and smoked mirror. Waltz is the ideal closet for a luxury master bedroom or to create a dreamy organization system featuring shelves, rods and drawers.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood, Glass & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer, Walnut Root, Smoked Glass & Black Leather', '<h5>WEIGHT</h5>\r\n160 kg | 352,74 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 227 cm | 89,37\'\'\r\n<br>\r\nD 64 cm | 25,20\'\'\r\n<br>\r\nH 226 cm | 88,98\'\''),
(282, 'Waltz Dresser', 282, 1, 'The Waltz dresser dismisses the ordinary and creates an exclusive and versatile solution for storage, with eight spacious drawers, which are embellished with brass hardware. An elegant dresser, ideal for a luxury master bedroom or wardrobe and made of the finest materials and the best luxury finishes.', '<h5>MATERIALS</h5>\r\nBody: Brass, Wood, Glass & Leather\r\n<br><br>\r\n\r\n<h5>STANDARD FINISHES</h5>\r\nBody: Polished brass, Black lacquer, Walnut Root, Smoked Glass & Black Leather', '<h5>WEIGHT</h5>\r\n70 kg | 154,32 lbs\r\n<br><br>\r\n\r\n<h5>DIMENSIONS</h5>\r\nW 165 cm | 64,96\'\'\r\n<br>\r\nD 55 cm | 21,65\'\'\r\n<br>\r\nH 83 cm | 32,67\'\'');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_samples`
--

CREATE TABLE `product_samples` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `sample_id` int(10) UNSIGNED NOT NULL,
  `qtd_usa` int(11) NOT NULL,
  `qtd_ww` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `product_samples`
--

INSERT INTO `product_samples` (`id`, `product_id`, `sample_id`, `qtd_usa`, `qtd_ww`) VALUES
(1, 1, 1, 1, 0),
(2, 1, 2, 0, 1),
(3, 1, 4, 0, 0),
(4, 2, 1, 0, 0),
(5, 2, 2, 0, 0),
(6, 2, 4, 0, 0),
(7, 2, 16, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_similars`
--

CREATE TABLE `product_similars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `similar_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `product_similars`
--

INSERT INTO `product_similars` (`id`, `name`, `similar_id`, `product_id`) VALUES
(1, 'Empire Square Chandelier', 1, 7),
(2, 'Empire Square Chandelier', 1, 8),
(3, 'Empire Square Chandelier', 1, 36),
(4, 'Empire Square Chandelier', 1, 37),
(5, 'Pharo Chandelier', 2, 17),
(6, 'Pharo Chandelier', 2, 39),
(7, 'Pharo Chandelier', 2, 56),
(8, 'Pharo Chandelier', 2, 83),
(9, 'Gala Chandelier', 3, 20),
(10, 'Gala Chandelier', 3, 40),
(11, 'Gala Chandelier', 3, 61),
(12, 'Gala Chandelier', 3, 85),
(13, 'Majestic Chandelier', 4, 29),
(14, 'Majestic Chandelier', 4, 78),
(15, 'Majestic Chandelier', 4, 26),
(16, 'Majestic Chandelier', 4, 234),
(17, 'Liberty Chandelier', 5, 22),
(18, 'Liberty Chandelier', 5, 41),
(19, 'Liberty Chandelier', 5, 84),
(20, 'Liberty Chandelier', 5, 95),
(21, 'Babel Chandelier', 6, 21),
(22, 'Babel Chandelier', 6, 27),
(23, 'Babel Chandelier', 6, 43),
(24, 'Babel Chandelier', 6, 65),
(25, 'Empire Chandelier', 7, 22),
(26, 'Empire Chandelier', 7, 50),
(27, 'Empire Chandelier', 7, 213),
(28, 'Empire Chandelier', 7, 219),
(29, 'Empire XL Chandelier', 8, 1),
(30, 'Empire XL Chandelier', 8, 1),
(31, 'Empire XL Chandelier', 8, 1),
(32, 'Empire XL Chandelier', 8, 1),
(33, 'Scala Chandelier', 9, 1),
(34, 'Scala Chandelier', 9, 1),
(35, 'Scala Chandelier', 9, 1),
(36, 'Scala Chandelier', 9, 1),
(37, 'Burj Chandelier', 10, 1),
(38, 'Burj Chandelier', 10, 1),
(39, 'Burj Chandelier', 10, 1),
(40, 'Burj Chandelier', 10, 1),
(41, 'McQueen Chandelier', 11, 1),
(42, 'McQueen Chandelier', 11, 1),
(43, 'McQueen Chandelier', 11, 1),
(44, 'McQueen Chandelier', 11, 1),
(45, 'Waterfall Chandelier', 12, 1),
(46, 'Waterfall Chandelier', 12, 1),
(47, 'Waterfall Chandelier', 12, 1),
(48, 'Waterfall Chandelier', 12, 1),
(49, 'Guggenheim Chandelier', 13, 1),
(50, 'Guggenheim Chandelier', 13, 1),
(51, 'Guggenheim Chandelier', 13, 1),
(52, 'Guggenheim Chandelier', 13, 1),
(53, 'Trump Chandelier', 14, 1),
(54, 'Trump Chandelier', 14, 1),
(55, 'Trump Chandelier', 14, 1),
(56, 'Trump Chandelier', 14, 1),
(57, 'Empire II Suspension', 15, 1),
(58, 'Empire II Suspension', 15, 1),
(59, 'Empire II Suspension', 15, 1),
(60, 'Empire II Suspension', 15, 1),
(61, 'Pharo II Suspension', 16, 1),
(62, 'Pharo II Suspension', 16, 1),
(63, 'Pharo II Suspension', 16, 1),
(64, 'Pharo II Suspension', 16, 1),
(65, 'Pharo Suspension', 17, 1),
(66, 'Pharo Suspension', 17, 1),
(67, 'Pharo Suspension', 17, 1),
(68, 'Pharo Suspension', 17, 1),
(69, 'Liberty II Suspension', 18, 1),
(70, 'Liberty II Suspension', 18, 1),
(71, 'Liberty II Suspension', 18, 1),
(72, 'Liberty II Suspension', 18, 1),
(73, 'Waterfall Sputnik Suspension', 19, 1),
(74, 'Waterfall Sputnik Suspension', 19, 1),
(75, 'Waterfall Sputnik Suspension', 19, 1),
(76, 'Waterfall Sputnik Suspension', 19, 1),
(77, 'Gala Suspension', 20, 1),
(78, 'Gala Suspension', 20, 1),
(79, 'Gala Suspension', 20, 1),
(80, 'Gala Suspension', 20, 1),
(81, 'Babel Suspension', 21, 1),
(82, 'Babel Suspension', 21, 1),
(83, 'Babel Suspension', 21, 1),
(84, 'Babel Suspension', 21, 1),
(85, 'Liberty Suspension', 22, 1),
(86, 'Liberty Suspension', 22, 1),
(87, 'Liberty Suspension', 22, 1),
(88, 'Liberty Suspension', 22, 1),
(89, 'Empire Oval Suspension', 23, 1),
(90, 'Empire Oval Suspension', 23, 1),
(91, 'Empire Oval Suspension', 23, 1),
(92, 'Empire Oval Suspension', 23, 1),
(93, 'Tycho Rectangular Suspension', 24, 1),
(94, 'Tycho Rectangular Suspension', 24, 1),
(95, 'Tycho Rectangular Suspension', 24, 1),
(96, 'Tycho Rectangular Suspension', 24, 1),
(97, 'Harpia Suspension', 25, 1),
(98, 'Harpia Suspension', 25, 1),
(99, 'Harpia Suspension', 25, 1),
(100, 'Harpia Suspension', 25, 1),
(101, 'Majestic II Suspension', 26, 1),
(102, 'Majestic II Suspension', 26, 1),
(103, 'Majestic II Suspension', 26, 1),
(104, 'Majestic II Suspension', 26, 1),
(105, 'Babel Snooker Suspension', 27, 1),
(106, 'Babel Snooker Suspension', 27, 1),
(107, 'Babel Snooker Suspension', 27, 1),
(108, 'Babel Snooker Suspension', 27, 1),
(109, 'Trump Suspension', 28, 1),
(110, 'Trump Suspension', 28, 1),
(111, 'Trump Suspension', 28, 1),
(112, 'Trump Suspension', 28, 1),
(113, 'Majestic Suspension', 29, 1),
(114, 'Majestic Suspension', 29, 1),
(115, 'Majestic Suspension', 29, 1),
(116, 'Majestic Suspension', 29, 1),
(117, 'Pearl Suspension', 30, 1),
(118, 'Pearl Suspension', 30, 1),
(119, 'Pearl Suspension', 30, 1),
(120, 'Pearl Suspension', 30, 1),
(121, 'Explosion Suspension', 31, 1),
(122, 'Explosion Suspension', 31, 1),
(123, 'Explosion Suspension', 31, 1),
(124, 'Explosion Suspension', 31, 1),
(125, 'Tycho Round Suspension', 32, 1),
(126, 'Tycho Round Suspension', 32, 1),
(127, 'Tycho Round Suspension', 32, 1),
(128, 'Tycho Round Suspension', 32, 1),
(129, 'McQueen Round Suspension', 33, 1),
(130, 'McQueen Round Suspension', 33, 1),
(131, 'McQueen Round Suspension', 33, 1),
(132, 'McQueen Round Suspension', 33, 1),
(133, 'McQueen Globe Suspension', 34, 1),
(134, 'McQueen Globe Suspension', 34, 1),
(135, 'McQueen Globe Suspension', 34, 1),
(136, 'McQueen Globe Suspension', 34, 1),
(137, 'Waterfall Round Suspension', 35, 1),
(138, 'Waterfall Round Suspension', 35, 1),
(139, 'Waterfall Round Suspension', 35, 1),
(140, 'Waterfall Round Suspension', 35, 1),
(141, 'Empire Suspension', 36, 1),
(142, 'Empire Suspension', 36, 1),
(143, 'Empire Suspension', 36, 1),
(144, 'Empire Suspension', 36, 1),
(145, 'Empire Snooker Suspension', 37, 1),
(146, 'Empire Snooker Suspension', 37, 1),
(147, 'Empire Snooker Suspension', 37, 1),
(148, 'Empire Snooker Suspension', 37, 1),
(149, 'Waterfall Rectangular Suspension', 38, 1),
(150, 'Waterfall Rectangular Suspension', 38, 1),
(151, 'Waterfall Rectangular Suspension', 38, 1),
(152, 'Waterfall Rectangular Suspension', 38, 1),
(153, 'Pharo Pendant', 39, 1),
(154, 'Pharo Pendant', 39, 1),
(155, 'Pharo Pendant', 39, 1),
(156, 'Pharo Pendant', 39, 1),
(157, 'Gala Pendant', 40, 1),
(158, 'Gala Pendant', 40, 1),
(159, 'Gala Pendant', 40, 1),
(160, 'Gala Pendant', 40, 1),
(161, 'Liberty Pendant', 41, 1),
(162, 'Liberty Pendant', 41, 1),
(163, 'Liberty Pendant', 41, 1),
(164, 'Liberty Pendant', 41, 1),
(165, 'Guggenheim Pendant', 42, 1),
(166, 'Guggenheim Pendant', 42, 1),
(167, 'Guggenheim Pendant', 42, 1),
(168, 'Guggenheim Pendant', 42, 1),
(169, 'Babel Pendant', 43, 1),
(170, 'Babel Pendant', 43, 1),
(171, 'Babel Pendant', 43, 1),
(172, 'Babel Pendant', 43, 1),
(173, 'Trump Pendant', 44, 1),
(174, 'Trump Pendant', 44, 1),
(175, 'Trump Pendant', 44, 1),
(176, 'Trump Pendant', 44, 1),
(177, 'Pearl Pendant', 45, 1),
(178, 'Pearl Pendant', 45, 1),
(179, 'Pearl Pendant', 45, 1),
(180, 'Pearl Pendant', 45, 1),
(181, 'Tycho Pendant', 46, 1),
(182, 'Tycho Pendant', 46, 1),
(183, 'Tycho Pendant', 46, 1),
(184, 'Tycho Pendant', 46, 1),
(185, 'McQueen Pendant', 47, 1),
(186, 'McQueen Pendant', 47, 1),
(187, 'McQueen Pendant', 47, 1),
(188, 'McQueen Pendant', 47, 1),
(189, 'Burj Pendant', 48, 1),
(190, 'Burj Pendant', 48, 1),
(191, 'Burj Pendant', 48, 1),
(192, 'Burj Pendant', 48, 1),
(193, 'Draycott Pendant', 49, 1),
(194, 'Draycott Pendant', 49, 1),
(195, 'Draycott Pendant', 49, 1),
(196, 'Draycott Pendant', 49, 1),
(197, 'Empire Pendant', 50, 1),
(198, 'Empire Pendant', 50, 1),
(199, 'Empire Pendant', 50, 1),
(200, 'Empire Pendant', 50, 1),
(201, 'Waterfall Pendant', 51, 1),
(202, 'Waterfall Pendant', 51, 1),
(203, 'Waterfall Pendant', 51, 1),
(204, 'Waterfall Pendant', 51, 1),
(205, 'Trump II Wall', 52, 1),
(206, 'Trump II Wall', 52, 1),
(207, 'Trump II Wall', 52, 1),
(208, 'Trump II Wall', 52, 1),
(209, 'Waterfall XL Wall', 53, 1),
(210, 'Waterfall XL Wall', 53, 1),
(211, 'Waterfall XL Wall', 53, 1),
(212, 'Waterfall XL Wall', 53, 1),
(213, 'Pharo II Wall', 54, 1),
(214, 'Pharo II Wall', 54, 1),
(215, 'Pharo II Wall', 54, 1),
(216, 'Pharo II Wall', 54, 1),
(217, 'Tycho Torch Small Wall', 55, 1),
(218, 'Tycho Torch Small Wall', 55, 1),
(219, 'Tycho Torch Small Wall', 55, 1),
(220, 'Tycho Torch Small Wall', 55, 1),
(221, 'Pharo Wall', 56, 1),
(222, 'Pharo Wall', 56, 1),
(223, 'Pharo Wall', 56, 1),
(224, 'Pharo Wall', 56, 1),
(225, 'Waterfall II Wall', 57, 1),
(226, 'Waterfall II Wall', 57, 1),
(227, 'Waterfall II Wall', 57, 1),
(228, 'Waterfall II Wall', 57, 1),
(229, 'Burj II Wall', 58, 1),
(230, 'Burj II Wall', 58, 1),
(231, 'Burj II Wall', 58, 1),
(232, 'Burj II Wall', 58, 1),
(233, 'Wax Wall', 59, 1),
(234, 'Wax Wall', 59, 1),
(235, 'Wax Wall', 59, 1),
(236, 'Wax Wall', 59, 1),
(237, 'Empire II Wall', 60, 1),
(238, 'Empire II Wall', 60, 1),
(239, 'Empire II Wall', 60, 1),
(240, 'Empire II Wall', 60, 1),
(241, 'Gala Torch Wall', 61, 1),
(242, 'Gala Torch Wall', 61, 1),
(243, 'Gala Torch Wall', 61, 1),
(244, 'Gala Torch Wall', 61, 1),
(245, 'Guggenheim Wall', 62, 1),
(246, 'Guggenheim Wall', 62, 1),
(247, 'Guggenheim Wall', 62, 1),
(248, 'Guggenheim Wall', 62, 1),
(249, 'Tycho Torch Wall', 63, 1),
(250, 'Tycho Torch Wall', 63, 1),
(251, 'Tycho Torch Wall', 63, 1),
(252, 'Tycho Torch Wall', 63, 1),
(253, 'Scala Wall', 64, 1),
(254, 'Scala Wall', 64, 1),
(255, 'Scala Wall', 64, 1),
(256, 'Scala Wall', 64, 1),
(257, 'Babel Wall', 65, 1),
(258, 'Babel Wall', 65, 1),
(259, 'Babel Wall', 65, 1),
(260, 'Babel Wall', 65, 1),
(261, 'Tycho Small Wall', 66, 1),
(262, 'Tycho Small Wall', 66, 1),
(263, 'Tycho Small Wall', 66, 1),
(264, 'Tycho Small Wall', 66, 1),
(265, 'Tycho Wall', 67, 1),
(266, 'Tycho Wall', 67, 1),
(267, 'Tycho Wall', 67, 1),
(268, 'Tycho Wall', 67, 1),
(269, 'Liberty I Wall', 68, 1),
(270, 'Liberty I Wall', 68, 1),
(271, 'Liberty I Wall', 68, 1),
(272, 'Liberty I Wall', 68, 1),
(273, 'Liberty II Wall', 69, 1),
(274, 'Liberty II Wall', 69, 1),
(275, 'Liberty II Wall', 69, 1),
(276, 'Liberty II Wall', 69, 1),
(277, 'Waterfall Torch Wall', 70, 1),
(278, 'Waterfall Torch Wall', 70, 1),
(279, 'Waterfall Torch Wall', 70, 1),
(280, 'Waterfall Torch Wall', 70, 1),
(281, 'Draycott I Wall', 71, 1),
(282, 'Draycott I Wall', 71, 1),
(283, 'Draycott I Wall', 71, 1),
(284, 'Draycott I Wall', 71, 1),
(285, 'Draycott II Wall', 72, 1),
(286, 'Draycott II Wall', 72, 1),
(287, 'Draycott II Wall', 72, 1),
(288, 'Draycott II Wall', 72, 1),
(289, 'Burj Wall', 73, 1),
(290, 'Burj Wall', 73, 1),
(291, 'Burj Wall', 73, 1),
(292, 'Burj Wall', 73, 1),
(293, 'Empire Wall', 74, 1),
(294, 'Empire Wall', 74, 1),
(295, 'Empire Wall', 74, 1),
(296, 'Empire Wall', 74, 1),
(297, 'McQueen Wall', 75, 1),
(298, 'McQueen Wall', 75, 1),
(299, 'McQueen Wall', 75, 1),
(300, 'McQueen Wall', 75, 1),
(301, 'Waterfall Wall', 76, 1),
(302, 'Waterfall Wall', 76, 1),
(303, 'Waterfall Wall', 76, 1),
(304, 'Waterfall Wall', 76, 1),
(305, 'Trump Wall', 77, 1),
(306, 'Trump Wall', 77, 1),
(307, 'Trump Wall', 77, 1),
(308, 'Trump Wall', 77, 1),
(309, 'Majestic Plafond', 78, 1),
(310, 'Majestic Plafond', 78, 1),
(311, 'Majestic Plafond', 78, 1),
(312, 'Majestic Plafond', 78, 1),
(313, 'Empire Square Plafond', 79, 1),
(314, 'Empire Square Plafond', 79, 1),
(315, 'Empire Square Plafond', 79, 1),
(316, 'Empire Square Plafond', 79, 1),
(317, 'McQueen Plafond', 80, 1),
(318, 'McQueen Plafond', 80, 1),
(319, 'McQueen Plafond', 80, 1),
(320, 'McQueen Plafond', 80, 1),
(321, 'Scala Plafond', 81, 1),
(322, 'Scala Plafond', 81, 1),
(323, 'Scala Plafond', 81, 1),
(324, 'Scala Plafond', 81, 1),
(325, 'Empire Plafond', 82, 1),
(326, 'Empire Plafond', 82, 1),
(327, 'Empire Plafond', 82, 1),
(328, 'Empire Plafond', 82, 1),
(329, 'Pharo Floor', 83, 1),
(330, 'Pharo Floor', 83, 1),
(331, 'Pharo Floor', 83, 1),
(332, 'Pharo Floor', 83, 1),
(333, 'Liberty Floor', 84, 1),
(334, 'Liberty Floor', 84, 1),
(335, 'Liberty Floor', 84, 1),
(336, 'Liberty Floor', 84, 1),
(337, 'Gala Floor', 85, 1),
(338, 'Gala Floor', 85, 1),
(339, 'Gala Floor', 85, 1),
(340, 'Gala Floor', 85, 1),
(341, 'Waterfall Floor', 86, 1),
(342, 'Waterfall Floor', 86, 1),
(343, 'Waterfall Floor', 86, 1),
(344, 'Waterfall Floor', 86, 1),
(345, 'Empire Floor', 87, 1),
(346, 'Empire Floor', 87, 1),
(347, 'Empire Floor', 87, 1),
(348, 'Empire Floor', 87, 1),
(349, 'McQueen Floor', 88, 1),
(350, 'McQueen Floor', 88, 1),
(351, 'McQueen Floor', 88, 1),
(352, 'McQueen Floor', 88, 1),
(353, 'Tycho Floor', 89, 1),
(354, 'Tycho Floor', 89, 1),
(355, 'Tycho Floor', 89, 1),
(356, 'Tycho Floor', 89, 1),
(357, 'Babel Floor', 90, 1),
(358, 'Babel Floor', 90, 1),
(359, 'Babel Floor', 90, 1),
(360, 'Babel Floor', 90, 1),
(361, 'Draycott Floor', 91, 1),
(362, 'Draycott Floor', 91, 1),
(363, 'Draycott Floor', 91, 1),
(364, 'Draycott Floor', 91, 1),
(365, 'Pharo I Table Lamp', 92, 1),
(366, 'Pharo I Table Lamp', 92, 1),
(367, 'Pharo I Table Lamp', 92, 1),
(368, 'Pharo I Table Lamp', 92, 1),
(369, 'Pharo II Table Lamp', 93, 1),
(370, 'Pharo II Table Lamp', 93, 1),
(371, 'Pharo II Table Lamp', 93, 1),
(372, 'Pharo II Table Lamp', 93, 1),
(373, 'Waterfall Table Lamp', 94, 1),
(374, 'Waterfall Table Lamp', 94, 1),
(375, 'Waterfall Table Lamp', 94, 1),
(376, 'Waterfall Table Lamp', 94, 1),
(377, 'Liberty Table Lamp', 95, 1),
(378, 'Liberty Table Lamp', 95, 1),
(379, 'Liberty Table Lamp', 95, 1),
(380, 'Liberty Table Lamp', 95, 1),
(381, 'Tycho Table Lamp', 96, 1),
(382, 'Tycho Table Lamp', 96, 1),
(383, 'Tycho Table Lamp', 96, 1),
(384, 'Tycho Table Lamp', 96, 1),
(385, 'Darian Sideboard', 200, 1),
(386, 'Darian Sideboard', 200, 1),
(387, 'Darian Sideboard', 200, 1),
(388, 'Darian Sideboard', 200, 1),
(389, 'Tenor Sideboard', 201, 1),
(390, 'Tenor Sideboard', 201, 1),
(391, 'Tenor Sideboard', 201, 1),
(392, 'Tenor Sideboard', 201, 1),
(393, 'Nubian Console', 203, 1),
(394, 'Nubian Console', 203, 1),
(395, 'Nubian Console', 203, 1),
(396, 'Nubian Console', 203, 1),
(397, 'Spear Console', 204, 1),
(398, 'Spear Console', 204, 1),
(399, 'Spear Console', 204, 1),
(400, 'Spear Console', 204, 1),
(401, 'Beyond Console', 205, 1),
(402, 'Beyond Console', 205, 1),
(403, 'Beyond Console', 205, 1),
(404, 'Beyond Console', 205, 1),
(405, 'Vertigo Console', 206, 1),
(406, 'Vertigo Console', 206, 1),
(407, 'Vertigo Console', 206, 1),
(408, 'Vertigo Console', 206, 1),
(409, 'Darian Dining Table', 207, 1),
(410, 'Darian Dining Table', 207, 1),
(411, 'Darian Dining Table', 207, 1),
(412, 'Darian Dining Table', 207, 1),
(413, 'Vertigo Center Table', 208, 1),
(414, 'Vertigo Center Table', 208, 1),
(415, 'Vertigo Center Table', 208, 1),
(416, 'Vertigo Center Table', 208, 1),
(417, 'Beyond Center Table', 209, 1),
(418, 'Beyond Center Table', 209, 1),
(419, 'Beyond Center Table', 209, 1),
(420, 'Beyond Center Table', 209, 1),
(421, 'Prisma Side Table', 210, 1),
(422, 'Prisma Side Table', 210, 1),
(423, 'Prisma Side Table', 210, 1),
(424, 'Prisma Side Table', 210, 1),
(425, 'Beyond Side Table', 211, 1),
(426, 'Beyond Side Table', 211, 1),
(427, 'Beyond Side Table', 211, 1),
(428, 'Beyond Side Table', 211, 1),
(429, 'Beyond Dining Table', 212, 1),
(430, 'Beyond Dining Table', 212, 1),
(431, 'Beyond Dining Table', 212, 1),
(432, 'Beyond Dining Table', 212, 1),
(433, 'Littus Dining Table', 213, 1),
(434, 'Littus Dining Table', 213, 1),
(435, 'Littus Dining Table', 213, 1),
(436, 'Littus Dining Table', 213, 1),
(437, 'Empire Center Table', 214, 1),
(438, 'Empire Center Table', 214, 1),
(439, 'Empire Center Table', 214, 1),
(440, 'Empire Center Table', 214, 1),
(441, 'Empire Side Table Big', 215, 1),
(442, 'Empire Side Table Big', 215, 1),
(443, 'Empire Side Table Big', 215, 1),
(444, 'Empire Side Table Big', 215, 1),
(445, 'Empire Side Table Small', 216, 1),
(446, 'Empire Side Table Small', 216, 1),
(447, 'Empire Side Table Small', 216, 1),
(448, 'Empire Side Table Small', 216, 1),
(449, 'Charla Two Seat Chair', 217, 1),
(450, 'Charla Two Seat Chair', 217, 1),
(451, 'Charla Two Seat Chair', 217, 1),
(452, 'Charla Two Seat Chair', 217, 1),
(453, 'Charla Dining Chair', 218, 1),
(454, 'Charla Dining Chair', 218, 1),
(455, 'Charla Dining Chair', 218, 1),
(456, 'Charla Dining Chair', 218, 1),
(457, 'Otto Armchair', 219, 1),
(458, 'Otto Armchair', 219, 1),
(459, 'Otto Armchair', 219, 1),
(460, 'Otto Armchair', 219, 1),
(461, 'Prisma Stool', 220, 1),
(462, 'Prisma Stool', 220, 1),
(463, 'Prisma Stool', 220, 1),
(464, 'Prisma Stool', 220, 1),
(465, 'Noir Stool', 221, 1),
(466, 'Noir Stool', 221, 1),
(467, 'Noir Stool', 221, 1),
(468, 'Noir Stool', 221, 1),
(469, 'Armour Stool', 222, 1),
(470, 'Armour Stool', 222, 1),
(471, 'Armour Stool', 222, 1),
(472, 'Armour Stool', 222, 1),
(473, 'Empire Column Display', 223, 1),
(474, 'Empire Column Display', 223, 1),
(475, 'Empire Column Display', 223, 1),
(476, 'Empire Column Display', 223, 1),
(477, 'Delta Screen', 224, 1),
(478, 'Delta Screen', 224, 1),
(479, 'Delta Screen', 224, 1),
(480, 'Delta Screen', 224, 1),
(481, 'Empire Screen', 225, 1),
(482, 'Empire Screen', 225, 1),
(483, 'Empire Screen', 225, 1),
(484, 'Empire Screen', 225, 1),
(485, 'Orbis Mirror', 226, 1),
(486, 'Orbis Mirror', 226, 1),
(487, 'Orbis Mirror', 226, 1),
(488, 'Orbis Mirror', 226, 1),
(489, 'Explosion Mirror', 227, 1),
(490, 'Explosion Mirror', 227, 1),
(491, 'Explosion Mirror', 227, 1),
(492, 'Explosion Mirror', 227, 1),
(493, 'Crown Mirror', 228, 1),
(494, 'Crown Mirror', 228, 1),
(495, 'Crown Mirror', 228, 1),
(496, 'Crown Mirror', 228, 1),
(497, 'Majestic XL Wall Light Mirror', 229, 1),
(498, 'Majestic XL Wall Light Mirror', 229, 1),
(499, 'Majestic XL Wall Light Mirror', 229, 1),
(500, 'Majestic XL Wall Light Mirror', 229, 1),
(501, 'Darian Gold Mirror', 230, 1),
(502, 'Darian Gold Mirror', 230, 1),
(503, 'Darian Gold Mirror', 230, 1),
(504, 'Darian Gold Mirror', 230, 1),
(505, 'Darian Black Mirror', 231, 1),
(506, 'Darian Black Mirror', 231, 1),
(507, 'Darian Black Mirror', 231, 1),
(508, 'Darian Black Mirror', 231, 1),
(509, 'Empire Mirror', 232, 1),
(510, 'Empire Mirror', 232, 1),
(511, 'Empire Mirror', 232, 1),
(512, 'Empire Mirror', 232, 1),
(513, 'McQueen Wall Light Mirror', 233, 1),
(514, 'McQueen Wall Light Mirror', 233, 1),
(515, 'McQueen Wall Light Mirror', 233, 1),
(516, 'McQueen Wall Light Mirror', 233, 1),
(517, 'Majestic Wall Light Mirror', 234, 1),
(518, 'Majestic Wall Light Mirror', 234, 1),
(519, 'Majestic Wall Light Mirror', 234, 1),
(520, 'Majestic Wall Light Mirror', 234, 1),
(521, 'Apotheosis Console', 235, 1),
(522, 'Apotheosis Console', 235, 1),
(523, 'Apotheosis Console', 235, 1),
(524, 'Apotheosis Console', 235, 1),
(525, 'Suspicion Console', 236, 1),
(526, 'Suspicion Console', 236, 1),
(527, 'Suspicion Console', 236, 1),
(528, 'Suspicion Console', 236, 1),
(529, 'Spear Side Table', 237, 1),
(530, 'Spear Side Table', 237, 1),
(531, 'Spear Side Table', 237, 1),
(532, 'Spear Side Table', 237, 1),
(533, 'Darian Side Table', 238, 1),
(534, 'Darian Side Table', 238, 1),
(535, 'Darian Side Table', 238, 1),
(536, 'Darian Side Table', 238, 1),
(537, 'Algerone Dining Table', 239, 1),
(538, 'Algerone Dining Table', 239, 1),
(539, 'Algerone Dining Table', 239, 1),
(540, 'Algerone Dining Table', 239, 1),
(541, 'Navis Armchair', 240, 1),
(542, 'Navis Armchair', 240, 1),
(543, 'Navis Armchair', 240, 1),
(544, 'Navis Armchair', 240, 1),
(545, 'Saboteur Armchair', 241, 1),
(546, 'Saboteur Armchair', 241, 1),
(547, 'Saboteur Armchair', 241, 1),
(548, 'Saboteur Armchair', 241, 1),
(549, 'McQueen Retangular Wall Light Mirror', 242, 1),
(550, 'McQueen Retangular Wall Light Mirror', 242, 1),
(551, 'McQueen Retangular Wall Light Mirror', 242, 1),
(552, 'McQueen Retangular Wall Light Mirror', 242, 1),
(553, 'Scala Mirror', 243, 1),
(554, 'Scala Mirror', 243, 1),
(555, 'Scala Mirror', 243, 1),
(556, 'Scala Mirror', 243, 1),
(557, 'Crackle Mirror', 244, 1),
(558, 'Crackle Mirror', 244, 1),
(559, 'Crackle Mirror', 244, 1),
(560, 'Crackle Mirror', 244, 1),
(561, 'Apotheosis TV Cabinet', 245, 1),
(562, 'Apotheosis TV Cabinet', 245, 1),
(563, 'Apotheosis TV Cabinet', 245, 1),
(564, 'Apotheosis TV Cabinet', 245, 1),
(565, 'Imperium Side Table', 246, 1),
(566, 'Imperium Side Table', 246, 1),
(567, 'Imperium Side Table', 246, 1),
(568, 'Imperium Side Table', 246, 1),
(569, 'Darian Center Table', 247, 1),
(570, 'Darian Center Table', 247, 1),
(571, 'Darian Center Table', 247, 1),
(572, 'Darian Center Table', 247, 1),
(573, 'Nubian Side Table', 248, 1),
(574, 'Nubian Side Table', 248, 1),
(575, 'Nubian Side Table', 248, 1),
(576, 'Nubian Side Table', 248, 1),
(577, 'Darian II Side Table', 249, 1),
(578, 'Darian II Side Table', 249, 1),
(579, 'Darian II Side Table', 249, 1),
(580, 'Darian II Side Table', 249, 1),
(581, 'Apotheosis Side Table', 250, 1),
(582, 'Apotheosis Side Table', 250, 1),
(583, 'Apotheosis Side Table', 250, 1),
(584, 'Apotheosis Side Table', 250, 1),
(585, 'Apotheosis Center Table', 251, 1),
(586, 'Apotheosis Center Table', 251, 1),
(587, 'Apotheosis Center Table', 251, 1),
(588, 'Apotheosis Center Table', 251, 1),
(589, 'Anguis Sofa', 252, 1),
(590, 'Anguis Sofa', 252, 1),
(591, 'Anguis Sofa', 252, 1),
(592, 'Anguis Sofa', 252, 1),
(593, 'Explosion XL Mirror', 253, 1),
(594, 'Explosion XL Mirror', 253, 1),
(595, 'Explosion XL Mirror', 253, 1),
(596, 'Explosion XL Mirror', 253, 1),
(597, 'Anguis Sofa Center', 254, 1),
(598, 'Anguis Sofa Center', 254, 1),
(599, 'Anguis Sofa Center', 254, 1),
(600, 'Anguis Sofa Center', 254, 1),
(601, 'Crackle Center Table', 255, 1),
(602, 'Crackle Center Table', 255, 1),
(603, 'Crackle Center Table', 255, 1),
(604, 'Crackle Center Table', 255, 1),
(605, 'Crackle Side Table', 256, 1),
(606, 'Crackle Side Table', 256, 1),
(607, 'Crackle Side Table', 256, 1),
(608, 'Crackle Side Table', 256, 1),
(609, 'Saboteur Sofa', 257, 1),
(610, 'Saboteur Sofa', 257, 1),
(611, 'Saboteur Sofa', 257, 1),
(612, 'Saboteur Sofa', 257, 1),
(613, 'Charla Bar Chair', 258, 1),
(614, 'Charla Bar Chair', 258, 1),
(615, 'Charla Bar Chair', 258, 1),
(616, 'Charla Bar Chair', 258, 1),
(617, 'Navis Sofa', 259, 1),
(618, 'Navis Sofa', 259, 1),
(619, 'Navis Sofa', 259, 1),
(620, 'Navis Sofa', 259, 1),
(621, 'Littus Oval Dining Table', 260, 1),
(622, 'Littus Oval Dining Table', 260, 1),
(623, 'Littus Oval Dining Table', 260, 1),
(624, 'Littus Oval Dining Table', 260, 1),
(625, 'Vertigo Side Table', 261, 1),
(626, 'Vertigo Side Table', 261, 1),
(627, 'Vertigo Side Table', 261, 1),
(628, 'Vertigo Side Table', 261, 1),
(629, 'Tenor Ottoman', 262, 1),
(630, 'Tenor Ottoman', 262, 1),
(631, 'Tenor Ottoman', 262, 1),
(632, 'Tenor Ottoman', 262, 1),
(633, 'Waltz Nightstand', 263, 1),
(634, 'Waltz Nightstand', 263, 1),
(635, 'Waltz Nightstand', 263, 1),
(636, 'Waltz Nightstand', 263, 1),
(637, 'Waltz Desk', 264, 1),
(638, 'Waltz Desk', 264, 1),
(639, 'Waltz Desk', 264, 1),
(640, 'Waltz Desk', 264, 1),
(641, 'Charla Sofa', 265, 1),
(642, 'Charla Sofa', 265, 1),
(643, 'Charla Sofa', 265, 1),
(644, 'Charla Sofa', 265, 1),
(645, 'Charla Armchair', 266, 1),
(646, 'Charla Armchair', 266, 1),
(647, 'Charla Armchair', 266, 1),
(648, 'Charla Armchair', 266, 1),
(649, 'Anguis Armchair', 267, 1),
(650, 'Anguis Armchair', 267, 1),
(651, 'Anguis Armchair', 267, 1),
(652, 'Anguis Armchair', 267, 1),
(653, 'Ocadia Armchair', 268, 1),
(654, 'Ocadia Armchair', 268, 1),
(655, 'Ocadia Armchair', 268, 1),
(656, 'Ocadia Armchair', 268, 1),
(657, 'Galea Dining Chair', 269, 201),
(658, 'Galea Dining Chair', 269, 2),
(659, 'Galea Dining Chair', 269, 5),
(660, 'Galea Dining Chair', 269, 1),
(661, 'Charla Chaise Longue', 270, 1),
(662, 'Charla Chaise Longue', 270, 1),
(663, 'Charla Chaise Longue', 270, 1),
(664, 'Charla Chaise Longue', 270, 1),
(665, 'Charla Stool', 271, 1),
(666, 'Charla Stool', 271, 1),
(667, 'Charla Stool', 271, 1),
(668, 'Charla Stool', 271, 1),
(669, 'Nura Dining Chair', 272, 1),
(670, 'Nura Dining Chair', 272, 1),
(671, 'Nura Dining Chair', 272, 1),
(672, 'Nura Dining Chair', 272, 1),
(673, 'Anguis Single Sofa', 273, 1),
(674, 'Anguis Single Sofa', 273, 1),
(675, 'Anguis Single Sofa', 273, 1),
(676, 'Anguis Single Sofa', 273, 1),
(677, 'Charla Office Chair', 274, 1),
(678, 'Charla Office Chair', 274, 1),
(679, 'Charla Office Chair', 274, 1),
(680, 'Charla Office Chair', 274, 1),
(681, 'Charla Small Office Chair', 275, 1),
(682, 'Charla Small Office Chair', 275, 1),
(683, 'Charla Small Office Chair', 275, 1),
(684, 'Charla Small Office Chair', 275, 1),
(685, 'Myllo Console', 276, 1),
(686, 'Myllo Console', 276, 1),
(687, 'Myllo Console', 276, 1),
(688, 'Myllo Console', 276, 1),
(689, 'Apotheosis Dining Table', 277, 1),
(690, 'Apotheosis Dining Table', 277, 1),
(691, 'Apotheosis Dining Table', 277, 1),
(692, 'Apotheosis Dining Table', 277, 1),
(693, 'Vertigo Outdoor Center Table', 278, 1),
(694, 'Vertigo Outdoor Center Table', 278, 1),
(695, 'Vertigo Outdoor Center Table', 278, 1),
(696, 'Vertigo Outdoor Center Table', 278, 1),
(697, 'Vertigo Column Display', 279, 1),
(698, 'Vertigo Column Display', 279, 1),
(699, 'Vertigo Column Display', 279, 1),
(700, 'Vertigo Column Display', 279, 1),
(701, 'Waltz Bookcase', 280, 1),
(702, 'Waltz Bookcase', 280, 1),
(703, 'Waltz Bookcase', 280, 1),
(704, 'Waltz Bookcase', 280, 1),
(705, 'Waltz Closet', 281, 1),
(706, 'Waltz Closet', 281, 1),
(707, 'Waltz Closet', 281, 1),
(708, 'Waltz Closet', 281, 1),
(709, 'Waltz Dresser', 282, 1),
(710, 'Waltz Dresser', 282, 1),
(711, 'Waltz Dresser', 282, 1),
(712, 'Waltz Dresser', 282, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `request_type_id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `requested_at` datetime NOT NULL,
  `viewed_at` datetime DEFAULT NULL,
  `aproved` tinyint(1) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `request_types`
--

CREATE TABLE `request_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `samples`
--

CREATE TABLE `samples` (
  `id` int(10) UNSIGNED NOT NULL,
  `finish_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `key_words` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `samples`
--

INSERT INTO `samples` (`id`, `finish_id`, `slug`, `is_active`, `is_deleted`, `key_words`, `meta_description`) VALUES
(1, 1, 'gold-plated', 1, 0, 'gold plated, metal', 'This finish has a real gold plated bath (14kt) with a fine layer of UV varnish that is applied over the surface to preserve its shine for years.'),
(2, 1, 'brushed-brass', 1, 0, 'brushed brass, metal', 'A finely brushed brass finish with mellow highlights and a coat of UV varnish.'),
(3, 1, 'polished-brass', 1, 0, 'polished brass, metal', ''),
(4, 1, 'nickel-plated', 1, 0, 'nickel plated, metal', 'It is a warmer tone than chrome and it’s softly tarnished and protected with a layer of UV varnish.'),
(5, 1, 'brushed-nickel', 1, 0, 'brushed nickel, metal', 'Created by gently rubbing nickel plated brass with an abrasive pad for a satin finish. It is not lacquered.'),
(6, 1, 'black-nickel-plated', 1, 0, 'black nickel plated, metal', 'A dark blackish finish, fairly flat and uniform, protected with a layer of UV varnish.'),
(7, 1, 'brushed-black-nickel', 1, 0, 'brushed black nickel, metal', 'A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.'),
(8, 1, 'aged-brass', 1, 0, 'aged brass, metal', 'A subtle brown patina over a satin-brushed surface that has the elegant appearance of aged brass.'),
(9, 1, 'copper-plated', 1, 0, 'cooper plated, metal', 'This finish has a bath of copper over antiqued and highlighted satin brass.'),
(10, 1, 'brushed-cooper', 1, 0, 'brushed cooper, metal', 'This effect is finely brushed and protected with a coat of UV varnish.'),
(11, 2, 'ambar-colour', 1, 0, 'ambar colour, crystal glass', ''),
(12, 2, 'clear-colour', 1, 0, 'clear colour, crystal glass', ''),
(13, 2, 'ambar-colour', 1, 0, 'ambar colour, crystal glass', ''),
(14, 2, 'clear-colour', 1, 0, 'clear colour, crystal glass', ''),
(15, 2, 'crystal-tear', 1, 0, 'crystal tear, crystal glass', ''),
(16, 3, 'crystal-colour', 1, 0, 'crystal colour, swarovski crystal', ''),
(17, 3, 'gold-antique-colour', 1, 0, 'gold antique colour, swarovski crystal', ''),
(18, 3, 'ambar-colour', 1, 0, 'ambar colour, swarovski crystal', ''),
(19, 3, 'black-colour', 1, 0, 'black colour, swarovski crystal', ''),
(20, 4, 'gold-textile', 1, 0, 'gold textile, cords', ''),
(21, 4, 'black-textile', 1, 0, 'black textile, cords', ''),
(22, 4, 'white-textile', 1, 0, 'white textile, cords', ''),
(23, 4, 'silver-textile', 1, 0, 'silver textile, cords', ''),
(24, 4, 'gold-rubber', 1, 0, 'gold rubber, cords', ''),
(25, 4, 'black-rubber', 1, 0, 'black rubber, cords', ''),
(26, 4, 'silver-rubber', 1, 0, 'silver rubber, cords', ''),
(27, 5, 'estremoz', 1, 0, 'estremoz, marble', 'White coloured marble with a prominent position in Portugal. The Estremoz marble presents a quite uniform background with a thin to medium grain, and a slight brownish vein.'),
(28, 5, 'carrara', 1, 0, 'carrara, marble', 'Carrara marble is one of the iconic luxury Italian marbles featuring shades and veins of greyish-white.'),
(29, 5, 'nero-marquina', 1, 0, 'nero marquina, marble', 'A deep black coloured marble, with a distinctive fine white veining pattern colour.'),
(30, 5, 'green', 1, 0, 'green, marble', ''),
(31, 5, 'emperador-dark', 1, 0, 'emperador dark, marble', ''),
(32, 6, 'palisander', 1, 0, 'palisander, wood', ''),
(33, 6, 'palisander-matte', 1, 0, 'palisander matte, wood', ''),
(34, 6, 'pau-santo', 1, 0, 'pau santo, wood', ''),
(35, 6, 'poplar-root', 1, 0, 'poplar root, wood', ''),
(36, 6, 'walnut-root', 1, 0, 'walnut root, wood', ''),
(37, 6, 'walnut-root-matte', 1, 0, 'walnut root matte, wood', ''),
(38, 6, 'ebony', 1, 0, 'ebony, wood', ''),
(39, 6, 'ebony-matte', 1, 0, 'ebony matte, wood', ''),
(40, 7, 'utopian-fr-colour-1', 1, 0, 'utopian colour, fabric velvet', ''),
(41, 7, 'utopian-fr-colour-2', 1, 0, 'utopian colour, fabric velvet', ''),
(42, 7, 'utopian-fr-colour-3', 1, 0, 'utopian colour, fabric velvet', ''),
(43, 7, 'utopian-fr-colour-4', 1, 0, 'utopian colour, fabric velvet', ''),
(44, 7, 'utopian-fr-colour-5', 1, 0, 'utopian colour, fabric velvet', ''),
(45, 7, 'utopian-fr-colour-6', 1, 0, 'utopian colour, fabric velvet', ''),
(46, 7, 'utopian-fr-colour-7', 1, 0, 'utopian colour, fabric velvet', ''),
(47, 7, 'utopian-fr-colour-8', 1, 0, 'utopian colour, fabric velvet', ''),
(48, 7, 'utopian-fr-colour-9', 1, 0, 'utopian colour, fabric velvet', ''),
(49, 7, 'utopian-fr-colour-10', 1, 0, 'utopian colour, fabric velvet', ''),
(50, 7, 'utopian-fr-colour-11', 1, 0, 'utopian colour, fabric velvet', ''),
(51, 7, 'utopian-fr-colour-12', 1, 0, 'utopian colour, fabric velvet', ''),
(52, 7, 'utopian-fr-colour-13', 1, 0, 'utopian colour, fabric velvet', ''),
(53, 7, 'utopian-fr-colour-14', 1, 0, 'utopian colour, fabric velvet', ''),
(54, 7, 'utopian-fr-colour-15', 1, 0, 'utopian colour, fabric velvet', ''),
(55, 7, 'utopian-fr-colour-16', 1, 0, 'utopian colour, fabric velvet', ''),
(56, 7, 'utopian-fr-colour-17', 1, 0, 'utopian colour, fabric velvet', ''),
(57, 7, 'utopian-fr-colour-18', 1, 0, 'utopian colour, fabric velvet', ''),
(58, 7, 'utopian-fr-colour-19', 1, 0, 'utopian colour, fabric velvet', ''),
(59, 7, 'utopian-fr-colour-20', 1, 0, 'utopian colour, fabric velvet', ''),
(60, 7, 'utopian-fr-colour-21', 1, 0, 'utopian colour, fabric velvet', ''),
(61, 7, 'utopian-fr-colour-22', 1, 0, 'utopian colour, fabric velvet', ''),
(62, 7, 'utopian-fr-colour-23', 1, 0, 'utopian colour, fabric velvet', ''),
(63, 7, 'utopian-fr-colour-24', 1, 0, 'utopian colour, fabric velvet', ''),
(64, 7, 'utopian-fr-colour-25', 1, 0, 'utopian colour, fabric velvet', ''),
(65, 7, 'utopian-fr-colour-26', 1, 0, 'utopian colour, fabric velvet', ''),
(66, 8, 'smoked-glass', 1, 0, 'smoked glass', ''),
(67, 8, 'black-glass', 1, 0, 'black glass', ''),
(68, 8, 'bronze-mirror', 1, 0, 'bronze mirror, glass', ''),
(69, 8, 'old-mirror', 1, 0, 'old mirror, glass', ''),
(70, 9, 'white-gloss', 1, 0, 'white gloss, lacquer', ''),
(71, 9, 'black-gloss', 1, 0, 'black gloss, lacquer', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sample_languages`
--

CREATE TABLE `sample_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sample_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_words` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sample_languages`
--

INSERT INTO `sample_languages` (`id`, `sample_id`, `language_id`, `name`, `description`, `key_words`, `meta_description`) VALUES
(1, 1, 1, 'Gold Plated', 'This finish has a real gold plated bath (14kt) with a fine layer of UV varnish that is applied over the surface to preserve its shine for years.', 'gold plated, metal', 'This finish has a real gold plated bath (14kt) with a fine layer of UV varnish that is applied over the surface to preserve its shine for years.'),
(2, 2, 1, 'Brushed Brass', 'A finely brushed brass finish with mellow highlights and a coat of UV varnish.', 'brushed brass, metal', 'A finely brushed brass finish with mellow highlights and a coat of UV varnish.'),
(3, 3, 1, 'Polished Brass', '', 'polished brass, metal', ''),
(4, 4, 1, 'Nickel Plated', 'It is a warmer tone than chrome and it’s softly tarnished and protected with a layer of UV varnish.', 'nickel plated, metal', 'It is a warmer tone than chrome and it’s softly tarnished and protected with a layer of UV varnish.'),
(5, 5, 1, 'Brushed Nickel', 'Created by gently rubbing nickel plated brass with an abrasive pad for a satin finish. It is not lacquered.', 'brushed nickel, metal', 'Created by gently rubbing nickel plated brass with an abrasive pad for a satin finish. It is not lacquered.'),
(6, 6, 1, 'Black Nickel Plated', 'A dark blackish finish, fairly flat and uniform, protected with a layer of UV varnish.', 'black nickel plated, metal', 'A dark blackish finish, fairly flat and uniform, protected with a layer of UV varnish.'),
(7, 7, 1, 'Brushed Black Nickel', 'A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.', 'brushed black nickel, metal', 'A satin surface created by gently rubbing black nickel plated brass with an abrasive pad for a satin finish and protected with UV varnish.'),
(8, 8, 1, 'Aged Brass', 'A subtle brown patina over a satin-brushed surface that has the elegant appearance of aged brass.', 'aged brass, metal', 'A subtle brown patina over a satin-brushed surface that has the elegant appearance of aged brass.'),
(9, 9, 1, 'Copper Plated', 'This finish has a bath of copper over antiqued and highlighted satin brass.', 'cooper plated, metal', 'This finish has a bath of copper over antiqued and highlighted satin brass.'),
(10, 10, 1, 'Brushed Cooper', 'This effect is finely brushed and protected with a coat of UV varnish.', 'brushed cooper, metal', 'This effect is finely brushed and protected with a coat of UV varnish.'),
(11, 11, 1, 'Ambar Colour', '', 'ambar colour, crystal glass', ''),
(12, 12, 1, 'Clear Colour', '', 'clear colour, crystal glass', ''),
(13, 13, 1, 'Ambar Colour', '', 'ambar colour, crystal glass', ''),
(14, 14, 1, 'Clear Colour', '', 'clear colour, crystal glass', ''),
(15, 15, 1, 'Crystal Tear', '', 'crystal tear, crystal glass', ''),
(16, 16, 1, 'Crystal Colour', '', 'crystal colour, swarovski crystal', ''),
(17, 17, 1, 'Gold Antique Colour', '', 'gold antique colour, swarovski crystal', ''),
(18, 18, 1, 'Ambar Colour', '', 'ambar colour, swarovski crystal', ''),
(19, 19, 1, 'Black Colour', '', 'black colour, swarovski crystal', ''),
(20, 20, 1, 'Gold Textile', '', 'gold textile, cords', ''),
(21, 21, 1, 'Black Textile', '', 'black textile, cords', ''),
(22, 22, 1, 'White Textile', '', 'white textile, cords', ''),
(23, 23, 1, 'Silver Textile', '', 'silver textile, cords', ''),
(24, 24, 1, 'Gold Rubber', '', 'gold rubber, cords', ''),
(25, 25, 1, 'Black Rubber', '', 'black rubber, cords', ''),
(26, 26, 1, 'Silver Rubber', '', 'silver rubber, cords', ''),
(27, 27, 1, 'Estremoz', 'White coloured marble with a prominent position in Portugal. The Estremoz marble presents a quite uniform background with a thin to medium grain, and a slight brownish vein.', 'estremoz, marble', 'White coloured marble with a prominent position in Portugal. The Estremoz marble presents a quite uniform background with a thin to medium grain, and a slight brownish vein.'),
(28, 28, 1, 'Carrara', 'Carrara marble is one of the iconic luxury Italian marbles featuring shades and veins of greyish-white.', 'carrara, marble', 'Carrara marble is one of the iconic luxury Italian marbles featuring shades and veins of greyish-white.'),
(29, 29, 1, 'Nero Marquina', 'A deep black coloured marble, with a distinctive fine white veining pattern colour.', 'nero marquina, marble', 'A deep black coloured marble, with a distinctive fine white veining pattern colour.'),
(30, 30, 1, 'Green', '', 'green, marble', ''),
(31, 31, 1, 'Emperador Dark', '', 'emperador dark, marble', ''),
(32, 32, 1, 'Palisander', '', 'palisander, wood', ''),
(33, 33, 1, 'Palisander Matte', '', 'palisander matte, wood', ''),
(34, 34, 1, 'Pau Santo', '', 'pau santo, wood', ''),
(35, 35, 1, 'Poplar Root', '', 'poplar root, wood', ''),
(36, 36, 1, 'Walnut Root', '', 'walnut root, wood', ''),
(37, 37, 1, 'Walnut Root Matte', '', 'walnut root matte, wood', ''),
(38, 38, 1, 'Ebony', '', 'ebony, wood', ''),
(39, 39, 1, 'Ebony Matte', '', 'ebony matte, wood', ''),
(40, 40, 1, 'Utopian FR Colour 1', '', 'utopian colour, fabric velvet', ''),
(41, 41, 1, 'Utopian FR Colour 2', '', 'utopian colour, fabric velvet', ''),
(42, 42, 1, 'Utopian FR Colour 3', '', 'utopian colour, fabric velvet', ''),
(43, 43, 1, 'Utopian FR Colour 4', '', 'utopian colour, fabric velvet', ''),
(44, 44, 1, 'Utopian FR Colour 5', '', 'utopian colour, fabric velvet', ''),
(45, 45, 1, 'Utopian FR Colour 6', '', 'utopian colour, fabric velvet', ''),
(46, 46, 1, 'Utopian FR Colour 7', '', 'utopian colour, fabric velvet', ''),
(47, 47, 1, 'Utopian FR Colour 8', '', 'utopian colour, fabric velvet', ''),
(48, 48, 1, 'Utopian FR Colour 9', '', 'utopian colour, fabric velvet', ''),
(49, 49, 1, 'Utopian FR Colour 10', '', 'utopian colour, fabric velvet', ''),
(50, 50, 1, 'Utopian FR Colour 11', '', 'utopian colour, fabric velvet', ''),
(51, 51, 1, 'Utopian FR Colour 12', '', 'utopian colour, fabric velvet', ''),
(52, 52, 1, 'Utopian FR Colour 13', '', 'utopian colour, fabric velvet', ''),
(53, 53, 1, 'Utopian FR Colour 14', '', 'utopian colour, fabric velvet', ''),
(54, 54, 1, 'Utopian FR Colour 15', '', 'utopian colour, fabric velvet', ''),
(55, 55, 1, 'Utopian FR Colour 16', '', 'utopian colour, fabric velvet', ''),
(56, 56, 1, 'Utopian FR Colour 17', '', 'utopian colour, fabric velvet', ''),
(57, 57, 1, 'Utopian FR Colour 18', '', 'utopian colour, fabric velvet', ''),
(58, 58, 1, 'Utopian FR Colour 19', '', 'utopian colour, fabric velvet', ''),
(59, 59, 1, 'Utopian FR Colour 20', '', 'utopian colour, fabric velvet', ''),
(60, 60, 1, 'Utopian FR Colour 21', '', 'utopian colour, fabric velvet', ''),
(61, 61, 1, 'Utopian FR Colour 22', '', 'utopian colour, fabric velvet', ''),
(62, 62, 1, 'Utopian FR Colour 23', '', 'utopian colour, fabric velvet', ''),
(63, 63, 1, 'Utopian FR Colour 24', '', 'utopian colour, fabric velvet', ''),
(64, 64, 1, 'Utopian FR Colour 25', '', 'utopian colour, fabric velvet', ''),
(65, 65, 1, 'Utopian FR Colour 26', '', 'utopian colour, fabric velvet', ''),
(66, 66, 1, 'Smoked Glass', '', 'smoked glass', ''),
(67, 67, 1, 'Black Glass', '', 'black glass', ''),
(68, 68, 1, 'Bronze Mirror', '', 'bronze mirror, glass', ''),
(69, 69, 1, 'Old Mirror', '', 'old mirror, glass', ''),
(70, 70, 1, 'White Gloss', '', 'white gloss, lacquer', ''),
(71, 71, 1, 'Black Gloss', '', 'black gloss, lacquer', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `similars`
--

CREATE TABLE `similars` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `similars`
--

INSERT INTO `similars` (`id`, `product_name`) VALUES
(1, 'Empire Square Chandelier'),
(2, 'Pharo Chandelier'),
(3, 'Gala Chandelier'),
(4, 'Majestic Chandelier'),
(5, 'Liberty Chandelier'),
(6, 'Babel Chandelier'),
(7, 'Empire Chandelier'),
(8, 'Empire XL Chandelier'),
(9, 'Scala Chandelier'),
(10, 'Burj Chandelier'),
(11, 'McQueen Chandelier'),
(12, 'Waterfall Chandelier'),
(13, 'Guggenheim Chandelier'),
(14, 'Trump Chandelier'),
(15, 'Empire II Suspension'),
(16, 'Pharo II Suspension'),
(17, 'Pharo Suspension'),
(18, 'Liberty II Suspension'),
(19, 'Waterfall Sputnik Suspension'),
(20, 'Gala Suspension'),
(21, 'Babel Suspension'),
(22, 'Liberty Suspension'),
(23, 'Empire Oval Suspension'),
(24, 'Tycho Rectangular Suspension'),
(25, 'Harpia Suspension'),
(26, 'Majestic II Suspension'),
(27, 'Babel Snooker Suspension'),
(28, 'Trump Suspension'),
(29, 'Majestic Suspension'),
(30, 'Pearl Suspension'),
(31, 'Explosion Suspension'),
(32, 'Tycho Round Suspension'),
(33, 'McQueen Round Suspension'),
(34, 'McQueen Globe Suspension'),
(35, 'Waterfall Round Suspension'),
(36, 'Empire Suspension'),
(37, 'Empire Snooker Suspension'),
(38, 'Waterfall Rectangular Suspension'),
(39, 'Pharo Pendant'),
(40, 'Gala Pendant'),
(41, 'Liberty Pendant'),
(42, 'Guggenheim Pendant'),
(43, 'Babel Pendant'),
(44, 'Trump Pendant'),
(45, 'Pearl Pendant'),
(46, 'Tycho Pendant'),
(47, 'McQueen Pendant'),
(48, 'Burj Pendant'),
(49, 'Draycott Pendant'),
(50, 'Empire Pendant'),
(51, 'Waterfall Pendant'),
(52, 'Trump II Wall'),
(53, 'Waterfall XL Wall'),
(54, 'Pharo II Wall'),
(55, 'Tycho Torch Small Wall'),
(56, 'Pharo Wall'),
(57, 'Waterfall II Wall'),
(58, 'Burj II Wall'),
(59, 'Wax Wall'),
(60, 'Empire II Wall'),
(61, 'Gala Torch Wall'),
(62, 'Guggenheim Wall'),
(63, 'Tycho Torch Wall'),
(64, 'Scala Wall'),
(65, 'Babel Wall'),
(66, 'Tycho Small Wall'),
(67, 'Tycho Wall'),
(68, 'Liberty I Wall'),
(69, 'Liberty II Wall'),
(70, 'Waterfall Torch Wall'),
(71, 'Draycott I Wall'),
(72, 'Draycott II Wall'),
(73, 'Burj Wall'),
(74, 'Empire Wall'),
(75, 'McQueen Wall'),
(76, 'Waterfall Wall'),
(77, 'Trump Wall'),
(78, 'Majestic Plafond'),
(79, 'Empire Square Plafond'),
(80, 'McQueen Plafond'),
(81, 'Scala Plafond'),
(82, 'Empire Plafond'),
(83, 'Pharo Floor'),
(84, 'Liberty Floor'),
(85, 'Gala Floor'),
(86, 'Waterfall Floor'),
(87, 'Empire Floor'),
(88, 'McQueen Floor'),
(89, 'Tycho Floor'),
(90, 'Babel Floor'),
(91, 'Draycott Floor'),
(92, 'Pharo I Table Lamp'),
(93, 'Pharo II Table Lamp'),
(94, 'Waterfall Table Lamp'),
(95, 'Liberty Table Lamp'),
(96, 'Tycho Table Lamp'),
(200, 'Darian Sideboard'),
(201, 'Tenor Sideboard'),
(202, 'Scarp Console'),
(203, 'Nubian Console'),
(204, 'Spear Console'),
(205, 'Beyond Console'),
(206, 'Vertigo Console'),
(207, 'Darian Dining Table'),
(208, 'Vertigo Center Table'),
(209, 'Beyond Center Table'),
(210, 'Prisma Side Table'),
(211, 'Beyond Side Table'),
(212, 'Beyond Dining Table'),
(213, 'Littus Dining Table'),
(214, 'Empire Center Table'),
(215, 'Empire Side Table Big'),
(216, 'Empire Side Table Small'),
(217, 'Charla Two Seat Chair'),
(218, 'Charla Dining Chair'),
(219, 'Otto Armchair'),
(220, 'Prisma Stool'),
(221, 'Noir Stool'),
(222, 'Armour Stool'),
(223, 'Empire Column Display'),
(224, 'Delta Screen'),
(225, 'Empire Screen'),
(226, 'Orbis Mirror'),
(227, 'Explosion Mirror'),
(228, 'Crown Mirror'),
(229, 'Majestic XL Wall Light Mirror'),
(230, 'Darian Gold Mirror'),
(231, 'Darian Black Mirror'),
(232, 'Empire Mirror'),
(233, 'McQueen Wall Light Mirror'),
(234, 'Majestic Wall Light Mirror'),
(235, 'Apotheosis Console'),
(236, 'Suspicion Console'),
(237, 'Spear Side Table'),
(238, 'Darian Side Table'),
(239, 'Algerone Dining Table'),
(240, 'Navis Armchair'),
(241, 'Saboteur Armchair'),
(242, 'McQueen Retangular Wall Light Mirror'),
(243, 'Scala Mirror'),
(244, 'Crackle Mirror'),
(245, 'Apotheosis TV Cabinet'),
(246, 'Imperium Side Table'),
(247, 'Darian Center Table'),
(248, 'Nubian Side Table'),
(249, 'Darian II Side Table'),
(250, 'Apotheosis Side Table'),
(251, 'Apotheosis Center Table'),
(252, 'Anguis Sofa'),
(253, 'Explosion XL Mirror'),
(254, 'Anguis Sofa Center'),
(255, 'Crackle Center Table'),
(256, 'Crackle Side Table'),
(257, 'Saboteur Sofa'),
(258, 'Charla Bar Chair'),
(259, 'Navis Sofa'),
(260, 'Littus Oval Dining Table'),
(261, 'Vertigo Side Table'),
(262, 'Tenor Ottoman'),
(263, 'Waltz Nightstand'),
(264, 'Waltz Desk'),
(265, 'Charla Sofa'),
(266, 'Charla Armchair'),
(267, 'Anguis Armchair'),
(268, 'Ocadia Armchair'),
(269, 'Galea Dining Chair'),
(270, 'Charla Chaise Longue'),
(271, 'Charla Stool'),
(272, 'Nura Dining Chair'),
(273, 'Anguis Single Sofa'),
(274, 'Charla Office Chair'),
(275, 'Charla Small Office Chair'),
(276, 'Myllo Console'),
(277, 'Apotheosis Dining Table'),
(278, 'Vertigo Outdoor Center Table'),
(279, 'Vertigo Column Display'),
(280, 'Waltz Bookcase'),
(281, 'Waltz Closet'),
(282, 'Waltz Dresser');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `slug`) VALUES
(1, 1, 'chandelier'),
(2, 2, 'suspension'),
(3, 3, 'pendant'),
(4, 4, 'wall'),
(5, 5, 'plafond'),
(6, 6, 'floor'),
(7, 7, 'table-lamp'),
(8, 8, 'sideboard'),
(9, 9, 'console'),
(10, 10, 'dining-table'),
(11, 11, 'center-table'),
(12, 12, 'side-table'),
(13, 13, 'tv-cabinet'),
(14, 14, 'upholstery'),
(15, 15, 'display'),
(16, 16, 'screen'),
(17, 17, 'mirror'),
(18, 18, 'office'),
(19, 19, 'bedroom'),
(20, 12, 'side-table-big'),
(21, 12, 'side-table-small'),
(22, 14, 'office-chair'),
(23, 14, 'stool'),
(24, 14, 'sofa'),
(25, 14, 'single-sofa'),
(26, 14, 'chaise-longue'),
(27, 14, 'dining-chair'),
(28, 14, 'armchair'),
(29, 14, 'ottoman'),
(30, 14, 'bar-chair'),
(31, 14, 'sofa-center'),
(32, 14, 'two-seat-chair'),
(33, 15, 'column-display'),
(34, 17, 'wall-light-mirror'),
(35, 18, 'desk'),
(36, 18, 'bookcase'),
(37, 19, 'closet'),
(38, 19, 'dresser'),
(39, 19, 'nightstand');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_category_languages`
--

CREATE TABLE `sub_category_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_category_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sub_category_languages`
--

INSERT INTO `sub_category_languages` (`id`, `sub_category_id`, `language_id`, `name`) VALUES
(1, 1, 1, 'Chandelier'),
(2, 2, 1, 'Suspension'),
(3, 3, 1, 'Pendant'),
(4, 4, 1, 'Wall'),
(5, 5, 1, 'Plafond'),
(6, 6, 1, 'Floor'),
(7, 7, 1, 'Table Lamp'),
(8, 8, 1, 'Sideboard'),
(9, 9, 1, 'Console'),
(10, 10, 1, 'Dining Table'),
(11, 11, 1, 'Center Table'),
(12, 12, 1, 'Side Table'),
(13, 13, 1, 'TV Cabinet'),
(14, 14, 1, 'Upholstery'),
(15, 15, 1, 'Display'),
(16, 16, 1, 'Screen'),
(17, 17, 1, 'Mirror'),
(18, 18, 1, 'Office'),
(19, 19, 1, 'Bedroom'),
(20, 20, 1, 'Side Table Big'),
(21, 21, 1, 'Side Table Small'),
(22, 22, 1, 'Office Chair'),
(23, 23, 1, 'Stool'),
(24, 24, 1, 'Sofa'),
(25, 25, 1, 'Single Sofa'),
(26, 26, 1, 'Chaise Longue'),
(27, 27, 1, 'Dining Chair'),
(28, 28, 1, 'Armchair'),
(29, 29, 1, 'Ottoman'),
(30, 30, 1, 'Bar Chair'),
(31, 31, 1, 'Sofa Center'),
(32, 32, 1, 'Two Seat Chair'),
(33, 33, 1, 'Column Display'),
(34, 34, 1, 'Wall Light Mirror'),
(35, 35, 1, 'Desk'),
(36, 36, 1, 'Bookcase'),
(37, 37, 1, 'Closet'),
(38, 38, 1, 'Dresser'),
(39, 39, 1, 'Nightstand');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_level_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_levels`
--

CREATE TABLE `user_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user_levels`
--

INSERT INTO `user_levels` (`id`, `name`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Editor'),
(4, 'Press'),
(5, 'Client');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_article_type_id_index` (`article_type_id`),
  ADD KEY `articles_slug_index` (`slug`);

--
-- Indexes for table `article_divisions`
--
ALTER TABLE `article_divisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_divisions_article_id_index` (`article_id`),
  ADD KEY `article_divisions_division_id_index` (`division_id`);

--
-- Indexes for table `article_languages`
--
ALTER TABLE `article_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_languages_article_id_index` (`article_id`),
  ADD KEY `article_languages_language_id_index` (`language_id`);

--
-- Indexes for table `article_products`
--
ALTER TABLE `article_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_products_article_id_index` (`article_id`),
  ADD KEY `article_products_product_id_index` (`product_id`);

--
-- Indexes for table `article_types`
--
ALTER TABLE `article_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_family_id_index` (`family_id`),
  ADD KEY `categories_slug_index` (`slug`);

--
-- Indexes for table `category_languages`
--
ALTER TABLE `category_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_languages_category_id_index` (`category_id`),
  ADD KEY `category_languages_language_id_index` (`language_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_country_id_index` (`country_id`),
  ADD KEY `clients_occupation_id_index` (`occupation_id`),
  ADD KEY `clients_hear_about_id_index` (`hear_about_id`),
  ADD KEY `clients_client_key_index` (`client_key`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collections_slug_index` (`slug`);

--
-- Indexes for table `collection_languages`
--
ALTER TABLE `collection_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_languages_collection_id_index` (`collection_id`),
  ADD KEY `collection_languages_language_id_index` (`language_id`);

--
-- Indexes for table `collection_products`
--
ALTER TABLE `collection_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_products_collection_id_index` (`collection_id`),
  ADD KEY `collection_products_product_id_index` (`product_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisions_slug_index` (`slug`);

--
-- Indexes for table `division_languages`
--
ALTER TABLE `division_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_languages_division_id_index` (`division_id`),
  ADD KEY `division_languages_language_id_index` (`language_id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`),
  ADD KEY `families_slug_index` (`slug`);

--
-- Indexes for table `finishes`
--
ALTER TABLE `finishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `finishes_slug_index` (`slug`);

--
-- Indexes for table `finish_languages`
--
ALTER TABLE `finish_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `finish_languages_finish_id_index` (`finish_id`),
  ADD KEY `finish_languages_language_id_index` (`language_id`);

--
-- Indexes for table `hear_abouts`
--
ALTER TABLE `hear_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_index` (`user_id`),
  ADD KEY `logs_article_id_index` (`article_id`),
  ADD KEY `logs_product_id_index` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupations`
--
ALTER TABLE `occupations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_client_id_index` (`client_id`);

--
-- Indexes for table `order_lines`
--
ALTER TABLE `order_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_lines_order_id_index` (`order_id`),
  ADD KEY `order_lines_product_id_index` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_sub_category_id_index` (`sub_category_id`),
  ADD KEY `products_slug_index` (`slug`);

--
-- Indexes for table `product_currencies`
--
ALTER TABLE `product_currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_currencies_product_id_index` (`product_id`),
  ADD KEY `product_currencies_currency_id_index` (`currency_id`);

--
-- Indexes for table `product_languages`
--
ALTER TABLE `product_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_languages_product_id_index` (`product_id`),
  ADD KEY `product_languages_language_id_index` (`language_id`);

--
-- Indexes for table `product_samples`
--
ALTER TABLE `product_samples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_samples_product_id_index` (`product_id`),
  ADD KEY `product_samples_sample_id_index` (`sample_id`);

--
-- Indexes for table `product_similars`
--
ALTER TABLE `product_similars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_similars_similar_id_index` (`similar_id`),
  ADD KEY `product_similars_product_id_index` (`product_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_request_type_id_index` (`request_type_id`),
  ADD KEY `requests_client_id_index` (`client_id`),
  ADD KEY `requests_product_id_index` (`product_id`);

--
-- Indexes for table `request_types`
--
ALTER TABLE `request_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samples`
--
ALTER TABLE `samples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `samples_finish_id_index` (`finish_id`);

--
-- Indexes for table `sample_languages`
--
ALTER TABLE `sample_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sample_languages_sample_id_index` (`sample_id`),
  ADD KEY `sample_languages_language_id_index` (`language_id`);

--
-- Indexes for table `similars`
--
ALTER TABLE `similars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `similars_id_index` (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_index` (`category_id`),
  ADD KEY `sub_categories_slug_index` (`slug`);

--
-- Indexes for table `sub_category_languages`
--
ALTER TABLE `sub_category_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category_languages_sub_category_id_index` (`sub_category_id`),
  ADD KEY `sub_category_languages_language_id_index` (`language_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_level_id_index` (`user_level_id`);

--
-- Indexes for table `user_levels`
--
ALTER TABLE `user_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wish_lists_client_id_index` (`client_id`),
  ADD KEY `wish_lists_product_id_index` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_divisions`
--
ALTER TABLE `article_divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_languages`
--
ALTER TABLE `article_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_products`
--
ALTER TABLE `article_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_types`
--
ALTER TABLE `article_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category_languages`
--
ALTER TABLE `category_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_languages`
--
ALTER TABLE `collection_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collection_products`
--
ALTER TABLE `collection_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `division_languages`
--
ALTER TABLE `division_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `finishes`
--
ALTER TABLE `finishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `finish_languages`
--
ALTER TABLE `finish_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hear_abouts`
--
ALTER TABLE `hear_abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `occupations`
--
ALTER TABLE `occupations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_lines`
--
ALTER TABLE `order_lines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `product_currencies`
--
ALTER TABLE `product_currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_languages`
--
ALTER TABLE `product_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `product_samples`
--
ALTER TABLE `product_samples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_similars`
--
ALTER TABLE `product_similars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=713;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_types`
--
ALTER TABLE `request_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `samples`
--
ALTER TABLE `samples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `sample_languages`
--
ALTER TABLE `sample_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sub_category_languages`
--
ALTER TABLE `sub_category_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_levels`
--
ALTER TABLE `user_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_article_type_id_foreign` FOREIGN KEY (`article_type_id`) REFERENCES `article_types` (`id`);

--
-- Limitadores para a tabela `article_divisions`
--
ALTER TABLE `article_divisions`
  ADD CONSTRAINT `article_divisions_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_divisions_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

--
-- Limitadores para a tabela `article_languages`
--
ALTER TABLE `article_languages`
  ADD CONSTRAINT `article_languages_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Limitadores para a tabela `article_products`
--
ALTER TABLE `article_products`
  ADD CONSTRAINT `article_products_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Limitadores para a tabela `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_family_id_foreign` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`);

--
-- Limitadores para a tabela `category_languages`
--
ALTER TABLE `category_languages`
  ADD CONSTRAINT `category_languages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Limitadores para a tabela `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `clients_hear_about_id_foreign` FOREIGN KEY (`hear_about_id`) REFERENCES `hear_abouts` (`id`),
  ADD CONSTRAINT `clients_occupation_id_foreign` FOREIGN KEY (`occupation_id`) REFERENCES `occupations` (`id`);

--
-- Limitadores para a tabela `collection_languages`
--
ALTER TABLE `collection_languages`
  ADD CONSTRAINT `collection_languages_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`),
  ADD CONSTRAINT `collection_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Limitadores para a tabela `collection_products`
--
ALTER TABLE `collection_products`
  ADD CONSTRAINT `collection_products_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`),
  ADD CONSTRAINT `collection_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Limitadores para a tabela `division_languages`
--
ALTER TABLE `division_languages`
  ADD CONSTRAINT `division_languages_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`),
  ADD CONSTRAINT `division_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Limitadores para a tabela `finish_languages`
--
ALTER TABLE `finish_languages`
  ADD CONSTRAINT `finish_languages_finish_id_foreign` FOREIGN KEY (`finish_id`) REFERENCES `finishes` (`id`),
  ADD CONSTRAINT `finish_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Limitadores para a tabela `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `logs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Limitadores para a tabela `order_lines`
--
ALTER TABLE `order_lines`
  ADD CONSTRAINT `order_lines_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_lines_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Limitadores para a tabela `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);

--
-- Limitadores para a tabela `product_currencies`
--
ALTER TABLE `product_currencies`
  ADD CONSTRAINT `product_currencies_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`),
  ADD CONSTRAINT `product_currencies_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Limitadores para a tabela `product_languages`
--
ALTER TABLE `product_languages`
  ADD CONSTRAINT `product_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `product_languages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Limitadores para a tabela `product_samples`
--
ALTER TABLE `product_samples`
  ADD CONSTRAINT `product_samples_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_samples_sample_id_foreign` FOREIGN KEY (`sample_id`) REFERENCES `samples` (`id`);

--
-- Limitadores para a tabela `product_similars`
--
ALTER TABLE `product_similars`
  ADD CONSTRAINT `product_similars_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_similars_similar_id_foreign` FOREIGN KEY (`similar_id`) REFERENCES `similars` (`id`);

--
-- Limitadores para a tabela `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `requests_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `requests_request_type_id_foreign` FOREIGN KEY (`request_type_id`) REFERENCES `request_types` (`id`);

--
-- Limitadores para a tabela `samples`
--
ALTER TABLE `samples`
  ADD CONSTRAINT `samples_finish_id_foreign` FOREIGN KEY (`finish_id`) REFERENCES `finishes` (`id`);

--
-- Limitadores para a tabela `sample_languages`
--
ALTER TABLE `sample_languages`
  ADD CONSTRAINT `sample_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `sample_languages_sample_id_foreign` FOREIGN KEY (`sample_id`) REFERENCES `samples` (`id`);

--
-- Limitadores para a tabela `similars`
--
ALTER TABLE `similars`
  ADD CONSTRAINT `similars_id_foreign` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

--
-- Limitadores para a tabela `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Limitadores para a tabela `sub_category_languages`
--
ALTER TABLE `sub_category_languages`
  ADD CONSTRAINT `sub_category_languages_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `sub_category_languages_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_level_id_foreign` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`);

--
-- Limitadores para a tabela `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD CONSTRAINT `wish_lists_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `wish_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
