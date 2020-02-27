-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 27 fév. 2020 à 15:59
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Tchat`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_user`, `time`, `date`) VALUES
(222, 'Bienvenue sur le Tchat !', 1, '14:17:46', '27/02/2020'),
(229, ' Le Tchat est coder avec du PHP, Mysql pour la DB et du JavaScript (+jquery pour ajax) ', 1, '14:22:02', '27/02/2020'),
(245, 'Salut l\'équipe ! ', 2, '14:44:13', '27/02/2020'),
(246, 'Stylé !', 4, '14:47:32', '27/02/2020'),
(247, ':)', 3, '14:51:08', '27/02/2020'),
(261, 'Bravo fiston ! ', 5, '15:05:21', '27/02/2020');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'Hugo', '63a9f0ea7bb98050796b649e85481845'),
(2, 'Hemza', '63a9f0ea7bb98050796b649e85481845'),
(3, 'Ben', '63a9f0ea7bb98050796b649e85481845'),
(4, 'Paul', '63a9f0ea7bb98050796b649e85481845'),
(5, 'Romain', '63a9f0ea7bb98050796b649e85481845'),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
