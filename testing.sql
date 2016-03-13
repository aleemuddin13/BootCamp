-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 01:41 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `name`, `email`, `company`, `address`, `phone`) VALUES
(1, 'booper', 'Curabitur.vel.lectus@miac.net', 'Egestas', 'P.O. Box 582, 5767 Aenean Rd.', '-7822'),
(2, 'Omar shareef', 'amet.risus@euarcuMorbi.net', 'Nonsense', 'baudi ur maaz ghar', '-6400'),
(3, 'Sage', 'metus@orci.ca', 'Erat Neque Non LLC', 'Ap #633-190 Lectus Av.', '1-190-122-2129'),
(4, 'Maile', 'Praesent@sagittis.edu', 'Diam Proin Incorporated', '4462 Nullam St.', '620-9159'),
(5, 'Gabriel', 'diam@dui.co.uk', 'Lorem Auctor Ltd', 'P.O. Box 698, 8958 Risus. Rd.', '610-0172'),
(6, 'Ali', 'neque.tellus@Quisquetincidunt.co.uk', 'Proin Dolor Nulla Ltd', 'P.O. Box 259, 392 Integer Ave', '395-7052'),
(7, 'Orson', 'neque.sed.sem@aliquamiaculis.org', 'Quisque Industries', 'Ap #839-9273 Vulputate Av.', '1-626-374-3331'),
(8, 'Clare', 'mollis.nec.cursus@faucibus.net', 'Dignissim Company', 'P.O. Box 967, 7078 Interdum Rd.', '1-241-122-0020'),
(9, 'Ferris', 'lorem.vitae@hendreritidante.ca', 'Magna Suspendisse Ltd', 'P.O. Box 239, 9243 At, Av.', '730-0918'),
(10, 'Lance', 'Sed.pharetra.felis@Duismienim.co.uk', 'Nec Mollis Corp.', '399-5949 Pellentesque. Rd.', '313-6300'),
(11, 'Orson', 'Aliquam@sitametdiam.net', 'Neque Ltd', '694-1628 Et Av.', '258-9425'),
(12, 'Dolan', 'lobortis@tristiquesenectus.co.uk', 'Ipsum Phasellus Vitae PC', '4366 Placerat, Road', '1-630-181-9292'),
(13, 'Rose', 'Sed@lacus.net', 'Lacinia Mattis Integer PC', 'P.O. Box 313, 4701 Ac Rd.', '569-3429'),
(14, 'Amir', 'tortor.nibh@tincidunt.co.uk', 'Morbi Associates', '492-1932 Non St.', '1-125-605-5810'),
(15, 'Micah', 'at@egestasligulaNullam.com', 'Eu Corp.', '3736 Eu Road', '1-579-268-8702'),
(16, 'Gay', 'vulputate.nisi@ante.edu', 'Orci Lobortis Augue LLP', '5493 Quis Ave', '1-245-979-6386'),
(17, 'Josephine', 'lacinia.at.iaculis@adipiscing.ca', 'Ante Maecenas Corporation', '5525 Tincidunt Road', '449-8085'),
(18, 'Ronan', 'orci@accumsaninterdumlibero.co.uk', 'Vitae Corp.', '396-1566 Facilisis Av.', '1-942-269-9690'),
(19, 'Ursula', 'Quisque.fringilla@etnetus.org', 'Ac Inc.', 'P.O. Box 909, 6734 Porttitor Rd.', '1-261-505-8165'),
(20, 'Tad', 'cursus@vestibulum.ca', 'Lobortis Foundation', 'P.O. Box 424, 4832 Arcu. Street', '1-499-629-5152'),
(21, 'Charity', 'elit@nulla.edu', 'At Industries', 'Ap #980-232 Amet Street', '1-534-492-1831'),
(22, 'Baker', 'purus.accumsan@Vivamusnisi.net', 'Elit Pretium Et Industries', 'P.O. Box 951, 5045 Nulla St.', '845-1326'),
(23, 'Jolie', 'amet@molestietellus.edu', 'Et Ultrices Posuere LLC', 'Ap #543-6578 Aenean St.', '401-9455'),
(24, 'Dacey', 'non.hendrerit@montes.com', 'Nunc Ac Institute', 'P.O. Box 212, 4776 Purus Rd.', '1-556-685-3758'),
(25, 'Remedios', 'erat.eget.tincidunt@id.ca', 'Pellentesque Tellus Sem Incorporated', 'Ap #108-5790 Sed St.', '1-418-380-4232'),
(26, 'Joseph', 'natoque@nonfeugiat.net', 'Dictum Consulting', '358-3424 Nibh. Rd.', '309-7710'),
(27, 'Quemby', 'amet@antelectusconvallis.co.uk', 'Lorem Institute', '458-8536 Erat. Avenue', '582-5260'),
(28, 'Helen', 'facilisis.Suspendisse@mifelisadipiscing.net', 'Lacus Aliquam Ltd', '993-3301 Ligula St.', '1-428-208-4487'),
(29, 'Jocelyn', 'ornare@loremutaliquam.co.uk', 'Tincidunt Corporation', '7784 Dui. St.', '1-754-650-9459'),
(30, 'Shannon', 'vel.quam@SedmolestieSed.com', 'Convallis Corporation', '8701 Tristique St.', '536-9307'),
(31, 'Jordan', 'tellus.faucibus@ipsum.org', 'Suspendisse Company', '1304 Adipiscing Road', '724-3642'),
(32, 'Roanna', 'vehicula.risus.Nulla@gravidasagittis.ca', 'Placerat Augue Incorporated', '325-5155 Neque Road', '1-679-734-7247'),
(33, 'Virginia', 'Quisque.imperdiet.erat@est.co.uk', 'Dolor Limited', '300 Quisque Av.', '1-652-389-6008'),
(34, 'Aubrey', 'consectetuer@penatibusetmagnis.ca', 'Urna Associates', '361-8313 Consectetuer Rd.', '1-739-654-3222'),
(35, 'Lyle', 'mauris.Integer.sem@utmi.net', 'Dictum Limited', 'P.O. Box 448, 1349 Est, Road', '1-472-926-1912'),
(36, 'Madaline', 'Mauris.quis.turpis@et.edu', 'Auctor Quis Incorporated', 'Ap #714-3416 Lectus Road', '1-998-469-8959'),
(37, 'Carlos', 'sociis@vel.org', 'Ultrices Corporation', '837-5879 Cursus Road', '1-284-313-8721'),
(38, 'Forrest', 'Cras.dolor.dolor@luctussitamet.ca', 'Molestie Pharetra Nibh Industries', 'Ap #384-9840 Ligula. Ave', '1-843-116-4985'),
(39, 'Miranda', 'risus@temporloremeget.com', 'Cursus Non Incorporated', 'P.O. Box 792, 1358 Integer Av.', '919-1491'),
(40, 'Palmer', 'risus.Morbi@DuisgravidaPraesent.co.uk', 'Eget Associates', '928 Eu Rd.', '1-765-625-9335'),
(41, 'Minerva', 'erat.Sed@aodiosemper.org', 'Accumsan Sed Facilisis Limited', 'Ap #240-6880 At Av.', '1-633-332-6316'),
(42, 'Cyrus', 'quis.lectus.Nullam@eget.ca', 'Parturient Montes Nascetur Limited', '2052 Penatibus Rd.', '589-9818'),
(43, 'Jocelyn', 'Nunc.mauris@dictumcursus.com', 'A Odio Semper Inc.', 'Ap #822-5561 Sem, St.', '173-8591'),
(44, 'Maia', 'lectus.a@musAenean.edu', 'Leo Cras Vehicula Company', '338-7844 Ridiculus Road', '1-158-859-7337'),
(45, 'Edan', 'Fusce.diam@euismodacfermentum.ca', 'In Condimentum Incorporated', 'Ap #744-410 Enim. Road', '113-0877'),
(46, 'Priscilla', 'sociis.natoque@euultrices.ca', 'Non Nisi LLC', 'Ap #738-2284 Nunc Rd.', '1-454-291-6356'),
(47, 'Keiko', 'nisl.Quisque@milorem.com', 'Nonummy Ultricies Institute', '963-2330 Bibendum Street', '1-386-582-5872'),
(48, 'Kylie', 'sagittis.augue@lorem.com', 'At Pretium Foundation', 'P.O. Box 489, 7301 Dis Avenue', '760-1901'),
(49, 'Noelle', 'cubilia.Curae@Proin.net', 'Sit Foundation', '642-3923 Malesuada Rd.', '165-5476'),
(50, 'Ashton', 'et.ultrices.posuere@Phasellusdapibusquam.com', 'Lacus Mauris LLP', '234-5898 Lacus Avenue', '340-1586'),
(51, 'Bevis', 'Duis.gravida@Quisque.org', 'Enim Industries', '479-8386 Sociis Street', '1-500-292-3992'),
(52, 'Courtney', 'adipiscing@temporarcu.net', 'Fusce Feugiat Lorem Consulting', 'P.O. Box 551, 3474 Libero Rd.', '765-8278'),
(53, 'Abigail', 'sociis.natoque.penatibus@nuncsitamet.co.uk', 'At Arcu Vestibulum Institute', 'P.O. Box 817, 5597 Arcu Avenue', '363-3783'),
(54, 'Pamela', 'sed.facilisis@nectellusNunc.co.uk', 'Sit Amet Foundation', 'Ap #155-752 Eleifend. Rd.', '165-6793'),
(55, 'Trevor', 'Proin.sed@eliterat.edu', 'Massa Integer Corporation', '2862 Sit Avenue', '375-2265'),
(56, 'Shay', 'nulla@sitamet.org', 'Lorem Institute', 'P.O. Box 369, 3470 Vitae, Rd.', '462-8809'),
(57, 'Danielle', 'laoreet.posuere@FuscefeugiatLorem.com', 'Mattis Corp.', '5575 Integer Street', '1-118-812-8410'),
(58, 'Aurora', 'dignissim@ultriciesdignissimlacus.org', 'Nunc Corp.', '859-4915 Tincidunt St.', '1-142-253-4584'),
(59, 'Galvin', 'in@nuncullamcorper.ca', 'Mollis Associates', '4521 Pellentesque Av.', '345-6820'),
(60, 'Melyssa', 'vulputate.lacus.Cras@mienim.ca', 'Facilisis Vitae Orci Limited', 'Ap #253-7895 Amet Rd.', '1-595-782-4933'),
(61, 'Ezra', 'pharetra.ut.pharetra@Namligula.org', 'Senectus Et Netus Incorporated', 'Ap #402-1855 Mi St.', '1-345-903-0668'),
(62, 'Levi', 'Nulla.aliquet@anuncIn.co.uk', 'Luctus LLP', 'P.O. Box 889, 4798 Egestas Avenue', '275-5863'),
(63, 'Yolanda', 'et.netus@vitaenibhDonec.ca', 'Scelerisque Neque Sed Inc.', '672-211 Magna. Rd.', '1-249-279-0267'),
(64, 'Elizabeth', 'ut.odio.vel@nisl.co.uk', 'Nisl Nulla Eu Associates', '638-3182 Blandit Ave', '601-0464'),
(65, 'Rana', 'Quisque.ornare.tortor@consectetuercursus.ca', 'Turpis Aliquam LLP', '9667 Egestas Avenue', '888-8581'),
(66, 'Pearl', 'ac@Nunc.edu', 'Luctus LLC', 'Ap #630-9421 Semper St.', '266-6863'),
(67, 'Dalton', 'turpis.egestas@justosit.co.uk', 'Malesuada Company', '548-1946 Et St.', '694-6505'),
(68, 'Macaulay', 'in.consequat@Inscelerisque.co.uk', 'Mauris Sit Amet Ltd', 'Ap #765-3045 Arcu. St.', '580-7230'),
(69, 'Amethyst', 'cursus@justoPraesentluctus.ca', 'Vestibulum Foundation', '2209 Consectetuer Street', '693-6768'),
(70, 'Elaine', 'egestas.lacinia.Sed@diam.ca', 'Libero Company', '137-1858 Nec Avenue', '380-4543'),
(71, 'Phoebe', 'est.Mauris.eu@Maecenas.net', 'Quisque Purus Sapien Corp.', 'Ap #660-7030 Etiam Avenue', '1-135-966-5405'),
(72, 'Jeremy', 'Aliquam@vitaealiquet.edu', 'Magna Company', 'P.O. Box 994, 197 Est. Road', '354-6855'),
(73, 'Kirsten', 'consequat.dolor@sodalesatvelit.edu', 'Massa Suspendisse Ltd', '223-5925 Quis Av.', '1-314-920-9908'),
(74, 'Xanthus', 'cubilia.Curae.Phasellus@egetvarius.ca', 'Turpis Aliquam Adipiscing LLP', 'P.O. Box 857, 5760 Aliquam Road', '1-367-738-0947'),
(75, 'Edan', 'ultrices.iaculis@mauris.ca', 'Eu Turpis LLC', 'Ap #175-2521 Malesuada Rd.', '659-1827'),
(76, 'Michael', 'sed.pede.Cum@risusa.co.uk', 'Quis Diam Pellentesque Industries', 'P.O. Box 687, 7180 Ultrices Road', '602-0055'),
(77, 'Isaiah', 'Nullam.ut@sit.co.uk', 'Tincidunt Corp.', '9227 Nunc St.', '1-334-464-3894'),
(78, 'Marshall', 'eget.mollis.lectus@faucibusorciluctus.org', 'Ligula Tortor Foundation', '762 Pretium St.', '814-1392'),
(79, 'Ria', 'risus.Quisque.libero@liberolacusvarius.co.uk', 'Aliquam Associates', '363-209 Cursus. St.', '1-463-848-4718'),
(80, 'Dale', 'Suspendisse.ac.metus@diamnunc.co.uk', 'Dui Semper PC', 'P.O. Box 754, 9735 Enim, Rd.', '484-1341'),
(81, 'Vance', 'metus@vitae.net', 'Tristique Aliquet Phasellus Industries', 'P.O. Box 162, 1774 Ultricies Street', '384-6393'),
(82, 'Kathleen', 'semper.erat.in@esttempor.org', 'Arcu Curabitur Foundation', 'P.O. Box 360, 6480 Adipiscing Street', '1-188-737-6898'),
(83, 'Blaze', 'turpis.vitae.purus@porttitor.edu', 'Quisque Nonummy Associates', 'P.O. Box 716, 7120 Pharetra. Rd.', '1-310-655-9618'),
(84, 'William', 'vel@eulacusQuisque.ca', 'Est LLP', 'P.O. Box 270, 8688 Arcu Rd.', '1-234-939-7215'),
(85, 'Rina', 'commodo@adipiscinglacus.com', 'Mauris Eu Elit Ltd', 'P.O. Box 485, 6124 Adipiscing Road', '1-410-821-2888'),
(86, 'Hedley', 'a@vulputate.org', 'Lacinia Corporation', '621-1662 Nunc Ave', '1-449-822-4764'),
(87, 'Catherine', 'tempus.scelerisque.lorem@vitaesemperegestas.edu', 'A Arcu Inc.', '5745 Curabitur Avenue', '505-1805'),
(88, 'Stuart', 'mattis.Cras@Nunclaoreetlectus.net', 'Orci Industries', 'P.O. Box 817, 5761 Et Rd.', '887-8928'),
(89, 'Stuart', 'sed@diamvelarcu.org', 'Sed Incorporated', 'P.O. Box 682, 3204 Vitae Avenue', '998-5353'),
(90, 'Kelsey', 'Sed.auctor@sem.ca', 'Justo Proin Consulting', 'Ap #805-1243 Tellus Ave', '472-0249'),
(91, 'Graham', 'arcu@nec.com', 'Id Foundation', '3547 Lectus. Street', '146-6795'),
(92, 'Aphrodite', 'egestas.hendrerit.neque@maurisidsapien.org', 'Luctus Aliquet LLP', 'Ap #556-6786 Natoque Rd.', '1-495-777-7308'),
(93, 'Edan', 'elit.Nulla.facilisi@Suspendisse.org', 'Libero Donec Consectetuer Corporation', '352-4595 Nunc Avenue', '642-9342'),
(94, 'Faith', 'elit.Nulla.facilisi@ipsumporta.edu', 'Suspendisse Non Leo Foundation', 'P.O. Box 147, 4137 Sociosqu Rd.', '1-189-191-9693'),
(95, 'Ezekiel', 'ligula.consectetuer.rhoncus@congueIn.net', 'Lectus Ante Corporation', 'P.O. Box 622, 4922 Semper, Rd.', '958-9595'),
(96, 'Noble', 'risus.Nulla@insodaleselit.com', 'Gravida Mauris Inc.', '392-3868 Lorem Street', '902-2847'),
(97, 'Elijah', 'arcu.Vestibulum.ut@felis.com', 'Volutpat Industries', '5971 Leo Ave', '1-870-656-4341'),
(98, 'Myra', 'fringilla@antedictummi.com', 'Nulla Eget Metus Inc.', 'P.O. Box 534, 8299 Cras St.', '856-2644'),
(99, 'Aristotle', 'lobortis.augue.scelerisque@posuerecubiliaCurae.org', 'Curabitur Consequat Company', '8451 Justo Rd.', '1-903-835-7080'),
(100, 'Pascale', 'tempor.bibendum.Donec@mattis.com', 'Et Lacinia Associates', '967-8466 Dictum Rd.', '1-451-135-9427');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
