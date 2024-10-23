
-- --------------------------------------------------------

--
-- Table structure for table `about_banner`
--

CREATE TABLE `about_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_banner`
--

INSERT INTO `about_banner` (`id`, `title`, `occupation`, `description`) VALUES
(1, 'Siapa Saya?', 'Universitas Pembangunan Jaya Student, Front-End Developer, 3D Modeler, Mobile Developer, Game Developer', 'Seseorang yang penuh semangat dan ambisi, dengan kecintaan yang mendalam terhadap inovasi dan kreativitas. Sebagai IT Enthusiast yang memiliki latar belakang kuat di Komputer, saya telah mengumpulkan berbagai keterampilan dan pengalaman yang memungkinkan saya untuk melihat tantangan dari sudut pandang yang berbeda.'),
(2, 'Universitas Pembangunan Jaya Student', 'Informatics', 'Halo! Saya Athillah Naufal Al-Falah saat ini sedang menempuh pendidikan di Universitas Pembangunan Jaya, jurusan Informatika. Saya memiliki minat yang besar dalam teknologi dan pengembangan perangkat lunak, dan saya bersemangat untuk belajar dan mengeksplorasi berbagai aspek dari dunia digital.'),
(3, 'Goal', 'Game Developer', 'Dunia per-moddingan game menjadikan hal yang membawa saya pada pemrograman. Saya percaya bahwa game dapat menciptakan komunitas yang kondusif, kreatif, dan juga solid. Dengan menguasai bahasa pemrograman seperti C# dan engine yang dibutuhkan, saya bertekad untuk menciptakan game yang menghibur serta membebaskan pemain untuk modding.');
