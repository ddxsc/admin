
#https://github.com/KomaBeyond/chinese-poetry-mysql

DROP TABLE IF EXISTS `lunyu`;
CREATE TABLE `lunyu` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `chapter` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `poems`;
CREATE TABLE `poems` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `poems_author`;
CREATE TABLE `poems_author` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `intro_l` text,
  `intro_s` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `poetry`;
CREATE TABLE `poetry` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int unsigned DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `yunlv_rule` text,
  `author` varchar(255) NOT NULL DEFAULT '',
  `dynasty` char(1) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `poetry_author`;
CREATE TABLE `poetry_author` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `intro` text,
  `dynasty` char(1) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `shijing`;
CREATE TABLE `shijing` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `chapter` varchar(255) NOT NULL DEFAULT '',
  `section` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

