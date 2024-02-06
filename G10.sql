-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 12 jan. 2024 à 14:34
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `G10`
--

-- --------------------------------------------------------

--
-- Structure de la table `Auteur`
--

CREATE TABLE `Auteur` (
  `idPersonne` int(11) NOT NULL,
  `idLivre` varchar(15) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Auteur`
--

INSERT INTO `Auteur` (`idPersonne`, `idLivre`, `idRole`) VALUES
(10, '978-2416003387', 1),
(8, '978-2412081716', 1),
(7, '978-2212566659', 1),
(11, '978-2212571899', 1),
(6, '978-2493594389', 1),
(5, '979-8364961150', 1),
(1, '978-2818811597', 1),
(2, '978-2311406153', 1),
(3, '979-8449700407', 1),
(4, '979-8393836634', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Editeur`
--

CREATE TABLE `Editeur` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Editeur`
--

INSERT INTO `Editeur` (`id`, `libelle`) VALUES
(1, 'EYROLLES'),
(2, 'First'),
(3, 'ABP Editions'),
(4, 'Editions du Faubourg'),
(5, 'Indépendant'),
(6, 'Vuibert'),
(7, 'Maxima');

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE `Genre` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Genre`
--

INSERT INTO `Genre` (`id`, `libelle`) VALUES
(1, 'Roman');

-- --------------------------------------------------------

--
-- Structure de la table `Langue`
--

CREATE TABLE `Langue` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Langue`
--

INSERT INTO `Langue` (`id`, `libelle`) VALUES
(1, 'Français');

-- --------------------------------------------------------

--
-- Structure de la table `Livre`
--

CREATE TABLE `Livre` (
  `isbn` varchar(15) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `editeur` int(11) NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `langue` int(11) DEFAULT NULL,
  `nbpages` int(11) DEFAULT NULL,
  `resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Livre`
--

INSERT INTO `Livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `langue`, `nbpages`, `resume`) VALUES
('978-2212566659', 'Blockchain : La révolution de la confiance', 3, 2017, 1, 1, NULL, '<strong> Résumé :</strong> <br> <br> \"Deuxième révolution numérique\", \"ubérisation ultime\", \"machine à confiance\"... la blockchain laisse présager une \r\n                révolution des usages comparable à celle portée par l\'Internet dans les années 90. \r\n                <br> <br>\r\n                La promesse de la blockchain est en effet majeure : des transactions instantanées à des coûts minimes et sans organe central de contrôle. \r\n                Cette technologie a le potentiel de totalement changer les règles du jeu dans de nombreux secteurs économiques, à commencer par le \r\n                système bancaire. \r\n                <br> <br>\r\n                Comment se préparer ? Laurent Leloup décrypte de façon très pédagogique le fonctionnement d\'une blockchain, les expériences en cours, \r\n                les perspectives. Surtout, il pointe les questions à se poser et aide à diagnostiquer les opportunités liées à la blockchain dans chaque \r\n                secteur. \r\n                <br> <br>\r\n                Au-delà des implications économiques, c\'est une profonde transformation sociétale qui s\'annonce. Car la blockchain est avant tout une \r\n                révolution de la confiance, portée non plus par un tiers de confiance - banquier, notaire, etc. -, mais par un système décentralisé et \r\n                partagé. Un nouveau monde se profile.'),
('978-2212571899', 'Blockchain : vers de nouvelles chaînes de valeur', 1, 2019, 1, 1, 318, '<strong> Résumé :</strong> <br> <br> Rupture technologique, phénomène économique et sociétal, la Blockchain est\r\n               devenue en quelques années un terme familier, une promesse de futur transformé, une notion centrale. Adulée ou détestée, \r\n               elle reste cependant mal comprise, car complexe et singulière. Pour autant, maîtriser cette innovation est devenu indispensable \r\n               pour cerner les nouvelles règles du jeu de l\'économie mondiale. C\'est l\'objet de cet ouvrage. \r\n               <br>\r\n               <br>\r\n              Trop souvent réduite aux seules questions de confiance et de décentralisation, la Blockchain est ici restituée selon toute sa \r\n              densité par une approche pluridisciplinaire : racontée dans son épaisseur historique, pédagogiquement décrite du point de vue \r\n              technique, envisagée selon ses applications économique et financière, elle fait également l\'objet d\'une analyse philosophique \r\n              destinée à en cerner la singularité. \r\n               <br>\r\n               <br>\r\n              Les auteurs expliquent dans son intégralité une révolution qu\'ils considèrent de l\'ampleur de celle d\'Internet. Ils donnent \r\n              ainsi à tous les clés de compréhension et les leviers d\'action stratégique face à ce new deal technologique, économique et social.'),
('978-2311406153', 'Initiation à la cryptographie', 6, 2018, 1, 1, 192, '<strong> Résumé :</strong> <br> <br> Un manuel pour maîtriser les bases de la cryptographie appliquée aux\r\n               mathématiques et à l\'informatique avec un cours concis et des exercices d\'application corrigés. \r\n                <br>\r\n                <br>\r\n\r\n                La cryptographie, appelée science du secret, a vu ses possibilités décuplées au cours des siècles. Avec l’arrivée de \r\n                l’informatique, elle fait partie de notre quotidien, que ce soit sur l’Internet ou avec l’apparition des nouvelles puces \r\n                RFID présentes dans nos cartes bancaires. Riche de multiples possibilités et méthodes, cette discipline, servant à assurer \r\n                la sécurité et la confidentialité des communications et des données, s’impose à tous. \r\n                Cette nouvelle édition, revue et augmentée pour prendre en compte les technologies actuelles et les développements futurs \r\n                en matière de sécurité, est destinée aux étudiants en premier cycle des études supérieures des cursus mathématiques et \r\n                informatique. \r\n                <br>\r\n                On y trouve un cours complet augmenté de chapitres traitant des nouvelles méthodes de cryptographie (AES, chiffrement \r\n                homomorphe, etc.) et de nombreux exercices corrigés (actualisés), pour comprendre et maîtriser les mécanismes à l’œuvre dans \r\n                les échanges de données. '),
('978-2412081716', 'Bitcoin et Cryptomonnaies faciles', 2, 2022, 1, 1, 192, '<strong> Résumé :</strong> <br> <br> Bitcoin, NFT, blockchain, stablecoins, DeFi, Ethereum... \r\n              <br>\r\n              En tout juste une décennie, les cryptomonnaies sont devenues un enjeu politique et économique majeur. Mais malgré leur popularité, \r\n              leur univers reste complexe, empreint d\'exaltation et de scepticisme. \r\n              <br>\r\n              Avec pédagogie et simplicité, Claire Balva et Alexandre Stachtchenko offrent une introduction accessible à Bitcoin et aux cryptomonnaies. Après une présentation des écueils du système monétaire et financier à l\'ère d\'Internet, le voyage peut commencer. Origines, fonctionnement, enjeux et espoirs... Faites le tour au fil des chapitres et mettez le pied à l\'étrier grâce à quelques conseils pratiques. \r\n              Un livre indispensable pour pouvoir enfin prendre part à la conversation sur les cryptomonnaies !'),
('978-2416003387', 'Bitcoin, Comprendre et investir', 1, 2021, 1, 1, 206, '<strong> Résumé :</strong> <br> <br> Le Bitcoin et les cryptomonnaies constituent autant de placements nouveaux \r\n              et au potentiel sans équivalent, de même que la finance décentralisée (DeFi) révolutionne la finance traditionnelle. \r\n              Mais aujourd\'hui, de nombreuses questions se posent à l\'investisseur individuel : \r\n                <br>\r\n                <br>\r\n              -          Comment fonctionnent le Bitcoin et la blockchain ? \r\n                <br>\r\n              -          Qu\'est-ce que la DeFi, les stablecoins, les NFT, etc. ? \r\n                <br>\r\n              -          Quel est leur réel potentiel ? \r\n                <br>\r\n              -          Comment acheter, stocker et dépenser ses cryptomonnaies en toute sécurité ? \r\n                <br>\r\n              -          Quelle est la fiscalité ? \r\n                <br>\r\n                <br>\r\n              Philippe Herlin répond à toutes ces questions dans cet ouvrage très pratique à la portée de tous. Pédagogue hors pair, il donne tous les conseils pour investir dans les meilleures conditions... et éviter de rater le train.'),
('978-2493594389', 'Alice au pays des cryptos', 4, 2023, 1, 1, 109, '<strong> Résumé :</strong> <br> <br> Plongez avec Alice dans le monde mystérieux et controversé des cryptomonnaies. \r\n              <br>\r\n              Nous sommes à la veille du confinement quand la jeune femme hérite de sa grand-mère et se demande que faire de cet argent \r\n              que son banquier veut placer pour elle. \r\n              <br>\r\n              Par hasard, elle découvre que des monnaies parallèles lui ouvrent la porte d’un autre monde. Incomprise de sa famille \r\n              et de ses amis, elle s’y investit à corps perdu. \r\n              <br>\r\n              Ses dessins font d’elle une passeuse influente, et on embarque jusqu’au Salvador pour comprendre la puissance et les \r\n              dangers de Bitcoin, des NFT et d’autres curiosités.  '),
('978-2818811597', 'Le guide complet du trading', 7, 2023, 1, 1, 560, '<strong> Résumé :</strong> <br> <br> Vous souhaitez intervenir de manière active sur les marchés financiers ? \r\n              Cet ouvrage regroupe et explique toutes les connaissances dont vous avez besoin pour vous lancer facilement : \r\n              <br> <br>\r\n              Les principes fondamentaux de l’économie, pour comprendre les mouvements de marché mais aussi leur analyse par des professionnels \r\n              et des médias spécialisés. \r\n              <br>\r\n              Les principes de l’analyse technique, qui vous permettront d’interpréter les variations de prix à l’aide de figures chartistes \r\n              (qui traduisent la psychologie des intervenants) et d’indicateurs et d’oscillateurs techniques pouvant être utilisés de manière \r\n              exclusive ou conjointe à l’économie fondamentale. \r\n              <br>\r\n              Le money management, pour maîtriser la gestion d’un compte de trading actif sans le mettre en danger. \r\n              <br>\r\n              Les différents modes de trading selon le temps dont vous disposez : règles de base du swing trading, du day trading et du \r\n              scalping, méthodes d’entrée et de sortie de position, backtesting, trading virtuel... \r\n              <br> \r\n              Les spécificités de chaque type d’actifs : CFD, actions, FOREX. \r\n              <br> <br>\r\n              Illustré de nombreux graphiques pour faciliter la compréhension de toutes les notions, principes et techniques abordés, cet \r\n              ouvrage se révélera vite votre allié indispensable pour pratiquer un trading actif et sécurisé.'),
('979-8364961150', 'Blockchain et Crypto-monnaies', 5, 2022, 1, 1, 269, '<strong> Résumé :</strong> <br> <br> Blockchain et cryptomonnaies 2 livres en 1 : Guide du débutant pour \r\n              découvrir la blockchain, le bitcoin, l’altcoin, le NFT et les cryptomonnaies émergentes. \r\n              <br> <br>\r\n              Tout le monde en parle et vous n’avez pas encore compris ce que sont les cryptomonnaies ? Aimeriez-vous en savoir plus et\r\n               peut-être commencer à investir pour avoir un revenu supplémentaire ? \r\n              <br> <br>\r\n              Alors ce livre est fait pour vous !'),
('979-8393836634', 'Education financière : les bases', 5, 2023, 1, 1, 140, '<strong> Résumé :</strong> <br> <br> Avez-vous déjà entendu dire que l\'éducation financière peut changer \r\n              la vie des gens ? \r\n              <br>\r\n              <br>\r\n              C\'est la discipline qui nous rend autonomes et indépendants et qui comprend toutes les activités liées à l\'argent. \r\n              Vous feriez mieux de l\'apprendre... \r\n              Votre relation avec l\'économie et l\'argent doit être correcte et ne pas être faussée par les conseils des autres. \r\n               <br>\r\n              Vous ne devez faire confiance à personne lorsque vous gérez votre argent et vous devez comprendre ce que vous faites. \r\n               <br>\r\n              \"Là où se trouve votre argent, vous devez toujours être présent. \r\n               <br> <br>\r\n              Les bases de l’éducation financière est un livre qui plaira à tout le monde, quel que soit votre niveau de connaissance et d\'expérience.'),
('979-8449700407', 'L\'investisseur moderne : Comment faire partie des nouveaux riches ?', 5, 2022, 1, 1, 222, '<strong> Résumé :</strong> <br> <br> Le monde de l\'investissement a changé et aujourd\'hui, \r\n              ne plus dépendre d\'un salaire est un choix. \r\n              <br>\r\n              Vous souhaitez découvrir de nouvelles stratégies d’investissements pour obtenir un meilleur avenir ? \r\n              Vous voulez profiter des nouvelles opportunités pour devenir le nouveau riche de demain ? \r\n              <br>\r\n              L\'immobilier crée 90% des millionnaires grâce à 3 éléments : l\'effet de levier, le cash-flow et la \r\n              plus-value qu\'ils faut savoir optimiser. \r\n              <br>\r\n              Découvrez 3 stratégies à haut rendement pour multiplier vos investissements et 5 outils que les plus \r\n              riches exploitent pour optimiser leur fiscalité. \r\n              <br>\r\n              Si vous n\'investissez pas, votre rentabilité est de 0%, elle est même négative si l\'on considère l\'inflation. \r\n              <br> <br>\r\n              Le livre vous expliquera étape par étape comment investir sur les marchés financiers d’aujourd’hui. \r\n              Saisissez les meilleures opportunités grâce à l\'analyse fondamentale.');

-- --------------------------------------------------------

--
-- Structure de la table `Personne`
--

CREATE TABLE `Personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Personne`
--

INSERT INTO `Personne` (`id`, `nom`, `prenom`) VALUES
(1, 'Busiere', 'Anthony'),
(2, 'Dubertret', 'Gilles'),
(3, 'Pajot', 'Jémemy'),
(4, 'Gianfranco', 'Saro'),
(5, 'Stefano ', 'Pascal '),
(6, 'Monteiro', 'Daniel Villa '),
(7, 'Leloup', 'Laurent'),
(8, 'Balva ', 'Claire'),
(10, 'Herlin', 'Philippe'),
(11, 'Della', 'Martin');

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Role`
--

INSERT INTO `Role` (`id`, `libelle`) VALUES
(1, 'Ecrivain');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Editeur`
--
ALTER TABLE `Editeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Index pour la table `Langue`
--
ALTER TABLE `Langue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Livre`
--
ALTER TABLE `Livre`
  ADD PRIMARY KEY (`isbn`);

--
-- Index pour la table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Editeur`
--
ALTER TABLE `Editeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Langue`
--
ALTER TABLE `Langue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Personne`
--
ALTER TABLE `Personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
