/*
Navicat MySQL Data Transfer

Source Server         : ASKConnection
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-10 18:20:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Mara Quitzon', 'lois.lind@example.org', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'YE9YqRNtYt', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('2', 'Briana Waelchi', 'bkuhlman@example.org', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'yIe4WZmNMT', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('3', 'Kaitlin Deckow DDS', 'kzboncak@example.net', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'U4pVbpaQ0g', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('4', 'Keeley Lynch', 'treutel.jeanette@example.org', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'odM1C3mCDf', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('5', 'Ryley Schmitt', 'hobart24@example.org', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'nHx3c4qUR4', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('6', 'Judy Mills IV', 'lonie.hyatt@example.com', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'sNysEZqXiO', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('7', 'Ms. Estelle Renner Jr.', 'patsy92@example.net', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', '60fK1131gE', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('8', 'Miss Yesenia Rowe', 'genevieve.bogan@example.com', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'ssuCR6uxKA', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('9', 'Prof. Lea Flatley Sr.', 'rreinger@example.com', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'uJa3SU4XWn', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
INSERT INTO `users` VALUES ('10', 'Dwight Armstrong', 'mratke@example.com', '$2y$10$6nkDmDGjAgsd8srRvVK0PuLjPWZnfkQ4Z4.XTtwqmOGsgf8pBg8eq', 'fgsYtow1S4', '2017-08-10 07:31:41', '2017-08-10 07:31:41');
