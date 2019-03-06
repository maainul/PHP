<html>
    <head>
        <title>Writng a function with return value</title>
    </head>
    <body>
        <?php
        /* Declearing a function */
            function addFunction($num1,$num2){
                $sum = $num1 + $num2;
                return $sum;
            }
        /* calling a function */
            $return_value = addFunction(10,20);
            
            echo "Returned value from the function:$return_value";
        ?>
    </body>
</html>
