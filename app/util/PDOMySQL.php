<?php

class PDOMySQL {
   // Properties
   private $pdo = null;
   // Select
   public function Select($sql=null){
      try{
         $pdo = new PDO("mysql:host=localhost;dbname=librarian", "root", "buituantu");
         if($sql!=null){
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount()>0){
               return $stmt->fetchAll();
            }
         }
      }catch(PDOException $e){
         echo"Lỗi kết nối CSDL";
         return null;
      }
   }
   // Insert
   public function Insert($sql=null){
      try{
         $pdo = new PDO("mysql:host=localhost;dbname=librarian", "root", "buituantu");
         if($sql!=null){
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount()>0){
               return true;
            }
         }
      }catch(PDOException $e){
         echo"Lỗi kết nối CSDL";
         return false;
      }
   }
      //Update
      public function Update($sql=null){
         try{
            $pdo = new PDO("mysql:host=localhost;dbname=librarian", "root", "buituantu");
            if($sql!=null){
               $stmt = $pdo->prepare($sql);
               $stmt->execute();
               if($stmt->rowCount()>0){
                  return true;
               }
            }
         }catch(PDOException $e){
            echo"Lỗi kết nối CSDL";
            return false;
         }
      }
      //Delete
      public function Delete($sql=null){
         try{
            $pdo = new PDO("mysql:host=localhost;dbname=librarian", "root", "buituantu");
            if($sql!=null){
               $stmt = $pdo->prepare($sql);
               $stmt->execute();
               if($stmt->rowCount()>0){
                  return true;
               }
            }
         }catch(PDOException $e){
            echo"Lỗi kết nối CSDL";
            return false;
         }
      }
   }