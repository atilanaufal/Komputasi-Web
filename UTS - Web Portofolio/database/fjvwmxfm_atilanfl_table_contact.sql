
-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(15) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `subject`, `messages`) VALUES
(53, 'styles', 'atilanaufal03@gmail.com', '1231313', 'sdada', 'dadad'),
(54, 'saya', 'atilanaufal03@gmail.coam', '12123', 'adadad', 'dqv vxv'),
(55, 'pages', 'ARKFRFSOT08@GMAIL.COM', '13131', 'czczc', 'dadada'),
(57, 'vvxvcv', 'atil12@gmail.com', '122131', 'dadad', 'adad');
