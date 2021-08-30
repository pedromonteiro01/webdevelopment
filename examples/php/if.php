<?php
    define("TITLE", "If, else &amp; Elseif statements");
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
            //IF expression is TRUE, do something
            // IF expression is FALSE, don't do anything
                $foo = 99;
                $bar = 79;
                $currentlyListeningto = "Lon3r";

                if($foo > $bar){
                    echo "$foo is greater than $bar<br>";
                } 


                if ($currentlyListeningto == "Lon3r"){
                    echo "You are listening $currentlyListeningTo<br>";
                }
                else{
                    echo "You aren't listening $currentlyListeningTo<br>";
                }

                $favProgrammingLang = "Python";
                if ($favProgrammingLang == "C++"){
                    echo "Your favourite programming language is $favProgrammingLang<br>";
                }
                elseif ($favProgrammingLang == "PHP"){
                    echo "Your favourite programming language is $favProgrammingLang<br>";
                }
                else{
                    echo "Your favourite programming language is $favProgrammingLang<br>";
                }
            ?>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>