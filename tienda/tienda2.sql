create database tienda2;
use tienda2;


create table perfil (
	nombre char(45) primary key,
	descripcion varchar(30)
) engine=innodb;

CREATE TABLE usuario ( 
    user varchar(45) primary key ,
    clave varchar(50),
    nombre varchar(50),
    email varchar(80),
    fecha date,
    perfil char(45) not null,
    index (perfil),
	foreign key (perfil) references perfil (nombre),
    baja boolean
);

CREATE TABLE producto(
    codProd varchar(50) primary key,
    nombre varchar(100),
    descripcion varchar(900),
    precio float,
    stock int,
    img varchar(100),
    baja boolean
);

CREATE TABLE venta(
    id int primary key auto_increment,
    user varchar(50) foreign key (usuario) references usuario (user),
    fecha date,
    codProd varchar(50) foreign key (producto) references producto (codProd),
    cantidad int,
    precio float foreign key (producto) references producto (precio)
);

CREATE TABLE albaran(
    id int primary key auto_increment,
    fecha date,
    codProd varchar(50) foreign key (producto) references producto (codProd),
    cantidad int,
    user varchar(50)  foreign key (usuario) references usuario (user)
);

INSERT INTO perfil VALUES ('ADM', 'Administrador');
INSERT INTO perfil VALUES('MOD', 'Moderador');
INSERT INTO perfil VALUES ('USER', 'Usuario');

INSERT INTO usuario VALUES ('Lorena', 'lore','Lorena Aranda', 'lorena@gmail.com', '2001/09/27', 'ADM', false);
INSERT INTO usuario VALUES ('Pepe','pepe','Pepe Lopez', 'pepe@gmail.com', '1965/02/13', 'MOD', false);
INSERT INTO usuario VALUES ('Rocio', 'rocio', 'Rocio Alonso' ,'rocio@gmail.com', '1989/12/25', 'USER', false);


INSERT INTO producto VALUES ('TPMAT0GXW31', 'Harry Potter en el Andén 9 3/4', 'Este muñeco de Harry Potter te fascinará si eres un fanático de las películas o si tus pequeños son seguidores del personaje. Además, puedes recordar una de las escenas de la película que más destacaron. El escenario es increíble. Esta figura de serie será perfecta en tu hogar como parte de una colección.', 11.99, 10, '/img/TPMAT0GXW31_1.jpeg', false);
/*INSERT INTO producto ('TPMAT0HDJ46', 'Barbie Extra Muñeca Camiseta de Baloncesto','Las muñecas Barbie® Extra se atreven con la última moda y con los colores más vivos. ¡Y tienen las ideas muy claras! Cada muñeca Barbie® tiene su propio estilo exclusivo, muy alegre y ligeramente exagerado. Y sus mascotas —cada una de ellas con una diferente, pero todas adorables— también desprenden toneladas de personalidad. Con las muñecas Barbie® Extra.', 16.99, 5, '/img/TPMAT0HDJ46_1.jpeg');*/
INSERT INTO producto VALUES ('TPMGA018534', 'LOL Deluxe Mega Surprise Box Caja Sorpresa', 'Abre la caja misteriosa que contiene todo lo que te puedes imaginar de las LOL Surprise. La Deluxe Mega Gift Box Surprise contiene más de 35 sorpresas. Cada caja es diferente, por lo que nunca sabes qué sorpresas te encontrarás. Es el regalo perfecto para cualquier amante de los juguetes porque hay algo para todos. ¡También incluye una experiencia única de desempaquetado!', 14.99, 3,'/img/TPMGA018534_1.jpeg', false);
INSERT INTO producto VALUES ('TPMGA076938', 'Lalaloopsy Muñeca Silly Hair Scoops Waffle Cone', '¡Las muñecas Lalaloopsy Silly Hair tienen un cabello divertido que se dobla en todas direcciones! ¡Es fácil para los más pequeños peinar el cabello de la muñeca Lalaloopsy y la cola de su mascota también! Incluye un divertido cepillo para peinar el cabello, 4 clips y 6 cuentas para el cabello. El niño también puede usar y compartir las pinzas para el cabello. Scoops Waffle Cone se hizo con un tazón de helado napolitano. Le encanta la variedad, pero tiene problemas para decidirse.', 15.99, 2, '/img/TPMGA076938_1.jpeg', false);
INSERT INTO producto VALUES ('TPSIB159989', 'Garaje Supercity Majorette', 'Garaje Supercity de 7 niveles y múltiples funciones de juego. Con 2 ascensores motorizados, 6 áreas separadas de luz y sonido, 35 espacios de parking. Incluye 6 coches de metal y un tren eléctrico a pilas. Tiene taller de túnel y auto-lavado, helipuerto, comisaría de policía con escondite secreto, gasolinera con luz y sonido… y mucho más, ¡La diversión está garantizada! Medidas del producto montado: 128 x 78 x73cm.', 59.99, 8, '/img/TPSIB159989_1.jpeg', false);
INSERT INTO producto VALUES ('TPCEF021855', 'Juego Anatomicefa Plus', 'Explora la increíble ciencia que se oculta en el Cuerpo Humano. Aprende acerca de músculos y huesos, digestión y circulación, ADN, ARN y sistema inmunológico, ciencia cerebral y percepción sensorial. Observa reacciones químicas sorprendentes y reproduce en tubos de ensayo lo que ocurre en el sistema digestivo. Investiga la sangre y la circulación con una simulación de tipificación sanguínea. Extrae ADN de fruta y saliva, ensaya con la proteína de la leche. Investiga las propiedades únicas del agua que hacen que sea esencial para la vida Haz modelos anatómicos y experimenta con músculos, huesos y percepción sensorial. Iníciate en la exploración de la Química y la Biología del Cuerpo Humano.', 34.99, 9, '/img/TPCEF021855_1.jpeg', false);

INSERT INTO venta VALUES ('1', 'Lorena ', '2023/01/02', 'TPCEF021855', 2, 69.98);
INSERT INTO venta VALUES ('2', 'Pepe ', '2022/12/08', 'TPSIB159989', 3, 179.97);
INSERT INTO venta VALUES ('3', 'Rocio', '2022/05/16','TPMGA076938', 1, 15.99);

INSERT INTO albaran VALUES ('1', '2023/01/02','TPCEF021855', 2, 'Lorena ');
INSERT INTO albaran VALUES ('2','2022/12/08', 'TPSIB159989', 3, 'Pepe ');
INSERT INTO albaran VALUES ('3','2022/05/16','TPMGA076938', 1, 'Rocio');