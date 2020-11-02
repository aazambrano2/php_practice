<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Checkboxes</title>
    </head>
    <body>
        <form action="checkboxes.php" method = "post">
            Apples:<input type = "checkbox" name ="fruits[]" value="apples"><br>
            Oranges:<input type = "checkbox" name ="fruits[]" value="oranges"><br>
            Pears:<input type = "checkbox" name ="fruits[]" value="pears"><br>
            <input type = "submit">
            
        </form>


        <?php
            $fruits = $_POST["fruits"]; //this is actually an array
            echo $fruits[0],$fruits[1],$fruits[2];
            //echo $fruits[1];
            //echo $fruits[2];
            

        ?>
    </body>
</html>