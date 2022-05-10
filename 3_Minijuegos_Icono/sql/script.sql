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
/* Creo el usuario */
CREATE USER 'juanma'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO 'juanma'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
/* Meto los privilegios de datos al usuario en la base de datos de minijuegos */
GRANT SELECT, INSERT, UPDATE, DELETE ON `minijuegos`.* TO 'juanma'@'localhost';
