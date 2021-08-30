<?php
    define("TITLE", "PHP Arrays");
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLE;?></title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1><?php echo TITLE;?></h1>

        <?php
            //PLAIN VARIABLES
            $username = "pedrom";
            $fullname = "Pedro Monteiro";
            $age = 20;
            $gender = "male";
            $country = "Portugal";

            //SIMPLE ARRAYS
            $user = array(
                    "pedrom",           // 0
                    "Pedro Monteiro",   // 1
                    20,                 // 2
                    "male",             // 3
                    "Portugal"          // 4
                  );
            
            //ECHO ARRAYS VALUES
            echo $user[0] . "<br>";
            echo $user[1] . "<br>";
            echo $user[2] . "<br>";
            echo $user[3] . "<br>";
            echo $user[4] . "<br>";
      
            //ASSOCIATIVE ARRAYS
            $person = array(
                "username" => "pedrom",
                "fullname" => "Pedro Monteiro",
                "age" => 20,
                "gender" => "male",
                "country" => "Portugal"  
            );

            echo $person["username"] ."<br>";
            echo $person["fullname"] ."<br>";
            echo $person["age"] ."<br>";
            echo $person["gender"] ."<br>";
            echo $person["country"] ."<br>";

            //MULTI-DIMENSIONAL ARRAYS
            $employees = array(
                    array( // index of 0
                        "username" => "pedrom",
                        "fullname" => "Pedro Monteiro",
                        "age" => 20,
                        "gender" => "male",
                        "country" => "Portugal"  
                    ),

                    array( // index of 1
                        "username" => "inesa",
                        "fullname" => "Inês Abrantes",
                        "age" => 19,
                        "gender" => "female",
                        "country" => "Portugal"  
                    )
            );

            echo "<hr>";
            echo $employees[0]["username"]."<br>";
            echo $employees[0]["fullname"]."<br>";
            echo $employees[0]["age"]."<br>";
            echo $employees[0]["gender"]."<br>";
            echo $employees[0]["country"]."<br>";
            echo "<br>";
            echo $employees[1]["username"]."<br>";
            echo $employees[1]["fullname"]."<br>";
            echo $employees[1]["age"]."<br>";
            echo $employees[1]["gender"]."<br>";
            echo $employees[1]["country"]."<br>";
        ?>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>