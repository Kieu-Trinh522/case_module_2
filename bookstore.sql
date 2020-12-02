-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2020 at 09:33 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int NOT NULL,
  `book_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `unit_price` int NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `quantity`, `unit_price`, `author`, `category_id`, `image`) VALUES
(1, 'Không thể chạm vào em', 100, 98000, 'Nhóm 4.0', 1, 'uploads/sachnoi1.jpg'),
(2, 'Nhật ký trở thành Boss thời mạt thế', 100, 89000, 'Họa Thủy Ương', 1, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/21470.jpg?v=2&w=340&h=497'),
(3, 'Công tử Liên Thành', 100, 100000, 'Mãn Tọa Y Quan Thắng Tuyết', 1, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/13787.jpg?v=2&w=340&h=497'),
(4, 'Thanh quỷ kỷ sự ', 100, 132000, 'Kinh Cức Chi Ca', 2, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25888.jpg?v=3&w=200&h=292'),
(5, 'Thầy dời mộ', 100, 76000, 'Tô Hoàn', 2, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25807.jpg?v=3&w=340&h=497'),
(6, 'Quỷ giấu người', 100, 123000, 'Truyền Thuyết Một Con Cá', 2, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25599.jpg?v=3&w=340&h=497'),
(9, 'Một khẽ chạm tay', 100, 132000, 'Lâm Moon', 3, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/28195.jpg?v=1&w=340&h=497'),
(10, 'Trái tim trên những con đường', 100, 35000, 'Mai Thanh Nga', 3, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25491.jpg?v=1&w=340&h=497'),
(11, 'Muôn dặm đường hoa', 100, 35000, 'Trần Thùy Linh', 3, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/24795.jpg?v=1&w=340&h=497'),
(12, 'Thỏ Peter và các bạn', 100, 20000, 'Thỏ Peter và các bạn', 4, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25025.jpg?v=1&w=340&h=497'),
(13, 'Thủ thỉ thù thì cái gì nguy hiểm', 100, 20000, 'Phạm Anh Tuấn', 4, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25024.jpg?v=1&w=340&h=497'),
(14, 'Em yêu khoa học - Chú cá vàng và chuyến du hành đến Mặt Trăng', 100, 20000, 'Vesna Kartal', 4, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/24633.jpg?v=1&w=340&h=497'),
(15, 'Xin em ở lại bên anh', 100, 89000, 'Giảo Xuân Bính', 5, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25707.jpg?v=1&w=340&h=497'),
(16, 'Đông Túy Hạ Hàm', 100, 123000, 'Miêu Lão Sư', 5, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25147.jpg?v=2&w=340&h=497'),
(17, 'Doanh môn phục quý', 100, 89000, 'Vân Nghê', 5, 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/0/25903.jpg?v=3&w=340&h=497');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `category_id` int NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`category_id`, `category_name`, `description`) VALUES
(1, 'Sách nói', 'một bản ghi âm của một văn bản được đọc lại'),
(2, 'kinh dị', 'ma,tâm linh'),
(3, 'Văn học', 'thơ,văn xuôi'),
(4, 'Thiếu nhi', 'truyện tranh, cổ tích, đố vui'),
(5, 'Ngôn tình', 'lãng mạng');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `contact_title`, `address`, `city`, `phone`) VALUES
(1, 'Đàm Thị Kiều Trinh', 'CEO', 'Bãi Mới-Sơn Đoài-Tân Minh-Sóc Sơn', 'Hà Nội', 357832551),
(2, 'Đàm Thị Thu Trang', 'Owner', 'Bãi Mới-Sơn Đoài-Tân Minh-Sóc Sơn', 'Hà Nội', 978767554),
(3, 'Đàm Khắc Ninh', 'CEO', 'Bãi Mới-Sơn Đoài-Tân Minh-Sóc Sơn', 'Hà Nội', 379222934),
(4, 'Đàm Khắc Khang', 'Marketing Manager', 'Bãi Mới-Sơn Đoài-Tân Minh-Sóc Sơn', 'Hà Nội', 975657887),
(5, 'Nguyễn Thị Minh Phương', 'CEO', 'Bãi Mới-Sơn Đoài-Tân Minh-Sóc Sơn', 'Hà Nội', 975633987),
(6, 'Phạm Thị Đào', 'Sales Representative', 'Thụy Nôi- Yên Lương-Ý Yên', 'Nam Đinh', 547668436),
(7, 'Tạ Thị Thùy', 'Accounting Manager', 'Quang Tiến-Sóc Sơn', 'Hà Nội', 967539246),
(8, 'trinh', 'jkljl', 'hk', 'ghjhg', 988787),
(9, 'Dao', 'jkljl', 'Nam Dinh', 'fghryh', 988787),
(10, 'thanng', 'jkljl', 'Nam Dinh', 'fghryh', 988787);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `book_id` int NOT NULL,
  `unit_price` int NOT NULL,
  `quantity` int NOT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipper_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `book_id`, `unit_price`, `quantity`, `discount`, `shipper_id`) VALUES
(1, 1, 4, 132000, 1, '0.15', 2),
(2, 1, 2, 89000, 1, '0.15', 2),
(3, 2, 9, 132000, 1, '0', 1),
(4, 2, 11, 35000, 1, '0', 1),
(5, 3, 17, 89000, 1, '0.25', 3),
(6, 3, 10, 3500, 1, '0.25', 3),
(7, 4, 12, 20000, 1, '0', 4),
(8, 4, 5, 76000, 1, '0', 4),
(9, 5, 16, 123000, 1, '0.5', 2),
(10, 5, 9, 132000, 1, '0,5', 2),
(11, 6, 11, 35000, 1, '0', 3),
(12, 6, 17, 89000, 1, '0', 3),
(13, 7, 10, 3500, 1, '0', 2),
(14, 7, 13, 20000, 1, '0', 2),
(15, 8, 1, 98000, 1, '0', 4),
(16, 8, 14, 2000, 1, '0', 4),
(17, 9, 3, 100000, 1, '0.15', 1),
(18, 9, 15, 89000, 1, '0.15', 1),
(19, 10, 11, 3500, 1, '0', 3),
(20, 10, 16, 12300, 1, '0', 3),
(21, 11, 10, 35000, 1, '0', 1),
(22, 11, 14, 20000, 10, '0.5', 1),
(23, 12, 4, 132000, 1, '0', 2),
(24, 12, 9, 132000, 1, '0', 2),
(25, 13, 11, 35000, 1, '', 1),
(26, 13, 17, 89000, 4, '0.25', 1),
(27, 14, 10, 3500, 1, '0', 3),
(28, 14, 12, 20000, 2, '0.5', 3),
(29, 15, 5, 76000, 1, '0', 4),
(30, 15, 13, 20000, 2, '0.5', 4),
(31, 16, 6, 123, 1, '0', 2),
(32, 16, 3, 10000, 1, '0', 2),
(33, 17, 4, 132000, 1, '0', 2),
(34, 17, 9, 132000, 1, '0', 2),
(35, 18, 12, 20000, 5, '0.5', 1),
(36, 18, 17, 89000, 1, '0', 1),
(37, 19, 10, 3500, 1, '0', 3),
(38, 19, 12, 20000, 1, '0', 3),
(39, 20, 10, 35000, 1, '0', 2),
(40, 20, 11, 35000, 1, '0', 2),
(41, 21, 12, 20000, 1, '0', 1),
(42, 21, 17, 89000, 4, '0.5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `order_date` date NOT NULL,
  `required_date` date NOT NULL,
  `shipped_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `required_date`, `shipped_date`) VALUES
(1, 1, '2020-11-25', '2020-11-28', '2020-11-26'),
(2, 1, '2020-11-30', '2020-12-03', '2020-12-01'),
(3, 1, '2020-12-12', '2020-12-15', '2020-12-13'),
(4, 2, '2020-11-27', '2020-11-30', '2020-11-28'),
(5, 2, '2020-12-01', '2020-12-04', '2020-12-02'),
(6, 2, '2020-11-10', '2020-11-13', '2020-11-11'),
(7, 3, '2020-12-02', '2020-12-05', '2020-12-03'),
(8, 3, '2020-11-04', '2020-11-07', '2020-11-05'),
(9, 3, '2021-01-05', '2020-01-08', '2021-01-06'),
(10, 4, '2020-11-17', '2020-11-20', '2020-11-18'),
(11, 4, '2020-11-08', '2020-11-11', '2020-11-09'),
(12, 4, '2020-11-11', '2020-11-14', '2020-11-12'),
(13, 5, '2020-11-12', '2020-11-15', '2020-11-13'),
(14, 5, '2020-11-01', '2020-11-04', '2020-11-02'),
(15, 5, '2020-11-06', '2020-11-09', '2020-11-07'),
(16, 6, '2020-12-10', '2020-12-13', '2020-12-11'),
(17, 6, '2020-12-24', '2020-12-25', '2020-12-24'),
(18, 6, '2020-12-31', '2021-01-02', '2021-01-01'),
(19, 7, '2020-11-04', '2020-11-07', '2020-11-05'),
(20, 7, '2020-11-18', '2020-11-20', '2020-11-19'),
(21, 7, '2020-12-15', '2020-12-18', '2020-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `shipper_id` int NOT NULL,
  `shipper_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shippers`
--

INSERT INTO `shippers` (`shipper_id`, `shipper_name`, `phone`) VALUES
(1, 'Đinh Thế Trường', 934652815),
(2, 'Đinh Mạnh Thắng', 963541872),
(3, 'Vũ Đức Dương', 952678143),
(4, 'Nguyễn Việt Đức', 982765147);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `shipper_id` (`shipper_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`shipper_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `shippers`
--
ALTER TABLE `shippers`
  MODIFY `shipper_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`category_id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `orderdetails_ibfk_3` FOREIGN KEY (`shipper_id`) REFERENCES `shippers` (`shipper_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
