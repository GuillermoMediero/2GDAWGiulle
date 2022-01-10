DROP DATABASE ListaEmpleados;
CREATE DATABASE ListaEmpleados;
USE ListaEmpleados;

CREATE TABLE empleados(
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellidos VARCHAR(100),
    edad INT(2),
    fecha VARCHAR(100),
    email VARCHAR(100),
    dni VARCHAR(9),
    sexo VARCHAR(100),
    curriculum VARCHAR(100),
    PRIMARY KEY(id)
);


INSERT INTO empleados (nombre,apellidos,edad,fecha,email,dni,sexo,curriculum) VALUE ('Ane','Urrutia Larrian',35,'31/10/1985', 'ane@gmail.com', '72752343Z', 'Mujer', 'Experto en reparacion de moviles');
INSERT INTO empleados (nombre,apellidos,edad,fecha,email,dni,sexo,curriculum) VALUE ('Mikel','Abasolo Lerena',26,'12/01/1996', 'mikel@gmail.com', '75854342A', 'Hombre', 'Experto en tecnologias del futuro');
INSERT INTO empleados (nombre,apellidos,edad,fecha,email,dni,sexo,curriculum) VALUE ('Aritz','Boroa Zabalburu',21,'21/06/2001', 'aritz@gmail.com', '76852372Z', 'Hombre', 'Experto en Merkating');