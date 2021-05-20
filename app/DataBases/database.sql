CREATE DATABASE TeziushopingDB;
USE TeziushopingDB;
CREATE TABLE Direccion(
  id INT AUTO_INCREMENT NOT NULL,
  calle VARCHAR(20) NOT NULL,
  colonia VARCHAR(20) NOT NULL,
  ciudad VARCHAR(20) NOT NULL,
  cp VARCHAR(5) NOT NULL,
  noInt SMALLINT,
  noExt SMALLINT,
  referencias VARCHAR(500) NOT NULL,
  CONSTRAINT pk_direccion PRIMARY KEY (id)
);
CREATE TABLE Usuario(
  id INT AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(25) NOT NULL,
  apellidos VARCHAR(35) NOT NULL,
  telefono VARCHAR(12) NOT NULL,
  correo VARCHAR (60) NOT NULL,
  usuario VARCHAR(20) NOT NULL,
  contrasenia VARCHAR (20) NOT NULL,
  role VARCHAR(20) NOT NULL,
  id_direccion INT,
  estado BIT DEFAULT 1,
  fecha DATETIME DEFAULT NOW(),
  CONSTRAINT pk_usuario PRIMARY KEY (id),
  CONSTRAINT fk_usuario_to_direccion FOREIGN KEY (id_direccion) REFERENCES Direccion(id)
);
CREATE TABLE Categoria(
  id INT AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(20) NOT null,
  descripcion VARCHAR(200) NOT NULL,
  CONSTRAINT pk_categoria PRIMARY KEY (id)
);
CREATE TABLE Publicaciones(
  id INT AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(30) NOT NULL,
  descripcion VARCHAR(200) NOT NULL,
  precio FLOAT NOT NULL,
  cantidad TINYINT NOT NULL,
  imagen VARCHAR(150),
  activo BIT DEFAULT 1,
  id_categoria INT NOT NULL,
  id_usuario INT NOT NULL,
  fecha DATETIME DEFAULT NOW(),
  CONSTRAINT pk_publicaciones PRIMARY KEY (id),
  CONSTRAINT fk_publicaciones_to_categoria FOREIGN KEY (id_categoria) REFERENCES Categoria(id),
  CONSTRAINT fk_publicaciones_to_usuario FOREIGN KEY (id_usuario) REFERENCES Usuario(id)
);
CREATE TABLE MetodoPago(
  id int AUTO_INCREMENT NOT NULL,
  titular VARCHAR(60) NOT NULL,
  noTarjeta VARCHAR(20) NOT NULL,
  mes VARCHAR(2) NOT NULL,
  anio VARCHAR(4) NOT NULL,
  ccv VARCHAR(3) NOT NULL,
  id_usuario INT NOT NULL,
  CONSTRAINT pk_metodoPago PRIMARY KEY (id),
  CONSTRAINT fk_metodoPago_to_usuario FOREIGN KEY (id_usuario) REFERENCES Usuario(id)
);

CREATE TABLE Carrito(
  id INT AUTO_INCREMENT NOT NULL,
  id_usuario INT NOT NULL,
  id_publicacion INT NOT NULL,
  cantidad TINYINT NOT NULL,
  CONSTRAINT pk_carrito PRIMARY KEY (id),
  CONSTRAINT fk_carrito_to_usuario FOREIGN KEY (id_usuario) REFERENCES Usuario(id),
  CONSTRAINT fk_carrito_to_publicacion FOREIGN KEY (id_publicacion) REFERENCES Publicaciones(id)
);
CREATE TABLE Venta(
  id int AUTO_INCREMENT NOT NULL,
  id_vendedor INT NOT NULL,
  id_comprador INT NOT NULL,
  id_publicacion INT NOT NULL,
  id_metodo_pago INT NOT NULL,
  cantidad TINYINT NOT NULL,
  precio float NOT NULL,
  monto float NOT NULL,
  fecha DATETIME NOT NULL,
  status VARCHAR (20) NOT NULL,
  CONSTRAINT pk_venta PRIMARY KEY (id),
  CONSTRAINT fk_venta_to_usuario_comprador FOREIGN KEY (id_comprador) REFERENCES Usuario(id),
  CONSTRAINT fk_venta_to_usuario_vendedor FOREIGN KEY (id_vendedor) REFERENCES Usuario(id),
  CONSTRAINT fk_venta_to_publcacion FOREIGN KEY (id_publicacion) REFERENCES Publicaciones(id),
  CONSTRAINT fk_venta_to_metodo_pago FOREIGN KEY (id_metodo_pago) REFERENCES MetodoPago(id)
);

INSERT INTO
  Usuario (
    nombre,
    apellidos,
    telefono,
    correo,
    usuario,
    contrasenia,
    role
  )
VALUES
  (
    'Nicolas',
    'Moreno Durán',
    '231-140-5938',
    'morenodurann@gmail.com',
    'niconi',
    'niconi21',
    'ADMIN_USER'
  );
INSERT INTO
  Usuario (
    nombre,
    apellidos,
    telefono,
    correo,
    usuario,
    contrasenia,
    role
  )
VALUES
  (
    'Manuel',
    'Francisco Peña',
    '123-123-1232',
    'manuelfrancis44@gmail.com',
    'manolo',
    'manolo',
    'CLIENT_USER'
  );


INSERT INTO Categoria (nombre, descripcion) VALUES ('Ferretería','Todo lo que necesites de herramientas aquí lo encontrarás');
INSERT INTO Categoria (nombre, descripcion) VALUES ('Linea blanca','Regrigeradores, estufas, todo lo indispensable para tu cocina');
INSERT INTO Categoria (nombre, descripcion) VALUES ('Plomería','Reparación de tuberías de todo tipo');
INSERT INTO Categoria (nombre, descripcion) VALUES ('Albañilería','Construcciónes y reparaciónes');
INSERT INTO Categoria (nombre, descripcion) VALUES ('Celulares','Celulares nuevos o de uso, verficar en la descripción de los articulos');
INSERT INTO Categoria (nombre, descripcion) VALUES ('Computadora','Equipo de computo para todos');

SELECT * FROM Publicaciones;

INSERT INTO Publicaciones(
    nombre,descripcion,precio,cantidad,imagen,id_categoria,id_usuario
    ) VALUES (
    '?', '?', 21, 21, '?', 1, 1);

    SELECT * FROM Publicaciones WHERE id = 2;

SELECT * FROM MetodoPago;
    UPDATE MetodoPago SET titular='?', noTarjeta='?', mes='1', anio='?', ccv='?' WHERE id=1;

    SELECT c.cantidad AS cantidadCarrito, p.nombre, p.descripcion, p.cantidad as cantidadPublicacion, p.precio FROM Carrito AS c INNER JOIN Publicaciones AS p ON  c.id_publicacion = p.id WHERE c.id_usuario = 1;












