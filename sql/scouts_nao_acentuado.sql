/*CREATE DATABASE `banco` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;*/


-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 09/03/2016 às 13:42
-- Versão do servidor: 5.7.11
-- Versão do PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `scouts`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `admin`
--

INSERT INTO `admin` (`nome`, `email`, `senha`) VALUES
('Carlos Henrique Eltz', 'carlinhos.eltz@hotmail.com', 'CC_23102010'),
('Carlos', 'carlinhos.eltz@gmail.com', 'Cc_23102010');

-- --------------------------------------------------------

--
-- Estrutura para tabela `atletas`
--

CREATE TABLE `atletas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `posicao` varchar(20) NOT NULL,
  `dt_nasc` varchar(10) NOT NULL,
  `local_nasc` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `ano` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jogos` int(11) DEFAULT NULL,
  `amarelos` int(11) DEFAULT NULL,
  `vermelhos` int(11) DEFAULT NULL,
  `gols` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `atletas`
--

INSERT INTO `atletas` (`id`, `nome`, `apelido`, `posicao`, `dt_nasc`, `local_nasc`, `estado`, `pais`, `ano`, `foto`, `jogos`, `amarelos`, `vermelhos`, `gols`) VALUES
(1, 'Marcelo Grohe', 'Grohe', 'Goleiro', '13-01-1987', 'Campo Bom', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(2, 'Leonardo Cesar Jardim', 'Leo', 'Goleiro', '1995-03-20', 'Ribeirao Preto', 'Sao Paulo', 'Brasil', 2016, '', 0, 0, 0, 0),
(3, 'Bruno Medeiros Grassi', 'Bruno Grassi', 'Goleiro', '1987-03-05', 'Tubarao', 'Santa Catarina', 'Brasil', 2016, '', 0, 0, 0, 0),
(4, 'Pedro Tonon Geromel', 'Geromel', 'Zagueiro', '1985-09-21', 'Sao Paulo', 'Sao Paulo', 'Brasil', 2016, '', 0, 0, 0, 0),
(5, 'Matheus Simonete Bressanelli', 'Bressan', 'Zagueiro', '1993-01-15', 'Caxias do Sul', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(6, 'Frederico Burgel Xavier', 'Fred', 'Zagueiro', '1986-01-15', 'Novo Hamburgo', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(7, 'Ricardo Martins de Araujo', 'Kadu', 'Zagueiro', '1986-07-20', 'Brasilia', 'Distrito Federal', 'Brasil', 2016, '', 0, 0, 0, 0),
(8, 'Rafael Thyere de Albuquerque Marques', 'Rafael Thyere', 'Zagueiro', '1993-05-17', 'Joao Pessoa', 'Paraiba', 'Brasil', 2016, '', 0, 0, 0, 0),
(9, 'Wallace Oliveira dos Santos', 'W. Oliveira', 'Lateral Direito', '1994-05-01', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil', 2016, '', 0, 0, 0, 0),
(10, 'Wesley Claudio Campos', 'Wesley', 'Lateral Direito', '1995-02-10', 'Caceres', 'Mato Grosso', 'Brasil', 2016, '', 0, 0, 0, 0),
(11, 'Marcelo Oliveira Ferreira', 'Marcelo Oliveira', 'Lateral Esquerdo', '1987-03-26', 'Salvador', 'Bahia', 'Brasil', 2016, '', 0, 0, 0, 0),
(12, 'Marcelo Hermes', 'Marcelo Hermes', 'Lateral Esquerdo', '1995-02-01', 'Sarandi', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(13, 'Raul Jose Cardoso', 'Raul', 'Lateral Direito', '1997-04-04', 'Cascavel', 'Parana', 'Brasil', 2016, '', 0, 0, 0, 0),
(14, 'Jailson Marques Siqueira', 'Jailson', 'Meia', '1995-09-07', 'Cacapava do Sul', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(15, 'Walace Souza Silva', 'Walace', 'Volante', '1995-04-04', 'Salvador', 'Bahia', 'Brasil', 2016, '', 0, 0, 0, 0),
(16, 'Edimo Ferreira Campos', 'Edinho', 'Volante', '1983-01-15', 'Niteroi', 'Rio de Janeiro', 'Brasil', 2016, '', 0, 0, 0, 0),
(17, 'Ramiro Moschen Benetti', 'Ramiro', 'Volante', '1993-05-22', 'Gramado', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(18, 'Maicon Thiago Pereira de Souza Nascimento', 'Maicon', 'Volante', '1985-09-14', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil', 2016, '', 0, 0, 0, 0),
(19, 'Moises Wolschick', 'Moises', 'Volante', '1994-09-24', 'Santa Clara do Sul', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(20, 'Kaio Silva Mendes', 'Kaio', 'Volante', '1995-03-18', 'Varzea Grande', 'Mato Grosso', 'Brasil', 2016, '', 0, 0, 0, 0),
(21, 'Giuliano Victor de Paula', 'Giuliano', 'Meia', '1990-05-31', 'Curitiba', 'Parana', 'Brasil', 2016, '', 0, 0, 0, 0),
(22, 'Douglas dos Santos', 'Douglas', 'Meia', '1982-02-18', 'Criciuma', 'Santa Catarina', 'Brasil', 2016, '', 0, 0, 0, 0),
(23, 'Lincoln Henrique Oliveira dos Santos', 'Lincoln', 'Meia', '1998-11-07', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(24, 'Felipe Tontini da Silveira', 'Tontini', 'Meia', '1995-07-16', 'Foz do Iguaçu', 'Parana', 'Brasil', 2016, '', 0, 0, 0, 0),
(25, 'Luan Guilherme de Jesus Vieira', 'Luan', 'Atacante', '1993-03-27', 'Sao Jose do Rio Preto', 'Sao Paulo', 'Brasil', 2016, '', 0, 0, 0, 0),
(26, 'Braian Damian Rodriguez Carballo', 'Braian Rodriguez', 'Atacante', '1986-08-14', 'Salto', 'Salto', 'Uruguai', 2016, '', 0, 0, 0, 0),
(27, 'Deivson Rogerio da Silva', 'Bobo', 'Atacante', '1985-01-09', 'Gravata', 'Pernambuco', 'Brasil', 2016, '', 0, 0, 0, 0),
(28, 'Everton Sousa Soares', 'Everton', 'Atacante', '1996-03-22', 'Fortaleza', 'Ceara', 'Brasil', 2016, '', 0, 0, 0, 0),
(29, 'Pedro Rocha Neves', 'Pedro Rocha', 'Atacante', '1994-10-01', 'Vila Velha', 'Espirito Santo', 'Brasil', 2016, '', 0, 0, 0, 0),
(30, 'Luiz Fernando Pereira da Silva', 'Fernandinho', 'Atacante', '1985-11-25', 'Sao Paulo', 'Sao Paulo', 'Brasil', 2016, '', 0, 0, 0, 0),
(31, 'Matheus dos Santos Batista', 'Batista', 'Atacante', '1995-06-16', 'Americana', 'Sao Paulo', 'Brasil', 2016, '', 0, 0, 0, 0),
(32, 'Gabriel Rybar Blos', 'Gabriel', 'Zagueiro', '1989-02-28', 'Marques de Souza', 'Rio Grande do Sul', 'Brasil', 2016, '', 0, 0, 0, 0),
(33, 'Leonardo Costa Silva', 'Leo Tilica', 'Atacante', '1995-04-20', 'Sao Luis', 'Maranhao', 'Brasil', 2016, '', 0, 0, 0, 0),
(34, 'Henrique Almeida Caixeta Nascentes', 'Henrique Almeida', 'Atacante', '1991-05-27', 'Brasilia', 'Distrito Federal', 'Brasil', 2016, '', 0, 0, 0, 0),
(35, 'Miller Alejandro Bolanos Reasco', 'Miller Bolanos', 'Atacante', '1990-06-01', 'Esmeraldas', 'Esmeraldas', 'Equador', 2016, '', 0, 0, 0, 0);


-- --------------------------------------------------------

--
-- Estrutura para tabela `clubes`
--

CREATE TABLE `clubes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `torcida` varchar(20) NOT NULL,
  `dt_fundacao` date NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `clubes`
--

INSERT INTO `clubes` (`id`, `nome`, `apelido`, `torcida`, `dt_fundacao`, `cidade`, `estado`, `pais`) VALUES
(1, 'Avaí Futebol Clube', 'Avaí', 'Avaiana', '1923-09-01', 'Florianópolis', 'Santa Catarina', 'Brasil'),
(2, 'Grêmio Esportivo Brasil', 'Brasil de Pelotas', 'Xavante', '1911-09-07', 'Pelotas', 'Rio Grande do Sul', 'Brasil'),
(3, 'Grêmio Foot-Ball Porto Alegrense', 'Grêmio', 'Gremista', '1903-09-15', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil'),
(4, 'Esporte Clube São José', 'São José', 'Zequinha', '1913-05-24', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil'),
(5, 'Grêmio Esportivo Glória', 'Glória', 'Leão da Serra', '1956-11-15', 'Vacaria', 'Rio Grande do Sul', 'Brasil'),
(6, 'Esporte Clube Novo Hamburgo', 'Novo Hamburgo', 'Nóia', '1911-05-01', 'Novo Hamburgo', 'Rio Grande do Sul', 'Brasil'),
(7, 'Esporte Clube Juventude', 'Juventude', 'Papada', '1913-06-29', 'Caxias do Sul', 'Rio Grande do Sul', 'Brasil'),
(8, 'Sport Club São Paulo', 'São Paulo RS', 'Caturrita', '1908-10-04', 'Rio Grande', 'Rio Grande do Sul', 'Brasil'),
(9, 'Veranópolis Esporte Clube Recreativo e Cultural', 'Veranópolis', 'VEC', '1992-01-15', 'Veranópolis', 'Rio Grande do Sul', 'Brasil'),
(10, 'Esporte Clube Cruzeiro', 'Cruzeiro RS', 'Cruzeirista', '1913-07-14', 'Cachoeirinha', 'Rio Grande do Sul', 'Brasil'),
(11, 'Esporte Clube Passo Fundo', 'Passo Fundo', 'Tricolor', '1986-01-10', 'Passo Fundo', 'Rio Grande do Sul', 'Brasil'),
(12, 'Clube Esportivo Lajeadense', 'Lajeadense', 'Alviazul', '1911-04-23', 'Lajeado', 'Rio Grande do Sul', 'Brasil'),
(13, 'Ypiranga Futebol Clube', 'Ypiranga', 'Canarinho', '1924-08-18', 'Erechim', 'Rio Grande do Sul', 'Brasil'),
(14, 'Sport Club Internacional', 'Internacional', 'Colorado', '1909-04-04', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil'),
(15, 'Clube Esportivo Aimoré', 'Aimoré', 'Índio Capilé', '1936-03-26', 'São Leopoldo', 'Rio Grande do Sul', 'Brasil'),
(16, 'Coritiba Foot Ball Club', 'Coritiba', 'Coxa', '1909-10-12', 'Curitiba', 'Paraná', 'Brasil'),
(17, 'Figueirense Futebol Clube', 'Figueirense', 'Figueira', '1921-06-12', 'Florianópolis', 'Santa Catarina', 'Brasil'),
(18, 'Clube Atlético Mineiro', 'Atlético Mineiro', 'Galo', '1908-03-25', 'Belo Horizonte', 'Minas Gerais', 'Brasil'),
(19, 'Cruzeiro Esporte Clube', 'Cruzeiro', 'Raposa', '1921-01-02', 'Belo Horizonte', 'Minas Gerais', 'Brasil'),
(20, 'Fluminense Football Club', 'Fluminense', 'Flu', '1902-07-21', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil'),
(21, 'Clube de Regatas do Flamengo', 'Flamengo', 'Mengo', '1895-11-17', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil'),
(22, 'América Futebol Clube', 'América Mineiro', 'Coelho', '1912-04-30', 'Belo Horizonte', 'Minas Gerais', 'Brasil'),
(23, 'Clube Atlético Paranaense', 'Atlético Paranaense', 'Furacão', '1924-03-26', 'Curitiba', 'Paraná', 'Brasil'),
(24, 'Criciúma Esporte Clube', 'Criciúma', 'Tigre', '1947-05-13', 'Criciúma', 'Santa Catarina', 'Brasil'),
(25, 'Danúbio Fútbol Club', 'Danúbio', 'Diluvio', '1932-03-01', 'Montevideo', 'Departamento Homônimo', 'Uruguai'),
(26, 'Deportivo Toluca Fútbol Club', 'Toluca', 'Diablos Rojos', '1917-02-12', 'Toluca', 'Estado do México', 'México'),
(27, 'Danúbio Fútbol Club', 'Danúbio', 'Diluvio', '1932-03-01', 'Montevideo', 'Departamento Homônimo', 'Uruguai'),
(28, 'Club Social, Cultural y Deportivo Blooming', 'Blooming', 'Los Millonarios', '1946-05-01', 'Santa Cruz de La Sierra', 'Departamento de Santa Cruz', 'Bolívia'),
(29, 'Club Estudiantes de La Plata', 'Estudiantes', 'León', '1905-08-04', 'La Plata', 'Buenos Aires', 'Argentina'),
(30, 'Corporación Deportiva América', 'América de Cali', 'La Mechita', '1927-02-13', 'Cali', 'Departamento Vale do Cauca', 'Colômbia'),
(31, 'Club Atlético Peñarol', 'Penharol', 'Aurinegros', '1891-09-28', 'Montevideo', 'Departamento Homônimo', 'Uruguai'),
(32, 'Liga Deportiva Universitaria', 'LDU', 'Liguista', '1930-01-11', 'Quito', '', 'Equador'),
(33, 'Fútbol Club Bolívar', 'Bolívar', 'La Academia', '1925-04-12', 'La Paz', 'La Paz', 'Bolívia'),
(34, 'Danúbio Fútbol Club', 'Danúbio', 'Diluvio', '1932-03-01', 'Montevideo', 'Departamento Homônimo', 'Uruguai');

-- --------------------------------------------------------

--
-- Estrutura para tabela `competicao`
--

CREATE TABLE `competicao` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `competicao`
--

INSERT INTO `competicao` (`id`, `nome`, `apelido`, `ano`) VALUES
(1, 'Primeira Liga', 'Copa Sul Minas Rio', 2016),
(2, 'Campeonato Gaúcho', 'Gauchão', 2016),
(3, 'Campeonato Brasileiro', 'Brasileirão', 2016),
(4, 'Amistosos', 'Amistosos', 2016),
(5, 'Taça Libertadores da América', 'Libertadores', 2016);

-- --------------------------------------------------------

--
-- Estrutura para tabela `confrontos`
--

CREATE TABLE `confrontos` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `competicao` varchar(50) CHARACTER SET utf8 NOT NULL,
  `estadio` varchar(50) CHARACTER SET utf8 NOT NULL,
  `treinador` varchar(100) CHARACTER SET utf8 NOT NULL,
  `equipe1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `equipe2` varchar(50) CHARACTER SET utf8 NOT NULL,
  `scout1` int(11) NOT NULL,
  `scout2` int(11) NOT NULL,
  `atleta1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta3` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta4` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta5` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta6` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta7` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta8` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta9` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta10` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta11` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta12` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta13` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta14` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta15` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta16` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta17` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta18` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta19` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta20` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta21` varchar(100) CHARACTER SET utf8 NOT NULL,
  `atleta22` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gol1` varchar(1) NOT NULL,
  `gol2` varchar(1) NOT NULL,
  `gol3` varchar(1) NOT NULL,
  `gol4` varchar(1) NOT NULL,
  `gol5` varchar(1) NOT NULL,
  `gol6` varchar(1) NOT NULL,
  `gol7` varchar(1) NOT NULL,
  `gol8` varchar(1) NOT NULL,
  `gol9` varchar(1) NOT NULL,
  `gol10` varchar(1) NOT NULL,
  `gol11` varchar(1) NOT NULL,
  `gol12` varchar(1) NOT NULL,
  `gol13` varchar(1) NOT NULL,
  `gol14` varchar(1) NOT NULL,
  `gol15` varchar(1) NOT NULL,
  `gol16` varchar(1) NOT NULL,
  `gol17` varchar(1) NOT NULL,
  `gol18` varchar(1) NOT NULL,
  `gol19` varchar(1) NOT NULL,
  `gol20` varchar(1) NOT NULL,
  `gol21` varchar(1) NOT NULL,
  `gol22` varchar(1) NOT NULL,
  `observacoes` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `confrontos`
--

INSERT INTO `confrontos` (`id`, `data`, `competicao`, `estadio`, `treinador`, `equipe1`, `equipe2`, `scout1`, `scout2`, `atleta1`, `atleta2`, `atleta3`, `atleta4`, `atleta5`, `atleta6`, `atleta7`, `atleta8`, `atleta9`, `atleta10`, `atleta11`, `atleta12`, `atleta13`, `atleta14`, `atleta15`, `atleta16`, `atleta17`, `atleta18`, `atleta19`, `atleta20`, `atleta21`, `atleta22`, `gol1`, `gol2`, `gol3`, `gol4`, `gol5`, `gol6`, `gol7`, `gol8`, `gol9`, `gol10`, `gol11`, `gol12`, `gol13`, `gol14`, `gol15`, `gol16`, `gol17`, `gol18`, `gol19`, `gol20`, `gol21`, `gol22`, `observacoes`) VALUES
(1, '2016-02-07', 'Copa Sul Minas Rio', 'Arena do Grêmio', 'Roger Machado', 'Grêmio', 'Coritiba', 1, 0, 'Grohe', 'W. Oliveira', 'Geromel', 'Kadu', 'Marcelo Oliveira', 'Walace', 'Maicon', 'Douglas', 'Pedro Rocha', 'Luan', 'Everton', '', '', '', '', '', 'Moisés', 'Edinho', '', 'Fernandinho', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '2016-01-23', 'Amistosos', 'Arena do Grêmio', 'Roger Machado', 'Grêmio', 'Danubio', 1, 1, 'Grohe', 'Wesley', 'Geromel', 'Kadu', 'Marcelo Oliveira', 'Walace', 'Maicon', 'Douglas', 'Giuliano', 'Everton', 'Luan', '', '', '', '', '', 'Edinho', '', 'Bobô', 'Ramiro', 'Fernandinho', 'Lincoln', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'O zagueiro gremista KADU marcou contra o gol do Danúbio'),
(3, '2016-01-28', 'Copa Sul Minas Rio', 'Arena Condá', 'Roger Machado', 'Avaí', 'Grêmio', 2, 2, 'Grohe', 'Wesley', 'Bressan', 'Rafael Thyere', 'Marcelo Hermes', 'Edinho', 'Ramiro', 'Moisés', 'Lincoln', 'Bobô', 'Pedro Rocha', '', '', '', '', '', '', 'Fernandinho', '', '', '', 'Leo Tilica', '', '', '1', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '2016-01-31', 'Gauchão', 'Centenário', 'Roger Machado', 'Brasil de Pelotas', 'Grêmio', 1, 3, 'Grohe', 'W. Oliveira', 'Geromel', 'Kadu', 'Marcelo Oliveira', 'Walace', 'Edinho', 'Maicon', 'Douglas', 'Luan', 'Everton', '', '', '', '', '', '', 'Pedro Rocha', 'Moisés', '', 'Bobô', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '1', '', '', '', '', ''),
(5, '2016-02-04', 'Gauchão', 'Estádio do Vale', 'Roger Machado', 'Grêmio', 'Aimoré', 3, 1, 'Grohe', 'W. Oliveira', 'Geromel', 'Kadu', 'Marcelo Oliveira', 'Walace', 'Maicon', 'Douglas', '', 'Luan', 'Everton', '', '', '', '', '', '', '', 'Lincoln', 'Fernandinho', 'Bobô', '', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', '', '', '', '', '1', '', '', ''),
(6, '2016-02-10', 'Gauchão', 'Antônio David Farina', 'Roger Machado', 'Veranópolis', 'Grêmio', 0, 1, 'Bruno Grassi', 'Wesley', 'Bressan', 'Fred', 'Marcelo Hermes', 'Edinho', 'Moisés', 'Giuliano', 'Lincoln', 'Fernandinho', 'Bobô', '', '', '', '', '', '', 'Kaio', 'Tontini', '', 'Batista', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '2016-02-12', 'Gauchão', 'Arena do Grêmio', 'Roger Machado', 'Grêmio', 'São José', 0, 2, 'Grohe', 'W. Oliveira', 'Geromel', 'Kadu', 'Marcelo Oliveira', 'Kaio', 'Maicon', 'Douglas', 'Everton', 'Pedro Rocha', 'Luan', '', 'Giuliano', '', '', '', '', '', 'Lincoln', '', 'Henrique Almeida', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '2016-02-17', 'Libertadores', 'Nemesio Díez', 'Roger Machado', 'Toluca', 'Grêmio', 2, 0, 'Grohe', 'W. Oliveira', 'Geromel', 'Fred', 'Marcelo Oliveira', 'Edinho', 'Maicon', 'Douglas', 'Giuliano', 'Luan', 'Everton', '', '', '', '', '', '', '', 'Lincoln', 'Fernandinho', 'Henrique Almeida', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '2016-02-21', 'Gauchão', 'Arena do Grêmio', 'Roger Machado', 'Grêmio', 'Novo Hamburgo', 1, 0, 'Grohe', 'W. Oliveira', 'Geromel', 'Fred', 'Marcelo Oliveira', 'Edinho', 'Giuliano', 'Douglas', 'Luan', 'Everton', 'Henrique Almeida', '', '', '', '', '', '', '', 'Fernandinho', 'Kaio', '', 'Bobô', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', ''),
(10, '2016-02-24', 'Gauchão', 'Aldo Dapuzzo', 'Roger Machado', 'São Paulo RS', 'Grêmio', 3, 2, 'Grohe', 'Wesley', 'Geromel', 'Fred', 'Marcelo Hermes', 'Edinho', 'Kaio', 'Lincoln', 'Henrique Almeida', 'Everton', 'Luan', '', '', '', '', '', '', 'Jailson', '', 'Bobô', '', '', '', '', '', '1', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '2016-02-27', 'Gauchão', 'Arena do Grêmio', 'Roger Machado', 'Grêmio', 'Glória', 4, 2, 'Grohe', 'W. Oliveira', 'Geromel', 'Fred', 'Marcelo Oliveira', 'Maicon', 'Kaio', 'Giuliano', 'Douglas', 'Luan', 'Everton', '', '', '', '', '', 'Henrique Almeida', '', '', 'Lincoln', '', 'Bobô', '', '', '1', '', '', '', '', '1', '', '1', '', '', '', '', '', '', '1', '', '', '', '', '', ''),
(12, '2016-03-02', 'Libertadores', 'Arena do Grêmio', 'Roger Machado', 'Grêmio', 'LDU', 4, 0, 'Grohe', 'W. Oliveira', 'Geromel', 'Fred', 'Marcelo Oliveira', 'Edinho', 'Maicon', 'Giuliano', 'Douglas', 'Luan', 'Miller Bolaños', '', 'Marcelo Hermes', '', '', '', '', '', '', '', 'Henrique Almeida', 'Everton', '', '', '', '', '', '', '1', '', '', '', '1', '', '', '', '', '', '', '', '', '', '1', '1', 'Estréia de Miller Bolaños'),
(13, '2016-03-06', 'Gauchão', 'Arena do Grêmio', 'Roger Machado', 'Grêmio', 'Internacional', 0, 0, 'Grohe', 'Wesley', 'Geromel', 'Fred', 'Marcelo Oliveira', 'Edinho', 'Maicon', 'Giuliano', 'Douglas', 'Luan', 'Miller Bolaños', '', '', '', '', '', '', '', '', 'Everton', 'Bobô', 'Henrique Almeida', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Cotovelada de Willian fratura maxilar de Miller Bolaños');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estadios`
--

CREATE TABLE `estadios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `clube` varchar(50) NOT NULL,
  `capacidade` varchar(50) NOT NULL,
  `dt_fundacao` varchar(50) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `estadios`
--

INSERT INTO `estadios` (`id`, `nome`, `apelido`, `clube`, `capacidade`, `dt_fundacao`, `cidade`, `estado`, `pais`) VALUES
(1, 'Estádio Regional Índio Condá', 'Arena Condá', 'Chapecoense', '22600 torcedores', '24/01/1976', 'Chapecó', 'Santa Catarina', 'Brasil'),
(2, 'Arena do Grêmio', 'Arena do Grêmio', 'Grêmio', '56500 torcedores', '08/12/2012', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil'),
(3, 'Estádio Francisco Stédile', 'Centenário', 'Caxias', '22100 torcedores', '12/09/1976', 'Caxias do Sul', 'Rio Grande do Sul', 'Brasil'),
(4, 'Estádio do Vale', 'Estádio do Vale', 'Novo Hamburgo', '15178 torcedores', '17/08/2008', 'Novo Hamburgo', 'Rio Grande do Sul', 'Brasil'),
(5, 'Estádio João Corrêa da Silveira', 'Cristo Rei', 'Aimoré', '10000 torcedores', '1961-03-26', 'São Leopoldo', 'Rio Grande do Sul', 'Brasil'),
(6, 'Estádio Altos da Glória', 'Altos da Glória', 'Glória', '8.000 torcedores', '1973-11-15', 'Vacaria', 'Rio Grande do Sul', 'Brasil'),
(7, 'Estádio Passo D Areia', 'Passo D Areia', 'São José', '16.000 torcedores', '1940-05-24', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil'),
(8, 'Estádio Nemesio Díez', 'Nemesio Díez', 'Toluca', '27.000 torcedores', '1954-08-18', 'Toluca', 'Toluca de Lerdo', 'México'),
(9, 'Estádio Alfredo Jaconi', 'Alfredo Jaconi', 'Juventude', '19.824 torcedores', '1975-03-23', 'Caxias do Sul', 'Rio Grande do Sul', 'Brasil'),
(10, 'Estádio Waldemar Fetter', 'Aldo Dapuzzo', 'São Paulo', '8.000 torcedores', '1980-03-23', 'Rio Grande', 'Rio Grande do Sul', 'Brasil'),
(11, 'Estádio Bento Mendes de Freitas', 'Bento Freitas', 'Brasil de Pelotas', '18.000 torcedores', '1943-05-23', 'Pelotas', 'Rio Grande do Sul', 'Brasil'),
(12, 'Estádio Antônio David Farina', 'Antônio David Farina', 'Municipal', '4.000 torcedores', '1992-01-15', 'Veranópolis', 'Rio Grande do Sul', 'Brasil'),
(13, 'Estádio Antônio Vieira Ramos', 'Vieirão', 'Cruzeiro', '8.000 torcedores', '2008-03-02', 'Cachoeirinha', 'Rio Grande do Sul', 'Brasil'),
(14, 'Estádio Monumental Vermelhão da Serra', 'Vermelhão da Serra', 'Passo Fundo', '20.000 torcedores', '1969-02-19', 'Passo Fundo', 'Rio Grande do Sul', 'Brasil'),
(15, 'Estádio José Pinheiro Borda', 'Beira Rio', 'Internacional', '50.038 torcedores', '1969-04-06', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil'),
(16, 'Estádio Alviazul', 'Estádio Alviazul', 'Lajeadense', '7.000 torcedores', '2012-01-25', 'Lajeado', 'Rio Grande do Sul', 'Brasil'),
(17, 'Estádio Olímpico Colosso da Lagoa', 'Colosso da Lagoa', 'Ypiranga', '30.000 torcedores', '1974-08-18', 'Erechim', 'Rio Grande do Sul', 'Brasil');



-- --------------------------------------------------------

--
-- Estrutura para tabela `treinadores`
--

CREATE TABLE `treinadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `dt_nasc` varchar(10) NOT NULL,
  `local_nasc` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `clube_atual` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `treinadores`
--

INSERT INTO `treinadores` (`id`, `nome`, `apelido`, `dt_nasc`, `local_nasc`, `estado`, `pais`, `clube_atual`) VALUES
(1, 'Roger Machado Marques', 'Roger Machado', '25041975', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil', 'Grêmio'),
(2, 'Luiz Felipe Scolari', 'Felipão', '1948-11-09', 'Passo Fundo', 'Rio Grande do Sul', 'Brasil', 'Guangzhou Evergrande FC - China'),
(3, 'Ênio Vargas de Andrade', 'Enio Andrade', '31011928', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil', 'Falecido em Porto Alegre dia 22/01/1997'),
(4, 'Enderson Alves Moreira', 'Enderson Moreira', '28091971', 'São Paulo', 'São Paulo', 'Brasil', 'Goiás Esporte Clube'),
(5, 'Renato Portaluppi', 'Renato Gaúcho', '09091962', 'Guaporé', 'Rio Grande do Sul', 'Brasil', 'Sem Clube'),
(6, 'Vanderlei Luxemburgo da Silva', 'Luxemburgo', '10051952', 'Nova Iguaçu', 'Rio de Janeiro', 'Brasil', 'Tianjin Songjiang - China'),
(7, 'Luiz Carlos Saroli', 'Caio Júnior', '08031965', 'Cascavel', 'Paraná', 'Brasil', 'Al-Shabab - Emirados Árabes'),
(8, 'Celso Juarez Roth', 'Celso Roth', '30111957', 'Caxias do Sul', 'Rio Grande do Sul', 'Brasil', 'Sem Clube'),
(9, 'Júlio César Valduga Camargo', 'Julinho Camargo', '12011971', 'Porto Alegre', 'Rio Grande do Sul', 'Brasil', 'Sem Clube'),
(10, 'Paulo Silas do Prado Pereira', 'Silas', '27081965', 'Campinas', 'São Paulo', 'Brasil', 'Sem Clube'),
(11, 'Paulo Autuori de Mello', 'Autuori', '25081956', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil', 'Sem Clube'),
(12, 'Vagner Carmo Mancini', 'Vagner Mancini', '24101966', 'Ribeirão Preto', 'São Paulo', 'Brasil', 'EC Vitória'),
(13, 'Luiz Antônio Venker Menezes', 'Mano Menezes', '11061962', 'Passo do Sobrado', 'Rio Grande do Sul', 'Brasil', 'Shandong Luneng - China'),
(14, 'Hugo Eduardo de León Rodríguez', 'Hugo de León', '27021958', 'Rivera', 'Departamento de Rivera', 'Uruguai', 'Aposentado'),
(15, 'Cláudio Roberto Pires Duarte', 'Cláudio Duarte', '09051951', 'São Jerônimo', 'Rio Grande do Sul', 'Brasil', 'Sem Clube'),
(16, 'Alexi Stival', 'Cuca', '07061963', 'Curitiba', 'Paraná', 'Brasil', 'Sem Clube'),
(17, 'José Luiz Plein Filho', 'Plein', '25041951', 'Santa Maria', 'Rio Grande do Sul', 'Brasil', 'Aposentado'),
(18, 'Adílson Dias Batista', 'Adílson Batista', '16031968', 'Andrianópolis', 'Paraná', 'Brasil', 'Cruzeiro EC'),
(19, 'Nestor Simionato', 'Nestor Simionato', '17121959', 'Crissiumal', 'Rio Grande do Sul', 'Brasil', 'Sem Clube'),
(20, 'Alfonso Darío Pereyra Bueno', 'Darío Pereyra', '20101956', 'Montevideo', 'Departamento Homônimo', 'Uruguai', 'Águia de Marabá FC'),
(21, 'Adenor Leonardo Bachi', 'Tite', '25051961', 'Caxias do Sul', 'Rio Grande do Sul', 'Brasil', 'SC Corinthians');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Carlinhos Eltz', 'carlinhos.eltz@gmail.com', 'Cc_23102010'),
(2, 'Carlos Eltz', 'carlinhos.eltz@hotmail.com', 'CC_23102010');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `atletas`
--
ALTER TABLE `atletas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clubes`
--
ALTER TABLE `clubes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `competicao`
--
ALTER TABLE `competicao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `confrontos`
--
ALTER TABLE `confrontos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estadios`
--
ALTER TABLE `estadios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `treinadores`
--
ALTER TABLE `treinadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `atletas`
--
ALTER TABLE `atletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de tabela `clubes`
--
ALTER TABLE `clubes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de tabela `competicao`
--
ALTER TABLE `competicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `confrontos`
--
ALTER TABLE `confrontos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de tabela `estadios`
--
ALTER TABLE `estadios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de tabela `treinadores`
--
ALTER TABLE `treinadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
