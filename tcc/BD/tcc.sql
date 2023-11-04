-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2022 às 12:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `sobrenome` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_pessoa`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(2, 'william', 'sas', 'kauan@123', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(55) NOT NULL,
  `slug` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome_categoria`, `slug`) VALUES
(1, 'Especialidades da Índia (Namastê!)', 'namaste'),
(2, 'Lanches bem Caprichados!', 'caprichados'),
(3, 'Bebidas Refrescantes', 'refrescantes'),
(4, 'Bebidas Quentes Especiais', 'especiais'),
(5, 'Salgados Deliciosos', 'deliciosos'),
(6, 'Bebidas Diversas', 'diversas'),
(7, 'Para saborear em casa!', 'casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(55) NOT NULL,
  `estoque_produto` varchar(9999) NOT NULL,
  `preco_produto` double(9,2) NOT NULL,
  `desc_produto` varchar(555) NOT NULL,
  `fk_id_categorias` int(11) NOT NULL,
  `path_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `estoque_produto`, `preco_produto`, `desc_produto`, `fk_id_categorias`, `path_name`) VALUES
(2, 'Chai Latte', '9999', 12.90, 'Especialidade do nosso Barista Indiano: Leite quente com chá preto Original da Índia, gengibre, cardamomo e açúcar (300 ml)', 1, './imagens/prods/chai.jpeg'),
(3, 'Gulab Jamun (famoso doce indiano)', '9999', 7.50, 'Delicioso bolinho de leite em pó mergulhado em calda de água de rosas (uma unidade)', 1, './imagens/prods/gulab.jpg'),
(4, 'Samosa Vegetariana', '9999', 8.90, 'Pastel indiano assado com recheio de batata, cenoura e tempero indiano (uma unidade)', 1, './imagens/prods/samosa.jpeg\r\n'),
(5, 'Pahadi maggie (Prato vegetariano)', '9999', 28.49, 'Macarrão com legumes diversos feito com tempero indiano (Garam Masala) e especerias. Uma delícia do Norte da Índia', 1, './imagens/prods/maggie.jpeg'),
(6, 'Leite dourado', '9999', 12.90, 'Especialidade do nosso Barista Indiano: Leite quente com açafrão, gengibre e cardamomo (bebida ayurvedica-especialidade indiana) 300ml', 1, './imagens/prods/leite.jpeg'),
(7, 'Omelete Misto com pão de forma', '9999', 22.10, 'Ovos com presunto, mussarela, orégano e sal. Acompanha pão de forma Artesano tostado com manteiga.', 2, './imagens/prods/ovop.png'),
(8, 'Omelete de Queijo com Pão de Forma', '9999', 19.10, 'Ovos com mussarela, orégano e sal. Acompanha pão de forma Artesano tostado com manteiga.', 2, './imagens/prods/ovoq.jpg'),
(9, 'Ovos Mexidos com pão de forma', '9999', 17.10, 'Ovos bem mexidos. Acompanha duas fatias de pão de forma Artesano tostado com manteiga.', 2, './imagens/prods/ovomex.jpg'),
(10, 'Queijo Quente Especial', '9999', 15.49, 'Pão de forma artesano com queijo mussarela no capricho com especerias.', 2, './imagens/prods/queijoquente.jpg'),
(11, 'Pão na chapa com requeijão', '9999', 14.49, 'Pão de forma artesano na chapa com requeijao e especerias.', 2, './imagens/prods/paochapa.jpg'),
(12, 'Misto quente especial', '9999', 16.19, 'Pão de forma artesano com presunto e queijo mussarela no capricho com especerias.', 2, './imagens/prods/mistoquente.jpg'),
(13, 'Frappé de Chocolate', '9999', 21.10, 'Leite gelado, sorvete de creme, calda de chocolate, chantilly e chocolate em pó (400 ml)', 3, './imagens/prods/frappechoco.jpg'),
(14, 'Latte Gelado', '9999', 22.09, 'Espresso com leite frio, gelo e um toque de caramelo! (400 ml)', 3, './imagens/prods/lattegelado.jpg'),
(15, 'Frappé de Café', '9999', 27.09, 'Leite gelado, café espresso, sorvete de creme, calda de caramelo e chantilly (400 ml)', 3, './imagens/prods/frappecafe.jpg'),
(16, 'Frappé de Ovomaltine', '9999', 27.09, 'Leite gelado, sorvete de creme, Ovomaltine, calda de chocolate e chantilly (400 ml)', 3, './imagens/prods/frappeovomaltine.jpg'),
(17, 'Lassi de Manga', '9999', 24.09, 'Manga Natural Batida com Igorte Natural e especerias Indianas.', 3, './imagens/prods/lassimanga.jpg'),
(18, 'Café com Leite', '9999', 9.90, 'Espresso com leite vaporizado bem cremoso (220 ml)', 4, './imagens/prods/cafecomleite.jpg'),
(19, 'Cappuccino 100% Amargo', '9999', 15.10, 'Espresso com leite vaporizado cremoso e chocolate 100% amargo (300 ml)', 4, './imagens/prods/cappuccinoamargo.jpg'),
(20, 'Cappuccino com chocolate meio amargo', '9999', 15.10, 'Espresso com leite vaporizado mistura com chocolate meio amargo (300ml)', 4, './imagens/prods/cappuccino.jpeg'),
(21, 'Chocolate Quente', '9999', 9.90, 'Leite vaporizado cremoso com chocolate meio amargo (300 ml)', 4, './imagens/prods/chocolatequente.jpg'),
(22, 'Mochaccino de Caramelo', '9999', 17.10, 'Espresso com leite vaporizado cremoso e calda de caramelo (380 ml)', 4, './imagens/prods/mochaccinocaramelo.jpg'),
(23, 'Mochaccino de Chocolate', '9999', 17.10, 'Espresso com leite vaporizado cremoso e calda de chocolate (380 ml)', 4, './imagens/prods/mochaccinochocolate.jpg'),
(24, 'Folhado quadrado de quatro queijos', '9999', 9.90, 'Folhado quadrado recheadode quatro queijos (uma unidade)', 5, './imagens/prods/folhadoqueijo.jpg'),
(25, 'Kibe frito com requeijão', '9999', 8.90, 'Kibe Frito com recheado com requeijão Acompanha fatia de limão. 100 gramas a unidade.', 5, './imagens/prods/kiberequeijao.jpg'),
(26, 'Tortinha de Frango', '9999', 9.90, 'Tortinha tipo \'empadão\' bem recheada com frango. 160 gramas a unidade', 5, './imagens/prods/tortinhafrango.jpg'),
(27, 'Coxinha', '9999', 8.90, 'Deliciosa coxinha de frango com requeijão. 110 gramas a unidade.', 5, './imagens/prods/coxinha.jpg'),
(28, 'Kibe Frito', '9999', 8.90, 'Kibe Frito Tradicional. Acompanha fatia de limão. 100 gramas a unidade.', 5, './imagens/prods/kibefrito.jpg'),
(29, 'Água Mineral', '9999', 5.50, 'Água Mineral com ou sem gás. Garrafa Pet 500 ml.', 6, './imagens/prods/agua.jpeg'),
(30, 'Café Moído', '9999', 38.10, 'Café especial moído na hora 100% Arábica de Minas Gerais! 250g', 7, './imagens/prods/cafemoido.jpg'),
(31, 'Café em grão', '9999', 34.10, 'Café especial em grãos 100% Arábica de Minas Gerais! 250g', 7, './imagens/prods/cafegrao.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_produtos_id_categorias` (`fk_id_categorias`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_produtos_id_categorias` FOREIGN KEY (`fk_id_categorias`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
