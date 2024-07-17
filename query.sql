DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS inspecciones;
DROP TABLE IF EXISTS permisos_menu;
DROP TABLE IF EXISTS modulo_perfil;
DROP TABLE IF EXISTS perfil;
DROP TABLE IF EXISTS menu;
DROP TABLE IF EXISTS modulos;
DROP TABLE IF EXISTS certificados;
DROP TABLE IF EXISTS status;

/*Tabla usuarios*/
CREATE TABLE `usuarios` (
  `idusuario` smallint(4) NOT NULL AUTO_INCREMENT,
  `idtipodocumento` smallint(4) NOT NULL,
  `numero_documento` varchar(12) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `avatar` varchar(60) NOT NULL,
  `usuario` char(60) NOT NULL,
  `passwd` varchar(200) NOT NULL,
  `idperfil` smallint(4) NOT NULL,
  `status` char(1) DEFAULT '1',
  PRIMARY KEY (idusuario))ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

INSERT INTO `usuarios` (`idusuario`, `idtipodocumento`, `numero_documento`, `apellidos`, `nombres`,`avatar`, `usuario`, `passwd`, `idperfil`, `status`) VALUES
(1, 3, '001749116', 'programador', 'administrador','slack.png','root', '$2y$10$YZB4J3DQJIMsayqMpuLCWOurdy.9fKqSI4Q716CyZzz65QOCe.Nw6', 1, 1),
(2, 1, '42253941', 'MARTINEZ OBREGON', 'ROBERTO LUIS','slack.png','rmartinezo', '$2y$10$YZB4J3DQJIMsayqMpuLCWOurdy.9fKqSI4Q716CyZzz65QOCe.Nw6', 2, 1);

/*Tabla inspecciones*/
CREATE TABLE `inspecciones` (
  `idinspeccion` smallint(2) NOT NULL AUTO_INCREMENT,
  `inspeccion` varchar(60) NOT NULL,
  `codigo` char(3) NOT NULL,
  `status` char(1) DEFAULT '1',
  PRIMARY KEY (idinspeccion))ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

INSERT INTO `inspecciones` (`idinspeccion`, `inspeccion`, `codigo`, `status`) VALUES
(1,'Satisfactorio','S',1),(2,'No Satisfactorio','NS',1),(3,'No Aplica','NA',1),(4,'Requerimiento Ing. a Proyecto y/o Minera','(*)',1),
(5,'No limita la operatividad del equipo','NL',1);

/*Tabla de perfiles*/
CREATE TABLE perfil  (
	idperfil smallint(4) NOT NULL AUTO_INCREMENT,
	perfil varchar(50) NOT NULL,
	status char(1) DEFAULT '1',
	PRIMARY KEY (idperfil)) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

INSERT INTO `perfil` (`idperfil`,`perfil`,`status`) VALUES (1,'PROGRAMADOR',1),(2,'DIGITADOR',1),(3,'VERIFICADOR',1),(4,'APROBADOR',1);

/*Tabla de modulos*/
CREATE TABLE modulos  (
	idmodulo smallint(4) NOT NULL AUTO_INCREMENT,
	descripcion varchar(200) NOT NULL,
	menu varchar(30) NOT NULL,
	icono varchar(25) NOT NULL,
	url varchar(25) NOT NULL,
	mini varchar(30) NOT NULL,
	orden smallint(4) NOT NULL,
	status char(1) DEFAULT '1',
	PRIMARY KEY (idmodulo)) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

INSERT INTO modulos (idmodulo,descripcion,menu,icono,url,mini,orden) VALUES 
(1,'Módulo de Registro de Usuarios y Accesos Personalizados','Módulo Usuarios','usuarios.png','usuarios','uil-users-alt',1),
(2,'Módulo de Registro de Certificados','Módulo Formularios','parametros.png','formularios','fa fa-cubes',2),
(3,'Módulo de Verificación de Certificados','Módulo Verificación','logistica.png','verificacion','uil-parcel',3),
(4,'Módulo de Aprobación de Certificados','Módulo Aprobación','citas.png','aprobacion','uil-file-check-alt',4);

/*Tabla relacion de perfiles y modulos*/
CREATE TABLE modulo_perfil  (	
	idmoduloperfil smallint(4) NOT NULL AUTO_INCREMENT,
	idmodulo smallint(4) NOT NULL,
	idperfil smallint(4) NOT NULL,
	status char(1) DEFAULT '1',
	PRIMARY KEY (idmoduloperfil),
	FOREIGN KEY (idmodulo) REFERENCES modulos (idmodulo) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (idperfil) REFERENCES perfil (idperfil) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

/*Programador*/INSERT INTO modulo_perfil(idmoduloperfil,idmodulo,idperfil,status) VALUES(1,1,1,1),(2,2,1,1),(3,3,1,1),(4,4,1,1);
/*Digitador*/INSERT INTO modulo_perfil(idmoduloperfil,idmodulo,idperfil,status) VALUES(5,2,2,1);
/*Verificador*/INSERT INTO modulo_perfil(idmoduloperfil,idmodulo,idperfil,status) VALUES(6,3,3,1);
/*Aprobador*/INSERT INTO modulo_perfil(idmoduloperfil,idmodulo,idperfil,status) VALUES(7,4,4,1);

/*Tabla menu para cada modulo*/
CREATE TABLE menu  (
	idmenu smallint(4) NOT NULL AUTO_INCREMENT,
	idmodulo smallint(4) NOT NULL,
	descripcion varchar(100) NOT NULL,
	nivel char(1) NOT NULL,
	url varchar(30) NOT NULL,
	icono varchar(30) NOT NULL,
	status char(1) DEFAULT '1',
	PRIMARY KEY (idmenu),
	FOREIGN KEY (idmodulo) REFERENCES modulos (idmodulo) ON DELETE CASCADE ON UPDATE CASCADE)ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

INSERT INTO menu(idmenu,idmodulo,descripcion,nivel,url,icono) VALUES
(1,1,'Nuevo Registro',0,'nuevo','uil-focus-add'),
(2,2,'Brazo Articulado',0,'brazoarticulado','uil-file-plus-alt'),
(3,4,'Certificados Emitidos',0,'emitidos','uil-file-download-alt'),
(4,4,'Certificados Anulados',0,'anulados','uil-file-download-alt');
/*(3,2,'Grúa Móvil','0','gruamovil','uil-file-plus-alt'),
(4,2,'Grúa Carga','0','gruacarga','uil-file-plus-alt');*/

/*Tabla relacion del perfil y los menu*/
CREATE TABLE permisos_menu  (
	idpermisosmenu smallint(4) NOT NULL AUTO_INCREMENT,
	idmenu smallint(4) NOT NULL,
	idperfil smallint(4) NOT NULL,
	status char(1) DEFAULT '1',
	PRIMARY KEY (idpermisosmenu),
	FOREIGN KEY (idmenu) REFERENCES menu (idmenu) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (idperfil) REFERENCES perfil (idperfil) ON DELETE CASCADE ON UPDATE CASCADE)ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

INSERT INTO permisos_menu(idpermisosmenu,idmenu,idperfil,status) VALUES
/*Permisos para el Programador*/
(1,1,1,1),
(2,2,1,1),
(3,3,1,1),
(4,4,1,1);

/*Tabla de status*/
CREATE TABLE status  (
	idstatus smallint(4) NOT NULL AUTO_INCREMENT,
	descripcion varchar(200) NOT NULL,
	status char(1) DEFAULT '1',
	PRIMARY KEY (idstatus))ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

INSERT INTO status(idstatus,descripcion,status) VALUES
(1,'Pend. Verificación',1),(2,'Pen. Aprobación',1),(3,'Emitido',1),(4,'Pend. Modificación',1),(5,'Anulado',1);

/*Tabla certificados*/
CREATE TABLE certificados  (
	idcertificado smallint(4) NOT NULL AUTO_INCREMENT,
	idgrua smallint(2) NOT NULL,
	ruc char(11) NOT NULL,
	razon_social varchar(60) NOT NULL,
	nro_os char(8) NOT NULL,
	nro_informe char(8) NOT NULL,
	nro_cert char(8) NOT NULL,
	fecha_emision date,
	fecha_inspeccion date,
	lugar_inspeccion varchar(100),
	auditor varchar(60),
	norma varchar(100),
	procedimiento varchar(100),
	tipo_equipo varchar(30),
	marca varchar(20),
	modelo varchar(20),
	nroidpin varchar(15),
	combustible varchar(15),
	marca_brazo varchar(15),
	tipomodelo_brazo varchar(20),
	seriebrazo varchar(20),
	anio_fab smallint(4),
	capacidad varchar(100),
	ejes smallint(2),
	longitud varchar(10),
	ancho varchar(10),
	alto varchar(10),
	corr1 char(7),
	corr2 char(7),
	corr3 char(7),
	historia1 smallint(2),
	obshistoria1 varchar(60),
	historia2 smallint(2),
	obshistoria2 varchar(60),
	historia3 smallint(2),
	obshistoria3 varchar(60),
	cabina1 smallint(2),
	obscabina1 varchar(60),
	cabina2 smallint(2),
	obscabina2 varchar(60),
	cabina3 smallint(2),
	obscabina3 varchar(60),
	cabina4 smallint(2),
	obscabina4 varchar(60),
	cabina5 smallint(2),
	obscabina5 varchar(60),
	cabina6 smallint(2),
	obscabina6 varchar(60),
	cabina7 smallint(2),
	obscabina7 varchar(60),
	cabina8 smallint(2),
	obscabina8 varchar(60),
	chasis1 smallint(2),
	obschasis1 varchar(60),
	chasis2 smallint(2),
	obschasis2 varchar(60),
	chasis3 smallint(2),
	obschasis3 varchar(60),
	chasis4 smallint(2),
	obschasis4 varchar(60),
	estab1 smallint(2),
	obsestab1 varchar(60),
	estab2 smallint(2),
	obsestab2 varchar(60),
	estab3 smallint(2),
	obsestab3 varchar(60),
	estab4 smallint(2),
	obsestab4 varchar(60),
	estab5 smallint(2),
	obsestab5 varchar(60),
	estab6 smallint(2),
	obsestab6 varchar(60),
	estab7 smallint(2),
	obsestab7 varchar(60),
	brazo1 smallint(2),
	obsbrazo1 varchar(60),
	brazo2 smallint(2),
	obsbrazo2 varchar(60),
	brazo3 smallint(2),
	obsbrazo3 varchar(60),
	brazo4 smallint(2),
	obsbrazo4 varchar(60),
	brazo5 smallint(2),
	obsbrazo5 varchar(60),
	brazo6 smallint(2),
	obsbrazo6 varchar(60),
	brazo7 smallint(2),
	obsbrazo7 varchar(60),
	brazo8 smallint(2),
	obsbrazo8 varchar(60),
	brazo9 smallint(2),
	obsbrazo9 varchar(60),
	brazo10 smallint(2),
	obsbrazo10 varchar(60),
	brazo11 smallint(2),
	obsbrazo11 varchar(60),
	gancho1 smallint(2),
	obsgancho1 varchar(60),
	gancho2 smallint(2),
	obsgancho2 varchar(60),
	gancho3 smallint(2),
	obsgancho3 varchar(60),
	gancho4 smallint(2),
	obsgancho4 varchar(60),
	gancho5 smallint(2),
	obsgancho5 varchar(60),
	gancho6 smallint(2),
	obsgancho6 varchar(60),
	gancho7 smallint(2),
	obsgancho7 varchar(60),
	gancho8 smallint(2),
	obsgancho8 varchar(60),
	estatica1 varchar(10),
	estatica2 varchar(10),
	estatica3 varchar(20),
	estatica4 varchar(10),
	estatica5 varchar(10),
	estatica6 varchar(10),
	estatica7 varchar(10),
	estaticaresult varchar(20),
	dinamica1 varchar(10),
	dinamica2 varchar(20),
	dinamicaresult varchar(20),
	fecha_registro date,
	idusuario_registro smallint(4),
	fecha_modificacion date,
	idusuario_modificacion smallint(4),
	observaciones varchar(120),
	idstatus smallint(1) DEFAULT '1',
	status char(1) DEFAULT '1',
	PRIMARY KEY (idcertificado),
	FOREIGN KEY (idstatus) REFERENCES status (idstatus) ON DELETE CASCADE ON UPDATE CASCADE)ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci;

/*Insercion de 1 fila de certificados*/
INSERT INTO `certificados` (`idcertificado`, `idgrua`, `ruc`, `razon_social`, `nro_os`, `nro_informe`, `nro_cert`, `fecha_emision`, `fecha_inspeccion`, `lugar_inspeccion`, `auditor`, `norma`, `procedimiento`, `tipo_equipo`, `marca`, `modelo`, `nroidpin`, `combustible`, `marca_brazo`, `tipomodelo_brazo`, `seriebrazo`, `anio_fab`, `capacidad`, `ejes`, `longitud`, `ancho`, `alto`, `historia1`, `obshistoria1`, `historia2`, `obshistoria2`, `historia3`, `obshistoria3`, `cabina1`, `obscabina1`, `cabina2`, `obscabina2`, `cabina3`, `obscabina3`, `cabina4`, `obscabina4`, `cabina5`, `obscabina5`, `cabina6`, `obscabina6`, `cabina7`, `obscabina7`, `cabina8`, `obscabina8`, `chasis1`, `obschasis1`, `chasis2`, `obschasis2`, `chasis3`, `obschasis3`, `chasis4`, `obschasis4`, `estab1`, `obsestab1`, `estab2`, `obsestab2`, `estab3`, `obsestab3`, `estab4`, `obsestab4`, `estab5`, `obsestab5`, `estab6`, `obsestab6`, `estab7`, `obsestab7`, `brazo1`, `obsbrazo1`, `brazo2`, `obsbrazo2`, `brazo3`, `obsbrazo3`, `brazo4`, `obsbrazo4`, `brazo5`, `obsbrazo5`, `brazo6`, `obsbrazo6`, `brazo7`, `obsbrazo7`, `brazo8`, `obsbrazo8`, `brazo9`, `obsbrazo9`, `brazo10`, `obsbrazo10`, `brazo11`, `obsbrazo11`, `gancho1`, `obsgancho1`, `gancho2`, `obsgancho2`, `gancho3`, `obsgancho3`, `gancho4`, `obsgancho4`, `gancho5`, `obsgancho5`, `gancho6`, `obsgancho6`, `gancho7`, `obsgancho7`, `gancho8`, `obsgancho8`, `estatica1`, `estatica2`, `estatica3`, `estatica4`, `estatica5`, `estatica6`, `estatica7`, `estaticaresult`, `dinamica1`, `dinamica2`, `dinamicaresult`, `fecha_registro`, `idusuario_registro`, `fecha_modificacion`, `idusuario_modificacion`, `observaciones`, `idstatus`, `status`) VALUES
(1, 1, 32767, 'HHSGHGDHGDHG HAGDHAG', 12365987, 32767, 125698, '2024-07-14', '2024-07-14', 'UWYUSADU UAYUY', 'EMPRESA DE NEGOCIOS', 'ASME B30.22 Ed. 2023 (ver Certificado: Parte 2. alcance)', 'GO-P-006 Ver. 13', 'grua articulada', 'ford', 'h5gfh', 'dsfhgsd5457f', 'gasoil', 'caterpillar', '5', 'sf65', 2005, '12365', 5, '25', '36', '52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-14', 1, NULL, NULL, NULL, 4, '1');
