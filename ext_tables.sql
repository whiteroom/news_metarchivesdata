# Table structure for table 'tx_news_domain_model_news'
CREATE TABLE tx_news_domain_model_news (
  tx_news_artworkdata_uid int(11) NOT NULL,
  tx_news_artworkdata_title tinytext,
  tx_news_artworkdata_title_alternative tinytext,  
  
  tx_news_artworkdata_artist tinytext,
  tx_news_artworkdata_artist_index int(11) DEFAULT '0' NOT NULL,
  tx_news_artworkdata_artist_name tinytext,
  tx_news_artworkdata_artist_vorname tinytext,
  tx_news_artworkdata_auflage tinytext,
  tx_news_artworkdata_format tinytext,
  tx_news_artworkdata_jahr varchar(30) DEFAULT '' NULL,
  tx_news_artworkdata_technik tinytext,
  
  
  tx_news_artworkdata_codezeile varchar(30) DEFAULT '' NULL,
  tx_news_artworkdata_recordtext varchar(30) DEFAULT '' NULL,
  tx_news_artworkdata_recordcode varchar(30) DEFAULT '' NULL,
  tx_news_artworkdata_erfassung varchar(30) DEFAULT '' NULL,
  tx_news_artworkdata_geprueft varchar(30) DEFAULT '' NULL,
  tx_news_artworkdata_disponibel int(11) DEFAULT '1' NOT NULL,
  tx_news_artworkdata_technikcode varchar(30) DEFAULT '' NULL,

  tx_news_artworkdata_verkauft int(11) DEFAULT '0' NOT NULL,
  tx_news_artworkdata_standort tinytext,
  tx_news_artworkdata_verkaeufer tinytext,
  tx_news_artworkdata_verkaeufernummer int(11) DEFAULT '0' NOT NULL,
  
  tx_news_artworkdata_einkaufspreis numeric(7,2),
  tx_news_artworkdata_verkaufspreis numeric(7,2),
  tx_news_artworkdata_rahmenpreis numeric(7,2),
  tx_news_artworkdata_totalpreis numeric(7,2),
  
  tx_news_artworkdata_notes text,
  tx_news_artworkdata_import int(11) DEFAULT '1' NOT NULL,


);
