CREATE DATABASE subirarchivosdb;

USE subirarchivosdb;

CREATE TABLE subir (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_original VARCHAR(255) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);