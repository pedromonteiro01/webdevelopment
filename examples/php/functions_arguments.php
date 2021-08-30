<?php
    define("TITLE", "Functions &amp; Arguments");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo TITLE;?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1><?php echo TITLE;?></h1>
            <?php
                function myFunction(){
                    $a = 0;
                    do{
                        echo "$a &nbsp;";
                        $a++;
                    }while ($a <= 100);
                }

                // call the function
                myFunction();

                echo "<hr>";

                function argFunct($a){
                    do{
                        echo "$a &nbsp;";
                        $a++;
                    }while ($a <= 10);
                }

                // call the function
                // pass the argument
                argFunct(5);

                function addNum($num1, $num2){
                    $newNum = $num1 + $num2;
                    echo "$num1 + $num2 = $newNum";
                }

                echo "<hr>";
                addNum(39, 128);
            ?>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>