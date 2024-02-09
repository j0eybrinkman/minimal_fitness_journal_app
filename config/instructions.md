-- Create a database user with a password
CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost';
FLUSH PRIVILEGES;

-- Create database
CREATE DATABASE minimal_fitness_journal_app;
USE minimal_fitness_journal_app;

-- Create workout_log table
CREATE TABLE workout_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    exercise VARCHAR(255),
    reps INT,
    sets INT,
    log_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create workout_log table (phpmyadmin preview)
CREATE TABLE `minimal_fitness_journal_app`.`workout_log` (`id` INT NOT NULL AUTO_INCREMENT , `exercise` VARCHAR(255) NOT NULL , `reps` INT NOT NULL , `sets` INT NOT NULL , `log_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- Create nutrition_log table
CREATE TABLE nutrition_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    meal_time VARCHAR(255),
    meal_type TEXT,
    calories INT,
    total_fat INT,
    total_carbohydrate INT,
    protein INT,
    log_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Create nutrition_log table (phpmyadmin preview)
CREATE TABLE `minimal_fitness_journal_app`.`nutrition_log` (`id` INT NOT NULL AUTO_INCREMENT , `meal_time` VARCHAR(255) NOT NULL , `meal_type` TEXT NOT NULL , `calories` INT NOT NULL , `total_fat` INT NOT NULL , `total_carbohydrate` INT NOT NULL , `protein` INT NOT NULL , `log_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;
