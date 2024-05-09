<?php
   class Book {
      # Properties -> variables
      # Properties represents the chearacteristics or attributes of a class
      public $title; # var -> public ->properties
      # $title = "Book 1";
      public $author;
      private $year_published;

      # Methods -> functions
      # Methods reoresents the actions or behaviors that a class can perform.

      public function __construct($new_title,$new_author,$new_year_published){
          $this->title = $new_title;
          $this->author = $new_author;
          $this->year_published = $new_year_published; 
      }

      public function displayDetails(){
        # Object pertains to properties and methods defined in a class
         echo "Title: ".$this->title."<br>";
         echo "Author: ".$this->author."<br>";
      }

      # Setters
      # Methods used to assign value to the class properties

      # Example

     /* public function setTitle($new_title){
          $this->title = $new_title;
          # $title = $new_title;
      }

      public function setAuthor($new_author){
         $this->author = $new_author;
      }

      public function setYearPublished($new_year_published){
          $this->year_published = $new_year_published;
      }
    */
      # Getters
      # Methods used to retrieve the values of class properties
      public function getTitle(){
          return $this->title;
          # return $title = "Book 1";
      }

      public function  getAuthor(){
          return $this->author;
      }

      public function getYearPublished(){
           return $this->year_published;
      }
   }

   # Instantiation of class
   # Instantiate is creating a new copy of the class
   //$first_book = new Book;

   //$first_book->author = "Wallt Disny Productions.";
  // $first_book->title = "The Jungle Book";

   # Displaying book detailes
   /*$first_book->displayDetails();
   
   $second_book = new Book;

   # Setters
   $second_book->setAuthor("Lewis Carroll");
   $second_book->setTitle("Alice in Wonderland");
   $second_book->setYearPublished(1865);

   # Getters
   echo "<br> Title: ".$second_book->getTitle()."<br>";
   echo "Author: ".$second_book->getAuthor()."<br>";
   echo "Year Published:" .$second_book->getYearPublished()."<br><br>";
  */

  $third_book = new Book("Alice in Wonderland","Lewis Carrol",1865);
  echo "<br> Title: ".$third_book->getTitle()."<br>";
   echo "Author: ".$third_book->getAuthor()."<br>";
   echo "Year Published:" .$third_book->getYearPublished()."<br><br>";
  

?>