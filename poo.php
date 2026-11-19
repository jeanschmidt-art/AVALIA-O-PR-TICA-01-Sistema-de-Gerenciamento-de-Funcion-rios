<?php
     $PDO->exec("CREATE TABLE IF NOT EXISTS funcionarios (
         id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
         nome VARCHAR (100) NOT NULL,
         salario DECIMAL (10, 2) NOT NULL,
         email VARCHAR (100) NOT NULL
)");