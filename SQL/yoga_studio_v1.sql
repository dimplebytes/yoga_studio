# To store all yoga studi data;
create database yoga_studio;

# To use yoga_studio for all other quries.
use yoga_studio;

DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS classes;
DROP TABLE IF EXISTS payments;

#To store yoga studio members infomation.

CREATE TABLE `users` (
                         `id` int NOT NULL,
                         `first_name` varchar(50) DEFAULT NULL,
                         `last_name` varchar(40) DEFAULT NULL,
                         `gender` char(1) DEFAULT NULL,
                         `dob` date DEFAULT NULL,
                         `age` int DEFAULT NULL,
                         `address_1` varchar(200) DEFAULT NULL,
                         `address_2` varchar(200) DEFAULT NULL,
                         `city` varchar(200) DEFAULT NULL,
                         `pin` char(6) DEFAULT NULL,
                         `mobile` char(10) DEFAULT NULL,
                         `email_id` varchar(100) DEFAULT NULL,
                         `password` varchar(20) DEFAULT NULL,
                         `created_ts` datetime DEFAULT NULL,
                         `updated_ts` datetime DEFAULT NULL,
                         `is_admin` tinyint(1) DEFAULT NULL,
                         PRIMARY KEY (`id`)
);

CREATE TABLE `classes` (
                           `id` int NOT NULL,
                           `name` varchar(100) DEFAULT NULL,
                           `descrition` text,
                           `couch_name` varchar(100) DEFAULT NULL,
                           `class_time` datetime DEFAULT NULL,
                           `fees` int DEFAULT NULL,
                           `max_group_count` int DEFAULT NULL,
                           PRIMARY KEY (`id`)
);

CREATE TABLE `payments` (
                            `id` int DEFAULT NULL,
                            `amount` int DEFAULT NULL,
                            `class_id` int DEFAULT NULL,
                            `user_id` int DEFAULT NULL,
                            KEY `user_id` (`user_id`),
                            KEY `class_id` (`class_id`),
                            CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
                            CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`)
);
