<?php

class Book{
   // Properties
   private $id;
   private $bookName;
   private $publicationYear;
   private $idAuthor;
   // Methods
   // Constructor
   function __construct($id, $bookName, $publicationYear, $idAuthor) {
      $this->id = $id;
      $this->bookName = $bookName;
      $this->publicationYear = $publicationYear;
      $this->idAuthor = $idAuthor;
   }
   // Getters
   function getId() {
      return $this->id;
   }
   function getBookName() {
      return $this->bookName;
   }
   function getPublicationYear() {
      return $this->publicationYear;
   }
   function getIdAuthor() {
      return $this->idAuthor;
   }
   // Setters
   function setId($id) {
      $this->id = $id;
   }
   function setBookName($bookName) {
      $this->bookName = $bookName;
   }
   function setPublicationYear($publicationYear) {
      $this->publicationYear = $publicationYear;
   }
   function setIdAuthor($idAuthor) {
      $this->idAuthor = $idAuthor;
   }
}