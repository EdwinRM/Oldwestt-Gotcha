USE mysql;
/*==============================================================*/
/* Creación de base de datos */
/*==============================================================*/
DROP DATABASE IF EXISTS oldwestgotcha;
CREATE DATABASE oldwestgotcha;

USE oldwestgotcha;

DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS datos_contacto;
DROP TABLE IF EXISTS servicios;

/*==============================================================*/
/* Tablas */
/*==============================================================*/
CREATE TABLE usuarios
(
   id_usuario   TINYINT NOT NULL,
   usuario          VARCHAR(20),
   pass              VARCHAR(40),
   PRIMARY KEY (id_usuario)
)
ENGINE = InnoDB;

CREATE TABLE datos_empresa
(
  id_empresa 	TINYINT NOT NULL AUTO_INCREMENT,
  correo			VARCHAR(255),
  facebook 		VARCHAR(255),
  instagram		VARCHAR(255),
  youtube			VARCHAR(255),
  horario			VARCHAR(100),
  telefono			VARCHAR(20),
  video                                            VARCHAR(255),
  PRIMARY KEY (id_empresa)
)
ENGINE = InnoDB;

CREATE TABLE horarios
(
    id_horario                  TINYINT NOT NULL AUTO_INCREMENT,
    dia                               VARCHAR(20),
    horario                        VARCHAR(50),
    status_normal            BOOLEAN,
    status_vacaciones   BOOLEAN,
    PRIMARY KEY (id_horario)
)
ENGINE = InnoDB;

CREATE TABLE servicios
( 
	id_servicio                 TINYINT NOT NULL AUTO_INCREMENT, 
	nombre		VARCHAR(50), 
	descripcion                VARCHAR(255), 
	columna1                   VARCHAR(50),
	columna2                   VARCHAR(50),
	PRIMARY KEY (id_servicio)
)
ENGINE = InnoDB;

CREATE TABLE paquetes
(
	id_paquete		TINYINT NOT NULL AUTO_INCREMENT,
	id_servicio		TINYINT NOT NULL,
	columna1                                      VARCHAR(50),
	columna2			VARCHAR(50),
	PRIMARY KEY (id_paquete),
                   FOREIGN KEY(id_servicio) REFERENCES servicios(id_servicio)
)
 ENGINE = InnoDB;
/*==============================================================*/
/* Inserts */
/*==============================================================*/

INSERT INTO usuarios VALUES 
                                     ('0','KabayabaAkihiko', SHA1('Headcliff')),
		('1','oldwestgotcha', SHA1('oldwestgotcha'));

INSERT INTO datos_empresa () VALUES
                                    (1, 'oldwestgotchacadereyta@gmail.com' , 'https://www.facebook.com/OldWestGotchaCadereyta/' , 'https://www.instagram.com/oldwestgotchacadereyta/' , 'https://www.youtube.com/channel/UCMycmCKRUHEnkJh9a39d4Zw' , 'Horario: 12:00 - 19:00 fines de semana' , '442 361 7779', 'https://www.youtube.com/embed/FqD6fmI_jQ0?ecver=1');

INSERT INTO servicios ( nombre, descripcion, columna1, columna2) VALUES
                                    ('Paquetes Individuales','Incluye, marcadora, careta, chaleco y Co2 (ilimitado)','Paintballs','Precios'),
                                    ('Combo por equipos','Incluye, marcadora, careta, chaleco y Co2 (ilimitado)','Paintballs','Precios'),
                                    ('Renta de caballos','La monta de estos es dentro del establecimiento de OldWestGotcha','Tiempo','Precios'),
                                    ('Espacio para Acampar','Contamos con casa de campaña (Hacer reservación de esta con anticipo)','Espacio','Precios');

INSERT INTO horarios VALUES
                                    ('1','Lunes','------','0','0'),
                                    ('2','Martes','12:00hrs -19:00hrs','0','1'),
                                    ('3','Miércoles','12:00hrs -19:00hrs','0','1'),
                                    ('4','Jueves','12:00hrs -19:00hrs','0','1'),
                                    ('5','Viernes','12:00hrs -19:00hrs','1','1'),
                                    ('6','Sábado','12:00hrs -19:00hrs','1','1'),
                                    ('7','Domingo','12:00hrs -19:00hrs','1','1');

INSERT INTO paquetes (id_servicio, columna1, columna2) VALUES
                                    ('1','100','$150'),
                                    ('1','200','$180'),
                                    ('1','300','$220'),
                                    ('1','500','$320'),
                                    ('2','800','$1000'),
                                    ('2','2000','$1500'),
                                    ('3','30 min','$50'),
                                    ('4','Ilimitado','$100 la noche');


/*==============================================================*/
/* Usuarios */
/*==============================================================*/
-- drop user if exists 'administradorgtocha'@'localhost';
-- create user 'administradorgotcha'@'localhost' identified by  'allmighty';
-- grant all privileges on *.* to 'administradorgotcha'@'localhost';
  