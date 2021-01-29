# Table structure for table 'tx_news_domain_model_news'
CREATE TABLE tx_news_domain_model_news (

  tx_news_metarchivesdata_subtitle tinytext,
  tx_news_metarchivesdata_recordtype int(11),  
  tx_news_metarchivesdata_recordcollection int(11),  
  
  tx_news_metarchivesdata_recordquarter varchar(30) DEFAULT '' NULL,
  tx_news_metarchivesdata_recordsubprojects varchar(30) DEFAULT '' NULL,
  tx_news_metarchivesdata_recordmanager varchar(30) DEFAULT '' NULL,
  
);
