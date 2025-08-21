This is a basic Create, Read, Update, Delete (CRUD) application built in PHP & MySQL and MVC architecture..

Features

-Add new users with name and email

-View all users in a list

-Edit existing user details

-Delete users

-Form validation (empty fields + email format)

-Light pink themed UI for forms

-Setup Instructions

Import the database:

CREATE DATABASE crud_app;
USE crud_app;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);


-Update your database connection in config.php.

-Run a local PHP server inside project folder
