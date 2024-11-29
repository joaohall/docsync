-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2024 às 03:09
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
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(10) UNSIGNED NOT NULL,
  `paciente_id_paciente` int(10) UNSIGNED NOT NULL,
  `medico_id_medico` int(10) UNSIGNED NOT NULL,
  `data_consuta` date DEFAULT NULL,
  `hora_consuta` time DEFAULT NULL,
  `descricao_consuta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `paciente_id_paciente`, `medico_id_medico`, `data_consuta`, `hora_consuta`, `descricao_consuta`) VALUES
(3, 0, 0, '0000-00-00', '00:00:00', ''),
(4, 1, 0, '0000-00-00', '00:00:00', ''),
(5, 1, 0, '0000-00-00', '00:00:00', ''),
(6, 1, 0, '0000-00-00', '00:00:00', ''),
(7, 1, 1, '2005-04-20', '20:04:00', 'teste'),
(8, 1, 1, '2006-04-20', '20:05:00', 'testeeeee'),
(9, 1, 1, '2002-04-20', '20:04:00', 'sdfgsdfsd'),
(10, 1, 1, '2005-04-20', '20:05:00', '13sdgsdfgsadfgsdf'),
(11, 1, 1, '2005-04-24', '20:05:00', 'dshugoji8s9odk0lp´g-ç[~sg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(10) UNSIGNED NOT NULL,
  `nome_medico` varchar(100) DEFAULT NULL,
  `crm_medico` varchar(10) DEFAULT NULL,
  `especialidade_medico` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `medico`
--

INSERT INTO `medico` (`id_medico`, `nome_medico`, `crm_medico`, `especialidade_medico`) VALUES
(1, 'asdasdas', '3123123', 'asdasdfa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(10) UNSIGNED NOT NULL,
  `nome_paciente` varchar(100) DEFAULT NULL,
  `dt_nasc_paciente` date DEFAULT NULL,
  `email_paciente` varchar(100) DEFAULT NULL,
  `endereco_paciente` varchar(100) DEFAULT NULL,
  `fone_paciente` varchar(20) DEFAULT NULL,
  `cpf_paciente` varchar(14) DEFAULT NULL,
  `sexo_paciente` char(1) DEFAULT NULL,
  `foto_paciente` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome_paciente`, `dt_nasc_paciente`, `email_paciente`, `endereco_paciente`, `fone_paciente`, `cpf_paciente`, `sexo_paciente`, `foto_paciente`) VALUES
(1, 'teste', '0000-00-00', 'easfgasfas@gmail.conm', 'asfasf', '1231231231', '124312312', 'm', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `prontuarios`
--

CREATE TABLE `prontuarios` (
  `id_prontuario` int(11) NOT NULL,
  `paciente_id_paciente` int(10) NOT NULL,
  `data_prontuario` date NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `prontuarios`
--

INSERT INTO `prontuarios` (`id_prontuario`, `paciente_id_paciente`, `data_prontuario`, `descricao`) VALUES
(6, 1, '2006-04-20', 'dgffdgsh'),
(7, 1, '2005-04-20', 'dgpkol´dsflpgç~d;g\r\n');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `consuta_FKIndex1` (`medico_id_medico`),
  ADD KEY `consuta_FKIndex2` (`paciente_id_paciente`);

--
-- Índices de tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices de tabela `prontuarios`
--
ALTER TABLE `prontuarios`
  ADD PRIMARY KEY (`id_prontuario`),
  ADD KEY `paciente_id_paciente` (`paciente_id_paciente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `prontuarios`
--
ALTER TABLE `prontuarios`
  MODIFY `id_prontuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
