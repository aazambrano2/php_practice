<html>
    <head>
        <meta charset = "utf-8">
        <title>If Statements</title>
    </head>
        <body>
            <?php  
                //if statements && || !
                $isMale = false;
                $isTall = true;
                if($isMale && $isTall){
                    echo "You are a tall male";
                } elseif ($isMale && !$isTall){
                    echo "You are a short male";
                }elseif(!$isMale && $isTall){
                    echo "You are a not male but are tall";
                }else{
                    echo "You are not a tall male";
                }
                echo "<br>";

                //comparisons operators > < >= <=
                function getMax($num1,$num2, $num3){
                    if($num1 >= $num2 && $num1 >= $num3){
                        return $num1;
                    }
                    elseif($num2 >= $num1 && $num2 >= $num3){
                        return $num2;
                    }else{
                        return $num3;
                    }

                }

                echo getMax(3,20,10);
                
            ?>
        </body>
</html>
