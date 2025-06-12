-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2025 às 03:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_filmes`
--
CREATE DATABASE IF NOT EXISTS `bd_filmes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_filmes`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `filmes` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `avaliacao` int(11) NOT NULL,
  `historia` text NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id`, `filmes`, `categoria`, `avaliacao`, `historia`, `foto`) VALUES
(1, 'Jurassic Park', 'Aventura', 8, 'uma pequena equipe de geneticistas criam um parque temático em uma ilha, onde as principais atrações são variadas espécies de dinossauros recriados através da engenharia genética.', 'https://m.media-amazon.com/images/M/MV5BN2FmMjhlZDYtNmYyMy00NTdjLTlhYzYtZWNlMDY2MmUzOGM2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'),
(2, 'Interestelar', 'Ficção Científica', 9, 'Exploradores espaciais viajam por buracos de minhoca em busca de um novo lar para a humanidade.', 'https://m.media-amazon.com/images/I/81dCvRCjkzL._AC_UF894,1000_QL80_.jpg'),
(3, 'O Rei Leão', 'Animação', 8, 'Um jovem leão foge de seu reino após a morte de seu pai e retorna para reivindicar o trono.', 'https://img.elo7.com.br/product/zoom/26A908E/big-poster-filme-o-rei-leao-2019-lo01-90x60-cm-presente-geek.jpg'),
(4, 'John Wick', 'Ação', 10, 'Um ex-assassino de aluguel volta ao mundo do crime para se vingar dos que arruinaram sua vida.', 'https://br.web.img3.acsta.net/pictures/19/04/09/19/11/4826975.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
