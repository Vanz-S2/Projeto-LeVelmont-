-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/01/2024 às 17:24
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
-- Banco de dados: `bdlevelmont`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblbanner`
--

CREATE TABLE `tblbanner` (
  `idBanner` int(11) NOT NULL,
  `nomeBanner` varchar(50) NOT NULL,
  `altBanner` varchar(50) NOT NULL,
  `dscBanner` varchar(20) NOT NULL,
  `statusBanner` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblbanner`
--

INSERT INTO `tblbanner` (`idBanner`, `nomeBanner`, `altBanner`, `dscBanner`, `statusBanner`) VALUES
(1, 'banenrCARROSSEL01', 'img/banner', 'banner do carrosel p', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcardapio`
--

CREATE TABLE `tblcardapio` (
  `idCardapio` int(11) NOT NULL,
  `nomeCardapio` varchar(50) NOT NULL,
  `dscCardapio` varchar(20) NOT NULL,
  `statusCardapio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcardapio`
--

INSERT INTO `tblcardapio` (`idCardapio`, `nomeCardapio`, `dscCardapio`, `statusCardapio`) VALUES
(1, 'PIZZA DE QUIJO', 'MOLHO DE TOMATE E QU', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcliente`
--

CREATE TABLE `tblcliente` (
  `idCliente` int(11) NOT NULL,
  `dataNascCliente` date NOT NULL,
  `nomeCliente` varchar(50) NOT NULL,
  `telefoneCliente` varchar(14) NOT NULL,
  `enderecoCliente` varchar(610) NOT NULL,
  `areaCliente` varchar(20) NOT NULL,
  `pontosCliente` double(10,2) NOT NULL,
  `statusCliente` varchar(10) NOT NULL,
  `idVenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblclientes`
--

CREATE TABLE `tblclientes` (
  `idCliente` int(11) NOT NULL,
  `dataNascCliente` date NOT NULL,
  `nomeCliente` varchar(50) NOT NULL,
  `telefoneCliente` varchar(14) NOT NULL,
  `enderecoCliente` varchar(610) NOT NULL,
  `areaCliente` varchar(20) NOT NULL,
  `pontosCliente` double(10,2) NOT NULL,
  `statusCliente` varchar(10) NOT NULL,
  `idVenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblestoque`
--

CREATE TABLE `tblestoque` (
  `idEstoqueTotal` int(11) NOT NULL,
  `nomeProdEstoque` varchar(50) NOT NULL,
  `marcaProdEstoque` varchar(20) NOT NULL,
  `dataFabricacao` date NOT NULL,
  `quantidadeEstoque` double(10,2) NOT NULL,
  `idProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblfuncionario`
--

CREATE TABLE `tblfuncionario` (
  `idFuncionario` int(11) NOT NULL,
  `nomeFuncionario` varchar(15) NOT NULL,
  `dataNascFuncionario` date NOT NULL,
  `cpfFuncionario` varchar(11) NOT NULL,
  `telefoneFuncionario` varchar(14) NOT NULL,
  `emailFuncionario` varchar(80) NOT NULL,
  `turnoFuncionario` varchar(10) NOT NULL,
  `funcaoFuncionario` varchar(12) NOT NULL,
  `acessoFuncionario` varchar(10) NOT NULL,
  `statusFuncionario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblfuncionario`
--

INSERT INTO `tblfuncionario` (`idFuncionario`, `nomeFuncionario`, `dataNascFuncionario`, `cpfFuncionario`, `telefoneFuncionario`, `emailFuncionario`, `turnoFuncionario`, `funcaoFuncionario`, `acessoFuncionario`, `statusFuncionario`) VALUES
(1, 'ANA LUIZ', '1998-05-05', '56782239420', '(11)97513246', 'analuiz@email.com', 'NOTURNO', 'ATENDENTE', 'MEDIO', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblgaleria`
--

CREATE TABLE `tblgaleria` (
  `idGaleria` int(11) NOT NULL,
  `nomeGaleria` varchar(50) NOT NULL,
  `dscGaleria` varchar(20) NOT NULL,
  `statusGaleria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblitensvenda`
--

CREATE TABLE `tblitensvenda` (
  `idItemVenda` int(11) NOT NULL,
  `nomeItemVenda` varchar(30) NOT NULL,
  `quantItemVenda` varchar(20) NOT NULL,
  `valortotalItemVenda` double(10,2) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idVenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblproduto`
--

CREATE TABLE `tblproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(50) NOT NULL,
  `tipoProduto` varchar(15) NOT NULL,
  `precoProduto` double(10,2) NOT NULL,
  `statusProduto` varchar(10) NOT NULL,
  `descricaoProduto` varchar(120) NOT NULL,
  `fotoProduto` varchar(50) NOT NULL,
  `categoriaProduto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblsecaocardapio`
--

CREATE TABLE `tblsecaocardapio` (
  `idsecaoCardapio` int(11) NOT NULL,
  `nomeCardapio` varchar(50) NOT NULL,
  `dscCardapio` varchar(20) NOT NULL,
  `statusCardapio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblvenda`
--

CREATE TABLE `tblvenda` (
  `idVenda` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `nomeProduto` varchar(15) NOT NULL,
  `dataVenda` date NOT NULL,
  `horaVenda` time NOT NULL,
  `valorVenda` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblvocesabia`
--

CREATE TABLE `tblvocesabia` (
  `idvoceSabia` int(11) NOT NULL,
  `nomevoceSabia` varchar(50) NOT NULL,
  `dscvoceSabia` varchar(20) NOT NULL,
  `statusvoceSabia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Índices de tabela `tblcardapio`
--
ALTER TABLE `tblcardapio`
  ADD PRIMARY KEY (`idCardapio`);

--
-- Índices de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `idVenda` (`idVenda`);

--
-- Índices de tabela `tblclientes`
--
ALTER TABLE `tblclientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  ADD PRIMARY KEY (`idEstoqueTotal`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Índices de tabela `tblfuncionario`
--
ALTER TABLE `tblfuncionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices de tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  ADD PRIMARY KEY (`idGaleria`);

--
-- Índices de tabela `tblitensvenda`
--
ALTER TABLE `tblitensvenda`
  ADD PRIMARY KEY (`idItemVenda`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idVenda` (`idVenda`);

--
-- Índices de tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `tblsecaocardapio`
--
ALTER TABLE `tblsecaocardapio`
  ADD PRIMARY KEY (`idsecaoCardapio`);

--
-- Índices de tabela `tblvenda`
--
ALTER TABLE `tblvenda`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `idFuncionario` (`idFuncionario`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tblvocesabia`
--
ALTER TABLE `tblvocesabia`
  ADD PRIMARY KEY (`idvoceSabia`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblcardapio`
--
ALTER TABLE `tblcardapio`
  MODIFY `idCardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tblclientes`
--
ALTER TABLE `tblclientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  MODIFY `idEstoqueTotal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblfuncionario`
--
ALTER TABLE `tblfuncionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  MODIFY `idGaleria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblitensvenda`
--
ALTER TABLE `tblitensvenda`
  MODIFY `idItemVenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblsecaocardapio`
--
ALTER TABLE `tblsecaocardapio`
  MODIFY `idsecaoCardapio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblvenda`
--
ALTER TABLE `tblvenda`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tblvocesabia`
--
ALTER TABLE `tblvocesabia`
  MODIFY `idvoceSabia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD CONSTRAINT `tblcliente_ibfk_1` FOREIGN KEY (`idVenda`) REFERENCES `tblvenda` (`idVenda`);

--
-- Restrições para tabelas `tblestoque`
--
ALTER TABLE `tblestoque`
  ADD CONSTRAINT `tblestoque_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `tblproduto` (`idProduto`);

--
-- Restrições para tabelas `tblitensvenda`
--
ALTER TABLE `tblitensvenda`
  ADD CONSTRAINT `tblitensvenda_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `tblproduto` (`idProduto`),
  ADD CONSTRAINT `tblitensvenda_ibfk_2` FOREIGN KEY (`idVenda`) REFERENCES `tblvenda` (`idVenda`);

--
-- Restrições para tabelas `tblvenda`
--
ALTER TABLE `tblvenda`
  ADD CONSTRAINT `tblvenda_ibfk_1` FOREIGN KEY (`idFuncionario`) REFERENCES `tblfuncionario` (`idFuncionario`),
  ADD CONSTRAINT `tblvenda_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `tblcliente` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
