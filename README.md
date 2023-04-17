Web with admin control access CRUD.

DATABASE mysql:

CREATE DATABASE IF NOT EXISTS Noticias;
USE DATABASE Noticias;
CREATE TABLE `Articulos` (
  `Id` int NOT NULL,
  `Fecha` date NOT NULL,
  `Titulo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Contenido` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

ALTER TABLE `Articulos`
  ADD PRIMARY KEY (`Id`);
ALTER TABLE `Articulos`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
