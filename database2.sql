-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `dosen_pengajar` varchar(70) NOT NULL,
  `ruang_kuliah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--