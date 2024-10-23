
-- --------------------------------------------------------

--
-- Table structure for table `short_sk_card`
--

CREATE TABLE `short_sk_card` (
  `id` int(11) NOT NULL,
  `sk_card_icon` varchar(255) DEFAULT NULL,
  `sk_card_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `short_sk_card`
--

INSERT INTO `short_sk_card` (`id`, `sk_card_icon`, `sk_card_name`) VALUES
(1, '../asset/icon/js.png', 'Javascript'),
(2, '../asset/icon/c-sharp.png', 'C#'),
(3, '../asset/icon/php.png', 'PHP'),
(4, '../asset/icon/react.svg', 'React'),
(5, '../asset/icon/dart.svg', 'Dart'),
(6, '../asset/icon/flutter.svg', 'Flutter');
