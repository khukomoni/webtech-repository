-- Create Database
CREATE DATABASE lab9db;
-- Create table name users
CREATE TABLE users(
    u_id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    u_name VARCHAR(100) NOT NULL,
    u_username VARCHAR(50) NOT NULL,
    u_email VARCHAR(50) NOT NULL,
    u_password VARCHAR(50) NOT NULL,
    u_gender VARCHAR(50) NOT NULL,
    u_dob VARCHAR(50) NOT NULL,
    u_pp_path VARCHAR(255) NOT NULL DEFAULT ""
);
INSERT INTO `users` (
        `u_id`,
        `u_name`,
        `u_username`,
        `u_email`,
        `u_password`,
        `u_gender`,
        `u_dob`,
        `u_pp_path`
    )
VALUES (
        NULL,
        'Khuko Moni',
        'khukomoni',
        'khuko@gmail.com',
        'asd@#123',
        'female',
        '2000-12-03',
        ''
    )