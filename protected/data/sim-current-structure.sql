-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 09 Kwi 2013, 14:29
-- Wersja serwera: 5.5.27
-- Wersja PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Baza danych: `sim`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `userid` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `bizrule` text COLLATE utf8_polish_ci,
  `data` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', 'administrator', NULL, NULL),
('unit_admin', 'test', NULL, NULL),
('unit_admin', 'testkolejny', NULL, NULL),
('viewer', 'pusty', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_polish_ci,
  `bizrule` text COLLATE utf8_polish_ci,
  `data` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `AuthItem`
--


INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, '', NULL, 'N;'),
('createCollectionPoint', 0, 'tworzenie punktu poboru', NULL, 'N;'),
('createCounter', 0, 'tworzenie licznika', NULL, 'N;'),
('createCounterReading', 0, 'tworzenie odczytu licznika', NULL, 'N;'),
('createInvoice', 0, 'tworzenie faktury', NULL, 'N;'),
('createInvoiceData', 0, 'tworzenie pozycji na fakturze', NULL, 'N;'),
('createMedium', 0, 'tworzenie medium', NULL, 'N;'),
('createObject', 0, 'tworzenie obiektu', NULL, 'N;'),
('createOtherConnection', 0, 'tworzenie innego przyłącza', NULL, 'N;'),
('createSupplier', 0, 'tworzenie dostawcy', NULL, 'N;'),
('createTariff', 0, 'tworzenie taryfy', NULL, 'N;'),
('createTariffComponent', 0, 'tworzenie składnika taryfy', NULL, 'N;'),
('createTariffComponentType', 0, 'tworzenie typu składnika taryfy', NULL, 'N;'),
('createTariffType', 0, 'tworzenie typu taryfy', NULL, 'N;'),
('createUnit', 0, 'tworzenie jednostki', NULL, 'N;'),
('createUser', 0, 'tworzenie użytkownika', NULL, 'N;'),
('deleteCollectionPoint', 0, 'usuwanie punktu poboru', NULL, 'N;'),
('deleteCounter', 0, 'usuwanie licznika', NULL, 'N;'),
('deleteCounterReading', 0, 'usuwanie odczytu licznika', NULL, 'N;'),
('deleteInvoice', 0, 'usuwanie faktury', NULL, 'N;'),
('deleteInvoiceData', 0, 'usuwanie pozycji z faktury', NULL, 'N;'),
('deleteMedium', 0, 'usuwanie medium', NULL, 'N;'),
('deleteObject', 0, 'usuwanie obiektu', NULL, 'N;'),
('deleteOtherConnection', 0, 'usuwanie innego przyłącza', NULL, 'N;'),
('deleteSupplier', 0, 'usuwanie dostawcy', NULL, 'N;'),
('deleteTariff', 0, 'usuwanie taryfy', NULL, 'N;'),
('deleteTariffComponent', 0, 'usuwanie składnika taryfy', NULL, 'N;'),
('deleteTariffComponentType', 0, 'usuwanie typu składnika taryfy', NULL, 'N;'),
('deleteTariffType', 0, 'usuwanie typu taryfy', NULL, 'N;'),
('deleteUnit', 0, 'usuwanie jednostki', NULL, 'N;'),
('deleteUser', 0, 'usuwanie użytkownika', NULL, 'N;'),
('dynamicTariffs', 0, 'dynamiczna aktualizacja taryf', NULL, NULL),
('manageOwnData', 0, 'dostęp do metod view, update oraz delete dla obiektów jednostki, do której należy użytkownik', 'return (int) Yii::app()->user->getState(''unit_id'') === (int) $params[''unit_id''];', NULL),
('readCollectionPoint', 0, 'odczytywanie punktu poboru', NULL, 'N;'),
('readCounter', 0, 'odczytywanie licznika', NULL, 'N;'),
('readCounterReading', 0, 'odczytywanie odczytu licznika', NULL, 'N;'),
('readInvoice', 0, 'odczytywanie faktury', NULL, 'N;'),
('readInvoiceData', 0, 'odczytywanie pozycji na fakturze', NULL, 'N;'),
('readMedium', 0, 'odczytywanie medium', NULL, 'N;'),
('readObject', 0, 'odczytywanie obiektu', NULL, 'N;'),
('readOtherConnection', 0, 'odczytywanie innego przyłącza', NULL, 'N;'),
('readSupplier', 0, 'odczytywanie dostawcy', NULL, 'N;'),
('readTariff', 0, 'odczytywanie taryfy', NULL, 'N;'),
('readTariffComponent', 0, 'odczytywanie składnika taryfy', NULL, 'N;'),
('readTariffComponentType', 0, 'odczytywanie typu składnika taryfy', NULL, 'N;'),
('readTariffType', 0, 'odczytywanie typu taryfy', NULL, 'N;'),
('readUnit', 0, 'odczytywanie jednostki', NULL, 'N;'),
('readUser', 0, 'odczytywanie użytkownika', NULL, 'N;'),
('unit_admin', 2, '', NULL, 'N;'),
('updateCollectionPoint', 0, 'aktualizowanie punktu poboru', NULL, 'N;'),
('updateCounter', 0, 'aktualizowanie licznika', NULL, 'N;'),
('updateCounterReading', 0, 'aktualizowanie odczytu licznika', NULL, 'N;'),
('updateInvoice', 0, 'aktualizowanie faktury', NULL, 'N;'),
('updateInvoiceData', 0, 'aktualizowanie pozycji na fakturze', NULL, 'N;'),
('updateMedium', 0, 'aktualizowanie medium', NULL, 'N;'),
('updateObject', 0, 'aktualizowanie obiektu', NULL, 'N;'),
('updateOtherConnection', 0, 'aktualizowanie innego przyłącza', NULL, 'N;'),
('updateSupplier', 0, 'aktualizowanie dostawcy', NULL, 'N;'),
('updateTariff', 0, 'aktualizowanie taryfy', NULL, 'N;'),
('updateTariffComponent', 0, 'aktualizowanie składnika taryfy', NULL, 'N;'),
('updateTariffComponentType', 0, 'aktualizowanie typu składnika taryfy', NULL, 'N;'),
('updateTariffType', 0, 'aktualizowanie typu taryfy', NULL, 'N;'),
('updateUnit', 0, 'aktualizowanie jednostki', NULL, 'N;'),
('updateUser', 0, 'aktualizowanie użytkownika', NULL, 'N;'),
('viewer', 2, '', NULL, 'N;');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `AuthItemChild`
--

INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES
('unit_admin', 'createCollectionPoint'),
('unit_admin', 'createCounter'),
('unit_admin', 'createCounterReading'),
('unit_admin', 'createInvoice'),
('unit_admin', 'createInvoiceData'),
('admin', 'createMedium'),
('admin', 'createObject'),
('admin', 'createOtherConnection'),
('admin', 'createSupplier'),
('admin', 'createTariff'),
('admin', 'createTariffComponent'),
('admin', 'createTariffComponentType'),
('admin', 'createTariffType'),
('admin', 'createUnit'),
('admin', 'createUser'),
('admin', 'deleteCollectionPoint'),
('admin', 'deleteCounter'),
('unit_admin', 'deleteCounterReading'),
('unit_admin', 'deleteInvoice'),
('unit_admin', 'deleteInvoiceData'),
('admin', 'deleteMedium'),
('admin', 'deleteObject'),
('admin', 'deleteOtherConnection'),
('admin', 'deleteSupplier'),
('admin', 'deleteTariff'),
('admin', 'deleteTariffComponent'),
('admin', 'deleteTariffComponentType'),
('admin', 'deleteTariffType'),
('admin', 'deleteUnit'),
('admin', 'deleteUser'),
('unit_admin', 'dynamicTariffs'),
('unit_admin', 'manageOwnData'),
('viewer', 'readCollectionPoint'),
('viewer', 'readCounter'),
('viewer', 'readCounterReading'),
('viewer', 'readInvoice'),
('viewer', 'readInvoiceData'),
('viewer', 'readMedium'),
('viewer', 'readObject'),
('viewer', 'readOtherConnection'),
('viewer', 'readSupplier'),
('viewer', 'readTariff'),
('viewer', 'readTariffComponent'),
('viewer', 'readTariffComponentType'),
('viewer', 'readTariffType'),
('viewer', 'readUnit'),
('admin', 'unit_admin'),
('unit_admin', 'updateCollectionPoint'),
('unit_admin', 'updateCounter'),
('updateOwnCounter', 'updateCounter'),
('unit_admin', 'updateCounterReading'),
('unit_admin', 'updateInvoice'),
('unit_admin', 'updateInvoiceData'),
('admin', 'updateMedium'),
('admin', 'updateObject'),
('admin', 'updateOtherConnection'),
('admin', 'updateSupplier'),
('admin', 'updateTariff'),
('admin', 'updateTariffComponent'),
('admin', 'updateTariffComponentType'),
('admin', 'updateTariffType'),
('admin', 'updateUnit'),
('admin', 'updateUser'),
('admin', 'viewer'),
('unit_admin', 'viewer');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
  KEY `medium_id` (`medium_id`),
  KEY `collection_point_id` (`collection_point_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `file_src` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `note` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`id`),
  KEY `tariff_id` (`tariff_id`),
  KEY `object_id` (`object_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Struktura tabeli dla tabeli `mediums`
--

CREATE TABLE IF NOT EXISTS `mediums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Struktura tabeli dla tabeli `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `plot_number` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `energy_certificate` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `cubage` decimal(10,2) DEFAULT NULL,
  `additional_information` text COLLATE utf8_polish_ci,
  PRIMARY KEY (`id`),
  KEY `unit_id` (`unit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Struktura tabeli dla tabeli `tariffs_components_types`
--

CREATE TABLE IF NOT EXISTS `tariffs_components_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Struktura tabeli dla tabeli `tariffs_types`
--

CREATE TABLE IF NOT EXISTS `tariffs_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Struktura tabeli dla tabeli `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

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
  ADD CONSTRAINT `collection_points_ibfk_2` FOREIGN KEY (`object_id`) REFERENCES `objects` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `counters`
--
ALTER TABLE `counters`
  ADD CONSTRAINT `counters_ibfk_2` FOREIGN KEY (`medium_id`) REFERENCES `mediums` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `counters_ibfk_3` FOREIGN KEY (`collection_point_id`) REFERENCES `collection_points` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `counters_readings`
--
ALTER TABLE `counters_readings`
  ADD CONSTRAINT `counters_readings_ibfk_2` FOREIGN KEY (`counter_id`) REFERENCES `counters` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `invoices_data_ibfk_2` FOREIGN KEY (`component_id`) REFERENCES `tariffs_components` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `invoices_data_ibfk_3` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;

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
