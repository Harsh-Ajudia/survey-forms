/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : survey-forms

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 27/11/2020 19:15:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for country
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country`  (
  `country_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `iso_code_2` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `iso_code_3` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `latitude` decimal(10, 6) NULL DEFAULT NULL,
  `longitude` decimal(10, 6) NULL DEFAULT NULL,
  PRIMARY KEY (`country_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 272 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES (1, 'Afghanistan', 'AF', 'AFG', 1, 33.939110, 67.709953);
INSERT INTO `country` VALUES (2, 'Albania', 'AL', 'ALB', 1, 41.153332, 20.168331);
INSERT INTO `country` VALUES (3, 'Algeria', 'DZ', 'DZA', 1, 28.033886, 1.659626);
INSERT INTO `country` VALUES (4, 'American Samoa', 'AS', 'ASM', 1, -14.270972, -170.132217);
INSERT INTO `country` VALUES (5, 'Andorra', 'AD', 'AND', 1, 42.546245, 1.601554);
INSERT INTO `country` VALUES (6, 'Angola', 'AO', 'AGO', 1, -11.202692, 17.873887);
INSERT INTO `country` VALUES (7, 'Anguilla', 'AI', 'AIA', 1, 18.220554, -63.068615);
INSERT INTO `country` VALUES (8, 'Antarctica', 'AQ', 'ATA', 1, -75.250973, -0.071389);
INSERT INTO `country` VALUES (9, 'Antigua and Barbuda', 'AG', 'ATG', 1, 17.060816, -61.796428);
INSERT INTO `country` VALUES (10, 'Argentina', 'AR', 'ARG', 1, -38.416097, -63.616672);
INSERT INTO `country` VALUES (11, 'Armenia', 'AM', 'ARM', 1, 40.069099, 45.038189);
INSERT INTO `country` VALUES (12, 'Aruba', 'AW', 'ABW', 1, 12.521110, -69.968338);
INSERT INTO `country` VALUES (13, 'Australia', 'AU', 'AUS', 1, -25.274398, 133.775136);
INSERT INTO `country` VALUES (14, 'Austria', 'AT', 'AUT', 1, 47.516231, 14.550072);
INSERT INTO `country` VALUES (15, 'Azerbaijan', 'AZ', 'AZE', 1, 40.143105, 47.576927);
INSERT INTO `country` VALUES (16, 'Bahamas', 'BS', 'BHS', 1, 25.034280, -77.396280);
INSERT INTO `country` VALUES (17, 'Bahrain', 'BH', 'BHR', 1, 25.930414, 50.637772);
INSERT INTO `country` VALUES (18, 'Bangladesh', 'BD', 'BGD', 1, 23.684994, 90.356331);
INSERT INTO `country` VALUES (19, 'Barbados', 'BB', 'BRB', 1, 13.193887, -59.543198);
INSERT INTO `country` VALUES (20, 'Belarus', 'BY', 'BLR', 1, 53.709807, 27.953389);
INSERT INTO `country` VALUES (21, 'Belgium', 'BE', 'BEL', 1, 50.503887, 4.469936);
INSERT INTO `country` VALUES (22, 'Belize', 'BZ', 'BLZ', 1, 17.189877, -88.497650);
INSERT INTO `country` VALUES (23, 'Benin', 'BJ', 'BEN', 1, 9.307690, 2.315834);
INSERT INTO `country` VALUES (24, 'Bermuda', 'BM', 'BMU', 1, 32.321384, -64.757370);
INSERT INTO `country` VALUES (25, 'Bhutan', 'BT', 'BTN', 1, 27.514162, 90.433601);
INSERT INTO `country` VALUES (26, 'Bolivia', 'BO', 'BOL', 1, -16.290154, -63.588653);
INSERT INTO `country` VALUES (27, 'Bosnia and Herzegovina', 'BA', 'BIH', 1, 43.915886, 17.679076);
INSERT INTO `country` VALUES (28, 'Botswana', 'BW', 'BWA', 1, -22.328474, 24.684866);
INSERT INTO `country` VALUES (29, 'Bouvet Island', 'BV', 'BVT', 1, -54.423199, 3.413194);
INSERT INTO `country` VALUES (30, 'Brazil', 'BR', 'BRA', 1, -14.235004, -51.925280);
INSERT INTO `country` VALUES (31, 'British Indian Ocean Territory', 'IO', 'IOT', 1, -6.343194, 71.876519);
INSERT INTO `country` VALUES (32, 'Brunei Darussalam', 'BN', 'BRN', 1, 4.535277, 114.727669);
INSERT INTO `country` VALUES (33, 'Bulgaria', 'BG', 'BGR', 1, 42.733883, 25.485830);
INSERT INTO `country` VALUES (34, 'Burkina Faso', 'BF', 'BFA', 1, 12.238333, -1.561593);
INSERT INTO `country` VALUES (35, 'Burundi', 'BI', 'BDI', 1, -3.373056, 29.918886);
INSERT INTO `country` VALUES (36, 'Cambodia', 'KH', 'KHM', 1, 12.565679, 104.990963);
INSERT INTO `country` VALUES (37, 'Cameroon', 'CM', 'CMR', 1, 7.369722, 12.354722);
INSERT INTO `country` VALUES (38, 'Canada', 'CA', 'CAN', 1, 56.130366, -106.346771);
INSERT INTO `country` VALUES (39, 'Cape Verde', 'CV', 'CPV', 1, 16.002082, -24.013197);
INSERT INTO `country` VALUES (40, 'Cayman Islands', 'KY', 'CYM', 1, 19.513469, -80.566956);
INSERT INTO `country` VALUES (41, 'Central African Republic', 'CF', 'CAF', 1, 6.611111, 20.939444);
INSERT INTO `country` VALUES (42, 'Chad', 'TD', 'TCD', 1, 15.454166, 18.732207);
INSERT INTO `country` VALUES (43, 'Chile', 'CL', 'CHL', 1, -35.675147, -71.542969);
INSERT INTO `country` VALUES (44, 'China', 'CN', 'CHN', 1, 35.861660, 104.195397);
INSERT INTO `country` VALUES (45, 'Christmas Island', 'CX', 'CXR', 1, -10.447525, 105.690449);
INSERT INTO `country` VALUES (46, 'Cocos (Keeling) Islands', 'CC', 'CCK', 1, -12.164165, 96.870956);
INSERT INTO `country` VALUES (47, 'Colombia', 'CO', 'COL', 1, 4.570868, -74.297333);
INSERT INTO `country` VALUES (48, 'Comoros', 'KM', 'COM', 1, -11.875001, 43.872219);
INSERT INTO `country` VALUES (49, 'Congo', 'CG', 'COG', 1, -0.228021, 15.827659);
INSERT INTO `country` VALUES (50, 'Cook Islands', 'CK', 'COK', 1, -21.236736, -159.777671);
INSERT INTO `country` VALUES (51, 'Costa Rica', 'CR', 'CRI', 1, 9.748917, -83.753428);
INSERT INTO `country` VALUES (52, 'Cote D\'Ivoire', 'CI', 'CIV', 1, 7.539989, -5.547080);
INSERT INTO `country` VALUES (53, 'Croatia', 'HR', 'HRV', 1, 45.100000, 15.200000);
INSERT INTO `country` VALUES (54, 'Cuba', 'CU', 'CUB', 1, 21.521757, -77.781167);
INSERT INTO `country` VALUES (55, 'Cyprus', 'CY', 'CYP', 1, 35.126413, 33.429859);
INSERT INTO `country` VALUES (56, 'Czech Republic', 'CZ', 'CZE', 1, 49.817492, 15.472962);
INSERT INTO `country` VALUES (57, 'Denmark', 'DK', 'DNK', 1, 56.263920, 9.501785);
INSERT INTO `country` VALUES (58, 'Djibouti', 'DJ', 'DJI', 1, 11.825138, 42.590275);
INSERT INTO `country` VALUES (59, 'Dominica', 'DM', 'DMA', 1, 15.414999, -61.370976);
INSERT INTO `country` VALUES (60, 'Dominican Republic', 'DO', 'DOM', 1, 18.735693, -70.162651);
INSERT INTO `country` VALUES (61, 'East Timor', 'TL', 'TLS', 1, -8.874217, 125.727539);
INSERT INTO `country` VALUES (62, 'Ecuador', 'EC', 'ECU', 1, -1.831239, -78.183406);
INSERT INTO `country` VALUES (63, 'Egypt', 'EG', 'EGY', 1, 26.820553, 30.802498);
INSERT INTO `country` VALUES (64, 'El Salvador', 'SV', 'SLV', 1, 13.794185, -88.896530);
INSERT INTO `country` VALUES (65, 'Equatorial Guinea', 'GQ', 'GNQ', 1, 1.650801, 10.267895);
INSERT INTO `country` VALUES (66, 'Eritrea', 'ER', 'ERI', 1, 15.179384, 39.782334);
INSERT INTO `country` VALUES (67, 'Estonia', 'EE', 'EST', 1, 58.595272, 25.013607);
INSERT INTO `country` VALUES (68, 'Ethiopia', 'ET', 'ETH', 1, 9.145000, 40.489673);
INSERT INTO `country` VALUES (69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 1, -51.796253, -59.523613);
INSERT INTO `country` VALUES (70, 'Faroe Islands', 'FO', 'FRO', 1, 61.892635, -6.911806);
INSERT INTO `country` VALUES (71, 'Fiji', 'FJ', 'FJI', 1, -16.578193, 179.414413);
INSERT INTO `country` VALUES (72, 'Finland', 'FI', 'FIN', 1, 61.924110, 25.748151);
INSERT INTO `country` VALUES (74, 'France, Metropolitan', 'FR', 'FRA', 1, 46.227638, 2.213749);
INSERT INTO `country` VALUES (75, 'French Guiana', 'GF', 'GUF', 1, 3.933889, -53.125782);
INSERT INTO `country` VALUES (76, 'French Polynesia', 'PF', 'PYF', 1, -17.679742, -149.406843);
INSERT INTO `country` VALUES (77, 'French Southern Territories', 'TF', 'ATF', 1, -49.280366, 69.348557);
INSERT INTO `country` VALUES (78, 'Gabon', 'GA', 'GAB', 1, -0.803689, 11.609444);
INSERT INTO `country` VALUES (79, 'Gambia', 'GM', 'GMB', 1, 13.443182, -15.310139);
INSERT INTO `country` VALUES (80, 'Georgia', 'GE', 'GEO', 1, 42.315407, 43.356892);
INSERT INTO `country` VALUES (81, 'Germany', 'DE', 'DEU', 1, 51.165691, 10.451526);
INSERT INTO `country` VALUES (82, 'Ghana', 'GH', 'GHA', 1, 7.946527, -1.023194);
INSERT INTO `country` VALUES (83, 'Gibraltar', 'GI', 'GIB', 1, 36.137741, -5.345374);
INSERT INTO `country` VALUES (84, 'Greece', 'GR', 'GRC', 1, 39.074208, 21.824312);
INSERT INTO `country` VALUES (85, 'Greenland', 'GL', 'GRL', 1, 71.706936, -42.604303);
INSERT INTO `country` VALUES (86, 'Grenada', 'GD', 'GRD', 1, 12.262776, -61.604171);
INSERT INTO `country` VALUES (87, 'Guadeloupe', 'GP', 'GLP', 1, 16.995971, -62.067641);
INSERT INTO `country` VALUES (88, 'Guam', 'GU', 'GUM', 1, 13.444304, 144.793731);
INSERT INTO `country` VALUES (89, 'Guatemala', 'GT', 'GTM', 1, 15.783471, -90.230759);
INSERT INTO `country` VALUES (90, 'Guinea', 'GN', 'GIN', 1, 9.945587, -9.696645);
INSERT INTO `country` VALUES (91, 'Guinea-Bissau', 'GW', 'GNB', 1, 11.803749, -15.180413);
INSERT INTO `country` VALUES (92, 'Guyana', 'GY', 'GUY', 1, 4.860416, -58.930180);
INSERT INTO `country` VALUES (93, 'Haiti', 'HT', 'HTI', 1, 18.971187, -72.285215);
INSERT INTO `country` VALUES (94, 'Heard and Mc Donald Islands', 'HM', 'HMD', 1, -53.081810, 73.504158);
INSERT INTO `country` VALUES (95, 'Honduras', 'HN', 'HND', 1, 15.199999, -86.241905);
INSERT INTO `country` VALUES (96, 'Hong Kong', 'HK', 'HKG', 1, 22.396428, 114.109497);
INSERT INTO `country` VALUES (97, 'Hungary', 'HU', 'HUN', 1, 47.162494, 19.503304);
INSERT INTO `country` VALUES (98, 'Iceland', 'IS', 'ISL', 1, 64.963051, -19.020835);
INSERT INTO `country` VALUES (99, 'India', 'IN', 'IND', 1, 20.593684, 78.962880);
INSERT INTO `country` VALUES (100, 'Indonesia', 'ID', 'IDN', 1, -0.789275, 113.921327);
INSERT INTO `country` VALUES (101, 'Iran (Islamic Republic of)', 'IR', 'IRN', 1, 32.427908, 53.688046);
INSERT INTO `country` VALUES (102, 'Iraq', 'IQ', 'IRQ', 1, 33.223191, 43.679291);
INSERT INTO `country` VALUES (103, 'Ireland', 'IE', 'IRL', 1, 53.412910, -8.243890);
INSERT INTO `country` VALUES (104, 'Israel', 'IL', 'ISR', 1, 31.046051, 34.851612);
INSERT INTO `country` VALUES (105, 'Italy', 'IT', 'ITA', 1, 41.871940, 12.567380);
INSERT INTO `country` VALUES (106, 'Jamaica', 'JM', 'JAM', 1, 18.109581, -77.297508);
INSERT INTO `country` VALUES (107, 'Japan', 'JP', 'JPN', 1, 36.204824, 138.252924);
INSERT INTO `country` VALUES (108, 'Jordan', 'JO', 'JOR', 1, 30.585164, 36.238414);
INSERT INTO `country` VALUES (109, 'Kazakhstan', 'KZ', 'KAZ', 1, 48.019573, 66.923684);
INSERT INTO `country` VALUES (110, 'Kenya', 'KE', 'KEN', 1, -0.023559, 37.906193);
INSERT INTO `country` VALUES (111, 'Kiribati', 'KI', 'KIR', 1, -3.370417, -168.734039);
INSERT INTO `country` VALUES (112, 'North Korea', 'KP', 'PRK', 1, 40.339852, 127.510093);
INSERT INTO `country` VALUES (113, 'South Korea', 'KR', 'KOR', 1, 35.907757, 127.766922);
INSERT INTO `country` VALUES (114, 'Kuwait', 'KW', 'KWT', 1, 29.311660, 47.481766);
INSERT INTO `country` VALUES (115, 'Kyrgyzstan', 'KG', 'KGZ', 1, 41.204380, 74.766098);
INSERT INTO `country` VALUES (116, 'Lao People\'s Democratic Republic', 'LA', 'LAO', 1, 19.856270, 102.495496);
INSERT INTO `country` VALUES (117, 'Latvia', 'LV', 'LVA', 1, 56.879635, 24.603189);
INSERT INTO `country` VALUES (118, 'Lebanon', 'LB', 'LBN', 1, 33.854721, 35.862285);
INSERT INTO `country` VALUES (119, 'Lesotho', 'LS', 'LSO', 1, -29.609988, 28.233608);
INSERT INTO `country` VALUES (120, 'Liberia', 'LR', 'LBR', 1, 6.428055, -9.429499);
INSERT INTO `country` VALUES (121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 1, 26.335100, 17.228331);
INSERT INTO `country` VALUES (122, 'Liechtenstein', 'LI', 'LIE', 1, 47.166000, 9.555373);
INSERT INTO `country` VALUES (123, 'Lithuania', 'LT', 'LTU', 1, 55.169438, 23.881275);
INSERT INTO `country` VALUES (124, 'Luxembourg', 'LU', 'LUX', 1, 49.815273, 6.129583);
INSERT INTO `country` VALUES (125, 'Macau', 'MO', 'MAC', 1, 22.198745, 113.543873);
INSERT INTO `country` VALUES (126, 'FYROM', 'MK', 'MKD', 1, 41.608635, 21.745275);
INSERT INTO `country` VALUES (127, 'Madagascar', 'MG', 'MDG', 1, -18.766947, 46.869107);
INSERT INTO `country` VALUES (128, 'Malawi', 'MW', 'MWI', 1, -13.254308, 34.301525);
INSERT INTO `country` VALUES (129, 'Malaysia', 'MY', 'MYS', 1, 4.210484, 101.975766);
INSERT INTO `country` VALUES (130, 'Maldives', 'MV', 'MDV', 1, 3.202778, 73.220680);
INSERT INTO `country` VALUES (131, 'Mali', 'ML', 'MLI', 1, 17.570692, -3.996166);
INSERT INTO `country` VALUES (132, 'Malta', 'MT', 'MLT', 1, 35.937496, 14.375416);
INSERT INTO `country` VALUES (133, 'Marshall Islands', 'MH', 'MHL', 1, 7.131474, 171.184478);
INSERT INTO `country` VALUES (134, 'Martinique', 'MQ', 'MTQ', 1, 14.641528, -61.024174);
INSERT INTO `country` VALUES (135, 'Mauritania', 'MR', 'MRT', 1, 21.007890, -10.940835);
INSERT INTO `country` VALUES (136, 'Mauritius', 'MU', 'MUS', 1, -20.348404, 57.552152);
INSERT INTO `country` VALUES (137, 'Mayotte', 'YT', 'MYT', 1, -12.827500, 45.166244);
INSERT INTO `country` VALUES (138, 'Mexico', 'MX', 'MEX', 1, 23.634501, -102.552784);
INSERT INTO `country` VALUES (139, 'Micronesia, Federated States of', 'FM', 'FSM', 1, 7.425554, 150.550812);
INSERT INTO `country` VALUES (140, 'Moldova, Republic of', 'MD', 'MDA', 1, 47.411631, 28.369885);
INSERT INTO `country` VALUES (141, 'Monaco', 'MC', 'MCO', 1, 43.750298, 7.412841);
INSERT INTO `country` VALUES (142, 'Mongolia', 'MN', 'MNG', 1, 46.862496, 103.846656);
INSERT INTO `country` VALUES (143, 'Montserrat', 'MS', 'MSR', 1, 16.742498, -62.187366);
INSERT INTO `country` VALUES (144, 'Morocco', 'MA', 'MAR', 1, 31.791702, -7.092620);
INSERT INTO `country` VALUES (145, 'Mozambique', 'MZ', 'MOZ', 1, -18.665695, 35.529562);
INSERT INTO `country` VALUES (146, 'Myanmar', 'MM', 'MMR', 1, 21.913965, 95.956223);
INSERT INTO `country` VALUES (147, 'Namibia', 'NA', 'NAM', 1, -22.957640, 18.490410);
INSERT INTO `country` VALUES (148, 'Nauru', 'NR', 'NRU', 1, -0.522778, 166.931503);
INSERT INTO `country` VALUES (149, 'Nepal', 'NP', 'NPL', 1, 28.394857, 84.124008);
INSERT INTO `country` VALUES (150, 'Netherlands', 'NL', 'NLD', 1, 52.132633, 5.291266);
INSERT INTO `country` VALUES (151, 'Netherlands Antilles', 'AN', 'ANT', 1, 12.226079, -69.060087);
INSERT INTO `country` VALUES (152, 'New Caledonia', 'NC', 'NCL', 1, -20.904305, 165.618042);
INSERT INTO `country` VALUES (153, 'New Zealand', 'NZ', 'NZL', 1, -40.900557, 174.885971);
INSERT INTO `country` VALUES (154, 'Nicaragua', 'NI', 'NIC', 1, 12.865416, -85.207229);
INSERT INTO `country` VALUES (155, 'Niger', 'NE', 'NER', 1, 17.607789, 8.081666);
INSERT INTO `country` VALUES (156, 'Nigeria', 'NG', 'NGA', 1, 9.081999, 8.675277);
INSERT INTO `country` VALUES (157, 'Niue', 'NU', 'NIU', 1, -19.054445, -169.867233);
INSERT INTO `country` VALUES (158, 'Norfolk Island', 'NF', 'NFK', 1, -29.040835, 167.954712);
INSERT INTO `country` VALUES (159, 'Northern Mariana Islands', 'MP', 'MNP', 1, 17.330830, 145.384690);
INSERT INTO `country` VALUES (160, 'Norway', 'NO', 'NOR', 1, 60.472024, 8.468946);
INSERT INTO `country` VALUES (161, 'Oman', 'OM', 'OMN', 1, 21.512583, 55.923255);
INSERT INTO `country` VALUES (162, 'Pakistan', 'PK', 'PAK', 1, 30.375321, 69.345116);
INSERT INTO `country` VALUES (163, 'Palau', 'PW', 'PLW', 1, 7.514980, 134.582520);
INSERT INTO `country` VALUES (164, 'Panama', 'PA', 'PAN', 1, 8.537981, -80.782127);
INSERT INTO `country` VALUES (165, 'Papua New Guinea', 'PG', 'PNG', 1, -6.314993, 143.955550);
INSERT INTO `country` VALUES (166, 'Paraguay', 'PY', 'PRY', 1, -23.442503, -58.443832);
INSERT INTO `country` VALUES (167, 'Peru', 'PE', 'PER', 1, -9.189967, -75.015152);
INSERT INTO `country` VALUES (168, 'Philippines', 'PH', 'PHL', 1, 12.879721, 121.774017);
INSERT INTO `country` VALUES (169, 'Pitcairn', 'PN', 'PCN', 1, -24.703615, -127.439308);
INSERT INTO `country` VALUES (170, 'Poland', 'PL', 'POL', 1, 51.919438, 19.145136);
INSERT INTO `country` VALUES (171, 'Portugal', 'PT', 'PRT', 1, 39.399872, -8.224454);
INSERT INTO `country` VALUES (172, 'Puerto Rico', 'PR', 'PRI', 1, 18.220833, -66.590149);
INSERT INTO `country` VALUES (173, 'Qatar', 'QA', 'QAT', 1, 25.354826, 51.183884);
INSERT INTO `country` VALUES (174, 'Reunion', 'RE', 'REU', 1, -21.115141, 55.536384);
INSERT INTO `country` VALUES (175, 'Romania', 'RO', 'ROM', 1, 45.943161, 24.966760);
INSERT INTO `country` VALUES (176, 'Russian Federation', 'RU', 'RUS', 1, 61.524010, 105.318756);
INSERT INTO `country` VALUES (177, 'Rwanda', 'RW', 'RWA', 1, -1.940278, 29.873888);
INSERT INTO `country` VALUES (178, 'Saint Kitts and Nevis', 'KN', 'KNA', 1, 17.357822, -62.782998);
INSERT INTO `country` VALUES (179, 'Saint Lucia', 'LC', 'LCA', 1, 13.909444, -60.978893);
INSERT INTO `country` VALUES (180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1, 12.984305, -61.287228);
INSERT INTO `country` VALUES (181, 'Samoa', 'WS', 'WSM', 1, -13.759029, -172.104629);
INSERT INTO `country` VALUES (182, 'San Marino', 'SM', 'SMR', 1, 43.942360, 12.457777);
INSERT INTO `country` VALUES (183, 'Sao Tome and Principe', 'ST', 'STP', 1, 0.186360, 6.613081);
INSERT INTO `country` VALUES (184, 'Saudi Arabia', 'SA', 'SAU', 1, 23.885942, 45.079162);
INSERT INTO `country` VALUES (185, 'Senegal', 'SN', 'SEN', 1, 14.497401, -14.452362);
INSERT INTO `country` VALUES (186, 'Seychelles', 'SC', 'SYC', 1, -4.679574, 55.491977);
INSERT INTO `country` VALUES (187, 'Sierra Leone', 'SL', 'SLE', 1, 8.460555, -11.779889);
INSERT INTO `country` VALUES (188, 'Singapore', 'SG', 'SGP', 1, 1.352083, 103.819836);
INSERT INTO `country` VALUES (189, 'Slovak Republic', 'SK', 'SVK', 1, 48.669026, 19.699024);
INSERT INTO `country` VALUES (190, 'Slovenia', 'SI', 'SVN', 1, 46.151241, 14.995463);
INSERT INTO `country` VALUES (191, 'Solomon Islands', 'SB', 'SLB', 1, -9.645710, 160.156194);
INSERT INTO `country` VALUES (192, 'Somalia', 'SO', 'SOM', 1, 5.152149, 46.199616);
INSERT INTO `country` VALUES (193, 'South Africa', 'ZA', 'ZAF', 1, -30.559482, 22.937506);
INSERT INTO `country` VALUES (194, 'South Georgia &amp; South Sandwich Islands', 'GS', 'SGS', 1, -54.429579, -36.587909);
INSERT INTO `country` VALUES (195, 'Spain', 'ES', 'ESP', 1, 40.463667, -3.749220);
INSERT INTO `country` VALUES (196, 'Sri Lanka', 'LK', 'LKA', 1, 7.873054, 80.771797);
INSERT INTO `country` VALUES (197, 'St. Helena', 'SH', 'SHN', 1, -24.143474, -10.030696);
INSERT INTO `country` VALUES (198, 'St. Pierre and Miquelon', 'PM', 'SPM', 1, 46.941936, -56.271110);
INSERT INTO `country` VALUES (199, 'Sudan', 'SD', 'SDN', 1, 12.862807, 30.217636);
INSERT INTO `country` VALUES (200, 'Suriname', 'SR', 'SUR', 1, 3.919305, -56.027783);
INSERT INTO `country` VALUES (201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', 1, 77.553604, 23.670272);
INSERT INTO `country` VALUES (202, 'Swaziland', 'SZ', 'SWZ', 1, -26.522503, 31.465866);
INSERT INTO `country` VALUES (203, 'Sweden', 'SE', 'SWE', 1, 60.128161, 18.643501);
INSERT INTO `country` VALUES (204, 'Switzerland', 'CH', 'CHE', 1, 46.818188, 8.227512);
INSERT INTO `country` VALUES (205, 'Syrian Arab Republic', 'SY', 'SYR', 1, 34.802075, 38.996815);
INSERT INTO `country` VALUES (206, 'Taiwan', 'TW', 'TWN', 1, 23.697810, 120.960515);
INSERT INTO `country` VALUES (207, 'Tajikistan', 'TJ', 'TJK', 1, 38.861034, 71.276093);
INSERT INTO `country` VALUES (208, 'Tanzania, United Republic of', 'TZ', 'TZA', 1, -6.369028, 34.888822);
INSERT INTO `country` VALUES (209, 'Thailand', 'TH', 'THA', 1, 15.870032, 100.992541);
INSERT INTO `country` VALUES (210, 'Togo', 'TG', 'TGO', 1, 8.619543, 0.824782);
INSERT INTO `country` VALUES (211, 'Tokelau', 'TK', 'TKL', 1, -8.967363, -171.855881);
INSERT INTO `country` VALUES (212, 'Tonga', 'TO', 'TON', 1, -21.178986, -175.198242);
INSERT INTO `country` VALUES (213, 'Trinidad and Tobago', 'TT', 'TTO', 1, 10.691803, -61.222503);
INSERT INTO `country` VALUES (214, 'Tunisia', 'TN', 'TUN', 1, 33.886917, 9.537499);
INSERT INTO `country` VALUES (215, 'Turkey', 'TR', 'TUR', 1, 38.963745, 35.243322);
INSERT INTO `country` VALUES (216, 'Turkmenistan', 'TM', 'TKM', 1, 38.969719, 59.556278);
INSERT INTO `country` VALUES (217, 'Turks and Caicos Islands', 'TC', 'TCA', 1, 21.694025, -71.797928);
INSERT INTO `country` VALUES (218, 'Tuvalu', 'TV', 'TUV', 1, -7.109535, 177.649330);
INSERT INTO `country` VALUES (219, 'Uganda', 'UG', 'UGA', 1, 1.373333, 32.290275);
INSERT INTO `country` VALUES (220, 'Ukraine', 'UA', 'UKR', 1, 48.379433, 31.165580);
INSERT INTO `country` VALUES (221, 'United Arab Emirates', 'AE', 'ARE', 1, 23.424076, 53.847818);
INSERT INTO `country` VALUES (222, 'United Kingdom', 'GB', 'GBR', 1, 55.378051, -3.435973);
INSERT INTO `country` VALUES (223, 'United States', 'US', 'USA', 1, 37.090240, -95.712891);
INSERT INTO `country` VALUES (224, 'United States Minor Outlying Islands', 'UM', 'UMI', 1, 0.000000, 0.000000);
INSERT INTO `country` VALUES (225, 'Uruguay', 'UY', 'URY', 1, -32.522779, -55.765835);
INSERT INTO `country` VALUES (226, 'Uzbekistan', 'UZ', 'UZB', 1, 41.377491, 64.585262);
INSERT INTO `country` VALUES (227, 'Vanuatu', 'VU', 'VUT', 1, -15.376706, 166.959158);
INSERT INTO `country` VALUES (228, 'Vatican City State (Holy See)', 'VA', 'VAT', 1, 41.902916, 12.453389);
INSERT INTO `country` VALUES (229, 'Venezuela', 'VE', 'VEN', 1, 6.423750, -66.589730);
INSERT INTO `country` VALUES (230, 'Viet Nam', 'VN', 'VNM', 1, 14.058324, 108.277199);
INSERT INTO `country` VALUES (231, 'Virgin Islands (British)', 'VG', 'VGB', 1, 18.420695, -64.639968);
INSERT INTO `country` VALUES (232, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1, 18.335765, -64.896335);
INSERT INTO `country` VALUES (233, 'Wallis and Futuna Islands', 'WF', 'WLF', 1, -13.768752, -177.156097);
INSERT INTO `country` VALUES (234, 'Western Sahara', 'EH', 'ESH', 1, 24.215527, -12.885834);
INSERT INTO `country` VALUES (235, 'Yemen', 'YE', 'YEM', 1, 15.552727, 48.516388);
INSERT INTO `country` VALUES (237, 'Democratic Republic of Congo', 'CD', 'COD', 1, -4.038333, 21.758664);
INSERT INTO `country` VALUES (238, 'Zambia', 'ZM', 'ZMB', 1, -13.133897, 27.849332);
INSERT INTO `country` VALUES (239, 'Zimbabwe', 'ZW', 'ZWE', 1, -19.015438, 29.154857);
INSERT INTO `country` VALUES (242, 'Montenegro', 'ME', 'MNE', 1, 42.708678, 19.374390);
INSERT INTO `country` VALUES (243, 'Serbia', 'RS', 'SRB', 1, 44.016521, 21.005859);
INSERT INTO `country` VALUES (244, 'Aaland Islands', 'AX', 'ALA', 1, NULL, NULL);
INSERT INTO `country` VALUES (245, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', 1, NULL, NULL);
INSERT INTO `country` VALUES (246, 'Curacao', 'CW', 'CUW', 0, NULL, NULL);
INSERT INTO `country` VALUES (247, 'Palestinian Territory, Occupied', 'PS', 'PSE', 1, 31.952162, 35.233154);
INSERT INTO `country` VALUES (248, 'South Sudan', 'SS', 'SSD', 1, NULL, NULL);
INSERT INTO `country` VALUES (249, 'St. Barthelemy', 'BL', 'BLM', 1, NULL, NULL);
INSERT INTO `country` VALUES (250, 'St. Martin (French part)', 'MF', 'MAF', 1, NULL, NULL);
INSERT INTO `country` VALUES (251, 'Canary Islands', 'IC', 'ICA', 1, NULL, NULL);
INSERT INTO `country` VALUES (252, 'Ascension Island (British)', 'AC', 'ASC', 1, 1.000000, NULL);
INSERT INTO `country` VALUES (253, 'Kosovo, Republic of', 'XK', 'UNK', 1, 42.602636, 20.902977);
INSERT INTO `country` VALUES (254, 'Isle of Man', 'IM', 'IMN', 1, 54.236107, -4.548056);
INSERT INTO `country` VALUES (255, 'Tristan da Cunha', 'TA', 'SHN', 1, NULL, NULL);
INSERT INTO `country` VALUES (256, 'Guernsey', 'GG', 'GGY', 1, 49.465691, -2.585278);
INSERT INTO `country` VALUES (257, 'Jersey', 'JE', 'JEY', 1, 49.214439, -2.131250);

-- ----------------------------
-- Table structure for laboratory
-- ----------------------------
DROP TABLE IF EXISTS `laboratory`;
CREATE TABLE `laboratory`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `laboratoryCode` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `laboratoryName` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nameOfFaculty` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `semester` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `course` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans1` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans2` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans3` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans4` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans5` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans6` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans7` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans8` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans9` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans10` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans11` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of laboratory
-- ----------------------------

-- ----------------------------
-- Table structure for personal_details
-- ----------------------------
DROP TABLE IF EXISTS `personal_details`;
CREATE TABLE `personal_details`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `country` int NULL DEFAULT 0,
  `mobileNumber` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_details
-- ----------------------------

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `subjectCode` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subjectName` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nameOfFaculty` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `semester` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `academicYear` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `course` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans1` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans2` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans3` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans4` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans5` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans6` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans7` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans8` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans9` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans10` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans11` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans12` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------

-- ----------------------------
-- Table structure for teaching_learning
-- ----------------------------
DROP TABLE IF EXISTS `teaching_learning`;
CREATE TABLE `teaching_learning`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `passingYear` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `course` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans1` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans2` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans3` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans4` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans5` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans6` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans7` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans8` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans9` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans10` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans11` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans12` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans13` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans14` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans15` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans16` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ans17` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teaching_learning
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
