DROP DATABASE IF EXISTS ejemplo1;
CREATE DATABASE IF NOT EXISTS ejemplo1;
USE ejemplo1;

CREATE TABLE tareas (
    id INT NOT NULL AUTO_INCREMENT,
    tarea VARCHAR(100) NOT NULL ,
    PRIMARY KEY (id)
);

INSERT INTO tareas (tarea) VALUES ('Estudiar PHP');
INSERT INTO tareas (tarea) VALUES ('Hacer ejercicios PHP');
INSERT INTO tareas (tarea) VALUES ('Seguir estudiando PHP');