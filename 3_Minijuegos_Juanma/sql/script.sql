/**
 * @author Juan Manuel Toscano Reyes
 * @file script.sql
 * Archivo para crear la base de datos con las tablas
 */

/*Creo la base de datos*/
CREATE DATABASE Minijuegos;
USE Minijuegos;
/*Creo la tabla minijuego*/
CREATE TABLE minijuego(
    id tinyint unsigned AUTO_INCREMENT primary key not null,
    nombre varchar(50) not null unique,
    icono varchar(100) null,
    ruta varchar (255) not null
);
/*Meto los privilegios de datos al usuario en la base de datos de minijuegos */
GRANT SELECT, INSERT, UPDATE, DELETE ON `minijuegos`.* TO 'juanma'@'localhost';
