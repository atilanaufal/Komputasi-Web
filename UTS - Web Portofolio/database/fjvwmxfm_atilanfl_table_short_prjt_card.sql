
-- --------------------------------------------------------

--
-- Table structure for table `short_prjt_card`
--

CREATE TABLE `short_prjt_card` (
  `id` int(11) NOT NULL,
  `prjt_card_image` varchar(255) DEFAULT NULL,
  `prjt_card_name` varchar(255) DEFAULT NULL,
  `prjt_card_desc` varchar(255) DEFAULT NULL,
  `prjt_card_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `short_prjt_card`
--

INSERT INTO `short_prjt_card` (`id`, `prjt_card_image`, `prjt_card_name`, `prjt_card_desc`, `prjt_card_link`) VALUES
(1, 'asset/image/game.png', 'RocPaSor', 'Game suit sederhana untuk menghilangkan rasa bosan', 'https://github.com/atilanaufal/RocPaSors-Game'),
(2, 'asset/image/note_app.jpg', 'Usenote', 'Aplikasi note serbaguna ringan untuk android', 'https://github.com/atilanaufal/UseNote');
