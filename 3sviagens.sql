-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 28-Ago-2018 às 20:15
-- Versão do servidor: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3sviagens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cod`, `titulo`, `url`, `descricao`, `status`, `data`) VALUES
(7, 'pacote', 'pacote', '  Pacote João Pessoa', 1, '2018-08-01 16:05:40'),
(6, 'artigo', 'artigo', '  Artigo para viagens', 1, '2018-08-01 16:05:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

DROP TABLE IF EXISTS `mensagens`;
CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `valor` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`cod`, `titulo`, `categoria`, `url`, `descricao`, `valor`, `status`, `thumb`, `data`) VALUES
(13, 'ILHÉUS & PORTO SEGURO 2018 DE 11/01/…', '7', 'ilheus-porto-seguro-2018-de-11-01', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;ILHEUS E PORTO SEGURO&lt;br /&gt;DATA:11/01/2018 a 19/01/2018&lt;br /&gt; 03 NOITES EM ILHEUS COM PASSEIO EM ITACARE&lt;br /&gt; E 03 NOITES EM PORTO SEGURO OASIS PRAIA HOTEL&lt;br /&gt;03 DIAS EM ILHEUS 03 DIAS EM PORTO SEGURO&lt;br /&gt;BUS+HOSPEDAGEM+CAFE+JANTAR E CITY TOUR&lt;br /&gt;VALOR: R$1.250,00 OU 1+5 X 216,00 para apts triplos (por pessoa)&lt;br /&gt;VALOR :R$1300,00 OU 1+5X225,00 apts duplos ou casal ( por pessoa )&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', NULL, 1, 'posts/2018/08/ilheus-porto-seguro-2018-de-11-01.jpg', '2018-08-01 15:23:40'),
(12, 'GUAIBIM - BA+MORRO DE SÀO PAULO+SALVADOR…', '7', 'guaibim-ba-morro-de-sao-paulo-salvador', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;GUAIBIM &ndash; BA +MORRO DE S&Agrave;O PAULO+SALVADOR 2018&lt;br /&gt; GUAIBIM-BA +MORRO DE SAO PAULO+SALVADOR 2018&lt;br /&gt;SAIDA JANEIRO 2018 &lt;br /&gt;10/01 A 18/01 19/01 A 27/01 &lt;br /&gt;VALOR: R$ 1.150,00 ou 1 + 5 x R$200,00 para apts triplos ou qu&aacute;druplos por pessoa &ndash;&lt;br /&gt;Onibus +hospedagem+cafe +jantar e city tour POUSADA: &Ocirc;nibus+hospedagem+caf&eacute;+jantar+city tour&lt;br /&gt; www.pousadadoreiguaibim.com&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', NULL, 1, 'posts/2018/08/guaibim-ba-morro-de-sao-paulo-salvador.jpg', '2018-08-01 15:21:47'),
(9, 'Alugando um carro', '6', 'alugando-um-carro', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Verifique marca e modelo antes de reservar, pois quanto mais simples o modelo, mais barato. Fa&ccedil;a sempre o seguro equivalente ao LCW nos EUA, que prev&ecirc; danos contra o carro e contra o de terceiros. Verifique, no entanto, se o cart&atilde;o de cr&eacute;dito n&atilde;o oferece o produto. Deixe para abastecer fora da locadora, a gasolina &eacute; mais barata. Respeite as leis de tr&acirc;nsito e os limites de velocidade no exterior pois as multas s&atilde;o caras. Em alguns pa&iacute;ses o leasing (arrendamento) de um carro zero quil&ocirc;metro &eacute; mais barato do que o aluguel, mas isso s&oacute; vale para per&iacute;odos de quinze dias ou mais. Na op&ccedil;&atilde;o do aluguel, procure locadoras conhecidas ou que tenham filiais em seu pa&iacute;s de origem.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '', 1, 'posts/2018/07/alugando-um-carro.jpg', '2018-07-31 17:35:27'),
(10, 'APARECIDA DO NORTE-SP /CAMPOS DO JORDAO …', '7', 'aparecida-do-norte-sp-campos-do-jordao', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;APARECIDA DO NORTE/ CAMPOS DO JORDAO - SP&#60;br /&#62;2018 SEMANA SANTA : 29/03/2018 A 02/04/2018&#60;br /&#62;VALOR: &#38;nbsp;R$ 800,00 &#38;nbsp; OU &#38;nbsp; 1 +3 X 212,00&#60;br /&#62;CORPUS CRISTH:&#38;nbsp;30/05/2018 &#38;nbsp;A 03/06/2018 &#38;nbsp;&#38;nbsp;VALOR: &#38;nbsp;R$ 800,00&#60;br /&#62;OU 1 + 3 X 212,00 ABRIL : 18/04/2018 A&#38;nbsp; 22/04/2018 &#38;nbsp;&#38;nbsp;VALOR: &#38;nbsp;R$ 870,00 &#38;nbsp; OU &#38;nbsp; &#60;br /&#62;1 + 3 X 225,00&#38;nbsp;LEGIAO DE MARIA : 31/05/2018&#60;br /&#62;A 04/06/2018 VALOR: R$ 800,00 OU 1 + 3 X 212,00&#38;nbsp;APOSTOLADO :&#60;/p&#62;&#13;&#10;&#60;p&#62;07/06/2018 &#38;nbsp;A 11/06/2018 VALOR: &#38;nbsp;R$ 800,00 &#38;nbsp; OU &#38;nbsp; 1 +3 X 212,00&#60;/p&#62;&#13;&#10;&#60;p&#62;JULHO :12/07/2018 &#38;nbsp;A 16/07/2018 &#38;nbsp;VALOR: R$ 800,00 OU &#38;nbsp; 1 +3 X 212,00&#60;/p&#62;&#13;&#10;&#60;p&#62;JULHO :19/07/2018 A 23/07/2018 VALOR: R$ 800,00 OU 1 + 3 X 212,00&#60;/p&#62;&#13;&#10;&#60;p&#62;&#38;nbsp;PACOTE: OnibusDD + Hospedagem + cafe + almo&#38;ccedil;o + jantar&#60;/p&#62;&#13;&#10;&#60;p&#62;&#60;br /&#62;Frei Galvao + Can&#38;ccedil;ao Nova + Campos do jordao-sp Plaza ou Metropole&#60;/p&#62;&#13;&#10;&#60;p&#62;&#38;nbsp;VALOR: R$ 800,00 OU 1 + 3 X 212,00 PACOTE:&#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;p&#62;&#38;Ocirc;NIBUS DD + HOSPEDAGEM + CAF&#38;Eacute; + ALMO&#38;Ccedil;O + JANTAR + CITY&#60;br /&#62;TOUR NA&#38;nbsp;CAN&#38;Ccedil;&#38;Atilde;O&#38;nbsp;NOVA&#38;nbsp;+ IGREJA DE FREI GALV&#38;Atilde;O + CAMPOS DO JORDAO-SP&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', NULL, 1, 'posts/2018/08/aparecida-do-norte-sp-campos-do-jordao.jpg', '2018-08-02 09:44:29'),
(19, 'PORTO SEGURO | BAIXA TEMPORADA 2018', '7', 'porto-seguro-baixa-temporada-2018', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;PORTO SEGURO 2018 COM 05 NOITES DE PURA ALEGRIA FEVEREIRO 01/02 A 08/02/2018 MAR&#38;Ccedil;O &#60;br /&#62;09/03 A 16/03/2018 PACOTE: &#38;Ocirc;nibus DD + hospedagem + caf&#38;eacute; + jantar + city &#60;br /&#62;tour VALOR: R$850,00 OU 1 + 5X 150,00 para apts triplos ou qu&#38;aacute;druplos( pre&#38;ccedil;o por pessoa)&#60;br /&#62;PACOTE: &#38;Ocirc;nibus DD + hospedagem + caf&#38;eacute; + jantar + city tour&#60;br /&#62;HOTEL EM FRENTE A PRAIA - www.oasispraiahotel.com.br&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', NULL, 1, 'post/2018/08/porto-seguro-baixa-temporada-2018.jpg', '2018-08-02 13:27:45'),
(11, 'PORTO SEGURO EM JANEIRO 2018', '7', 'porto-seguro-em-janeiro-2018', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;06 NOITES EM FRENTE A PRAIA COM MUITO SOL E&#60;br /&#62;LAZER DATA: 23/01/2018 &#38;nbsp; A 31/01/2018&#60;/p&#62;&#13;&#10;&#60;p&#62;Bus &#60;br /&#62;DD + Hospedagem + cafe da manha + jantar +&#60;br /&#62;city tour&#60;/p&#62;&#13;&#10;&#60;p&#62;Barramares + AxeMoi + ToaToa + cidade&#60;br /&#62;historica&#60;/p&#62;&#13;&#10;&#60;p&#62;&#38;nbsp;VALOR: &#38;nbsp;R$ 1100,00&#38;nbsp; OU &#38;nbsp;1 + 5X&#60;br /&#62;de R$190,00 &#38;nbsp;&#38;nbsp;&#38;nbsp;apts triplos&#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;p&#62;&#38;nbsp;PACOTE:&#38;nbsp;&#38;Ocirc;nibus &#60;br /&#62;+ hospedagem + caf&#38;eacute; + jantar + city tour&#60;/p&#62;&#13;&#10;&#60;p&#62;www.oasispraiahotel.com.br&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', NULL, 1, 'posts/2018/08/porto-seguro-em-janeiro-2018.jpg', '2018-08-02 09:38:43'),
(20, 'PORTO SEGURO JANEIRO 2018', '7', 'porto-seguro-janeiro-2018', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;FERIAS DE JANEIRO 2018 /PROMO&Ccedil;AO&lt;br /&gt;PORTO SEGURO PROMOCIONAL FERIAS DE JULHO &lt;br /&gt;DATAS: 05/01 A 13/01 14 A 22/01 23 A 31/01&lt;br /&gt;PACOTE COM BUS DD + HOSPEDAGEM + CAFE + JANTAR + CITY TOUR&lt;br /&gt;VALOR:R$1100,00 OU 1 + 5X 190,00 POR PESSOA EM APT TRIPLO OU QUADRUPLO&lt;br /&gt;VALOR:R$1150,00 OU 1 + 5X 200,00 POR PESSOA APT DUPLO OU CASAL&lt;br /&gt;HOTEL OASIS PRAIA&lt;br /&gt;www.oasispraiahotel.com.br&lt;br /&gt;PORTO SEGURO ....&lt;br /&gt;PACOTE: &Ocirc;nibus + hospedagem + caf&eacute; + jantar + city tour HOTEL OASIS NA AV BEIRA MAR&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', NULL, 1, 'posts/2018/08/porto-seguro-janeiro-2018.jpg', '2018-08-02 14:51:44'),
(14, 'Dinheiro', '6', 'dinheiro', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Evite carregar notas de valores altos, leve um ou mais cart&otilde;es de cr&eacute;dito internacionais. Traveller s cheques s&atilde;o seguros e bem aceitos, mas para trocar &eacute; necess&aacute;ria a apresenta&ccedil;&atilde;o do passaporte ou xerox. Nunca transporte todo o dinheiro num s&oacute; lugar. Troque pequenas quantias no aeroporto para despesas de t&aacute;xi e gorjetas. S&oacute; depois procure as casas de c&acirc;mbio, onde as taxas costumam ser menores.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', NULL, 1, 'posts/2018/08/dinheiro.jpg', '2018-08-01 15:24:44'),
(15, 'Depois da Viagem', '6', 'depois-da-viagem', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;No retorno de qualquer viagem, caso venha a apresentar algum sinal ou sintoma (ex.: febre, dor de cabe&ccedil;a, mal-estar geral ou qualquer outra altera&ccedil;&atilde;o na sa&uacute;de), recomenda-se procurar um m&eacute;dico ou o servi&ccedil;o de sa&uacute;de, informando os locais por onde viajou, inclusive com as escalas e conex&otilde;es. Os profissionais dos servi&ccedil;os de sa&uacute;de s&atilde;o respons&aacute;veis por notificar a autoridade sanit&aacute;ria competente no caso de doen&ccedil;as e agravos de interesse &agrave; sa&uacute;de p&uacute;blica internacional.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', NULL, 1, 'posts/2018/08/depois-da-viagem.jpg', '2018-08-01 15:25:39'),
(16, 'Bagagem de mão', '6', 'bagagem-de-mao', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Deve ser acomodada sob o assento do passageiro ou em compartimento pr&oacute;prio da aeronave, com peso m&aacute;ximo de cinco quilos e dimens&atilde;o total (altura, largura e comprimento) n&atilde;o excedendo 115 cent&iacute;metros.&lt;br /&gt;Pode-se carregar ainda, segundo o DAC: sobretudo, manta ou cobertor, cadeira de rotas e/ou muletas, guarda-chuva ou bengala, laptop ou bin&oacute;culo, material de leitura para a viagem e uma cesta ou equivalente para crian&ccedil;a de colo.&lt;br /&gt;Obs.: O DAC determinou que fica proibido o transporte de lap-top / palm-top em bagagem despachada. Determinou ainda que os pontos de inspe&ccedil;&atilde;o para acesso &agrave;s &aacute;reas restritas dos aeroportos no Brasil devem passar o equipamento pelo raio-x, e solicitar ao propriet&aacute;rio que ligue o mesmo, deixando ligado pelo tempo m&iacute;nimo de 60 segundos. E tamb&eacute;m alertou que a recusa por parte do passageiro implicar&aacute; que o equipamento seja tratado como equipamento suspeito, pelo que determinou aos inspetores acionarem os meios dispon&iacute;veis de seguran&ccedil;a do Aeroporto.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', NULL, 1, 'posts/2018/08/bagagem-de-mao.jpg', '2018-08-01 15:27:01'),
(21, 'CALDAS NOVAS', '7', 'caldas-novas', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;FERIAS DE JANEIRO SAIDAS TODA SEXTA FEIRA 2018 &lt;br /&gt;JALIM STANDART R$400,00 (CAFE+ ALMO&Ccedil;O+CALDO A NOITE&lt;br /&gt;JALIM LUXO R$420,00 (CAFE+ ALMO&Ccedil;O+CALDO A NOITE&lt;br /&gt;HOT SPRINGS R$480,00 (CAFE + ALMO&Ccedil;O&lt;br /&gt;CTC R$ 570,00 (CAFE+ ALMO&Ccedil;O+CALDO A NOITE&lt;br /&gt;MORADA DO SOL 540,00 (CAFE+ ALMO&Ccedil;O+CALDO A NOITE &lt;br /&gt;PROMO&Ccedil;AO SEXTA FEIRA 10/03 A DOMINGO 12/03&lt;br /&gt;JALIM STANDART: 400&lt;br /&gt;JALIM LUXO: 420,00&lt;br /&gt;ONIBUS+HOSPEDAGEM JALIM+CAFE+ALMO&Ccedil;O+CALDO&lt;br /&gt;PRE&Ccedil;O PROMOCIONAL PARA ESTA DATA&lt;br /&gt;CONSULTE NOSSOS PRE&Ccedil;OS&lt;br /&gt;MARQUE JA A SUA RESERVA PELO ZAP(61) 996018697&lt;br /&gt; SAIDA SEXTA AS 06:30 DA MANHA COM RETORNO NO DOMINGO&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', NULL, 1, 'posts/2018/08/caldas-novas.jpg', '2018-08-02 15:20:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(1) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(180) DEFAULT NULL,
  `cidade` varchar(180) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `usuario`, `email`, `status`, `nome`, `senha`, `nivel`, `cep`, `bairro`, `cidade`, `endereco`, `estado`, `data`) VALUES
(2, 'Inove', 'inovepublicidadedf@gmail.com', 1, 'Inove', '827ccb0eea8a706c4c34a16891f84e7b', 1, ' 71950-904', 'Areal (Águas Claras)', 'Brasília', 'QS 1 Rua 210 Lote 40', 'DF', '2018-07-13 09:48:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
