CREATE DATABASE TeziushopinhDB;

USE TeziushopinhDB;

CREATE TABLE Direccion (
idDireccion int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
calle varchar(100),
noExterior smallint,
noInterior smallint,
colonia varchar(50),
codigo_Postal int not null
);

CREATE TABLE Usuario(
idUsuario int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
nombre varchar(50) not null,
apellidos varchar(50) not null,
nombreUsuario varchar(50) not null,
contrasenia varchar (50) not null,
idDireccion int not null,
fechaIngreso date not null,
tipoUsuario varchar (50) not null,
telefono varchar(15) not null,
correo varchar (50) not null,
CONSTRAINT fk_Direccion FOREIGN KEY (idDireccion) REFERENCES Direccion (idDireccion)
);

CREATE TABLE CategoriaArticulo(
idCategoria int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
nombre varchar (50) NOT NULL,
descripcion varchar(150) not null
);

CREATE TABLE Articulo (
idArticulo int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
nombreArticulo varchar (100) not null,
descripcion varchar (150) not null,
idCategoria int not null,
precio int not null,
cantidad int not null,
imagen varchar(100) not null,
fechaIngreso date not null,
idUsuario int not null,
CONSTRAINT fk_Categoria FOREIGN KEY (idCategoria) REFERENCES CategoriaArticulo(idCategoria),
CONSTRAINT fk_Usuario FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE MetodoPago(
idMetodoPago int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
banco varchar (50) not null,
noCuenta int not null,
tipoCuenta varchar (50)
);

CREATE TABLE Ventas(
idVenta int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
idArticulo int not null,
idUsuario int not null,
idMetodoPago int not null,
fechaVenta date not null,
CONSTRAINT fk_ArticuloV FOREIGN KEY (idArticulo) REFERENCES Articulo(idArticulo),
CONSTRAINT fk_UsuarioV FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario),
CONSTRAINT fk_MetodoPagoV FOREIGN KEY (idMetodoPago) REFERENCES MetodoPago(idMetodoPago)
);