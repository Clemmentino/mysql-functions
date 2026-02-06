CREATE DATABASE sql_functions_demo;
USE sql_functions_demo;

CREATE TABLE demo_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    text_value VARCHAR(100),
    number_value DECIMAL(10,2),
    date_value DATE,
    created_at DATETIME
);

INSERT INTO demo_data (text_value, number_value, date_value, created_at) VALUES
('Hello World', 1234.56, '2023-01-15', NOW()),
('MySQL Functions', -45.78, '2022-06-10', NOW()),
('Database Demo', 999.99, '2021-12-25', NOW()),
('PHP and SQL', 100.00, '2020-03-08', NOW()),
('Sample Text', 0.75, '2019-09-30', NOW());