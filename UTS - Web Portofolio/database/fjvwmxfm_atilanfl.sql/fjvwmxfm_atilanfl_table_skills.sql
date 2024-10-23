
-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `sk_id` int(11) NOT NULL,
  `sk_icon` varchar(255) DEFAULT NULL,
  `sk_type` varchar(50) DEFAULT NULL,
  `sk_name` varchar(50) DEFAULT NULL,
  `sk_perf` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`sk_id`, `sk_icon`, `sk_type`, `sk_name`, `sk_perf`) VALUES
(1, '../asset/icon/js.png', 'Programming', 'JavaScript', 'Performance - Good'),
(2, '../asset/icon/dart.svg', 'Programming', 'Dart', 'Performance - Good'),
(3, '../asset/icon/c-sharp.png', 'Programming', 'C#', 'Performance - Good'),
(4, '../asset/icon/figma.png', 'UI/UX<', 'Figma', 'Performance - Good'),
(5, '../asset/icon/blender.png', '3D Model', 'Blender', 'Performance - Good'),
(6, '../asset/icon/react.svg', 'Programming', 'React', 'Performance - Good'),
(7, '../asset/icon/react.svg', 'Programming', 'React Native', 'Performance - Good'),
(8, '../asset/icon/php.png', 'Programming', 'PHP', 'Performance - Good'),
(9, '../asset/icon/sql.png', 'Programming', 'SQL', 'Performance - Good'),
(10, '../asset/icon/html.png', 'Front-End', 'HTML', 'Performance - Good'),
(11, '../asset/icon/css.png', 'Front-End', 'CSS', 'Performance - Good'),
(12, '../asset/icon/bootstrap.png', 'Front-End', 'Bootstrap', 'Performance - Good'),
(13, '../asset/icon/flutter.svg', 'Programming', 'Flutter', 'Performance - Good');
