-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 08 2016 г., 01:04
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `classRegister`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `groupName` text NOT NULL,
  `studentName` text NOT NULL,
  `date` date NOT NULL,
  `attended` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attendance`
--

INSERT INTO `attendance` (`groupName`, `studentName`, `date`, `attended`) VALUES
('КНит-15-1', 'Рябичев Олег', '2016-12-07', '+'),
('КНит-15-1', 'Влодимиров Владимир', '2016-12-07', '-'),
('КНит-15-1', 'Петров Николай', '2016-12-07', '+'),
('КНит-15-1', 'Артемьева Ольга', '2016-12-07', '-'),
('КСит-13-5', 'Прокофьев Сергей', '2016-12-07', '+');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `password` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`password`, `name`) VALUES
('admin', 'admin'),
('КНит-15-1', 'КНит-15-1'),
('КНит-15-2', 'КНит-15-2'),
('ПИит-15-1', 'ПИит-15-1'),
('ПСит-15-1', 'ПСит-15-1'),
('САит-15-1', 'САит-15-1'),
('КАит-18-3', 'КАит-18-3'),
('КСит-13-5', 'КСит-13-5');

-- --------------------------------------------------------

--
-- Структура таблицы `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `groupName` text NOT NULL,
  `studentName` text NOT NULL,
  `marks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `marks`
--

INSERT INTO `marks` (`groupName`, `studentName`, `marks`) VALUES
('КНит-15-1', 'Андреев Андрей', '4 5 4'),
('КНит-15-1', 'Сидоров Андрей', '2 3 4'),
('КНит-15-1', 'Петров Пётр', '4 5 3 3'),
('КНит-15-2', 'Фёдоров Фёдор', '3'),
('КНит-15-1', 'Юрьев Юрий', '1'),
('КНит-15-1', 'Рябичев Олег', '4 4'),
('САит-15-1', 'Петрова Анастасия', '4'),
('САит-15-1', 'Антонов Всеволод', '3'),
('КНит-15-1', 'Яковлев Аристарх', '5'),
('КНит-15-1', 'Прокофьев Сергей', '4');

-- --------------------------------------------------------

--
-- Структура таблицы `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `groupName` text NOT NULL,
  `monday` text NOT NULL,
  `tuesday` text NOT NULL,
  `wednesday` text NOT NULL,
  `thursday` text NOT NULL,
  `friday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `schedule`
--

INSERT INTO `schedule` (`groupName`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
('КНит-15-1', '1. Something another', '4. Веб-программирование', '1. КГ\r\n2. Философия\r\n3. КГ', '1. КГ\r\n2. ВМ\r\n3. Веб-программирование\r\n4. ВМ', '1. ООП\r\n2. Физ-ра\r\n3.Философия'),
('Книт-15-2', '1. КГ\r\n2. ООП\r\n3. ООП', '4. Веб-программирование ', '3. Философия\r\n4. КГ', '2. Веб-программирование\r\n3. ВМ\r\n4. ВМ', '1. ООП\r\n2. Физ-ра\r\n3. Философия'),
('ПИит-15-1', '1. Физ-ра\r\n3. Англ.', '', '', '', ''),
('КСит-13-5', '1. Физика\r\n2. Высшая математика\r\n3. Физ-ра', '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD UNIQUE KEY `blabla` (`name`(100));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
