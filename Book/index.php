<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOK OOP</title>
</head>
<body>
   <form action="" method="post">
      <input type="text" name="author" id="author" placeholder="Enter Author">
      <br>
      <input type="text" name="title" id="title" placeholder="Enter Title">
      <br>
      <input type="number" name="year" id="year" placeholder="Enter Year Published">
      <br>
      <button type="submit" name="btn_submit">Submit</button>
   </form>
  
</body>
</html>

<?php
   include "Book.php";

   if(isset($_POST['btn_submit'])){
       $title = $_POST['title'];
       $author = $_POST['author'];
       $year_published = $_POST['year'];

       # Instantiate class
       $book = new Book($title,$author,$year_published);

       # SETTERS
       //$book->setTitle($title);
       //$book->setAuthor($author);
       //$book->setYearPublished($year_published);

       # GETTERS
       echo "Title: ".$book->getTitle()."<br>";
       echo "Author: ".$book->getAuthor()."<br>";
       echo "Year Published:" .$book->getYearPublished()."<br><br>";
        }



?>