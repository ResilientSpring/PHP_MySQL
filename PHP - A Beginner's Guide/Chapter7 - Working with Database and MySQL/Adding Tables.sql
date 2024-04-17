CREATE TABLE artists(
    artist_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    artist_name VARCHAR(50) NOT NULL,
    artist_country CHAR(2) NOT NULL
);

CREATE TABLE ratings(
    rating_id INT(2) NOT NULL PRIMARY KEY ,
    rating_name VARCHAR(50) NOT NULL
);

CREATE TABLE songs(

    song_id INT(4) NOT NULL PRIMARY KEY ,


)