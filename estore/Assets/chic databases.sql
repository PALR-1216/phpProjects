-- CREATE DATABASE IF NOT EXISTS chic;
-- USE chic;

-- CREATE TABLE IF NOT EXISTS category (
--   categoryID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
--   name varchar(25) NOT NULL¡
-- );

-- CREATE TABLE  IF NOT EXISTS stock (
--   stockID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
--   name varchar(100) NOT NULL,
--   categoryID int NOT NULL,
--   price decimal(5,2) NOT NULL,
--   photo varchar(100) NOT NULL,
--   topline varchar(200) NOT NULL,
--   description varchar(1000) NOT NULL,
--   CONSTRAINT fk_category_stock
--   FOREIGN KEY (categoryID) REFERENCES category(categoryID)
--   ON DELETE CASCADE
--   ON UPDATE RESTRICT
-- );

-- CREATE TABLE IF NOT EXISTS user (
--   userID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
--   username varchar(25) NOT NULL,
--   password varchar(255) NOT NULL
-- );

-- INSERT INTO category VALUES
-- (NULL, "Shirts"),
-- (NULL, "Dress"),
-- (NULL, "Pants"),
-- (NULL, "Jackets"),
-- (NULL, "Accesories")