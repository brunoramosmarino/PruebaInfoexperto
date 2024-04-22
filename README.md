create table usuarios(
	id serial primary key,
    nombre text,
    apellido text,
    dni text,
    edad int
)
INSERT INTO usuarios (nombre, apellido, dni, edad) VALUES
('Juan', 'Perez', '12345678', 30),
('María', 'García', '87654321', 25),
('Carlos', 'López', '45678912', 40),
('Laura', 'Martínez', '98765432', 35);
