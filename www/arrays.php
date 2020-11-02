<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Arrays</title>
    </head>
    <body>
        <form action="arrays.php" method = "post">
            <input type = "text" name = "student">
            <input type = "submit">
        </form>

        <?php
            //Learning Arrays
            $friends = array("Kevin","Karen", "Oscar", "Jim");
            //You can push new elements in the array
            $friends[4] = "Angela";
            echo $friends[4],"<br>";
            echo count($friends),"<br>";

            //Associated arrays Like hash maps
            //key value pairs must be unique keys
            $grades = array("Jim"=>"A+", "Pam"=>"B-","Oscar"=>"C+");
            echo $grades["Jim"], "<br>";
            echo count($grades),"<br>";
            print_r(array_keys($grades)); //prints human-readable information about a variable (only numeric and string)
            echo '<br/>';
            $ans = array_keys($grades); //an array of keys 
            
            echo $ans[1],"<br>";
            echo "ANSWER: ",$grades[$_POST["student"]];


        ?>
        <!--This is a comment-->
    </body>
</html>