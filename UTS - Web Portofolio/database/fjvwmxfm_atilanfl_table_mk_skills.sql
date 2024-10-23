
-- --------------------------------------------------------

--
-- Table structure for table `mk_skills`
--

CREATE TABLE `mk_skills` (
  `msk_id` int(11) NOT NULL,
  `msk_icon` varchar(255) DEFAULT NULL,
  `msk_type` varchar(50) DEFAULT NULL,
  `msk_desc` mediumtext DEFAULT NULL,
  `msk_perf` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mk_skills`
--

INSERT INTO `mk_skills` (`msk_id`, `msk_icon`, `msk_type`, `msk_desc`, `msk_perf`) VALUES
(1, '../asset/icon/phone-mobile.svg', 'UI/UX Designer', 'Ahli merancang UI/UX yang menarik dengan keahlian di Figma untuk membuat wireframe, prototipe, dan mockup.', '★★★'),
(2, '../asset/icon/laptop-code.svg', 'Front-End Developer', 'Ahli dalam HTML, CSS, JavaScript, dan framework seperti React untuk membangun antarmuka web yang responsif dan interaktif.', '★★★'),
(3, '../asset/icon/game.svg', 'Game Developer', 'Dapat mengembangkan game sederhana menggunakan pure C#, fokus pada mekanika menarik dan gameplay lancar.', '★');
