CREATE DATABASE librarian 
USE librarian

CREATE TABLE authors (
  id INT PRIMARY KEY AUTO_INCREMENT,
  authorName VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE books (
  id INT PRIMARY KEY AUTO_INCREMENT,
  bookName VARCHAR(255) UNIQUE,
  publicationYear INT NULL,    
  idAuthor INT NOT NULL,
  FOREIGN KEY (idAuthor) REFERENCES author(id) ON DELETE CASCADE
);

INSERT INTO author(authorName) VALUES ('Harper Lee');quanlybaihat
INSERT INTO author(authorName) VALUES ('Nguyễn Nhật Ánh');

SELECT * FROM Authors Order by id desc

INSERT INTO book(bookName, publicationYear, idAuthor) VALUES ('Giết con chim nhại', 1960, 1);
INSERT INTO book(bookName, publicationYear, idAuthor) VALUES ('Trước vòng chung kết', 1984, 2);
INSERT INTO book(bookName, publicationYear, idAuthor) VALUES ('Mắt biếc', 1990, 2);
INSERT INTO book(bookName, publicationYear, idAuthor) VALUES ('Bạn cùng lớp', 2022, 2);