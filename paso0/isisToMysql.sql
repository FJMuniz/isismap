SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `isisMigration`
--

CREATE TABLE `isis` (
  `id` int(255) NOT NULL,
  `MFN` TEXT,
  `tituloT` TEXT ,
  `tituloP` TEXT ,
  `tituloI` TEXT ,
  `tituloU` TEXT ,
  `autorN` TEXT ,
  `autorG` TEXT ,
  `autorF` TEXT ,
  `autorA` TEXT ,
  `autorH` TEXT ,
  `autorB` TEXT ,
  `autorALL` TEXT ,
  `edicion` TEXT ,
  `editorialL` TEXT ,
  `editorialG` TEXT ,
  `editorialE` TEXT ,
  `editorialD` TEXT ,
  `editorialT` TEXT ,
  `anoedicion` TEXT ,
  `colacion` TEXT ,
  `coleccion` TEXT ,
  `ISBN` TEXT ,
  `notas` TEXT ,
  `idioma` TEXT ,
  `tipo` TEXT ,
  `ubicacion` TEXT ,
  `soporte` TEXT ,
  `signaturaT` TEXT ,
  `signaturaX` TEXT ,
  `signaturaC` TEXT ,
  `signaturaH` TEXT ,
  `signatura1` TEXT ,
  `signatura2` TEXT ,
  `signatura3` TEXT ,
  `signaturaP` TEXT ,
  `signaturaS` TEXT ,
  `signaturaA` TEXT ,
  `signaturaV` TEXT ,
  `signaturaN` TEXT ,
  `signaturaE` TEXT ,
  `signaturaJ` TEXT ,
  `fechaI` TEXT ,
  `fechaM` TEXT ,
  `designacion` TEXT, 
  `NU` TEXT, 
  `NB` TEXT ,
`materia62` TEXT ,
`materia700` TEXT ,
  `bib12` TEXT ,
  `bib1` TEXT ,
  `bib2` TEXT ,
  `bib3` TEXT ,
  `bib4` TEXT ,
  `bib5` TEXT ,
  `bib6` TEXT ,
  `bib7` TEXT ,
  `bib8` TEXT ,
  `bib9` TEXT ,
  `bib10` TEXT ,
  `bib11` TEXT ,
  `bib14` TEXT ,
  `bib91` TEXT ,
  `bib92` TEXT ,
  `bib93` TEXT ,
  `bib94` TEXT ,
  `bib95` TEXT ,
  `bib96` TEXT ,
  `bib97` TEXT ,
  `bib98` TEXT ,
  `bib99` TEXT ,
  `bib89` TEXT ,
  `bib90` TEXT ,
  `bib100` TEXT ,
  `bib101` TEXT ,
  `bib102` TEXT ,
  `bib103` TEXT ,
  `bib104` TEXT ,
  `v129` TEXT ,
  `v130` TEXT ,
  `v131` TEXT ,
  `v132` TEXT ,
  `v133` TEXT ,
  `v134` TEXT ,
  `v135` TEXT ,
  `v136` TEXT ,
  `v137` TEXT ,
  `v138` TEXT ,
  `v139` TEXT ,
  `v140` TEXT 

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



ALTER TABLE `isis`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `isis`
  MODIFY `id` int(11)  AUTO_INCREMENT, AUTO_INCREMENT=1;