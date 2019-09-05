/*
Navicat MySQL Data Transfer

Source Server         : zymysql
Source Server Version : 50727
Source Host           : 127.0.0.1:3306
Source Database       : order_db

Target Server Type    : MYSQL
Target Server Version : 50727
File Encoding         : 65001

Date: 2019-09-05 20:06:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', '张三', 'e369853df766fa44e1ed0ff613f563bd', '14078163222', '石家庄铁道大学');
INSERT INTO `customer` VALUES ('2', '李四', '28dd2c7955ce926456240b2ff0100bde', '14856877007', '石家庄新华区新华街道太和电子城六楼A区');
INSERT INTO `customer` VALUES ('3', '王五', '98f13708210194c475687be6106a3b84', '14522968164', '育才街265号怀特国际商城南门口 ');
INSERT INTO `customer` VALUES ('4', '赵六', '6ea9ab1baa0efb9e19094440c317e21b', '13976673066', '石家庄市正定县正定镇恒州南街34号');
INSERT INTO `customer` VALUES ('5', '缑念蕾', 'c74d97b01eag257e44aa9d5bade97bai', '15204560159', '长春市朝阳区光明路58号');
INSERT INTO `customer` VALUES ('6', '彭嘉澍', '28dd2c7955ce926456240b2ff0100bde', '15657850590', '天津市河东区新开路24号巨福园B座底商华');
INSERT INTO `customer` VALUES ('7', '及添智', 'b53b3a3d6ab90ce0268229151c9bde11', '15615897129', '天津市南开区鞍山西道259号');
INSERT INTO `customer` VALUES ('8', '刚雨信', 'fbd7939d674997cdb4692d34de8633c4', '14525610906', '沈阳市大东区小北关街33号');
INSERT INTO `customer` VALUES ('9', '少方', '9a1158154dfa42caddbd0694a4e9bdc8', '13986107301', '天津市和平区兴安路166号');
INSERT INTO `customer` VALUES ('10', '娄倚', 'fe9fc289c3ff0af142b6d3bead98a923', '14142641620', '沈阳市铁西区贵和街道应昌街6号');
INSERT INTO `customer` VALUES ('11', '荤天音', '1ff1de774005f8da13f42943881c655f', '15052115053', '沈阳市和平区三好街华强电子世界1楼');
INSERT INTO `customer` VALUES ('12', '缑念蕾', 'c74d97b01eae257e44aa9d5bade97baf', '15204560150', '长春市朝阳区光明路528号');
INSERT INTO `customer` VALUES ('13', '市涵菱', 'f4b9ec30ad9f68f89b29639786cb62ef', '15425646327', '天津市塘沽区解放路453号');
INSERT INTO `customer` VALUES ('14', '节初柔', 'a87ff679a2f3e71d9181a67b7542122c', '15615239758', '天津市滨海新区大港胜利街258号 ');
INSERT INTO `customer` VALUES ('15', '别萱', 'f899139df5e1059396431415e770c6dd', '14839970948', '山西省太原市小店区营盘街道体育路58号阳');
INSERT INTO `customer` VALUES ('16', '鄂承泽', 'd09bf41544a3365a46c9077ebb5e35c3', '15372006021', '沈阳市和平区太原街街道太原街43号');
INSERT INTO `customer` VALUES ('17', '郏经亘', 'c0c7c76d30bd3dcaefc96f40275bdc0a', '14893017921', '长春市朝阳区同德金街152号');
INSERT INTO `customer` VALUES ('18', '金冷珍', '34173cb38f07f89ddbebc2ac9128303f', '13266404202', '哈尔滨市南岗区果戈里大街348-2号');
INSERT INTO `customer` VALUES ('19', '庞昭懿', '8f14e45fceea167a5a36dedd4bea2543', '15689048568', '哈尔滨市南岗区先锋路402号');
INSERT INTO `customer` VALUES ('20', '昂静云', 'c4ca4238a0b923820dcc509a6f75849b', '15647131140', '太原市大南门大铁匠巷山西古玩城斜对面');
INSERT INTO `customer` VALUES ('21', '磨明亮', '43ec517d68b6edd3015b3edc9a11367b', '14919383851', '上海市徐汇区徐家汇街道漕溪北路41号');
INSERT INTO `customer` VALUES ('22', '来乐然', '2a38a4a9316c49e5a833517c45d31070', '15431512476', '上海市闵行区七宝镇七莘路2941号');
INSERT INTO `customer` VALUES ('23', '尾灵槐', 'c7e1249ffc03eb9ded908c236bd1996d', '13991080134', '哈尔滨市香坊区哈平路13-1号');
INSERT INTO `customer` VALUES ('24', '扬颖秀', 'd82c8d1619ad8176d665453cfb2e55f0', '13244543012', '上海市闸北区天目西路488号');
INSERT INTO `customer` VALUES ('25', '闽元灵', 'c9f0f895fb98ab9159f51fd0297e236d', '15164629721', '上海市闵行区沪闵路7866号');
INSERT INTO `customer` VALUES ('26', '敖晏然', '6f4922f45568161a8cdf4ad2299f6d23', '13257294270', '上海市浦东新区浦东南路1118号');
INSERT INTO `customer` VALUES ('27', '恭翠桃', 'c9f0f895fb98ab9159f51fd0297e236d', '14296409549', '上海市杨浦区五角场街道四平路2500号');
INSERT INTO `customer` VALUES ('28', '展怀蕾', 'a684eceee76fc522773286a895bc8436', '13166636365', '海市宝山区双城路818号');
INSERT INTO `customer` VALUES ('29', '太史雁菱', 'a3f390d88e4c41f2747bfa2f1b5f87db', '13204271749', '上海市浦东新区华夏东路1520弄1号2层206');
INSERT INTO `customer` VALUES ('30', '终新雨', '1ff1de774005f8da13f42943881c655f', '15541671219', '上海市松江区松汇东路39弄21号 ');
INSERT INTO `customer` VALUES ('31', '北爰爰', '19ca14e7ea6328a42e0eb13d585e4c22', '14593286279', '上海市虹口区广中路街道西江湾路500号');

-- ----------------------------
-- Table structure for dish
-- ----------------------------
DROP TABLE IF EXISTS `dish`;
CREATE TABLE `dish` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `restaurantID` int(10) DEFAULT NULL,
  `dishTitle` varchar(255) DEFAULT NULL,
  `dishAvailable` int(3) DEFAULT NULL,
  `price` double(6,3) DEFAULT NULL,
  `showPictureFileName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `restaurant` (`restaurantID`),
  CONSTRAINT `restaurant` FOREIGN KEY (`restaurantID`) REFERENCES `restaurant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dish
-- ----------------------------
INSERT INTO `dish` VALUES ('1', '1', '板烧鸡腿堡', '1', '20.000', '12a87c1a7aa58fa677c7b966b6594png.png');
INSERT INTO `dish` VALUES ('2', '1', '就爱吃鸡双人餐A', '1', '71.500', '32a7d52377995d965bc185ae83cc0jpeg.jpeg');
INSERT INTO `dish` VALUES ('3', '1', '饿了么星选双人餐', '1', '113.500', '2bb3b5b839e387ac2d4ea6c2f27a0jpeg.jpeg');
INSERT INTO `dish` VALUES ('4', '1', '海陆空经典三人餐', '1', '130.000', 'fda7888e86a3227a66f7c18dc4e5cjpeg.jpeg');
INSERT INTO `dish` VALUES ('5', '1', '中秋家宴团圆餐-五人欢享盛宴', '1', '313.000', '7ae7ecbc4671b149aeab87f500988jpeg.jpeg');
INSERT INTO `dish` VALUES ('6', '1', '巨无霸薯条四件套', '1', '56.000', 'ebd05d2583efe2364ab7719e47d8bjpeg.jpeg');
INSERT INTO `dish` VALUES ('7', '2', '卤狮子头', '1', '2.500', '30afbff1c9cd47defd56e8a0983acjpeg.jpeg');
INSERT INTO `dish` VALUES ('8', '2', '招牌台北卤肉饭（五花肉＋香菇）', '1', '36.000', 'c9e2882d1cd45f5cfc0f33881fa7bjpeg.jpeg');
INSERT INTO `dish` VALUES ('9', '2', '香肠', '1', '2.500', 'ac76b838a19e7574d17fe9d795aaajpeg.jpeg');
INSERT INTO `dish` VALUES ('10', '2', '肉沫茄子饭', '1', '26.000', 'cca12fcbf0d08c8bd57a47b7353b4jpeg.jpeg');
INSERT INTO `dish` VALUES ('11', '2', '高雄卤肉饭（大肉块）', '1', '36.000', '8331c774c6bac1c09a52601072718jpeg.jpeg');
INSERT INTO `dish` VALUES ('12', '2', '土豆咖喱鸡饭', '1', '32.000', '110c98346efb2e50c5ff24d3e5b98jpeg.jpeg');
INSERT INTO `dish` VALUES ('13', '3', '花甲粉套餐', '1', '16.800', '550a19a3558ea4e4a871a3849c1edjpeg.jpeg');
INSERT INTO `dish` VALUES ('14', '3', '白糖芝麻烧饼', '1', '2.500', 'f0ecc80de979ecbeec0462eaeca3cjpeg.jpeg');
INSERT INTO `dish` VALUES ('15', '3', '年糕', '1', '3.000', '352fc042f5749bcd83328fc28d61ejpeg.jpeg');
INSERT INTO `dish` VALUES ('16', '3', '花甲鲜虾蛏子套餐', '1', '29.800', '30ee5573c82d4c2eae95e1088d940jpeg.jpeg');
INSERT INTO `dish` VALUES ('17', '4', '日式照烧鸡排饭', '1', '39.800', 'd398827129e162e69fdb99be69386jpeg.jpeg');
INSERT INTO `dish` VALUES ('18', '4', '红烧鸡腿肉饭', '1', '37.660', 'f8dbf4125189850062c229e1c41ddjpeg.jpeg');
INSERT INTO `dish` VALUES ('19', '4', '番茄沙司鸡排饭＋烤肠＋可乐一罐', '1', '45.000', 'eb82a3bc5ce660378da72f71ac329jpeg.jpeg');
INSERT INTO `dish` VALUES ('20', '4', '红烧鸡腿肉＋香酥鸡米花＋饮料', '1', '44.900', '53f0fe39fe6d3aab7c77c630b1813jpeg.jpeg');
INSERT INTO `dish` VALUES ('21', '5', '部落冲突王选单人餐', '1', '53.000', 'a683941005a95c4b24d4fb7c90abepng.png');
INSERT INTO `dish` VALUES ('22', '5', '送福单人套餐', '1', '59.000', 'be76d44a4bcc5d39a668f07d50f37png.png');
INSERT INTO `dish` VALUES ('23', '5', '经典安格斯单人餐', '1', '56.500', '4beb8e6c29917981954a67a4fe929png.png');
INSERT INTO `dish` VALUES ('24', '5', '缤纷夏日双人套餐', '1', '96.000', '07e85a17287445a8727a1f641b15cpng.png');
INSERT INTO `dish` VALUES ('25', '6', '美味酸菜鱼（草鱼）', '1', '23.800', '97e90556878980ad98d48d17e8533jpeg.jpeg');
INSERT INTO `dish` VALUES ('26', '6', '超大份水煮鱼+2盒米饭+2盒果汁', '1', '59.800', '22dc995dabed7cc185dd98690fdcdjpeg.jpeg');
INSERT INTO `dish` VALUES ('27', '6', '超大份肥牛+2份米饭+2盒果汁', '1', '59.800', 'f03be64fd5bf288216cd9a0fa1835jpeg.jpeg');
INSERT INTO `dish` VALUES ('28', '6', '帝王火锅三人餐+3份米饭+3盒果汁', '1', '78.000', '8f0b3ef51007a7a95698d92594689jpeg.jpeg');
INSERT INTO `dish` VALUES ('29', '7', '混合底蔬', '1', '5.800', 'b511f313ae6e869df3907383f58b9jpeg.jpeg');
INSERT INTO `dish` VALUES ('30', '7', '牛排能量餐', '1', '39.000', 'f6f168c647ac15ace48ad59f87749jpeg.jpeg');
INSERT INTO `dish` VALUES ('31', '7', '鸡胸肉能量餐', '1', '34.000', '81eaa61d5aa725019eddd3871a4aejpeg.jpeg');
INSERT INTO `dish` VALUES ('32', '7', '玉米粒', '1', '3.800', '592aefd74b9017408642b0cd00915jpeg.jpeg');
INSERT INTO `dish` VALUES ('33', '8', '油封蜜橙酿糖醋小排弁当', '1', '29.800', '6b88cae168ae442eabcf2126eeb5djpeg.jpeg');
INSERT INTO `dish` VALUES ('34', '8', '日式秘制叉烧便当', '1', '29.800', '4a0b3bdb3cf5d8b0640850103f85ejpeg.jpeg');
INSERT INTO `dish` VALUES ('35', '8', '秘制黑椒牛柳套餐', '1', '29.800', '04203f2dab849ac5a330b35d0ac93jpeg.jpeg');
INSERT INTO `dish` VALUES ('36', '8', '手打墨鱼饼（超赞）', '1', '5.000', 'ac99e1e5655a63c1a000e2cc29dbajpeg.jpeg');
INSERT INTO `dish` VALUES ('37', '9', '经典欢辣巴沙鱼套餐', '1', '39.000', '846e61ad50cab8df7be5efe79041ajpeg.jpeg');
INSERT INTO `dish` VALUES ('38', '9', '浓郁番茄肥牛套餐', '1', '39.000', 'a3fc62effac3b47b257c82a813a54jpeg.jpeg');
INSERT INTO `dish` VALUES ('39', '9', '浓郁番茄巴沙鱼套餐', '1', '39.000', 'dc045c5eebc5e07a44800f685aa08jpeg.jpeg');
INSERT INTO `dish` VALUES ('40', '9', '咖喱虾套餐', '1', '39.000', 'c30614a7a21ca1617ae704d538ddfjpeg.jpeg');
INSERT INTO `dish` VALUES ('41', '10', '多味鸡肉便当＋佐大狮', '1', '31.900', 'b6677b73eedcdf991f081ec0edbe2jpeg.jpeg');
INSERT INTO `dish` VALUES ('42', '10', '爆款咖喱鸡便当＋佐大狮', '1', '28.900', '53d17dfeb69bb78a0313de56c5db9jpeg.jpeg');
INSERT INTO `dish` VALUES ('43', '10', '黑仔便当+劲爆鸡排', '1', '49.900', '3178f2d9630eb34a0318c10629ae4jpeg.jpeg');
INSERT INTO `dish` VALUES ('44', '10', '香菇嫩鸡便当＋佐大狮', '1', '28.900', 'ef714bf7ee4d91daf587a30d1dc17jpeg.jpeg');
INSERT INTO `dish` VALUES ('45', '11', '狮子头番茄人气套餐', '1', '18.000', '189806163c313469c0610b155a8abjpeg.jpeg');
INSERT INTO `dish` VALUES ('46', '11', '咖喱鸡+番茄鸡蛋', '1', '25.000', '8ebbe1779cd93ea7e9da02791fa43jpeg.jpeg');
INSERT INTO `dish` VALUES ('47', '11', '香辣红烧肉+番茄鸡蛋', '1', '30.000', '745153ff89a97a00838811a0b16adjpeg.jpeg');
INSERT INTO `dish` VALUES ('48', '11', '烧茄子狮子头人气套餐', '1', '18.000', 'b25c6272497224553b992ff76e73cjpeg.jpeg');
INSERT INTO `dish` VALUES ('49', '12', '麻麻辣辣牛肉饭', '1', '39.000', '580391d6678614b05b9153ac3b114jpeg.jpeg');
INSERT INTO `dish` VALUES ('50', '12', '大骨浓汤猪软骨拉面', '1', '43.000', '56100e54bc54a857d281317810fa1jpeg.jpeg');
INSERT INTO `dish` VALUES ('51', '12', '熊本叉烧拉面', '1', '36.000', 'c1eef30b7f79cc2ac772aad34d5a4jpeg.jpeg');
INSERT INTO `dish` VALUES ('52', '12', '烧肥牛铁板饭', '1', '39.000', '51159c696c78cb6e04ed78c897e08jpeg.jpeg');
INSERT INTO `dish` VALUES ('53', '13', '烧肉焖面+卤蛋+香肠+汽水', '1', '44.900', '45713a663954ddc992ee84f95e4f2jpeg.jpeg');
INSERT INTO `dish` VALUES ('54', '13', '招牌土豆牛肉饭+香炸鸡腿+汽水', '1', '52.900', '9d3a88b5f5f1a14e0e6ff40d0ac4cjpeg.jpeg');
INSERT INTO `dish` VALUES ('55', '13', '香嫩鸡排', '1', '12.900', 'cf7a3e237ddfacc2f5161aeea8adfjpeg.jpeg');
INSERT INTO `dish` VALUES ('56', '13', '鱼香茄子饭', '1', '35.900', 'f418695ed7612cd435de8fd5af28ajpeg.jpeg');
INSERT INTO `dish` VALUES ('57', '14', '黄焖鸡大份+土豆+米饭套餐', '1', '36.800', 'a040e9fc7d22b684d6615e7d6272djpeg.jpeg');
INSERT INTO `dish` VALUES ('58', '14', '大份黄焖鸡+米饭+金针菇（微辣）', '1', '36.800', 'b4b5034e5b0ca8d2ed740698395c8jpeg.jpeg');
INSERT INTO `dish` VALUES ('59', '14', '鱼豆腐', '1', '5.000', 'a6f28200c22de86c30066a99ad313jpeg.jpeg');
INSERT INTO `dish` VALUES ('60', '14', '金针菇', '1', '5.000', '34c245e1fe05a34bf1c7dd5220f2fjpeg.jpeg');
INSERT INTO `dish` VALUES ('61', '15', '香辣无骨烤鱼饭', '1', '39.800', '629eb84ea5f984687053181e21aacjpeg.jpeg');
INSERT INTO `dish` VALUES ('62', '15', '鱼豆腐（配菜单点不送）', '1', '4.000', '00cd725b25672728012140bb45655jpeg.jpeg');
INSERT INTO `dish` VALUES ('63', '15', '稻花香米（单点不送）', '1', '3.000', '5b569f6974f0359fb2573326200f2jpeg.jpeg');
INSERT INTO `dish` VALUES ('64', '15', '豆皮（配菜单点不送）', '1', '4.000', '8fcf50c3ace6febe321e67fe45364jpeg.jpeg');
INSERT INTO `dish` VALUES ('65', '16', '香辣鸡腿堡', '1', '12.900', '06c563ad1fb854f218857afa54102jpeg.jpeg');
INSERT INTO `dish` VALUES ('66', '16', '上校鸡块/6个', '1', '12.900', '7344d9b339269fc90a80998ae1820jpeg.jpeg');
INSERT INTO `dish` VALUES ('67', '16', '招牌蛋挞/2枚', '1', '9.900', '6c88d275cd8a261fb9eb6918320dbjpeg.jpeg');
INSERT INTO `dish` VALUES ('68', '16', '新奥尔良鸡腿堡', '1', '14.900', '305109532ab08ddd109d740265c7cjpeg.jpeg');
INSERT INTO `dish` VALUES ('69', '17', '香辣烤鱼饭+配菜+米饭', '1', '39.900', '4601cf5b1f9636e43ef457cebcea2jpeg.jpeg');
INSERT INTO `dish` VALUES ('70', '17', '香辣 牛蛙爱上鱼+配菜+米饭', '1', '42.800', '7255ec09f7ff7d7a75b748075916djpeg.jpeg');
INSERT INTO `dish` VALUES ('71', '17', '麻辣 花甲牛蛙+配菜+米饭', '1', '39.900', '4e5e9a0ca6ded871e06aca63f2ed9jpeg.jpeg');
INSERT INTO `dish` VALUES ('72', '17', '藤椒 无骨烤鱼+配菜+米饭', '1', '39.900', '98793592adf60aea9676342421085jpeg.jpeg');
INSERT INTO `dish` VALUES ('73', '18', '黑椒牛柳炒饭+自选汤饮套餐', '1', '39.800', '524ae58f96eb3798fe6291067c7ddjpeg.jpeg');
INSERT INTO `dish` VALUES ('74', '18', '鲜香雪菜火腿炒饭', '1', '28.000', '6ce7713ef93749f6bcc4330afaa16jpeg.jpeg');
INSERT INTO `dish` VALUES ('75', '18', '腊肠（切丁入饭炒）', '1', '7.800', 'de1342bf0926add847632166896e3jpeg.jpeg');
INSERT INTO `dish` VALUES ('76', '18', '仔仔海带鲜排汤', '1', '6.800', '38dfbd15eb43e4a425e8a9c5819c6jpeg.jpeg');
INSERT INTO `dish` VALUES ('77', '19', '洞庭小炒肉套餐', '1', '40.000', '0fa302ff8131e2d6aae70492d1a10jpeg.jpeg');
INSERT INTO `dish` VALUES ('78', '19', '绿茶葱香烤鸡', '1', '36.000', '79da7668285c08245ef996cf1e665jpeg.jpeg');
INSERT INTO `dish` VALUES ('79', '19', '酱爆石锅蛙', '1', '58.000', '34ee5fa739197c340519492747b2djpeg.jpeg');
INSERT INTO `dish` VALUES ('80', '19', '东坡草扎肉', '1', '58.000', '52a8fecb95890220d92b03587fb96jpeg.jpeg');
INSERT INTO `dish` VALUES ('81', '20', '八旗烩菜小份', '1', '28.000', '532d49dd287d8ca1ff02f6ebccfa1jpeg.jpeg');
INSERT INTO `dish` VALUES ('82', '20', '鸭王烤鸭半只', '1', '109.000', 'd25770643a7b2da65e17a12293168jpeg.jpeg');
INSERT INTO `dish` VALUES ('83', '20', '外婆酱烧茄子', '1', '32.000', '39d5dc89454c9b8190c03be1a9910jpeg.jpeg');
INSERT INTO `dish` VALUES ('84', '20', '干锅土豆片', '1', '36.000', '03b1cd1e4d58ea1fea066121ccedejpeg.jpeg');

-- ----------------------------
-- Table structure for indent
-- ----------------------------
DROP TABLE IF EXISTS `indent`;
CREATE TABLE `indent` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `customerID` int(10) NOT NULL,
  `content` varchar(1024) DEFAULT NULL,
  `price` double(6,3) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `appraise` text,
  PRIMARY KEY (`id`),
  KEY `customer` (`customerID`),
  CONSTRAINT `customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of indent
-- ----------------------------
INSERT INTO `indent` VALUES ('1', '2019-08-31 09:00:00', '19', '[[69,2]]', '79.800', '6', '份量少，味道差，差评');
INSERT INTO `indent` VALUES ('2', '2019-08-31 09:00:00', '9', '[[47,3]]', '90.000', '6', '口味很好，份量很足');
INSERT INTO `indent` VALUES ('3', '2019-08-31 09:00:00', '10', '[[51,2],[30,2],[82,2]]', '368.000', '6', '口味包装都很不错');
INSERT INTO `indent` VALUES ('4', '2019-08-31 09:00:00', '20', '[[9,1],[63,3]]', '11.500', '5', '');
INSERT INTO `indent` VALUES ('5', '2019-09-01 00:00:00', '25', '[[63,2]]', '6.000', '6', '份量少，味道差，差评');
INSERT INTO `indent` VALUES ('6', '2019-09-05 02:18:16', '6', '[[50,2]]', '86.000', '6', '不错哈，要中辣，味道还好');
INSERT INTO `indent` VALUES ('7', '2019-09-05 08:23:58', '13', '[[30,1]]', '39.000', '6', '这个份量真的，太足了。那会儿还想再多点一份酸汤，幸亏没点。我和两个孩子吃饱还剩这么多');
INSERT INTO `indent` VALUES ('8', '2019-09-05 14:36:35', '10', '[[71,1],[17,1]]', '79.700', '6', '非常适合我的口味，很好吃');
INSERT INTO `indent` VALUES ('9', '2019-09-05 14:36:35', '6', '[[12,1],[74,2],[53,2],[12,3]]', '273.800', '3', '');
INSERT INTO `indent` VALUES ('10', '2019-09-05 14:36:35', '29', '[[33,1],[37,3],[72,1]]', '186.700', '6', '下次多煮一会。。哈哈，吃起来也不错');
INSERT INTO `indent` VALUES ('11', '2019-09-05 14:45:22', '20', '[[25,2]]', '47.600', '6', '味道挺不错，想吃的朋友可以下单');
INSERT INTO `indent` VALUES ('12', '2019-09-05 14:45:22', '4', '[[56,3],[49,3]]', '224.700', '6', '味道不错，送餐很快，态度很好！');
INSERT INTO `indent` VALUES ('13', '2019-09-05 14:48:36', '19', '[[74,2]]', '56.000', '5', '');
INSERT INTO `indent` VALUES ('14', '2019-09-05 14:48:36', '10', '[[10,1],[35,3],[71,2],[1,3]]', '255.200', '6', '骑手热情，态度很好');
INSERT INTO `indent` VALUES ('15', '2019-09-05 14:48:36', '24', '[[40,3],[84,1],[70,1],[51,3]]', '303.800', '6', '挺好吃的，下次再买');
INSERT INTO `indent` VALUES ('16', '2019-09-05 14:48:36', '24', '[[32,1],[53,2]]', '93.600', '6', '好吃！！！！');
INSERT INTO `indent` VALUES ('17', '2019-09-05 14:48:36', '19', '[[57,2],[75,1],[47,3],[82,2]]', '389.400', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('18', '2019-09-05 14:48:36', '17', '[[49,1],[71,1]]', '78.900', '6', '味道不错，很喜欢');
INSERT INTO `indent` VALUES ('19', '2019-09-05 14:48:36', '9', '[[51,3]]', '108.000', '6', '非常适合我的口味，很好吃');
INSERT INTO `indent` VALUES ('20', '2019-09-05 14:48:36', '23', '[[8,3],[26,2],[65,3]]', '266.300', '6', '老板很热情，我还会回来的');
INSERT INTO `indent` VALUES ('21', '2019-09-05 14:48:36', '13', '[[27,1],[65,2],[73,1]]', '125.400', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('22', '2019-09-05 14:48:36', '6', '[[49,1]]', '39.000', '6', '量很足，味道也好吃，就是陀了，不过不是很厉害！');
INSERT INTO `indent` VALUES ('23', '2019-09-05 14:48:36', '7', '[[46,1],[9,3],[69,1],[65,1]]', '85.300', '5', null);
INSERT INTO `indent` VALUES ('24', '2019-09-05 14:48:36', '2', '[[26,2],[28,2],[71,3],[57,1]]', '432.100', '6', '挺好吃的，下次再买');
INSERT INTO `indent` VALUES ('25', '2019-09-05 14:48:36', '14', '[[7,3],[81,2],[21,1]]', '116.500', '1', null);
INSERT INTO `indent` VALUES ('26', '2019-09-05 14:48:36', '30', '[[68,1],[64,3],[36,2],[60,2]]', '46.900', '6', '好吃！！！！');
INSERT INTO `indent` VALUES ('27', '2019-09-05 14:48:36', '1', '[[82,2],[37,3],[48,2]]', '371.000', '5', null);
INSERT INTO `indent` VALUES ('28', '2019-09-05 14:48:36', '15', '[[81,2]]', '56.000', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('29', '2019-09-05 14:48:36', '24', '[[83,3]]', '96.000', '1', null);
INSERT INTO `indent` VALUES ('30', '2019-09-05 14:48:36', '3', '[[42,1],[84,3]]', '136.900', '6', '挺好吃的，下次再买');
INSERT INTO `indent` VALUES ('31', '2019-09-05 14:48:36', '18', '[[50,2],[20,3],[16,1],[69,3]]', '370.200', '1', null);
INSERT INTO `indent` VALUES ('32', '2019-09-05 14:48:36', '14', '[[78,1],[21,3]]', '195.000', '3', null);
INSERT INTO `indent` VALUES ('33', '2019-09-05 14:48:36', '4', '[[16,3],[72,2],[1,3],[13,3]]', '279.600', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('35', '2019-09-05 14:48:36', '22', '[[32,1]]', '3.800', '5', null);
INSERT INTO `indent` VALUES ('36', '2019-09-05 14:48:36', '25', '[[12,1],[81,2],[26,1],[2,1]]', '219.300', '6', '吃外卖能吃到剃了虾线的美食，真的很暖心，谢谢老板每次看备注给我不放豆芽，还单独装麻油。味道真的很赞。青菜也很干净。手动点赞厨师');
INSERT INTO `indent` VALUES ('37', '2019-09-05 14:48:36', '20', '[[42,3],[74,2],[45,3]]', '196.700', '1', null);
INSERT INTO `indent` VALUES ('38', '2019-09-05 14:48:36', '29', '[[9,1],[9,3],[33,3]]', '99.400', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('39', '2019-09-05 14:48:36', '25', '[[51,2]]', '72.000', '6', '好吃！！！！');
INSERT INTO `indent` VALUES ('40', '2019-09-05 14:48:36', '19', '[[12,3],[35,3],[77,1]]', '225.400', '1', null);
INSERT INTO `indent` VALUES ('41', '2019-09-05 14:48:36', '24', '[[52,1],[24,2],[50,3],[57,1]]', '396.800', '3', null);
INSERT INTO `indent` VALUES ('42', '2019-09-05 14:48:36', '30', '[[9,3],[68,1],[47,1]]', '52.400', '1', null);
INSERT INTO `indent` VALUES ('43', '2019-09-05 14:48:36', '12', '[[77,2]]', '80.000', '6', '比预期的好吃～本来不抱期待，相信是朴实的人在做简单的事儿，祝愿越来越好');
INSERT INTO `indent` VALUES ('44', '2019-09-05 14:48:36', '18', '[[21,3]]', '159.000', '5', null);
INSERT INTO `indent` VALUES ('45', '2019-09-05 14:48:36', '3', '[[46,3],[14,2],[29,3],[15,3]]', '106.400', '6', '好吃！！！！');
INSERT INTO `indent` VALUES ('46', '2019-09-05 14:48:36', '11', '[[61,3],[37,2],[69,1],[38,3]]', '354.300', '1', null);
INSERT INTO `indent` VALUES ('47', '2019-09-05 14:48:36', '9', '[[58,1]]', '36.800', '6', '挺好吃的，下次再买');
INSERT INTO `indent` VALUES ('48', '2019-09-05 14:48:36', '22', '[[32,1]]', '3.800', '5', '');
INSERT INTO `indent` VALUES ('49', '2019-09-05 14:48:36', '3', '[[71,3],[49,3]]', '236.700', '3', null);
INSERT INTO `indent` VALUES ('50', '2019-09-05 14:48:36', '8', '[[64,3]]', '12.000', '6', '需要提升，里面有点腥味，不太熟。希望改进改进');
INSERT INTO `indent` VALUES ('51', '2019-09-05 14:48:36', '11', '[[47,1],[2,2],[27,3]]', '352.400', '1', null);
INSERT INTO `indent` VALUES ('52', '2019-09-05 14:48:36', '13', '[[67,1]]', '9.900', '6', '很好吃很好吃值得推荐');
INSERT INTO `indent` VALUES ('53', '2019-09-05 14:48:36', '7', '[[2,1],[83,2]]', '135.500', '5', null);
INSERT INTO `indent` VALUES ('54', '2019-09-05 14:48:36', '22', '[[18,3],[58,1]]', '149.780', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('55', '2019-09-05 14:48:36', '6', '[[44,1],[60,2],[4,2]]', '298.900', '1', null);
INSERT INTO `indent` VALUES ('56', '2019-09-05 14:48:36', '3', '[[71,3],[49,3]]', '236.700', '3', '');
INSERT INTO `indent` VALUES ('57', '2019-09-05 14:48:36', '4', '[[22,2],[48,3]]', '172.000', '6', '很好吃很好吃值得推荐');
INSERT INTO `indent` VALUES ('58', '2019-09-05 14:48:36', '22', '[[33,1],[18,2],[46,1]]', '130.120', '3', null);
INSERT INTO `indent` VALUES ('59', '2019-09-05 14:48:36', '26', '[[54,3],[54,3]]', '317.400', '6', '速度 杠杠的 还提前了几分钟');
INSERT INTO `indent` VALUES ('60', '2019-09-05 14:48:36', '6', '[[27,3],[57,3]]', '289.800', '6', '很好吃很好吃值得推荐');
INSERT INTO `indent` VALUES ('61', '2019-09-05 14:48:36', '20', '[[69,2]]', '79.800', '3', null);
INSERT INTO `indent` VALUES ('62', '2019-09-05 14:48:36', '14', '[[19,1]]', '45.000', '6', '好吃！！！！');
INSERT INTO `indent` VALUES ('63', '2019-09-05 14:48:36', '22', '[[68,3]]', '44.700', '6', '很好吃很好吃值得推荐');
INSERT INTO `indent` VALUES ('64', '2019-09-05 14:48:36', '3', '[[32,2],[60,1],[11,2],[20,2]]', '174.400', '3', null);
INSERT INTO `indent` VALUES ('65', '2019-09-05 14:48:36', '18', '[[65,1],[45,2],[46,2],[23,3]]', '268.400', '5', null);
INSERT INTO `indent` VALUES ('66', '2019-09-05 14:48:36', '18', '[[51,1],[66,1]]', '48.900', '6', '点了很多次外卖这次最难吃，还全部粘在一起，有好几个都煮烂了，，');
INSERT INTO `indent` VALUES ('67', '2019-09-05 14:48:36', '16', '[[1,3],[71,2],[34,3],[20,2]]', '319.000', '3', null);
INSERT INTO `indent` VALUES ('68', '2019-09-05 14:48:36', '8', '[[4,1],[50,3]]', '259.000', '6', '差评，少放了东西怎么让吃');
INSERT INTO `indent` VALUES ('69', '2019-09-05 14:48:36', '13', '[[80,3],[52,1]]', '213.000', '5', null);
INSERT INTO `indent` VALUES ('70', '2019-09-05 14:48:36', '13', '[[42,2],[28,2]]', '213.800', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('71', '2019-09-05 14:48:36', '23', '[[21,2],[26,2],[47,1],[2,2]]', '398.600', '6', '挺好吃的，我经常在这家吃。味道不错，做的也挺快的。');
INSERT INTO `indent` VALUES ('72', '2019-09-05 14:48:36', '11', '[[40,3],[29,1]]', '122.800', '1', null);
INSERT INTO `indent` VALUES ('73', '2019-09-05 14:48:36', '8', '[[33,1],[26,2],[36,1],[37,2]]', '232.400', '6', '还行 送来就坨了 可以接受');
INSERT INTO `indent` VALUES ('74', '2019-09-05 14:48:36', '4', '[[48,1],[77,1],[9,1]]', '60.500', '1', null);
INSERT INTO `indent` VALUES ('75', '2019-09-05 14:48:36', '16', '[[50,1]]', '43.000', '6', '配送员和商家都杠杠滴！再接再厉生意兴隆！');
INSERT INTO `indent` VALUES ('76', '2019-09-05 14:48:36', '4', '[[46,1]]', '25.000', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('77', '2019-09-05 14:48:36', '6', '[[5,2],[75,1],[69,2],[19,3]]', '848.600', '3', null);
INSERT INTO `indent` VALUES ('78', '2019-09-05 14:48:36', '20', '[[5,1]]', '313.000', '6', '很好吃很好吃值得推荐');
INSERT INTO `indent` VALUES ('79', '2019-09-05 14:48:36', '13', '[[2,1],[62,3]]', '83.500', '6', '很好吃很好吃值得推荐');
INSERT INTO `indent` VALUES ('80', '2019-09-05 14:48:36', '4', '[[7,3],[76,2],[14,3],[67,2]]', '48.400', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('81', '2019-09-05 14:48:36', '4', '[[4,3],[41,3]]', '485.700', '6', '时间太长了，都泡了。');
INSERT INTO `indent` VALUES ('82', '2019-09-05 14:48:36', '25', '[[22,3],[25,2],[74,2],[78,1]]', '316.600', '5', null);
INSERT INTO `indent` VALUES ('83', '2019-09-05 14:48:36', '12', '[[14,3],[28,1],[57,2]]', '159.100', '6', '一个人能吃三斤，老板你说那？');
INSERT INTO `indent` VALUES ('84', '2019-09-05 14:48:36', '19', '[[81,1],[68,3],[42,1],[39,3]]', '218.600', '5', null);
INSERT INTO `indent` VALUES ('85', '2019-09-05 14:48:36', '24', '[[21,3]]', '159.000', '6', '味道很好，赞');
INSERT INTO `indent` VALUES ('86', '2019-09-05 14:48:36', '30', '[[47,3]]', '90.000', '6', '好吃，非常满意，下次在定。');
INSERT INTO `indent` VALUES ('87', '2019-09-05 14:48:36', '25', '[[22,3],[25,2],[74,2],[78,1]]', '316.600', '5', '');
INSERT INTO `indent` VALUES ('88', '2019-09-05 14:48:36', '24', '[[41,1],[72,3],[54,2]]', '257.400', '5', null);
INSERT INTO `indent` VALUES ('89', '2019-09-05 14:48:36', '2', '[[58,2],[65,3],[75,1]]', '120.100', '6', '不错不错不错');
INSERT INTO `indent` VALUES ('90', '2019-09-05 14:48:36', '18', '[[75,2],[35,2]]', '75.200', '6', '好吃！！！！');
INSERT INTO `indent` VALUES ('91', '2019-09-05 14:48:36', '23', '[[22,2],[1,1],[74,3]]', '222.000', '5', null);
INSERT INTO `indent` VALUES ('92', '2019-09-05 14:48:36', '2', '[[80,2],[3,1],[13,3],[77,2]]', '359.900', '6', '还可以～～～～～');
INSERT INTO `indent` VALUES ('93', '2019-09-05 14:48:36', '28', '[[59,1],[45,2]]', '41.000', '1', null);
INSERT INTO `indent` VALUES ('94', '2019-09-05 14:48:36', '19', '[[29,2]]', '11.600', '6', '我要的大肉韭菜，给我送的韭菜鸡蛋，其他还好');
INSERT INTO `indent` VALUES ('95', '2019-09-05 14:48:36', '13', '[[4,1],[14,3]]', '137.500', '1', null);
INSERT INTO `indent` VALUES ('96', '2019-09-05 14:48:36', '22', '[[17,3],[7,2],[81,1]]', '152.400', '6', '味道不错！！下次再来！！');
INSERT INTO `indent` VALUES ('97', '2019-09-05 14:48:36', '28', '[[59,1],[45,2]]', '41.000', '1', '');
INSERT INTO `indent` VALUES ('98', '2019-09-05 14:48:36', '24', '[[31,2],[66,3]]', '106.700', '5', null);
INSERT INTO `indent` VALUES ('99', '2019-09-05 14:48:36', '30', '[[10,3]]', '78.000', '6', '效率很快的 很好');
INSERT INTO `indent` VALUES ('100', '2019-09-05 14:48:36', '28', '[[50,1],[23,1],[79,2],[50,1]]', '258.500', '1', '');
INSERT INTO `indent` VALUES ('101', '2019-09-05 19:58:40', '1', '[[1,2],[3,4]]', null, null, null);
INSERT INTO `indent` VALUES ('102', '2019-09-05 20:00:10', '1', '[[1,2],[3,4]]', null, null, null);

-- ----------------------------
-- Table structure for restaurant
-- ----------------------------
DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE `restaurant` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `restaurantName` varchar(255) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of restaurant
-- ----------------------------
INSERT INTO `restaurant` VALUES ('1', '袁沛春', '5c9723c7c8c1de45974f5fa287e7c821', '14237283099', '上海市嘉定区清河路55号嘉宝商厦5楼516', '麦当劳大洋百货餐厅', '无辣不欢系列，当麦辣鸡腿汉堡遇到冰爽饮料，为你带来冰火盛宴的享受，更有39元优惠双人餐哦！');
INSERT INTO `restaurant` VALUES ('2', '历山梅', '8052d63c51dc2f624310a534e2cee62e', '14059234850', '铁西区铁西区启明街18-20号', '台湾卤肉饭大王', '统一才是大趋势');
INSERT INTO `restaurant` VALUES ('3', '千涵蓄', '966576dde173236854e01be2c9ff6fae', '14654133649', '铁东区园林路九中正对面', '花甲遇见粉', '点餐请点套餐，配菜可以另加，单点配菜，饼类，饮料不予配送。');
INSERT INTO `restaurant` VALUES ('4', '伏圣', '6a40de48f0f9fc53f584670c105172a4', '14744341145', '上海市崇明县城桥镇南门路211号', '约饭', '配送说明：\r\n\r\n该商家支持开发票，请在下单时填写好发票抬头');
INSERT INTO `restaurant` VALUES ('5', '剧诗丹', '46518088a2302fbc9783218ba79c2c4e', '13820139736', '南京市玄武区鱼市街57号', '汉堡王', '整块牛排重磅来袭，新年尽情整才牛！');
INSERT INTO `restaurant` VALUES ('6', '禹秋白', '9553e721f78d7f3987f85621e2ac5edd', '13318065293', '南京市秦淮区健康路2号', '三国水煮鱼·酸菜鱼', '亲爱的顾客：三国水煮鱼是快餐模式，每锅都是用秘制掉好的水煮汤料煮制而成，将所有的鱼、肉腌制、酱好，配菜齐全，多种多样。没有太多油，汤是可以喝的，鲜汤香醇！每锅含有8种蔬菜垫底：金针菇，木耳，海带，娃娃菜，小油菜，豆芽，豆皮，红薯粉，多种多样味道可口。');
INSERT INTO `restaurant` VALUES ('7', '革半槐', '7a9f8bd1fa7a9b32153ff46f512012aa', '14585192163', '浙江省杭州市萧山区城厢街道通惠中路1号', '沙拉拉轻食', '沙拉就吃沙拉拉！');
INSERT INTO `restaurant` VALUES ('8', '富烨伟', 'b3498b23a9dde5dd75704962f8cbb8ca', '13173781269', '合肥市徽州大道193号', '久米郡和风精致便当', '您的每一餐都值得我们用心去对待！');
INSERT INTO `restaurant` VALUES ('9', '汲漪', '8c5feef16e26d981efab050fee933acf', '14174719846', '南京市秦淮区洪武路街道洪武路50号', '呷哺呷煮呷烫', '配送说明：\r\n\r\n该商家支持开发票，请在下单时填写好发票抬头');
INSERT INTO `restaurant` VALUES ('10', '浑建本', 'e6bb43430bf375dcacd5cadb7eee6b64', '14270918524', '杭州市拱墅区丰潭路508号', '我呀便当', '本店每天会随机送出20份水果 赶紧下单哦');
INSERT INTO `restaurant` VALUES ('11', '姚月杉', 'b68230f72c07848d2305944588c4ed33', '13285505476', '安徽省合肥市庐阳区长江中路238', '田老师红烧肉', '品质美食，健康生活！');
INSERT INTO `restaurant` VALUES ('12', '东门彬郁', 'a728e2b280b2b5b264963598527edc02', '14707723332', '南京市江宁区上元大街518号', '味千拉面', '味千劲道的面条，浓郁的骨汤，甄选每一味食材，让您体验多种层次的美味，齿颊留香。这一碗，让心里好满！');
INSERT INTO `restaurant` VALUES ('13', '谭听', '8975302b9ce07742793aee51f5257055', '15071091406', '合肥市庐阳区阜阳路191号', '米多面多', '品牌十三年，专注一碗饭，选用五常香米。');
INSERT INTO `restaurant` VALUES ('14', '介和昶', 'b14b1bea046474ebf3e319d8f43cd9a6', '14040014508', '安徽省合肥市经开区繁华大道558号', '黄焖鸡米饭', '温馨提示，本店单加菜，饮料，米饭单点不给配送。本店的黄焖鸡，黄焖排骨都带一碗米饭');
INSERT INTO `restaurant` VALUES ('15', '同岑', '9698936a5776b11ef45d099db69680c4', '14318457050', '江苏省南京市浦口区弘阳时代中心01幢208', '酥先生烤鱼饭', '该商户食品安全已由国泰产险承担，食品安全有保障');
INSERT INTO `restaurant` VALUES ('16', '弭浩波', 'f432a23309eba1782c912c5d99728a1d', '15072448433', '杭州市太平门直街260号三新银座603B ', '一家汉堡店', '该商户食品安全已由国泰产险承担，食品安全有保障');
INSERT INTO `restaurant` VALUES ('17', '卑浩波', '9f46865722a063155afbdf3e54a5c5d2', '14259416270', '南昌市广场东路190号', '巫山无骨烤鱼饭', '发票满一百起开，并且是定额的发票');
INSERT INTO `restaurant` VALUES ('18', '爱名', '4bcce566714532710c86fd39c35586d7', '15059486487', '杭州市西湖区文三路259号', '怪兽小巴炒饭', '有问题请联系小兽，我们为您尽快处理（餐品洒漏或遗漏），小兽一定不会让您失望！实际支付满100》=可提供发票。');
INSERT INTO `restaurant` VALUES ('19', '泷乐成', '1f2bc729e806b0bb726e4601cad63018', '14504438647', '南昌市红谷中大道1706号', '绿茶餐厅', '新品小龙虾开售啦~');
INSERT INTO `restaurant` VALUES ('20', '撒和悌', '1a6e9adfa7006ad1a8e135c0607a9611', '14594654785', '郑州市高新区瑞达路19-27号', '鸭王', '百年烤鸭王朝的一代新君！经典，新派，网红，新潮，健康美食尽在鸭王三里河店！');
DROP TRIGGER IF EXISTS `tri_delete_customer`;
DELIMITER ;;
CREATE TRIGGER `tri_delete_customer` BEFORE DELETE ON `customer` FOR EACH ROW begin
delete from indent where customerID = old.id;
end
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `tri_delete_restaurant`;
DELIMITER ;;
CREATE TRIGGER `tri_delete_restaurant` BEFORE DELETE ON `restaurant` FOR EACH ROW begin
delete from dish where restaurantID = old.id;
end
;;
DELIMITER ;
