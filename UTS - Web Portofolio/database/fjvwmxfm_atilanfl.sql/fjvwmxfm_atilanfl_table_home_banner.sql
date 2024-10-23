
-- --------------------------------------------------------

--
-- Table structure for table `home_banner`
--

CREATE TABLE `home_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `home_banner`
--

INSERT INTO `home_banner` (`id`, `title`, `occupation`, `description`) VALUES
(1, 'Atila NFL', 'Universitas Pembangunan Jaya Student', 'Seseorang yang penuh semangat dan ambisi, dengan kecintaan yang mendalam terhadap inovasi dan kreativitas. Sebagai IT Enthusiast yang memiliki latar belakang kuat di Komputer, saya telah mengumpulkan berbagai keterampilan dan pengalaman yang memungkinkan saya untuk melihat tantangan dari sudut pandang yang berbeda.');
