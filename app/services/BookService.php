<?php

require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/util/PDOMySQL.php");
require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/models/Book.php");

class BookService{
   // Lấy dữ liệu từ database
   function getAllData(){
      $pdo = new PDOMySQL();
      $data = $pdo->Select("SELECT * FROM Books Order by id desc");
      $books = array();
      foreach ($data as $value) {
         $book = new Book($value['id'],$value['bookName'],$value['publicationYear'],$value['idAuthor']);
         array_push($books, $book);
      }
      return $books;
   }
   // Thêm dữ liệu vào database
   function insertBook($bookName, $publicationYear, $idAuthor){
      $pdo = new PDOMySQL();
      $sql = "INSERT INTO Books(bookName, publicationYear, idAuthor) VALUES('$bookName', '$publicationYear', '$idAuthor')";
      return $pdo->Insert($sql);
   }
   // Xóa dữ liệu trong database
   function deleteBook($id){
      $pdo = new PDOMySQL();
      $sql = "DELETE FROM Books WHERE id=$id";
      return $pdo->Delete($sql);
   }
   // Cập nhật dữ liệu trong database
   function updateBook($id, $bookName, $publicationYear, $idAuthor){
      $pdo = new PDOMySQL();
      $sql = "UPDATE Books SET bookName='$bookName', publicationYear='$publicationYear', idAuthor='$idAuthor' WHERE id=$id";
      return $pdo->Update($sql);
   }
}