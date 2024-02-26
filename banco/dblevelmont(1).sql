-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/02/2024 às 21:22
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
-- Banco de dados: `dblevelmont`
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
(1, 'PROMOÇÃO/TERÇAS', 'img/bannar', 'BANNER COM AS PROMOÇ', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcaixa`
--

CREATE TABLE `tblcaixa` (
  `idCaixa` int(11) NOT NULL,
  `dataCaixa` date NOT NULL,
  `horaCaixa` time NOT NULL,
  `aberturaCaixaValor` double(10,2) NOT NULL,
  `fechamentoCaixaValor` double(10,2) NOT NULL,
  `horaFechamentoCaixa` time DEFAULT NULL,
  `valorTotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcaixa`
--

INSERT INTO `tblcaixa` (`idCaixa`, `dataCaixa`, `horaCaixa`, `aberturaCaixaValor`, `fechamentoCaixaValor`, `horaFechamentoCaixa`, `valorTotal`) VALUES
(1, '2024-02-21', '17:11:49', 100.25, 980.95, '01:30:15', 880.95);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcliente`
--

CREATE TABLE `tblcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(50) NOT NULL,
  `dataNascCliente` date NOT NULL,
  `telefoneCliente` varchar(14) NOT NULL,
  `enderecoCliente` varchar(610) NOT NULL,
  `pagamentosPendentes` double(10,2) NOT NULL,
  `statusCliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcliente`
--

INSERT INTO `tblcliente` (`idCliente`, `nomeCliente`, `dataNascCliente`, `telefoneCliente`, `enderecoCliente`, `pagamentosPendentes`, `statusCliente`) VALUES
(1, 'MARIA OLIVEIRA', '1999-12-10', '(11)945,12347', 'RUA:DAS ALEGRIAS/BAIRRO MIRA', 35.00, 'PENDENTE');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblestoque`
--

CREATE TABLE `tblestoque` (
  `idEstoque` int(11) NOT NULL,
  `nomedoProduto` varchar(100) NOT NULL,
  `quantidade` double(10,2) NOT NULL,
  `preçoUnitário` double(10,2) NOT NULL,
  `datadeValidade` date DEFAULT NULL,
  `fornecedor` varchar(50) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `statusEstoque` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblestoque`
--

INSERT INTO `tblestoque` (`idEstoque`, `nomedoProduto`, `quantidade`, `preçoUnitário`, `datadeValidade`, `fornecedor`, `Categoria`, `statusEstoque`) VALUES
(1, 'QUEIJO', 15.00, 250.00, '2024-09-09', '3 MARIAS', 'LACTESINIOS', 'ATIVO');

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
(1, 'ANTONIO LOPES', '1998-05-09', '1234678912', '(11)947728922', 'antonio@email.com', 'NORTUNOR', 'ATENDENTE', 'MEDIO', 'ATIVO');

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

--
-- Despejando dados para a tabela `tblgaleria`
--

INSERT INTO `tblgaleria` (`idGaleria`, `nomeGaleria`, `dscGaleria`, `statusGaleria`) VALUES
(1, 'MARCA ILS', 'LOGO DA MARCA', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblitensvenda`
--

CREATE TABLE `tblitensvenda` (
  `idItemVenda` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idVenda` int(11) NOT NULL,
  `nomeItemVenda` varchar(100) NOT NULL,
  `quantidadeItemVenda` double(10,2) NOT NULL,
  `valorTotalItemVenda` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblitensvenda`
--

INSERT INTO `tblitensvenda` (`idItemVenda`, `idProduto`, `idVenda`, `nomeItemVenda`, `quantidadeItemVenda`, `valorTotalItemVenda`) VALUES
(1, 1, 1, 'PIZZA CALABRESA', 2.00, 65.90);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblpagamento`
--

CREATE TABLE `tblpagamento` (
  `idPagamento` int(11) NOT NULL,
  `statusPagamento` varchar(10) NOT NULL,
  `tipoPagamento` varchar(20) NOT NULL,
  `preçoPagamento` double(10,2) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblpagamento`
--

INSERT INTO `tblpagamento` (`idPagamento`, `statusPagamento`, `tipoPagamento`, `preçoPagamento`, `idCliente`) VALUES
(1, 'PENDENTE', 'CARTÃO CREDITO', 30.00, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblproduto`
--

CREATE TABLE `tblproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(50) NOT NULL,
  `tipoProduto` varchar(15) NOT NULL,
  `descricaoProduto` varchar(120) NOT NULL,
  `categoriaProduto` varchar(20) NOT NULL,
  `precoProdutoUnitario` double(10,2) NOT NULL,
  `fotoProduto` varchar(50) NOT NULL,
  `statusProduto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblproduto`
--

INSERT INTO `tblproduto` (`idProduto`, `nomeProduto`, `tipoProduto`, `descricaoProduto`, `categoriaProduto`, `precoProdutoUnitario`, `fotoProduto`, `statusProduto`) VALUES
(1, 'PIZZA DE CALABRESA', 'PIZZA', 'MOLHO DE TOMATE, CALABRESA E CEBOLA', 'SIMPLES', 25.00, 'pizzaCalabresa.png', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblvenda`
--

CREATE TABLE `tblvenda` (
  `idVenda` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `produtodaVenda` varchar(20) NOT NULL,
  `quantidadeVenda` double(10,2) NOT NULL,
  `preçoVenda` double(10,2) NOT NULL,
  `dataVenda` date NOT NULL,
  `horaVenda` time NOT NULL,
  `statusVenda` varchar(10) NOT NULL,
  `idPagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblvenda`
--

INSERT INTO `tblvenda` (`idVenda`, `idFuncionario`, `idCliente`, `produtodaVenda`, `quantidadeVenda`, `preçoVenda`, `dataVenda`, `horaVenda`, `statusVenda`, `idPagamento`) VALUES
(1, 1, 1, 'PIZZA DE CALABRESA', 1.00, 25.00, '2024-02-21', '16:18:32', 'ATIVO', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Índices de tabela `tblcaixa`
--
ALTER TABLE `tblcaixa`
  ADD PRIMARY KEY (`idCaixa`);

--
-- Índices de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  ADD PRIMARY KEY (`idEstoque`);

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
  ADD KEY `fk_produtos` (`idProduto`),
  ADD KEY `fk_venda` (`idVenda`);

--
-- Índices de tabela `tblpagamento`
--
ALTER TABLE `tblpagamento`
  ADD PRIMARY KEY (`idPagamento`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `tblvenda`
--
ALTER TABLE `tblvenda`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `idPagamento` (`idPagamento`),
  ADD KEY `fk_funcionario` (`idFuncionario`),
  ADD KEY `fk_cliente` (`idCliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblcaixa`
--
ALTER TABLE `tblcaixa`
  MODIFY `idCaixa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  MODIFY `idEstoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblfuncionario`
--
ALTER TABLE `tblfuncionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  MODIFY `idGaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblitensvenda`
--
ALTER TABLE `tblitensvenda`
  MODIFY `idItemVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblpagamento`
--
ALTER TABLE `tblpagamento`
  MODIFY `idPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblvenda`
--
ALTER TABLE `tblvenda`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblitensvenda`
--
ALTER TABLE `tblitensvenda`
  ADD CONSTRAINT `fk_produtos` FOREIGN KEY (`idProduto`) REFERENCES `tblproduto` (`idProduto`),
  ADD CONSTRAINT `fk_venda` FOREIGN KEY (`idVenda`) REFERENCES `tblvenda` (`idVenda`);

--
-- Restrições para tabelas `tblpagamento`
--
ALTER TABLE `tblpagamento`
  ADD CONSTRAINT `tblpagamento_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tblcliente` (`idCliente`);

--
-- Restrições para tabelas `tblvenda`
--
ALTER TABLE `tblvenda`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`idCliente`) REFERENCES `tblcliente` (`idCliente`),
  ADD CONSTRAINT `fk_funcionario` FOREIGN KEY (`idFuncionario`) REFERENCES `tblfuncionario` (`idFuncionario`),
  ADD CONSTRAINT `tblvenda_ibfk_1` FOREIGN KEY (`idPagamento`) REFERENCES `tblpagamento` (`idPagamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
