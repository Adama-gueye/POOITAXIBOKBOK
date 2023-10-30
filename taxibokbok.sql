-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 30 oct. 2023 à 10:48
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `taxibokbok`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `tel` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `tel`) VALUES
(1, 'Gueye', 'Adama', 'adg@gmail.com', 'passer123', '775003108'),
(2, 'Wade', 'Yama', 'yama@gmail.com', 'passer123', '777777777'),
(3, 'Gueye', 'Adama', 'gueye@gmail.com', 'passer123', '775003108'),
(5, 'Sarr', 'Moustapha', 'tapha@gmail.com', 'passer123', '770000000'),
(7, 'Sarr', 'Moustapha', 'tapha2@gmail.com', '', '770000000'),
(8, 'CC', 'CC', 'gg@gmail.ocm', 'ttt', '456789'),
(9, 'Diallo', 'Bendji', 'bendji@gmail.com', 'passer123', '777777777'),
(10, 'Camara', 'Mamadou', 'camara@gmail.com', 'passer123', '770000000'),
(11, 'zsedfc', 'sedf', 'cc@gmail.com', 'passer', '456433434'),
(13, 'HDBH', 'HHDQ', 'uhauh@gmail.com', 'uazh', '893939'),
(14, '', '', 'JHHJH@gmail.com', '', 'JHJJHHJ'),
(15, 'FTFGF', 'FFGFG', 'ggg@gamil.com', 'ggggh', '45RDFDF'),
(16, 'AAD', 'AAD', 'coumba@gamil.com', 'AZEE', '772086514'),
(17, 'ZERTY', 'ZEG', 'ZERG@gmail.com', 'ghgh', '66646464'),
(18, 'trthr', 'trdtrh', 'ad@gmail.com', 'ssdd', '7845634563'),
(19, 'SSS', 'SSSS', 'gam@gmail.com', 'ghgh', '67787878'),
(20, 'GHGH', 'GHGH', 'gg@gamil.com', 'bhhb', '685567765'),
(21, 'dsdij', 'fdfdjhj', 'zall@gmail.colm', 'fkjdf', '774650012'),
(24, 'tryuiop^$', 'zertyuiop^ertyuiop^$', 'dkn@gmail.com', '123456', '781106370'),
(25, 'ztryuiop', 'ertyuiop', 'dkn@gmail.coms', '123456', '781106370'),
(26, 'Guey', 'Ada', 'rtf@gmail.coms', 'passer123', '775003108'),
(31, '87YU', 'HJHJ', 'JHZDJH@gmail.com', 'jhjh', '770000000'),
(34, 'SDSDC', 'BGHG234567', 'QQ@gmail.com', 'ddsese', '77343433'),
(46, 'zzd', 'ss c', 'leye@gmail.com', 'passer123', '770000000'),
(49, 'zzd', 'ss', 'ya@gmail.com', 'passer123', '770000000'),
(54, 'zzd', 'ss', 'rz@gmail.com', 'passer123', '770000000'),
(56, 'zzd', 'ss', 'zdd@gmail.com', 'passer123', '770000000'),
(58, 'd', 'd', 'SS@gmail.com', 'passer123', '770000000'),
(59, 'ertyiopdfghj', 'aztryui', 'djhsjds@fdfs.dsd', 'dsdsdsd', '751106370'),
(60, 'TALLA', 'Cheikh Saliou', 'cheikhserignesalioutalla@gmail.com', '00000000', '774906695'),
(61, 'etryuio', 'azertyuiop', 'tryuiop@gmail.com', 'zertyuio', '774906695'),
(62, 'FFF', 'yfgFFGFG', 'moussa0000000001@gmail.com', 'GGGGG', '770000000'),
(63, 'eede', 'zee', 'azz@gmail.com', 'ccdff', '770000000'),
(64, 'esses', 'cdqsse', 'adii@gmail.com', '123CCC', '770000000'),
(65, 'hghgh', 'jhhh', 'ak@gmail.com', 'CCCDC', '770000000'),
(66, 'ghgh', 'ghhh', 'akk@gmail.com', 'passer123', '770000000'),
(67, 'MMMDM', 'ifivp', 'adk@gmail.com', 'rrrrrrrr', '770000000'),
(68, 'zertyuiop', 'zertyuio', 'fdjhfkjkd@ffdfd::fpd', '111111111', '775655585'),
(69, 'zertyuiop', 'azertyuiop', 'dsdsds@dsds.om', '11111', '771011111'),
(73, 'azazxda', 'jjkwyou', 'fese@gmail.com', 'gogogogo', '775591454'),
(76, 'jhjhh', 'hhjjh', 'CVVFG@gmail.com', 'passer123', '775003108'),
(77, 'Diallo', 'Bouh', 'diallo@gmail.com', 'passer123', '775002108');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
