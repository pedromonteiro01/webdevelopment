<?php
    define("TITLE", "PHP Variables and Constants");
    echo TITLE;
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLE;?></title>
    </head>
    <body>
        <?php
            $yourVariable = "Hello world";

            //BOOLEAN
            $loggedIn = true;

            //INTEGER
            $myAge = 20;

            //FLOATING POINT
            $totalPrice = 146.28;

            //STRING
            $fullName = "Pedro Monteiro";

            //DISPLAY
            echo "hello, my name is $fullName and I am $myAge years old.";
        ?>
    </body>
</html>