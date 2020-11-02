<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>PHP PRACTICE</title>
    </head>
    <body>
        <?php
            //Source: https://www.youtube.com/watch?v=OK_JCtrrv-c&list=FL51M5P7bhgLi9K2Hc0_HU_g&index=2&t=1675s&ab_channel=freeCodeCamp.org
            //Variables
            $characterName = "John";
            $characterAge = 35;
            echo "There once was a man named $characterName <br>";
            echo "He was $characterAge years old <br>";
            $characterName = "Mike";
            echo "He really liked the name $characterName  <br>";
            echo " But didn't like being $characterAge <br>";
            
            //Basic primitive Data Types
            //String
            $phrase = "To be or not to be<br>";
            //integer
            $age = 30; //can be negative
            //floating
            $gpa = 3.73;
            //boolean
            $isMale = false;
            //null
            $address = null;
            //Print variables
            echo $phrase;

            //Working with Strings (string manipulation)
            echo "Giraffe Academy<br>";

            $phrase2 = "Giraffe Academy<br>";
            
            echo $phrase2 ;

            // upper and lower case

            echo strtolower($phrase2);
            echo strtoupper($phrase2);

            /*accessing length of string,string elements,string replace (characters)
            substrings(starting index, ending index ()), */
            echo strlen($phrase2);
            echo $phrase2[0];//G
            echo "Aaron"[0];
            echo $phrase2[0] = "B"; 
            echo "$phrase2  ";
            echo str_replace("Biraffe", "Panda", $phrase2); 
            echo substr($phrase2, 8,3),"<br>" ;//Biraffe Academy -> Aca
            //echo takes in multiple parametrs while print takes only one

            //Working with numbers
            echo 40,"<br>";
            echo -40,"<br>";
            echo -40.12314,"<br>";
            echo 5 + 9,"<br>";
            echo 5.7 * 9,"<br>";
            echo 1234 % 10, "<br>";
            echo 1234 / 10, "<br>";
            //integer division (//)
            echo intdiv(1234 , 10), "<br>";
            //ORDER OF OPERATIONS (PENDAS)
            echo (4 + 5) * 10,"<br>";
            //Increment and Decrement, divide and multiply
            $num = 10;
            $num++;
            echo $num, "<br>";
            $num += 25; // /= -= *=
            echo $num, "<br> ";

            //math operatins
            echo abs(-100), "<br>";
            echo pow(2,4) ,"<br>";
            echo sqrt(144), "<br>";
            echo max(2,10), "<br>";
            echo min(2,10), "<br>";
            echo round(3.2), "<br>";
            echo round(3.7), "<br>";
            echo ceil(3.2), "<br>"; //always round the number up
            echo floor(3.7), "<br>"; //always round the number up

            //User Inputs
            //Form is the middle man where the information is passed bewteen HTML and PHP

        ?>
    </body>

    <body>
        <form action ="hello.php" method = "get">
            Name: <br> <input type = "text" name ="username"> 
            <br>
            Age: <br> <input type = "number" name ="age"> 
            <br> <input type ="submit"> 
        </form>
        
        <br>
        Your name is <?php 
            //User Inputs
            //Form is the middle man where the information is passed bewteen HTML and PHP
            echo $_GET["username"];
        ?>
        <br>
        Your age is <?php echo $_GET["age"] ?>
        <br>
    </body>
    <br>
    <body>
        Building a calulator <br>
        <form action ="hello.php" method = "get">
            Num1: <input type = "number" name ="num1">
            <br>
            Num2: <input type = "number" name ="num2">
            <br>
            Calculate: <input type= "submit">
        </form>
        <br>
        Answer:<?php echo $_GET["num1"] + $_GET["num2"]; ?>
    </body>
</html>

