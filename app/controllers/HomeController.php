<?php

class HomeController {
   public function Index(){
      require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/services/BookService.php");
      $bookService = new BookService();
      $data = $bookService->getAllData();
      require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/views/Home/index.php");
   }
   public function AuthorManagement(){
      require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/services/AuthorService.php");
      $authorService = new AuthorService();
      $data = $authorService->getAllData();
      require_once ("{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/views/Home/authorManagement.php");
   }
}