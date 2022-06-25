#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: mk9h8_roles
#------------------------------------------------------------

CREATE TABLE mk9h8_roles(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT mk9h8_roles_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mK9h8_users
#------------------------------------------------------------

CREATE TABLE mK9h8_users(
        id             Int  Auto_increment  NOT NULL ,
        mail           Varchar (255) NOT NULL ,
        password       Varchar (50) NOT NULL ,
        lastname       Varchar (50) NOT NULL ,
        firstname      Varchar (50) NOT NULL ,
        username       Varchar (50) NOT NULL ,
        gender         Bool NOT NULL ,
        id_mk9h8_roles Int NOT NULL
	,CONSTRAINT mK9h8_users_PK PRIMARY KEY (id)

	,CONSTRAINT mK9h8_users_mk9h8_roles_FK FOREIGN KEY (id_mk9h8_roles) REFERENCES mk9h8_roles(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_admin
#------------------------------------------------------------

CREATE TABLE mk9h8_admin(
        id       Int  Auto_increment  NOT NULL ,
        username Varchar (50) NOT NULL ,
        password Varchar (50) NOT NULL
	,CONSTRAINT mk9h8_admin_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_genres
#------------------------------------------------------------

CREATE TABLE mk9h8_genres(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT mk9h8_genres_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_language
#------------------------------------------------------------

CREATE TABLE mk9h8_language(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT mk9h8_language_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_nationality
#------------------------------------------------------------

CREATE TABLE mk9h8_nationality(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT mk9h8_nationality_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_directors
#------------------------------------------------------------

CREATE TABLE mk9h8_directors(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT mk9h8_directors_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_reference
#------------------------------------------------------------

CREATE TABLE mk9h8_reference(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT mk9h8_reference_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_movies
#------------------------------------------------------------

CREATE TABLE mk9h8_movies(
        id                   Int  Auto_increment  NOT NULL ,
        title_vo             Varchar (255) NOT NULL ,
        title_vf             Varchar (255) NOT NULL ,
        description          Text NOT NULL ,
        actor                Varchar (50) NOT NULL ,
        releaseDate          Date NOT NULL ,
        duration             Smallint NOT NULL ,
        picture              Varchar (255) NOT NULL ,
        id_mk9h8_genres      Int NOT NULL ,
        id_mk9h8_admin       Int NOT NULL ,
        id_mk9h8_language    Int NOT NULL ,
        id_mk9h8_reference   Int NOT NULL ,
        id_mk9h8_nationality Int NOT NULL ,
        id_mk9h8_directors   Int NOT NULL
	,CONSTRAINT mk9h8_movies_PK PRIMARY KEY (id)

	,CONSTRAINT mk9h8_movies_mk9h8_genres_FK FOREIGN KEY (id_mk9h8_genres) REFERENCES mk9h8_genres(id)
	,CONSTRAINT mk9h8_movies_mk9h8_admin0_FK FOREIGN KEY (id_mk9h8_admin) REFERENCES mk9h8_admin(id)
	,CONSTRAINT mk9h8_movies_mk9h8_language1_FK FOREIGN KEY (id_mk9h8_language) REFERENCES mk9h8_language(id)
	,CONSTRAINT mk9h8_movies_mk9h8_reference2_FK FOREIGN KEY (id_mk9h8_reference) REFERENCES mk9h8_reference(id)
	,CONSTRAINT mk9h8_movies_mk9h8_nationality3_FK FOREIGN KEY (id_mk9h8_nationality) REFERENCES mk9h8_nationality(id)
	,CONSTRAINT mk9h8_movies_mk9h8_directors4_FK FOREIGN KEY (id_mk9h8_directors) REFERENCES mk9h8_directors(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_reservation
#------------------------------------------------------------

CREATE TABLE mk9h8_reservation(
        id              Int  Auto_increment  NOT NULL ,
        dateReservation Datetime NOT NULL
	,CONSTRAINT mk9h8_reservation_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users have reservation
#------------------------------------------------------------

CREATE TABLE users_have_reservation(
        id             Int NOT NULL ,
        id_mK9h8_users Int NOT NULL
	,CONSTRAINT users_have_reservation_PK PRIMARY KEY (id,id_mK9h8_users)

	,CONSTRAINT users_have_reservation_mk9h8_reservation_FK FOREIGN KEY (id) REFERENCES mk9h8_reservation(id)
	,CONSTRAINT users_have_reservation_mK9h8_users0_FK FOREIGN KEY (id_mK9h8_users) REFERENCES mK9h8_users(id)
)ENGINE=InnoDB;

