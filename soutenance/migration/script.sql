

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

CREATE TABLE produit(
    id_produit int AUTO_INCREMENT,
    id_user int not null,
    nom_produit text,
    descrip_produit text,
    prix_produit float,
    qte_produit int,
    etat_produit int,
    create_at text,
    update_at text,
    delete_at text,
    PRIMARY KEY(id_produit),
    FOREIGN KEY(id_user) REFERENCES utilisateur(id_user) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE historique(
    id_hist int AUTO_INCREMENT,
    id_user int not null,
    id_produit int not null,
    qte_produit_hist int,
    prix_produit_hist float,
    motif_hist text,
    create_at text,
    update_at text,
    delete_at text,
    PRIMARY KEY(id_hist),
    FOREIGN KEY(id_user) REFERENCES utilisateur(id_user) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(id_produit) REFERENCES produit(id_produit) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE commande(
    id_commande int AUTO_INCREMENT,
    id_client int NOT null,
    id_produit int not null,
    id_user int NOT null,
    PRIMARY KEY(id_commande),
    FOREIGN KEY(id_client) REFERENCES client(id_client) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(id_produit) REFERENCES produit(id_produit) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(id_user) REFERENCES utilisateur(id_user) ON UPDATE CASCADE ON DELETE CASCADE
);
