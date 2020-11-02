<html>
    <head>
        <meta charset = "utf-8">
        <title>Functions</title>
    </head>
        <body>
            <?php  
                //functions You can return any type or null
                function sayHi($name, $age) {
                    echo "Hello $name, you are $age  <br>";
                }

                function cube($num){
                    return $num * $num * $num;
                }

                sayHi("Aaron",22);
                sayHi("Dave",14);
                sayHi("Oscar",60);
                echo cube(2) , "<br>";
                echo cube(4) , "<br>";
                
            ?>
        </body>
</html>
