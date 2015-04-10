/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : kt_cfc

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-12-21 02:03:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cooking_methods
-- ----------------------------
DROP TABLE IF EXISTS `cooking_methods`;
CREATE TABLE `cooking_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_detail_id` int(10) unsigned DEFAULT NULL,
  `method_number` int(11) DEFAULT NULL,
  `instruction` text COLLATE utf8_unicode_ci,
  `img_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mimetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cooking_methods` (`recipe_detail_id`),
  CONSTRAINT `cfc_cooking_methods_ibfk_1` FOREIGN KEY (`recipe_detail_id`) REFERENCES `recipe_details` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cooking_methods
-- ----------------------------
INSERT INTO `cooking_methods` VALUES ('1', '1', '1', 'Grass carp, cut off the scales to clean insides.', 'step1-0.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '10442');
INSERT INTO `cooking_methods` VALUES ('2', '1', '2', 'To cut off the head for the tail and fins.', 'step2-0.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '10712');
INSERT INTO `cooking_methods` VALUES ('3', '1', '3', 'Put the fish upright, with a knife in the back row, convenient take fish.', 'step3-0.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '8351');
INSERT INTO `cooking_methods` VALUES ('4', '1', '4', 'Separate the fish and fish bones.', 'step4.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '9065');
INSERT INTO `cooking_methods` VALUES ('5', '1', '5', 'One by one piece of fish fillet into thin slices with a knife.', 'step5.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '8092');
INSERT INTO `cooking_methods` VALUES ('6', '1', '6', 'Fishbone cut piece of standby.', 'step6.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '8448');
INSERT INTO `cooking_methods` VALUES ('7', '1', '7', 'Fish head split and set aside.', 'step7.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '10610');
INSERT INTO `cooking_methods` VALUES ('8', '1', '8', 'Prepares to garlic, pepper, Chinese prickly ash, and all kinds of dry red chili.', 'step8.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '9892');
INSERT INTO `cooking_methods` VALUES ('9', '1', '9', 'Onions knotted. Set aside.', 'step9.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '7260');
INSERT INTO `cooking_methods` VALUES ('10', '1', '10', 'Wash yellow bean sprouts and set aside.', 'step10.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '9978');
INSERT INTO `cooking_methods` VALUES ('11', '1', '11', 'Fish fillet, add a little cooking wine, salt, egg whites and a little starch, mix well preserved up to standby.', 'step11.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '10469');
INSERT INTO `cooking_methods` VALUES ('12', '1', '12', 'Fishbone and head also add cooking wine, egg white and starch mix.', 'step12.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '11320');
INSERT INTO `cooking_methods` VALUES ('13', '1', '13', 'Frying pan with oil, stir-fry soybean sprout to break, add a little salt.', 'step13.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '12653');
INSERT INTO `cooking_methods` VALUES ('14', '1', '14', 'Put the cooked bean sprouts in a container for later use.', 'step14.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '14164');
INSERT INTO `cooking_methods` VALUES ('15', '1', '15', 'Put oil frying pan, add illicium verum, Chinese prickly ash, and hemp pepper Fried sweet.', 'step15.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '11262');
INSERT INTO `cooking_methods` VALUES ('16', '1', '16', 'The Fried peppercorns and more than half of hemp pepper out of standby.', 'step16.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '11948');
INSERT INTO `cooking_methods` VALUES ('17', '1', '17', 'In the dry red pepper fry fragrant.', 'step17.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '11233');
INSERT INTO `cooking_methods` VALUES ('18', '1', '18', 'Put In a broad bean paste, fry out of the red oil.', 'step18.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '12105');
INSERT INTO `cooking_methods` VALUES ('19', '1', '19', 'Add broth or clear water, at the same time put the dozen shallot.', 'step19.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '12343');
INSERT INTO `cooking_methods` VALUES ('20', '1', '20', 'Put the fish head and bones to boil.', 'step20.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '13774');
INSERT INTO `cooking_methods` VALUES ('21', '1', '21', 'This time, will be chopped garlic standby, will just Fried sweet Chinese prickly ash rolling ground.', 'step21.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '7256');
INSERT INTO `cooking_methods` VALUES ('22', '1', '22', 'Waiting for boiled, use chopsticks to fillet into pot.', 'step22.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '13507');
INSERT INTO `cooking_methods` VALUES ('23', '1', '23', 'Put the cooked fish fillet into containers of yellow bean sprouts, sprinkle with minced garlic and prickly ash crushed.', 'step23.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '12010');
INSERT INTO `cooking_methods` VALUES ('24', '1', '24', 'The other in a pan, add oil, put dry red pepper, pepper fry out fragrance after turn off the fire.', 'step24.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '11854');
INSERT INTO `cooking_methods` VALUES ('25', '1', '25', 'Put the burn good heat oil and add in chopped garlic and Chinese prickly ash, chili, serve immediately.', 'step25.jpg', 'uploads\\cooking_method\\img_file', 'image/pjpeg', '11210');

-- ----------------------------
-- Table structure for ingredient_details
-- ----------------------------
DROP TABLE IF EXISTS `ingredient_details`;
CREATE TABLE `ingredient_details` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ingredient_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingredient_description` text COLLATE utf8_unicode_ci,
  `ingredient_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mimetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ingredient_details
-- ----------------------------
INSERT INTO `ingredient_details` VALUES ('1', 'grass carp', '1. The grass carp are rich in unsaturated fatty acid, good for the blood circulation, is a good food for cardiovascular patients. \r\n2. Grass carp are rich in selenium, the effect of regular consumption has anti-aging, raise colour, but also to the tumor has a certain control effect; \r\n3. for thin body, loss of appetite, tender grass fish and not greasy, can appetizing, tonic.', 'meat', 'grass_carp.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '2726');
INSERT INTO `ingredient_details` VALUES ('2', 'soybean sprouts', 'Yellow bean sprouts is a kind of nutritious, delicious vegetables, is the source of more protein and vitamin.', 'vegetable', 'soybean_sprouts.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '4258');
INSERT INTO `ingredient_details` VALUES ('3', 'egg white', 'egg white (especially the eggs) refers to the eggs of translucent liquid, so it is also called the egg whites, contrast with the egg yolk.', 'vegetable', 'egg_white.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '9720');
INSERT INTO `ingredient_details` VALUES ('4', 'thick broad-bean sauce', 'Soybean paste is produced by the interaction between microorganisms and complex biochemical reactions, and made out of a fermentation reddish-brown sauce, soybean and wheat flour as the main raw material, it is at the same time, according to consumer habits are different, in the production of soybean paste made up raw materials such as sesame oil, soybean oil, monosodium glutamate, pepper, and increased the variety of broad bean paste.', 'spice', 'thick_broad_bean_sauce.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '10906');
INSERT INTO `ingredient_details` VALUES ('5', 'Chinese prickly ash', 'Chinese prickly ash can in addition to various kinds of meat gamey smell; Promote saliva secretion, increase appetite; Expand blood vessels, which have the effect of lowering blood pressure.\r\n', 'pepper', 'Chinese_prickly_ash.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '11184');
INSERT INTO `ingredient_details` VALUES ('6', 'dry chilli', 'Dry chili eat mainly as a seasoning food.', 'spice', 'Dry_chili.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '147842');
INSERT INTO `ingredient_details` VALUES ('7', 'shallot', 'Chinese used to before cooking will be chopped green onion and ginger together under in the pan fry until golden brown (colloquially as \"saute\"), then the other vegetables into the pot and stir-fry.', 'vegetable', 'shallot.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '7174');
INSERT INTO `ingredient_details` VALUES ('8', 'ginger ', 'The effect of ginger has qingrejiedu, is one of the commonly used daily cooking seasoning.', 'vegetable', 'ginger.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '77678');
INSERT INTO `ingredient_details` VALUES ('9', ' garlic', 'Garlic was introduced into China from the western regions during the qin and han dynasty, the artificial cultivation of breeding, has anti-cancer effects, the public\'s like eating.', 'vegetable', 'garlic-2.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '4114');
INSERT INTO `ingredient_details` VALUES ('10', 'salt', 'Salt, also known as table salt, is one of the most important material for human survival, is also the most commonly used in cooking seasoning.', 'flavoring', 'salt-0.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '4729');
INSERT INTO `ingredient_details` VALUES ('11', 'starch', 'Starch in cooking, flavor not only plays a positive role, but also has rich nutritional value.', 'powder', 'starch.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '102882');
INSERT INTO `ingredient_details` VALUES ('12', 'colza oil', 'Colza oil is our common rapeseed oil canola oil, also known as rapeseed oil, caraway oil, is a kind of edible oil with rapeseed dregs.', 'oil', 'colza_oil.png', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '16384');
INSERT INTO `ingredient_details` VALUES ('13', 'illicium verum', 'Star anise fruit attending cold hernia, abdominal pain, waist and knee pain, cold stomach, vomiting, pain, rou GUI vagina beriberi, etc.', 'flavoring', 'illicium_verum.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '11523');
INSERT INTO `ingredient_details` VALUES ('14', 'cooking wine', 'Rice wine is specially used for cooking rice wine', 'flavoring', 'cooking_rice_wine.jpg', 'uploads\\ingredient_detail\\img_file', 'image/pjpeg', '51015');

-- ----------------------------
-- Table structure for ingredient_items
-- ----------------------------
DROP TABLE IF EXISTS `ingredient_items`;
CREATE TABLE `ingredient_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `recipe_detail_id` int(11) unsigned DEFAULT NULL,
  `ingredient_detail_id` int(11) unsigned DEFAULT NULL,
  `amount` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ingredient_items` (`recipe_detail_id`),
  KEY `FK_ingredient_id` (`ingredient_detail_id`),
  CONSTRAINT `ingredient_items_ibfk_1` FOREIGN KEY (`ingredient_detail_id`) REFERENCES `ingredient_details` (`id`) ON DELETE CASCADE,
  CONSTRAINT `ingredient_items_ibfk_2` FOREIGN KEY (`recipe_detail_id`) REFERENCES `recipe_details` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ingredient_items
-- ----------------------------
INSERT INTO `ingredient_items` VALUES ('1', '1', '1', '1000', 'gram(.g)');
INSERT INTO `ingredient_items` VALUES ('2', '1', '2', '500', 'gram(.g)');
INSERT INTO `ingredient_items` VALUES ('3', '1', '3', '2', 'egg(s)');
INSERT INTO `ingredient_items` VALUES ('4', '1', '4', '2', 'strockle');
INSERT INTO `ingredient_items` VALUES ('5', '1', '5', '50', 'gram(.g)');
INSERT INTO `ingredient_items` VALUES ('6', '1', '6', '100', 'gram(.g)');
INSERT INTO `ingredient_items` VALUES ('7', '1', '7', '2', 'shallot(s)');
INSERT INTO `ingredient_items` VALUES ('8', '1', '8', '1', 'patch');
INSERT INTO `ingredient_items` VALUES ('9', '1', '9', '1/2', 'garlic');
INSERT INTO `ingredient_items` VALUES ('10', '1', '10', 'some', 'salt');
INSERT INTO `ingredient_items` VALUES ('11', '1', '11', 'some', 'starch');
INSERT INTO `ingredient_items` VALUES ('12', '1', '12', 'some', 'colza oil');
INSERT INTO `ingredient_items` VALUES ('13', '1', '13', '4', 'verum');
INSERT INTO `ingredient_items` VALUES ('14', '1', '14', 'some', 'wine');
INSERT INTO `ingredient_items` VALUES ('16', '1', '1', '1', '1');
INSERT INTO `ingredient_items` VALUES ('18', '15', '1', '1000', 'gram(.g)');

-- ----------------------------
-- Table structure for recipe_details
-- ----------------------------
DROP TABLE IF EXISTS `recipe_details`;
CREATE TABLE `recipe_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recipe_description` text COLLATE utf8_unicode_ci,
  `recipe_category` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mimetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of recipe_details
-- ----------------------------
INSERT INTO `recipe_details` VALUES ('1', 'Spicy Fish Stew01', '\" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, actual exquisite - selected fresh raw fish, and give full play to the pepper warm effect, tomifying qi and blood, meat cooking out does not become tough, smooth taste, oil and not greasy. In addition to the both the smell of fish, and maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and not bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout the country.', 'spicy', 'Spicy_Fish_Stew.jpg', 'uploads\\recipe_detail\\img_file', 'image/pjpeg', '94767');
INSERT INTO `recipe_details` VALUES ('5', 'Spicy Fish Stew02', ' \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.', 'spicy', 'SpicyFishStew.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('6', 'Spicy Fish Stew03', ' \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.', 'spicy', 'SpicyFishStew-0.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('7', 'Spicy Fish Stew04', ' \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.', 'spicy', 'SpicyFishStew-1.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('8', 'Spicy Fish Stew05', ' \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.', 'spicy', 'SpicyFishStew-2.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('9', 'Spicy Fish Stew06', ' \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.\r\n', 'spicy', 'SpicyFishStew-3.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('10', 'Spicy Fish Stew07', ' \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.\r\n', 'spicy', 'SpicyFishStew-4.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('11', 'Spicy Fish Stew08', ' \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.', 'spicy', 'SpicyFishStew-5.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('12', 'Spicy Fish Stew09', '\r\n \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.', 'spicy', 'SpicyFishStew-6.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('13', 'Spicy Fish Stew10', '\r\n \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, \r\n\r\nactual exquisite - selected fresh raw fish, and give full play to the pepper \r\n\r\nwarm effect, tomifying qi and blood, meat cooking out does not become tough, \r\n\r\nsmooth taste, oil and not greasy. In addition to the both the smell of fish, \r\n\r\nand maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and \r\n\r\nnot bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout \r\n\r\nthe country.', 'spicy', 'SpicyFishStew-7.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');
INSERT INTO `recipe_details` VALUES ('15', 'spicy fish stew11 ', ' \" Spicy Fish Stew\",chongqing YuBei flavor. Seemingly original practice, actual exquisite - selected fresh raw fish, and give full play to the pepper warm effect, tomifying qi and blood, meat cooking out does not become tough, smooth taste, oil and not greasy. In addition to the both the smell of fish, and maintain the fresh fish. Of chili red eye, spicy but not dry, hemp and not bitter. \"Hemp, spicy enough,\" let the boiled fish so popular throughout the country.', 'spicy', 'SpicyFishStew-8.jpg', 'uploads\\recipe_detail\\img_file', 'image/jpeg', '94767');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '61f7cf7b994187e769cd59b43f7fb6ba616a26a5');
