-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Fev-2023 às 03:57
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reflexoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_reflexoes`
--

DROP TABLE IF EXISTS `tbl_reflexoes`;
CREATE TABLE IF NOT EXISTS `tbl_reflexoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `areaTexto` longtext COLLATE utf8mb4_unicode_ci,
  `imagens` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=333 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbl_reflexoes`
--

INSERT INTO `tbl_reflexoes` (`id`, `titulo`, `areaTexto`, `imagens`) VALUES
(291, 'Sunshine', 'Aos poucos meu coração foi se acalmando, meu nervosismo foi passando mas o meu peito queima de saudades como se fosse a primeira vez que eu amo E na verdade é a primeira vez que eu amo tão intensamente Eu sinto a ardência no meu coração toda vez que penso em você, mas ao mesmo tempo uma imensa paz me domina quando olho nossas fotos Lembro do momento em que deitamos juntos E pela primeira vez pude observar a imensidão da sua alma através dos seus pequenos, mas profundos olhos marrom bordô Não existia mais nada no mundo, o tempo parou, e para ser sincera acho que eu nem piscava Para não correr o risco de perder a visão mais linda que já tive na minha pequena vida; seus olhos castanhos, cheios de vida e amor Que guardam o ser mais doce e amável que eu já conheci nesta vida Naquela noite você me convidou para conhecer seu mundo Olhando através de você, eu pude conhecer a frágil criatura que se esconde Ela me mostrou seus medos, vulnerabilidades e a cada segundo que passava eu tinha mais certeza que não poderia, em hipótese nenhuma, em alguma vida, viver sem você. Eu nunca tive o prazer de cruzar com um ser tão magnífico.<a href=\"https://youtu.be/egbk8IgYreI\">Eu te amo</a>', 0x6c6f7665),
(200, 'Meu dia e aspirações para o futuro.', 'Conteudo: Conteudo: Cara sinceramente, procuro mudar muito, tenho muitas inspirações na minha mente, gostaria de continuar estudando terminar minha pós, continuar avançando e melhorando a minha lógica e melhorando como programador, sinto que se continuar como eu estou, no mesmo ritmo, eu vou conseguir daqui um ano mais ou menos estar melhor do que agora, estou muito feliz e satisfeito hoje, mesmo eu me sentindo um pouco sei lá, como uma sensação esquisita mas tenho confiança em mim mesmo. Gostaria de expressar aqui a minha gratidão por hoje dia 24/05/2022, e meus anseios para o futuro, quero ganhar mais dinheiro, quero evoluir mais meu intelecto, evoluir como pessoa, ser um namorado melhor, um filho melhor, eu quero ajudar toda a minha família, eu desejo ter conforto, evoluir no meu treinamento budista mais ainda, eu sei que vai ser difícil os obstáculos mas eu estou aqui firme e forte, vou aprender o máximo que puder e me tornar cada vez mais inteligente, estou feliz também que comprei meu hd novo e vou poder instalar o linux, e vou aprender mais ainda.', 0x617370697261636f65732d66757475726f),
(213, 'Uma reflexão aleatoria', 'A vida não passa de um rio, um rio cheio de pedras e redemoinhos, caso não se submeta a correnteza bate nas pedras se fere, entra no redemoinho permanece rodopiando no mesmo lugar afundando, porém aquele que se submete a correnteza entra e sai sem dificuldades, mesmo que ainda bata em algumas pedras e entre em alguns redemoinhos se ferindo não permanece preso a eles por muito tempo.', 0x7265666c6578616f2d616c6561746f726961),
(215, 'O que vale a pena nessa curta existência? reflexão sobre o caminho da verdade do mestre o Buddha', 'O que vale a pena nessa curta existência? reflexão sobre o caminho da verdade do mestre o Buddha Conteudo: O que realmente causa alivio por muito tempo na nossa vida? o que experienciei até o presente momento é que a nossa mente cria situações argumentando que aquilo que se sucede deve ser feito por que vai trazer benefício para sí proprio, justifica que se executar-mos isso aquilo vai acontecer,geralmente o que acontece é o contrário, a mente começa a ficar cada vez pior e nunca para de pedir para fazer isso e continua se emaranhando num carretel de situações que geram ainda mais dor humilhação e sofrimento, na verdade a mente sente prazer em sentir desconforto justificando o próprio egoismo, o que deve ser feito geralmente está longe do que é proposto por nossos pensamentos e as vezes piora mais ainda a dor, o que realmente deveria ser feito seria apenas o fato de ponderar atitudes e conversas que jogue lenha na fogueira do ego, quanto mais se desabafa quando está iludido pelos sentimentos negativos mais ainda é sugado para baixo no redemoinho de lamentações, então o afastamento de situações dolorosas, o afastamento de coisas ou pessoas que lhe causam dor e desconforto geralmente é o ideal a se fazer, experiênciando o afastamento pode perceber que a mente começa a se sentir leve como um balão e aparece uma sensação de alivio como se realmente aquilo fosse o ideal, nem feliz nem triste apenas uma brisa agradavél na mente. Vontade de sentir isso novamente.', 0x62756464686f),
(312, 'Reflexões sobre o que a vida tem para oferecer', 'O que essa vida tem para oferecer, eu tenho tudo na vida, casa, bons parentes, uma namorada que eu amo e ela me ama, amigos razoáveis, vida financeira razoável, entretanto eu sinto um vazio grande, sinto como se minha existência fosse um fardo, como se toda a vida que eu tenho que eu carrego fosse um peso, não e questão de odiar a vida , pelo contrário, eu amo a vida com todas as forças, mas sinto que tudo que existe na minha vida me usa, não e com mm o se eu consumisse a vida , ela me consome.', 0x636861696e);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
