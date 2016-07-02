-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2016 a las 16:56:18
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cubaoutings`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accommodations`
--

CREATE TABLE IF NOT EXISTS `accommodations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tours_id_idx` (`tours_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `accommodations`
--

INSERT INTO `accommodations` (`id`, `photo`, `tours_id`) VALUES
(2, '11-casaAzul.jpg', 11),
(3, '11-cienfuegos.jpg', 11),
(4, '11-cienfuegos1.jpg', 11),
(5, '11-1937892_897558570259352_1340826560_n.jpg', 11),
(6, '11-10514877_896410030374206_194290343_n.jpg', 11),
(7, '11-10515052_896411043707438_1841800732_n.jpg', 11),
(8, '11-10524383_897560086925867_1814912560_n.jpg', 11),
(9, '11-10524437_897560593592483_1898348353_n.jpg', 11),
(10, '11-10529589_897558230259386_1173533163_n.jpg', 11),
(11, '7-matanzas1.jpg', 7),
(12, '7-matanzas.jpg', 7),
(13, '7-varaderocasa.jpg', 7),
(14, '7-varadero2.jpg', 7),
(15, '7-varadero3.jpg', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_owner` varchar(100) NOT NULL,
  `pax` int(11) NOT NULL,
  `date_book` datetime NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_book_tours1_idx` (`tours_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`id`, `email_owner`, `pax`, `date_book`, `question`, `time_create`, `time_update`, `tours_id`) VALUES
(1, 'asdf', 0, '0000-00-00 00:00:00', 'sdfsdf', NULL, NULL, 8),
(6, 'julio', 0, '0000-00-00 00:00:00', 'sfddsfasdf', NULL, NULL, 8),
(7, 'julio', 0, '0000-00-00 00:00:00', 'Y como funciona esto', NULL, NULL, 8),
(8, 'julio@cubava.cu', 0, '0000-00-00 00:00:00', ' fgh fghf g hfghf fhfgh fh fhgfh f', NULL, NULL, 8),
(9, 'julio@cubava.cu', 0, '0000-00-00 00:00:00', 'assssds', NULL, NULL, 8),
(10, 'julio@cubava.cu', 3, '0000-00-00 00:00:00', 'cuanto cuesta?', NULL, NULL, 11),
(11, 'julio@cubava.cu', 2, '0000-00-00 00:00:00', 'asdasd', NULL, NULL, 8),
(12, 'julio@cubava.cu', 3, '0000-00-00 00:00:00', 'ere', NULL, '2014-06-26 21:34:42', 8),
(13, 'dfd', 1, '0000-00-00 00:00:00', 'asdasda', NULL, '2014-06-26 21:40:16', 8),
(14, 'julio@cubava.cu', 3, '2014-07-23 00:00:00', 'aasfa  sadfsf asdf', NULL, '2014-07-23 02:23:50', 8),
(15, 'jcesar@jovenclub.cu', 2, '2016-01-27 00:00:00', 'asd', NULL, '2016-01-25 19:06:09', 8),
(16, 'jcesar@jovenclub.cu', 2, '2016-01-27 00:00:00', 'test', NULL, '2016-01-25 19:13:20', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book_accommodations`
--

CREATE TABLE IF NOT EXISTS `book_accommodations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_owner` varchar(100) NOT NULL,
  `pax` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `time_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `question` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `book_accommodations`
--

INSERT INTO `book_accommodations` (`id`, `email_owner`, `pax`, `date`, `time_create`, `question`) VALUES
(7, 'julio@jovenclub.cu', 2, '2014-07-24 04:00:00', '2014-07-22 02:30:11', 'uiero quedarme en varadero una semana.'),
(8, 'julio@jovenclub.cu', 2, '2014-07-24 04:00:00', '2014-07-22 02:45:25', 'dfgdfgdv  dgfdg'),
(9, 'julio@jovenclub.cu', 5, '2014-07-30 04:00:00', '2014-07-22 02:46:20', 'hhhhhhhhhhh'),
(10, 'julio@jovenclub.cu', 5, '2014-07-30 04:00:00', '2014-07-22 02:53:06', 'hhhhhhhhhhh'),
(11, 'julio@jovenclub.cu', 5, '2014-07-30 04:00:00', '2014-07-22 02:54:06', 'hhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_owner` varchar(100) NOT NULL,
  `email_owner` varchar(100) NOT NULL,
  `photo_owner` varchar(100) DEFAULT NULL,
  `text` varchar(200) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comment_tours_idx` (`tours_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`id`, `name_owner`, `email_owner`, `photo_owner`, `text`, `likes`, `dislike`, `time_create`, `time_update`, `tours_id`) VALUES
(1, 'sdfsfs', 'sdfsdfs', 'sfds', 'ssfdds', NULL, NULL, NULL, NULL, 7),
(2, 'addafs', 'sdfsdff', 'sdfdsfdsf', 'sdfsdfsdfdsfsfds', NULL, NULL, NULL, NULL, 8),
(3, 'admin', 'julio@asdj.cu', 'dasd', 'adasdsaasd', NULL, NULL, NULL, NULL, 8),
(4, 'admin', 'julio@asdj.cu', 'dasd', 'adasdsaasd', NULL, NULL, NULL, NULL, 8),
(5, 'kirenia', 'kirenia@joevnclub.cu', 'fdfg', 'Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.', NULL, NULL, NULL, NULL, 8),
(6, 'julio', 'julio@nauta.cu', 'sdf', 'sdssfwew', NULL, NULL, NULL, NULL, 8),
(7, 'julio', 'julio@nauta.cu', 'julio-1.png', 'que si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que sique si que si', NULL, NULL, NULL, NULL, 8),
(8, 'sdfs', 'sfd', 'sdfs-1.png', 'sfsfsdfsf sfs sdfsd sdfsdfsdf sdfsd', NULL, NULL, NULL, NULL, 8),
(9, 'x', 'xx', 'x-', 'xcxc', NULL, NULL, NULL, '2014-06-12 00:33:41', 8),
(10, 'ffff', 'ffffff', 'ffff-', 'sfsf sfs sdf', NULL, NULL, NULL, '2014-06-12 00:39:54', 8),
(11, 'julio', 'julio@nauta.cu', 'julio-1.png', 'genial', NULL, NULL, NULL, '2014-06-21 14:31:20', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(100) NOT NULL,
  `message_fr` varchar(100) DEFAULT NULL,
  `message_es` varchar(100) DEFAULT NULL,
  `message_it` varchar(100) DEFAULT NULL,
  `message_ru` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `offer`
--

INSERT INTO `offer` (`id`, `message`, `message_fr`, `message_es`, `message_it`, `message_ru`, `imagen`, `create_time`) VALUES
(3, 'Summer discount -10%', NULL, NULL, NULL, NULL, '731-sentadillas30dias.jpg', '2014-07-26 14:02:51'),
(4, 'Summer discount -20%', NULL, NULL, NULL, NULL, '900-logo1.png', '2014-07-26 14:08:49'),
(5, 'Summer discount -20%', NULL, NULL, NULL, NULL, '526-', '2014-07-26 14:09:55'),
(6, 'Summer discount -20%', NULL, NULL, NULL, NULL, '321-', '2014-07-26 14:11:16'),
(7, 'Summer discount -10%', NULL, NULL, NULL, NULL, 'offer.png', '2014-07-26 14:44:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `principal` varchar(11) DEFAULT NULL,
  `description` longtext NOT NULL,
  `description_fr` longtext,
  `description_es` longtext,
  `description_it` varchar(100) DEFAULT NULL,
  `description_ru` varchar(100) DEFAULT NULL,
  `time_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `time_update` timestamp NULL DEFAULT NULL,
  `tours_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_photo_tours1_idx` (`tours_id`),
  KEY `fk_photo_place1_idx` (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Volcado de datos para la tabla `photo`
--

INSERT INTO `photo` (`id`, `name`, `direction`, `principal`, `description`, `description_fr`, `description_es`, `description_it`, `description_ru`, `time_create`, `time_update`, `tours_id`, `place_id`) VALUES
(12, 'Monument to the land crab', '7-cangrejocardenas.jpg', 'yes', '<p>\r\n	<strong>Monument to the land crab</strong> (a statue to the land crab).</p>\r\n', '', '', NULL, NULL, '2014-06-11 02:59:28', NULL, 7, 3),
(24, 'Plaza de la Revolución', '8-che.jpg', 'yes', '<p>\r\n	<strong>Plaza de la Revolucion </strong>(it is a gigantic square that symbolizes the Cuban Revolution due to the huge rallies that were always held right after 1959).</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 8, 5),
(27, 'Trinidad', '11-Centro_historico_de_Trinidad.jpg', 'yes', '<p>\r\n	<strong>Plaza Mayor, Trinidad.</strong></p>\r\n', NULL, NULL, NULL, NULL, '2014-06-21 13:41:15', NULL, 11, 8),
(28, 'cienfuegos', '11-DirkvdM_cienfuegos_parque_jose_marti.jpg', 'yes', '<p>\r\n	<strong>Jos&eacute; Mart&iacute; Park.</strong></p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 11, 9),
(30, 'Che Guevara Square', '13-che2.jpg', 'yes', '<p>\r\n	The main square is home to the Che Guevara Mausoleum, contains the remains of one of Cuba&#39;s most beloved figures and of his fellow revolutionaries who were killed in the in 1967 during the insurgency in Bolivia.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 13, 11),
(31, 'Guama', '12-guama.jpg', 'yes', '<p>\r\n	Get the chance to enjoy the Cuba&rsquo;s most important crocodile farm.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 12, 10),
(32, 'Plaza de la Catedral', '14-plaza-de-armas.jpg', 'no', '<p>\r\n	<strong>Plaza de la Catedra.</strong></p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 14, 23),
(35, 'Plaza de la Catedral', '8-plaza-de-catedral.jpg', 'yes', '<p>\r\n	<strong>Plaza de la Catedral </strong>(&nbsp; the cathedral&nbsp; square is considered as the most perfectly built colonial square in the whole country with a beautiful baroque style).</p>\r\n<ul>\r\n</ul>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 8, 6),
(38, 'Plaza de Armas', '8-plaza-de-armas.jpg', 'yes', '<p>\r\n	<strong>Plaza de Armas</strong> (the oldest square in Havana that originally dates from 1582, where we find the place of the foundation, the government&nbsp; buildings,&nbsp; the first fortress built in&nbsp; Cuba, and even a large second-hand book market)</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, 8, 4),
(39, 'Plaza de San Francisco de Asis', '8-san-francisco.jpg', 'no', '<p>\r\n	<strong>Plaza de San Francisco de Asis</strong> (another beautiful&nbsp; square named after the church with the highest bell tower in&nbsp; the city, white marble fountain in the center and the amazing eclectically built trade center in Havana)</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-01 23:42:29', NULL, 8, 14),
(40, 'Old Square', '8-plaza-vieja1.jpg', 'yes', '<p>\r\n	Old Square ( resembles the rich neighbourhood of the 18th century in Havana, where we can see big luxurious&nbsp; houses with columns, arches and stain glass windows).</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-01 23:46:23', NULL, 8, 15),
(41, 'Ambos Mundos Hotel', '8-hotel-ambos-mundos.jpg', 'no', '<p>\r\n	<strong>Ambos Mundos Hotel</strong> (The hotel where Ernest Hemingway lived for seven years, his room nowadays is a small museum).</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-01 23:50:53', NULL, 8, 16),
(42, 'Avenida Puerto', '8-avenida-puerto.jpg', 'no', '<p>\r\n	Avenida Puerto (the avenue that goes along the entrance of the bay, there is a nice view to the very harbour and a fortress across the &ldquo;canal. Nice place for a walk and a couple of pictures&rdquo;)</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-01 23:56:01', NULL, 8, 17),
(43, 'Floridita Bar ', '8-Floridita-Bar.JPG', 'no', '<p>\r\n	<strong>Floridita Bar</strong></p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:03:58', NULL, 8, 18),
(44, 'The Capitol', '8-capitolio-habana-5.jpg', 'no', '<p>\r\n	<strong>The Capitol</strong> (an amazing marble-covered building similar to the US White House, but richer in details. It was the seat of the Cuban congress till 1959).</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:09:00', NULL, 8, 19),
(45, 'Malecon', '8-malecon.jpg', 'no', '<p>\r\n	<strong>Malecon</strong> (the avenue that goes for 7 km along the northern part of the city, where people love to go for a walk to feel the breeze from the ocean, and at night is one the most romantic places in the city).</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:25:24', NULL, 8, 20),
(46, 'Plaza de la Revolucion', '8-plaza-de-la-revolucion.jpg', 'no', '<p>\r\n	<strong>Plaza de la Revolucion</strong> (it is a gigantic square that symbolizes the Cuban Revolution due to the huge rallies that were always held right after 1959).</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:31:28', NULL, 8, 5),
(47, 'La Corona', '8-habanos.jpg', 'no', '<p>\r\n	<strong>La Corona</strong> (the biggest cigar factory that manufacture all Cuban brands).</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:36:26', NULL, 8, 22),
(48, 'Tropicana', '14-tropicana2.jpg', 'yes', '<p>\r\n	Tropicana.</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:39:45', NULL, 14, 23),
(49, 'The Capitol', '14-Capitolio_de_Noche.jpg', 'no', '<p>\r\n	<strong>The Capitol </strong>(an amazing marble-covered building similar to the US White House, but richer in details. It was the seat of the Cuban congress till 1959).</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:44:09', NULL, 14, 24),
(50, 'El Cañonazo de las nueves', '15-canonazo.jpg', 'yes', '<p>\r\n	<strong>&ldquo; El Ca&ntilde;onazo de las nueves&rdquo;</strong> (the nine o&rsquo;clock cannon shot) ceremony.</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:49:17', NULL, 15, 25),
(51, ' El Cañonazo de las nueves', '15-canonazo1.jpg', 'yes', '<p>\r\n	&ldquo;<strong> El Ca&ntilde;onazo de las nueves</strong>&rdquo; (the nine o&rsquo;clock cannon shot) ceremony.</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:54:54', NULL, 15, 25),
(52, 'El Cañonazo de las nueves', '15-canonazo2.jpg', 'no', '<p>\r\n	&ldquo; <strong>El Ca&ntilde;onazo de las nueves</strong>&rdquo; (the nine o&rsquo;clock cannon shot) ceremony</p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 00:56:40', NULL, 15, 25),
(53, 'Plaza Mayor Cienfuegos', '11-cienfuegosplaza.jpg', 'no', '<p>\r\n	<strong><span class="irc_su" dir="ltr" style="text-align: left;">Jos&eacute; Mart&iacute; Park</span></strong></p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 13:13:32', NULL, 11, 9),
(54, ' Prado cienfueguero', '11-cienfuegosbenny.jpg', 'yes', '<p>\r\n	<strong><span class="irc_su" dir="ltr" style="text-align: left;">Prado Street</span>.</strong></p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 13:19:09', NULL, 11, 9),
(55, 'Club Cienfuegos', '11-cienfuegoschalet.jpg', 'no', '<p>\r\n	<strong><span class="irc_su" dir="ltr" style="text-align: left;">Club Cienfuegos.</span></strong></p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 13:22:09', NULL, 11, 9),
(56, 'Castillo de Jagua ', '11-cienfuegosalgo.jpg', 'no', '<p>\r\n	<strong><span class="irc_su" dir="ltr" style="text-align: left;">Castillo de Jagua </span></strong></p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 13:27:31', NULL, 11, 9),
(57, 'Palacio de Gobierno de Cienfuegos', '11-cienfuegos12.jpg', 'no', '<p>\r\n	<strong><span class="irc_su" dir="ltr" style="text-align: left;">Cienfuegos City Hall</span></strong></p>\r\n', NULL, NULL, NULL, NULL, '2014-08-02 13:30:50', NULL, 11, 9),
(58, 'Cardenas City ', '7-cardenas.jpg', 'yes', '<p>\r\n	The city is located just 15 minutes south from Varadero. It was founded in 1928 and was the heart of Cuba&rsquo;s richest sugar growing area in the 19th century. This city is best remembered for the first hoisting of the Cuban flag by General Narciso Lopez in 1850. Nineteenth-century neoclassical houses with stain glass windows grace the streets.</p>\r\n', '', '', NULL, NULL, '2014-08-02 16:21:37', NULL, 7, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `tours_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_place_tours1_idx` (`tours_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `place`
--

INSERT INTO `place` (`id`, `name`, `description`, `tours_id`) VALUES
(3, 'Cardenas City ', '<p>\r\n	The city is located just 15 minutes south from Varadero. It was founded in 1928 and it was the heart of Cuba&rsquo;s richest sugar growing area in the 19th century. This city is best remembered for the first raising of the Cuban flag by General Narciso Lopez in 1850. Nineteenth-century neoclassical houses with stain glass windows grace the streets, and if you want to see real Cuban life Cardenas makes a good outing from Varadero.</p>\r\n', 7),
(4, 'Plaza de Armas', '<ul>\r\n	<li>\r\n		<strong>Plaza de Armas </strong>(the oldest square in Havana that originally dates from 1582, where we find the place of the foundation, the government&nbsp; buildings,&nbsp; the first fortress built in&nbsp; Cuba, and even a large second-hand book market).</li>\r\n</ul>\r\n', 8),
(5, 'Plaza de la revolución', '<p>\r\n	<strong>Plaza de la Revolucion</strong> (it is a gigantic square that symbolizes the Cuban Revolution due to the huge rallies that were always held right after 1959).</p>\r\n', 8),
(6, 'Plaza de la Catedral', '<p>\r\n	Plaza de la Catedral(&nbsp; the cathedral&nbsp; square is considered as the most perfectly built colonial square in the whole country with a beautiful baroque style)</p>\r\n', 8),
(8, 'Trinidad', '<p>\r\n	Trinidad is a city that should be on every traveler&rsquo;s list. It was the third village founded by our first governor in 1514. It is considered as the jewel of Cuba&rsquo;s colonial cities, and therefore looks like a living museum and no other city in the country is so well preserved and charming. Its architecture is mainly neoclassical and baroque with narrow cobbled streets. What&rsquo;s more, it reflects the heritage of the 16<sup>th</sup>-century conquerors, 17<sup>th</sup>-century corsairs, 18<sup>th</sup>-century smuggler-traders and 19<sup>th</sup>-century sugar lords. That&rsquo;s why it was declared World Heritage Site by UNESCO in 1988.</p>\r\n', 11),
(9, 'Cienfuegos  ', '<p>\r\n	Cienfuegos, which is also known as the pearl of the South, is a newer city. Although this city does not have the grace of Trinidad or the flair of Havana, there is still an ambiance that makes it perfect for a pleasant visit. It was built by the French next to a big bay with wide streets, a Parisian-style boulevard and elegant colonnades. Its historical center was declared World Heritage Site by UNESCO in 2005.</p>\r\n', 11),
(10, 'Guama ', '<p>\r\n	Hotel Villa Guam&aacute; is located in the Peninsula de Zapata National Park, in southern Matanzas province. The unusual design of this 2-star hotel resembles a reproduction of houses built by Cuba&rsquo;s indigenous people.</p>\r\n', 12),
(11, 'Che Guevara Square', '<p>\r\n	The main square is home to the Che Guevara Mausoleum, contains the remains of one of Cuba&#39;s most beloved figures and sixteen of his fellow revolutionaries who were killed in the in 1967 during the insurgency in Bolivia</p>\r\n', 13),
(12, 'Plaza de Armas', '<p>\r\n	Falta texto bla bla bla bla bla bla asfas asfsaf asdfasdfas asdfsdf dfaqwefvasv eqte urtgthetewr qwertfsdf wfwgqg qwfsagfhqewwrt erefg saf gqwe rteqwtegt f</p>\r\n', 14),
(13, 'Hemingway Hotel ', '<p>\r\n	Falta texto afasf sadfksada safsadf msadf saf sakasdf sadf kasdf sadf kasdf sadf sadk sdfsda fakas dfsa fdkasdf asdf ksadf sadf sadksad fsad fksadf sa.</p>\r\n', 15),
(14, 'Plaza de San Francisco de Asis', '<p>\r\n	<strong>Plaza de San Francisco de Asis</strong> (another beautiful&nbsp; square named after the church with the highest bell tower in&nbsp; the city, white marble fountain in the center and the amazing eclectically built trade center in Havana).</p>\r\n', 8),
(15, 'Old Square', '<p>\r\n	Old Square ( resembles the rich neighbourhood of the 18th century in Havana, where we can see big luxurious&nbsp; houses with columns, arches and stain glass windows).</p>\r\n', 8),
(16, 'Ambos Mundos Hotel', '<p>\r\n	<strong>Ambos Mundos Hotel </strong>( The hotel where Ernest Hemingway lived for seven years, his room nowadays is a small museum).</p>\r\n', 8),
(17, 'Avenida Puerto', '<p>\r\n	<strong>Avenida Puerto</strong> (the avenue that goes along the entrance of the bay, there is a nice view to the very harbour and a fortress across the &ldquo;canal. Nice place for a walk and a couple of pictures&rdquo;).</p>\r\n', 8),
(18, 'Floridita Bar ', '<p>\r\n	<strong>Floridita Bar</strong></p>\r\n', 8),
(19, 'The Capitol', '<p>\r\n	<strong>The Capitol</strong> (an amazing marble-covered building similar to the US White House, but richer in details. It was the seat of the Cuban congress till 1959).</p>\r\n', 8),
(20, 'Malecon', '<p>\r\n	<strong>Malecon</strong> (the avenue that goes for 7 km along the northern part of the city, where people love to go for a walk to feel the breeze from the ocean, and at night is one the most romantic places in the city)</p>\r\n', 8),
(22, 'La Corona', '<p>\r\n	<strong>La Corona</strong> (the biggest cigar factory that manufacture all Cuban brands).</p>\r\n', 8),
(23, 'Tropicana', '<p>\r\n	<strong>Tropicana</strong></p>\r\n', 14),
(24, 'The Capitol', '<p>\r\n	<strong>The Capitol</strong> (an amazing marble-covered building similar to the US White House, but richer in details. It was the seat of the Cuban congress till 1959)</p>\r\n', 14),
(25, 'La Cabaña', '<p>\r\n	La Caba&ntilde;a.</p>\r\n', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `preview` varchar(150) NOT NULL,
  `preview_fr` varchar(150) DEFAULT NULL,
  `preview_es` varchar(150) DEFAULT NULL,
  `preview_it` varchar(150) DEFAULT NULL,
  `preview_ru` varchar(150) DEFAULT NULL,
  `description` longtext NOT NULL,
  `description_fr` longtext,
  `description_es` longtext,
  `description_it` longtext,
  `description_ru` longtext,
  `time_create` timestamp NULL DEFAULT NULL,
  `time_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`id`, `name`, `preview`, `preview_fr`, `preview_es`, `preview_it`, `preview_ru`, `description`, `description_fr`, `description_es`, `description_it`, `description_ru`, `time_create`, `time_update`) VALUES
(7, 'Matanzas, Cárdenas, & Varadero', 'Try to discover the real Cuba visiting the cities around Varadero. You have the opportunity to visit', 'Essayez de découvrir le vrai Cuba en visitant les villes des alentours de Varadero. Vous avez la possibilité de visiter Matanzas encore appelée la cit', '', 'Con questo tour avrete la possibilità di  scoprire la vera Cuba.', '', '<p>\r\n	Try to discover the real Cuba visiting the cities around Varadero. You have the opportunity to visit Matanzas, also called the city of the bridges and the Athens of Cuba. This gives you the chance to visit the Bellamar cave, full of myths and legends and the pharmaceutical museum. a drive through the country side shows how the farmers live in Cuba, and makes our way to Cardenas, a mixture of modern and neoclassical architecture.</p>\r\n<p>\r\n	<strong>Schedule</strong></p>\r\n<p>\r\n	<strong>09:00am- 04:00pm</strong></p>\r\n<p>\r\n	- pick up in the hotel</p>\r\n<p>\r\n	- Tour guide in the proper language</p>\r\n<p>\r\n	- Drive to Matanzas boarding the Atlantic Ocean</p>\r\n<p>\r\n	- Tour through Matanzas city (Vigia Square, liberation square, Hermita de Monserrate for the excellent view, farmers market and free time in the boulevard)</p>\r\n<p>\r\n	- visit the Bellamar Cave (optional with a cost of 5 cuc), one the biggest attractions in the outskirts of the city.</p>\r\n<p>\r\n	- Lunch (optional, prices vary depending on people&#39;s interests)</p>\r\n<p>\r\n	- Drive through the country side to get to Cardenas (through the Guamacaro valley)</p>\r\n<p>\r\n	- Tour through Cardenas city (monument to the bicycle, land crab and horse buggy, stop in the Columbus Park, plaza Malakoff and free time)</p>\r\n<p>\r\n	- Drive back to Varadero and sightseeing tour through the peninsula.&nbsp;&nbsp;&nbsp;</p>\r\n', '<p>\r\n	Essayez de d&eacute;couvrir le vrai Cuba en visitant les villes des alentours de Varadero. Vous avez la possibilit&eacute; de visiter Matanzas encore appel&eacute;e la cit&eacute; des ponts et l&#39;Ath&egrave;nes de Cuba. Cela vous permet de visiter la grotte de Bellamar, remplie de mythes et de l&eacute;gendes, de m&ecirc;me que le mus&eacute;e pharmaceutique. &nbsp;Un tour &agrave; travers les campagnes montre comment les agriculteurs vivent &agrave; Cuba, et rend votre chemin retour &agrave; Cardenas, en un m&eacute;lange d&#39;architecture moderne et n&eacute;oclassique.<br />\r\n	<strong>Le Programme de la journ&eacute;e&nbsp;:</strong><br />\r\n	09h:00-16h:00<br />\r\n	-D&eacute;part de l&#39;h&ocirc;tel<br />\r\n	-Guide touristique dans la langue appropri&eacute;e<br />\r\n	<em>-</em>Tour &agrave; Matanzasen bordant l&#39;oc&eacute;an Atlantique<br />\r\n	-Excursion &agrave; travers la ville de Matanzas(La Place Vigia, Place de Libert&eacute;, La Hermita de Monserrate pour l&#39;excellente vue, le march&eacute; agricole et un bout de temps libre au boulevard)<br />\r\n	-Visiter la Cave Bellamar (facultatif au co&ucirc;t de 5 CUC), un des plus grands attractifs touristiques de la p&eacute;riph&eacute;rie de la ville.<br />\r\n	- D&eacute;jeuner (facultatif, les prix varient en fonction des int&eacute;r&ecirc;ts des personnes)<br />\r\n	- Promenade &agrave; travers la campagne pour se rendre &agrave; Cardenas (par la vall&eacute;e Guamacaro)<br />\r\n	- Excursion &agrave; travers la ville de Cardenas (monuments de la bicyclette, du crabe ethorse buggy, arr&ecirc;t au Parc Colomb, Place Malakoff puis temps libre)<br />\r\n	-Trajet retour &agrave; Varadero et visite guid&eacute;e &agrave; travers la p&eacute;ninsule.</p>\r\n', '', '<p>\r\n	Con questo tour avrete la possibilit&agrave; di &nbsp;scoprire la vera Cuba e visitare le citt&agrave; vicino a Varadero . Matanzas , chiamata anche la citt&agrave; &nbsp;dei ponti e l&#39;Atene di Cuba , la grotta di Bellamar , piena di miti e leggende e il museo farmaceutico . Una passeggiata attraverso la campagna vi far&agrave; vedere la vita contadina a Cuba e per finire Cardenas, &nbsp;un mix di architettura moderna e neoclassica.</p>\r\n<p>\r\n	<strong>Programma:</strong><br />\r\n	<strong>9:00-04:00</strong><br />\r\n	- Partenza dall&rsquo; hotel<br />\r\n	- Guida turistica nella lingua indicata<br />\r\n	- percorso a Matanzas, lambendo &nbsp;l&#39;Oceano Atlantico<br />\r\n	- Tour attraverso la citt&agrave; di Matanzas ( Vigia Piazza, Piazza della Liberazione , Hermita de Monserrate per la vista eccellente , mercato degli agricoltori e&nbsp; tempo libero<br />\r\n	- Visita alla grotta di&nbsp; Bellamar &nbsp;( facoltativa con un costo di 5 cuc ) , una delle pi&ugrave; grandi attrazioni nei dintorni della citt&agrave; .<br />\r\n	- Pranzo ( facoltativo , i prezzi variano a seconda della scelta )<br />\r\n	- percorrendo &nbsp;la campagna per arrivare a Cardenas ( attraverso la valle Guamacaro )<br />\r\n	- Tour per la citt&agrave; Cardenas ( monumento alla bicicletta , granchio, calesse, &nbsp;fermata nel Parco Columbus , piazza Malakoff e tempo libero )<br />\r\n	- Ritorno a Varadero e visita panoramica lungo la penisola .</p>\r\n', '', '2014-08-18 20:35:34', NULL),
(8, 'Havana day tour', 'Visiting the old Havana we can enjoy the cobble stone streets, dark limestone buildings, old churches and squares.', 'La Havane, la plus grande villedes Caraïbes, est le centre politique, culturel et économique de Cuba..', '', 'Visitando la vecchia Havana possiamo ammirare le strade acciotolate, i palazzi di calcare,  vecchie chiese e piazze.', '', '<p>\r\n	Havana, the largest city in the Caribbean, is the Cuba&#39;s political, cultural and economic center, and populated by over two million people. Havana suffered little or no damage during the wars and revolutions of the past 200 years and the old town is easily the finest surviving Spanish colonial complex in the Americas. &nbsp;A big wealth has been used on the restoration of the city, a process that began two decades before it was declared world heritage site by UNESCO in December 1982. Although many of Havana&#39;s houses are run down, the heavy traffic, rampant commercialization and extensive slums that choke many other Latin-American countries are absent. Even the US embargo helps in a way by keeping out the cruise ships that clog most other Caribbean ports and by limiting US consumer tourism. Enjoy while it lasts.</p>\r\n<p>\r\n	&nbsp;&nbsp; Visiting the old Havana we can enjoy the cobble stone streets, dark limestone buildings, old churches and squares.&nbsp; In case of the new Havana, which is much bigger, it has to be visited by car since places to cover are not walking distances. However, it is very exciting to stop at places like; the Revolution Square, the Capitolio, the Central Park, or just drive through Vedado or Miramar neighbourhood, or just enjoy the excellent view when driving through the promenade that goes 7 km around the Northern part of the city.</p>\r\n<p>\r\n	<strong>Program</strong>:</p>\r\n<p>\r\n	<strong>08:00am-06:00pm</strong></p>\r\n<ul>\r\n	<li>\r\n		Pick up in the hotel</li>\r\n	<li>\r\n		Close to two hours driving to Havana along the coast</li>\r\n	<li>\r\n		Walking tour in the old Havana, declared world heritage site by UNESCO in 1982, (arm square, cathedral square, San Francisco de Asis square, Hemingway Hotel and bar)</li>\r\n	<li>\r\n		Free time(we could visit the craft market)</li>\r\n	<li>\r\n		Lunch(prices vary depending on people&rsquo;s choice)</li>\r\n	<li>\r\n		Tour through new Havana (trying to cover most of it from the car, due to they are not walking distances. Mainly Vedado and Miramar)</li>\r\n	<li>\r\n		Stop in the Revolution Square</li>\r\n	<li>\r\n		Stop in the Capitol Building</li>\r\n	<li>\r\n		Returned to Varadero</li>\r\n</ul>\r\n', '<p>\r\n	La Havane, la plus grande villedes Cara&iuml;bes, est le centre politique, culturel et &eacute;conomique de Cuba, et se trouve peupl&eacute;e par plus de deux millions de personnes. La Havane a subi peu ou z&eacute;ro dommage pendant les guerres et les r&eacute;volutions des 200 derni&egrave;res ann&eacute;es et la vieille ville est de ce part le plus typique survivant complexe colonial espagnol dans les Am&eacute;riques. Une grande fortune a &eacute;t&eacute; utilis&eacute;e dans la restauration de la ville, un processus qui a commenc&eacute; deux d&eacute;cades avant qu&rsquo;elle n&rsquo;ait &eacute;t&eacute; d&eacute;clar&eacute;e site du patrimoine mondial par l&#39;UNESCO en d&eacute;cembre1982.Malgr&eacute; l&rsquo;aspect d&eacute;labr&eacute; de beaucoup de maisons &agrave; la Havane, la lourde circulation, la commercialisation rampante et les vastes bidonvilles qui &eacute;touffent de nombreux autres pays latino-am&eacute;ricains y sont absents. M&ecirc;me l&#39;embargo am&eacute;ricain contribue d&#39;une mani&egrave;re en emp&ecirc;chant l&rsquo;arriv&eacute;e de bateaux de croisi&egrave;re qui encombrent la plupart des autres ports des Cara&iuml;bes et en limitant le tourisme des consommateurs am&eacute;ricains. Profitez donc pendant que &ccedil;a dure.</p>\r\n<p>\r\n	En visitant la vieille Havane, on peut profiter des rues pav&eacute;es, des b&acirc;timents de calcaire fonc&eacute;, de vieilles &eacute;glises et les places. Dans le cas de la nouvelle La Havane, qui est beaucoup plus grande, elle doit &ecirc;tre visit&eacute;e en voiture car les lieux &agrave; couvrir ne sont pas des distances de marche. Cependant, il est tr&egrave;s int&eacute;ressant des&#39;arr&ecirc;ter &agrave;des endroits comme; laPlace de la R&eacute;volution, le Capitole, le Parc Central, ou tout simplement faire un tour en voiture &agrave; travers les quartiers Vedado ou Miramar, ou simplement encore, profiter de la vue magnifique lors de la travers&eacute;e de la promenade qui fait 7 kilom&egrave;tres autour de la partie nord de la ville.</p>\r\n<p>\r\n	<strong>P</strong><strong>rogramme</strong><br />\r\n	08h00-06: 12 heures<br />\r\n	-D&eacute;part de l&#39;h&ocirc;tel<br />\r\n	-Environ deux heures de route &agrave; La Havane le longeant de la c&ocirc;te.<br />\r\n	- Visite &agrave; pied dans la vieille Havane, d&eacute;clar&eacute;e site du patrimoine mondial par l&#39;UNESCO en 1982, (place d&rsquo;arme, place de la Cath&eacute;drale, la place San Francisco de Asis, H&ocirc;tel et bar Hemingway).<br />\r\n	-Temps libre (il est possible de visiter le march&eacute; artisanal).<br />\r\n	- D&eacute;jeuner (les prix varient selon le choix des personnes).<br />\r\n	-Visite &agrave; travers la nouvelle Havane (Essayant d&rsquo;en couvrir un plus grand p&eacute;rim&egrave;tre en voiture, car il ne s&rsquo;agit pas de distances de marche, surtout des endroits comme Vedado et Miramar).</p>\r\n<p>\r\n	-Arr&ecirc;t &agrave;laPlace de la R&eacute;volution.<br />\r\n	-Arr&ecirc;t au b&acirc;timent du Capitole.<br />\r\n	-Retour &agrave; Varadero.</p>\r\n', '', '<p>\r\n	L&#39;Avana, la pi&ugrave; grande citt&agrave; dei Caraibi , &egrave; il centro politico, culturale ed economico di Cuba , &egrave; abitata &nbsp;da oltre due milioni di persone. L&#39;Avana ha sofferto poco e non ha avuto nessun danno durante le guerre e le rivoluzioni degli ultimi 200 anni e la citt&agrave; vecchia &egrave; il miglior complesso coloniale spagnolo nelle Americhe . Molti soldi sono stati spesi per il restauro della citt&agrave; , un processo iniziato due decenni fa; &nbsp;&egrave; stata dichiarata patrimonio dell&#39;umanit&agrave; dall&#39;UNESCO nel dicembre 1982. Anche se molte case soprattutto dell&rsquo;avana vecchia non sono in buone condizioni, ci sia molto traffico e una crescente diffusione commerciale, non esistono le baraccopoli e le situazioni di degrado che soffocano molte citt&agrave; dell&rsquo;America latina.. Anche l&#39;embargo degli Stati Uniti, in un certo modo, non facendo arrivare le grosse navi da crociera che intasano gli altri porti dei Caraibi, e limitando l&rsquo;afflusso dei turisti nordamericani, contribuisce a mantenere intatta la citt&agrave;.&nbsp; Godetevela finch&eacute; dura .<br />\r\n	&nbsp;&nbsp;&nbsp;Visitando la vecchia Havana possiamo ammirare le strade acciotolate, i palazzi di calcare, &nbsp;vecchie chiese e piazze . La parte nuova dell&rsquo;Avana, molto estesa, deve per forza essere visitata in auto, ed &egrave; sicuramente emozionante fermarsi e visitare luoghi come &nbsp;Piazza della Rivoluzione , il Capitolio , il Central Park , o semplicemente guidare attraverso Vedado e il quartiere di Miramar&nbsp; o semplicemente godersi la vista eccellente quando si percorre &nbsp;il lungomare (Malecon) che si snoda per oltre sette chilometri bordeggiando l&rsquo;Oceano intorno alla parte settentrionale della citt&agrave; .</p>\r\n<p>\r\n	<strong>Programma:<br />\r\n	08:00 - 06:00</strong><br />\r\n	- Partenza dall&rsquo; hotel<br />\r\n	- Circa due ore di percorso per arrivare all&rsquo;Avana.<br />\r\n	- Passeggiata nella vecchia Avana , dichiarata patrimonio dell&#39;umanit&agrave; dall&#39;UNESCO nel 1982 , ( piazza d&rsquo;Armi , Piazza del Duomo , Piazza San Francisco de Asis , Hemingway hotel e bar)<br />\r\n	- Tempo libero ( facolt&agrave; di visitare il mercato artigianale )<br />\r\n	- Pranzo (i prezzi variano a seconda della scelta del men&ugrave;)<br />\r\n	- Avana Moderna (la maggior parte del percorso sar&agrave; in auto, dovuto alle grandi distanze da percorrere )<br />\r\n	- Fermata in Piazza della Rivoluzione<br />\r\n	- Fermata in Campidoglio<br />\r\n	- rientro a Varadero</p>\r\n', '', NULL, NULL),
(11, 'Trinidad & Cienfuegos ', 'Get a ride through the green country side to visit the best two cities of the central part of Cuba. ', 'Effectuez une balade à travers la campagne verdoyante et visiter les deux meilleures villes de la région centrale de Cuba.', '', 'Si attraverserà la campagna cubana per visitare il meglio di queste due città della parte centrale di Cuba.', '', '<p>\r\n	Get a ride through the green country side to visit the best two cities of the central part of Cuba. They are so perfectly preserved that we can see the features of a Spanish colonization on its very architecture. <strong>Cienfuegos</strong>, also called &ldquo;the Pearl of the South&rdquo;, founded by the French in 1819 is the perfect city to enjoy a neoclassical architecture and the city itself that was built along one of the most beautiful bays in the Caribbean Sea. <strong>Trinidad</strong> is the city that takes your imagination back in time because of the well preservation of the buildings. It was the third village founded by the Spanish people in Cuba and declared World Heritage Site by UNESCO in 1988</p>\r\n<p>\r\n	<strong>Program</strong></p>\r\n<p>\r\n	06:30am- 07:00pm</p>\r\n<p style="margin-left:18.0pt;">\r\n	Pick up in the hotel at 06:30am</p>\r\n<ul>\r\n	<li>\r\n		Drive for around three hour through the country side to Cienfuegos. Seeing all kinds of plantations and farms(stop for a break)</li>\r\n	<li>\r\n		City tour in Cienfuegos. (visiting the heart of the city that includes the Jose Marti park to see where the city was founded, the Thomas Terri theatre, the Arch Triumph, the city hall, the former Spanish casino,&nbsp; the cathedral, and free time in the boulevard)</li>\r\n	<li>\r\n		&nbsp;Visit the area of Punta Gorda(the newer&nbsp; place that was built under the American influence)the Valle Palace and the Jagua Hotel</li>\r\n	<li>\r\n		Drive to Trinidad(along the Caribbean Sea and enjoy the view to the mountain range &ldquo;the Guamuaya Group&rdquo; &nbsp;&nbsp;</li>\r\n	<li>\r\n		Lunch at Trinidad(there are different choices)</li>\r\n	<li>\r\n		Walking tour in the historical center (the Cathedral, Plaza Mayor, and Plaza &ldquo;El Jigue&rdquo;, former Basilica Saint Francis of Assisi, Cantero&rsquo;s Palace and Brunet&rsquo;s Palace that they are both museums)museums are optional, cost of 1.00 cuc</li>\r\n	<li>\r\n		Visit to the pottery maker&rsquo;s house</li>\r\n	<li>\r\n		Free time for further walking or souvenir market</li>\r\n	<li>\r\n		Return to Varadero</li>\r\n</ul>\r\n', '<p>\r\n	Effectuez une balade &agrave; travers la campagne verdoyante et visiter les deux meilleures villes de la r&eacute;gion centrale de Cuba. Elles sont si parfaitement conserv&eacute;es qu&rsquo;on peut y voir encore les traits caract&eacute;ristiques de la colonisation espagnole dans leur architecture. <strong>Cienfuegos</strong>, aussi appel&eacute;e &laquo;la Perle du Sud&raquo;, fond&eacute;e par les Fran&ccedil;ais en 1819 est la ville parfaite pour profiter d&#39;une architecture n&eacute;o-classique et de la ville elle-m&ecirc;me qui a &eacute;t&eacute; construite aux larges de l&#39;une des plus belles baies de la mer des Cara&iuml;bes. <strong>Trinidad</strong> est la ville qui ram&egrave;ne votre imagination dans le temps &agrave; cause de la bonne pr&eacute;servation de ses b&acirc;timents. Ce fut le troisi&egrave;me village fond&eacute; par les Espagnols &agrave; Cuba et d&eacute;clar&eacute; site du patrimoine mondial par l&#39;UNESCO en 1988.</p>\r\n<p>\r\n	<br />\r\n	<strong>Programme</strong><br />\r\n	06h30-19h00<br />\r\n	D&eacute;part de l&#39;h&ocirc;tel &agrave;06h30<br />\r\n	-Trajet d&rsquo;environ trois heures &agrave; travers la campagne jusqu&rsquo;&agrave; Cienfuegos. Vue de toutes sortes de plantations et de fermes (incluant d&rsquo;arr&ecirc;t pour une pause)<br />\r\n	-Visite de la villede Cienfuegos. (visite au c&oelig;ur de la ville, qui inclut le parc Jos&eacute; Marti pour voir l&rsquo;endroit o&ugrave; la ville a &eacute;t&eacute; fond&eacute;e, le th&eacute;&acirc;tre Thomas Terri, l&#39;Arc de Triomphe, l&#39;h&ocirc;tel de ville, l&#39;ancien casino espagnol, la Cath&eacute;drale, et le temps libre au boulevard)<br />\r\n	-Visitez la r&eacute;gion de Punta Gorda (l&#39;endroit r&eacute;cent construit sous l&#39;influence am&eacute;ricaine) Le Palais Valle et l&#39;H&ocirc;tel Jagua<br />\r\n	-Travers&eacute;e &agrave; Trinidad (le long de la mer des Cara&iuml;bes&nbsp;; profiter de la vue sur la cha&icirc;ne de montagne&quot; du Groupe Guamuaya&quot;<br />\r\n	-D&eacute;jeuner &agrave; Trinidad (on ya diff&eacute;rents choix)<br />\r\n	- Visite &agrave; pied au centre historique (la Cath&eacute;drale, la Plaza Mayor et Plaza&quot; El Jigue&quot;, ancienne Basilique Saint-Fran&ccedil;ois d&#39;Assise, le Palais Cantero et le Palais Brunet qui sont tous deux des mus&eacute;es), les mus&eacute;es sont facultatifs au co&ucirc;t de 1,00CUC<br />\r\n	-Visite &agrave; la maison dupotier<br />\r\n	-Temps libre pour plus de marche ou de visite au march&eacute; d&rsquo;objets souvenirs<br />\r\n	-Retour &agrave; Varadero</p>\r\n', '', '<p>\r\n	Si attraverser&agrave; la campagna cubana per visitare il meglio di queste due citt&agrave; della parte centrale di Cuba. Entrambe sono perfettamente conservate, anche se costruite in epoche diverse, e mantengono intatta l&rsquo;architettura tanto della colonizzazione spagnola come di quella francese. &nbsp;Cienfuegos, chiamata anche &quot; la Perla del Sud&quot; , fondata dai francesi nel 1819 &egrave; la citt&agrave; perfetta per apprezzare &nbsp;una architettura neoclassica di questa citt&agrave; che &egrave; stata costruita lungo una delle baie pi&ugrave; belle ed importanti del mar dei Caraibi . Trinidad &egrave; la citt&agrave; che riporta indietro la vostra immaginazione al tempo dei conquistatori spagnoli tanto &egrave; ancora perfetta la conservazione dei suoi edifici e delle sue vie. E &#39;stata la terza citt&agrave;&nbsp; fondata dagli spagnoli a Cuba ed &egrave; stata dichiarata &nbsp;Patrimonio dell&#39;Umanit&agrave; dall&#39;UNESCO nel 1988.</p>\r\n<p>\r\n	<strong>Programma:</strong></p>\r\n<p>\r\n	<strong>6:30-07:00</strong></p>\r\n<p>\r\n	- Partenza dall&rsquo; hotel alle 06:30<br />\r\n	- si parte attraversando per circa tre ore&nbsp; la campagna verso&nbsp; Cienfuegos, dove si potranno ammirare vari tipi di piantagioni ed allevamenti con una breve sosta durante il tragitto.<br />\r\n	- Visita della citt&agrave; di Cienfuegos . ( visita al centro&nbsp; della citt&agrave; che comprende il parco Jose Marti per vedere dove la citt&agrave; fu fondata , il teatro Thomas Terri , l&#39;Arco di Trionfo , il municipio , l&#39;ex casin&ograve; spagnolo , la cattedrale e&nbsp; tempo libero )<br />\r\n	- Visita alla&nbsp; zona di Punta Gorda (il luogo pi&ugrave; recente che &egrave; stato costruito sotto l&#39; influenza americana ), il Palazzo Valle e l&rsquo;hotel Jagua.<br />\r\n	- Partenza per Trinidad ( bordeggiando&nbsp; il Mar dei Caraibi e dall&rsquo;altro lato la spettacolare&nbsp; catena montuosa &quot; Guamuaya &quot;<br />\r\n	- Pranzo a Trinidad ( menu a scelta) )<br />\r\n	- Passeggiata nel centro storico ( la Cattedrale, Plaza Mayor e Plaza &quot;El Jig&uuml;e &quot; , l&#39;ex Basilica di San Francesco d&#39; Assisi , Palazzo Cantero e Palazzo del Brunet che sono entrambi&nbsp; musei ), i musei sono opzionali , il costo di 1,00 cuc<br />\r\n	- Visita alla casa di un produttore di ceramica<br />\r\n	- Tempo libero per&nbsp; passeggiate e visite ai mercatini<br />\r\n	- Rientro&nbsp; a Varadero<br />\r\n	&nbsp;</p>\r\n', '', '2014-08-18 20:35:57', NULL),
(12, 'Guama and the Bay of Pigs', 'The Southern part of Matanzas province is an excellent place to spend the day enjoying the country side. ', 'La zone sud de la province de Matanzas est un excellent endroit pour passer la journée et profiter de la campagne.', '', 'La parte meridionale della provincia di Matanzas è il miglior posto dove trascorrere la giornata godendo del paesaggio.', '', '<p>\r\n	The Southern part of Matanzas province is an excellent place to spend the day enjoying the country side. <strong>Zapata peninsula </strong>is the Cuba&rsquo;s most important wetland area and deservedly declared National Park. The area shows very diverse and complex ecosystems with more 900 species of flora, 171 species of birds, 31 of reptiles and 12 mammals. The most primitive of Cuban fish is easily seen in the <strong>Laguna del Tesoro</strong> (the second biggest lake in Cuba). Get the chance to enjoy the Cuba&rsquo;s most important crocodile farm.&nbsp; And enjoying a boat ride across the lake we get to an island that depicts the Cuban Indians engaged in daily activities. Just a bit more south we get to the bay of pigs, to enjoy not only a beautiful beach but a place full of history.</p>\r\n<p>\r\n	<strong>Program</strong></p>\r\n<p>\r\n	-Pick up in the hotel at 8:00</p>\r\n<p>\r\n	-Leave Varadero heading south through the country side</p>\r\n<p>\r\n	- Enjoy the green landscape and the different crops we grow in Cuba</p>\r\n<p>\r\n	- Stop in &ldquo;La Finquita&rdquo; for a break (there you can try sugar cane juice)</p>\r\n<p>\r\n	- Go through Australia town where Castro set up his military headquarter during the Bay of Pigs invasion</p>\r\n<p>\r\n	- Stop in la Boca de Guama (optional with an extra charge visit the crocodile farm and/or the village representing the Cuban natives)</p>\r\n<p>\r\n	- Lunch in a restaurant nearby that offers crocodile meat, deer, crab, fish, bore meat (prices vary depending on choices)</p>\r\n<p>\r\n	- Drive to the Bay of Pigs to enjoy the beach (free time to swim)</p>\r\n<p>\r\n	- Visit Cave of the Fish (free time to swim)</p>\r\n<p>\r\n	- Return to Varadero</p>\r\n', '<p>\r\n	La zone sud de la province de Matanzas est un excellent endroit pour passer la journ&eacute;e et profiter de la campagne. La Municipalit&eacute; de Zapata est la zone humide la plus importante de Cuba et a &eacute;t&eacute; d&eacute;clar&eacute;e &agrave; juste titreParc National. La zone pr&eacute;sente des &eacute;cosyst&egrave;mes tr&egrave;s divers et complexes avec plus de 900 esp&egrave;ces de la flore, 171 esp&egrave;ces d&#39;oiseaux, 31de reptiles et 12 mammif&egrave;res. Le plus primitif des poissons cubains est facilement visible la Laguna del Tesoro (le deuxi&egrave;me plus grand lac de Cuba). Offrez-vous l&rsquo;occasion de profiter de la plus importante ferme de crocodiles de Cuba. Et le divertissement dans une promenade en bateau sur le lac, nous m&egrave;ne &agrave; une &icirc;le qui illustre les Indiens cubains engag&eacute;s dans les activit&eacute;s quotidiennes. Juste un peu plus au sud, se trouve la baie des cochons, o&ugrave; on peut profiter non seulement d&#39;une belle plage mais un lieu charg&eacute; d&#39;histoire.</p>\r\n<p>\r\n	<strong>Programme</strong><br />\r\n	-D&eacute;part de l&#39;h&ocirc;tel &agrave;08h00<br />\r\n	- Trajet depuis Varadero en direction vers le sud &agrave; travers lacampagne<br />\r\n	-Profitez du paysage vert et des diff&eacute;rentes cultures pr&eacute;sentes &agrave; Cuba<br />\r\n	-Arr&ecirc;t &agrave; &quot;La Finquita&quot; pour une pause (l&agrave;, il est possible d&rsquo;essayer le jus de canne &agrave; sucre)<br />\r\n	-Passage par la ville d&#39;Australia o&ugrave; F. Castro a install&eacute; son quartier g&eacute;n&eacute;ral durant l&rsquo;invasion de la Baie des Cochons<br />\r\n	-Arr&ecirc;t &agrave; la Boca de Guama (facultatif avec une visite payante &agrave; la ferme aux crocodiles et/ou au village repr&eacute;sentant les indig&egrave;nes cubains)<br />\r\n	-D&eacute;jeuner dans un restaurant &agrave; proximit&eacute; offrant la viande de crocodile, du cerf, du crabe, du poisson, de la viande for&eacute;e (les prix varient selon les choix)<br />\r\n	-D&eacute;part pour la Baie des Cochons pour profiter de la plage (le temps de nager)<br />\r\n	- Visitez la Grotte de Poissons (temps libre pour la natation)<br />\r\n	-Retour &agrave; Varadero<br />\r\n	&nbsp;</p>\r\n', '', '<p>\r\n	La parte meridionale della provincia di Matanzas &egrave; il miglior posto dove trascorrere la giornata godendo del paesaggio. <strong>La Penisola di Zapata</strong> &egrave; un paradiso e meritatamente dichiarato parco nazionale. L&rsquo;area &egrave; un ricco e complesso mix di diversi ecosistemi con pi&ugrave; di 900 specie floreali, 171 specie di volatili, 31 di rettili e 12 di mammiferi. Il pi&ugrave; primitivo dei pesci cubani e&egrave; facilmente visibile nella <strong>Laguna del Tesoro</strong> ( il secondo lago pi&ugrave; grande di Cuba). Non perdere l&rsquo;occasione di visitare il pi&ugrave; grande ed importante allevamento di coccodrilli. E divertiti con un giro in barca sul lago con attracco in un&rsquo;isoletta dove potrete osservare gli Indiani cubani impegnati nelle loro quotidiane attivit&agrave;. Un po&rsquo; pi&ugrave; a sud vi porteremo nellla baia dei porci che non &egrave; solo un posto dove godere della stupenda spiaggia ma respirare anche tanta storia.</p>\r\n<p>\r\n	<strong>Programma:</strong></p>\r\n<ul>\r\n	<li>\r\n		Ore 8.30 incontro presso la hall dell&rsquo;albergo</li>\r\n	<li>\r\n		Si lascia Varadero direzione Sud attraverso le campagne</li>\r\n	<li>\r\n		Godi del verde paesaggio e dei campi coltivati</li>\r\n	<li>\r\n		Fermata a &ldquo;La Finquita&rdquo; per una pausa (l&igrave; potrete assaggiare il succo di zucchero di canna)</li>\r\n	<li>\r\n		Si passa attraverso la citt&agrave; di australia dove castro attrezz&ograve; il suo quartier militare durante l&rsquo;invasione della baia dei porci</li>\r\n	<li>\r\n		Fermata a Boca de Guama (opzionale con sovra costo per visita all&rsquo;aallevamento di coccodrilli e/o villaggio dei nativi cubani)</li>\r\n	<li>\r\n		Pranzo in ristorante nei pressi che offre carne di coccodrillo, cervo, granchio, pesce (prezzi variano a seconda della scelta)</li>\r\n	<li>\r\n		Direzione baia dei porci per la sua spiaggia (tempo per fare il bagno in acque cristalline)</li>\r\n	<li>\r\n		Visita la Grotta dei Pesce</li>\r\n	<li>\r\n		Ritorno a Varadero</li>\r\n</ul>\r\n', '', '2014-08-18 20:36:10', NULL),
(13, 'Three cities tour', 'Get the most complete tour that covers the central part of Cuba.  Have the chance to visit two perfectly preserved cities where we can see the...', 'Effectuez le circuit le plus complet recouvrant la région centrale deCuba. Vous pourrez visiter deux villes parfaitement préservés...', '', 'Con questo giro Lei scoprirà la regione centrale de Cuba. Può visitare due città perfettamente conservate e che hanno l´impronta coloniale spagnola..', '', '<p>\r\n	Get the most complete tour that covers the central part of Cuba. &nbsp;Have the chance to visit two perfectly preserved cities where we can see the features of a Spanish colonization on its very architecture. <strong>Cienfuegos</strong>, also called &ldquo;the Pearl of the South&rdquo;, founded by the French in 1819 is the perfect city to enjoy a neoclassical architecture and the city itself that was built along one of the most beautiful bays in the Caribbean Sea. <strong>Trinidad</strong> is the city that takes your imagination back in time because of the well preservation of the buildings. It was the third village founded by the Spanish people in Cuba and declared World Heritage Site by UNESCO in 1988. Moreover, you get to visit <strong>Santa Clara</strong>, where you can discover the life of Che Guevara, such an interesting and outstanding personality.</p>\r\n<p style="margin-left:18.0pt;">\r\n	<strong>Program:</strong></p>\r\n<p style="margin-left:18.0pt;">\r\n	<strong>6:30am-8:30pm</strong></p>\r\n<ul>\r\n	<li>\r\n		Pickup in the hotel at 6:30am</li>\r\n	<li>\r\n		drive south through the country side for a little bit more than 1 hour enjoying the farms and the different plantations (all different crops)</li>\r\n	<li>\r\n		stop for a break in Australia town and continue heading to Santa Clara</li>\r\n	<li>\r\n		visit the impressive Che Guevara Square, central park &ldquo;Leoncio Vidal&rdquo;, and&nbsp; the Armoured Train Monument</li>\r\n	<li>\r\n		Enjoy a drive through the Escambray mountain range (famous because the counter-revolutionaries were hidden there) to get to Trinidad.&nbsp;</li>\r\n	<li>\r\n		Lunch at Trinidad(there are different choices)</li>\r\n	<li>\r\n		Walking tour in the historical center (the Cathedral, Plaza Mayor, and Plaza &ldquo;El Jigue&rdquo;, former Basilica Saint Francis of Assisi, Cantero&rsquo;s Palace and Brunet&rsquo;s Palace that are both museums)museums are optional, cost of 1.00 cuc</li>\r\n	<li>\r\n		Visit to the pottery maker&rsquo;s house</li>\r\n	<li>\r\n		Free time for further walking or souvenir market</li>\r\n	<li>\r\n		Drive along the Caribbean Sea to get to Cienfuegos City</li>\r\n	<li>\r\n		City tour in Cienfuegos. (visiting the heart of the city that includes the Jose Marti park to see where the city was founded, the Thomas Terri theatre, the Arch Triumph, the city hall, the former Spanish casino,&nbsp; the cathedral, and free time in the boulevard)</li>\r\n	<li>\r\n		&nbsp;Visit the area of Punta Gorda(the newer&nbsp; place that was built under the American influence)the Valle Palace and the Jagua Hotel</li>\r\n	<li>\r\n		Drive back to Varadero</li>\r\n</ul>\r\n', '<p>\r\n	Effectuez le circuit le plus complet recouvrant la r&eacute;gion centrale deCuba. Vous pourrez visiter deux villes parfaitement pr&eacute;serv&eacute;s, ayant les traits caract&eacute;ristiques d&#39;une colonisation espagnole en leur architecture. <strong>Cienfuegos</strong>, encore appel&eacute;e &laquo;la Perle du Sud&raquo;, fond&eacute;e par les Fran&ccedil;ais en 1819 est la ville parfaite pour profiter d&#39;une architecture n&eacute;o-classique et de la ville elle-m&ecirc;me qui a &eacute;t&eacute; construite aux larges de l&#39;une des plus belles baies de la mer des Cara&iuml;bes. <strong>Trinidad</strong> est la ville qui ram&egrave;ne votre imagination dans le temps &agrave; cause de la bonne pr&eacute;servation de ses b&acirc;timents. Ce fut le troisi&egrave;me village fond&eacute; par les Espagnols &agrave; Cuba et d&eacute;clar&eacute; site du patrimoine mondial par l&#39;UNESCO en 1988.Par ailleurs, la visite &agrave; <strong>Santa Clara</strong> vous permet d&rsquo;en savoir plus sur la vie de Che Guevara, une figure int&eacute;ressante et exceptionnelle.<br />\r\n	<strong>Programme:</strong><br />\r\n	06h30-20h:30<br />\r\n	-D&eacute;part de l&#39;h&ocirc;tel &agrave;06h30<br />\r\n	-Travers&eacute;e au sud &agrave; travers la campagne durant un peu plus d&rsquo;une heure, avec la possibilit&eacute; appr&eacute;cier les fermes et les plantations diverses(avec toutes sortes de cultures)<br />\r\n	-Arr&ecirc;t pour une pause &agrave; la ville d&rsquo;Australia et poursuite de la route en direction de Santa Clara<br />\r\n	-Visiter l&#39;impressionnante place Guevara Che, le parc central &quot;Leoncio Vidal&quot;, et le Monument du train blind&eacute;<br />\r\n	-Profitez d&#39;une promenade &agrave; travers la cha&icirc;ne de montagnes de l&#39;Escambray (c&eacute;l&egrave;bre pour avoir &eacute;t&eacute; la cachette des contre-r&eacute;volutionnaires) pour se rendre &agrave;Trinidad.<br />\r\n	-D&eacute;jeuner &agrave;Trinidad (avec diff&eacute;rents choix)<br />\r\n	- Visite &agrave; pied au centre historique (la Cath&eacute;drale, la Plaza Mayor et Plaza &quot;El Jigue&quot;, l&rsquo;ancienne Basilique Saint-Fran&ccedil;ois d&#39;Assise, le Palais Cantero et le Palais Brunet qui sont tous deux des mus&eacute;es)&nbsp;; les mus&eacute;es sont facultatifs au co&ucirc;t de 1,00CUC<br />\r\n	-Visite &agrave; la maison du potier<br />\r\n	-Temps libre pour plus de marche ou visite au march&eacute; d&rsquo;objets souvenirs<br />\r\n	-Travers&eacute;e tout au long de la mer des Cara&iuml;bes aboutissant &agrave; Cienfuegos Ville<br />\r\n	-Visite de la villede Cienfuegos. (visite au c&oelig;ur de la ville, qui inclut le parc Jos&eacute; Marti pour voir l&rsquo;endroit o&ugrave; la ville a &eacute;t&eacute; fond&eacute;e, le th&eacute;&acirc;tre ThomasTerri, l&#39;Arc de Triomphe, l&#39;h&ocirc;tel de ville, l&#39;ancien casino espagnol, la Cath&eacute;drale, et temps libre au boulevard)<br />\r\n	-Visite &agrave; la r&eacute;gion de Punta Gorda (l&#39;endroit r&eacute;cent construit sous l&#39;influence am&eacute;ricaine) Le Palais Valle et l&#39;H&ocirc;tel Jagua<br />\r\n	-Trajet retour &agrave; Varadero<br />\r\n	&nbsp;</p>\r\n', '', '<p>\r\n	Con questo giro Lei scoprir&agrave; la regione centrale de Cuba. Pu&ograve; visitare due citt&agrave; perfettamente conservate e che hanno l&acute;impronta coloniale spagnola nell&acute;architettura. Cienfuegos &egrave; anchora chiamata La Perla del Sud, fondata dai francesi nel 1819 &egrave; il posto perfetto per guardare una architettura neoclassica. La citt&agrave; &egrave; stata costruita al lungo di una delle baie pi&ugrave; belle del mare dei Caraibi. Trinidad &egrave; una citt&agrave; che ci fa pensare che siamo nell&rsquo;epoca coloniale.&Egrave; stata la tersa citt&agrave; fondata dagli spagnoli &agrave; Cuba e dichiarata dall&rsquo;UNESCO nel 1988 Patrimonio della Umanit&agrave;. La visita a Santa Clara ci permette di conocere pi&ugrave; della vita del Che Guevara un&rsquo;uomo straordinario.</p>\r\n<p>\r\n	<strong>Programa</strong></p>\r\n<p>\r\n	6h:30 &ndash; 20h:30</p>\r\n<ul>\r\n	<li>\r\n		Partenza dall&rsquo;albergo alle 6h:30.</li>\r\n	<li>\r\n		Un po pi&ugrave; d&rsquo;un hora di viaggio a sud dove c&rsquo;&egrave; la possibilit&agrave; di guardare le piantaggione di tutti tipi.</li>\r\n	<li>\r\n		Ci fermiamo al paesino Australia per una pausa e dopo continuamo verso Santa Clara.</li>\r\n	<li>\r\n		Visita dell&rsquo;impresionante piazza Che Guevara, il parco centrale &ldquo;Leoncio Vidal&rdquo; &egrave; il singolare monumento al treno blindato.</li>\r\n	<li>\r\n		Traversata per la cattena montuosa del&rsquo;Escambray, conosciuta perche &egrave; stato il posto dove si nascondevano i controrivoluzionari.</li>\r\n	<li>\r\n		Pranzo a Trinidad.</li>\r\n	<li>\r\n		Visita a piedi per il centro storico (la cattedrale, la piazza Mayor, la piazza El Jig&uuml;e, la vecchia Basilica San Francesco d&rsquo;Assisi, il palazzo Cantero e il palazzo Brunet che sono oggy due musei ). I musei sono a vuestra scelta e costano 1cuc.</li>\r\n	<li>\r\n		Visita della casa di un riconosciuto ceramista.</li>\r\n	<li>\r\n		Tempo libero per visitare il mercatino dell&rsquo;artigianato.</li>\r\n	<li>\r\n		Traversata al lungo del mare dei Caraibi per arrivare a Cienfuegos.</li>\r\n	<li>\r\n		Visita della citt&agrave; di Cienfuegos.</li>\r\n	<li>\r\n		Passeggiata per il centro storico della citt&agrave; che comprende il parco Jos&eacute; Mart&iacute; che e il posto dove &egrave; fondata la citt&agrave;, il teatro Tomas Terri, l&rsquo;Arco di Triunfo, il vecchio casino spagnolo, la cattedrale.</li>\r\n	<li>\r\n		Tempo libero nel boulevard.</li>\r\n	<li>\r\n		Visita a Punta Gorda (un quartiere pi&ugrave; moderno costruito con l&rsquo;influenza americana), il palazzo Valle e l&rsquo;Albergo Jagua.</li>\r\n</ul>\r\n', '', NULL, NULL),
(14, 'Havana & Tropicana ', 'Tropicana was opened in 1939 as the most flamboyant night club in the world. It worked as a casino in the 50s..', 'Le Tropicana a été ouvert en 1939 comme le club le plus flamboyant au monde. Il a fonctionné comme casino au cours des années 50..', '', 'Tropicana è stato aperto nel 1939 con lo scopo di essere il night club più scintillante ed esclusivo del mondo.', '', '<p>\r\n	Tropicana was opened in 1939 as the most flamboyant night club in the world. It worked as a casino in the 50s with a new showroom the &ldquo;Salon Arcos De Cristales&rdquo;. International celebrities such as Nat &ldquo;King&rdquo; Cole, Josephine Baker, and Carmen Miranda headlined the show. Nowadays it is still the best cabaret in the island. The more than 200 performers are hand-picked from the cr&egrave;me-de-la-cr&egrave;me of Cuba&rsquo;s dancers and singers. &nbsp;Do not miss the chance to meet the &ldquo;paradise under the star&rdquo; with most of the Cuban rhythms and dances such as danzon, dansonete, chachacha, rumba, meringue, salsa among others.</p>\r\n<p>\r\n	<strong>Program:</strong></p>\r\n<ul>\r\n	<li>\r\n		Pick up in the hotel at 8:30am</li>\r\n	<li>\r\n		Close to two hours driving to Havana along the coast</li>\r\n	<li>\r\n		Walking tour in the old Havana, declared world heritage site by UNESCO in 1982, (arm square, cathedral square, San Francisco de Asis square, Hemingway Hotel and bar)</li>\r\n	<li>\r\n		Free time(we could visit the craft market)</li>\r\n	<li>\r\n		Lunch(prices vary depending on people&rsquo;s choice)</li>\r\n	<li>\r\n		Tour through new Havana (trying to cover most of it from the car, due to they are not walking distances. Mainly Vedado and Miramar)</li>\r\n	<li>\r\n		Stop in the Revolution Square</li>\r\n	<li>\r\n		Stop in the Capitol Building</li>\r\n	<li>\r\n		Diner</li>\r\n	<li>\r\n		Visit Tropicana (the guest pays for the cover there at the cabaret)</li>\r\n	<li>\r\n		After the show, drive back to Varadero</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Note: we are very flexible. We accept any change in case you would like to visit only the Tropicana or you would like to change the pickup times. You can tell us what you want to do.&nbsp;</p>\r\n', '<p>\r\n	Le Tropicana a &eacute;t&eacute; ouvert en 1939 comme le club le plus flamboyant au monde. Il a fonctionn&eacute; comme casino au cours des ann&eacute;es 50 avec une nouvelle salle de spectacle &quot;Salon Arcos De Cristales&quot;. Des c&eacute;l&eacute;brit&eacute;s internationales telles que Nat &quot;King&quot; Cole, Josephine Baker, et Carmen Miranda ont couronn&eacute; le spectacle. Aujourd&#39;hui, c&rsquo;est toujours le meilleur cabaret de l&#39;&icirc;le. Les plus de 200 artistes sont recrut&eacute;s sur trie parmi la cr&egrave;me-de-la-cr&egrave;me des danseurs et des chanteurs de Cuba. Ne manquez pas l&rsquo;occasion de trouver le &quot;paradis sous l&#39;&eacute;toile&quot; avec la plupart des rythmes cubains et des danses telles que danzon, dansonete, chachacha, rumba, meringue, salsa, entre autres.</p>\r\n<p>\r\n	<strong>Programme:</strong></p>\r\n<p>\r\n	- D&eacute;part de l&#39;h&ocirc;tel &agrave; 08h30.<br />\r\n	- Pr&egrave;s de deux heures de route jusqu&rsquo;&agrave; la Havane le long de la c&ocirc;te.<br />\r\n	- Visite &agrave; pied &agrave; travers la vieille Havane, d&eacute;clar&eacute;e site du patrimoine mondial par l&#39;UNESCO en 1982, (place d&rsquo;arme, place de la Cath&eacute;drale, la place San Francisco de Asis, H&ocirc;tel et bar Hemingway).<br />\r\n	- Temps libre (on pourrait visiter le march&eacute; artisanal).<br />\r\n	- D&eacute;jeuner (les prix varient selon le choix des personnes).<br />\r\n	- Visite &agrave; travers la nouvelle Havane(Essayant d&rsquo;en couvrir un plus grand p&eacute;rim&egrave;tre en voiture, car il ne s&rsquo;agit pas de distances de marche, surtout des endroits comme Vedado et Miramar).<br />\r\n	- Arr&ecirc;t &agrave; la Place de la R&eacute;volution.<br />\r\n	- Arr&ecirc;t au b&acirc;timent du Capitole.<br />\r\n	- Diner.<br />\r\n	- Visite au Tropicana (le client paie pour la couverture du cabaret).<br />\r\n	- Apr&egrave;s le spectacle, trajet retour &agrave; Varadero.<br />\r\n	&nbsp;<br />\r\n	Notez Bien: nous sommes tr&egrave;s flexibles. Nous acceptons toute modification au cas o&ugrave; vous souhaiteriez visiter seulement le Tropicana ou voudriez modifier les heures de d&eacute;part. Laissez-nous juste savoir ce dont vous avez envie.<br />\r\n	<br />\r\n	<br />\r\n	&nbsp;</p>\r\n', '', '<p>\r\n	Tropicana &egrave; stato aperto nel 1939 con lo scopo di essere il night club pi&ugrave; scintillante ed esclusivo del mondo. Fu un casin&ograve; fino al 1950 con la nuova sala &ldquo;Salon Arcos De Cristales&rdquo;. Celebrit&agrave; internazionale come Nat &ldquo;King&rdquo; Cole, Josephine Baker e Carmen Miranda diedero hanno condotto lo spettacolo. Oggi &egrave; ancora il miglior cabaret dell&rsquo;isola. Si esibiscono pi&ugrave; di 200 artisti scelti uno ad uno tra la crema di ballerini e cantanti cubani. Non perdere l&rsquo;occasione di vedere &ldquo;il paradiso sotto le stelle&rdquo; con la maggior parte dei ritmi e danze cubane come danzon, dansonete, chachacha, rumba, meringue, salsa tra gli altri.</p>\r\n<p>\r\n	<strong>Programma:</strong></p>\r\n<ul>\r\n	<li>\r\n		Ore 8.30 incontro presso la hall dell&rsquo;albergo</li>\r\n	<li>\r\n		Due ore in auto lungo la costa destinazione l&rsquo;Avana</li>\r\n	<li>\r\n		Giro a piedi per l&rsquo;Avana vecchia, dichiarato patrimonio dell&rsquo;umanit&agrave; dall&rsquo;Unesco nel 1982, (Piazza dei Armi,&nbsp; Piazza della Cattedrale,&nbsp;Piazza de San Fransceco de Asisis, Hemingway Hotel-bar)</li>\r\n	<li>\r\n		Tempo libero (possibile visitare il mercatino dell&rsquo;artigianato)</li>\r\n	<li>\r\n		PRANZO (PREZZI VARIANO SECONDO SCELTA)</li>\r\n	<li>\r\n		Giro attraverso l&rsquo;Avana moderna (il tour &egrave; per lo pi&ugrave; a bordo dell&rsquo;automobile in quanto nn ci sono tratti percorribili a piedi. Vedado e Miramar).</li>\r\n	<li>\r\n		Fermata in Revolution Piazza.</li>\r\n	<li>\r\n		Fermata in Campidoglio dal&rsquo;Avana.</li>\r\n	<li>\r\n		Cena.</li>\r\n	<li>\r\n		Visita al Tropicana ( i visitatori pagheranno sul posto per lo spettacolo del cabaret).</li>\r\n	<li>\r\n		Dopo lo spettacolo ritorno a Varadero.</li>\r\n</ul>\r\n<p>\r\n	<strong>Nota:</strong> accettiamo ogni vostro cambiamento in caso vogliate visitare solo il Tropicana oppure l&rsquo;orario dell&rsquo;incontro nella hall. Potete dirci cosa volete fare, saremo a vostra completa disposizione.</p>\r\n', '', '2014-08-18 20:36:28', NULL),
(15, 'Havana and the cannon shot', 'At 9 O’clock pm part of the old Havana is shaken by the sound of cannon fired from the fortress of San Carlos de la Cabaña.', 'À 21 heures une partie de la vieille Havane est secouée par le bruit du canon tiré depuis la forteresse de San Carlos de la Cabaña.', '', 'Alle ore 9,00 pm una parte della città vecchia dell’Avana è scossa dal suono dello sparo di un cannone dalla fortezza di San Carlos de la Cabana. ', '', '<p>\r\n	At 9 O&rsquo;clock pm part of the old Havana is shaken by the sound of cannon fired from the fortress of San Carlos de la Caba&ntilde;a. The ceremony is carried on by a squad of soldiers dressed in red and yellow-gold of the Spanish colonial army. They march towards the cannon, load it with gunpowder and light that the fuse. This beautiful and historical ceremony takes place everyday now in front of lots of tourists. However, it was an actual military procedure to announce the opening and closing of the wall gates.</p>\r\n<p>\r\n	<strong>Program:</strong></p>\r\n<ul>\r\n	<li>\r\n		Pick up in the hotel at 8:30am</li>\r\n	<li>\r\n		Close to two hours driving to Havana along the coast</li>\r\n	<li>\r\n		Walking tour in the old Havana, declared world heritage site by UNESCO in 1982, (arm square, cathedral square, San Francisco de Asis square, Hemingway Hotel and bar)</li>\r\n	<li>\r\n		Free time(we could visit the craft market)</li>\r\n	<li>\r\n		Lunch(prices vary depending on people&rsquo;s choice)</li>\r\n	<li>\r\n		Tour through new Havana (trying to cover most of it from the car, due to they are not walking distances. Mainly Vedado and Miramar)</li>\r\n	<li>\r\n		Stop in the Revolution Square</li>\r\n	<li>\r\n		Stop in the Capitol Building</li>\r\n	<li>\r\n		Diner(places and prices depend on people&rsquo;s choice)</li>\r\n	<li>\r\n		Visit the fortress to enjoy &ldquo; El Ca&ntilde;onazo de las nueves&rdquo;(the nine o&rsquo;clock cannon shot) ceremony</li>\r\n	<li>\r\n		Drive back to Varadero</li>\r\n</ul>\r\n', '<p>\r\n	&Agrave; 21 heures une partie de la vieille Havane est secou&eacute;e par le bruit du canon tir&eacute; depuis la forteresse de San Carlos de la Caba&ntilde;a. La c&eacute;r&eacute;monie est r&eacute;alis&eacute;e par une escouade de soldats v&ecirc;tus de rouge et de jaune-or de l&#39;arm&eacute;e coloniale espagnole. Ils marchent vers le canon, le chargent avec de la poudre et du plomb pour le sauter. Cette belle et historique c&eacute;r&eacute;monie a maintenant lieu tous les jours aux yeux de beaucoup de touristes. Cependant, c&rsquo;&eacute;tait en effet une proc&eacute;dure militaire qui annon&ccedil;ait l&#39;ouverture et la fermeture des portes du mur.</p>\r\n<p>\r\n	<strong>Programme:</strong></p>\r\n<p>\r\n	- D&eacute;part de l&#39;h&ocirc;tel &agrave; 08h30<br />\r\n	- Pr&egrave;s de deux heures de route jusqu&rsquo;&agrave; la Havane le long de la c&ocirc;te<br />\r\n	- Visite &agrave; pied &agrave; travers la vieille Havane, d&eacute;clar&eacute;e site du patrimoine mondial par l&#39;UNESCO en 1982, (place d&rsquo;arme, place de la Cath&eacute;drale, la place San Francisco de Asis, H&ocirc;tel et bar Hemingway)<br />\r\n	- Temps libre (on pourrait visiter le march&eacute; artisanal)<br />\r\n	- D&eacute;jeuner (les prix varient selon le choix des personnes)<br />\r\n	- Visite &agrave; travers la nouvelle Havane (Essayant d&rsquo;en couvrir un plus grand p&eacute;rim&egrave;tre en voiture, car il ne s&rsquo;agit pas de distances de marche, surtout des endroits comme Vedado et Miramar)<br />\r\n	- Arr&ecirc;t &agrave; la Place de la R&eacute;volution.</p>\r\n<p>\r\n	- Arr&ecirc;t au b&acirc;timent du Capitole.<br />\r\n	- Diner (les lieux et les prix d&eacute;pendent du choix des personnes).<br />\r\n	- Visite &agrave; la forteresse pour profiter de la c&eacute;r&eacute;monie de &quot;Ca&ntilde;onazo de las nueves&raquo; (les coups de canon de 21 heures).<br />\r\n	- Trajet retour &agrave; Varadero.</p>\r\n', '', '<p>\r\n	Alle ore 9,00 pm una parte della citt&agrave; vecchia dell&rsquo;Avana &egrave; scossa dal suono dello sparo di un cannone dalla fortezza di San Carlos de la Cabana. La cerimonia &egrave; presieduta da una plotone di soldati vestiti in rosso ed oro colori dell&rsquo;armata coloniale spagnola. Marciano in direzione del cannone, caricano con polvere da sparo ed accendono la miccia. Questa storica ed affascinante cerimonia viene celebrata ogni giorno di fronte a tantissimi turisti. Essa rappresenta una procedura militare che testimonia l&rsquo;apertura e la chiusura della porta sul muro di cinta accesso alla citt&agrave; vecchia.</p>\r\n<p>\r\n	<strong>&nbsp;&nbsp; Programma:</strong></p>\r\n<ul>\r\n	<li>\r\n		Ore 8.30 incontro presso la hall dell&rsquo;albergo</li>\r\n	<li>\r\n		Due ore in auto lungo la costa destinazione l&rsquo;Avana</li>\r\n	<li>\r\n		Giro a piedi per l&rsquo;Avana vecchia, dichiarato patrimonio dell&rsquo;umanit&agrave; dall&rsquo;Unesco nel 1982, (Piazza dei Armi,&nbsp; Piazza della Cattedrale,&nbsp;Piazza de San Fransceco de Asisis, Hemingway Hotel-bar)</li>\r\n	<li>\r\n		Tempo libero (possibile visitare il mercatino dell&rsquo;artigianato)</li>\r\n	<li>\r\n		Pranzo (prezzi variano secondo scelta)</li>\r\n	<li>\r\n		Giro attraverso l&rsquo;Avana moderna (il tour &egrave; per lo pi&ugrave; a bordo dell&rsquo;automobile in quanto nn ci sono tratti percorribili a piedi. Vedado e Miramar).</li>\r\n	<li>\r\n		Fermata in Revolution Piazza.</li>\r\n	<li>\r\n		Fermata in Campidoglio dal&rsquo;Avana.</li>\r\n	<li>\r\n		Cena.</li>\r\n	<li>\r\n		Visita della fortezza per ammirare la cerimonia dello sparo di cannone delle 9.00</li>\r\n	<li>\r\n		Dopo lo cerimonia ritorno a Varadero.</li>\r\n</ul>\r\n', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `create_time`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accommodations`
--
ALTER TABLE `accommodations`
  ADD CONSTRAINT `tours` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `photo_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`tours_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
