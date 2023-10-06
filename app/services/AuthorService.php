<?php

require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/util/PDOMySQL.php");
require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/models/Author.php");

class AuthorService{
   // Lấy dữ liệu từ database
   function getAllData(){
         $pdo = new PDOMySQL();
         $data = $pdo->Select("SELECT * FROM Authors Order by id desc");
         $authors = array();
         foreach ($data as $value) {
            $author = new Author($value['id'],$value['authorName']);
            array_push($authors, $author);
         }
         return $authors;
   }
   // Thêm dữ liệu vào database
   function insertAuthor($authorName){
      $pdo = new PDOMySQL();
      $sql = "INSERT INTO Authors(authorName) VALUES('$authorName')";
      return $pdo->Insert($sql);
   }
   // Xóa dữ liệu trong database
   function deleteAuthor($id){
      $pdo = new PDOMySQL();
      $sql = "DELETE FROM Authors WHERE id=$id";
      return $pdo->Delete($sql);
   }
   // Cập nhật dữ liệu trong database
   function updateAuthor($id, $authorName){
      $pdo = new PDOMySQL();
      $sql = "UPDATE Authors SET authorName='$authorName' WHERE id=$id";
      return $pdo->Update($sql);
   }
}