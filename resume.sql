-- -- phpMyAdmin SQL Dump
-- -- version 5.2.1
-- -- https://www.phpmyadmin.net/
-- --
-- -- Host: 127.0.0.1
-- -- Generation Time: Sep 22, 2023 at 08:43 PM
-- -- Server version: 10.4.28-MariaDB
-- -- PHP Version: 8.0.28

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

-- --
-- -- Database: `resume`
-- --

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `cv`
-- --

-- CREATE TABLE `cv` (
--   `id` int(11) NOT NULL,
--   `user_id` int(11) NOT NULL,
--   `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
--   `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
--   `name` varchar(250) NOT NULL,
--   `headline` varchar(250) NOT NULL,
--   `contact` text NOT NULL,
--   `objective` text NOT NULL,
--   `skills` text NOT NULL,
--   `experience` text NOT NULL,
--   `education` text NOT NULL,
--   `url` varchar(250) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `cv`
-- --

-- INSERT INTO `cv` (`id`, `user_id`, `created_at`, `updated_at`, `name`, `headline`, `contact`, `objective`, `skills`, `experience`, `education`, `url`) VALUES
-- (0, 5, '2023-09-19 17:52:16', '2023-09-19 17:52:16', 'Dib', 'PHP', '{\\\"email\\\":\\\"divya@gmail.com\\\",\\\"mobile\\\":\\\"7456238456\\\",\\\"address\\\":\\\"rpg,india\\\"}', 'i am hardworking', '\\\"CSS,PHP,HTML\\\"', '{\\\"collage\\\":\\\"HNBGU\\\",\\\"course\\\":\\\"IT\\\",\\\"duration\\\":\\\"2020-2024\\\"}', '{\\\"company\\\":\\\"IT\\\",\\\"jobrole\\\":\\\"web developer\\\",\\\"w_duration\\\":\\\"2022\\\"}', '51xz3a99y416c5b6'),
-- (0, 5, '2023-09-22 03:49:17', '2023-09-22 03:49:17', 'Divya', 'Web designer', '{\"email\":\"divya@gmail.com\",\"mobile\":\"+918194004733\",\"address\":\"rudraprayag,uttarakhand\"}', 'I am hardworking', '\"html  PHP   CSS   javascript\"', '{\"collage\":\"HNBGU\",\"course\":\"IT\",\"duration\":\"2020-2024\"}', '{\"company\":\"IT\",\"jobrole\":\"web developer\",\"w_duration\":\"2022\"}', '4b5a79551xyz536c'),
-- (0, 4, '2023-09-22 13:20:37', '2023-09-22 13:20:37', 'Arpit', 'Front end developer', '{\"email\":\"arpit@gmail.com\",\"mobile\":\"7566423333\",\"address\":\"Srinagar,uttrakhand\"}', 'I am hardworking', '\"html,css,javascript\"', '{\"collage\":\"HNBGU\",\"course\":\"IT\",\"duration\":\"2020-2024\"}', '{\"company\":\"\",\"jobrole\":\"\",\"w_duration\":\"\"}', 'y1b8a78c8zx63539');

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `users`
-- --

-- CREATE TABLE `users` (
--   `id` int(11) NOT NULL,
--   `full_name` varchar(200) NOT NULL,
--   `email_id` varchar(250) NOT NULL,
--   `password` text NOT NULL,
--   `account_status` int(11) NOT NULL DEFAULT 0,
--   `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
--   `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `users`
-- --

-- INSERT INTO `users` (`id`, `full_name`, `email_id`, `password`, `account_status`, `created_at`, `updated_at`) VALUES
-- (3, 'Divya', 'divyarauthan@gmail.com', '12345', 0, '2023-09-13 02:44:21', '2023-09-13 02:44:21'),
-- (4, 'Dibu', 'Dibu@gmail.com', '123456', 0, '2023-09-13 04:12:32', '2023-09-13 04:12:32'),
-- (5, 'Divya', 'Dib@gmail.com', '12345', 0, '2023-09-19 17:50:06', '2023-09-19 17:50:06');

-- --
-- -- Indexes for dumped tables
-- --

-- --
-- -- Indexes for table `users`
-- --
-- ALTER TABLE `users`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `users`
-- --
-- ALTER TABLE `users`
--   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- Table structure for table `cv`
CREATE TABLE `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(250) NOT NULL,
  `headline` varchar(250) NOT NULL,
  `contact` text NOT NULL,
  `objective` text NOT NULL,
  `skills` text NOT NULL,
  `experience` text NOT NULL,
  `education` text NOT NULL,
  `url` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert data into `cv` table
INSERT INTO `cv` (`user_id`, `name`, `headline`, `contact`, `objective`, `skills`, `experience`, `education`, `url`)
VALUES
    (5, 'Dib', 'PHP', '{"email":"divya@gmail.com","mobile":"7456238456","address":"rpg,india"}', 'i am hardworking', '"CSS,PHP,HTML"', '{"collage":"HNBGU","course":"IT","duration":"2020-2024"}', '{"company":"IT","jobrole":"web developer","w_duration":"2022"}', '51xz3a99y416c5b6'),
    (5, 'Divya', 'Web designer', '{"email":"divya@gmail.com","mobile":"+918194004733","address":"rudraprayag,uttarakhand"}', 'I am hardworking', '"html PHP CSS javascript"', '{"collage":"HNBGU","course":"IT","duration":"2020-2024"}', '{"company":"IT","jobrole":"web developer","w_duration":"2022"}', '4b5a79551xyz536c'),
    (4, 'Arpit', 'Front end developer', '{"email":"arpit@gmail.com","mobile":"7566423333","address":"Srinagar,uttrakhand"}', 'I am hardworking', '"html,css,javascript"', '{"collage":"HNBGU","course":"IT","duration":"2020-2024"}', '', 'y1b8a78c8zx63539');

-- Table structure for table `users`
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(200) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert data into `users` table
INSERT INTO `users` (`full_name`, `email_id`, `password`)
VALUES
    ('Divya', 'divyarauthan@gmail.com', '12345'),
    ('Dibu', 'Dibu@gmail.com', '123456'),
    ('Divya', 'Dib@gmail.com', '12345');
