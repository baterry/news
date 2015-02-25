/*
Navicat MySQL Data Transfer

Source Server         : connection
Source Server Version : 50541
Source Host           : localhost:3306
Source Database       : news

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-02-25 12:56:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `authors`
-- ----------------------------
DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of authors
-- ----------------------------
INSERT INTO `authors` VALUES ('1', 'John Smith');
INSERT INTO `authors` VALUES ('2', 'Mike Doe');
INSERT INTO `authors` VALUES ('3', 'Ronald More');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `publish_date` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '22221', 'Белорусские хроники 1945-го. Дамы в мехах в коммерческом ресторане и бабы в ватниках на зимнем лесоповале', 'В эти февральские дни 70 лет назад войска 1-го Белорусского фронта освободили город Познань. На политинформациях в ротах и батальонах, на фабриках и в колхозах в тылу также зачитывалось сообщение ТАСС о том, что американская морская пехота начала масштабную десантную операцию на островах Тихоокеанского бассейна. А новости из Беларуси были скромнее, но - по-своему значимые.\r\nЧитать полностью:  http://news.tut.by/society/436719.html\r\n', '1');
INSERT INTO `news` VALUES ('2', '33333', 'Православные верующие празднуют Прощеное воскресенье', 'Это прекрасный повод начать Великий пост с доброй, чистой душой и сосредоточиться на духовной жизни. В храмах в этот день на вечернем богослужении совершается чин прощения в память о древней традиции египетских монахов, которые перед наступлением Великого поста до Пасхи расходились по пустыне, чтобы полностью отдаться молитвам. Монахи расходились по одному по пустыне на все сорок дней поста. Некоторые из них уже не возвращались обратно: кто-то был растерзан дикими зверями, другие погибли в безжизненной пустыне. Потому, расходясь, монахи просили друг у друга прощения за все вольные или невольные обиды, как перед смертью. И конечно, сами от души прощали всех. Каждый понимал, что их встреча в преддверии Великого Поста может оказаться последней. Для того и существовал чин прощения, чтобы быть примиренным и прощенным со всеми. Со временем это стало традицией у всех верующих.', '2');
INSERT INTO `news` VALUES ('3', '4444', '\"Жизнь каждого погибшего стоит намного больше, чем все перемены', 'Год назад, 22 февраля, после трех месяцев акций протеста, многочисленных жертв на Майдане и отъезда из страны Виктора Януковича, власть в Украине поменялась.  Депутат Верховной рады Александр Турчинов со следующего дня стал исполнять обязанности президента. А после майских выборов страну принял Петр Порошенко.', '3');
INSERT INTO `news` VALUES ('4', '2', '\"Минские кухни\". Шеф-повар ресторана белорусской кухни: о супе из крови, клубнике с креветками и зарплатах', 'Поскольку помещение, в котором мы находимся, вполне приличных для советских квартир размеров, то Максим иногда собирается здесь с друзьями. А вот готовит он дома почти каждый день, в том числе и белорусские блюда.\r\nЧитать полностью:  http://news.tut.by/society/436449.html\r\n', '2');