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
  imagen VARCHAR(500),
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
  cantidad INT NOT NULL,
  imagen VARCHAR(150),
  activo TINYINT(1),
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
  cantidad INT NOT NULL,
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
  cantidad INT NOT NULL,
  precio float NOT NULL,
  monto float NOT NULL,
  fecha DATETIME DEFAULT NOW(),
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
    'Jared Josue',
    'Camacho Rolon',
    '2311381718',
    'jj.cr@live.com',
    'shopping73',
    'shopping73',
    'ADMIN_USER'
  );

INSERT INTO Categoria (nombre, descripcion)VALUES('Electrodomésticos y Línea Blanca','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Celulares, Cámaras y Casa Inteligente','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Pantallas, Audio y Video','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Computadoras, Papelería y Oficina','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Videojuegos y Juguetes','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Deportes','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Autos y Motos','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Muebles','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Hogar y Ferretería','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Moda, Belleza y Salud','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Bebés','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Mascotas','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Películas y Libros','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Vinos y Licores','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Ropa y Zapatos','');
INSERT INTO Categoria (nombre, descripcion)VALUES('Abarrotes y Limpieza','');