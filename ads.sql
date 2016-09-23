/*
Navicat MySQL Data Transfer

Source Server         : adj
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : adj

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-10-08 00:22:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `adj_approvals`
-- ----------------------------
DROP TABLE IF EXISTS `adj_approvals`;
CREATE TABLE `adj_approvals` (
  `approval_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `approval_status_id` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`approval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_approvals
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_brands`
-- ----------------------------
DROP TABLE IF EXISTS `adj_brands`;
CREATE TABLE `adj_brands` (
  `brand_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) DEFAULT NULL,
  `site_owner_id` bigint(20) DEFAULT NULL,
  `product_type_id` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_brands
-- ----------------------------
INSERT INTO `adj_brands` VALUES ('1', 'as', '1', '0', '1', '2013-10-02 01:26:00', null, null, '');
INSERT INTO `adj_brands` VALUES ('2', 'uj', '2', '0', '1', '2013-10-02 01:47:34', null, null, '');
INSERT INTO `adj_brands` VALUES ('3', 'sop', '3', '0', '1', '2008-06-17 00:16:38', null, null, '');
INSERT INTO `adj_brands` VALUES ('4', 'tes', '4', '0', '1', '2013-10-02 18:42:13', null, null, '');
INSERT INTO `adj_brands` VALUES ('5', 'tes', '5', '0', '1', '2013-10-02 18:45:26', null, null, '');
INSERT INTO `adj_brands` VALUES ('6', 'tes', '6', '0', '1', '2013-10-02 18:47:40', null, null, '');
INSERT INTO `adj_brands` VALUES ('7', 'dda', '7', '0', '1', '2013-10-02 18:51:32', null, null, '');
INSERT INTO `adj_brands` VALUES ('8', 'sa', '8', '0', '1', '2013-10-02 21:23:43', null, null, '');

-- ----------------------------
-- Table structure for `adj_contact_request`
-- ----------------------------
DROP TABLE IF EXISTS `adj_contact_request`;
CREATE TABLE `adj_contact_request` (
  `contact_req_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `request_status_id` bigint(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`contact_req_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_contact_request
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_documents`
-- ----------------------------
DROP TABLE IF EXISTS `adj_documents`;
CREATE TABLE `adj_documents` (
  `doc_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) DEFAULT NULL,
  `doc_title` varchar(255) DEFAULT NULL,
  `doc_type_id` bigint(20) DEFAULT NULL,
  `doc_instruction` text,
  `created_by` bigint(20) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_documents
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_images`
-- ----------------------------
DROP TABLE IF EXISTS `adj_images`;
CREATE TABLE `adj_images` (
  `image_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `site_owner_id` bigint(20) unsigned DEFAULT NULL,
  `brand_id` bigint(255) unsigned DEFAULT NULL,
  `brand_category_map_id` bigint(20) unsigned DEFAULT NULL,
  `image_name` varchar(255) DEFAULT '',
  `is_follow` bit(1) DEFAULT NULL,
  `social_site_id` bigint(20) unsigned DEFAULT NULL,
  `created_by` bigint(20) unsigned DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) unsigned DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `image_dimention_id` bigint(20) unsigned DEFAULT NULL,
  `rediarect_url` varchar(255) DEFAULT '',
  `link_url` varchar(255) DEFAULT '',
  `image_url` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_images
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_master_approval_status`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_approval_status`;
CREATE TABLE `adj_master_approval_status` (
  `approval_status_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `approval_status` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`approval_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_approval_status
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_master_business_category`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_business_category`;
CREATE TABLE `adj_master_business_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `b_category_name` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_business_category
-- ----------------------------
INSERT INTO `adj_master_business_category` VALUES ('1', 'Airlines', '');
INSERT INTO `adj_master_business_category` VALUES ('2', 'IT', '');
INSERT INTO `adj_master_business_category` VALUES ('3', 'Computer Software & Hardware Development', '');
INSERT INTO `adj_master_business_category` VALUES ('4', 'Software', '');

-- ----------------------------
-- Table structure for `adj_master_categories`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_categories`;
CREATE TABLE `adj_master_categories` (
  `category_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_categories
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_master_country`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_country`;
CREATE TABLE `adj_master_country` (
  `country_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `iso_country_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=238 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_country
-- ----------------------------
INSERT INTO `adj_master_country` VALUES ('1', 'Afghanistan', '+93', '', 'AF / AFG ');
INSERT INTO `adj_master_country` VALUES ('2', 'Albania', '+355', '', 'AL / ALB ');
INSERT INTO `adj_master_country` VALUES ('3', 'Algeria', '+213', '', 'DZ / DZA ');
INSERT INTO `adj_master_country` VALUES ('4', 'American Samoa', '+1 684 ', '', 'AS / ASM ');
INSERT INTO `adj_master_country` VALUES ('5', 'Andorra', '+376', '', 'AD / AND ');
INSERT INTO `adj_master_country` VALUES ('6', 'Angola', '+244', '', 'AO / AGO ');
INSERT INTO `adj_master_country` VALUES ('7', 'Anguilla', '+1 264 ', '', 'AI / AIA ');
INSERT INTO `adj_master_country` VALUES ('8', 'Antarctica', '+672', '', 'AQ / ATA ');
INSERT INTO `adj_master_country` VALUES ('9', 'Antigua and Barbuda', '+1 268 ', '', 'AG / ATG ');
INSERT INTO `adj_master_country` VALUES ('10', 'Argentina', '+54', '', 'AR / ARG ');
INSERT INTO `adj_master_country` VALUES ('11', 'Armenia', '+374', '', 'AM / ARM ');
INSERT INTO `adj_master_country` VALUES ('12', 'Aruba', '+297', '', 'AW / ABW ');
INSERT INTO `adj_master_country` VALUES ('13', 'Australia', '+61', '', 'AU / AUS ');
INSERT INTO `adj_master_country` VALUES ('14', 'Austria', '+43', '', 'AT / AUT ');
INSERT INTO `adj_master_country` VALUES ('15', 'Azerbaijan', '+994', '', 'AZ / AZE ');
INSERT INTO `adj_master_country` VALUES ('16', 'Bahamas', '+1 242 ', '', 'BS / BHS ');
INSERT INTO `adj_master_country` VALUES ('17', 'Bahrain', '+973', '', 'BH / BHR ');
INSERT INTO `adj_master_country` VALUES ('18', 'Bangladesh', '+880', '', 'BD / BGD ');
INSERT INTO `adj_master_country` VALUES ('19', 'Barbados', '+1 246 ', '', 'BB / BRB ');
INSERT INTO `adj_master_country` VALUES ('20', 'Belarus', '+375', '', 'BY / BLR ');
INSERT INTO `adj_master_country` VALUES ('21', 'Belgium', '+32', '', 'BE / BEL ');
INSERT INTO `adj_master_country` VALUES ('22', 'Belize', '+501', '', 'BZ / BLZ ');
INSERT INTO `adj_master_country` VALUES ('23', 'Benin', '+229', '', 'BJ / BEN ');
INSERT INTO `adj_master_country` VALUES ('24', 'Bermuda', '+1 441 ', '', 'BM / BMU ');
INSERT INTO `adj_master_country` VALUES ('25', 'Bhutan', '+975', '', 'BT / BTN ');
INSERT INTO `adj_master_country` VALUES ('26', 'Bolivia', '+591', '', 'BO / BOL ');
INSERT INTO `adj_master_country` VALUES ('27', 'Bosnia and Herzegovina', '+387', '', 'BA / BIH ');
INSERT INTO `adj_master_country` VALUES ('28', 'Botswana', '+267', '', 'BW / BWA ');
INSERT INTO `adj_master_country` VALUES ('29', 'Brazil', '+55', '', 'BR / BRA ');
INSERT INTO `adj_master_country` VALUES ('30', 'British Indian Ocean Territory', '+', '', 'IO / IOT ');
INSERT INTO `adj_master_country` VALUES ('31', 'British Virgin Islands', '+1 284 ', '', 'VG / VGB ');
INSERT INTO `adj_master_country` VALUES ('32', 'Brunei', '+673', '', 'BN / BRN ');
INSERT INTO `adj_master_country` VALUES ('33', 'Bulgaria', '+359', '', 'BG / BGR ');
INSERT INTO `adj_master_country` VALUES ('34', 'Burkina Faso', '+226', '', 'BF / BFA ');
INSERT INTO `adj_master_country` VALUES ('35', 'Burma (Myanmar)', '+95', '', 'MM / MMR ');
INSERT INTO `adj_master_country` VALUES ('36', 'Burundi', '+257', '', 'BI / BDI ');
INSERT INTO `adj_master_country` VALUES ('37', 'Cambodia', '+855', '', 'KH / KHM ');
INSERT INTO `adj_master_country` VALUES ('38', 'Cameroon', '+237', '', 'CM / CMR ');
INSERT INTO `adj_master_country` VALUES ('39', 'Canada', '+1', '', 'CA / CAN ');
INSERT INTO `adj_master_country` VALUES ('40', 'Cape Verde', '+238', '', 'CV / CPV ');
INSERT INTO `adj_master_country` VALUES ('41', 'Cayman Islands', '+1 345 ', '', 'KY / CYM ');
INSERT INTO `adj_master_country` VALUES ('42', 'Central African Republic', '+236', '', 'CF / CAF ');
INSERT INTO `adj_master_country` VALUES ('43', 'Chad', '+235', '', 'TD / TCD ');
INSERT INTO `adj_master_country` VALUES ('44', 'Chile', '+56', '', 'CL / CHL ');
INSERT INTO `adj_master_country` VALUES ('45', 'China', '+86', '', 'CN / CHN ');
INSERT INTO `adj_master_country` VALUES ('46', 'Christmas Island', '+61', '', 'CX / CXR ');
INSERT INTO `adj_master_country` VALUES ('47', 'Cocos (Keeling) Islands', '+61', '', 'CC / CCK ');
INSERT INTO `adj_master_country` VALUES ('48', 'Colombia', '+57', '', 'CO / COL ');
INSERT INTO `adj_master_country` VALUES ('49', 'Comoros', '+269', '', 'KM / COM ');
INSERT INTO `adj_master_country` VALUES ('50', 'Cook Islands', '+682', '', 'CK / COK ');
INSERT INTO `adj_master_country` VALUES ('51', 'Costa Rica', '+506', '', 'CR / CRC ');
INSERT INTO `adj_master_country` VALUES ('52', 'Croatia', '+385', '', 'HR / HRV ');
INSERT INTO `adj_master_country` VALUES ('53', 'Cuba', '+53', '', 'CU / CUB ');
INSERT INTO `adj_master_country` VALUES ('54', 'Cyprus', '+357', '', 'CY / CYP ');
INSERT INTO `adj_master_country` VALUES ('55', 'Czech Republic', '+420', '', 'CZ / CZE ');
INSERT INTO `adj_master_country` VALUES ('56', 'Democratic Republic of the Congo', '+243', '', 'CD / COD ');
INSERT INTO `adj_master_country` VALUES ('57', 'Denmark', '+45', '', 'DK / DNK ');
INSERT INTO `adj_master_country` VALUES ('58', 'Djibouti', '+253', '', 'DJ / DJI ');
INSERT INTO `adj_master_country` VALUES ('59', 'Dominica', '+1 767 ', '', 'DM / DMA ');
INSERT INTO `adj_master_country` VALUES ('60', 'Dominican Republic', '+1 809 ', '', 'DO / DOM ');
INSERT INTO `adj_master_country` VALUES ('61', 'Ecuador', '+593', '', 'EC / ECU ');
INSERT INTO `adj_master_country` VALUES ('62', 'Egypt', '+20', '', 'EG / EGY ');
INSERT INTO `adj_master_country` VALUES ('63', 'El Salvador', '+503', '', 'SV / SLV ');
INSERT INTO `adj_master_country` VALUES ('64', 'Equatorial Guinea', '+240', '', 'GQ / GNQ ');
INSERT INTO `adj_master_country` VALUES ('65', 'Eritrea', '+291', '', 'ER / ERI ');
INSERT INTO `adj_master_country` VALUES ('66', 'Estonia', '+372', '', 'EE / EST ');
INSERT INTO `adj_master_country` VALUES ('67', 'Ethiopia', '+251', '', 'ET / ETH ');
INSERT INTO `adj_master_country` VALUES ('68', 'Falkland Islands', '+500', '', 'FK / FLK ');
INSERT INTO `adj_master_country` VALUES ('69', 'Faroe Islands', '+298', '', 'FO / FRO ');
INSERT INTO `adj_master_country` VALUES ('70', 'Fiji', '+679', '', 'FJ / FJI ');
INSERT INTO `adj_master_country` VALUES ('71', 'Finland', '+358', '', 'FI / FIN ');
INSERT INTO `adj_master_country` VALUES ('72', 'France', '+33', '', 'FR / FRA ');
INSERT INTO `adj_master_country` VALUES ('73', 'French Polynesia', '+689', '', 'PF / PYF ');
INSERT INTO `adj_master_country` VALUES ('74', 'Gabon', '+241', '', 'GA / GAB ');
INSERT INTO `adj_master_country` VALUES ('75', 'Gambia', '+220', '', 'GM / GMB ');
INSERT INTO `adj_master_country` VALUES ('76', 'Gaza Strip', '+970', '', '/  ');
INSERT INTO `adj_master_country` VALUES ('77', 'Georgia', '+995', '', 'GE / GEO ');
INSERT INTO `adj_master_country` VALUES ('78', 'Germany', '+49', '', 'DE / DEU ');
INSERT INTO `adj_master_country` VALUES ('79', 'Ghana', '+233', '', 'GH / GHA ');
INSERT INTO `adj_master_country` VALUES ('80', 'Gibraltar', '+350', '', 'GI / GIB ');
INSERT INTO `adj_master_country` VALUES ('81', 'Greece', '+30', '', 'GR / GRC ');
INSERT INTO `adj_master_country` VALUES ('82', 'Greenland', '+299', '', 'GL / GRL ');
INSERT INTO `adj_master_country` VALUES ('83', 'Grenada', '+1 473 ', '', 'GD / GRD ');
INSERT INTO `adj_master_country` VALUES ('84', 'Guam', '+1 671 ', '', 'GU / GUM ');
INSERT INTO `adj_master_country` VALUES ('85', 'Guatemala', '+502', '', 'GT / GTM ');
INSERT INTO `adj_master_country` VALUES ('86', 'Guinea', '+224', '', 'GN / GIN ');
INSERT INTO `adj_master_country` VALUES ('87', 'Guinea-Bissau', '+245', '', 'GW / GNB ');
INSERT INTO `adj_master_country` VALUES ('88', 'Guyana', '+592', '', 'GY / GUY ');
INSERT INTO `adj_master_country` VALUES ('89', 'Haiti', '+509', '', 'HT / HTI ');
INSERT INTO `adj_master_country` VALUES ('90', 'Holy See (Vatican City)', '+39', '', 'VA / VAT ');
INSERT INTO `adj_master_country` VALUES ('91', 'Honduras', '+504', '', 'HN / HND ');
INSERT INTO `adj_master_country` VALUES ('92', 'Hong Kong', '+852', '', 'HK / HKG ');
INSERT INTO `adj_master_country` VALUES ('93', 'Hungary', '+36', '', 'HU / HUN ');
INSERT INTO `adj_master_country` VALUES ('94', 'Iceland', '+354', '', 'IS / IS ');
INSERT INTO `adj_master_country` VALUES ('95', 'India', '+91', '', 'IN / IND ');
INSERT INTO `adj_master_country` VALUES ('96', 'Indonesia', '+62', '', 'ID / IDN ');
INSERT INTO `adj_master_country` VALUES ('97', 'Iran', '+98', '', 'IR / IRN ');
INSERT INTO `adj_master_country` VALUES ('98', 'Iraq', '+964', '', 'IQ / IRQ ');
INSERT INTO `adj_master_country` VALUES ('99', 'Ireland', '+353', '', 'IE / IRL ');
INSERT INTO `adj_master_country` VALUES ('100', 'Isle of Man', '+44', '', 'IM / IMN ');
INSERT INTO `adj_master_country` VALUES ('101', 'Israel', '+972', '', 'IL / ISR ');
INSERT INTO `adj_master_country` VALUES ('102', 'Italy', '+39', '', 'IT / ITA ');
INSERT INTO `adj_master_country` VALUES ('103', 'Ivory Coast', '+225', '', 'CI / CIV ');
INSERT INTO `adj_master_country` VALUES ('104', 'Jamaica', '+1 876 ', '', 'JM / JAM ');
INSERT INTO `adj_master_country` VALUES ('105', 'Japan', '+81', '', 'JP / JPN ');
INSERT INTO `adj_master_country` VALUES ('106', 'Jersey', '+', '', 'JE / JEY ');
INSERT INTO `adj_master_country` VALUES ('107', 'Jordan', '+962', '', 'JO / JOR ');
INSERT INTO `adj_master_country` VALUES ('108', 'Kazakhstan', '+7', '', 'KZ / KAZ ');
INSERT INTO `adj_master_country` VALUES ('109', 'Kenya', '+254', '', 'KE / KEN ');
INSERT INTO `adj_master_country` VALUES ('110', 'Kiribati', '+686', '', 'KI / KIR ');
INSERT INTO `adj_master_country` VALUES ('111', 'Kosovo', '+381', '', '/  ');
INSERT INTO `adj_master_country` VALUES ('112', 'Kuwait', '+965', '', 'KW / KWT ');
INSERT INTO `adj_master_country` VALUES ('113', 'Kyrgyzstan', '+996', '', 'KG / KGZ ');
INSERT INTO `adj_master_country` VALUES ('114', 'Laos', '+856', '', 'LA / LAO ');
INSERT INTO `adj_master_country` VALUES ('115', 'Latvia', '+371', '', 'LV / LVA ');
INSERT INTO `adj_master_country` VALUES ('116', 'Lebanon', '+961', '', 'LB / LBN ');
INSERT INTO `adj_master_country` VALUES ('117', 'Lesotho', '+266', '', 'LS / LSO ');
INSERT INTO `adj_master_country` VALUES ('118', 'Liberia', '+231', '', 'LR / LBR ');
INSERT INTO `adj_master_country` VALUES ('119', 'Libya', '+218', '', 'LY / LBY ');
INSERT INTO `adj_master_country` VALUES ('120', 'Liechtenstein', '+423', '', 'LI / LIE ');
INSERT INTO `adj_master_country` VALUES ('121', 'Lithuania', '+370', '', 'LT / LTU ');
INSERT INTO `adj_master_country` VALUES ('122', 'Luxembourg', '+352', '', 'LU / LUX ');
INSERT INTO `adj_master_country` VALUES ('123', 'Macau', '+853', '', 'MO / MAC ');
INSERT INTO `adj_master_country` VALUES ('124', 'Macedonia', '+389', '', 'MK / MKD ');
INSERT INTO `adj_master_country` VALUES ('125', 'Madagascar', '+261', '', 'MG / MDG ');
INSERT INTO `adj_master_country` VALUES ('126', 'Malawi', '+265', '', 'MW / MWI ');
INSERT INTO `adj_master_country` VALUES ('127', 'Malaysia', '+60', '', 'MY / MYS ');
INSERT INTO `adj_master_country` VALUES ('128', 'Maldives', '+960', '', 'MV / MDV ');
INSERT INTO `adj_master_country` VALUES ('129', 'Mali', '+223', '', 'ML / MLI ');
INSERT INTO `adj_master_country` VALUES ('130', 'Malta', '+356', '', 'MT / MLT ');
INSERT INTO `adj_master_country` VALUES ('131', 'Marshall Islands', '+692', '', 'MH / MHL ');
INSERT INTO `adj_master_country` VALUES ('132', 'Mauritania', '+222', '', 'MR / MRT ');
INSERT INTO `adj_master_country` VALUES ('133', 'Mauritius', '+230', '', 'MU / MUS ');
INSERT INTO `adj_master_country` VALUES ('134', 'Mayotte', '+262', '', 'YT / MYT ');
INSERT INTO `adj_master_country` VALUES ('135', 'Mexico', '+52', '', 'MX / MEX ');
INSERT INTO `adj_master_country` VALUES ('136', 'Micronesia', '+691', '', 'FM / FSM ');
INSERT INTO `adj_master_country` VALUES ('137', 'Moldova', '+373', '', 'MD / MDA ');
INSERT INTO `adj_master_country` VALUES ('138', 'Monaco', '+377', '', 'MC / MCO ');
INSERT INTO `adj_master_country` VALUES ('139', 'Mongolia', '+976', '', 'MN / MNG ');
INSERT INTO `adj_master_country` VALUES ('140', 'Montenegro', '+382', '', 'ME / MNE ');
INSERT INTO `adj_master_country` VALUES ('141', 'Montserrat', '+1 664 ', '', 'MS / MSR ');
INSERT INTO `adj_master_country` VALUES ('142', 'Morocco', '+212', '', 'MA / MAR ');
INSERT INTO `adj_master_country` VALUES ('143', 'Mozambique', '+258', '', 'MZ / MOZ ');
INSERT INTO `adj_master_country` VALUES ('144', 'Namibia', '+264', '', 'NA / NAM ');
INSERT INTO `adj_master_country` VALUES ('145', 'Nauru', '+674', '', 'NR / NRU ');
INSERT INTO `adj_master_country` VALUES ('146', 'Nepal', '+977', '', 'NP / NPL ');
INSERT INTO `adj_master_country` VALUES ('147', 'Netherlands', '+31', '', 'NL / NLD ');
INSERT INTO `adj_master_country` VALUES ('148', 'Netherlands Antilles', '+599', '', 'AN / ANT ');
INSERT INTO `adj_master_country` VALUES ('149', 'New Caledonia', '+687', '', 'NC / NCL ');
INSERT INTO `adj_master_country` VALUES ('150', 'New Zealand', '+64', '', 'NZ / NZL ');
INSERT INTO `adj_master_country` VALUES ('151', 'Nicaragua', '+505', '', 'NI / NIC ');
INSERT INTO `adj_master_country` VALUES ('152', 'Niger', '+227', '', 'NE / NER ');
INSERT INTO `adj_master_country` VALUES ('153', 'Nigeria', '+234', '', 'NG / NGA ');
INSERT INTO `adj_master_country` VALUES ('154', 'Niue', '+683', '', 'NU / NIU ');
INSERT INTO `adj_master_country` VALUES ('155', 'Norfolk Island', '+672', '', '/ NFK ');
INSERT INTO `adj_master_country` VALUES ('156', 'North Korea', '+850', '', 'KP / PRK ');
INSERT INTO `adj_master_country` VALUES ('157', 'Northern Mariana Islands', '+1 670 ', '', 'MP / MNP ');
INSERT INTO `adj_master_country` VALUES ('158', 'Norway', '+47', '', 'NO / NOR ');
INSERT INTO `adj_master_country` VALUES ('159', 'Oman', '+968', '', 'OM / OMN ');
INSERT INTO `adj_master_country` VALUES ('160', 'Pakistan', '+92', '', 'PK / PAK ');
INSERT INTO `adj_master_country` VALUES ('161', 'Palau', '+680', '', 'PW / PLW ');
INSERT INTO `adj_master_country` VALUES ('162', 'Panama', '+507', '', 'PA / PAN ');
INSERT INTO `adj_master_country` VALUES ('163', 'Papua New Guinea', '+675', '', 'PG / PNG ');
INSERT INTO `adj_master_country` VALUES ('164', 'Paraguay', '+595', '', 'PY / PRY ');
INSERT INTO `adj_master_country` VALUES ('165', 'Peru', '+51', '', 'PE / PER ');
INSERT INTO `adj_master_country` VALUES ('166', 'Philippines', '+63', '', 'PH / PHL ');
INSERT INTO `adj_master_country` VALUES ('167', 'Pitcairn Islands', '+870', '', 'PN / PCN ');
INSERT INTO `adj_master_country` VALUES ('168', 'Poland', '+48', '', 'PL / POL ');
INSERT INTO `adj_master_country` VALUES ('169', 'Portugal', '+351', '', 'PT / PRT ');
INSERT INTO `adj_master_country` VALUES ('170', 'Puerto Rico', '+1', '', 'PR / PRI ');
INSERT INTO `adj_master_country` VALUES ('171', 'Qatar', '+974', '', 'QA / QAT ');
INSERT INTO `adj_master_country` VALUES ('172', 'Republic of the Congo', '+242', '', 'CG / COG ');
INSERT INTO `adj_master_country` VALUES ('173', 'Romania', '+40', '', 'RO / ROU ');
INSERT INTO `adj_master_country` VALUES ('174', 'Russia', '+7', '', 'RU / RUS ');
INSERT INTO `adj_master_country` VALUES ('175', 'Rwanda', '+250', '', 'RW / RWA ');
INSERT INTO `adj_master_country` VALUES ('176', 'Saint Barthelemy', '+590', '', 'BL / BLM ');
INSERT INTO `adj_master_country` VALUES ('177', 'Saint Helena', '+290', '', 'SH / SHN ');
INSERT INTO `adj_master_country` VALUES ('178', 'Saint Kitts and Nevis', '+1 869 ', '', 'KN / KNA ');
INSERT INTO `adj_master_country` VALUES ('179', 'Saint Lucia', '+1 758 ', '', 'LC / LCA ');
INSERT INTO `adj_master_country` VALUES ('180', 'Saint Martin', '+1 599 ', '', 'MF / MAF ');
INSERT INTO `adj_master_country` VALUES ('181', 'Saint Pierre and Miquelon', '+508', '', 'PM / SPM ');
INSERT INTO `adj_master_country` VALUES ('182', 'Saint Vincent and the Grenadines', '+1 784 ', '', 'VC / VCT ');
INSERT INTO `adj_master_country` VALUES ('183', 'Samoa', '+685', '', 'WS / WSM ');
INSERT INTO `adj_master_country` VALUES ('184', 'San Marino', '+378', '', 'SM / SMR ');
INSERT INTO `adj_master_country` VALUES ('185', 'Sao Tome and Principe', '+239', '', 'ST / STP ');
INSERT INTO `adj_master_country` VALUES ('186', 'Saudi Arabia', '+966', '', 'SA / SAU ');
INSERT INTO `adj_master_country` VALUES ('187', 'Senegal', '+221', '', 'SN / SEN ');
INSERT INTO `adj_master_country` VALUES ('188', 'Serbia', '+381', '', 'RS / SRB ');
INSERT INTO `adj_master_country` VALUES ('189', 'Seychelles', '+248', '', 'SC / SYC ');
INSERT INTO `adj_master_country` VALUES ('190', 'Sierra Leone', '+232', '', 'SL / SLE ');
INSERT INTO `adj_master_country` VALUES ('191', 'Singapore', '+65', '', 'SG / SGP ');
INSERT INTO `adj_master_country` VALUES ('192', 'Slovakia', '+421', '', 'SK / SVK ');
INSERT INTO `adj_master_country` VALUES ('193', 'Slovenia', '+386', '', 'SI / SVN ');
INSERT INTO `adj_master_country` VALUES ('194', 'Solomon Islands', '+677', '', 'SB / SLB ');
INSERT INTO `adj_master_country` VALUES ('195', 'Somalia', '+252', '', 'SO / SOM ');
INSERT INTO `adj_master_country` VALUES ('196', 'South Africa', '+27', '', 'ZA / ZAF ');
INSERT INTO `adj_master_country` VALUES ('197', 'South Korea', '+82', '', 'KR / KOR ');
INSERT INTO `adj_master_country` VALUES ('198', 'Spain', '+34', '', 'ES / ESP ');
INSERT INTO `adj_master_country` VALUES ('199', 'Sri Lanka', '+94', '', 'LK / LKA ');
INSERT INTO `adj_master_country` VALUES ('200', 'Sudan', '+249', '', 'SD / SDN ');
INSERT INTO `adj_master_country` VALUES ('201', 'Suriname', '+597', '', 'SR / SUR ');
INSERT INTO `adj_master_country` VALUES ('202', 'Svalbard', '+', '', 'SJ / SJM ');
INSERT INTO `adj_master_country` VALUES ('203', 'Swaziland', '+268', '', 'SZ / SWZ ');
INSERT INTO `adj_master_country` VALUES ('204', 'Sweden', '+46', '', 'SE / SWE ');
INSERT INTO `adj_master_country` VALUES ('205', 'Switzerland', '+41', '', 'CH / CHE ');
INSERT INTO `adj_master_country` VALUES ('206', 'Syria', '+963', '', 'SY / SYR ');
INSERT INTO `adj_master_country` VALUES ('207', 'Taiwan', '+886', '', 'TW / TWN ');
INSERT INTO `adj_master_country` VALUES ('208', 'Tajikistan', '+992', '', 'TJ / TJK ');
INSERT INTO `adj_master_country` VALUES ('209', 'Tanzania', '+255', '', 'TZ / TZA ');
INSERT INTO `adj_master_country` VALUES ('210', 'Thailand', '+66', '', 'TH / THA ');
INSERT INTO `adj_master_country` VALUES ('211', 'Timor-Leste', '+670', '', 'TL / TLS ');
INSERT INTO `adj_master_country` VALUES ('212', 'Togo', '+228', '', 'TG / TGO ');
INSERT INTO `adj_master_country` VALUES ('213', 'Tokelau', '+690', '', 'TK / TKL ');
INSERT INTO `adj_master_country` VALUES ('214', 'Tonga', '+676', '', 'TO / TON ');
INSERT INTO `adj_master_country` VALUES ('215', 'Trinidad and Tobago', '+1 868 ', '', 'TT / TTO ');
INSERT INTO `adj_master_country` VALUES ('216', 'Tunisia', '+216', '', 'TN / TUN ');
INSERT INTO `adj_master_country` VALUES ('217', 'Turkey', '+90', '', 'TR / TUR ');
INSERT INTO `adj_master_country` VALUES ('218', 'Turkmenistan', '+993', '', 'TM / TKM ');
INSERT INTO `adj_master_country` VALUES ('219', 'Turks and Caicos Islands', '+1 649 ', '', 'TC / TCA ');
INSERT INTO `adj_master_country` VALUES ('220', 'Tuvalu', '+688', '', 'TV / TUV ');
INSERT INTO `adj_master_country` VALUES ('221', 'Uganda', '+256', '', 'UG / UGA ');
INSERT INTO `adj_master_country` VALUES ('222', 'Ukraine', '+380', '', 'UA / UKR ');
INSERT INTO `adj_master_country` VALUES ('223', 'United Arab Emirates', '+971', '', 'AE / ARE ');
INSERT INTO `adj_master_country` VALUES ('224', 'United Kingdom', '+44', '', 'GB / GBR ');
INSERT INTO `adj_master_country` VALUES ('225', 'United States', '+1', '', 'US / USA ');
INSERT INTO `adj_master_country` VALUES ('226', 'Uruguay', '+598', '', 'UY / URY ');
INSERT INTO `adj_master_country` VALUES ('227', 'US Virgin Islands', '+1 340 ', '', 'VI / VIR ');
INSERT INTO `adj_master_country` VALUES ('228', 'Uzbekistan', '+998', '', 'UZ / UZB ');
INSERT INTO `adj_master_country` VALUES ('229', 'Vanuatu', '+678', '', 'VU / VUT ');
INSERT INTO `adj_master_country` VALUES ('230', 'Venezuela', '+58', '', 'VE / VEN ');
INSERT INTO `adj_master_country` VALUES ('231', 'Vietnam', '+84', '', 'VN / VNM ');
INSERT INTO `adj_master_country` VALUES ('232', 'Wallis and Futuna', '+681', '', 'WF / WLF ');
INSERT INTO `adj_master_country` VALUES ('233', 'West Bank', '+970', '', '/  ');
INSERT INTO `adj_master_country` VALUES ('234', 'Western Sahara', '+', '', 'EH / ESH ');
INSERT INTO `adj_master_country` VALUES ('235', 'Yemen', '+967', '', 'YE / YEM ');
INSERT INTO `adj_master_country` VALUES ('236', 'Zambia', '+260', '', 'ZM / ZMB ');
INSERT INTO `adj_master_country` VALUES ('237', 'Zimbabwe', '+263', '', 'ZW / ZWE ');

-- ----------------------------
-- Table structure for `adj_master_doc_type`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_doc_type`;
CREATE TABLE `adj_master_doc_type` (
  `doc_type_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `doc_type` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`doc_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_doc_type
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_master_image_dimention`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_image_dimention`;
CREATE TABLE `adj_master_image_dimention` (
  `dimention_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `dimention` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`dimention_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_image_dimention
-- ----------------------------
INSERT INTO `adj_master_image_dimention` VALUES ('1', '50X45', '');
INSERT INTO `adj_master_image_dimention` VALUES ('2', '80X45', '');
INSERT INTO `adj_master_image_dimention` VALUES ('3', '95X45', '');
INSERT INTO `adj_master_image_dimention` VALUES ('4', '130X45', '');

-- ----------------------------
-- Table structure for `adj_master_product_types`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_product_types`;
CREATE TABLE `adj_master_product_types` (
  `product_type_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`product_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_product_types
-- ----------------------------
INSERT INTO `adj_master_product_types` VALUES ('1', 'IT', '');
INSERT INTO `adj_master_product_types` VALUES ('2', 'EC', '');

-- ----------------------------
-- Table structure for `adj_master_request_status`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_request_status`;
CREATE TABLE `adj_master_request_status` (
  `request_status_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `request_status` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`request_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_request_status
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_master_sex`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_sex`;
CREATE TABLE `adj_master_sex` (
  `sex_id` int(20) NOT NULL AUTO_INCREMENT,
  `sex` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`sex_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_sex
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_master_social_sites`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_social_sites`;
CREATE TABLE `adj_master_social_sites` (
  `social_site_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `social_site` bigint(20) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`social_site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_social_sites
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_master_states`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_states`;
CREATE TABLE `adj_master_states` (
  `state_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_states
-- ----------------------------
INSERT INTO `adj_master_states` VALUES ('1', 'Andaman and Nicobar Islands', '', '95');
INSERT INTO `adj_master_states` VALUES ('2', 'Andhra Pradesh', '', '95');
INSERT INTO `adj_master_states` VALUES ('3', 'Arunachal Pradesh', '', '95');
INSERT INTO `adj_master_states` VALUES ('4', 'Assam', '', '95');
INSERT INTO `adj_master_states` VALUES ('5', 'Bihar', '', '95');
INSERT INTO `adj_master_states` VALUES ('6', 'Chandigarh', '', '95');
INSERT INTO `adj_master_states` VALUES ('7', 'Chhattisgarh', '', '95');
INSERT INTO `adj_master_states` VALUES ('8', 'Dadra and Nagar Haveli', '', '95');
INSERT INTO `adj_master_states` VALUES ('9', 'Daman and Diu', '', '95');
INSERT INTO `adj_master_states` VALUES ('10', 'Delhi', '', '95');
INSERT INTO `adj_master_states` VALUES ('11', 'Goa', '', '95');
INSERT INTO `adj_master_states` VALUES ('12', 'Gujarat', '', '95');
INSERT INTO `adj_master_states` VALUES ('13', 'Haryana', '', '95');
INSERT INTO `adj_master_states` VALUES ('14', 'Himachal Pradesh', '', '95');
INSERT INTO `adj_master_states` VALUES ('15', 'Jammu and Kashmir', '', '95');
INSERT INTO `adj_master_states` VALUES ('16', 'Jharkhand', '', '95');
INSERT INTO `adj_master_states` VALUES ('17', 'Karnataka', '', '95');
INSERT INTO `adj_master_states` VALUES ('18', 'Kerala', '', '95');
INSERT INTO `adj_master_states` VALUES ('19', 'Lakshadweep', '', '95');
INSERT INTO `adj_master_states` VALUES ('20', 'Madhya Pradesh', '', '95');
INSERT INTO `adj_master_states` VALUES ('21', 'Maharashtra', '', '95');
INSERT INTO `adj_master_states` VALUES ('22', 'Manipur', '', '95');
INSERT INTO `adj_master_states` VALUES ('23', 'Meghalaya', '', '95');
INSERT INTO `adj_master_states` VALUES ('24', 'Mizoram', '', '95');
INSERT INTO `adj_master_states` VALUES ('25', 'Nagaland', '', '95');
INSERT INTO `adj_master_states` VALUES ('26', 'Orissa', '', '95');
INSERT INTO `adj_master_states` VALUES ('27', 'Puducherry', '', '95');
INSERT INTO `adj_master_states` VALUES ('28', 'Punjab', '', '95');
INSERT INTO `adj_master_states` VALUES ('29', 'Rajasthan', '', '95');
INSERT INTO `adj_master_states` VALUES ('30', 'Sikkim', '', '95');
INSERT INTO `adj_master_states` VALUES ('31', 'Tamil Nadu', '', '95');
INSERT INTO `adj_master_states` VALUES ('32', 'Tripura', '', '95');
INSERT INTO `adj_master_states` VALUES ('33', 'Uttar Pradesh', '', '95');
INSERT INTO `adj_master_states` VALUES ('34', 'Uttarakhand', '', '95');
INSERT INTO `adj_master_states` VALUES ('35', 'West Bengal', '', '95');

-- ----------------------------
-- Table structure for `adj_master_user_types`
-- ----------------------------
DROP TABLE IF EXISTS `adj_master_user_types`;
CREATE TABLE `adj_master_user_types` (
  `user_type_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(255) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_master_user_types
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_products`
-- ----------------------------
DROP TABLE IF EXISTS `adj_products`;
CREATE TABLE `adj_products` (
  `product_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `brand_id` bigint(20) DEFAULT NULL,
  `product_type_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `approval_id` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_products
-- ----------------------------

-- ----------------------------
-- Table structure for `adj_site_owner`
-- ----------------------------
DROP TABLE IF EXISTS `adj_site_owner`;
CREATE TABLE `adj_site_owner` (
  `site_owner_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `zip` bigint(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `adj_email` varchar(255) DEFAULT NULL,
  `adj_password` varchar(255) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `reg_completion_status` int(11) DEFAULT '0',
  PRIMARY KEY (`site_owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_site_owner
-- ----------------------------
INSERT INTO `adj_site_owner` VALUES ('1', 'as', 'as', 'as', 'as', 'as', 'w', '4', '95', null, '9876', 'd', 'sasa@ww.com', null, null, null, null, null, null, '', '1');
INSERT INTO `adj_site_owner` VALUES ('2', 'ssd', 'dddd', 'dd', 'sd', 'sd', 'sdk', '12', '95', null, '6554', 'jkkds', 'hh@hh.com', null, null, null, null, null, null, '', '1');
INSERT INTO `adj_site_owner` VALUES ('3', 'dgh', 'mv', 'dwise', 'dd', 'dd', 'sss', '1', '95', null, 'ss', 'ddd', 'sreenath886@gmail.com', null, null, null, null, null, null, '', '1');
INSERT INTO `adj_site_owner` VALUES ('4', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '5', '1', null, 'tes', 'tes', 'tes', null, null, null, null, null, null, '', '1');
INSERT INTO `adj_site_owner` VALUES ('5', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '5', '1', null, 'tes', 'tes', 'tesx', null, null, null, null, null, null, '', '1');
INSERT INTO `adj_site_owner` VALUES ('6', 'tses', 'tes', 'tes', 'tes', 'tes', 'tes', '5', '1', null, 'tes', 'tes', 'tesxsx', null, null, null, null, null, null, '', '1');
INSERT INTO `adj_site_owner` VALUES ('7', 'djka', 'ad', 'daad', 'add', 'adda', 'dsd', '4', '95', null, 'dadds', 'dadaad', 'lsd', null, null, null, null, null, null, '', '1');
INSERT INTO `adj_site_owner` VALUES ('8', 's', 'sa', 'sa', 's', 's', 's', '3', '95', null, 's', 'as', 's', null, null, null, null, null, null, '', '1');

-- ----------------------------
-- Table structure for `adj_thumb_brand_category_mapping`
-- ----------------------------
DROP TABLE IF EXISTS `adj_thumb_brand_category_mapping`;
CREATE TABLE `adj_thumb_brand_category_mapping` (
  `brand_category_map_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `site_owner_id` bigint(20) DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `category_id` bigint(255) DEFAULT NULL,
  `thumb_name` varchar(255) DEFAULT NULL,
  `thumb_dimention_id` bigint(255) DEFAULT NULL,
  `thumb_img_url` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  `is_image_uploaded` bit(1) DEFAULT b'0',
  PRIMARY KEY (`brand_category_map_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_thumb_brand_category_mapping
-- ----------------------------
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('1', '1', '1', '1', 'sss', '4', 'uploads/thumbs/1/14.jpg', '1', '2013-10-02 01:26:00', '1', '2013-10-01 23:55:29', '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('2', '1', '1', '2', 'sss', '4', 'uploads/thumbs/1/14.jpg', '1', '2013-10-02 01:26:00', '1', '2013-10-01 23:55:29', '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('3', '2', '2', '1', 'dd', '2', 'uploads/thumbs/2/2.jpg', '1', '2013-10-02 01:47:34', '1', '2008-06-17 00:07:15', '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('4', '2', '2', '4', 'dd', '2', 'uploads/thumbs/2/2.jpg', '1', '2013-10-02 01:47:34', '1', '2008-06-17 00:07:15', '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('5', '3', '3', '2', null, null, null, '1', '2008-06-17 00:16:48', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('6', '3', '3', '3', null, null, null, '1', '2008-06-17 00:16:48', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('7', '3', '3', '2', null, null, null, '1', '2008-06-17 00:24:00', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('8', '3', '3', '3', null, null, null, '1', '2008-06-17 00:24:00', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('9', '3', '1', '3', 'thumb_names', '1', '1', '1', '2013-10-02 18:24:11', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('10', '3', '1', '6', 'thumb_names', '1', '1', '1', '2013-10-02 18:24:11', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('11', '1', '2', '4', null, null, null, '1', '2013-10-02 18:29:29', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('12', '1', '2', '3', null, null, null, '1', '2013-10-02 18:29:29', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('13', '2', '4', '8', null, null, null, '1', '2013-10-02 20:23:14', null, null, '', '');
INSERT INTO `adj_thumb_brand_category_mapping` VALUES ('14', '2', '4', '7', null, null, null, '1', '2013-10-02 20:23:14', null, null, '', '');

-- ----------------------------
-- Table structure for `adj_users`
-- ----------------------------
DROP TABLE IF EXISTS `adj_users`;
CREATE TABLE `adj_users` (
  `adj_user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `sex_id` int(11) DEFAULT NULL,
  `adj_email` varchar(255) DEFAULT NULL,
  `adj_pwd` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) unsigned zerofill DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`adj_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_users
-- ----------------------------
INSERT INTO `adj_users` VALUES ('1', 'admin', 'k', null, 'admin', '202cb962ac59075b964b07152d234b70', '7795521522', '1', '1', '2013-08-22 17:13:47', '00000000000000000001', '2013-09-05 11:01:19', '');

-- ----------------------------
-- Table structure for `adj_videos`
-- ----------------------------
DROP TABLE IF EXISTS `adj_videos`;
CREATE TABLE `adj_videos` (
  `video_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `embedded_code` text,
  `created_by` bigint(20) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adj_videos
-- ----------------------------

-- ----------------------------
-- Procedure structure for `adj_admin_update_password`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_admin_update_password`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_admin_update_password`(user_id BIGINT,oldpassword VARCHAR(100),password_val VARCHAR(100))
BEGIN
-- user_id BIGINT,oldpassword VARCHAR(100),password_val VARCHAR(100)
DECLARE status_text VARCHAR(100);
DECLARE status_value bigint DEFAULT 0;
DECLARE pw_id bigint DEFAULT 0;

-- '1','1234','1234'
-- call adj_admin_update_password(1,'1234','1234');

 IF ( SELECT EXISTS (SELECT adj_user_id from adj_users WHERE adj_user_id=user_id AND adj_pwd LIKE md5(oldpassword) ) ) THEN 

			UPDATE adj_users SET adj_pwd=md5(password_val) ,updated_on=NOW(),updated_by=user_id WHERE adj_user_id=user_id;
			
					IF ROW_COUNT() >0 then
							SET status_value = 1;
					SET status_text='Updated Successfully';
							SELECT status_value,status_text;
					ELSE		
							SET status_value = 0;
							SET status_text='Updated Failed';
							SELECT status_value,status_text;
					END IF;	
			
       
    ELSE
							SET status_value = 2;
							SET status_text='Old Password Not Matching';
							SELECT status_value,status_text;
    END IF; 

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_delete_image_photo_gallery`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_delete_image_photo_gallery`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_delete_image_photo_gallery`(site_owner_ids BIGINT,brand_ids BIGINT,image_map_ids VARCHAR(100),user_id BIGINT)
BEGIN
-- adj_delete_image_photo_gallery
-- image_map_ids VARCHAR(100),user_id BIGINT
DECLARE mapping_ids bigint DEFAULT 0;
DECLARE img_urls VARCHAR(256) DEFAULT '';
DECLARE x INT; 
    DECLARE y INT; 
    SET y = 1;  
		SET x = 0;
-- 1,1,'1,2,3,6',1;
-- call adj_delete_image_photo_gallery('1,2,3,6',1);
	SELECT LENGTH(image_map_ids) - LENGTH(REPLACE(image_map_ids, ',', '')) INTO @noOfCommas; 
	
										IF  @noOfCommas = 0 	THEN 
												IF (SELECT EXISTS (SELECT 1 from adj_images WHERE  image_id =image_map_ids) ) THEN 
													
													SET mapping_ids=(SELECT image_id from adj_images WHERE image_id =image_map_ids);
													
													UPDATE adj_images SET is_active=0,updated_on=NOW(),updated_by=user_id	where image_id =image_map_ids;
												
													IF ROW_COUNT() >0 then
														SELECT 1 as status_value,'Deleleted Successfully' AS status_text;
													ELSE		
															SELECT 0 as status_value,'Deletion Failed' AS status_text;
													END IF;	
												END IF;

										ELSE 
													SET x = @noOfCommas + 1; 
													WHILE y  <=  x DO 
															SELECT REPLACE(SUBSTRING(SUBSTRING_INDEX(image_map_ids, ',', y),LENGTH(SUBSTRING_INDEX(image_map_ids, ',', y -1)) + 1), ',', '')INTO @cat_ids; 
														
															IF (SELECT EXISTS (SELECT 1 from adj_images WHERE image_id =@cat_ids) ) THEN 
															
																SET mapping_ids=(SELECT brand_category_map_id from adj_images WHERE image_id =@cat_ids);
																
																UPDATE adj_images SET is_active=0,updated_on=NOW(),updated_by=user_id	where image_id =@cat_ids;
																
												
															END IF;
														 SET  y = y + 1; 
													END WHILE; 

												IF ROW_COUNT() >0 then
													SELECT 1 as status_value,'Deleleted Successfully' AS status_text;
												ELSE		
														SELECT 0 as status_value,'Deletion Failed' AS status_text;
												END IF;	
									END IF; 

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_delete_thumb_photo_gallery`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_delete_thumb_photo_gallery`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_delete_thumb_photo_gallery`(site_owner_ids BIGINT,brand_ids BIGINT,brand_cat_map_ids VARCHAR(100),user_id BIGINT)
BEGIN
-- adj_delete_thumb_photo_gallery
-- brand_cat_map_ids VARCHAR(100),user_id BIGINT
DECLARE mapping_ids bigint DEFAULT 0;
DECLARE img_urls VARCHAR(256) DEFAULT '';
DECLARE x INT; 
    DECLARE y INT; 
    SET y = 1;  
		SET x = 0;
-- '1,2,3,6',1;
-- call adj_delete_thumb_photo_gallery('1,2,3,6',1);
	SELECT LENGTH(brand_cat_map_ids) - LENGTH(REPLACE(brand_cat_map_ids, ',', '')) INTO @noOfCommas; 
	
										IF  @noOfCommas = 0 	THEN 
												IF (SELECT EXISTS (SELECT 1 from adj_thumb_brand_category_mapping WHERE  brand_category_map_id =brand_cat_map_ids) ) THEN 
													
													SET mapping_ids=(SELECT brand_category_map_id from adj_thumb_brand_category_mapping WHERE brand_category_map_id =brand_cat_map_ids);
													
													UPDATE adj_thumb_brand_category_mapping SET is_active=0,updated_on=NOW(),updated_by=user_id	where brand_category_map_id =brand_cat_map_ids;
												
													IF ROW_COUNT() >0 then
														SELECT 1 as status_value,'Deleleted Successfully' AS status_text;
													ELSE		
															SELECT 0 as status_value,'Deletion Failed' AS status_text;
													END IF;	
												END IF;

										ELSE 
													SET x = @noOfCommas + 1; 
													WHILE y  <=  x DO 
															SELECT REPLACE(SUBSTRING(SUBSTRING_INDEX(brand_cat_map_ids, ',', y),LENGTH(SUBSTRING_INDEX(brand_cat_map_ids, ',', y -1)) + 1), ',', '')INTO @cat_ids; 
														
															IF (SELECT EXISTS (SELECT 1 from adj_thumb_brand_category_mapping WHERE brand_category_map_id =@cat_ids) ) THEN 
															
																SET mapping_ids=(SELECT brand_category_map_id from adj_thumb_brand_category_mapping WHERE brand_category_map_id =@cat_ids);
																
																UPDATE adj_thumb_brand_category_mapping SET is_active=0,updated_on=NOW(),updated_by=user_id	where brand_category_map_id =@cat_ids;
																
												
															END IF;
														 SET  y = y + 1; 
													END WHILE; 

												IF ROW_COUNT() >0 then
													SELECT 1 as status_value,'Deleleted Successfully' AS status_text;
												ELSE		
														SELECT 0 as status_value,'Deletion Failed' AS status_text;
												END IF;	
									END IF; 

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_get_brand_category_name`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_get_brand_category_name`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_get_brand_category_name`(owner_id  BIGINT,b_id  BIGINT)
BEGIN

-- '1','1'
if(b_id>0) THEN
SELECT d.id,d.b_category_name,
CASE WHEN d.id IN (SELECT c.category_id  from adj_thumb_brand_category_mapping c LEFT JOIN adj_master_business_category b ON b.id=c.category_id WHERE c.site_owner_id=owner_id   AND c.brand_id=b_id and c.is_active=1
) THEN 0 ELSE 1 END AS check_val
 from adj_master_business_category d;

ELSE

				SELECT c.id ,c.b_category_name,1 as check_val from adj_master_business_category c  where c.is_active=1;
END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_get_brand_name`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_get_brand_name`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_get_brand_name`(owner_id  BIGINT)
BEGIN
if(owner_id>0) THEN
		SELECT b.brand_id,b.brand_name from adj_brands b WHERE b.site_owner_id=owner_id AND b.is_active=1;
ELSE

		SELECT b.brand_id,b.brand_name from adj_brands b WHERE b.is_active=1;
END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_get_images_gallery`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_get_images_gallery`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_get_images_gallery`(owner_id BIGINT,brand_ids BIGINT,category_ids BIGINT)
BEGIN
-- '3','1','2'
DECLARE brand_category_map_id bigint DEFAULT 0;

if(owner_id=0 )then

SELECT c.image_id,c.site_owner_id,c.brand_id,c.category_id,c.image_url FROM adj_images c WHERE  c.is_active=1;
ELSEIF(owner_id>0 AND brand_ids=0 AND category_ids=0) THEN
SELECT c.image_id,c.site_owner_id,c.brand_id,c.category_id,c.image_url FROM adj_images c WHERE c.site_owner_id=owner_id  AND c.is_active=1;

ELSEIF(owner_id>0 AND brand_ids>0 AND category_ids=0) THEN
SELECT c.image_id,c.site_owner_id,c.brand_id,c.category_id,c.image_url FROM adj_images c WHERE c.site_owner_id=owner_id AND c.brand_id=brand_ids AND c.is_active=1;
ELSE
-- SET brand_category_map_id = SELECT d.brand_category_map_id FROM adj_thumb_brand_category_mapping d WHERE d.site_owner_id=owner_id AND d.brand_id=brand_ids AND d.category_id=category_ids AND d.is_active=1;

SELECT c.image_id,c.site_owner_id,c.brand_id,c.category_id,c.image_url FROM adj_images c WHERE c.site_owner_id=owner_id AND c.brand_id=brand_ids AND c.category_id=category_ids AND c.is_active=1;
END IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_get_master_categories`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_get_master_categories`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_get_master_categories`(category_ids Bigint)
BEGIN
	
select id,b_category_name,is_active from adj_master_business_category WHERE is_active=1 ;



END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_get_thambnails`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_get_thambnails`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_get_thambnails`(owner_id BIGINT,brand_ids BIGINT,category_ids BIGINT)
BEGIN
-- '2','2','1'
if(owner_id=0 )then
SELECT c.brand_category_map_id,c.site_owner_id,c.brand_id,c.category_id,c.thumb_img_url FROM adj_thumb_brand_category_mapping c WHERE  c.is_active=1 AND c.is_image_uploaded=1;
ELSEIF(owner_id>0 AND brand_ids=0 AND category_ids=0) THEN
SELECT c.brand_category_map_id,c.site_owner_id,c.brand_id,c.category_id,c.thumb_img_url FROM adj_thumb_brand_category_mapping c WHERE c.site_owner_id=owner_id  AND c.is_active=1 AND c.is_image_uploaded=1;

ELSEIF(owner_id>0 AND brand_ids>0 AND category_ids=0) THEN
SELECT c.brand_category_map_id,c.site_owner_id,c.brand_id,c.category_id,c.thumb_img_url FROM adj_thumb_brand_category_mapping c WHERE c.site_owner_id=owner_id AND c.brand_id=brand_ids AND c.is_active=1 AND c.is_image_uploaded=1;
ELSE
SELECT c.brand_category_map_id,c.site_owner_id,c.brand_id,c.category_id,c.thumb_img_url FROM adj_thumb_brand_category_mapping c WHERE c.site_owner_id=owner_id AND c.brand_id=brand_ids AND c.category_id=category_ids AND c.is_active=1 AND c.is_image_uploaded=1;
END IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_get_thumb_related_images`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_get_thumb_related_images`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_get_thumb_related_images`(b_category_map_id BIGINT)
BEGIN
-- '3','1','2'
select i.image_id,i.image_url from adj_images i WHERE i.brand_category_map_id=b_category_map_id;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_insert_images`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_insert_images`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_insert_images`(site_owner_ids BIGINT,brand_ids BIGINT,category_ids VARCHAR(100),image_names VARCHAR(100),image_dimention_ids BIGINT,rediarect_urls VARCHAR(100),is_follows BIGINT,social_site_ids BIGINT,link_urls VARCHAR(100),image_urls VARCHAR(100),user_id BIGINT)
BEGIN
#Routine body goes here...
-- site_owner_ids BIGINT,brand_ids BIGINT,category_ids VARCHAR(100),image_names VARCHAR(100),image_dimention_ids BIGINT,rediarect_urls VARCHAR(100),is_follows BIGINT,social_site_ids BIGINT,link_urls VARCHAR(100),image_urls VARCHAR(100),user_id BIGINT
-- 1,2,'1,2','img name',1,'url',0,1,'ssss','uploads/vlcsnap-2012-09-16-21h25m41s81.png',1;
DECLARE x INT;
DECLARE y INT;
DECLARE map_id INT;
SET y = 1;
SET x = 0;
SELECT LENGTH(category_ids) - LENGTH(REPLACE(category_ids, ',', '')) INTO @noOfCommas;

IF @noOfCommas = 0 THEN
SELECT brand_category_map_id FROM adj_thumb_brand_category_mapping WHERE site_owner_id=site_owner_ids AND brand_id=brand_ids AND category_id=category_ids INTO map_id;

INSERT INTO adj_images (site_owner_id,brand_id,category_id,image_name,image_dimention_id,rediarect_url,is_follow,social_site_id,link_url,image_url,created_by,created_on,is_active,brand_category_map_id)
VALUES(site_owner_ids,brand_ids,category_ids,image_names,image_dimention_ids,rediarect_urls,is_follows,social_site_ids,link_urls,image_urls,user_id,NOW(),1,map_id);
ELSE
SET x = @noOfCommas + 1;
WHILE y <= x DO
SELECT REPLACE(SUBSTRING(SUBSTRING_INDEX(category_ids, ',', y),LENGTH(SUBSTRING_INDEX(category_ids, ',', y -1)) + 1), ',', '')INTO @cat_ids;

SELECT brand_category_map_id FROM adj_thumb_brand_category_mapping WHERE site_owner_id=site_owner_ids AND brand_id=brand_ids AND category_id=@cat_ids INTO map_id;

INSERT INTO adj_images (site_owner_id,brand_id,category_id,image_name,image_dimention_id,rediarect_url,is_follow,social_site_id,link_url,image_url,created_by,created_on,is_active,brand_category_map_id)
VALUES(site_owner_ids,brand_ids,@cat_ids,image_names,image_dimention_ids,rediarect_urls,is_follows,social_site_ids,link_urls,image_urls,user_id,NOW(),1,map_id);
SET y = y + 1;
END WHILE;
END IF;
SELECT 1 as status_value,'Inserted Successfully' AS status_text;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_insert_master_categories`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_insert_master_categories`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_insert_master_categories`(category_ids BIGINT,category_val VARCHAR(100),parent_id_val  BIGINT,is_active_value BIGINT)
BEGIN
-- category_ids BIGINT,category_val VARCHAR(100),parent_id_val  BIGINT,is_active_value BIGINT
-- 0,'New Category',1,1 
IF(category_ids = 0) THEN
			IF (SELECT EXISTS (SELECT 1 FROM adj_master_business_category WHERE b_category_name LIKE category_val AND is_active=1) ) THEN 
															
						SELECT 0 as status_value,'Category Already Exists' AS status_text;

			ELSE
		
						INSERT INTO adj_master_business_category (b_category_name,is_active) VALUES(category_val,is_active_value);

										IF( LAST_INSERT_ID() > 0) THEN
											SELECT 1 as status_value,'Category Inserted Succesfully' AS status_text;
										ELSE
											SELECT 0 as status_value,'Category Insertion Failed' AS status_text;
										END IF;
			END IF;

ELSE
			IF (SELECT EXISTS(SELECT 1 FROM adj_master_business_category WHERE b_category_name LIKE category_val AND id = category_ids)) THEN
						
					IF (is_active_value = 0) THEN

								UPDATE adj_master_business_category SET b_category_name = category_val,is_active = is_active_value	WHERE id = category_ids;

								SELECT 1 as status_value,'Category Deactivated Successfully' AS status_text;

					END IF;
				
					IF (is_active_value = 1) THEN

									UPDATE adj_master_business_category SET b_category_name = category_val,is_active = is_active_value	WHERE id = category_ids;

								SELECT 1 as status_value,'Category Activated Successfully' AS status_text;
					END IF;
					
			ELSE

					IF (SELECT EXISTS(SELECT 1 FROM adj_master_business_category WHERE b_category_name LIKE category_val AND id<>category_ids)) THEN
								SELECT 1 as status_value,'Category Already Exists' AS status_text;
					ELSE

									UPDATE adj_master_business_category SET b_category_name = category_val,is_active = is_active_value	WHERE id = category_ids;
									SELECT 1 as status_value,'Category Succesfully Updated' AS status_text;
					END IF;

		END IF;
END IF;	

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_insert_thumb_brand_category_mapping`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_insert_thumb_brand_category_mapping`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_insert_thumb_brand_category_mapping`(user_id BIGINT,site_owner_ids BIGINT,brand_ids BIGINT,brand_names VARCHAR(100),category_ids VARCHAR(100),thumb_names VARCHAR(100),thumb_dimention_ids BIGINT,chk_value BIGINT,product_type_ids BIGINT,thumb_img_urls VARCHAR(100))
BEGIN
-- user_id BIGINT,site_owner_ids BIGINT,brand_ids BIGINT,brand_names VARCHAR(100),category_ids VARCHAR(100),thumb_names VARCHAR(100),thumb_dimention_ids BIGINT,chk_value BIGINT,product_type_ids BIGINT,thumb_img_urls VARCHAR(100)
DECLARE brand_id_val bigint DEFAULT 0;
DECLARE mapping_ids bigint DEFAULT 0;
DECLARE chk_bit bigint DEFAULT 0;
DECLARE x INT; 
    DECLARE y INT; 
    SET y = 1;  
		SET x = 0;
-- 1,1,1,'xxx','1,2,3,6','thumb_names',1,'thumb_img_urls',0,1;
-- call adj_insert_brand_name(1,1,1,'xxx','1,2,3,6','thumb_names',1,'thumb_img_urls',0,1);
	SELECT LENGTH(category_ids) - LENGTH(REPLACE(category_ids, ',', '')) INTO @noOfCommas; 
		IF(chk_value=1) THEN
							IF (SELECT EXISTS (SELECT 1 from adj_brands WHERE brand_name like brand_names AND site_owner_id =site_owner_ids AND product_type_id=product_type_ids) ) THEN 
										
									SET brand_id_val=(SELECT brand_id from adj_brands WHERE brand_name like brand_names AND site_owner_id =site_owner_ids AND product_type_id=product_type_ids);
											-- SELECT 2 as status_value,'Brand Name Already Exists' AS status_text,brand_id_val;
							ELSE
									INSERT INTO adj_brands (brand_name,site_owner_id,product_type_id,created_by,created_on,is_active) 
																	VALUES(brand_names,site_owner_ids,product_type_ids,user_id,NOW(),1);
									
									SET brand_id_val= LAST_INSERT_ID();	

						END IF;
		ELSE
								SET brand_id_val=brand_ids;
		END IF;
		IF (brand_id_val >0) then
										IF  @noOfCommas = 0 	THEN 
												IF (SELECT EXISTS (SELECT 1 from adj_thumb_brand_category_mapping WHERE site_owner_id=site_owner_ids AND brand_id=brand_id_val AND category_id =category_ids) ) THEN 
													
													SET mapping_ids=(SELECT brand_category_map_id from adj_thumb_brand_category_mapping WHERE site_owner_id=site_owner_ids AND brand_id=brand_id_val AND category_id =category_ids);
													
													UPDATE adj_thumb_brand_category_mapping SET thumb_name=thumb_names,
													thumb_dimention_id=thumb_dimention_ids,thumb_img_url=thumb_img_urls,updated_by=user_id,updated_on=now(),is_active=1,is_image_uploaded=1
													where brand_category_map_id=mapping_ids;
												ELSE

													INSERT INTO adj_thumb_brand_category_mapping (site_owner_id,brand_id,category_id,thumb_name,thumb_dimention_id,thumb_img_url,created_by,created_on,is_active,is_image_uploaded) 
																VALUES(site_owner_ids,brand_id_val,category_ids,thumb_names,thumb_dimention_ids,thumb_img_urls,user_id,NOW(),1,1);
													SET chk_bit=1;
												END IF;
										ELSE 
													SET x = @noOfCommas + 1; 
													WHILE y  <=  x DO 
														 SELECT REPLACE(SUBSTRING(SUBSTRING_INDEX(category_ids, ',', y),LENGTH(SUBSTRING_INDEX(category_ids, ',', y -1)) + 1), ',', '')INTO @cat_ids; 
															
															IF (SELECT EXISTS (SELECT 1 from adj_thumb_brand_category_mapping WHERE site_owner_id=site_owner_ids AND brand_id=brand_id_val AND category_id =@cat_ids) ) THEN 
															
																SET mapping_ids=(SELECT brand_category_map_id from adj_thumb_brand_category_mapping WHERE site_owner_id=site_owner_ids AND brand_id=brand_id_val AND category_id =@cat_ids);
																
																UPDATE adj_thumb_brand_category_mapping SET thumb_name=thumb_names,
																thumb_dimention_id=thumb_dimention_ids,thumb_img_url=thumb_img_urls,updated_by=user_id,updated_on=now(),is_active=1,is_image_uploaded=1
																where brand_category_map_id=mapping_ids;
	
															ELSE

																INSERT INTO adj_thumb_brand_category_mapping (site_owner_id,brand_id,category_id,thumb_name,thumb_dimention_id,thumb_img_url,created_by,created_on,is_active,is_image_uploaded) 
																VALUES(site_owner_ids,brand_id_val,@cat_ids,thumb_names,thumb_dimention_ids,thumb_img_urls,user_id,NOW(),1,1);
															SET chk_bit=1;
															END IF;
														 SET  y = y + 1; 
													END WHILE; 
									END IF; 
								IF (chk_bit=1) THEN
									SELECT 1 as status_value,'Inserted Successfully' AS status_text,brand_id_val;
								ELSE
										SELECT 1 as status_value,'Updated Successfully' AS status_text,brand_id_val;
								END IF;
								
			ELSE	
									SELECT 0 as status_value,'Insertion Failed' AS status_text,brand_id_val;
			END IF;	
		
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_master_business_category_get`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_master_business_category_get`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_master_business_category_get`()
BEGIN
	
select b.id,b.b_category_name from adj_master_business_category b where is_active=1;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_master_image_dimension`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_master_image_dimension`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_master_image_dimension`()
BEGIN
	
select dimention_id,dimention  from adj_master_image_dimention where is_active=1;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `adj_site_owner_registeration`
-- ----------------------------
DROP PROCEDURE IF EXISTS `adj_site_owner_registeration`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `adj_site_owner_registeration`(f_name VARCHAR(100) , l_name  VARCHAR(100),c_name VARCHAR(100) , b_category  VARCHAR(100),web VARCHAR(100) , brand_names VARCHAR(100),address1  VARCHAR(100),house_name VARCHAR(100) ,country BIGINT,state BIGINT,city VARCHAR(100) ,email VARCHAR(100) ,phone VARCHAR(100),reg_status BIGINT,owner_id BIGINT)
BEGIN

DECLARE b_id bigint DEFAULT 0;
-- DECLARE owner_id bigint DEFAULT 0;

IF(owner_id=0)THEN

 IF ( SELECT EXISTS (SELECT site_owner_id from adj_site_owner WHERE adj_email like email) ) THEN 
       SELECT b_id,owner_id;
       
    ELSE
INSERT INTO adj_site_owner (first_name,last_name,company_name,website,address1,address2,country_id,state_id,city,adj_email,phone,reg_completion_status,is_active) VALUES
 (f_name,l_name,c_name,web,address1,house_name,country,state,city,email,phone,reg_status,1);
 
SET owner_id = LAST_INSERT_ID();
        INSERT INTO adj_brands (brand_name,site_owner_id,product_type_id,created_by,created_on,is_active) VALUES (brand_names,owner_id,0,1,now(),1);
SET b_id = LAST_INSERT_ID();


				SELECT b_id,owner_id;
  
    END IF; 
ELSE
UPDATE adj_site_owner o SET
			 o.first_name=f_name,
       o.last_name=l_name
			where o.site_owner_id=owner_id AND o.is_active=1 ;
SELECT b_id,owner_id;
end IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for `sample_mysql`
-- ----------------------------
DROP PROCEDURE IF EXISTS `sample_mysql`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sample_mysql`(user_id BIGINT,f_name VARCHAR(100) , l_name  VARCHAR(100), sex INT,dob DATE,age BIGINT,email  VARCHAR(100),mobile BIGINT,phone BIGINT,add1  VARCHAR(100),add2  VARCHAR(100),place  VARCHAR(100),state_id BIGINT,country_id BIGINT,user_type BIGINT,is_active INT)
BEGIN
	
	IF(is_active=1)THEN

		IF(user_id=0)THEN

				INSERT INTO adj_users(first_name,last_name,sex_id,dob,age,email,mobile,phone,add1,add2,place,state_id,country_id,user_type,created_on,is_active)
				VALUES(f_name,l_name,sex_id,dob,age,email,mobile,phone,add1,add2,place,state_id,country_id,user_type,NOW(),1);
				
				IF (ROW_COUNT()>0)THEN
					SELECT 1 as status_value,'User Details Inserted Successfully' as status_text, LAST_INSERT_ID() as id;
				ELSE
					SELECT 0 as status_value,'User Details Insertion Failed' as status_text;
				END IF;

		ELSE
		
				UPDATE adj_users
				SET first_name=COALESCE(`f_name`,first_name),last_name=COALESCE(`l_name`,last_name),
						sex_id=COALESCE(`sex`,sex_id),dob=COALESCE(`dob`,dob),
						age=COALESCE(`age`,age),email=COALESCE(`email`,email),
						mobile=COALESCE(`mobile`,mobile),phone=COALESCE(`phone`,phone),
						add1=COALESCE(`add1`,add1),add2=COALESCE(`add2`,add2),
						place=COALESCE(`place`,place),state_id=COALESCE(`state_id`,state_id),
						country_id=COALESCE(`country_id`,country_id),user_type=COALESCE(`user_type`,user_type),
						updated_on=NOW()
				WHERE user_id=`user_id`
				AND is_active=1;
	
				IF (ROW_COUNT()>0)THEN
					SELECT 1 as status_value,'User Details Updated Successfully' as status_text;
				ELSE
					SELECT 0 as status_value,'User Details Updation Failed' as status_text;
				END IF;

		END IF;

	ELSE
				UPDATE adj_users
				SET is_active=0
				WHERE user_id=`user_id`;
	
				IF (ROW_COUNT()>0)THEN
					SELECT 1 as status_value,'User Deleted Successfully' as status_text;
				ELSE
					SELECT 0 as status_value,'User Deletion Failed' as status_text;
				END IF;
	END IF;

END
;;
DELIMITER ;
