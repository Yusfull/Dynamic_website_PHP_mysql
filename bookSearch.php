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
       ?>
   </body>
</html>