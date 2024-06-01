-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for travel
CREATE DATABASE IF NOT EXISTS `travel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `travel`;

-- Dumping structure for table travel.data_tours
CREATE TABLE IF NOT EXISTS `data_tours` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_tour_leader` int DEFAULT NULL,
  `nama_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_berangkat_tour` date DEFAULT NULL,
  `destinasi_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_selesai_tour` date DEFAULT NULL,
  `rombongan_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_peserta_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kendaraan_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon_pic_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travel.data_tours: ~3 rows (approximately)
REPLACE INTO `data_tours` (`id`, `id_tour_leader`, `nama_tour`, `tgl_berangkat_tour`, `destinasi_tour`, `tgl_selesai_tour`, `rombongan_tour`, `jumlah_peserta_tour`, `jenis_kendaraan_tour`, `jumlah_kendaraan`, `pic_tour`, `no_telepon_pic_tour`, `created_at`, `updated_at`) VALUES
	(1, 1, 'TOUR SMAN06', '2024-04-20', 'Bali', '2024-04-23', 'SMKBN', '300', 'bus', '5', NULL, NULL, NULL, NULL),
	(2, 2, 'TOUR SMKBN', '2024-05-20', 'Yogyakarta', '2024-05-25', 'SMAN1', '400', 'bus', '7', NULL, NULL, NULL, NULL),
	(4, 1, 'TOUR SMAN27', '2024-06-24', 'Semarang', '2024-06-29', 'SMKN6', '450', 'bus', '9', NULL, NULL, NULL, NULL);

-- Dumping structure for table travel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travel.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table travel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travel.migrations: ~6 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_04_19_160238_create_pesertas_table', 1),
	(6, '2024_04_19_161131_create_data_tours_table', 1);

-- Dumping structure for table travel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travel.password_resets: ~0 rows (approximately)

-- Dumping structure for table travel.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travel.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table travel.pesertas
CREATE TABLE IF NOT EXISTS `pesertas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_tour` int DEFAULT NULL,
  `id_tour_leader` int DEFAULT NULL,
  `nama_peserta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_peserta_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_bus_kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_scan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travel.pesertas: ~3 rows (approximately)
REPLACE INTO `pesertas` (`id`, `id_tour`, `id_tour_leader`, `nama_peserta`, `no_telepon`, `no_peserta_tour`, `kelas`, `jurusan`, `bidang`, `no_bus_kendaraan`, `waktu_scan`, `created_at`, `updated_at`) VALUES
	(2, 1, NULL, 'atha nabhan muslim', '0987656789', '00001', NULL, 'RPL', NULL, '1', NULL, NULL, '2024-04-20 12:29:45'),
	(3, 2, NULL, 'sdsfsdf2', '233233', '00002', NULL, 'asdasd', NULL, '2', NULL, '2024-04-20 01:51:27', '2024-04-20 01:51:27'),
	(4, NULL, NULL, 'Atha Nabhan.M', '08977833818', '00003', NULL, 'RPL', NULL, '4', NULL, '2024-04-20 10:58:14', '2024-04-20 10:58:14');

-- Dumping structure for procedure travel.sp_datatable_peserta_tour
DELIMITER //
CREATE PROCEDURE `sp_datatable_peserta_tour`()
BEGIN

SELECT
	pesertas.id,
	pesertas.no_peserta_tour,
	pesertas.nama_peserta,
	pesertas.no_telepon,
	pesertas.id_tour,
	data_tours.rombongan_tour,
	data_tours.tgl_berangkat_tour
FROM pesertas LEFT JOIN data_tours ON pesertas.id_tour=data_tours.id; 

END//
DELIMITER ;

-- Dumping structure for procedure travel.sp_data_tour
DELIMITER //
CREATE PROCEDURE `sp_data_tour`()
BEGIN

	SELECT
	data_tours.id,
	data_tours.nama_tour,
	data_tours.tgl_berangkat_tour,
	data_tours.tgl_selesai_tour,
	data_tours.id_tour_leader,
	users.nama,
	users.no_telepon
	FROM data_tours LEFT JOIN users ON data_tours.id_tour_leader=users.id; 

END//
DELIMITER ;

-- Dumping structure for procedure travel.sp_detail_peserta
DELIMITER //
CREATE PROCEDURE `sp_detail_peserta`(
	INOUT `vpeserta` VARCHAR(255)
)
BEGIN

SELECT*FROM pesertas LEFT JOIN data_tours ON pesertas.id_tour=data_tours.id WHERE pesertas.no_peserta_tour = vpeserta; 

END//
DELIMITER ;

-- Dumping structure for procedure travel.sp_generate_nopes
DELIMITER //
CREATE PROCEDURE `sp_generate_nopes`()
BEGIN
		SELECT LPAD(
		    	COALESCE(MAX(CAST(SUBSTRING(no_peserta_tour, 1, 5) AS UNSIGNED)), 0) + 1, 5, '0'
		) AS generateno
		FROM pesertas ORDER BY id desc;

END//
DELIMITER ;

-- Dumping structure for table travel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travel.users: ~2 rows (approximately)
REPLACE INTO `users` (`id`, `nama`, `email`, `no_telepon`, `username`, `password`, `role`, `jenis_kelamin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'atha', 'atha@gmail.com', '08977833818', 'athanabhan', 'admin123', 'tour leader', 'laki-laki', NULL, NULL, NULL),
	(2, 'alifan', NULL, '098767898768', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
