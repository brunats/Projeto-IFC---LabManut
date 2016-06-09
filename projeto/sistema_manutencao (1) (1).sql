-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sistema_manutencao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_admin`
--

CREATE TABLE IF NOT EXISTS `cad_admin` (
  `cod_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cad_admin`
--

INSERT INTO `cad_admin` (`cod_admin`, `nome`, `login`, `senha`) VALUES
(1, 'Bruna Tavares Silva', 'bruna', 'bruna'),
(2, 'Felipe Flamarion da Conceição', 'flamarion', 'senha'),
(3, 'Carolina Cruz', 'carol', 'carolcruz');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_labs`
--

CREATE TABLE IF NOT EXISTS `cad_labs` (
  `cod_lab` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `local` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_lab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cad_labs`
--

INSERT INTO `cad_labs` (`cod_lab`, `numero`, `local`) VALUES
(1, 1, 'PrÃ©dio InformÃ¡tica'),
(2, 2, 'PrÃ©dio InformÃ¡tica'),
(3, 3, 'PrÃ©dio InformÃ¡tica'),
(4, 201, 'Bloco H');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_manutencao`
--

CREATE TABLE IF NOT EXISTS `cad_manutencao` (
  `cod_manutencao` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` char(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_manutencao`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cad_manutencao`
--

INSERT INTO `cad_manutencao` (`cod_manutencao`, `cpf`, `nome`, `email`, `senha`) VALUES
(1, '78845748445', 'Manutencao Teste', 'manu@teste.com', '33701996cdff62bb8efae4ca844b7e13'),
(2, '32222222222', 'Teste de AcentuaÃƒÂ§ÃƒÂ£o', 'senha@teste.senha', '698dc19d489c4e4db73e28a713eab07b'),
(3, '09199988899', 'Nelson Peixoto', 'nelson.peixoto@gmail.com', '8c44485996812950fa7f7c6ec662755d');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_usuario`
--

CREATE TABLE IF NOT EXISTS `cad_usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` char(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria_usuario` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cad_status` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `cad_usuario`
--

INSERT INTO `cad_usuario` (`cod_usuario`, `cpf`, `nome`, `email`, `senha`, `categoria_usuario`, `cad_status`) VALUES
(2, '09123312070', 'Edson EscolÃ¡stico', 'professor_edson@gmail.com', '2bfcffe752c1c363065b69eaaac323b3', 'professor', 'aprovado'),
(4, '09325520081', 'Maria Josevalda Martins', 'maria.martins@gmail.com', '09325520081', 'estudante', 'aprovado'),
(6, '82909901577', 'Janete Pereira Lopes', 'janete.p.jopes@hotmail.com', '82909901577', 'estudante', 'aprovado'),
(7, '09921525514', 'Luciana CecÃ­lia', 'luci.ana@gmail.com', '09921525514', 'monitor', 'aprovado'),
(8, '08829912582', 'Mauricio Andrade', 'mauricio.a@gmail.com', '08829912582', 'estudante', 'aprovado'),
(9, '09499212522', 'Maria Clara Mendes', 'mariaclaramcm@hotmail.com', '09499212522', 'monitor', 'aprovado'),
(10, '09107772712', 'MatÃ­as de Souza', 'matiassouza@gmail.com', '09107772712', 'monitor', 'aprovado'),
(11, '08809288821', 'Gabriela Costa', 'gabicosta@hotmail.com', '08809288821', 'estudante', 'aprovado'),
(12, '07558925512', 'Julia Rondelly', 'julia.r@gmail.com', '075589255124', 'monitor', 'aguardando'),
(14, '09899125212', 'Jonas Aguiar', 'jonas.aguiar@gmail.com', '09899125212', 'professor', 'aprovado'),
(16, '09291721251', 'Jenifer Baptista', 'jenibaptista@gmail.com', '09291721251', 'professor', 'aprovado'),
(17, '07898212424', 'Wilson Medeiros', 'wilmed@gmail.com', '07898212424', 'professor', 'aprovado'),
(18, '09456570015', 'Bruna Bittencourt', 'brunabittencourt@yahoo.com.br', '09456570015', 'professor', 'aguardando'),
(19, '08799945474', 'Rafael Menezes', 'rafa.menezes@gmail.com', '08799945474', 'professor', 'aprovado'),
(21, '09109248994', 'Bruna TS', 'apenasb.t@gmail.com', '6844819e393fe2bc50565ec5f022b43a', 'estudante', 'aprovado'),
(22, '09176721299', 'Felipe ConceiÃƒÂ§ÃƒÂ£o', 'felipef@gmail.com', 'e4f3a8121fd2ca47dd78bdc45d8a2a12', 'estudante', 'aprovado'),
(23, '09188199967', 'AdaÃ­lton Mota', 'adailton.mota@email.com', '09188199967', 'professor', 'aprovado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_problemas`
--

CREATE TABLE IF NOT EXISTS `info_problemas` (
  `cod_info_problemas` int(11) NOT NULL AUTO_INCREMENT,
  `cod_lab` int(11) NOT NULL,
  `computador` int(3) NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dt_informado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_manutencao` int(11) NOT NULL,
  PRIMARY KEY (`cod_info_problemas`),
  KEY `cod_usuario` (`cod_usuario`),
  KEY `cod_lab` (`cod_lab`),
  KEY `cod_manutencao` (`cod_manutencao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `info_problemas`
--

INSERT INTO `info_problemas` (`cod_info_problemas`, `cod_lab`, `computador`, `tipo`, `descricao`, `dt_informado`, `status`, `cod_usuario`, `cod_manutencao`) VALUES
(0, 4, 3, 'o compuptador fica cm a tela t', 'com descricao', '2013-11-22 23:48:20', 'atendida', 21, 1),
(2, 4, 4, 'ghdfg', 'jhkfhj', '2013-11-22 23:32:02', 'aguardando', 14, 1),
(3, 4, 3, 'xfghdb', 'ghjnc g', '2013-11-22 23:43:26', 'aguardando', 2, 2),
(5, 1, 1, 'dsfvd', 'dfgvfdgvsdfz', '2013-11-23 00:00:08', 'aguardando', 21, 1),
(6, 4, 18, 'Falha do mouse', 'O mouse do computador 18 estÃƒÂ¡ parando de funcionar constantemente.', '2013-11-25 01:48:45', 'aguardando', 22, 1),
(7, 2, 12, 'PC Reinicia sozinho', 'O computador estÃƒÂ¡ entrando em processo de reiniciamento sozinho, nÃƒÂ£o consigo usar por muito tempo.', '2013-11-25 01:59:16', 'aguardando', 22, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `descricao` varchar(300) DEFAULT NULL,
  `emissor` int(11) DEFAULT NULL,
  `receptor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`descricao`, `emissor`, `receptor`) VALUES
('Qualquer mensagem para test', 0, 0),
('Qualquer mensagem para teste', 0, 0),
('Testando o envio mensagens e pÃ¡', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
