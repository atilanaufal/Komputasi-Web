
-- --------------------------------------------------------

--
-- Table structure for table `contact_content`
--

CREATE TABLE `contact_content` (
  `id` int(11) NOT NULL,
  `contact_desc` text DEFAULT NULL,
  `contact_link` varchar(255) DEFAULT NULL,
  `contact_icon` varchar(255) DEFAULT NULL,
  `contact_icon_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_content`
--

INSERT INTO `contact_content` (`id`, `contact_desc`, `contact_link`, `contact_icon`, `contact_icon_name`) VALUES
(1, 'Dengan menghubungi saya, Anda dapat meminta informasi lebih lanjut tentang layanan saya, memberikan saran atau umpan balik, atau bahkan memulai proyek baru bersama saya. Saya menantikan kesempatan untuk bekerja sama dengan Anda!', 'https://github.com/atilanaufal/atilanaufal, https://www.linkedin.com/in/athillah-naufal-al-falah-4284a0320/, https://www.reddit.com/user/CrossRES_03/', '../asset/icon/github.svg, ../asset/icon/linkedin.png, ../asset/icon/reddit.svg', 'Github, LinkedIn, Reddit');
