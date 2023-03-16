CREATE TABLE utilisateur(
    id_user int AUTO_INCREMENT,
    nom_user text,
    prenom_user text,
    password_user text,
    type_user text,
    statut_user text,
    etat_user int,
    create_at text,
    update_at text,
    delete_at text,
    PRIMARY KEY(id_user)
);

CREATE TABLE client(
    id_client int AUTO_INCREMENT,
    id_user int not null,
    nom_client text,
    email_client text,
    etat_client int,
    create_at text,
    update_at text,
    delete_at text,
    PRIMARY KEY(id_client),
    FOREIGN KEY(id_user) REFERENCES utilisateur(id_user) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE tables(
id_table int AUTO_INCREMENT,
id_client int not null,
numero_table int,
nombre_place int,
PRIMARY KEY(id_table),
FOREIGN KEY(id_client) REFERENCES client(id_client) ON UPDATE CASCADE ON DELETE CASCADE);

CREATE TABLE reservation(
id_reservation int AUTO_INCREMENT,
id_client int NOT null,
id_table int NOT null,
date text,
heure text,
nombre_table int,
statut_reservation text,
etat_resevation int,
create_at text,
update_at text,
delete_at text,
PRIMARY KEY(id_reservation),
FOREIGN KEY(id_client) REFERENCES client(id_client) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(id_table) REFERENCES tables(id_table) ON UPDATE CASCADE ON DELETE CASCADE);


CREATE TABLE commande(
    id_commande int AUTO_INCREMENT,
    nom_commande text,
    qte_commande text,
    prix_commande varchar(30),
    id_client int NOT null,
    id_menu int not null,
    id_user int NOT null,
    PRIMARY KEY(id_commande),
    FOREIGN KEY(id_client) REFERENCES client(id_client) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(id_user) REFERENCES utilisateur(id_user) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(id_menu) REFERENCES menus(id_menu) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE menus(
id_menu int AUTO_INCREMENT,
nom_menu text,
vue varchar,
description text,);