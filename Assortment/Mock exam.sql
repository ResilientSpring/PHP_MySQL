CREATE TABLE Genre (
    GenreID int NOT NULL PRIMARY KEY ,
    GenreName char
    );

CREATE TABLE Book
(
    BookID int PRIMARY KEY,
    BookName char,
    GenreID int,
    AuthorID int,

    FOREIGN KEY (GenreID) REFERENCES Genre(GenreID)

);


