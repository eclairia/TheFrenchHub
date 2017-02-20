-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Novembre 2016 à 10:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdd_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
  `comment_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clé primaire',
  `comment_post_ID` int(11) NOT NULL COMMENT 'Clé vers le post',
  `comment_author` int(11) NOT NULL COMMENT 'Clé vers l''auteur',
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date du commentaire',
  `comment_content` text NOT NULL COMMENT 'Texte du commentaire',
  PRIMARY KEY (`comment_ID`),
  KEY `fk_blog_comments_blog_posts1` (`comment_post_ID`),
  KEY `fk_blog_comments_blog_users1` (`comment_author`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `blog_comments`
--

INSERT INTO `blog_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_date`, `comment_content`) VALUES
(1, 3, 2, '2012-04-11 12:27:00', 'Cette campagne est ennuyeuse à mourir !'),
(2, 1, 1, '2012-10-21 11:27:34', '30% d''abstension attendue ...'),
(3, 2, 2, '2012-04-10 12:29:23', 'Les commentaires sur les blogs ne sont que rarement intéressants'),
(9, 11, 1, '2016-10-21 16:40:44', 'Ce commentaire est un test'),
(10, 10, 2, '2016-10-22 08:01:03', 'Ceci est un second test'),
(11, 1, 1, '2016-10-23 16:41:22', 'Test d''affichage de tous les commentaires '),
(13, 2, 2, '2016-10-29 10:34:38', 'Jê teste l''affichage des commentaires'),
(14, 2, 2, '2016-10-29 10:35:08', 'Normalement, je dois avoir 3 commentaires pour l''article 2 grâce à ce commentaire :)'),
(15, 1, 2, '2016-10-29 14:04:07', 'kjyhtgreffokuthrijyhtfezrhtgr'),
(16, 10, 2, '2016-10-29 14:13:14', 'Test d''ORDER BY'),
(24, 21, 3, '2016-11-08 12:16:00', 'test'),
(18, 1, 3, '2016-11-04 11:48:54', 'c''est Antoine'),
(26, 3, 3, '2016-11-15 08:23:16', 'Essai de commentaire'),
(25, 21, 3, '2016-11-15 08:17:45', 'test'),
(22, 1, 3, '2016-11-04 12:00:03', 'test2'),
(23, 1, 3, '2016-11-04 12:01:38', 'test3'),
(27, 3, 3, '2016-11-15 08:25:10', 'Test 3'),
(28, 20, 3, '2016-11-15 08:25:21', 'test'),
(29, 20, 3, '2016-11-15 08:37:37', 'Test de commentaire avec l''utilisateur 3'),
(30, 20, 3, '2016-11-15 08:37:37', 'Test de commentaire avec l''utilisateur 3'),
(31, 20, 3, '2016-11-15 08:38:12', 'Test de commentaire avec l''id 2'),
(32, 28, 1, '2016-11-16 11:34:06', 'Test'),
(33, 2, 2, '2016-11-16 11:56:09', 'Test'),
(34, 3, 2, '2016-11-16 11:56:33', 'Essai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
