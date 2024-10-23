
-- --------------------------------------------------------

--
-- Table structure for table `short_intr_card`
--

CREATE TABLE `short_intr_card` (
  `id` int(11) NOT NULL,
  `intr_card_icon` varchar(255) DEFAULT NULL,
  `intr_card_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `short_intr_card`
--

INSERT INTO `short_intr_card` (`id`, `intr_card_icon`, `intr_card_name`) VALUES
(1, '../asset/icon/godot.svg', 'Godot'),
(2, '../asset/icon/unity2.png', 'Unity'),
(3, '../asset/icon/ts.svg', 'TypeScript'),
(4, '../asset/icon/photoshop.png', 'Photoshop'),
(5, '../asset/icon/nodejs.svg', 'NodeJS'),
(6, '../asset/icon/mongodb.svg', 'MongoDB');
