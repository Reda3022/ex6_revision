
CREATE TABLE tb_articles
(
    id int(11) PRIMARY KEY NOT NULL COMMENT 'cle primaire' AUTO_INCREMENT,
    categorie int  COMMENT 'categorie',
    descr varchar(255) NOT NULL COMMENT 'description',
    prix float  NOT NULL COMMENT 'prix d''article',
    img   VARCHAR(50)   COMMENT 'image',
    evaluation int   COMMENT 'evaluation',
    CONSTRAINT  fk_cat  FOREIGN KEY(categorie)
        REFERENCES tb_categorie(id)

);

CREATE TABLE tb_categorie
(
    id int(11) PRIMARY KEY NOT NULL COMMENT 'cle primaire' AUTO_INCREMENT,

    nom varchar(255) NOT NULL COMMENT 'nom_article'


);


INSERT INTO tb_categorie (nom) VALUES ('carte mère');
INSERT INTO tb_categorie (nom) VALUES ('carte Graphique');
INSERT INTO tb_categorie (nom) VALUES ('Processeurs');



INSERT INTO tb_articles (categorie, descr, prix,img,evaluation) VALUES ('1', 'MSI GD65', 145.25,'img002',1);
INSERT INTO tb_articles (categorie, descr, prix,img,evaluation) VALUES ('2', 'MSI 3080 RTX', 525.75,'img003',4);
INSERT INTO tb_articles (categorie, descr, prix,img,evaluation) VALUES ('3', 'Intel I7 12750K', 411,'img004',3);

/* requete pour chercher le meuilleur article par raport a l'evaluation*/
select *
from tb_articles WHERE evaluation= (select max(evaluation) from tb_articles);