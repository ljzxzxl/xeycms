CREATE TABLE xey_archives (
  id mediumint(8) unsigned auto_increment,
  typeid smallint(5) unsigned NOT NULL default '0',
  typeid2 varchar(90) NOT NULL default '0',
  flag set('a','b','c','d','e','f') default NULL,
  channel smallint(6) NOT NULL default '1',
  click mediumint(8) unsigned NOT NULL default '0',
  title char(60) NOT NULL default '',
  writer char(20) NOT NULL default '',
  source char(30) NOT NULL default '',
  litpic char(100) NOT NULL default '',
  pubdate int(10) unsigned NOT NULL default '0',
  senddate int(10) unsigned NOT NULL default '0',
  keywords char(30) NOT NULL default '',
  description varchar(255) NOT NULL default '',
  PRIMARY KEY (id)
)TYPE=MyISAM default character set utf8 collate utf8_general_ci;


CREATE TABLE xey_articles (
  aid mediumint(8) unsigned auto_increment,
  typeid smallint(5) unsigned NOT NULL default '0',
  body mediumtext,
  userip char(15) NOT NULL default '',
  PRIMARY KEY  (aid),
  KEY typeid (typeid)
) TYPE=MyISAM default character set utf8 collate utf8_general_ci;