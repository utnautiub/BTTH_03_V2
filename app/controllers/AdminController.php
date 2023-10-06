<?php

require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/services/AuthorService.php");
require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/services/BookService.php");


class AdminController{
   function EditBook(){
      if(isset($_POST['submitEditBook'])){
         $id = $_POST['id'];
         $bookName = $_POST['bookName'];
         $publicationYear = $_POST['publicationYear'];
         $idAuthor = $_POST['idAuthor'];
         // sql update
         $bookService = new BookService();
         if($bookService->updateBook($id, $bookName, $publicationYear, $idAuthor)){
            $mes = "Sửa thành công";
            $type = "success";
         }
         else{
            $mes = "Sửa thất bại";
            $type = "danger";
         }
         header("Location: http://localhost/CSE485_0923/BTTH_03_V2/public/index.php?mes=$mes&type=$type");
      }
      else{
         echo "Không tồn tại URL";
      }
   }

   function InsertBook(){
      if(isset($_POST['submitInsertBook'])){
         $bookName = $_POST['bookName'];
         $publicationYear = $_POST['publicationYear'];
         $idAuthor = $_POST['idAuthor'];
         // sql insert
         $bookService = new BookService();
         if($bookService->insertBook($bookName, $publicationYear, $idAuthor)){
            $mes = "Thêm thành công";
            $type = "success";
         }
         else{
            $mes = "Thêm thất bại";
            $type = "danger";
         }
         header("Location: http://localhost/CSE485_0923/BTTH_03_V2/public/index.php?mes=$mes&type=$type");
      }
      else{
         echo "Không tồn tại URL";
      }
   }

   function DeleteBook(){
      if(isset($_GET['id'])){
         $id = $_GET['id'];
         // sql delete
         $bookService = new BookService();
         if($bookService->deleteBook($id)){
            $mes = "Xóa thành công";
            $type = "success";
         }
         else{
            $mes = "Xóa thất bại";
            $type = "danger";
         }
         header("Location: http://localhost/CSE485_0923/BTTH_03_V2/public/index.php?mes=$mes&type=$type");
      }
      else{
         echo "Không tồn tại URL";
      }
   }

   function EditAuthor(){
      if(isset($_POST['submitEditAuthor'])){
         $id = $_POST['id'];
         $authorName = $_POST['authorName'];
         // sql update
         $authorService = new AuthorService();
         if($authorService->updateAuthor($id, $authorName)){
            $mes = "Sửa thành công";
            $type = "success";
         }
         else{
            $mes = "Sửa thất bại";
            $type = "danger";
         }
         header("Location: http://localhost/CSE485_0923/BTTH_03_V2/public/index.php?action=AuthorManagement&mes=$mes&type=$type");
      }
      else{
         echo "Không tồn tại URL";
      }
   }

   function InsertAuthor(){
      if(isset($_POST['submitInsertAuthor'])){
         $authorName = $_POST['authorName'];
         // sql insert
         $authorService = new AuthorService();
         if($authorService->insertAuthor($authorName)){
            $mes = "Thêm thành công";
            $type = "success";
         }
         else{
            $mes = "Thêm thất bại";
            $type = "danger";
         }
         header("Location: http://localhost/CSE485_0923/BTTH_03_V2/public/index.php?action=AuthorManagement&mes=$mes&type=$type");
      }
      else{
         echo "Không tồn tại URL";
      }
   }

   function DeleteAuthor(){
      if(isset($_GET['id'])){
         $id = $_GET['id'];
         // sql delete
         $authorService = new AuthorService();
         if($authorService->deleteAuthor($id)){
            $mes = "Xóa thành công";
            $type = "success";
         }
         else{
            $mes = "Xóa thất bại";
            $type = "danger";
         }
         header("Location: http://localhost/CSE485_0923/BTTH_03_V2/public/index.php?action=AuthorManagement&mes=$mes&type=$type");
      }
      else{
         echo "Không tồn tại URL";
      }
   }
}