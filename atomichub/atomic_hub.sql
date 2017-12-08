-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2017 às 03:38
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atomic_hub`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhes_elementos`
--

CREATE TABLE `detalhes_elementos` (
  `id_detalhe` int(11) NOT NULL,
  `id_elemento` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sigla` varchar(4) NOT NULL,
  `numero_atomico` varchar(5) NOT NULL,
  `massa_atomica` varchar(100) NOT NULL,
  `classe` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `radioativo` varchar(5) NOT NULL,
  `fusao` varchar(20) NOT NULL,
  `ebulicao` varchar(20) NOT NULL,
  `latim` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `detalhes_elementos`
--

INSERT INTO `detalhes_elementos` (`id_detalhe`, `id_elemento`, `nome`, `sigla`, `numero_atomico`, `massa_atomica`, `classe`, `estado`, `radioativo`, `fusao`, `ebulicao`, `latim`, `texto`) VALUES
(1, 1, 'HidrogÃªnio', 'H', '1', '1,008', '1', 'gasoso', 'nÃ£o', '0,95K', '4,22K', 'Hydrogenii', 'APRESENTAÃ‡ÃƒO Do Grego de Hydro Genes que significa formador de Ã¡gua. Descoberto por Henry Cavendish em 1766 em Londres pela reaÃ§Ã£o do Ã¡cido vitriÃ³lico (H2SO4) com Zn, Fe ou Sn. Chamou-o de \"ar inflamÃ¡vel\". Ã‰ um gÃ¡s incolor, mais leve que o ar com o qual forma mistura explosiva. Possui trÃªs isÃ³topos, prÃ³tio (H), deutÃ©rio (D) descoberto em 1932 por Urey e tritio (T) sendo os dois primeiros naturais. O deutÃ©rio existe no hidrogÃªnio natural na proporÃ§Ã£o de 1 Ã¡tomo para 6.000 Ã¡tomos de prÃ³tio. Pode ser obtido pela eletrÃ³lise de uma soluÃ§Ã£o Ã¡cido sulfÃºrico ou clorÃ­drico, utilizando eletrÃ´dos inertes, sendo desprendido no cÃ¡todo (pÃ³lo negativo).  APLICAÃ‡Ã•ES Industrialmente sÃ£o necessÃ¡rias grandes quantidades de hidrogÃªnio, principalmente no processo de Haber para a obtenÃ§Ã£o de amonÃ­aco, na hidrogenaÃ§Ã£o de graxas e azeites e na obtenÃ§Ã£o de metanol. Outros usos que podem-se citar sÃ£o:   â€¢ ProduÃ§Ã£o de Ã¡cido clorÃ­drico, combustÃ­vel para foguetes, e reduÃ§Ã£o de minerais metÃ¡licos. â€¢ O hidrogÃ©nio lÃ­quido apresenta aplicaÃ§Ãµes criogÃªnicas, incluindo a investigaÃ§Ã£o da supercondutividade. â€¢ Devido Ã  sua leveza era usado como gÃ¡s de enchimento de balÃµes e dirigÃ­veis; apÃ³s o desastre do dirigÃ­vel Hindenburg abandonou-se em parte seu uso devido Ã  sua grande inflamabilidade, mas continua a ser usado em lanÃ§amento de balÃµes meteorolÃ³gicos estratosfÃ©ricos. â€¢ O trÃ­tio Ã© produzido nas reaÃ§Ãµes nucleares e Ã© empregado na construÃ§Ã£o de bombas de hidrogÃªnio. TambÃ©m se utiliza como fonte de radiaÃ§Ã£o em pinturas luminosas e como marcador nas ciÃªncias biolÃ³gicas. â€¢ O deutÃ©rio possui aplicaÃ§Ãµes nucleares como moderador, como constituinte da Ã¡gua pesada.  O hidrogÃ©nio pode ser usado em motores de combustÃ£o interna. Uma frota de automÃ³veis com motores deste tipo Ã© mantida na atualidade pela Chrysler-BMW. As cÃ©lulas de combustÃ­vel em desenvolvimento poderÃ£o ser capazes de oferecer uma alternativa limpa e econÃ´mica aos motores de combustÃ£o interna.  HISTÃ“RIA O hidrogÃªnio ( do francÃªs HydrogÃ¨ne, do grego hydros, Ã¡gua e gennein, gerar ) foi reconhecido como um elemento quÃ­mico em 1766 por Henry Cavendish; mais tarde Antoine Lavoisier daria o nome pelo qual o conhecemos. '),
(2, 2, 'HÃ©lio', 'He', '2', '4,002602', '3', 'gasoso', 'nÃ£o', '0,95K', '4,22k', 'Helium', 'APRESENTAÃ‡ÃƒO  Do Grego Hellios ou Sol. Descoberto por Sir William Ramsay em Londres e por P.T. Cleve e N.A. Langlet na SuÃ©cia em 1895. Foi o primeiro elemento a ser descoberto fora da Terra, onde foi evidenciado em um eclipse em 1868 na Ãndia, pela utilizaÃ§Ã£o de um espectroscÃ³pio apontado para o Sol. Posteriormente sua existÃªncia foi confirmada na Terra em minerais de urÃ¢nio e em poÃ§os de gÃ¡s natural, de onde Ã© obtido atualmente. Ã‰ um gÃ¡s incolor, nÃ£o inflamÃ¡vel e mais leve que o ar.  CARACTERÃSTICAS PRINCIPAIS  Nas CondiÃ§Ãµes Normais de Temperatura e PressÃ£o o hÃ©lio Ã© um gÃ¡s monoatÃ´mico, tornando-se lÃ­quido somente em condiÃ§Ãµes extremas (de alta pressÃ£o e baixa temperatura). Tem o ponto de solidificaÃ§Ã£o mais baixo de todos os elementos quÃ­micos, sendo o Ãºnico lÃ­quido que nÃ£o pode solidificar-se baixando a temperatura, jÃ¡ que permanece no estado lÃ­quido no zero absoluto Ã  pressÃ£o normal. De resto, sua temperatura crÃ­tica Ã© de apenas 5,19 K. Os isÃ³topos 3He e 4He sÃ£o os Ãºnicos em que Ã© possÃ­vel, aumentando a pressÃ£o, reduzir o volume mais de 30%. O calor especÃ­fico do gÃ¡s hÃ©lio Ã© muito elevado, de vapor muito denso, expandindo-se rapidamente quando Ã© aquecido a temperatura ambiente. O hÃ©lio sÃ³lido sÃ³ existe a pressÃµes da ordem de 100 MPa a 15 K (-248,15 ÂºC). Aproximadamente a essa temperatura, o hÃ©lio sofre uma transformaÃ§Ã£o cristalina, de estrutura cÃºbica a estrutura hexagonal compacta; em condiÃ§Ãµes mais extremas, ocorre uma nova mudanÃ§a, empacotando os Ã¡tomos numa estrutura cÃºbica centrada. Todos estes empacotamentos tem energias e densidades semelhantes, debitando-se as mudanÃ§as Ã  maneira como os Ã¡tomos interagem.  ÃPLICAÃ‡Ã•ES  O hÃ©lio Ã© mais leve que o ar, isto Ã©, a densidade do hÃ©lio Ã© menor que a densidade do ar, diferenciando-se do hidrogÃªnio por nÃ£o ser inflamÃ¡vel, entretanto, apresenta poder ascensional 8% menor. Por este motivo, e por ser um gÃ¡s inerte, Ã© utilizado em dirigÃ­veis e balÃµes com fins recreativos, publicitÃ¡rios, reconhecimento de terrenos, filmagens aÃ©reas e para investigaÃ§Ãµes das condiÃ§Ãµes atmosfÃ©ricas.  As maiores reservas de HÃ©lio encontram-se nos Estados Unidos. Estas reservas sÃ£o estratÃ©gicas e controladas pelo governo norte-americano. NÃ£o estÃ£o disponÃ­veis para venda em grande quantidades. '),
(3, 3, 'LÃ­tio', 'Li', '3', '6,941', '5', 'sÃ³lido', 'nÃ£o', '453K', '1615K', 'Lithium', 'APRESENTAÃ‡ÃƒO  Do Grego Lithos que significa pedra. Descoberto em 1817 por J. A. R. Arfvedson na SuÃ©cia ao analisar o mineral Petalita que foi descoberto pelo brasileiro JosÃ© BonifÃ¡cio e descrita em 1800. Foi isolado por em 1818 por Sir Humphry Davy apÃ³s eletrolisar uma soluÃ§Ã£o de carbonato de lÃ­tio em uma cÃ¡psula de platina.Ã‰ atualmente obtido pela eletrÃ³lise do cloreto de lÃ­tio fundido. Ã‰ o metal de menor densidade e inclusive inferior a da Ã¡gua, sua coloraÃ§Ã£o Ã© prateada e reage rapidamente com o ar e a Ã¡gua e deve ser conservado em Ã³leo mineral.  CARACTERÃSITICAS PRINCIPAIS  Ã‰ o metal mais leve, a sua densidade Ã© apenas metade do que a da Ã¡gua. Como os demais metais alcalinos Ã© monovalente e bastante reativo, porÃ©m menos que o sÃ³dio, por isso nÃ£o Ã© encontrado livre na natureza. No teste da chama torna-se vermelho, porÃ©m se a combustÃ£o ocorrer violentamente a chama adquire uma coloraÃ§Ã£o branca brilhante.  APLICAÃ‡Ã•ES Devido ao seu elevado calor especÃ­fico, o maior de todos os sÃ³lidos, Ã© usado em aplicaÃ§Ãµes de transferÃªncia de calor e, por causa do seu elevado potencial eletroquÃ­mico Ã© usado como um Ã¢nodo adequado para as baterias elÃ©tricas.'),
(4, 4, 'BerÃ­lio', 'Be', '4', '9,012182', '7', 'sÃ³lido', 'nÃ£o', '1560K', '2744K', 'beryllium', 'APRESENTAÃ‡ÃƒO De Beryllos, o nome Grego para a pedra semi-preciosa Berilo. Descoberto por N.L. Vauquelin em 1797 no mineral Berilo e foi isolado em 1828 por Friedrich Wohler em Berlin, Alemanha e A.A. Bussy independentemente em Paris, FranÃ§a por aÃ§Ã£o do potÃ¡ssio metÃ¡lico sobre o cloreto de berÃ­lio. Antigamente era tambÃ©m chamado de \'GlucÃ­nio\' devido ao sabor adocicado de seus sais, mas Ã© muito tÃ³xico. Obtido atualmente por reduÃ§Ã£o do fluoreto de berÃ­lio com magnÃ©sio. Ã‰ um metal cinza claro muito leve e resistente. CARACTERÃSITCAS PRINCIPAIS O berÃ­lio apresenta um dos pontos de fusÃ£o mais altos entre os metais leves. A maleabilidade Ã© aproximadamente 33% maior que a do aÃ§o. Tem uma grande condutividade tÃ©rmica, nÃ£o Ã© magnÃ©tico e resiste ao ataque do Ã¡cido nÃ­trico. Ã‰ bastante permeÃ¡vel aos raios X e, como o rÃ¡dio e o polÃ´nio, libera neutrons quando Ã© bombardeado com partÃ­culas alfa (na ordem de 30 neutrons por milhÃ£o de partÃ­culas alfa). Nas condiÃ§Ãµes normais de pressÃ£o e temperatura o berÃ­lio resiste Ã  oxidaÃ§Ã£o com o ar, ainda que a propriedade de limitar a oxidaÃ§Ã£o do cristal deva-se provavelmente Ã  formaÃ§Ã£o de uma delgada capa de Ã³xido. APLICAÃ‡Ã•ES â€¢ ProduÃ§Ã£o da liga metÃ¡lica cobre-berÃ­lio para uma grande variedade de aplicaÃ§Ãµes. â€¢ Em diagnÃ³sticos com raios X usam-se delgadas lÃ¢minas de berÃ­lio para filtrar a radiaÃ§Ã£o visÃ­vel, bem como na litografia com raios-X para a reproduÃ§Ã£o de circuitos integrados. â€¢ Moderador de neutrons em reatores nucleares. â€¢ Por sua rigidez, leveza e estabilidade dimensional, Ã© empregado na construÃ§Ã£o de diversos dispositivos como giroscÃ³pios, equipamentos de informÃ¡tica, molas de relÃ³gio e instrumentais diversos. â€¢ O Ã³xido de berÃ­lio Ã© utilizado quando sÃ£o necessÃ¡rios elevada condutividade tÃ©rmica, propriedades mecÃ¢nicas, pontos de fusÃ£o elevados e isolamento elÃ©trico. â€¢ AtÃ© recentemente eram empregados compostos de berÃ­lio em tubos fluorescentes.'),
(5, 5, 'Boro', 'B', '5', '10,811', '4', 'solido', 'nÃ£o', '2348K', '4273K', 'boron', 'APRESENTAÃ‡ÃƒO Do Ãrabe Burag, borax que Ã© seu principal mineral. Descoberto por J.L. Gay-Lussac, L.J. Thenard e Sir Humphry Davy em 1808 por reduÃ§Ã£o do Ã¡cido bÃ³rico com potÃ¡ssio. O boro puro atualmente Ã© obtido pela reduÃ§Ã£o do B2O3 com magnÃ©sio em pÃ³. Apresenta-se na coloraÃ§Ã£o negra ou marrom. Ã‰ um micro nutriente essencial aos animais e plantas. Utilizado principalmente na indÃºstria de vidros, fertilizantes, semi-condutores, retardante de chamas, antisÃ©pticos e abrasivos (nitreto de boro). CARACTERÃSITCAS PRINCIPAIS O boro Ã© um elemento que, na configuraÃ§Ã£o eletrÃ´nica normal, apresenta na camada de valÃªncia orbitais p imcompleto e vazios ( 2px1 - 2py0 - 2pz0 ); justificando a forte tendÃªncia de ganhar elÃ©trons. Por isso, que seus compostos se comportam como Ã¡cidos de Lewis, reagindo rapidamente com substÃ¢ncias ricas em elÃ©trons.   O boro arde com chama verde e entre as caractersticas Ã³pticas deste elemento, se incluÃ­ a transmisÃ£o de radiaÃ§Ã£o infravermelha. Na temperatura ambiente sua condutibidade elÃ©trica Ã© pequena, porÃ©m Ã© bom condutor de eletricidade em temperaturas altas. Este metalÃ³ide tem a maior resistÃªncia Ã  traÃ§Ã£o entre os elementos quÃ­micos conhecidos; o material fundido com arco tem uma resistÃªncia mecÃ¢nica entre 1600 e 2400 MPa.  O nitreto de boro Ã© um isolante elÃ©trico, porÃ©m conduz o calor tÃ£o bem quanto os metais. Ã‰ empregado na obtenÃ§Ã£o de materiais tÃ£o duros quanto o diamante. O boro tem, tambÃ©m, qualidades lubrificantes similares ao grafite e, comporta-se como o carbono na capacidade de formar redes moleculares atravÃ©s de ligaÃ§Ãµes covelentes estÃ¡veis. APLICAÃ‡Ã•ES O composto de boro de maior importÃ¢ncia econÃ´mica Ã© o bÃ³rax, empregado em grandes quantidades para a fabricaÃ§Ã£o de fibras de vidro e perborato de sÃ³dio.   O Boro Ã© usado em reatores nucleares com a funÃ§Ã£o de materiais de controle, Ã© usado para controlar e atÃ© mesmo finalizar a reaÃ§Ã£o de fissÃ£o nuclear em cadeia, pois o Boro Ã© um otimo absorvente de Neutrons. Outros usos:  â€¢ Fibras de boro sÃ£o usadas em aplicaÃ§Ãµes mecÃ¢nicas especiais , como no Ã¢mbito aeroespacial. AlcanÃ§am resistÃªncias mecÃ¢nicas de atÃ© 3600 MPa. â€¢ O boro amorfo Ã© usado em fogos de artifÃ­cio devido a coloraÃ§Ã£o verde que produz.'),
(6, 6, 'carbono', 'C', '6', '12,0107', '1', 'sÃ³lido', 'nÃ£o', '3550K', '4287K', 'ipsum', 'APRESENTAÃ‡ÃƒO O carbono (do latim carbo, carvÃ£o) Ã© um elemento quÃ­mico, sÃ­mbolo C de nÃºmero atÃ´mico 6 (6 prÃ³tons e 6 elÃ©trons) com massa atÃ³mica 12 u, e sÃ³lido a temperatura ambiente. Dependendo das condiÃ§Ãµes de formaÃ§Ã£o pode ser encontrado na natureza em diversas formas alotrÃ³picas, carbono amorfo e cristalino em forma de grafite ou diamante. Pertence ao grupo (ou famÃ­lia) 14 (anteriormente chamada 4A).   Ã‰ o pilar bÃ¡sico da quÃ­mica orgÃ¢nica, se conhecem cerca de 10 milhÃµes de compostos de carbono, e forma parte de todos os seres vivos. CARACTERÃSITCAS PRINCIPAIS O carbono Ã© um elemento notÃ¡vel por vÃ¡rias razÃµes. Suas formas alotrÃ³picas incluem, surpreendentemente, uma das substÃ¢ncias mais frÃ¡geis e baratas (o grafite) e uma das mais duras e caras (o diamante). Mais ainda: apresenta uma grande afinidade para combinar-se quimicamente com outros Ã¡tomos pequenos, incluindo Ã¡tomos de carbono que podem formar largas cadeias. O seu pequeno raio atÃ³mico permite-lhe formar cadeias mÃºltiplas; assim, com o oxigÃªnio forma o diÃ³xido de carbono, vital para o crescimento das plantas (ver ciclo do carbono); com o hidrogÃªnio forma numerosos compostos denominados, genericamente, hidrocarbonetos, essenciais para a indÃºstria e o transporte na forma de combustÃ­vel derivados de petrÃ³leo e gÃ¡s natural. Combinado com ambos forma uma grande variedade de compostos como, por exemplo, os Ã¡cidos graxos, essenciais para a vida, e os Ã©steres que dÃ£o sabor Ã s frutas. AlÃ©m disso, fornece, atravÃ©s do ciclo carbono-nitrogÃªnio, parte da energia produzida pelo Sol e outras estrelas. APLICAÃ‡Ã•ES O principal uso industrial do carbono Ã© como componente de hidrocarbonetos, especialmente os combustÃ­veis como petrÃ³leo e gÃ¡s natural; do primeiro se obtÃ©m por destilaÃ§Ã£o nas refinarias gasolinas, querosene e Ã³leos e, ainda, Ã© usado como matÃ©ria-prima para a obtenÃ§Ã£o de plÃ¡sticos, enquanto que o segundo estÃ¡ se impondo como fonte de energia por sua combustÃ£o mais limpa. Outros usos sÃ£o:   â€¢ O isÃ³topo carbono-14, descoberto em 27 de fevereiro de 1940, se usa na dataÃ§Ã£o radiomÃ©trica. â€¢ O grafite se combina com argila para fabricar a parte interna dos lÃ¡pis. â€¢ O diamante Ã© empregado para a produÃ§Ã£o de jÃ³ias e como material de corte aproveitando sua dureza. â€¢ Como elemento de liga principal dos aÃ§os (ligas de ferro). â€¢ Em varetas de proteÃ§Ã£o de reatores nucleares. â€¢ As pastilhas de carbono sÃ£o empregadas em medicina para absorver as toxinas do sistema digestivo e como remÃ©dio para a flatulÃªncia. â€¢ O carbono ativado se emprega em sistemas de filtraÃ§Ã£o e purificacÃ£o da Ã¡gua. â€¢ O Carbono-11, radioactivo com emissÃ£o de positrÃ£o usado no exame PET em medicina nuclear. â€¢ O carvÃ£o Ã© muito utilizado nas indÃºstrias siderÃºrgicas, como produtor de energia e na indÃºstria farmacÃªutica (na forma de carvÃ£o ativado)  As propriedades quÃ­micas e estruturais dos fulerenos, na forma de nanotubos, prometem usos futuros no campo da nanotecnologia (ver Nanotecnologia do carbono).   Os diamantÃ³ides sÃ£o minÃºsculos cristais com forma cristalina composta por arranjos de Ã¡tomos de carbono e tambÃ©m hidrogÃªnio muito semelhante ao diamante. Os diamantÃ³ides sÃ£o encontrados nos hidrocarbonetos naturais como petrÃ³leo, gÃ¡s e principalmente em condensados (Ã³leos leves do petrÃ³leo). TÃªm importante aplicaÃ§Ã£o na nanotecnologia.'),
(7, 7, 'Nitrogenio', 'N', '7', '14,0067', '1', 'gasoso', 'nÃ£o', '63,15K', '75,36K', 'Nitrogenium', 'APRESENTAÃ‡ÃƒO do Latim Nitrum ou Grego Nitron, que significa nitrato nativo ou salitre e Genes formador. Descoerto por Daniel rutheford em 1772, mas Cavendish, Scheele e Priestley tambÃ©m estudaram na mesma Ã©poca o \"Ar Deflogisticado\". Lavoisier o chamou de \"Azoto\" que significa Sem Vida. Constitui 78% da atmosfera e esta Ã© a sia principal fonte. Ã‰ separado do ar por destilaÃ§Ã£o fracionada do ar liquefeito. Ã‰ um gÃ¡s incolor e muito pouco reativo. Pode ser obtido pelo aquecimento da soluÃ§Ã£o de NaNO2 e NH2Cl. APLICAÃ‡Ã•ES â€¢ A mais importante aplicaÃ§Ã£o comercial do nitrogÃªnio Ã© na obtenÃ§Ã£o do gÃ¡s amonÃ­aco pelo processo Haber. O amonÃ­aco Ã© usado, posteriormente, para a fabricaÃ§Ã£o de fertilizantes e Ã¡cido nÃ­trico. â€¢ Ã‰ usado, devido a sua baixa reatividade, como atmosfera inerte em tanques de armazenamento de lÃ­quidos explosivos, durante a fabricaÃ§Ã£o de componentes eletrÃ´nicos (transistores, diodos, circuitos integrados, etc.) e na fabricaÃ§Ã£o do aÃ§o inoxidÃ¡vel. â€¢ O nitrogÃªnio lÃ­quido, obtido pela destilaÃ§Ã£o do ar lÃ­quido, se usa em criogenia, jÃ¡ que na pressÃ£o atmosfÃ©rica condensa a -196 ÂºC. â€¢ Ã‰ usado como fator refrigerante, para o congelamento e transporte de alimentos, conservaÃ§Ã£o de corpos e cÃ©lulas reprodutivas sexuais, masculinas e femininas ou quaisquer outras amostras biolÃ³gicas.  Entre os sais do Ã¡cido nÃ­trico estÃ£o incluÃ­dos importantes compostos como o nitrato de potÃ¡ssio (nitro ou salitre empregado na fabricaÃ§Ã£o de pÃ³lvora) e o nitrato de amÃ´nio como fertilizante.  Os compostos orgÃ¢nicos de nitrogÃªnio como a nitroglicerina e o Trinitrotolueno (TNT) sÃ£o muito explosivos. A hidrazina e seus derivados sÃ£o usados como combustÃ­vel em foguetes.  Na medicina nuclear, o 13N (lÃª-se nitrogÃªnio 13), radioactivo com emissÃ£o de positrÃ£o, Ã© usado no exame PET.  Na indÃºstria automobilÃ­stica Ã© utilizado para inflar pneus de alto desempenho.'),
(8, 8, 'OxigÃªnio', 'O', '8', '15,9994', '1', 'gasoso', 'nÃ£o', '50,35K', '90,18K', 'oxygeni', 'APRESENTAÃ‡ÃƒO Do grego Oxys=Ã¡cido, Genes=formador, significando formador de Ã¡cidos, pois se acreditava que todos os Ã¡cidos continham oxigenio. Descoberto por Joseph Priestley, Inglaterra e por C.W. Sheele, SuÃ©cia em 1774. Chamado de \"Ar Vital\" por Lavoisier.  Ã‰ um gÃ¡s incolor, sem cheiro e constitui 21% da atmosfera com solubilidade na Ã¡gua em torno de 8mg/l. Pode ser obtido pelo aquecimento do KCIO3 ou decomposiÃ§Ã£o da Ã¡gua oxigenada com MnO2. Por eletrÃ³lise de soluÃ§Ãµes aquosas alcalinas se desprende no pÃ³lo positivo. Obtido industrialmente pela destilaÃ§Ã£o do ar lÃ­quido. CARACTERÃSTICAS PRINCIPAIS Nas CondiÃ§Ãµes Normais de Temperatura e PressÃ£o o oxigenio se encontra no estado gasoso, formando molÃ©culas biatÃ´micas de formula molecular O2. Esta molÃ©cula Ã© formada durante a fotossÃ­ntese das plantas e, posteriormente, utilizada pelos seres vivos no processo de respiraÃ§Ã£o.  O oxigenio em seu estado lÃ­quido e sÃ³lido tem uma ligeira coloraÃ§Ã£o azulada e, em ambos os estados, Ã© paramagnÃ©tico. O oxigenio lÃ­quido e obtido usualmente a partir da destilaÃ§Ã£o fracionada do ar lÃ­quido, junto com o nitrogÃªnio. Reage praticamente com a totalidade dos metais, exceto com os metais nobres como ouro, platina, provocando a corrosÃ£o. APLICAÃ‡Ã•ES / INFORMAÃ‡Ã•ES Uma importante aplicaÃ§Ã£o para o oxigenio Ã© na indÃºstria de papel e celulose, sendo utilizado no branqueamento de celulose.   â€¢ O oxigenio Ã© tambÃ©m amplamente utilizado para enriquecimento do ar em fornos, onde oferece vantagens com reduÃ§Ã£o do consumo de insumos de petrÃ³leo, aumento de produÃ§Ã£o e melhor controle de temperatura.'),
(9, 9, 'FlÃºor', 'F', '9', '18,9984032', '4', 'gasoso', 'nÃ£o', '53,53K', '85,03K', 'fluorine', 'APRESENTAÃ‡ÃƒO Do latim Fleure, fluxo. Seus compostos foram conhecidos dos alquimistas, mas somente foi isolado por Henri Moissan em 1886 na FranÃ§a pela eletrÃ³lise do Ã¡cido fluorÃ­drico anidro.  Ã‰ um gÃ¡s amarelo pÃ¡lido, muito tÃ³xico, de odor irritante e perceptÃ­vel em concentraÃ§Ãµes de 20 ppb. Ã‰ o mais reativo de todos os elementos e ataca rapidamente todos os metais e o vidro formando fluoreto de silÃ­cio (SiF4) Reage com o oxigÃªnio e inclusive com gases nobres, como o XenÃ´nio, formando fluoretos (XeF4). CARACTERÃSTICAS PRINCIPAIS Em CNTP, o flÃºor Ã© um gÃ¡s corrosivo de coloraÃ§Ã£o amarelo-pÃ¡lido, fortemente oxidante. Ã‰ o elemento mais eletronegativo e o mais reativo dos ametais e forma compostos com praticamente todos os demais elementos, incluindo os gases nobres xenÃ´nio e radÃ´nio. Inclusive em ausÃªncia de luz e baixas temperaturas reage explosivamente com o hidrogÃªnio. Jatos de flÃºor no estado gasoso atacam o vidro, metais, Ã¡gua e outras substÃ¢ncias, que reagem formando uma chama brilhante. O flÃºor sempre se encontra combinado na natureza e tem afinidade por muitos elementos, especialmente o silÃ­cio, nÃ£o podendo ser guardado em recipientes de vidro.  Em soluÃ§Ã£o aquosa de seus sais, o flÃºor apresenta-se normalmente na forma de Ã­ons fluoretos, F-. Outras formas sÃ£o complexos de flÃºor como o [FeF4]-, ou o H2F+.  Os fluoretos sÃ£o compostos nas quais os ions fluoretos estÃ£o ligados a algum resto quÃ­mico de carga positiva.  O flÃºor Ã© um elemento quÃ­mico essencial para o ser humano.'),
(10, 10, 'NeÃ´nio', 'Ne', '10', '20,1797', '3', 'gasoso', 'nÃ£o', '24,56K', '27,07K', 'Neon', 'APRESENTAÃ‡ÃƒO Do grego Neos quesignifica novo. Descoberto por Sir William Ramsay e M.W. Travers em 1898 em Londres pela utilizaÃ§Ã£o da anÃ¡lise espectral de uma fraÃ§Ã£o obtida da destilaÃ§Ã£o do ar lÃ­quido. Foi reconhecido pela forte linha de emissÃ£o de cor vermelha. Ã‰ um gÃ¡s incolor, inodoro, mais debso que o ar e se encontra na concentraÃ§Ã£o de 18ppm na atmosfera. NÃ£o reage com nenhuma substÃ¢ncia. Ã‰ obtido principalmente do ar e sua principal aplicaÃ§Ã£o Ã© em luminosos vermelhos conhecidos como NÃ©on CARACTERÃSITICAS PRINCIPAIS Ã‰ o segundo gÃ¡s nobre mais leve, apresentando um poder de refrigeraÃ§Ã£o, por unidade de volume, 40 vezes maior que o do hÃ©lio lÃ­quido e trÃªs vezes maior que o do hidrogÃªnio lÃ­quido. Na maioria das aplicaÃ§Ãµes, o uso de nÃ©on lÃ­quido Ã© mais econÃ´mico que o do hÃ©lio.   â€¢ Peso atÃ³mico: 20,183 uma â€¢ Ponto de ebuliÃ§Ã£o: 27.1 K (-246Â°C) â€¢ Ponto de fusÃ£o: 24,56 K (-248,6Â°C) â€¢ Densidade: 1,20 g/ml (1,204 g/cm3 a -246Â°C) APLICAÃ‡Ã•ES O tom roxo-alaranjado da luz emitida pelos tubos de nÃ©on Ã© usado profusamente para a fabricaÃ§Ã£o de indicadores publicitÃ¡rios. TambÃ©m recebem a denominaÃ§Ã£o de tubos de nÃ©on outros de cores distintas que, na realidade, contÃªm gases diferentes.   Outros usos do nÃ©on sÃ£o:  â€¢ Indicadores de alta voltagem. â€¢ Tubos de televisÃ£o. â€¢ Junto com o hÃ©lio Ã© empregado para a obtenÃ§Ã£o de um tipo de laser. â€¢ O nÃ©on lÃ­quido Ã© comercializado como refrigerante criogÃªnico.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `elementos`
--

CREATE TABLE `elementos` (
  `id_elemento` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `label` varchar(3) NOT NULL,
  `numero` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `elementos`
--

INSERT INTO `elementos` (`id_elemento`, `nome`, `label`, `numero`, `id_tipo`) VALUES
(1, 'HidrogÃªnio', 'H', 1, 1),
(2, 'HÃ©lio', 'He', 2, 3),
(3, 'LÃ­tio', 'Li', 3, 5),
(4, 'BerÃ­lio', 'Be', 4, 7),
(5, 'Boro', 'B', 5, 4),
(6, 'carbono', 'C', 6, 1),
(7, 'Nitrogenio', 'N', 7, 1),
(8, 'OxigÃªnio', 'O', 8, 1),
(9, 'FlÃºor', 'F', 9, 4),
(10, 'NeÃ´nio', 'Ne', 10, 3),
(11, 'SÃ³dio', 'Na', 11, 5),
(12, 'magnesio', 'Mg', 12, 7),
(13, 'AlumÃ­nio', 'Al', 13, 6),
(14, 'SilÃ­cio', 'Si', 14, 2),
(15, 'FÃ³sforo', 'P', 15, 1),
(16, 'Enxofre', 'S', 16, 1),
(17, 'Cloro', 'Cl', 17, 4),
(18, 'Ãrgonio', 'Ar', 18, 3),
(19, 'PotÃ¡ssio', 'K', 19, 5),
(20, 'CÃ¡lcio', 'Ca', 20, 7),
(21, 'EscÃ¢ndio', 'Es', 21, 8),
(22, 'TitÃ¢nio', 'Ti', 22, 8),
(23, 'Vanadio', 'V', 23, 8),
(24, 'CrÃ´mo', 'Cr', 24, 8),
(25, 'ManganÃªs', 'Mn', 25, 8),
(26, 'Ferro', 'Fe', 26, 8),
(27, 'Cobalto', 'Co', 27, 8),
(28, 'NÃ­quel', 'Ni', 28, 8),
(29, 'Cobre', 'Cu', 29, 8),
(30, 'Zinco', 'Zn', 30, 8),
(31, 'GÃ¡lio', 'Ga', 31, 6),
(32, 'GermÃ¢nio', 'Ge', 32, 2),
(33, 'ArsÃªnio', 'As', 33, 2),
(34, 'SÃªlenio', 'Se', 34, 1),
(35, 'Bromo', 'Br', 35, 4),
(36, 'CriptÃ´nio', 'Kr', 36, 3),
(37, 'RubÃ­dio', 'Rb', 37, 5),
(38, 'EstrÃ´ncio', 'Sr', 38, 7),
(39, 'Ãtrio', 'Y', 39, 8),
(40, 'ZircÃ´nio', 'Zr', 40, 8),
(41, 'NiÃ³bio', 'Nb', 41, 8),
(42, 'MolibdÃªnio', 'Mo', 42, 8),
(43, 'TecnÃ©cio', 'Tc', 43, 8),
(44, 'RutÃªnio', 'Ru', 44, 8),
(45, 'RÃ³dio', 'Rh', 45, 8),
(46, 'PalÃ¡dio', 'Pd', 46, 8),
(47, 'Prata', 'Ag', 47, 8),
(48, 'CÃ¡dmio', 'Cd', 48, 8),
(49, 'Ã­ndio', 'In', 49, 6),
(50, 'Estanho', 'Sn', 50, 6),
(51, 'AntimÃ´nio', 'Sb', 51, 2),
(52, 'TelÃºrio', 'Te', 52, 2),
(53, 'Iodo', 'I', 53, 4),
(54, 'XenÃ´nio', 'Xe', 54, 3),
(55, 'CÃ©sio', 'Cs', 55, 5),
(56, 'BÃ¡rio', 'Ba', 56, 7),
(57, 'HÃ¡fnio', 'Hf', 72, 8),
(58, 'TÃ¢ntalo', 'Ta', 73, 8),
(59, 'TungstÃªnio', 'W', 74, 8),
(60, 'RÃªnio', 'Re', 75, 8),
(61, 'Ã“smio', 'Os', 76, 8),
(62, 'Iridio', 'Ir', 77, 8),
(63, 'Platina', 'Pt', 78, 8),
(64, 'Ouro', 'Au', 79, 8),
(65, 'MercÃºrio', 'Hg', 80, 8),
(66, 'TÃ¡lio', 'Tl', 81, 6),
(67, 'Chumbo', 'Pb', 82, 6),
(68, 'Bismuto', 'Bi', 83, 6),
(69, 'PolÃ´nio', 'Po', 84, 2),
(70, 'Astato', 'At', 85, 4),
(71, 'RadÃ´nio', 'Rn', 86, 3),
(72, 'FrÃ¢ncio', 'Fr', 87, 5),
(73, 'RÃ¡dio', 'Ra', 88, 7),
(74, 'RutherfÃ³rdio', 'Rf', 104, 8),
(75, 'DÃºbnio', 'Db', 105, 8),
(76, 'SeabÃ³rgio', 'Sg', 106, 8),
(77, 'BÃ³hrio', 'Bh', 107, 8),
(78, 'HÃ¡ssio', 'Hs', 108, 8),
(79, 'MeitnÃ©rio', 'Mt', 109, 8),
(80, 'DarmstÃ¡cio', 'Ds', 110, 8),
(81, 'RoentgÃªnio', 'Rg', 111, 8),
(82, 'CopernÃ­cio', 'Cn', 112, 8),
(83, 'NiÃ´nio', 'Nh', 113, 6),
(84, 'FlerÃ³vio', 'Fl', 114, 6),
(85, 'MoscÃ³vio', 'Mc', 115, 6),
(86, 'LivermÃ³rio', 'Lv', 116, 6),
(87, 'Tenesso', 'Ts', 117, 4),
(88, 'OganessÃ´nio', 'Og', 118, 3),
(89, 'LantÃ¢nio', 'La', 57, 9),
(90, 'CÃ©rio', 'ce', 58, 9),
(91, 'PraseodÃ­mio', 'Pr', 59, 9),
(92, 'NeodÃ­mio', 'Nd', 60, 9),
(93, 'PromÃ©cio', 'Pm', 61, 9),
(94, 'SamÃ¡rio', 'Sm', 62, 9),
(95, 'EurÃ³pio', 'Eu', 63, 9),
(96, 'GadolÃ­nio', 'Gd', 64, 9),
(97, 'TÃ©rbio', 'Tb', 65, 9),
(98, 'DisprÃ³sio', 'Dy', 66, 9),
(99, 'HÃ³lmio', 'Ho', 67, 9),
(100, 'Ã‰rbio', 'Er', 68, 9),
(101, 'TÃºlio', 'Tm', 69, 9),
(102, 'ItÃ©rbio', 'Yb', 70, 9),
(103, 'LutÃ©cio', 'Lu', 71, 9),
(104, 'ActÃ­nio', 'Ac', 89, 10),
(105, 'TÃ³rio', 'Th', 90, 10),
(106, 'ProtactÃ­nio', 'Pa', 91, 10),
(107, 'UrÃ¢nio', 'U', 92, 10),
(108, 'NeptÃºnio', 'Np', 93, 10),
(109, 'PlutÃ´nio', 'Pu', 94, 10),
(110, 'AmerÃ­cio', 'Am', 95, 10),
(111, 'CÃºrio', 'Cm', 96, 10),
(112, 'BerquÃ©lio', 'Bk', 97, 10),
(113, 'CalifÃ³rnio', 'Cf', 98, 10),
(114, 'EinstÃªnio', 'Es', 99, 10),
(115, 'FÃ©rmio', 'Fm', 100, 10),
(116, 'MendelÃ©vio', 'Md', 101, 10),
(117, 'NobÃ©lio', 'No', 102, 10),
(118, 'LaurÃªncio', 'Lr', 103, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_de_elementos`
--

CREATE TABLE `tipos_de_elementos` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipos_de_elementos`
--

INSERT INTO `tipos_de_elementos` (`id_tipo`, `tipo`) VALUES
(1, 'nao-metais'),
(2, 'semi-metais'),
(3, 'gases-nobres'),
(4, 'halogenios'),
(5, 'metais-alcalinos'),
(6, 'metais-representativos'),
(7, 'metais-alcalino-terrosos'),
(8, 'metais-de-transicao'),
(9, 'lantanidios'),
(10, 'actinidios');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detalhes_elementos`
--
ALTER TABLE `detalhes_elementos`
  ADD PRIMARY KEY (`id_detalhe`);

--
-- Indexes for table `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id_elemento`),
  ADD KEY `fk_tipo_elemento` (`id_tipo`);

--
-- Indexes for table `tipos_de_elementos`
--
ALTER TABLE `tipos_de_elementos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detalhes_elementos`
--
ALTER TABLE `detalhes_elementos`
  MODIFY `id_detalhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tipos_de_elementos`
--
ALTER TABLE `tipos_de_elementos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `elementos`
--
ALTER TABLE `elementos`
  ADD CONSTRAINT `fk_tipo_elemento` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_de_elementos` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
