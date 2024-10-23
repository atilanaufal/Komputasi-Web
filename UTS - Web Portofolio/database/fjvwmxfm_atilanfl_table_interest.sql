
-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `intr_id` int(11) NOT NULL,
  `intr_icon` varchar(255) DEFAULT NULL,
  `intr_type` varchar(50) DEFAULT NULL,
  `intr_name` varchar(50) DEFAULT NULL,
  `intr_desc` text DEFAULT NULL,
  `intr_prty` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`intr_id`, `intr_icon`, `intr_type`, `intr_name`, `intr_desc`, `intr_prty`) VALUES
(1, '../asset/icon/photoshop.png', 'Image Editing App', 'Photoshop', 'Sangat dibutuhkan dalam proses texturing model 2D dan 3D serta UV Mapping untuk object 3D', 'High Priority'),
(2, '../asset/icon//godot.png', 'Game Engine', 'Godot', 'Game engine yang ringan, mudah digunakan, dan gratis. Engine ini sangat cocok untuk pemula', 'High Priority'),
(3, '../asset/icon/unity2.png', 'Game Engine', 'Unity', 'Game engine yang kuat yang menyediakan lebih banyak variasi fitur dan mekanik pada game', 'High Priority');
