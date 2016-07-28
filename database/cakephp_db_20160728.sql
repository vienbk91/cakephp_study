-- --------------------------------------------------------
-- ホスト:                          127.0.0.1
-- サーバのバージョン:                    10.1.10-MariaDB - mariadb.org binary distribution
-- サーバー OS:                      Win32
-- HeidiSQL バージョン:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for cakephp_db
DROP DATABASE IF EXISTS `cakephp_db`;
CREATE DATABASE IF NOT EXISTS `cakephp_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cakephp_db`;


-- Dumping structure for テーブル cakephp_db.books
DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(13) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Dumping data for table cakephp_db.books: ~39 rows (approximately)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `isbn`, `title`, `description`) VALUES
	(1, 'abc', 'Kĩ thuật lập trình', 'abc'),
	(2, 'c,c++', 'Lập trình C', 'lap trinh c'),
	(3, 'C++', 'Cấu trúc dữ liệu và giả thuật', 'abc'),
	(4, 'php', 'PHP căn bản', 'php, lap trinh php'),
	(5, 'php nc', 'PHP Nâng cao', 'php,php nang cao'),
	(6, 'php fw', 'PHP Framework', 'php, php framework'),
	(7, 'abcxyz', 'Kĩ thuật lập trình', 'Kĩ thuật lập trình'),
	(8, 'c,c++', 'Lập trình C', 'Lap trinh C can ban'),
	(9, 'C++', 'Cấu trúc dữ liệu và giả thuật', 'Cau truc du lieu va giai thuat'),
	(10, 'php', 'PHP căn bản', 'php, lap trinh php'),
	(11, 'php nc', 'PHP Nâng cao', 'php,php nang cao'),
	(12, 'php fw', 'PHP Framework', 'php, php framework'),
	(13, 'abc', 'Lập trình ứng dụng web tập I', 'Lập trình ứng dụng web tập I'),
	(14, 'abc', 'Lập trình ứng dụng web tập II', 'abc'),
	(15, 'abc', 'Lập trình web với CakePHP', 'abc'),
	(16, 'acb', 'Lập trình web với CodeIgniter', 'abc'),
	(17, 'abc', 'Tutorial covered by Thái Thanh Phong ^0^', 'abc'),
	(18, 'abcxyz', 'Kĩ thuật lập trình', 'Kĩ thuật lập trình'),
	(19, 'c,c++', 'Lập trình C', 'Lap trinh C can ban'),
	(20, 'C++', 'Cấu trúc dữ liệu và giả thuật', 'Cau truc du lieu va giai thuat'),
	(21, 'php', 'PHP căn bản', 'php, lap trinh php'),
	(22, 'php nc', 'PHP Nâng cao', 'php,php nang cao'),
	(23, 'php fw', 'PHP Framework', 'php, php framework'),
	(24, 'abc', 'Lập trình ứng dụng web tập I', 'Lập trình ứng dụng web tập I'),
	(25, 'abc', 'Lập trình ứng dụng web tập II', 'abc'),
	(26, 'abc', 'Lập trình web với CakePHP', 'abc'),
	(27, 'acb', 'Lập trình web với CodeIgniter', 'abc'),
	(28, 'abc', 'Tutorial covered by Thái Thanh Phong ^0^', 'abc'),
	(29, 'abcxyz', 'Kĩ thuật lập trình', 'Kĩ thuật lập trình'),
	(30, 'c,c++', 'Lập trình C', 'Lap trinh C can ban'),
	(31, 'C++', 'Cấu trúc dữ liệu và giả thuật', 'Cau truc du lieu va giai thuat'),
	(32, 'php', 'PHP căn bản', 'php, lap trinh php'),
	(33, 'php nc', 'PHP Nâng cao', 'php,php nang cao'),
	(34, 'php fw', 'PHP Framework', 'php, php framework'),
	(35, 'abc', 'Lập trình ứng dụng web tập I', 'Lập trình ứng dụng web tập I'),
	(36, 'abc', 'Lập trình ứng dụng web tập II', 'abc'),
	(37, 'abc', 'Lập trình web với CakePHP', 'abc'),
	(38, 'acb', 'Lập trình web với CodeIgniter', 'abc'),
	(39, 'abc', 'Tutorial covered by Thái Thanh Phong ^0^', 'abc');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;


-- Dumping structure for テーブル cakephp_db.notes
DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table cakephp_db.notes: ~5 rows (approximately)
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` (`id`, `title`, `content`, `created`, `modified`) VALUES
	(1, 'Cấu trúc và chức năng một số thư mục chính trong source code CakePHP', '- app: chứa source project\r\n  + Config: chứa toàn bộ nội dung config của website(core - debug, mã hóa, cache , admin, session; route - rewrite link; database...)\r\n  + Model: chứa các model tương ứng với các bảng trong csdl\r\n  + Controller: chứa controller, viết action xử lý trong controller\r\n  + View: chứa view và các layout dàn trang(Layouts, Errors, Elements...)\r\n  + webroot: chứa css, js, img\r\n  + Plugins\r\n  + Vendors\r\n  + Và một số thư mục khác\r\n- lib: chứa source cakephp(trong lib chứa Cake/)', '2013-01-13 09:12:48', '2013-03-04 01:47:37'),
	(2, 'Cài đặt CakePHP', 'Có 2 cách cài đặt là cài đặt theo cách thông thường bằng tay và cài đặt từ giao diện dòng lệnh.\r\nCài đặt bằng tay:\r\n  + down source code từ cakephp.org\r\n  + copy vào www của wamp\r\n  + tạo csdl\r\n  + edit file database.php\r\n  + edit file core.php\r\n- Cài đặt từ giao diện dòng lệnh:\r\n  + dùng 1 source code cakephp để làm thư mục gốc\r\n  + Thiết lập biến môi trường để chạy Cake Console\r\n  + Cài đặt CakePHP từ giao diện dòng lệnh', '2013-01-13 10:20:48', '2013-01-13 10:20:48'),
	(3, 'Mô hình MVC trong CakePHP', '- Giới thiệu sơ lược mô hình MVC\r\n- Chức năng của Model - View - Controller trong CakePHP\r\n- Cách thức hoạt động của Mô hình MVC trong CakePHP', '2013-01-13 09:12:48', '2013-01-28 12:57:40'),
	(4, 'Tạo website đơn giản bằng CakePHP - ChickenRain Notes', '- Tạo shortcut cake console\r\n- Tạo CSDL\r\n- Tạo thư mục project từ giao diện dòng lệnh\r\n- Tạo bảng notes trong DB bằng SQL\r\n- Insert thêm dữ liệu vào DB', '2013-01-13 12:10:09', '2013-01-13 12:10:09'),
	(5, 'Tạo trang index notes cho ChickenRain Notes', '- Tạo Model Note.php\r\n- Tạo controller NotesController.php\r\n- Viết function index() đặt trong NotesController:\r\n  + Dùng find(\'all\') để lấy dữ liệu từ DB\r\n  + Gởi dữ liệu lên view thông qua set()\r\n- Tạo view index.ctp đặt trong View/Notes\r\n- Chạy thử', '2013-01-13 14:10:09', '2013-02-19 13:03:53');
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;


-- Dumping structure for テーブル cakephp_db.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_age` int(10) DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table cakephp_db.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_age`, `user_email`, `user_password`) VALUES
	(1, 'Chu Quang', 'Vien', 24, 'vienbk91@gmail.com', '123456789'),
	(2, 'TEST TEST', 'TEST1', 24, 'test1@gmail.com', '123456789'),
	(3, 'TEST TEST', 'TEST2', 24, 'test2@gmail.com', '123456789'),
	(4, 'TEST TEST', 'TEST3', 24, 'test3@gmail.com', '123456789'),
	(5, 'TEST TEST', 'TEST4', 24, 'test4@gmail.com', '123456789');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
