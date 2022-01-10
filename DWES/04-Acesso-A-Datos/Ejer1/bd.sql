DROP DATABASE ListaCompra;
CREATE DATABASE ListaCompra;
USE ListaCompra;

CREATE TABLE lista(
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100),
    PRIMARY KEY(id)
);

INSERT INTO lista (nombre) VALUE ('Pan');
INSERT INTO lista (nombre) VALUE ('Leche');
INSERT INTO lista (nombre) VALUE ('Huevos');
INSERT INTO lista (nombre) VALUE ('Cereales');
INSERT INTO lista (nombre) VALUE ('Fruta');