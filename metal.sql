-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2016 at 05:51 AM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `metal`
--

-- --------------------------------------------------------

--
-- Table structure for table `chemical_prop`
--

CREATE TABLE IF NOT EXISTS `chemical_prop` (
`id` int(10) NOT NULL,
  `carbon` varchar(200) NOT NULL,
  `chromium` varchar(200) NOT NULL,
  `manganese` varchar(200) NOT NULL,
  `molybdenum` varchar(200) NOT NULL,
  `phosphorus` varchar(200) NOT NULL,
  `sulphur` varchar(200) NOT NULL,
  `silicon` varchar(200) NOT NULL,
  `vanadium` varchar(200) NOT NULL,
  `material_desc_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemical_prop`
--

INSERT INTO `chemical_prop` (`id`, `carbon`, `chromium`, `manganese`, `molybdenum`, `phosphorus`, `sulphur`, `silicon`, `vanadium`, `material_desc_id`) VALUES
(1, '1.32', '0.56', '9.67', '2.32', '1.12', '0.01', '0.32', '2.10', 1),
(3, 'fghjkl', 'vbvbn', 'nmnmm', 'tyrre', 'oop', 'tre', 'fgh', 'lkj', 2),
(4, 'fghjkl', 'fdxcgh', 'dxfcgvhbj', 'ytuiop', 'l,,m', 'lkknk', 'jjb', 'eewrt', 3);

-- --------------------------------------------------------

--
-- Table structure for table `class_group`
--

CREATE TABLE IF NOT EXISTS `class_group` (
`id` int(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `standard_name_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_group`
--

INSERT INTO `class_group` (`id`, `description`, `standard_name_id`) VALUES
(1, 'ALLOY SPECIAL STRUCTURAL STEELS', 1),
(2, 'ALLOY ANTI-CORROSIVE SPECIAL STEELS', 2),
(3, 'dtdfyugihj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `general_prop`
--

CREATE TABLE IF NOT EXISTS `general_prop` (
`id` int(10) NOT NULL,
  `equivalence` varchar(200) DEFAULT NULL,
  `country` varchar(200) NOT NULL,
  `group_of_steel` varchar(200) NOT NULL,
  `application` varchar(200) NOT NULL,
  `material_desc_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_prop`
--

INSERT INTO `general_prop` (`id`, `equivalence`, `country`, `group_of_steel`, `application`, `material_desc_id`) VALUES
(1, '', 'GERMANY', 'ALLOY SPECIAL WATER RESISTANCE STEEL', 'COLLECTORS,BUILDERS, AND SUPERHEATER TUBES UPTO 530 C', 2),
(2, '$500', 'NIGERIA', 'ALLOY STRUCTURAL CORROSIVE STEEL', 'COLLECTORS,BUILDERS, AND SUPERHEATER TUBES UPTO 530 C', 1),
(5, 'dfgchvjkkhf', 'fdgh', 'rtfyghj', 'rtyjguh', 4);

-- --------------------------------------------------------

--
-- Table structure for table `heat_treatment_prop`
--

CREATE TABLE IF NOT EXISTS `heat_treatment_prop` (
`id` int(10) NOT NULL,
  `hot_working_temp` varchar(200) NOT NULL,
  `soft_annealing_temp` varchar(200) NOT NULL,
  `duration_time` varchar(200) NOT NULL,
  `hardening_temp` varchar(200) NOT NULL,
  `media` varchar(200) NOT NULL,
  `tempering_temp` varchar(200) NOT NULL,
  `notes_about_welding` varchar(200) NOT NULL,
  `material_desc_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heat_treatment_prop`
--

INSERT INTO `heat_treatment_prop` (`id`, `hot_working_temp`, `soft_annealing_temp`, `duration_time`, `hardening_temp`, `media`, `tempering_temp`, `notes_about_welding`, `material_desc_id`) VALUES
(1, '443-431', '435-521', '12-14', '555-323', 'OIL,AIR', '466-693', 'preheating to 243in welding annealing temperature= 700 C after welding', 1),
(2, '121-431', '321-521', '15-30', '123-443', 'OIL,AIR', '466-693', 'preheating to 243in welding annealing temperature= 765 C after welding', 2),
(4, 'wert', 'poiuy', 'yhgj', 'kmjhvgcv', 'dfgh', 'oxcycgv', 'esrct', 4);

-- --------------------------------------------------------

--
-- Table structure for table `materialdesc_list`
--

CREATE TABLE IF NOT EXISTS `materialdesc_list` (
`id` int(10) NOT NULL,
  `class_group_id` int(10) NOT NULL,
  `designation_name` varchar(200) NOT NULL,
  `number_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materialdesc_list`
--

INSERT INTO `materialdesc_list` (`id`, `class_group_id`, `designation_name`, `number_name`) VALUES
(1, 1, 'DIN-10CrMn06', '1.7765'),
(2, 2, 'DIN-14MoV633', '1.6544'),
(4, 2, 'dsfghbj', 'eweasd');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
`id` int(10) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `description`) VALUES
(1, 'Aluminium'),
(2, 'steel');

-- --------------------------------------------------------

--
-- Table structure for table `mechanical_prop`
--

CREATE TABLE IF NOT EXISTS `mechanical_prop` (
`id` int(10) NOT NULL,
  `condition` varchar(200) NOT NULL,
  `yield_strength` varchar(200) NOT NULL,
  `endurance_limit` varchar(200) NOT NULL,
  `tensile_strength` varchar(200) NOT NULL,
  `fracture_toughness` varchar(200) NOT NULL,
  `youngs_modulus` varchar(200) NOT NULL,
  `poisons_ratio` varchar(200) NOT NULL,
  `hardness` varchar(200) NOT NULL,
  `shear_modulus` varchar(200) NOT NULL,
  `elongation` varchar(200) NOT NULL,
  `impact_value` varchar(200) DEFAULT NULL,
  `reduction_of_area` varchar(200) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `material_desc_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanical_prop`
--

INSERT INTO `mechanical_prop` (`id`, `condition`, `yield_strength`, `endurance_limit`, `tensile_strength`, `fracture_toughness`, `youngs_modulus`, `poisons_ratio`, `hardness`, `shear_modulus`, `elongation`, `impact_value`, `reduction_of_area`, `remark`, `material_desc_id`) VALUES
(1, 'ANNEALED', '255.677', '5688', '54343', '5667', '6654', '0.8765', '4565', '7897', '45456', '', '', '', 2),
(2, 'ANNEALED', '54.45', '789', '998', '098', '445.9', '0.89', '6545', '33', '767878', '7889', '', 'not to be used for high quality job with high tensile strength', 1),
(4, 'tyi', 'iiiio', 'poo', 'kj', 'hhgg', 'gggf', 'fffd', 'ffghj', 'jjhgf', 'ghgfd', 'gffg', 'gffd', 'gffd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `physical_prop`
--

CREATE TABLE IF NOT EXISTS `physical_prop` (
`id` int(10) NOT NULL,
  `density` varchar(200) NOT NULL,
  `specific_elect_resist` varchar(200) NOT NULL,
  `magnetizable` varchar(200) NOT NULL,
  `weldable` varchar(200) NOT NULL,
  `toughness_degree` varchar(200) NOT NULL,
  `corrosion_resistance` varchar(200) NOT NULL,
  `cutting_property` varchar(200) NOT NULL,
  `material_desc_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical_prop`
--

INSERT INTO `physical_prop` (`id`, `density`, `specific_elect_resist`, `magnetizable`, `weldable`, `toughness_degree`, `corrosion_resistance`, `cutting_property`, `material_desc_id`) VALUES
(1, '7.897', '0.8977', 'NO', 'YES', 'GOOD', 'POOR', 'POOR', 2),
(2, '967.0', '34.11', 'YES', 'YES', 'EXCELLENT', 'GOOD', 'GOOD', 1),
(3, 'fdghjkl', 'srdtf', 'yfug9oh', 'cgvhjbkmn', 'nbbvc', 'drtyyui', 'ooiuyt', 4),
(4, 'qwe', 'hjkl', 'nbvc', 'dfgh', 'oiu', 'ert', 'dfg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `standard_name`
--

CREATE TABLE IF NOT EXISTS `standard_name` (
`id` int(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `material_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard_name`
--

INSERT INTO `standard_name` (`id`, `description`, `material_id`) VALUES
(1, 'DN-(GER)', 1),
(2, 'DN-(USA)', 2),
(4, 'fcgvhkbj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thermal_prop`
--

CREATE TABLE IF NOT EXISTS `thermal_prop` (
`id` int(10) NOT NULL,
  `max_service_temp` varchar(200) NOT NULL,
  `min_service_temp` varchar(200) NOT NULL,
  `meltingpoint` varchar(200) NOT NULL,
  `specific_heat` varchar(200) NOT NULL,
  `therm_cond` varchar(200) NOT NULL,
  `therm_exp_coeff` varchar(200) NOT NULL,
  `material_desc_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thermal_prop`
--

INSERT INTO `thermal_prop` (`id`, `max_service_temp`, `min_service_temp`, `meltingpoint`, `specific_heat`, `therm_cond`, `therm_exp_coeff`, `material_desc_id`) VALUES
(1, '567-600', '242-253', '33525-55221', '463-745', '45-54', '12.2-22.1', 1),
(2, '567-620', '323-422', '63656-265734', '1454-6533', '70-80', '23.1-25.3', 2),
(4, 'ghghjkl', 'kljhgfdc', 'vbnm,', 'tyuio', 'oiuyt', 'asdfg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'maxx', 'madakifatsen@hotmail.com', '8ffc4674e44d1dffafe02b58603a9621'),
(4, 'Aaron', 'aires@gmail.com', '2ee17599597d02dbf88b829798db0518'),
(5, 'dfghkj', 'mada@gmail.ng', '9990775155c3518a0d7917f7780b24aa'),
(6, 'sly Dagwott', 'sly@gmail.com', '58b21a134b22a29d4c7f0925d5974fce'),
(7, 'koomvel emoor', 'emoor@yahoo.com', 'df95fb6d3f73ef7791eb1197bb1d9984'),
(8, 'Dung Sylvester', 'sylvesterdung2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Moses Koomvel', 'moses@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chemical_prop`
--
ALTER TABLE `chemical_prop`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `class_group`
--
ALTER TABLE `class_group`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_prop`
--
ALTER TABLE `general_prop`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heat_treatment_prop`
--
ALTER TABLE `heat_treatment_prop`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materialdesc_list`
--
ALTER TABLE `materialdesc_list`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanical_prop`
--
ALTER TABLE `mechanical_prop`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physical_prop`
--
ALTER TABLE `physical_prop`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_name`
--
ALTER TABLE `standard_name`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thermal_prop`
--
ALTER TABLE `thermal_prop`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chemical_prop`
--
ALTER TABLE `chemical_prop`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `class_group`
--
ALTER TABLE `class_group`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `general_prop`
--
ALTER TABLE `general_prop`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `heat_treatment_prop`
--
ALTER TABLE `heat_treatment_prop`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materialdesc_list`
--
ALTER TABLE `materialdesc_list`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mechanical_prop`
--
ALTER TABLE `mechanical_prop`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `physical_prop`
--
ALTER TABLE `physical_prop`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `standard_name`
--
ALTER TABLE `standard_name`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `thermal_prop`
--
ALTER TABLE `thermal_prop`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
