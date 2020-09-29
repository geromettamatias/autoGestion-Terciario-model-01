-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2020 a las 07:21:20
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
-- Base de datos: `epgs2terciario1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistenciaalumno`
--

CREATE TABLE `asistenciaalumno` (
  `idAsistencia` int(11) NOT NULL,
  `idAlumnos` text NOT NULL,
  `cantidad` text CHARACTER SET armscii8 NOT NULL,
  `fecha` text NOT NULL,
  `justifico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosalumnos`
--

CREATE TABLE `datosalumnos` (
  `idAlumnos` int(11) NOT NULL,
  `nombreAlumnos` text DEFAULT NULL,
  `dniAlumnos` text DEFAULT NULL,
  `cuilAlumnos` text DEFAULT NULL,
  `domicilioAlumnos` text DEFAULT NULL,
  `emailAlumnos` text DEFAULT NULL,
  `telefonoAlumnos` text DEFAULT NULL,
  `discapasidadAlumnos` text DEFAULT NULL,
  `nLegajoAlumno` text DEFAULT NULL,
  `legajoSituacion` text DEFAULT NULL,
  `obserbacionGeneral` text DEFAULT NULL,
  `passLogin` text DEFAULT NULL,
  `idPlan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosalumnos`
--

INSERT INTO `datosalumnos` (`idAlumnos`, `nombreAlumnos`, `dniAlumnos`, `cuilAlumnos`, `domicilioAlumnos`, `emailAlumnos`, `telefonoAlumnos`, `discapasidadAlumnos`, `nLegajoAlumno`, `legajoSituacion`, `obserbacionGeneral`, `passLogin`, `idPlan`) VALUES
(1, 'Gerometta Mathias', '32729129', '2032729122', '', 'epgs2sistema@gmail.com', '03624653591', 'Nada', '1', '1', 'Inscrpción', '1', '1'),
(2, 'Sosa Maria Luz', '3272221', '2012212211', 'padre', '1', '1', '1', '1', '1', '1', '1', '1'),
(3, 'sosa Hugo', '2222222', '2212212', '222222', '2222', '2', '2', '2', '2', '2', '2', '1'),
(4, 'juu', '44', '33', '3', '3', '3', '3', '3', '3', '3', '3', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscurso`
--

CREATE TABLE `datoscurso` (
  `idcurso` int(11) NOT NULL,
  `idInstitucion` text NOT NULL,
  `idPlan` text NOT NULL,
  `nResol` text NOT NULL,
  `nombCarre` text NOT NULL,
  `nombreCurso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datoscurso`
--

INSERT INTO `datoscurso` (`idcurso`, `idInstitucion`, `idPlan`, `nResol`, `nombCarre`, `nombreCurso`) VALUES
(1, '22035301', '1', '7595/14', 'Profesorado para la Educación Inicial', '2do AÑO Inicial'),
(2, '22035301', '1', '7595/14', 'Profesorado para la Educación Inicial', '3ro AÑO Inicial'),
(3, '22035301', '1', '7595/14', 'Profesorado para la Educación Inicial', '4to AÑO Inicial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscursohora`
--

CREATE TABLE `datoscursohora` (
  `idhora` int(11) NOT NULL,
  `idPlan` text NOT NULL,
  `idcurso` text NOT NULL,
  `idAsig` text NOT NULL,
  `carrera` text NOT NULL,
  `diaHorario` text NOT NULL,
  `horarioI` text NOT NULL,
  `horarioF` text NOT NULL,
  `idPersonal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datoscursohora`
--

INSERT INTO `datoscursohora` (`idhora`, `idPlan`, `idcurso`, `idAsig`, `carrera`, `diaHorario`, `horarioI`, `horarioF`, `idPersonal`) VALUES
(13, '1', '1', '12', 'Profesorado para la Educación Inicial', 'LUNES', '21:15', '22:13', '67'),
(14, '1', '1', '13', 'Profesorado para la Educación Inicial', 'MARTES', '18:15', '19:13', '67'),
(15, '1', '1', '14', 'Profesorado para la Educación Inicial', 'MARTES', '19:15', '20:13', '67'),
(16, '1', '1', '15', 'Profesorado para la Educación Inicial', 'MIERCOLES', '18:15', '19:13', '67'),
(17, '1', '1', '16', 'Profesorado para la Educación Inicial', 'MIERCOLES', '18:15', '19:13', '67'),
(18, '1', '1', '17', 'Profesorado para la Educación Inicial', 'MIERCOLES', '18:15', '19:13', '67'),
(19, '1', '1', '18', 'Profesorado para la Educación Inicial', 'MIERCOLES', '18:15', '19:13', '67'),
(20, '1', '1', '19', 'Profesorado para la Educación Inicial', 'MIERCOLES', '18:15', '19:13', '67'),
(21, '1', '2', '23', 'Profesorado para la Educación Inicial', 'MARTES', '19:00', '20:00', '67'),
(22, '1', '1', '11', 'Profesorado para la Educación Inicial', 'LUNES', '02:33', '03:13', '67'),
(23, '1', '1', '10', 'Profesorado para la Educación Inicial', 'LUNES', '00:12', '00:12', '67'),
(24, '1', '3', '31', 'Profesorado para la Educación Inicial', 'LUNES', '00:12', '00:12', '67');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonal`
--

CREATE TABLE `datospersonal` (
  `idPersonal` int(11) NOT NULL,
  `nombreDocente` text NOT NULL,
  `dniDocente` text NOT NULL,
  `actividadDocente` text NOT NULL,
  `tituloDocente` text NOT NULL,
  `nTituloDocente` text NOT NULL,
  `nTelefonicodocente` text NOT NULL,
  `domicilioDocente` text NOT NULL,
  `emailDocente` text NOT NULL,
  `passLogin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datospersonal`
--

INSERT INTO `datospersonal` (`idPersonal`, `nombreDocente`, `dniDocente`, `actividadDocente`, `tituloDocente`, `nTituloDocente`, `nTelefonicodocente`, `domicilioDocente`, `emailDocente`, `passLogin`) VALUES
(67, 'Kiewczun Matias', '32729125', 'Docente', 'Profesor', '1', '32323232', 'PADRE CERQ', 'geromettamatias@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `idFecha` int(11) NOT NULL,
  `desde` text NOT NULL,
  `hasta` text NOT NULL,
  `inscp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`idFecha`, `desde`, `hasta`, `inscp`) VALUES
(15, '2020-06-19', '2020-06-27', 'INSCRIPCIÓN CURSADO'),
(16, '2020-06-19', '2020-06-27', 'INSCRIPCIÓN FINAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrpcursado`
--

CREATE TABLE `inscrpcursado` (
  `idCursado` int(11) NOT NULL,
  `idAlumno` text NOT NULL,
  `idhora` text NOT NULL,
  `idPlan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscrpcursado`
--

INSERT INTO `inscrpcursado` (`idCursado`, `idAlumno`, `idhora`, `idPlan`) VALUES
(1, '4', '23', '1'),
(8, '1', '18', '1'),
(9, '1', '20', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrpfinal`
--

CREATE TABLE `inscrpfinal` (
  `idFinal` int(11) NOT NULL,
  `idAlumno` text NOT NULL,
  `idMesa` text NOT NULL,
  `idAsigEqui` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscrpfinal`
--

INSERT INTO `inscrpfinal` (`idFinal`, `idAlumno`, `idMesa`, `idAsigEqui`) VALUES
(2, '1', '19', ''),
(3, '1', '17', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrpmesa`
--

CREATE TABLE `inscrpmesa` (
  `idMesa` int(11) NOT NULL,
  `idhora` text NOT NULL,
  `idProfesS1` text NOT NULL,
  `idProfesS2` text NOT NULL,
  `fec1` text NOT NULL,
  `fec2` text NOT NULL,
  `idcurso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inscrpmesa`
--

INSERT INTO `inscrpmesa` (`idMesa`, `idhora`, `idProfesS1`, `idProfesS2`, `fec1`, `fec2`, `idcurso`) VALUES
(13, '14', '67', '67', '2020-06-19', '2020-06-19', '1'),
(16, '17', '67', '67', '2020-06-19', '2020-06-19', '1'),
(17, '19', '67', '67', '2020-06-19', '2020-06-19', '1'),
(18, '21', '67', '67', '2020-02-20', '2020-02-20', '2'),
(19, '13', '67', '67', '2020-06-19', '2020-06-19', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `idInstitucion` int(11) NOT NULL,
  `cue` text NOT NULL,
  `nombre` text NOT NULL,
  `domicilio` text NOT NULL,
  `tel` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idInstitucion`, `cue`, `nombre`, `domicilio`, `tel`, `email`) VALUES
(1, '22035301', 'E.P.G.S. N° 2 \"B° Emerenciano\"', 'Av. San Martín 3300, H3500 Resistencia, Chaco', '0362 462-9361', 'oficinaepgsn2@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucionplan`
--

CREATE TABLE `institucionplan` (
  `idPlan` int(11) NOT NULL,
  `idInstitucion` text NOT NULL,
  `numeroRegis` text NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucionplan`
--

INSERT INTO `institucionplan` (`idPlan`, `idInstitucion`, `numeroRegis`, `nombre`) VALUES
(1, '22035301', '7595/14', 'Profesorado para la Educación Inicial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucionplanasignatura`
--

CREATE TABLE `institucionplanasignatura` (
  `idAsig` int(11) NOT NULL,
  `idInstitucion` text NOT NULL,
  `idPlan` text NOT NULL,
  `ciclo` text NOT NULL,
  `nombre` text NOT NULL,
  `duracion` text NOT NULL,
  `hora` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucionplanasignatura`
--

INSERT INTO `institucionplanasignatura` (`idAsig`, `idInstitucion`, `idPlan`, `ciclo`, `nombre`, `duracion`, `hora`) VALUES
(1, '22035301', '1', '1er AÑO', 'Pedagogía', 'Anual', '3'),
(2, '22035301', '1', '1er AÑO', 'Alfabetización Académica', 'Anual', '3'),
(3, '22035301', '1', '1er AÑO', 'Didáctica General', 'Anual', '4'),
(4, '22035301', '1', '1er AÑO', 'Psicología de la Educación', 'Anual', '3'),
(5, '22035301', '1', '1er AÑO', 'Taller de Juegos y Actividades Lúdicas', 'Anual', '3'),
(6, '22035301', '1', '1er AÑO', 'Sujeto de la Educación Inicial', 'Anual', '5'),
(7, '22035301', '1', '1er AÑO', 'Literatura Infantil', 'Anual', '3'),
(8, '22035301', '1', '1er AÑO', 'Educación Intercultural', 'Anual', '3'),
(9, '22035301', '1', '1er AÑO', 'Práctica Docente I', 'Anual', '6'),
(10, '22035301', '1', '2do AÑO', 'Sociología de la Educación', '2do.Cuatr ', '4'),
(11, '22035301', '1', '2do AÑO', 'Educación Tecnológica y TIC', 'Anual', '3'),
(12, '22035301', '1', '2do AÑO', 'Historia Argentina Latinoamericana y Chaqueña', '1er. Cuatr', '4'),
(13, '22035301', '1', '2do AÑO', 'Alfabetización Temprana', 'Anual', '3'),
(14, '22035301', '1', '2do AÑO', 'Didáctica del Nivel Inicial', 'Anual', '5'),
(15, '22035301', '1', '2do AÑO', 'Lengua y Literatura y su Didáctica', 'Anual', '4'),
(16, '22035301', '1', '2do AÑO', 'Matemática y su Didáctica', 'Anual', '4'),
(17, '22035301', '1', '2do AÑO', 'Diseños y Construcción de Materiales y Objetos Lúdicos', 'Anual', '3'),
(18, '22035301', '1', '2do AÑO', 'Lenguajes Artísticos y su Didáctica', 'Anual', '4'),
(19, '22035301', '1', '2do AÑO', 'Práctica Docente II', 'Anual', '6'),
(20, '22035301', '1', '3ro AÑO', 'Filosofía', '1er. Cuatr', '4'),
(21, '22035301', '1', '3ro AÑO', 'Historia y Política de la Educación Latinoamericana, Argentina y Chaqueña', 'Anual', '3'),
(22, '22035301', '1', '3ro AÑO', 'Educación Física', 'Anual', '4'),
(23, '22035301', '1', '3ro AÑO', 'Proyectos Pedagógicos con TIC', 'Anual', '3'),
(24, '22035301', '1', '3ro AÑO', 'Problemática Contemporánea de la Educación Inicial', 'Anual', '3'),
(25, '22035301', '1', '3ro AÑO', 'Ciencias Naturales y su Didáctica', 'Anual', '4'),
(26, '22035301', '1', '3ro AÑO', 'Ciencias Sociales y su Didáctica', 'Anual', '4'),
(27, '22035301', '1', '3ro AÑO', 'Lenguajes Artísticos y su Didáctica: Teatro', '2do.Cuatr ', '4'),
(28, '22035301', '1', '3ro AÑO', 'Lenguajes Artísticos y su Didáctica: Lenguaje Musical', 'Anual', '4'),
(29, '22035301', '1', '3ro AÑO', 'Lenguajes Artísticos y su Didáctica: Lenguaje Corporal', '1er. Cuatr', '4'),
(30, '22035301', '1', '3ro AÑO', 'Práctica Docente III', 'Anual', '7'),
(31, '22035301', '1', '4to AÑO', 'Cultura y Lengua Originarias', '2do.Cuatr', '3'),
(32, '22035301', '1', '4to AÑO', 'Formación en Derechos Humanos, Ética y Ciudadanía', '1er. Cuatr', '4'),
(33, '22035301', '1', '4to AÑO', 'Lengua Extranjera', '1er. Cuatr', '3'),
(34, '22035301', '1', '4to AÑO', 'Inclusión Educativa', '1er. Cuatr', '3'),
(35, '22035301', '1', '4to AÑO', 'Educación Sexual Integral', '2do.Cuatr', '3'),
(36, '22035301', '1', '4to AÑO', 'Educación Rural', '1do.Cuatr', '3'),
(37, '22035301', '1', '4to AÑO', 'Residencia Pedagógica', 'Anual', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucionplanasignaturacorrelativa`
--

CREATE TABLE `institucionplanasignaturacorrelativa` (
  `idCorrelativa` int(11) NOT NULL,
  `idInstitucion` text NOT NULL,
  `idPlan` text NOT NULL,
  `idAsignatura` text NOT NULL,
  `nombreAsigPre` text NOT NULL,
  `nombreAsigPos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucionplanasignaturacorrelativa`
--

INSERT INTO `institucionplanasignaturacorrelativa` (`idCorrelativa`, `idInstitucion`, `idPlan`, `idAsignatura`, `nombreAsigPre`, `nombreAsigPos`) VALUES
(4, '22035301', '1', '23', 'Proyectos Pedagógicos con TIC', '11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `dniLogin` text NOT NULL,
  `passLogin` text NOT NULL,
  `tipoUsuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idLogin`, `dniLogin`, `passLogin`, `tipoUsuario`) VALUES
(44, '1', '1', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notasalumno`
--

CREATE TABLE `notasalumno` (
  `idNota` int(11) NOT NULL,
  `idAlumno` text NOT NULL,
  `idPlan` text NOT NULL,
  `idAsignatura` text NOT NULL,
  `notaRegular` text NOT NULL,
  `notaFinal` text NOT NULL,
  `situacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notasalumno`
--

INSERT INTO `notasalumno` (`idNota`, `idAlumno`, `idPlan`, `idAsignatura`, `notaRegular`, `notaFinal`, `situacion`) VALUES
(32, '1', '1', '11', '', '', 'REGULAR'),
(33, '1', '1', '23', '', '', 'REGULAR'),
(34, '1', '1', '10', '', '', 'REGULAR'),
(35, '1', '1', '12', '', '', 'REGULAR'),
(36, '1', '1', '13', '', '', 'REGULAR'),
(37, '1', '1', '16', '6', '', 'REGULAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preinsdatosalumnos`
--

CREATE TABLE `preinsdatosalumnos` (
  `idAlumnos` int(11) NOT NULL,
  `nombreAlumnos` text DEFAULT NULL,
  `dniAlumnos` text DEFAULT NULL,
  `cuilAlumnos` text DEFAULT NULL,
  `domicilioAlumnos` text DEFAULT NULL,
  `emailAlumnos` text DEFAULT NULL,
  `telefonoAlumnos` text DEFAULT NULL,
  `discapasidadAlumnos` text DEFAULT NULL,
  `nLegajoAlumno` text NOT NULL,
  `legajoSituacion` text NOT NULL,
  `obserbacionGeneral` text NOT NULL,
  `passLogin` text NOT NULL,
  `situacionAlta` text NOT NULL,
  `obserbacionAlta` text NOT NULL,
  `idPlan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preinsdatospersonal`
--

CREATE TABLE `preinsdatospersonal` (
  `idPersonal` int(11) NOT NULL,
  `nombreDocente` text NOT NULL,
  `dniDocente` text NOT NULL,
  `actividadDocente` text NOT NULL,
  `tituloDocente` text NOT NULL,
  `nTituloDocente` text NOT NULL,
  `nTelefonicodocente` text NOT NULL,
  `domicilioDocente` text NOT NULL,
  `emailDocente` text NOT NULL,
  `passDocente` text NOT NULL,
  `situacionAlta` text NOT NULL,
  `obserbacionAlta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistenciaalumno`
--
ALTER TABLE `asistenciaalumno`
  ADD PRIMARY KEY (`idAsistencia`);

--
-- Indices de la tabla `datosalumnos`
--
ALTER TABLE `datosalumnos`
  ADD PRIMARY KEY (`idAlumnos`);

--
-- Indices de la tabla `datoscurso`
--
ALTER TABLE `datoscurso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Indices de la tabla `datoscursohora`
--
ALTER TABLE `datoscursohora`
  ADD PRIMARY KEY (`idhora`);

--
-- Indices de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  ADD PRIMARY KEY (`idPersonal`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`idFecha`);

--
-- Indices de la tabla `inscrpcursado`
--
ALTER TABLE `inscrpcursado`
  ADD PRIMARY KEY (`idCursado`);

--
-- Indices de la tabla `inscrpfinal`
--
ALTER TABLE `inscrpfinal`
  ADD PRIMARY KEY (`idFinal`);

--
-- Indices de la tabla `inscrpmesa`
--
ALTER TABLE `inscrpmesa`
  ADD PRIMARY KEY (`idMesa`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`idInstitucion`);

--
-- Indices de la tabla `institucionplan`
--
ALTER TABLE `institucionplan`
  ADD PRIMARY KEY (`idPlan`);

--
-- Indices de la tabla `institucionplanasignatura`
--
ALTER TABLE `institucionplanasignatura`
  ADD PRIMARY KEY (`idAsig`);

--
-- Indices de la tabla `institucionplanasignaturacorrelativa`
--
ALTER TABLE `institucionplanasignaturacorrelativa`
  ADD PRIMARY KEY (`idCorrelativa`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indices de la tabla `notasalumno`
--
ALTER TABLE `notasalumno`
  ADD PRIMARY KEY (`idNota`);

--
-- Indices de la tabla `preinsdatosalumnos`
--
ALTER TABLE `preinsdatosalumnos`
  ADD PRIMARY KEY (`idAlumnos`);

--
-- Indices de la tabla `preinsdatospersonal`
--
ALTER TABLE `preinsdatospersonal`
  ADD PRIMARY KEY (`idPersonal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistenciaalumno`
--
ALTER TABLE `asistenciaalumno`
  MODIFY `idAsistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datosalumnos`
--
ALTER TABLE `datosalumnos`
  MODIFY `idAlumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `datoscurso`
--
ALTER TABLE `datoscurso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datoscursohora`
--
ALTER TABLE `datoscursohora`
  MODIFY `idhora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `datospersonal`
--
ALTER TABLE `datospersonal`
  MODIFY `idPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `idFecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `inscrpcursado`
--
ALTER TABLE `inscrpcursado`
  MODIFY `idCursado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `inscrpfinal`
--
ALTER TABLE `inscrpfinal`
  MODIFY `idFinal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inscrpmesa`
--
ALTER TABLE `inscrpmesa`
  MODIFY `idMesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `idInstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `institucionplan`
--
ALTER TABLE `institucionplan`
  MODIFY `idPlan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `institucionplanasignatura`
--
ALTER TABLE `institucionplanasignatura`
  MODIFY `idAsig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `institucionplanasignaturacorrelativa`
--
ALTER TABLE `institucionplanasignaturacorrelativa`
  MODIFY `idCorrelativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `notasalumno`
--
ALTER TABLE `notasalumno`
  MODIFY `idNota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `preinsdatosalumnos`
--
ALTER TABLE `preinsdatosalumnos`
  MODIFY `idAlumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `preinsdatospersonal`
--
ALTER TABLE `preinsdatospersonal`
  MODIFY `idPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
