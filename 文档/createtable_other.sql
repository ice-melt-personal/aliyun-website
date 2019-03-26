DROP TABLE IF EXISTS  `im_website_log`;
CREATE TABLE `im_website_data` (
  `log_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT, 
  `status` varchar(64) DEFAULT NULL,
  `description` longtext,
  `reason` longtext,
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `complate_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `im_article`;
CREATE TABLE `im_article` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT, 
  `filetype` varchar(64) DEFAULT NULL,
  `title` longtext,
  `content` MEDIUMBLOB not null,
  `save_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


序号	状态	描述
1	使用响应式布局方式完成网站整体布局	完成
2	"关于"模块，各子项功能	完成
3	主页轮播图	完成
4	常用链接功能	待。。。
5	教程布局	待。。。
6	项目布局	待。。。
7	留言功能	待。。。
网站历史规划:
序号	状态	描述
1	网站可以访问	完成

2019/03/21	首页轮播图，About_me，About_webset-log
2019/03/20	响应式布局网站
2019/03/07	开源网站代码测试
2018/11/28	PHP样例测试
2018/09/21	网站建站