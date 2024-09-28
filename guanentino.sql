-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2024 a las 03:51:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guanentino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `id_rol`, `usuario`, `correo`, `password`) VALUES
(1, 2, 'npaez', 'npaez@colegioguanenta.edu.co', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pregunta`
--

CREATE TABLE `estado_pregunta` (
  `id_estado_p` int(11) NOT NULL,
  `correcto` int(11) NOT NULL,
  `incorrecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_pregunta`
--

INSERT INTO `estado_pregunta` (`id_estado_p`, `correcto`, `incorrecto`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL COMMENT '@',
  `telefono` varchar(50) NOT NULL,
  `colegio` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `id_rol`, `usuario`, `apellido`, `nombre`, `correo`, `telefono`, `colegio`, `clave`) VALUES
(1, 1, 'adrxn22', 'Forero', 'Adrian', 'adrianforero@colegioguanenta.edu.co', '3103385650', 'Colegio Guanenta', '1234'),
(20, 1, 'Spottebard', 'Cediel', 'David', 'davidcediel@colegioguanenta.edu.co', '3168535859', 'Colegio Guanenta', '1234'),
(21, 1, 'aaa', 'aaaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_pregunta`
--

CREATE TABLE `estudiante_pregunta` (
  `id_est_pregunta` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_estado_p` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `tiempo` time DEFAULT NULL,
  `fecha` date NOT NULL COMMENT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante_pregunta`
--

INSERT INTO `estudiante_pregunta` (`id_est_pregunta`, `id_estudiante`, `id_pregunta`, `id_estado_p`, `puntaje`, `tiempo`, `fecha`) VALUES
(1, 1, 2, 1, 10, NULL, '2024-09-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_materia`) VALUES
(1, 'español'),
(2, 'matematicas'),
(3, 'sociales y ciudadana'),
(4, 'ingles'),
(5, 'ciencias naturales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `contexto` longtext NOT NULL,
  `imagen1_contexto` text NOT NULL,
  `imagen2_contexto` text NOT NULL,
  `imagen3_contexto` text NOT NULL,
  `opcion1` text NOT NULL,
  `opcion2` text NOT NULL,
  `opcion3` text NOT NULL,
  `opcion_clave` text NOT NULL,
  `opcion_img1` text NOT NULL,
  `opcion_img2` text NOT NULL,
  `opcion_img3` text NOT NULL,
  `opcion_img_clave` text NOT NULL,
  `img1_pregunta` text NOT NULL,
  `img2_pregunta` text NOT NULL,
  `img3_pregunta` text NOT NULL,
  `explicacion _clave` text NOT NULL,
  `explicacion_rta_incorrecta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `id_materia`, `contexto`, `imagen1_contexto`, `imagen2_contexto`, `imagen3_contexto`, `opcion1`, `opcion2`, `opcion3`, `opcion_clave`, `opcion_img1`, `opcion_img2`, `opcion_img3`, `opcion_img_clave`, `img1_pregunta`, `img2_pregunta`, `img3_pregunta`, `explicacion _clave`, `explicacion_rta_incorrecta`) VALUES
(2, 1, 'El primer gran filósofo del siglo diecisiete (si exceptuamos a Bacon y Galileo) fue Descartes, y\r\nsi alguna vez se dijo de alguien que estuvo a punto de ser asesinado habrá que decirlo de él.\r\nLa historia es la siguiente, según la cuenta Baillet en su Vie de M. Descartes, tomo I, páginas\r\n102-103. En 1621, Descartes, que tenía unos veintiséis años, se hallaba como siempre\r\nviajando (pues era inquieto como una hiena) y, al llegar al Elba, tomó una embarcación para\r\nFriezland oriental. Nadie se ha enterado nunca de lo que podía buscar en Friezland oriental y\r\ntal vez él se hiciera la misma pregunta, ya que, al llegar a Embden, decidió dirigirse al instante\r\na Friezland occidental, y siendo demasiado impaciente para tolerar cualquier demora, alquiló\r\nuna barca y contrató a unos cuantos marineros.\r\nTan pronto habían salido al mar cuando hizo un agradable descubrimiento, al saber que\r\nse había encerrado en una guarida de asesinos. Se dio cuenta, dice M. Baillet, de que su\r\ntripulación estaba formada por criminales, no aficionados, señores, como lo somos nosotros,\r\nsino profesionales cuya máxima ambición, por el momento, era degollarlo.\r\nLa historia es demasiado amena para resumirla y a continuación la traduzco cuidadosamente\r\ndel original francés de la biografía: “M. Descartes no tenía más compañía que su criado, con\r\nquien conversaba en francés. Los marineros, creyendo que se trataba de un comerciante y no de\r\nun caballero, pensaron que llevaría dinero consigo y pronto llegaron a una decisión que no era\r\nen modo alguno ventajosa para su bolsa. Entre los ladrones de mar y los ladrones de bosques,\r\nhay esta diferencia, que los últimos pueden perdonar la vida a sus víctimas sin peligro para ellos,\r\nen tanto que si los otros llevan a sus pasajeros a la costa, corren grave peligro de ir a parar a\r\nla cárcel. La tripulación de M. Descartes tomó sus precauciones para evitar todo riesgo de esta\r\nnaturaleza. Lo suponían un extranjero venido de lejos, sin relaciones en el país, y se dijeron que\r\nnadie se daría el trabajo de averiguar su paradero cuando desapareciera”. Piensen, señores, en\r\nestos perros de Friezland que hablan de un filósofo como si fuese una barrica de ron consignada\r\na un barco de carga. “Notaron que era de carácter manso y paciente y, juzgándolo por la\r\ngentileza de su comportamiento y la cortesía de su trato, se imaginaron que debía ser un joven\r\ninexperimentado, sin situación ni raíces en la vida, y concluyeron que les sería fácil quitarle\r\nla vida. No tuvieron empacho en discutir la cuestión en presencia suya pues no creían que\r\nentendiese otro idioma además del que empleaba para hablar con su criado; como resultado\r\nde sus deliberaciones decidieron asesinarlo, arrojar sus restos al mar y dividirse el botín”.\r\nPerdonen que me ría, caballeros, pero a decir verdad me río siempre que recuerdo esta historia,\r\nen la que hay dos cosas que me parecen muy cómicas. Una de ellas es el pánico de Descartes,\r\na quien se le debieron poner los pelos de punta, ante el pequeño drama de su propia muerte,\r\nfuneral, herencia y administración de bienes. Pero hay otro aspecto que me parece aún más\r\ngracioso, y es que si los mastines de Friezland hubieran estado “a la altura”, no tendríamos\r\nfilosofía cartesiana.\r\n\r\nA juzgar por su estilo, tema y estructura, ¿en cuál de los siguientes contextos estaría inscrito\r\nmás apropiadamente el pasaje anterior?', '', '', '', 'A.En una revista académica, como parte de un artículo sobre los orígenes y la importancia de la filosofía cartesiana.', 'B.En un discurso ofrecido a un grupo conformado por aficionados al estudio de asesinatos en la historia de la filosofía.', 'C.En una crónica periodística, con motivo de un especial acerca de las muertes más\r\ncuriosas de la historia.', 'D.En un seminario dirigido a historiadores especialistas en la vida de los personajes\r\ninsignes del siglo XX.', '', '', '', '', '', '', '', '', ''),
(5, 2, 'Uno de los escenarios donde empezó a codearse el vallenato con la música que escuchaba y\r\nbailaba la burguesía —valses, mazurcas, canciones napolitanas— fue el de las colitas. Era este\r\nel nombre que recibían las ‘colas’ o finales de fiesta de la clase adinerada: bodas, bautizos,\r\ncumpleaños, festejos religiosos... Durante el sarao, mientras los señores se divertían con la\r\nmúsica europea que interpretaba una precaria orquesta provinciana, los trabajadores pasaban\r\nla fiesta en la cocina y los galpones a punta de acordeón, guacharaca y caja. Despachada la\r\norquesta, los de atrás eran invitados a pasar adelante, y patrones y vaqueros se sentaban a\r\ntomar y cantar juntos. Se ha discutido acerca del papel que cumplieron las colitas en esta historia.\r\nAlgunos dicen que estos remates de fiesta fueron el pabellón de maternidad del vallenato, pues\r\ncombinaron ritmos europeos y nativos: entre ambos dieron a luz los aires vallenatos. “Las\r\ncolitas son el ancestro directo del vallenato moderno”, afirma López Michelsen.\r\nPero parece más acertado pensar que las colitas no ayudaron a formar el género, sino a\r\ndivulgarlo. Para empezar, esta clase de fiestas improvisadas no se conocieron en toda la\r\nregión, sino tan sólo en la zona del Valle de Upar. En El Paso no hubo colitas. En muchos\r\nlugares del río tampoco. Y, por otra parte, los historiadores indican que las colitas surgieron a\r\ncomienzos del siglo XX, cuando ya el vallenato había empezado a coger ritmo con el trío del\r\ninstrumental clásico. En cambio, las piquerias y retos sí constituyeron desde el principio uno\r\nde los más efectivos moldes de creación, propagación y desarrollo del vallenato. La leyenda\r\nde Francisco el Hombre habla de su desafío con el diablo, a quien únicamente logra derrotar\r\ncuando le canta el Credo al revés. Los grandes acordeoneros viajaban durante días para\r\nacudir a piquerias, concertadas de antemano o a través de recados, como lo atestigua ‘La gota\r\nfría’: “Acordate Moralitos de aquel día / que estuviste en Urumita/y no quisiste hacer parada”.\r\nEl autor introduce la cita de López Michelsen con el fin de presentar la opinión de un\r\nconocedor del vallenato y', '', '', '', 'A.reforzar la tesis principal del texto, según la cual las colitas fueron divulgadoras del género.', 'B.señalar una posición discutible sobre el papel que desempeñaron las colitas en el\r\norigen del género.', 'C.legitimar la tesis principal del texto, según la cual las colitas originaron el vallenato moderno.', 'D.convencer al lector de que las colitas fueron las únicas divulgadoras del vallenato moderno.', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'estudiante'),
(2, 'profesor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `administrador_id_rol_user` (`id_rol`);

--
-- Indices de la tabla `estado_pregunta`
--
ALTER TABLE `estado_pregunta`
  ADD PRIMARY KEY (`id_estado_p`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `estudiante_id_rol_user` (`id_rol`);

--
-- Indices de la tabla `estudiante_pregunta`
--
ALTER TABLE `estudiante_pregunta`
  ADD PRIMARY KEY (`id_est_pregunta`),
  ADD KEY `estudiante_pregunta_id_estado_p_user` (`id_estado_p`),
  ADD KEY `estudiante_pregunta_id_estudiante_user` (`id_estudiante`),
  ADD KEY `estudiante_pregunta_id_pregunta_user` (`id_pregunta`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `pregunta_id_materia_user` (`id_materia`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado_pregunta`
--
ALTER TABLE `estado_pregunta`
  MODIFY `id_estado_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `estudiante_pregunta`
--
ALTER TABLE `estudiante_pregunta`
  MODIFY `id_est_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_id_rol_user` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_id_rol_user` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiante_pregunta`
--
ALTER TABLE `estudiante_pregunta`
  ADD CONSTRAINT `estudiante_pregunta_id_estado_p_user` FOREIGN KEY (`id_estado_p`) REFERENCES `estado_pregunta` (`id_estado_p`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `estudiante_pregunta_id_estudiante_user` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `estudiante_pregunta_id_pregunta_user` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_id_materia_user` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
