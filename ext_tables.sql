CREATE TABLE tx_pepgallery_domain_model_gallery (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  title varchar(255) DEFAULT '' NOT NULL,
  description text,
  main_asset int(11) unsigned DEFAULT '0' NOT NULL,
  folder varchar(255) DEFAULT '' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  PRIMARY KEY (uid)
);