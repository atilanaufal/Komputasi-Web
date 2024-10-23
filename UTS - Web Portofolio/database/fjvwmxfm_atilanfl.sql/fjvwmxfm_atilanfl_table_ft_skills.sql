
-- --------------------------------------------------------

--
-- Table structure for table `ft_skills`
--

CREATE TABLE `ft_skills` (
  `ft_sk_id` int(11) NOT NULL,
  `ft_sk_icon` varchar(255) DEFAULT NULL,
  `ft_sk_type` varchar(50) DEFAULT NULL,
  `ft_sk_name` varchar(50) DEFAULT NULL,
  `ft_sk_perf` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ft_skills`
--

INSERT INTO `ft_skills` (`ft_sk_id`, `ft_sk_icon`, `ft_sk_type`, `ft_sk_name`, `ft_sk_perf`) VALUES
(1, '../asset/icon/js.png', 'Programming', 'JavaScript', 'Performance - Good'),
(2, '../asset/icon/blender.png', '3D Model', 'Blender', 'Performance - Good'),
(3, '../asset/icon/figma.png', 'UI/UX<', 'Figma', 'Performance - Good');
