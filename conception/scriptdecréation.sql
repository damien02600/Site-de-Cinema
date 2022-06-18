#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: mk9h8_movies
#------------------------------------------------------------

CREATE TABLE mk9h8_movies(
        id          Int  Auto_increment  NOT NULL ,
        title       Varchar (255) NOT NULL ,
        description Text NOT NULL
	,CONSTRAINT mk9h8_movies_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_music
#------------------------------------------------------------

CREATE TABLE mk9h8_music(
        id              Int  Auto_increment  NOT NULL ,
        title           Varchar (255) NOT NULL ,
        likes           Int NOT NULL ,
        share           Int NOT NULL ,
        validate        Bool NOT NULL ,
        id_mk9h8_movies Int
	,CONSTRAINT mk9h8_music_PK PRIMARY KEY (id)

	,CONSTRAINT mk9h8_music_mk9h8_movies_FK FOREIGN KEY (id_mk9h8_movies) REFERENCES mk9h8_movies(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_moviesPictures
#------------------------------------------------------------

CREATE TABLE mk9h8_moviesPictures(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL ,
        link Varchar (50) NOT NULL
	,CONSTRAINT mk9h8_moviesPictures_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


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
        lastname       Varchar (50) NOT NULL ,
        firstname      Varchar (50) NOT NULL ,
        mail           Varchar (255) NOT NULL ,
        username       Varchar (50) NOT NULL ,
        password       Varchar (50) NOT NULL ,
        id_mk9h8_roles Int NOT NULL
	,CONSTRAINT mK9h8_users_PK PRIMARY KEY (id)

	,CONSTRAINT mK9h8_users_mk9h8_roles_FK FOREIGN KEY (id_mk9h8_roles) REFERENCES mk9h8_roles(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_comments
#------------------------------------------------------------

CREATE TABLE mk9h8_comments(
        id              Int  Auto_increment  NOT NULL ,
        content         Text NOT NULL ,
        date            Datetime NOT NULL ,
        id_mK9h8_users  Int NOT NULL ,
        id_mk9h8_movies Int NOT NULL
	,CONSTRAINT mk9h8_comments_PK PRIMARY KEY (id)

	,CONSTRAINT mk9h8_comments_mK9h8_users_FK FOREIGN KEY (id_mK9h8_users) REFERENCES mK9h8_users(id)
	,CONSTRAINT mk9h8_comments_mk9h8_movies0_FK FOREIGN KEY (id_mk9h8_movies) REFERENCES mk9h8_movies(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mk9h8_userPictures
#------------------------------------------------------------

CREATE TABLE mk9h8_userPictures(
        id             Int  Auto_increment  NOT NULL ,
        name           Varchar (50) NOT NULL ,
        link           Varchar (50) NOT NULL ,
        id_mK9h8_users Int NOT NULL
	,CONSTRAINT mk9h8_userPictures_PK PRIMARY KEY (id)

	,CONSTRAINT mk9h8_userPictures_mK9h8_users_FK FOREIGN KEY (id_mK9h8_users) REFERENCES mK9h8_users(id)
	,CONSTRAINT mk9h8_userPictures_mK9h8_users_AK UNIQUE (id_mK9h8_users)
)ENGINE=InnoDB;

