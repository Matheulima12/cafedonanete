-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Maio-2021 às 14:53
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetom`
--
CREATE DATABASE IF NOT EXISTS `projetom` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetom`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `nome_produto` varchar(45) DEFAULT NULL,
  `qtd_produto` varchar(45) DEFAULT NULL,
  `valor_produto` varchar(45) DEFAULT NULL,
  `Cliente_idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `nome_produto`, `qtd_produto`, `valor_produto`, `Cliente_idCliente`) VALUES
(8, '2 SUCULENTAS FATIAS DE PICANHA, ACOMPANHADAS ', '1', '62.40', 2),
(11, 'POSTA DE BACALHAU, BATATAS INTEIRAS AO MURRO,', '1', '70,00', 2),
(12, 'FEIJOADA, ARROZ, COUVE, TORRESMO, COSTELINHA.', '1', '55,00', 2),
(14, 'PARMEGIANA DE FRANGO OU CARNE, GRATINADO COM ', '1', '45,00', 1),
(15, 'FEIJOADA, ARROZ, COUVE, TORRESMO, COSTELINHA.', '1', '55,00', 1),
(16, 'PARMEGIANA DE FRANGO OU CARNE, GRATINADO COM ', '1', '45,00', 3),
(17, 'PARMEGIANA DE FRANGO OU CARNE, GRATINADO COM ', '1', '45,00', 3),
(18, 'UMA MISTURA DE CARNE DE SOL, CALABRESA E BACO', '1', '65,00', 3),
(19, 'STROGONOFF DE FRANGO OU CARNE COM ARROZ E BAT', '1', '30,00', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome_cliente` varchar(45) NOT NULL,
  `numero_cliente` varchar(45) NOT NULL,
  `endereco_cliente` varchar(45) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `senha_cliente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome_cliente`, `numero_cliente`, `endereco_cliente`, `email_cliente`, `senha_cliente`) VALUES
(1, 'matheus lima', '92010282', 'paranoa quadra 23 conjunto h', 'matheuslima@gmail.com', '123456'),
(2, 'amanda maria', '92565585', 'paranoa quadra 23 conjunto h', 'amandamaria@gmail.com', '12345'),
(3, 'lucas', '92010282', 'paranoa quadra 23 conjunto h', 'lucas@gmail.com', '1234'),
(4, 'igor', '92155554', 'varjão, quadra 10 conjunto b casa 4', 'igor12@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `valor_total` varchar(45) NOT NULL,
  `data_pedido` varchar(45) NOT NULL,
  `Status_pedido` varchar(45) NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idpedido`, `valor_total`, `data_pedido`, `Status_pedido`, `Cliente_idCliente`) VALUES
(1, '35', '2000-05-10', 'Preparando', 2),
(2, '25', '2021-04-30', 'Preparando', 3),
(3, '25', '2021-05-05', 'Preparando', 3),
(4, '', '', 'Preparando', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_has_produto`
--

CREATE TABLE `pedido_has_produto` (
  `pedido_idpedido` int(11) NOT NULL,
  `produto_idproduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `nome_produto` varchar(45) NOT NULL,
  `valor_produto` double NOT NULL,
  `descricao_produto` varchar(45) NOT NULL,
  `quantidade_produto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome_produto`, `valor_produto`, `descricao_produto`, `quantidade_produto`) VALUES
(1, 'Bacalhau a Moda do Porto', 45, 'POSTA DE BACALHAU, BATATAS INTEIRAS AO MURRO,', '10'),
(2, 'Bacalhau a Moda do Porto', 35, 'POSTA DE BACALHAU, BATATAS INTEIRAS AO MURRO,', '10'),
(3, 'Picanha Brasileira', 34, '2 SUCULENTAS FATIAS DE PICANHA, ACOMPANHADAS ', '10'),
(4, 'teste', 100, 'POSTA DE BACALHAU, BATATAS INTEIRAS AO MURRO,', 'e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `fk_carrinho_Cliente1_idx` (`Cliente_idCliente`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `fk_pedido_Cliente_idx` (`Cliente_idCliente`);

--
-- Índices para tabela `pedido_has_produto`
--
ALTER TABLE `pedido_has_produto`
  ADD PRIMARY KEY (`pedido_idpedido`,`produto_idproduto`),
  ADD KEY `fk_pedido_has_produto_produto1_idx` (`produto_idproduto`),
  ADD KEY `fk_pedido_has_produto_pedido1_idx` (`pedido_idpedido`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `fk_carrinho_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_Cliente` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido_has_produto`
--
ALTER TABLE `pedido_has_produto`
  ADD CONSTRAINT `fk_pedido_has_produto_pedido1` FOREIGN KEY (`pedido_idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_has_produto_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
