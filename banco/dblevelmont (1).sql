-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/03/2024 às 20:14
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
(1, 'PROMOÇÃO/SEGUNDA AQUARTA', 'banner/cardapio.png', 'BANNER COM AS PROMOÇ', 'ATIVO'),
(2, 'Banner Promoção uma quinta', 'banner/banner.png', 'BANNER COM PROMOÇOES', 'DESATIVADO');

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
(1, '2024-02-21', '17:11:49', 100.25, 450.00, '15:00:00', 450.00),
(2, '2024-02-20', '15:06:00', 1200.00, 1400.00, '03:50:00', 1400.00),
(3, '2024-05-05', '19:50:00', 1500.00, 2560.00, '23:05:00', 2560.00),
(4, '2024-03-21', '17:00:00', 20.00, 500.00, '01:20:00', 500.00),
(5, '2024-03-21', '16:51:00', 1500.00, 1950.00, '19:45:00', 1950.00),
(6, '2024-03-21', '16:51:00', 600.00, 1100.00, '22:49:00', 1100.00);

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
  `statusCliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcliente`
--

INSERT INTO `tblcliente` (`idCliente`, `nomeCliente`, `dataNascCliente`, `telefoneCliente`, `enderecoCliente`, `statusCliente`) VALUES
(1, 'JUANA SILVA', '1999-05-07', '(11)963852147', 'RUA LIMOEIRO, BAIRRO MONICAS,456', 'ATIVO'),
(2, 'LUIZA SANTOS', '2003-01-01', '11963852741', 'RUA DAS FLORES, BAIRRO MONTES', 'DESATIVO'),
(3, 'MIRANDA OLIVEIRA', '0000-00-00', '(11)987654321', 'RUA LAVANDA, BAIRRO LUNA,154', 'DESATIVADO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcontato`
--

CREATE TABLE `tblcontato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(50) NOT NULL,
  `emailContato` varchar(80) NOT NULL,
  `telefoneContato` varchar(14) NOT NULL,
  `mensagemContato` varchar(150) NOT NULL,
  `dataContato` date NOT NULL,
  `statusContato` varchar(10) NOT NULL,
  `horaContato` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcontato`
--

INSERT INTO `tblcontato` (`idContato`, `nomeContato`, `emailContato`, `telefoneContato`, `mensagemContato`, `dataContato`, `statusContato`, `horaContato`) VALUES
(1, '', '', '', '', '2024-03-23', '', '16:05:59');

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
  `statusFuncionario` varchar(10) NOT NULL,
  `senhaFuncionario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblfuncionario`
--

INSERT INTO `tblfuncionario` (`idFuncionario`, `nomeFuncionario`, `dataNascFuncionario`, `cpfFuncionario`, `telefoneFuncionario`, `emailFuncionario`, `turnoFuncionario`, `funcaoFuncionario`, `acessoFuncionario`, `statusFuncionario`, `senhaFuncionario`) VALUES
(1, 'ANTONIO LOPES', '1998-05-09', '1234678912', '(11)947728922', 'luiza@email.com', 'NORTUNOR', 'ATENDENTE', 'MEDIO', 'ATIVO', NULL),
(2, 'JOÃO ANTONIO', '2002-01-01', '12345689012', '987654321', '', 'Noite', 'Atendente', 'Medio', 'ATIVO', NULL),
(3, 'JOÃO LUIZA', '1998-03-05', '123456789', '963852741', 'joaoluiza@email.com', 'Noite', 'ADM', 'Total', 'DESATIVO', NULL),
(4, '\" . $this->nome', '0000-00-00', '\" . $this->', '\" . $this->tel', '\" . $this->emailFuncionario . \"', '\" . $this-', '\" . $this->f', '\" . $this-', '\" . $this-', '\" . $this->senhaFunc');

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
  `preçoPagamento` double(10,2) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblpagamento`
--

INSERT INTO `tblpagamento` (`idPagamento`, `statusPagamento`, `preçoPagamento`, `idCliente`) VALUES
(1, 'PENDENTE', 30.00, 1);

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
(1, 'PIZZA DE CALABRESA', 'PIZZA', 'MOLHO DE TOMATE, CALABRESA E CEBOLA', 'SIMPLES', 30.00, 'produto/cardapio.png', 'DESATIVADO'),
(2, 'Calzone de dois queijos', 'Calzone', 'calzone', 'Broto', 15.00, 'produto/banner.png', 'ATIVO');

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
-- Índices de tabela `tblcontato`
--
ALTER TABLE `tblcontato`
  ADD PRIMARY KEY (`idContato`);

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
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblcaixa`
--
ALTER TABLE `tblcaixa`
  MODIFY `idCaixa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblcontato`
--
ALTER TABLE `tblcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  MODIFY `idEstoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblfuncionario`
--
ALTER TABLE `tblfuncionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `idPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblvenda`
--
ALTER TABLE `tblvenda`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
