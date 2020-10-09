CREATE TABLE IF NOT EXISTS `admin` 
(
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updationdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'a@a.com', '123');
