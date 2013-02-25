-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 03 Lut 2013, 23:24
-- Wersja serwera: 5.5.27
-- Wersja PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Baza danych: `sim-dev`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `userid` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `bizrule` text COLLATE utf8_polish_ci,
  `data` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_polish_ci,
  `bizrule` text COLLATE utf8_polish_ci,
  `data` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `collection_points`
--

CREATE TABLE IF NOT EXISTS `collection_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `symbol` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `multiplicand` decimal(10,4) DEFAULT NULL,
  `create_date` date NOT NULL,
  `create_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `object_id` (`object_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `counters`
--

CREATE TABLE IF NOT EXISTS `counters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `collection_point_id` int(11) NOT NULL,
  `medium_id` int(11) NOT NULL,
  `symbol` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `unit` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `initial_state` decimal(10,4) DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `archival` tinyint(1) DEFAULT NULL,
  `create_date` date NOT NULL,
  `create_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `collection_point_id` (`collection_point_id`),
  KEY `medium_id` (`medium_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `counters_readings`
--

CREATE TABLE IF NOT EXISTS `counters_readings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `counter_id` int(11) NOT NULL,
  `reading_date` date NOT NULL,
  `counter_state` decimal(10,4) NOT NULL,
  `use` decimal(10,4) NOT NULL,
  `create_date` date NOT NULL,
  `create_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `counter_id` (`counter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tariff_id` int(11) NOT NULL,
  `object_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `period_since` date DEFAULT NULL,
  `period_to` date DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `create_date` date NOT NULL,
  `create_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tariff_id` (`tariff_id`),
  KEY `object_id` (`object_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `invoices_data`
--

CREATE TABLE IF NOT EXISTS `invoices_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `value` decimal(10,4) DEFAULT NULL,
  `create_date` date NOT NULL,
  `create_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_user` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `component_id` (`component_id`),
  KEY `invoice_id` (`invoice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mediums`
--

CREATE TABLE IF NOT EXISTS `mediums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `unit_id` (`unit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `other_connections`
--

CREATE TABLE IF NOT EXISTS `other_connections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medium_id` int(11) NOT NULL,
  `unit` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `use` decimal(10,4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `medium_id` (`medium_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medium_id` int(11) DEFAULT NULL,
  `name` varchar(150) COLLATE utf8_polish_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `medium_id` (`medium_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tariffs`
--

CREATE TABLE IF NOT EXISTS `tariffs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `mandatory_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tariffs_components`
--

CREATE TABLE IF NOT EXISTS `tariffs_components` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tariff_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `medium_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `unit` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `mandatory_date` date DEFAULT NULL,
  `price_per_unit` decimal(10,4) DEFAULT NULL,
  `vat` int(11) DEFAULT NULL,
  `multiplier` decimal(10,4) DEFAULT NULL,
  `archival` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tariff_id` (`tariff_id`),
  KEY `type_id` (`type_id`),
  KEY `medium_id` (`medium_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tariffs_components_types`
--

CREATE TABLE IF NOT EXISTS `tariffs_components_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tariffs_types`
--

CREATE TABLE IF NOT EXISTS `tariffs_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `unit_id` (`unit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=8 ;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `collection_points`
--
ALTER TABLE `collection_points`
  ADD CONSTRAINT `collection_points_ibfk_1` FOREIGN KEY (`object_id`) REFERENCES `objects` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `counters`
--
ALTER TABLE `counters`
  ADD CONSTRAINT `counters_ibfk_1` FOREIGN KEY (`collection_point_id`) REFERENCES `collection_points` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `counters_ibfk_2` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `counters_readings`
--
ALTER TABLE `counters_readings`
  ADD CONSTRAINT `counters_readings_ibfk_1` FOREIGN KEY (`counter_id`) REFERENCES `counters` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`tariff_id`) REFERENCES `tariffs` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`object_id`) REFERENCES `objects` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `invoices_ibfk_3` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `invoices_data`
--
ALTER TABLE `invoices_data`
  ADD CONSTRAINT `invoices_data_ibfk_3` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_data_ibfk_2` FOREIGN KEY (`component_id`) REFERENCES `tariffs_components` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `objects`
--
ALTER TABLE `objects`
  ADD CONSTRAINT `objects_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `other_connections`
--
ALTER TABLE `other_connections`
  ADD CONSTRAINT `other_connections_ibfk_1` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_ibfk_1` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `tariffs`
--
ALTER TABLE `tariffs`
  ADD CONSTRAINT `tariffs_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `tariffs_types` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `tariffs_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `tariffs_components`
--
ALTER TABLE `tariffs_components`
  ADD CONSTRAINT `tariffs_components_ibfk_1` FOREIGN KEY (`tariff_id`) REFERENCES `tariffs` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `tariffs_components_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `tariffs_components_types` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `tariffs_components_ibfk_3` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE NO ACTION;
