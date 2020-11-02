<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8">
        <title>URL Parameters</title>
    </head>
    <body>
        <form action= "urlparam.php" method="post">
            Password : <input type= "password" name = "password"> <br>
            <input type = "submit">
        </form>
        <br><br>
        
        <?php
            //POST-mostly for secure information VS GET-url parameters are visible 
            echo $_POST["password"];
        ?>
    </body>
</html>