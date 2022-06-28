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
        releaseDate          Date NOT NULL ,
        duration             Time NOT NULL ,
        picture              Varchar (255) NOT NULL ,
        id_mk9h8_genres      Int NOT NULL ,
        id_mk9h8_language    Int NOT NULL ,
        id_mk9h8_reference   Int NOT NULL ,
        id_mk9h8_nationality Int NOT NULL ,
        id_mk9h8_directors   Int NOT NULL
	,CONSTRAINT mk9h8_movies_PK PRIMARY KEY (id)

	,CONSTRAINT mk9h8_movies_mk9h8_genres_FK FOREIGN KEY (id_mk9h8_genres) REFERENCES mk9h8_genres(id)
	,CONSTRAINT mk9h8_movies_mk9h8_language0_FK FOREIGN KEY (id_mk9h8_language) REFERENCES mk9h8_language(id)
	,CONSTRAINT mk9h8_movies_mk9h8_reference1_FK FOREIGN KEY (id_mk9h8_reference) REFERENCES mk9h8_reference(id)
	,CONSTRAINT mk9h8_movies_mk9h8_nationality2_FK FOREIGN KEY (id_mk9h8_nationality) REFERENCES mk9h8_nationality(id)
	,CONSTRAINT mk9h8_movies_mk9h8_directors3_FK FOREIGN KEY (id_mk9h8_directors) REFERENCES mk9h8_directors(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_actors
#------------------------------------------------------------

CREATE TABLE mk9h8_actors(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT mk9h8_actors_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_gender
#------------------------------------------------------------

CREATE TABLE mk9h8_gender(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT mk9h8_gender_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mK9h8_users
#------------------------------------------------------------

CREATE TABLE mK9h8_users(
        id              Int  Auto_increment  NOT NULL ,
        mail            Varchar (255) NOT NULL ,
        password        Varchar (255) NOT NULL ,
        lastname        Varchar (50) NOT NULL ,
        firstname       Varchar (50) NOT NULL ,
        username        Varchar (50) NOT NULL ,
        id_mk9h8_roles  Int NOT NULL ,
        id_mk9h8_gender Int NOT NULL
	,CONSTRAINT mK9h8_users_PK PRIMARY KEY (id)

	,CONSTRAINT mK9h8_users_mk9h8_roles_FK FOREIGN KEY (id_mk9h8_roles) REFERENCES mk9h8_roles(id)
	,CONSTRAINT mK9h8_users_mk9h8_gender0_FK FOREIGN KEY (id_mk9h8_gender) REFERENCES mk9h8_gender(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_prices
#------------------------------------------------------------

CREATE TABLE mk9h8_prices(
        id    Int  Auto_increment  NOT NULL ,
        name  Varchar (50) NOT NULL ,
        price Int NOT NULL
	,CONSTRAINT mk9h8_prices_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_sessions
#------------------------------------------------------------

CREATE TABLE mk9h8_sessions(
        id     Int  Auto_increment  NOT NULL ,
        hourly Datetime NOT NULL
	,CONSTRAINT mk9h8_sessions_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_tickets
#------------------------------------------------------------

CREATE TABLE mk9h8_tickets(
        id                Int  Auto_increment  NOT NULL ,
        datePurchase      Datetime NOT NULL ,
        quantity          Int NOT NULL ,
        dateReservation   Datetime NOT NULL ,
        id_mK9h8_users    Int NOT NULL ,
        id_mk9h8_prices   Int NOT NULL ,
        id_mk9h8_sessions Int NOT NULL
	,CONSTRAINT mk9h8_tickets_PK PRIMARY KEY (id)

	,CONSTRAINT mk9h8_tickets_mK9h8_users_FK FOREIGN KEY (id_mK9h8_users) REFERENCES mK9h8_users(id)
	,CONSTRAINT mk9h8_tickets_mk9h8_prices0_FK FOREIGN KEY (id_mk9h8_prices) REFERENCES mk9h8_prices(id)
	,CONSTRAINT mk9h8_tickets_mk9h8_sessions1_FK FOREIGN KEY (id_mk9h8_sessions) REFERENCES mk9h8_sessions(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: actors have movies
#------------------------------------------------------------

CREATE TABLE actors_have_movies(
        id              Int NOT NULL ,
        id_mk9h8_movies Int NOT NULL
	,CONSTRAINT actors_have_movies_PK PRIMARY KEY (id,id_mk9h8_movies)




	=======================================================================
	   Désolé, il faut activer cette version pour voir la suite du script ! 
	=======================================================================
