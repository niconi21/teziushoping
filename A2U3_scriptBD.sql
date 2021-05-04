/*
Nombre de la base de datos: TeziushopingDB
Fecha de creación: 30 de marzo del 2021
Fecha de entrega: 4 de abril del 2o21
Número de equipo: 2
*/

CREATE DATABASE TeziushopingDB;

USE TeziushopingDB;

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
tipoCuenta varchar (50), 
fecha DATETIME
);

CREATE TABLE AdquisicionArticulo(
idAdquisicionArticulo int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
idArticulo int not null,
idUsuario int not null,
idMetodoPago int not null,
fecha date not null,
CONSTRAINT fk_ArticuloV FOREIGN KEY (idArticulo) REFERENCES Articulo(idArticulo),
CONSTRAINT fk_UsuarioV FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario),
CONSTRAINT fk_MetodoPagoV FOREIGN KEY (idMetodoPago) REFERENCES MetodoPago(idMetodoPago)
);


/*
Las tablas tiene diez registros cada una con el comando
"INSERT" (Aplica para todas las tablas).
*/
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('Reforma','66',null, 'Santa Rosa', 73887);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('San Juan Pablo II','54',null, 'Amila', 73800);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('San Francisco Lucas','47',null, 'Tezutlán centro', 73887);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('Constitución','23',null, 'Tezutlán centro', 73890);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('Benito Juarez','65',null, 'Tezutlán centro', 73890);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('Hidalgo','87',null, 'Tezutlán centro', 73890);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('Aldama','124',null, 'Tezutlán centro', 73890);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('Riva Palacio','87',null, 'Tezutlán centro', 73890);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('Lerdo','32',null, 'Tezutlán centro', 73890);
INSERT INTO Direccion (calle, noExterior, noInterior, colonia, codigo_Postal) VALUES ('Libertador','54',null, 'Tezutlán centro', 73890);


INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Nicolas','Moreno Durán','niconi21','niconi',1,NOW(), 'Administrador', '231-140-5938','morenodurann@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Manuel','Francisco Peña','mano23','manolo',2,NOW(), 'Administrador', '231-542-5286','franciscopena@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Jared Josue','Camacho Rolon','chep1243','chepe',3,NOW(), 'Administrador', '231-248-1025','camachorolon@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Francisco Enrique','Alberto Cordova','foto212','kikin',4,NOW(), 'Administrador', '231-126-5246','albertocordova@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Andres','Huerta Santiago','estatura25','chaparro',5,NOW(), 'Administrador', '231-532-3948','huertasanti@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Jessica','Lazaro Maza','i10343','mazita',6,NOW(), 'Vendedor', '231-846-2933','lazaromaza@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Anahí','Muñoz Lopez','doge45','cartones',7,NOW(), 'Vendedor', '231-946-4827','chocomoustrina29@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Pablo','Aguirre Moreno','avchevro','polizonte',8,NOW(), 'Vendedor', '231-234-1254','aguirremoreno@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Luisa','Hernandez Lopez','hdz28','hdz54',9,NOW(), 'Vendedor', '231-824-6798','hernandez563@gmail.com');
INSERT INTO Usuario (nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo)  VALUES ('Esteban','Gonzalez Murrieta','sebas7468','este23',10,NOW(), 'Vendedor', '231-236-4389','esteban65hdz@gmail.com');|

INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Herrería','Objetos de herreria');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Muebles','Muebles y cosas del hogar');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Linea blanca','LInea blanca y conina');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Plomería','Plomería e intalaciones de tubos');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Albañilería','Construccion de casas o estructuras');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Taller mecanico automotríz','Mantenimiento  reparación de auomviles');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Artesanias','Restauración de artesanias');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Oficina','Trabajos de oficina');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Maquiladoras','Industria textil');
INSERT INTO CategoriaArticulo (nombre, descripcion) VALUES ('Tiendas de abarotes','Abarroterías');

INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('Ajuste de motor','Ajuste del motor, restauración o lavado', 6, 5000, 1, 'motor.png', NOW(), 6);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('Mantenimiento de caja', 'Mantenimiento a caja de velocdades', 6, 10000, 1, 'cajaVelocidades.png', NOW(), 7);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('Venta de refrigerador', 'Refrigerador de medio uso, con garantia', 3, 2500, 1, 'refrigerador1.png', NOW(), 8);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('Venta de cazuelas de barro', 'Cazuelas artesanales', 7, 100, 1, 'cazuelas.png', NOW(), 4);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('Venta de abarrotes','Frijol, arroz, azucar, semillas, todo', 10, 5000, 1, 'abarrotes.png', NOW(), 2);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('Solicitamos manual','Manual de maquila con todas las prestaciones de ley', 9, 1000, 1, 'confetex.png', NOW(), 4);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('Reparación de suspención','Cambios de rotulas, suspenciones, soportes, etc...', 6, 5000, 1, 'Suspención.png', NOW(), 1);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('Instalación y venta de tuverias','Drenajes, tuberías de agua, tinacos', 4, 3000, 1, 'tubos.png', NOW(), 2);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('venta de puerta de herrería', 'Todo tipo de puertas a tu medida y estilo', 1, 10000, 1, 'puertas.png', NOW(), 7);
INSERT INTO Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) VALUES('3 Vacantes de capturistas','Trabajo temporal, para capturar datos, sueldo de $5000 quincenales', 7, 15000, 3, 'oficinaINE.png', NOW(), 8);


INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('Azteca','153679','Debito',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('Bancomer','10394766','Cheques',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('HSBC','1276523459','Ahorro',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('Santander','859598372','Crédito',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('BanCoppel','1015442752','Debito',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('Bancomer','542910542','Cheques',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('Bancomer','919876642','Debito',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('Bancomer','0985347891','Crédito',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('BanCoppel','845987128','Cheques',now());
INSERT INTO MetodoPago (banco, noCuenta, tipoCuenta, fecha) VALUES ('Azteca','0923135453','Debito',now());


INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (2,2, 4, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (6,1, 6, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (8,4, 4, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (9,4, 1, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (5,7, 3, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (5,1, 8, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (2,5, 3, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (4,5, 2, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (7,8, 1, NOW());
INSERT INTO AdquisicionArticulo (idArticulo, idUsuario,idMetodoPago, fecha) VALUES (9,7, 8, NOW());


/*
Utiliza el comando "DELETE" para borrar un registro de la
base de datos.
*/
DELETE FROM MetodoPago WHERE idMetodoPago=5;

/*
Utiliza el comando "UPDATE" para actualiza un registro de la
base de datos.
*/
UPDATE Usuario SET nombre = "Martin" WHERE idUsuario=2;

/*
Utiliza el comando "SELECT" para hacer una consulta general
de alguna de las tablas.
*/
SELECT * FROM Usuario;

/*
Utiliza el comando "JOIN" para hacer una consulta dos tablas de la
base de datos que sean de utilidad al proyecto.
*/

SELECT U.nombre, U.apellidos, D.calle, D.noExterior, D.noInterior, D.colonia, D.codigo_Postal FROM Usuario as U JOIN Direccion as D ON D.idDireccion = U.idDireccion;

SELECT * FROM AdquisicionArticulo AS AA
INNER JOIN Usuario AS U ON AA.idUsuario = U.idUsuario
INNER JOIN Articulo AS A ON AA.idArticulo = A.idArticulo
INNER JOIN MetodoPago AS MP ON AA.idMetodoPago = MP.idMetodoPago;

