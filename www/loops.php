<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8">
        <title>Loops</title>
    </head>
    <body>
        <form action= "loops.php" method="post">

        </form>
        <br><br>
        <?php
            //while
            $index = 1;
            echo "while loop <br>";
            while($index <= 5){
                echo "$index <br>";
                $index++;
            }

            $index2 = 6;
            //do while - Order is reverse, execute the body first and then check the condition 
            echo "do while loop <br>";
            do{
                echo "$index2 <br>";
                $index2++;
            }while($index2 <= 5);
            echo "For loop <br>";
            //for loop
            for($i = 1; $i <= 5; $i++){
                echo "$i <br>";
            }

            echo "iterating through array <br>";
            $luckyNumbers = array(4,8,14,16,23,42);

            for($i = 0; $i < count($luckyNumbers); $i++){
                echo "$luckyNumbers[$i]", " ";
            }

        ?>
    </body>
</html>