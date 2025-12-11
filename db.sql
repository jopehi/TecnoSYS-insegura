-- ATENCIÓN: ESTA BD ES INTENCIONALMENTE INSEGURA, SOLO PARA LABORATORIO

CREATE DATABASE tecnosysdb
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE tecnosysdb;

-- Tabla de usuarios con contraseñas en texto plano
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,  -- SIN HASH
  rol VARCHAR(20) NOT NULL DEFAULT 'user'
);

-- Insertamos usuarios con contraseñas débiles y predecibles
INSERT INTO usuarios (username, password, rol) VALUES
('admin', 'admin123', 'admin'),
('juan', '123456', 'user'),
('maria', 'password', 'user');

-- Tabla de comentarios sin restricciones ni saneamiento
CREATE TABLE comentarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  comentario TEXT NOT NULL,
  fecha DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
