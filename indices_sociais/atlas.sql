# MySQL-Front Dump 2.5
#
# Host: localhost   Database: atlas
# --------------------------------------------------------
# Server version 5.0.21-community-nt


#
# Table structure for table 'tb_mapa'
#

DROP TABLE IF EXISTS tb_mapa;
CREATE TABLE IF NOT EXISTS tb_mapa (
  mapa_cod tinyint(3) unsigned NOT NULL auto_increment,
  mapa_nome varchar(150) ,
  mapa_titulo varchar(150) ,
  mapa_tipo char(3) ,
  mapa_rotaimg varchar(100) ,
  tema_cod tinyint(3) unsigned NOT NULL DEFAULT '0' ,
  mapa_par tinyint(3) unsigned ,
  PRIMARY KEY (mapa_cod)
);



#
# Dumping data for table 'tb_mapa'
#

INSERT INTO tb_mapa VALUES("1", "CAPA_1", "Municipio em Mapas �<br> s�rie tem�tica: <br>�ndices sociais", "pdf", "mapa", "1", "1");
INSERT INTO tb_mapa VALUES("2", "mapaindice_1", "Subprefeituras e Distritos Municipio de S�o Paulo", "pdf", "mapa", "1", "2");
INSERT INTO tb_mapa VALUES("4", "indice1_1", "�ndice de Desenvolvimento Humano", "pdf", "mapa", "2", "2");
INSERT INTO tb_mapa VALUES("6", "indice2_1", "Mapa dos Direitos Humanos", "pdf", "mapa", "3", "2");
INSERT INTO tb_mapa VALUES("7", "indice2_2", "Mapa dos Direitos Humanos, segundo Dimens�es Analisadas", "pdf", "mapa", "3", "3");
INSERT INTO tb_mapa VALUES("9", "indice3_1", "�ndice de Vulnerabilidade Juvenil", "pdf", "mapa", "4", "2");
INSERT INTO tb_mapa VALUES("10", "indice3_2", "�ndice de Vulnerabilidade Juvenil, segundo Vari�veis Analisadas", "pdf", "mapa", "4", "3");
INSERT INTO tb_mapa VALUES("11", "indice3_3", "�ndice de Vulnerabilidade Juvenil, segundo Vari�veis Analisadas", "pdf", "mapa", "4", "4");
INSERT INTO tb_mapa VALUES("12", "indice3_4", "�ndice de Vulnerabilidade Juvenil, segundo Vari�veis Analisadas", "pdf", "mapa", "4", "5");
INSERT INTO tb_mapa VALUES("14", "indice4_1", "Mapa da Exclus�o/Inclus�o Social", "pdf", "mapa", "5", "2");
INSERT INTO tb_mapa VALUES("15", "indice4_2", "Mapa da Exclus�o/Inclus�o Social, segundo Dimens�es Analisadas", "pdf", "mapa", "5", "3");
INSERT INTO tb_mapa VALUES("16", "indice4_3", "Mapa da Exclus�o/Inclus�o Social, segundo Vari�veis Analisadas na Dimens�o Autonomia", "pdf", "mapa", "5", "4");
INSERT INTO tb_mapa VALUES("17", "indice4_4", "Mapa da Exclus�o/Inclus�o Social, segundo Vari�veis Analisadas na Dimens�o Qualidade de Vida", "pdf", "mapa", "5", "5");
INSERT INTO tb_mapa VALUES("18", "indice4_5", "Mapa da Exclus�o/Inclus�o Social, segundo Vari�veis Analisadas na Dimens�o Desenvolvimento Humano", "pdf", "mapa", "5", "6");
INSERT INTO tb_mapa VALUES("19", "indice4_6", "Mapa da Exclus�o/Inclus�o Social, segundo Vari�veis Analisadas na Dimens�o Eq�idade", "pdf", "mapa", "5", "7");
INSERT INTO tb_mapa VALUES("21", "indice5_1", "Mapa da Vulnerabilidade Social", "pdf", "mapa", "6", "2");
INSERT INTO tb_mapa VALUES("22", "indice5_2", "Mapa da Vulnerabilidade Social, segundo Dimens�es Analisadas", "pdf", "mapa", "6", "3");
INSERT INTO tb_mapa VALUES("23", "indice5_3", "Mapa da Vulnerabilidade Social, segundo Vari�veis Analisadas", "pdf", "mapa", "6", "4");
INSERT INTO tb_mapa VALUES("24", "indice5_4", "Mapa da Vulnerabilidade Social, segundo Vari�veis Analisadas", "pdf", "mapa", "6", "5");
INSERT INTO tb_mapa VALUES("25", "indice5_5", "Mapa da Vulnerabilidade Social, segundo Vari�veis Analisadas", "pdf", "mapa", "6", "6");
INSERT INTO tb_mapa VALUES("27", "indice6_1", "Indice Paulista de Vulnerabilidade Social", "pdf", "mapa", "7", "2");
INSERT INTO tb_mapa VALUES("28", "indice6_2", "Indice Paulista de Vulnerabilidade Social, segundo Vari�veis Analisadas", "pdf", "mapa", "7", "3");
INSERT INTO tb_mapa VALUES("29", "indice6_3", "Indice Paulista de Vulnerabilidade Social, segundo Vari�veis Analisadas", "pdf", "mapa", "7", "4");
INSERT INTO tb_mapa VALUES("30", "indice6_4", "Indice Paulista de Vulnerabilidade Social, segundo Vari�veis Analisadas", "pdf", "mapa", "7", "5");
INSERT INTO tb_mapa VALUES("3", "intro_idh", "Introdu��o", "pdf", "mapa", "2", "1");
INSERT INTO tb_mapa VALUES("5", "intro_dh", "Introdu��o", "pdf", "mapa", "3", "1");
INSERT INTO tb_mapa VALUES("8", "intro_ivj", "Introdu��o", "pdf", "mapa", "4", "1");
INSERT INTO tb_mapa VALUES("13", "intro_ei", "Introdu��o", "pdf", "mapa", "5", "1");
INSERT INTO tb_mapa VALUES("20", "intro_vs", "Introdu��o", "pdf", "mapa", "6", "1");
INSERT INTO tb_mapa VALUES("26", "intro_ipvs", "Introdu��o", "pdf", "mapa", "7", "1");


#
# Table structure for table 'tb_tema'
#

DROP TABLE IF EXISTS tb_tema;
CREATE TABLE IF NOT EXISTS tb_tema (
  tema_cod tinyint(3) unsigned NOT NULL auto_increment,
  tema_descricao varchar(150) DEFAULT '0' ,
  texto varchar(30) NOT NULL DEFAULT '' ,
  PRIMARY KEY (tema_cod)
);



#
# Dumping data for table 'tb_tema'
#

INSERT INTO tb_tema VALUES("2", "�ndice de Desenvolvimento Humano - IDH", "branco");
INSERT INTO tb_tema VALUES("3", "Mapa dos Direitos Humanos", "branco");
INSERT INTO tb_tema VALUES("4", "�ndice de Vulnerabilidade Juvenil - IVJ", "branco");
INSERT INTO tb_tema VALUES("5", "Mapa da Exclus�o/Inclus�o Social", "branco");
INSERT INTO tb_tema VALUES("6", "Mapa da Vulnerabilidade Social", "branco");
INSERT INTO tb_tema VALUES("7", "Indice Paulista de Vulnerabilidade Social - IPVS", "branco");
INSERT INTO tb_tema VALUES("1", "Capa e Mapa �ndice", "branco");
