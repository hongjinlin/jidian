#
# Table structure for table 'tx_payment_domain_model_pay'
#
CREATE TABLE tx_payment_domain_model_pay (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  money decimal(11,2) NOT NULL default '0.00',
  name varchar(100) DEFAULT '' NOT NULL,
  email text NOT NULL,
  telephone text NOT NULL,
  comment text NOT NULL,
  module text NOT NULL,
  datauid int(11) DEFAULT '0' NOT NULL,
  title text NOT NULL,
  url text NOT NULL,
  ordernumber text NOT NULL,
  payment varchar(100) DEFAULT '' NOT NULL,
  certnumber text NOT NULL,
  spreadshareuserid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
  hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
  starttime int(11) unsigned DEFAULT '0' NOT NULL,
  endtime int(11) unsigned DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY language (l10n_parent,sys_language_uid)
);