-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 avr. 2021 à 18:29
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sh_invbib`
--

-- --------------------------------------------------------

--
-- Structure de la table `books_supports_rel`
--

CREATE TABLE `books_supports_rel` (
  `idbooks` int(11) NOT NULL,
  `idsupports` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `books_supports_rel`
--

INSERT INTO `books_supports_rel` (`idbooks`, `idsupports`) VALUES
(4, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 10),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(15, 16),
(16, 1),
(17, 1),
(18, 1),
(19, 10),
(20, 1),
(21, 1),
(22, 1),
(22, 10),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 10),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(49, 10),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(79, 16),
(80, 1),
(80, 10),
(81, 1),
(82, 1),
(83, 1),
(84, 10),
(85, 1),
(86, 1),
(87, 1),
(87, 16),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(91, 10),
(92, 1),
(92, 10),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 10),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(109, 10),
(110, 1),
(111, 1),
(111, 16),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(131, 16),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(137, 16),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(164, 1),
(165, 10),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(177, 1),
(178, 1),
(178, 16),
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 1),
(184, 1),
(185, 1),
(186, 1),
(187, 1),
(188, 1),
(189, 1),
(190, 1),
(191, 1),
(192, 1),
(193, 1),
(194, 1),
(195, 1),
(196, 1),
(197, 1),
(198, 1),
(199, 1),
(200, 1),
(201, 1),
(202, 1),
(203, 1),
(204, 1),
(205, 1),
(206, 1),
(207, 1),
(208, 1),
(209, 1),
(210, 1),
(211, 1),
(212, 1),
(213, 1),
(214, 1),
(215, 1),
(216, 1),
(217, 1),
(218, 1),
(219, 1),
(221, 1),
(222, 1),
(223, 1),
(224, 1),
(225, 1),
(226, 1),
(227, 1),
(228, 1),
(229, 1),
(230, 1),
(231, 1),
(232, 1),
(233, 1),
(235, 1),
(236, 1),
(237, 1),
(238, 1),
(239, 1),
(240, 1),
(241, 1),
(242, 1),
(243, 1),
(243, 10),
(244, 1),
(245, 1),
(246, 1),
(247, 1),
(248, 1),
(248, 10),
(249, 1),
(250, 1),
(251, 1),
(252, 1),
(253, 1),
(254, 1),
(255, 1),
(256, 1),
(257, 1),
(258, 1),
(259, 1),
(260, 1),
(261, 1),
(262, 1),
(263, 1),
(264, 1),
(265, 1),
(266, 1),
(267, 1),
(268, 1),
(269, 1),
(270, 1),
(271, 1),
(272, 1),
(273, 1),
(274, 1),
(275, 1),
(276, 1),
(277, 1),
(278, 1),
(279, 1),
(280, 1),
(281, 1),
(284, 1),
(285, 1),
(286, 1),
(288, 1),
(290, 1),
(291, 1),
(291, 16),
(292, 1),
(292, 8),
(293, 1),
(293, 8),
(294, 1),
(297, 1),
(297, 8),
(298, 1),
(299, 1),
(300, 1),
(300, 8),
(301, 1),
(302, 1),
(303, 1),
(304, 1),
(305, 1),
(306, 1),
(306, 8),
(308, 1),
(308, 8),
(309, 1),
(311, 1),
(312, 1),
(313, 1),
(316, 1),
(317, 1),
(318, 1),
(318, 8),
(319, 1),
(321, 1),
(323, 1),
(324, 1),
(325, 1),
(326, 1),
(327, 1),
(328, 1),
(328, 8),
(330, 1),
(331, 1),
(333, 1),
(334, 1),
(335, 1),
(336, 1),
(337, 1),
(337, 16),
(338, 1),
(338, 16),
(341, 1),
(344, 1),
(345, 1),
(346, 1),
(347, 1),
(349, 1),
(350, 1),
(352, 1),
(353, 1),
(354, 1),
(356, 1),
(357, 1),
(358, 1),
(358, 10),
(359, 1),
(360, 1),
(361, 1),
(361, 10),
(361, 8),
(362, 1),
(362, 8),
(363, 1),
(364, 1),
(365, 1),
(366, 1),
(367, 1),
(369, 1),
(370, 1),
(371, 1),
(371, 10),
(374, 1),
(375, 1),
(376, 1),
(377, 1),
(377, 10),
(378, 1),
(380, 1),
(380, 8),
(381, 1),
(382, 1),
(383, 1),
(384, 1),
(385, 1),
(386, 1),
(387, 1),
(388, 1),
(389, 1),
(390, 1),
(391, 1),
(392, 1),
(393, 1),
(394, 1),
(396, 1),
(397, 1),
(398, 1),
(399, 1),
(400, 1),
(401, 1),
(402, 1),
(403, 1),
(404, 1),
(408, 1),
(409, 1),
(410, 1),
(411, 1),
(412, 1),
(413, 1),
(414, 1),
(415, 1),
(416, 1),
(417, 1),
(418, 1),
(419, 1),
(420, 1),
(421, 1),
(422, 1),
(423, 1),
(424, 1),
(425, 1),
(426, 1),
(427, 1),
(429, 1),
(430, 1),
(431, 1),
(433, 1),
(434, 1),
(435, 1),
(436, 1),
(438, 1),
(439, 1),
(440, 1),
(441, 1),
(442, 1),
(443, 1),
(444, 1),
(445, 1),
(446, 1),
(447, 1),
(448, 1),
(449, 1),
(451, 1),
(452, 1),
(453, 1),
(454, 1),
(455, 1),
(456, 1),
(457, 1),
(458, 1),
(459, 1),
(460, 1),
(461, 1),
(462, 1),
(463, 1),
(464, 1),
(465, 1),
(467, 1),
(468, 1),
(470, 1),
(471, 1),
(472, 1),
(473, 1),
(474, 1),
(475, 1),
(476, 1),
(477, 1),
(478, 1),
(479, 1),
(480, 1),
(481, 1),
(482, 1),
(483, 1),
(484, 1),
(485, 1),
(486, 1),
(487, 1),
(488, 1),
(489, 1),
(490, 1),
(491, 1),
(492, 1),
(493, 1),
(494, 1),
(495, 1),
(496, 1),
(497, 1),
(498, 1),
(499, 1),
(500, 1),
(501, 1),
(502, 1),
(503, 1),
(504, 1),
(505, 1),
(506, 1),
(507, 1),
(508, 1),
(509, 1),
(510, 1),
(511, 1),
(512, 1),
(513, 1),
(514, 1),
(514, 10),
(514, 16),
(515, 1),
(516, 1),
(517, 1),
(518, 1),
(519, 1),
(520, 1),
(521, 1),
(522, 1),
(523, 1),
(524, 1),
(526, 1),
(527, 1),
(528, 1),
(529, 1),
(530, 1),
(531, 1),
(532, 1),
(533, 1),
(534, 1),
(535, 1),
(536, 1),
(537, 1),
(539, 1),
(540, 1),
(541, 1),
(542, 1),
(543, 1),
(544, 1),
(545, 1),
(546, 1),
(547, 1),
(548, 1),
(549, 1),
(550, 1),
(551, 1),
(552, 1),
(553, 1),
(555, 1),
(557, 1),
(559, 1),
(560, 1),
(561, 1),
(562, 1),
(563, 1),
(564, 1),
(565, 1),
(566, 1),
(567, 1),
(568, 1),
(569, 1),
(570, 1),
(571, 1),
(572, 10),
(572, 16),
(573, 1),
(574, 1),
(576, 10),
(576, 16),
(577, 1),
(578, 1),
(579, 1),
(581, 1),
(582, 1),
(583, 1),
(583, 10),
(584, 1),
(585, 1),
(585, 10),
(586, 1),
(587, 1),
(587, 10),
(588, 1),
(589, 1),
(590, 1),
(591, 1),
(592, 1),
(593, 1),
(593, 10),
(594, 1),
(595, 1),
(596, 1),
(597, 1),
(597, 10),
(598, 1),
(599, 1),
(600, 1),
(601, 1),
(602, 1),
(603, 1),
(604, 1),
(604, 10),
(605, 1),
(605, 10),
(605, 16),
(606, 1),
(607, 1),
(608, 1),
(610, 1),
(611, 1),
(612, 1),
(613, 1),
(614, 1),
(615, 1),
(615, 16),
(616, 1),
(617, 1),
(617, 10),
(618, 1),
(619, 1),
(620, 10),
(621, 1),
(621, 10),
(623, 1),
(624, 1),
(625, 1),
(626, 1),
(627, 1),
(628, 1),
(629, 1),
(630, 1),
(631, 1),
(633, 1),
(634, 1),
(635, 1),
(636, 1),
(637, 1),
(638, 1),
(639, 1),
(640, 1),
(640, 10),
(641, 1),
(642, 1),
(643, 1),
(644, 1),
(645, 1),
(645, 10),
(646, 1),
(647, 1),
(648, 1),
(648, 10),
(649, 1),
(650, 1),
(650, 16),
(651, 1),
(651, 16),
(652, 1),
(653, 1),
(654, 1),
(655, 1),
(656, 1),
(657, 1),
(659, 1),
(660, 1),
(661, 1),
(662, 1),
(663, 10),
(665, 1),
(665, 10),
(666, 1),
(667, 1),
(668, 1),
(668, 10),
(670, 1),
(671, 1),
(671, 10),
(673, 1),
(674, 1),
(675, 1),
(675, 10),
(676, 1),
(677, 1),
(678, 1),
(679, 1),
(680, 1),
(681, 1),
(682, 1),
(683, 1),
(684, 1),
(684, 16),
(689, 1),
(691, 1),
(692, 1),
(694, 1),
(695, 1),
(696, 1),
(698, 1),
(699, 1),
(700, 1),
(701, 1),
(702, 1),
(703, 1),
(704, 1),
(705, 1),
(706, 1),
(707, 1),
(708, 1),
(709, 1),
(710, 1),
(711, 1),
(711, 10),
(712, 1),
(713, 1),
(714, 1),
(715, 1),
(716, 1),
(717, 1),
(718, 1),
(719, 1),
(720, 1),
(721, 1),
(721, 10),
(724, 1),
(725, 1),
(727, 1),
(730, 1),
(731, 1),
(732, 1),
(733, 1),
(734, 1),
(735, 1),
(736, 1),
(737, 1),
(738, 1),
(739, 1),
(739, 10),
(740, 1),
(741, 1),
(742, 1),
(743, 1),
(744, 1),
(745, 1),
(745, 10),
(746, 1),
(746, 16),
(747, 1),
(748, 1),
(749, 1),
(750, 1),
(751, 1),
(752, 1),
(753, 1),
(754, 1),
(755, 1),
(755, 10),
(756, 1),
(756, 16),
(757, 1),
(758, 1),
(760, 1),
(760, 10),
(761, 1),
(762, 1),
(762, 10),
(763, 1),
(763, 16),
(764, 1),
(764, 16),
(765, 1),
(766, 1),
(766, 16),
(767, 1),
(768, 1),
(769, 1),
(770, 1),
(771, 1),
(772, 1),
(773, 1),
(774, 1),
(774, 10),
(775, 1),
(776, 1),
(776, 16),
(777, 10),
(778, 1),
(779, 1),
(779, 10),
(780, 1),
(781, 1),
(782, 1),
(783, 1),
(784, 1),
(785, 1),
(786, 1),
(787, 1),
(788, 1),
(789, 1),
(789, 16),
(790, 1),
(791, 1),
(792, 1),
(793, 10),
(795, 1),
(796, 1),
(797, 1),
(798, 1),
(799, 1),
(800, 1),
(801, 1),
(802, 1),
(804, 1),
(805, 1),
(806, 1),
(807, 1),
(808, 1),
(809, 1),
(809, 10),
(810, 1),
(811, 1),
(812, 1),
(813, 1),
(814, 1),
(815, 1),
(816, 1),
(817, 1),
(818, 1),
(821, 1),
(823, 1),
(824, 1),
(825, 1),
(826, 1),
(827, 1),
(828, 1),
(829, 1),
(830, 1),
(831, 1),
(832, 1),
(833, 1),
(836, 1),
(837, 1),
(839, 1),
(840, 1),
(841, 1),
(841, 10),
(842, 1),
(843, 1),
(844, 1),
(845, 1),
(846, 1),
(847, 1),
(848, 1),
(849, 1),
(850, 1),
(851, 1),
(852, 10),
(853, 1),
(854, 1),
(855, 1),
(856, 1),
(856, 8),
(857, 1),
(858, 1),
(859, 1),
(860, 1),
(861, 1),
(862, 1),
(862, 10),
(863, 1),
(864, 10),
(865, 1),
(869, 1),
(871, 1),
(872, 8),
(873, 1),
(875, 1),
(875, 8),
(876, 1),
(878, 1),
(878, 10),
(879, 1),
(880, 1),
(881, 1),
(882, 1),
(883, 1),
(883, 8),
(884, 1),
(885, 1),
(886, 1),
(887, 1),
(888, 1),
(890, 1),
(891, 1),
(892, 1),
(893, 1),
(894, 1),
(895, 1),
(896, 1),
(897, 1),
(898, 1),
(899, 1),
(900, 1),
(901, 1),
(902, 1),
(902, 10),
(903, 1),
(904, 1),
(905, 1),
(906, 1),
(907, 1),
(908, 1),
(909, 1),
(910, 1),
(911, 1),
(912, 1),
(913, 1),
(914, 1),
(915, 1),
(916, 1),
(917, 1),
(918, 1),
(918, 8),
(919, 1),
(919, 8),
(920, 1),
(920, 10),
(921, 1),
(922, 1),
(923, 1),
(924, 1),
(925, 1),
(926, 1),
(927, 1),
(928, 1),
(928, 10),
(929, 1),
(930, 1),
(931, 1),
(932, 1),
(933, 1),
(934, 1),
(935, 1),
(936, 1),
(937, 1),
(938, 1),
(938, 10),
(939, 1),
(940, 1),
(941, 1),
(942, 1),
(943, 1),
(944, 1),
(945, 1),
(946, 1),
(947, 1),
(948, 1),
(949, 1),
(950, 1),
(951, 1),
(952, 1),
(953, 1),
(953, 10),
(954, 1),
(955, 1),
(956, 1),
(957, 1),
(958, 1),
(959, 1),
(960, 1),
(961, 1),
(962, 1),
(963, 1),
(964, 1),
(965, 1),
(966, 1),
(967, 1),
(968, 1),
(969, 1),
(969, 10),
(970, 1),
(971, 1),
(972, 1),
(973, 1),
(974, 1),
(975, 1),
(976, 1),
(977, 1),
(978, 1),
(979, 1),
(980, 1),
(980, 10),
(981, 1),
(982, 1),
(983, 1),
(984, 1),
(985, 1),
(987, 1),
(988, 1),
(989, 1),
(990, 1),
(991, 10),
(991, 8),
(992, 1),
(993, 1),
(994, 1),
(996, 1),
(997, 1),
(997, 10),
(998, 1),
(998, 10),
(999, 1),
(1000, 1),
(1001, 1),
(1002, 1),
(1003, 1),
(1004, 1),
(1005, 1),
(1006, 1),
(1007, 1),
(1008, 1),
(1008, 10),
(1008, 8),
(1011, 10),
(1012, 1),
(1012, 10),
(1013, 1),
(1014, 1),
(1015, 1),
(1016, 1),
(1017, 1),
(1018, 1),
(1018, 10),
(1019, 1),
(1020, 1),
(1021, 1),
(1022, 1),
(1023, 1),
(1024, 1),
(1025, 1),
(1026, 1),
(1027, 1),
(1028, 1),
(1029, 1),
(1030, 1),
(1031, 1),
(1033, 1),
(1034, 1),
(1036, 1),
(1037, 1),
(1038, 1),
(1039, 10),
(1040, 1),
(1041, 10),
(1042, 1),
(1043, 1),
(1043, 10),
(1044, 1),
(1045, 1),
(1047, 1),
(1048, 1),
(1057, 1),
(1058, 1),
(1059, 1),
(1060, 1),
(1060, 10),
(1061, 1),
(1061, 8),
(1062, 1),
(1062, 8),
(1063, 1),
(1063, 8),
(1064, 1),
(1064, 8),
(1068, 1),
(1069, 1),
(1069, 8),
(1070, 1),
(1071, 1),
(1071, 10),
(1072, 1),
(1074, 1),
(1075, 1),
(1076, 1),
(1077, 1),
(1078, 1),
(1079, 1),
(1079, 8),
(1080, 1),
(1081, 1),
(1083, 1),
(1084, 1),
(1085, 1),
(1086, 1),
(1087, 1),
(1088, 1),
(1090, 1),
(1091, 1),
(1091, 10),
(1092, 1),
(1093, 1),
(1094, 1),
(1095, 1),
(1096, 1),
(1097, 1),
(1097, 10),
(1098, 1),
(1098, 10),
(1099, 1),
(1099, 8),
(1100, 1),
(1101, 1),
(1101, 10),
(1102, 1),
(1103, 1),
(1104, 10),
(1105, 1),
(1106, 1),
(1107, 1),
(1108, 1),
(1110, 1),
(1111, 1),
(1112, 1),
(1113, 1),
(1114, 1),
(1115, 1),
(1116, 1),
(1117, 1),
(1118, 1),
(1118, 10),
(1119, 1),
(1120, 1),
(1121, 1),
(1122, 1),
(1123, 1),
(1124, 1),
(1125, 1),
(1125, 16),
(1126, 1),
(1126, 16),
(1128, 1),
(1128, 16),
(1129, 1),
(1129, 16),
(1130, 1),
(1130, 16),
(1131, 1),
(1131, 16),
(1132, 1),
(1132, 10),
(1133, 1),
(1134, 1),
(1135, 1),
(1137, 10),
(1138, 10),
(1142, 10),
(1143, 10),
(1151, 10),
(1158, 10),
(1166, 1),
(1170, 1),
(1173, 1),
(1174, 1),
(1175, 1),
(1175, 10),
(1176, 10),
(1177, 1),
(1178, 1),
(1180, 10),
(1181, 1),
(1181, 10),
(1182, 10),
(1183, 1),
(1183, 10),
(1184, 1),
(1185, 1),
(1186, 1),
(1187, 1),
(1187, 10),
(1188, 1),
(1188, 10),
(1189, 1),
(1189, 10),
(1190, 1),
(1191, 10),
(1192, 1),
(1193, 10),
(1194, 10),
(1195, 10),
(1196, 10),
(1197, 10),
(1198, 10),
(1199, 10),
(1200, 1),
(1201, 1),
(1203, 10),
(1204, 1),
(1204, 10),
(1205, 10),
(1206, 10),
(1207, 10),
(1208, 10),
(1209, 10),
(1210, 10),
(1211, 10),
(1212, 10),
(1213, 10),
(1214, 10),
(1215, 10),
(1216, 10),
(1217, 10),
(1218, 10),
(1219, 1),
(1219, 10),
(1220, 10),
(1222, 10),
(1223, 10),
(1224, 10),
(1225, 10),
(1226, 10),
(1227, 1),
(1228, 1),
(1229, 1),
(1229, 10),
(1230, 1),
(1231, 10),
(1232, 10),
(1233, 10),
(1234, 10),
(1235, 10),
(1236, 10),
(1237, 10),
(1238, 10),
(1239, 1),
(1240, 1),
(1240, 10),
(1240, 8),
(1241, 1),
(1241, 10),
(1242, 10),
(1243, 10),
(1244, 10),
(1245, 10),
(1246, 10),
(1247, 10),
(1249, 10),
(1250, 10),
(1251, 10),
(1252, 10),
(1253, 1),
(1253, 10),
(1254, 1),
(1255, 1),
(1256, 1),
(1257, 1),
(1258, 1),
(1258, 10),
(1259, 1),
(1260, 1),
(1261, 1),
(1262, 1),
(1263, 1),
(1264, 1),
(1265, 1),
(1266, 1),
(1267, 1),
(1268, 1),
(1269, 10),
(1270, 10),
(1271, 1),
(1271, 10),
(1272, 1),
(1272, 8),
(1273, 1),
(1275, 1),
(1276, 1),
(1277, 1),
(1280, 10),
(1281, 1),
(1282, 1),
(1283, 1),
(1284, 1),
(1285, 1),
(1286, 1),
(1287, 1),
(1288, 1),
(1289, 1),
(1289, 10),
(1290, 1),
(1291, 1),
(1292, 1),
(1293, 1),
(1294, 1),
(1295, 1),
(1296, 10),
(1297, 10),
(1298, 1),
(1299, 1),
(1299, 10),
(1301, 1),
(1304, 10),
(1305, 10),
(1306, 10),
(1307, 1),
(1307, 10),
(1308, 10),
(1309, 1),
(1310, 1),
(1311, 10),
(1312, 10),
(1313, 10),
(1314, 1),
(1315, 1),
(1316, 10),
(1317, 10),
(1318, 10),
(1319, 10),
(1320, 10),
(1321, 10),
(1322, 10),
(1323, 1),
(1324, 1),
(1325, 1),
(1326, 10),
(1327, 1),
(1328, 1),
(1329, 1),
(1330, 10),
(1331, 1),
(1332, 1),
(1333, 1),
(1334, 10),
(1335, 1),
(1336, 1),
(1337, 1),
(1338, 1),
(1339, 1),
(1340, 10),
(1341, 10),
(1342, 10),
(1343, 10),
(1344, 10),
(1345, 10),
(1346, 10),
(1347, 10),
(1348, 1),
(1357, 1),
(1358, 1),
(1358, 10),
(1359, 10),
(1360, 10),
(1361, 10),
(1362, 1),
(1363, 1),
(1364, 1),
(1365, 1),
(1366, 1),
(1367, 1),
(1368, 1),
(1369, 1),
(1369, 10),
(1370, 10),
(1371, 1),
(1372, 1),
(1373, 1),
(1374, 1),
(1375, 1),
(1376, 1),
(1377, 10),
(1378, 1),
(1379, 1),
(1380, 1),
(1380, 10),
(1381, 10),
(1382, 10),
(1383, 10),
(1384, 10),
(1385, 10),
(1386, 10),
(1387, 10),
(1388, 10),
(1389, 10),
(1390, 10),
(1391, 10),
(1392, 10),
(1393, 10),
(1394, 10),
(1395, 10),
(1396, 10),
(1397, 10),
(1398, 10),
(1399, 10),
(1400, 10),
(1401, 10),
(1402, 10),
(1403, 10),
(1404, 10),
(1405, 10),
(1406, 10),
(1407, 10),
(1408, 10),
(1409, 10),
(1410, 10),
(1411, 10),
(1412, 10),
(1413, 10),
(1414, 10),
(1415, 10),
(1416, 10),
(1417, 10),
(1418, 10),
(1419, 10),
(1420, 10),
(1421, 10),
(1422, 10),
(1423, 10),
(1424, 10),
(1425, 10),
(1426, 10),
(1427, 10),
(1428, 10),
(1429, 1),
(1430, 10),
(1431, 10),
(1432, 10),
(1433, 10),
(1434, 10),
(1435, 10),
(1436, 10),
(1437, 10),
(1438, 10),
(1439, 10),
(1440, 10),
(1441, 10),
(1442, 1),
(1443, 1),
(1444, 1),
(1445, 1),
(1446, 1),
(1447, 1),
(1448, 10),
(1449, 10),
(1450, 10),
(1452, 1),
(1453, 1),
(1454, 10),
(1455, 10),
(1456, 10),
(1457, 10),
(1458, 10),
(1459, 10),
(1460, 10),
(1461, 10),
(1462, 10),
(1463, 10),
(1464, 10),
(1465, 1),
(1466, 1),
(1467, 1),
(1468, 1),
(1469, 1),
(1470, 1),
(1471, 1),
(1472, 1),
(1473, 1),
(1474, 1),
(1475, 1),
(1476, 1),
(1477, 1),
(1478, 1),
(1479, 1),
(1480, 1),
(1481, 1),
(1482, 1),
(1483, 1),
(1484, 1),
(1485, 1),
(1486, 1),
(1487, 1),
(1488, 1),
(1489, 1),
(1490, 1),
(1491, 1),
(1492, 1),
(1493, 1),
(1494, 1),
(1495, 1),
(1496, 10),
(1497, 10),
(1498, 10),
(1499, 10),
(1500, 10),
(1501, 10),
(1502, 10),
(1503, 10),
(1504, 10),
(1505, 10),
(1506, 10),
(1507, 10),
(1508, 10),
(1509, 10),
(1510, 10),
(1512, 10),
(1513, 10),
(1514, 10),
(1515, 1),
(1516, 1),
(1517, 10),
(1518, 1),
(1519, 10),
(1520, 1),
(1521, 1),
(1522, 1),
(1523, 1),
(1524, 1),
(1524, 10),
(1525, 1),
(1525, 10),
(1526, 1),
(1527, 1),
(1528, 1),
(1528, 10),
(1529, 10),
(1531, 10),
(1534, 10),
(1538, 10),
(1539, 10),
(1541, 10),
(1542, 10),
(1549, 1),
(1550, 1),
(1551, 10),
(1552, 10),
(1553, 10),
(1554, 10),
(1555, 10),
(1556, 10),
(1557, 1),
(1557, 10),
(1558, 10),
(1559, 1),
(1559, 10),
(1560, 10),
(1561, 1),
(1562, 1),
(1563, 1),
(1564, 1),
(1565, 1),
(1566, 1),
(1567, 1),
(1568, 1),
(1569, 1),
(1570, 1),
(1571, 1),
(1572, 1),
(1573, 1),
(1574, 1),
(1575, 1),
(1576, 1),
(1577, 1),
(1578, 1),
(1579, 1),
(1580, 1),
(1581, 1),
(1582, 1),
(1583, 10),
(1584, 1),
(1584, 10),
(1585, 1),
(1585, 10),
(1586, 10),
(1587, 1),
(1588, 1),
(1589, 1),
(1590, 1),
(1591, 1),
(1592, 1),
(1593, 1),
(1594, 1),
(1596, 1),
(1597, 10),
(1598, 10),
(1599, 10),
(1600, 1),
(1601, 1),
(1602, 10),
(1603, 1),
(1604, 1),
(1605, 1),
(1605, 10),
(1606, 1),
(1606, 10),
(1607, 1),
(1608, 10),
(1609, 1),
(1610, 1),
(1611, 1),
(1612, 1),
(1613, 1),
(1614, 10),
(1615, 1),
(1616, 1),
(1617, 1),
(1618, 1),
(1619, 10),
(1620, 10),
(1621, 10),
(1623, 1),
(1624, 1),
(1625, 1),
(1625, 10),
(1626, 1),
(1627, 1),
(1628, 1),
(1629, 1),
(1630, 1),
(1632, 1),
(1633, 1),
(1634, 1),
(1635, 1),
(1636, 1),
(1637, 1),
(1638, 1),
(1639, 1),
(1640, 1),
(1641, 1),
(1642, 1),
(1643, 1),
(1644, 1),
(1645, 1),
(1646, 1),
(1648, 1),
(1649, 1),
(1650, 1),
(1651, 1),
(1652, 1),
(1653, 1),
(1654, 1),
(1655, 1),
(1657, 1),
(1658, 1),
(1659, 1),
(1660, 10),
(1661, 10),
(1662, 10),
(1663, 10),
(1664, 10),
(1665, 1),
(1666, 10),
(1667, 10),
(1668, 10),
(1669, 1),
(1670, 1),
(1671, 10),
(1672, 1),
(1673, 1),
(1674, 1),
(1675, 1),
(1676, 1),
(1677, 1),
(1678, 1),
(1679, 1),
(1680, 1),
(1681, 1),
(1682, 1),
(1683, 1),
(1684, 1),
(1685, 1),
(1686, 1),
(1687, 1),
(1688, 1),
(1689, 1),
(1689, 10),
(1690, 1),
(1690, 10),
(1691, 1),
(1692, 10),
(1693, 10),
(1694, 1),
(1694, 10),
(1695, 1),
(1696, 1),
(1697, 1),
(1698, 1),
(1699, 10),
(1700, 10),
(1701, 10),
(1702, 10),
(1703, 10),
(1704, 10),
(1705, 10),
(1706, 10),
(1707, 10),
(1708, 10),
(1709, 10),
(1710, 10),
(1711, 10),
(1712, 1),
(1714, 1),
(1715, 1),
(1716, 1),
(1717, 1),
(1718, 1),
(1719, 1),
(1720, 1),
(1721, 1),
(1722, 1),
(1723, 1),
(1724, 10),
(1725, 1),
(1725, 10),
(1726, 10),
(1727, 10),
(1728, 1),
(1728, 10),
(1729, 10),
(1730, 10),
(1731, 1),
(1732, 10),
(1733, 10),
(1734, 10),
(1735, 10),
(1736, 10),
(1737, 1),
(1737, 10),
(1738, 10),
(1739, 10),
(1740, 10),
(1741, 10),
(1742, 10),
(1743, 10),
(1744, 10),
(1745, 10),
(1746, 10),
(1747, 10),
(1748, 10),
(1749, 10),
(1750, 10),
(1751, 10),
(1752, 10),
(1753, 10),
(1754, 10),
(1755, 10),
(1756, 10),
(1757, 10),
(1758, 10),
(1759, 10),
(1760, 10),
(1761, 10),
(1762, 10),
(1763, 10),
(1764, 10),
(1765, 10),
(1766, 10),
(1767, 10),
(1768, 10),
(1769, 10),
(1770, 10),
(1771, 10),
(1772, 10),
(1773, 10),
(1774, 10),
(1775, 10),
(1776, 10),
(1777, 10),
(1778, 10),
(1779, 10),
(1780, 10),
(1781, 10),
(1782, 10),
(1783, 10),
(1784, 10),
(1785, 10),
(1786, 10),
(1787, 10),
(1788, 10),
(1789, 10),
(1790, 10),
(1791, 10),
(1792, 10),
(1793, 10),
(1794, 10),
(1795, 10),
(1796, 10),
(1797, 10),
(1798, 10),
(1799, 10),
(1800, 10),
(1801, 10),
(1802, 10),
(1803, 10),
(1804, 10),
(1805, 10),
(1806, 10),
(1807, 10),
(1808, 10),
(1809, 10),
(1810, 1),
(1811, 1),
(1812, 10),
(1813, 10),
(1814, 1),
(1815, 1),
(1815, 10),
(1816, 10),
(1817, 10),
(1818, 10),
(1819, 10),
(1820, 10),
(1821, 10),
(1822, 10),
(1823, 1),
(1824, 1),
(1825, 10),
(1826, 1),
(1827, 1),
(1828, 1),
(1829, 1),
(1830, 1),
(1831, 10),
(1832, 10),
(1833, 1),
(1834, 1),
(1835, 1),
(1836, 10),
(1837, 1),
(1838, 1),
(1839, 1),
(1840, 1),
(1841, 1),
(1842, 1),
(1843, 1),
(1844, 10),
(1845, 1),
(1847, 1),
(1848, 1),
(1849, 1),
(1850, 1),
(1851, 1),
(1852, 1),
(1853, 1),
(1854, 1),
(1855, 1),
(1856, 1),
(1857, 1),
(1858, 1),
(1859, 1),
(1860, 1),
(1861, 1),
(1861, 10),
(1862, 1),
(1862, 10),
(1863, 1),
(1864, 1),
(1865, 1),
(1866, 1),
(1867, 1),
(1868, 1),
(1869, 1),
(1870, 1),
(1870, 10),
(1871, 1),
(1871, 10),
(1872, 1),
(1873, 1),
(1874, 1),
(1875, 1),
(1876, 1),
(1877, 1),
(1878, 1),
(1879, 1),
(1880, 1),
(1881, 1),
(1881, 10),
(1882, 1),
(1883, 1),
(1883, 10),
(1884, 1),
(1885, 1),
(1886, 1),
(1887, 1),
(1889, 1),
(1890, 1),
(1890, 10),
(1891, 1),
(1891, 10),
(1892, 10),
(1893, 1),
(1893, 10),
(1894, 1),
(1894, 10),
(1895, 1),
(1895, 10),
(1896, 10),
(1897, 1),
(1897, 10),
(1898, 1),
(1899, 1),
(1900, 1),
(1900, 10),
(1901, 1),
(1902, 1),
(1903, 1),
(1904, 1),
(1904, 10),
(1905, 1),
(1907, 1),
(1908, 1),
(1909, 1),
(1910, 1),
(1911, 1),
(1917, 10),
(1919, 10),
(1922, 10),
(1924, 10),
(1927, 10),
(1928, 10),
(1929, 10),
(1931, 10),
(1935, 10),
(1937, 10),
(1938, 10),
(1939, 10),
(1940, 10),
(1941, 10),
(1942, 10),
(1943, 10),
(1944, 10),
(1945, 10),
(1947, 10),
(1948, 10),
(1949, 1),
(1949, 10),
(1950, 10),
(1951, 10),
(1952, 10),
(1953, 10),
(1955, 10),
(1957, 10),
(1958, 1),
(1959, 10),
(1960, 10),
(1961, 10),
(1963, 10),
(1964, 10),
(1965, 10),
(1966, 10),
(1968, 10),
(1969, 10),
(1973, 10),
(1974, 10),
(1981, 1),
(1984, 1),
(2000, 1),
(2001, 1),
(2010, 1),
(2013, 10),
(2015, 10),
(2023, 10),
(2025, 10),
(2031, 1),
(2034, 1),
(2039, 1),
(2041, 10),
(2044, 1),
(2044, 10),
(2049, 1),
(2064, 1),
(2076, 1),
(2099, 10),
(2100, 10),
(2102, 1),
(2113, 10),
(2114, 1),
(2116, 1),
(2117, 1),
(2118, 10),
(2119, 1),
(2120, 1),
(2121, 1),
(2121, 10),
(2122, 1),
(2123, 1),
(2124, 1),
(2124, 10),
(2125, 1),
(2126, 1),
(2127, 1),
(2128, 1),
(2129, 1),
(2130, 1),
(2131, 1),
(2132, 1),
(2133, 1),
(2134, 1),
(2135, 1),
(2136, 1),
(2137, 1),
(2137, 10),
(2138, 1),
(2139, 1),
(2140, 10),
(2141, 1),
(2142, 1),
(2143, 1),
(2144, 1),
(2145, 1),
(2146, 1),
(2147, 1),
(2148, 1),
(2149, 1),
(2150, 1),
(2151, 1),
(2152, 1),
(2153, 1),
(2154, 1),
(2155, 1),
(2156, 1),
(2157, 1),
(2158, 1),
(2159, 1),
(2160, 1),
(2161, 1),
(2162, 1),
(2163, 1),
(2164, 1),
(2165, 1),
(2166, 1),
(2167, 1),
(2168, 1),
(2169, 1),
(2170, 1),
(2171, 1),
(2172, 1),
(2173, 1),
(2174, 1),
(2175, 1),
(2182, 1),
(2183, 1),
(2188, 1),
(2201, 1),
(2230, 1),
(2243, 1),
(2258, 1),
(2260, 1),
(2261, 1),
(2284, 1),
(2285, 1),
(2286, 1),
(2287, 1),
(2288, 1),
(2289, 1),
(2290, 1),
(2291, 1),
(2292, 1),
(2294, 1),
(2295, 1),
(2296, 1),
(2297, 1),
(2298, 1),
(2299, 1),
(2300, 1),
(2300, 10),
(2301, 1),
(2301, 10),
(2302, 1),
(2302, 10),
(2303, 1),
(2304, 1),
(2306, 1),
(2307, 1),
(2307, 10),
(2308, 1),
(2309, 1),
(2310, 1),
(2311, 1),
(2311, 10),
(2312, 1),
(2313, 1),
(2314, 1),
(2316, 1),
(2317, 1),
(2318, 1),
(2319, 1),
(2320, 1),
(2321, 10),
(2322, 1),
(2322, 10),
(2323, 10),
(2324, 1),
(2325, 1),
(2326, 1),
(2327, 1),
(2328, 1),
(2329, 1),
(2330, 1),
(2330, 10),
(2331, 1),
(2332, 1),
(2333, 1),
(2334, 1),
(2335, 1),
(2336, 1),
(2337, 1),
(2338, 1),
(2339, 1),
(2340, 1),
(2341, 1),
(2342, 1),
(2343, 1),
(2344, 1),
(2345, 1),
(2346, 1),
(2347, 1),
(2348, 1),
(2349, 1),
(2350, 10),
(2351, 10),
(2352, 1),
(2353, 1),
(2353, 10),
(2354, 1),
(2355, 1),
(2355, 10),
(2356, 1),
(2356, 10),
(2357, 1),
(2357, 10),
(2358, 1),
(2358, 10),
(2359, 1),
(2359, 10),
(2360, 1),
(2360, 10),
(2361, 1),
(2361, 10),
(2362, 1),
(2362, 10),
(2363, 1),
(2364, 1),
(2365, 1),
(2366, 1),
(2367, 1),
(2368, 1),
(2369, 1),
(2370, 1),
(2371, 1),
(2372, 1),
(2373, 1),
(2374, 1),
(2375, 1),
(2376, 10),
(2380, 1),
(2381, 1),
(2382, 1),
(2383, 1),
(2384, 1),
(2385, 1),
(2386, 1),
(2387, 1),
(2388, 1),
(2389, 1),
(2389, 10),
(2390, 1),
(2391, 1),
(2392, 1),
(2392, 10),
(2393, 1),
(2393, 10),
(2394, 10),
(2395, 10),
(2396, 10),
(2397, 10),
(2398, 10),
(2399, 10),
(2400, 10),
(2401, 1),
(2402, 1),
(2403, 1),
(2404, 1),
(2405, 1),
(2406, 1),
(2407, 1),
(2408, 1),
(2409, 1),
(2410, 1),
(2411, 1),
(2412, 1),
(2413, 1),
(2414, 1),
(2415, 1),
(2416, 1),
(2417, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;