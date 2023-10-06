<?php

class Author {
   // Properties
   private $id;
   private $authorName;

   // Methods
   // Constructor
   function __construct($id, $authorName) {
      $this->id = $id;
      $this->authorName = $authorName;
   }
   // Getters
   function getId() {
      return $this->id;
   }
   function getAuthorName() {
      return $this->authorName;
   }
   // Setters
   function setId($id) {
      $this->id = $id;
   }
   function setAuthorName($authorName) {
      $this->authorName = $authorName;
   }

}