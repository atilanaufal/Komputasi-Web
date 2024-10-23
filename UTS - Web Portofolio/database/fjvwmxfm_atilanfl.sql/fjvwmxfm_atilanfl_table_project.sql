
-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `prjt_id` int(11) NOT NULL,
  `prjt_link` varchar(255) DEFAULT NULL,
  `prjt_img` varchar(255) DEFAULT NULL,
  `prjt_type` varchar(25) DEFAULT NULL,
  `prjt_name` varchar(50) DEFAULT NULL,
  `prjt_icon` varchar(255) DEFAULT NULL,
  `prjt_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`prjt_id`, `prjt_link`, `prjt_img`, `prjt_type`, `prjt_name`, `prjt_icon`, `prjt_desc`) VALUES
(1, 'https://github.com/atilanaufal/RocPaSors-Game', '../asset/image/game.png', 'Desktop Game', 'RocPaSor', '../asset/icon/c-sharp.png,../asset/icon/visual-studio.svg', 'Sebuah permainan klasik yang dihidupkan kembali dengan sentuhan modern menggunakan Pure C# menciptakan pengalaman yang asik.'),
(2, 'https://www.figma.com/design/1kXcjkhcySBhBEVtbZiNux/Techsistant-2.0?node-id=0-1&t=hXpwlaYBXS0Feu0R-1', '../asset/image/techsistant.png', 'Figma Mobile App Design', 'Techsistant', '../asset/icon/figma.svg', 'Aplikasi yang dirancang untuk memenuhi kebutuhan pengguna dalam servis dan jual beli gadget. Pelajari lebih lanjut tentang fitur-fitur yang membuatnya unik!'),
(3, 'https://www.figma.com/design/LCze3I47MgdWm8WvXRC85W/IMK-0ne%26Grow-team-library?node-id=0-1&t=lVZTgmLy3hlBhBrz-1', '../asset/image/onegrow.png', 'Figma Mobile App Design', 'One&Grow', '../asset/icon/figma.svg', 'Sebuah aplikasi yang dirancang khusus bagi orang tua yang memantau kebutuhan gizi, jadwal makan dan tidur, tumbuh kembang, serta aktivitas harian anak dari mana saja. '),
(4, 'https://github.com/atilanaufal/UseNote', '../asset/image/note_app.jpg', 'Mobile App', 'UseNote', '../asset/icon/dart.svg, ../asset/icon/flutter.svg, ../asset/icon/vscode.svg', ' Sebuah aplikasi catatan serbaguna yang memudahkan pencatatan dan pengelolaan tugas, dilengkapi dengan pengingat dan sinkronisasi untuk mendukung produktivitas harian.'),
(5, 'https://www.freecodecamp.org/learn/2022/responsive-web-design/build-a-survey-form-project/build-a-survey-form', '../asset/image/fcc-survey.png', 'Website', 'Form Page', '../asset/icon/html.svg,../asset/icon/css.svg, ../asset/icon/vscode.svg', 'Website form pendaftaran Santuy Academy Club adalah platform untuk penggemar game Blue Archive. Daftarkan diri kalian dan bergabung lah dengan kami di club santuy academy ');
