<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8">
        <title>Switch Statement</title>
    </head>
    <body>
        <form action= "switchstatement.php" method="post">
            What was your grade?
             Grade: <input type= "text" name = "grade"> <br>
            <input type = "submit">
        </form>
        <br><br>
        <?php
            $grade = $_POST["grade"];
            switch($grade){ //one value and compared with different values
                case "A":
                    echo "You did amazing!";
                break; //breaks out of the programming structure (in this case it is the switch statement)
                case "B":
                    echo "You did pretty good";
                break;
                case "C":
                    echo "You did poorly!";
                break; //breaks out of the programming structure (in this case it is the switch statement)
                case "D":
                    echo "You did very bad";
                break;
                case "F":
                    echo "Failure";
                break;
                default:
                    echo "Invalid Grade";

            }
            
            
            
            
        ?>
    </body>
</html>