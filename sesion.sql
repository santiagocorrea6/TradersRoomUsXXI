-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2020 a las 02:40:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sesion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `user` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `wpp` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`user`, `name`, `img`, `msg`, `instagram`, `facebook`, `wpp`) VALUES
('daniela', 'Daniela Flores', 'daniela.png', '¡Hola! Soy Daniela Flores, Entrenadora de UsXXI. El PAR de UsXXI llegó en el momento preciso para mí, encontré en la visión que me ofrecía el propósito que yo estaba buscando: vivir una vida diferente para mi y para mi familia; Encontré Libertad de Tiempo y Dinero.', 'https://www.instagram.com/daniflorez02/', 'https://www.facebook.com/danielaflorez02', 'https://api.whatsapp.com/send?phone=573235037459&text=Hola%20Dani!%20Mi%20nombre%20es%20_____%20soy%20de%20la%20ciudad%20de%20_____.%20Quiero%20m%C3%A1s%20informaci%C3%B3n%20y%20acceder%20al%20Curso%20Gratis'),
('nicole', 'Nicole Henao', 'nicole.png', '¡Hola! Soy Nicol Henao, Entrenadora de UsXXI. Hace un tiempo tomé la decisión de ingresar a este sistema educativo UniversidadsXXI porque miré la oportunidad y la visión de aprender a generar ingresos desde cualquier lugar, a cualquier hora.', 'https://www.instagram.com/nicole_henao/', 'https://www.facebook.com/levyhenaogarcia', 'https://api.whatsapp.com/send?phone=573045806516'),
('david', 'Juan David Mosquera', 'david.jpeg', '¡Hola! Soy Juan David Mosquera, Entrenador de UsXXI. Hace aproximadamente 2 años decidí implementar la metodología de UniversidadsXXI en mi vida, lo hice porque quería tomar el control de mi vida financiera, el control de mi tiempo, con el fin de darle tiempo de calidad a mis seres queridos.', 'https://www.instagram.com/jotadml212/', 'https://www.facebook.com/juanvidlo', 'https://api.whatsapp.com/send?phone=573146312413&text=Hola,%20me%20puedes%20dar%20mas%20informaci%C3%B3n....'),
('juan', 'Juan Manuel Caicedo', 'juan.jpg', '¡Hola! Soy Juan David Mosquera, Entrenador de UsXXI.Hace un año conocí UniversidadsXXI y su programa de alto rendimiento, en el momento no tenía conocimiento de lo que era el trading y la influencia, gracias a lo que he aprendido, hoy en dia soy libre laboralmente.', 'https://www.instagram.com/juanmanuel.caicedogil/', 'https://www.facebook.com/juanmanuel.caicedo.524', 'https://api.whatsapp.com/send?phone=573233189794&text=Hola,%20me%20puedes%20dar%20mas%20informaci%C3%B3n....'),
('bravo', 'Alejandro Bravo', 'bravo.jpg', '¡Hola! Soy Alejandro Bravo, Entrenador de UsXXI. Actualmente vivo en Medellín - Colombia, estoy en noveno semestre de Ingeniería Electrónica y muy orgulloso de ser educador de UniversidadsXXI. Te invito a que te unas a mi equipo en el cual estaré compartiendo mucho valor.', 'https://www.instagram.com/alejo.bra/?hl=es-la', 'https://www.facebook.com/profile.php?id=100000139019504', 'https://api.whatsapp.com/send?phone=573162064562&text=Hola!%20Acabo%20de%20ver%20tu%20web%20y%20quiero%20acceder%20al%20curso%20y%20las%20sesiones%20de%20trading%20gratis.%20Mi%20nombre%20es:'),
('johan', 'Johan Muñoz', 'johan.jpeg', '¡Hola! Soy Johan Muñoz, Entrenador de UsXXI. Actualmente pertenezco a la Armada nacional de Colombia y muy feliz y agradecido de formar parte del grupo de entrenadores de UniversidadsXXI. Llevo aproximadamente 15 meses en esta gran academia y la experiencia ha sido maravillosa.', 'https://www.instagram.com/jmlopez0296/?hl=es-la', 'https://www.facebook.com/Johanmunoz13', 'https://api.whatsapp.com/send?phone=573182115037&text=Hola%20Aleja!.%20Acabo%20de%20ver%20tu%20web%20y%20quiero%20acceder%20al%20curso%20y%20a%20las%20sesiones%20de%20Trading%20gratis.%20Mi%20nombre%20es%3A'),
('alejandra', 'Alejandra Velasquez', 'alejandra.jpeg', 'Hola! mi nombre es Alejandra Velasquez, soy mamá, esposa, economista, administradora de empresas, me apasiona el deporte, la comida saludable, soy coach de bienestar, empresaria digital y genero mis ingresos 100% de internet, escríbeme por mis redes sociales y haz parte de mi equipo.', 'https://www.instagram.com/alejafitnessoficial/?hl=es-la', 'https://www.facebook.com/alejafitnessoficial', 'https://api.whatsapp.com/send?phone=573182115037&text=Hola%20Aleja!.%20Acabo%20de%20ver%20tu%20web%20y%20quiero%20acceder%20al%20curso%20y%20a%20las%20sesiones%20de%20Trading%20gratis.%20Mi%20nombre%20es%3A'),
('jhon', 'Jhon Fredy Guerrero', 'jhon.jpg', '¡Hola! Soy Jhon Fredy Guerrero, Entrenador de UsXXI. Soy estudiante de Ing. Civil en la Universidad Nacional de Colombia y vivo actualmente en Manizales - Colombia. Hace 5 meses empecé el mejor proceso de formación en el mundo digital, proceso que me ha llevado a un desarrollo personal increíble.', 'https://www.instagram.com/jhguerrerod/?hl=es-la', 'https://www.facebook.com/jhonf.guerrero.35', 'https://api.whatsapp.com/send?phone=3174121319&text=Hola!%20Acabo%20de%20ver%20tu%20web%20y%20quiero%20acceder%20al%20curso%20y%20las%20sesiones%20de%20trading%20gratis.%20Mi%20nombre%20es:'),
('yamid', 'Yamid Prado', 'yamid.jpg', 'Hola, soy Yamid Prado de Colombia, y soy cofundador de USXXI, te invito a aprender cómo generar ingresos a través de nuestra metodología única y comprobada que te lleva paso a paso a crear y afianzar los hábitos que te permitirán vivir 100% de internet.', 'https://www.instagram.com/yamidpro/', 'https://www.facebook.com/yamid.prado', 'https://api.whatsapp.com/send?phone=573103140795&text=Hola%20Yamid!.%20Acabo%20de%20ver%20tu%20web%20y%20quiero%20acceder%20al%20curso%20y%20a%20las%20sesiones%20de%20Trading%20gratis.%20Mi%20nombre%20es%3A'),
('danis', 'Danis Bravo', 'danis.jpg', 'Danis Jaiver Bravo, Educador de UsXXI. ¡Hola! Te saludo desde Cali - Colombia, seas bienvenid@ a  UsXXI, plataforma educativa en alto rendimiento en las habilidades de TRADING - LIDERAZGO y MARKETING DIGITAL. Cuentas con toda mi experiencia y el  apoyo del equipo.', 'https://www.instagram.com/danis_bravo08/', 'https://www.facebook.com/jaiverdanis.bravobolanos', 'https://api.whatsapp.com/send?phone=573136244886&text=Hola%20Danis.%20Me%20puedes%20dar%20mas%20informaci%C3%B3n'),
('jairo', 'Jairo Betancourt', 'jairo.png', 'Hola ,quiero ayudarte y guiarte en tu proceso de desarrollo como trader profesional, aunque llevo menos de un año estudiando seguidamente, he logrado generar consistencia y rentabilidad en los mercados bursátiles.', 'https://www.instagram.com/iamjairobetancourt/', 'https://www.facebook.com/jairo.betancur.35', 'https://api.whatsapp.com/send?phone=3164925539&text=Hola!%20Acabo%20de%20ver%20tu%20web%20y%20quiero%20acceder%20al%20curso%20y%20las%20sesiones%20de%20trading%20gratis.%20Mi%20nombre%20es:'),
('alejandro', 'Alejandro Galvez', 'alejandro.jpg', '¡Hola! Soy Alejandro Galvez, Educador de UsXXI. Soy Ingeniero Mecatrónico de profesión, tengo 23 años y hace 2 años estaba buscando la oportunidad de emprender digitalmente, en medio de ese proceso encontré esta plataforma, UniversidadsXXI.', 'https://www.instagram.com/alejo.galvez.cardenas/', 'https://www.facebook.com/alejandro.galvez.16', 'https://api.whatsapp.com/send?phone=573173387276&text=Hola%20Alejandro%20!!%20acabo%20de%20ver%20tu%20web%20y%20quisiera%20recibir%20el%20cupo%20para%20la%20certificaci%C3%B3n%20gratuita%20y%20el%20Curso%20Gratis%20!!%20mi%20nombre%20es'),
('carlos', 'Jhan Carlos Valencia', 'carlos.jpg', '¡Hola! Soy Jhan Carlos Valencia, Educador de IM ACADEMY & UsXXI, Soy Ingeniero Mecatronico de profesión, actualmente vivo en la ciudad de Cali - Colombia, tengo 5 años de experiencia en los mercados financieros y hoy quiero invitarte a que formes parte de mi equipo en el cual estaré compartiendo tod', 'https://www.instagram.com/carlosvalenciafx/', 'https://www.facebook.com/jhancarlos.castillovalencia', 'https://t.me/carlosvalenciafx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `santiagocorrea54`
--

CREATE TABLE `santiagocorrea54` (
  `id` int(4) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `paridad` varchar(10) DEFAULT NULL,
  `inversion` int(20) DEFAULT NULL,
  `rentabilidad` int(5) DEFAULT NULL,
  `resultado` varchar(10) DEFAULT NULL,
  `ganancia` varchar(10) DEFAULT NULL,
  `capital` varchar(30) DEFAULT NULL,
  `observaciones` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `santiagocorrea54`
--

INSERT INTO `santiagocorrea54` (`id`, `fecha`, `paridad`, `inversion`, `rentabilidad`, `resultado`, `ganancia`, `capital`, `observaciones`) VALUES
(1, '2020-07-14', 'EUR/USD', 20, 80, 'Ganada', '16', '116', 'Soportes y Resistencias'),
(2, '2020-07-15', 'GBP/USD', 14, 90, 'Ganada', '12.6', '128.6', 'Patron BAT'),
(3, '2020-07-15', 'AUD/USD', 20, 75, 'Ganada', '15', '143.6', 'Soportes y Resistencias'),
(4, '2020-07-15', 'EUR/GBP', 15, 90, 'Perdida', '-15', '128.6', 'Ninguna'),
(5, '2020-07-16', 'AUD/USD', 12, 80, 'Ganada', '9.6', '138.2', 'Sesion con Alejandro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(4) NOT NULL,
  `capital` int(10) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`name`, `surname`, `user`, `email`, `pass`, `capital`, `foto`) VALUES
('santiago', 'correa', 'santiagocorrea54', 'santiagocorrea54@gmail.com', '1234', 100, 'img/perfil/perfil.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
