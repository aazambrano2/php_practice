<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8">
        <title>index</title>
    </head>
        <body>
            
            <?php include "html/header.html"?>
            
            <p> Hello World! <p>

            <?php  
                $title = "My First Post";
                $author = "Aaron";
                $wordCount = 400;
                include "article-header.php" 
            ?>
            
            <?php include "html/footer.html"?>
          
            <script type = "text/javascript"> alert("Welcome!"); </script>
        </body>
</html>