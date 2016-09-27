<!DOCTYPE html>
<html>
   <head>
     <title>Book Search Results</title>
   </head>
   <body>
       <h3>Book Search Results<h3>
       <hr>
<?php
         $searchTitle = trim($_POST['searchTitle']);
         $searchAuthor= trim($_POST['searchTitle']);

         if(!$searchAuthor && !$searchTitle){
              printf("You must specify either a title or an author");
              exit();
         }
try{
    $db = new PDO("mysql:host=localhost;dbname=PHPFundamentals","root","root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
printf("We had a problem: %s\n", $e->getMessage());
}

$query = "select * from books";
if($searchAuthor && ! $searchTitle){
    $query = $query. " where title like '% " . $searchTitle. "%'";
}
?>
   </body>
</html>