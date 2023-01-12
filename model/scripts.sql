create table tblcategorie
(
    id  int auto_increment
        primary key,
    nom varchar(50) null
);

INSERT INTO tblcategorie (id, nom) VALUES (1, 'catego1');
INSERT INTO tblcategorie (id, nom) VALUES (2, 'catego2');
INSERT INTO tblcategorie (id, nom) VALUES (3, 'catego3');

create table tblarticle
(
    id          int auto_increment
        primary key,
    categorie   int          null,
    description varchar(50)  null,
    prix        float(23, 0) null,
    image       varchar(50)  null,
    evaluation  int          null,
    constraint tblarticle_tblcategorie_id_fk
        foreign key (categorie) references tblcategorie (id)
);

INSERT INTO tblarticle (id, categorie, description, prix, image, evaluation) VALUES (3, 2, 'verre', 2, 'verre.jpg', 5);
INSERT INTO tblarticle (id, categorie, description, prix, image, evaluation) VALUES (19, 2, 'bottes', 124, 'botte.jpg', 7);
INSERT INTO tblarticle (id, categorie, description, prix, image, evaluation) VALUES (23, 1, 'lunette', 123, 'lunette.png', null);
