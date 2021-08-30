<?php
    define("TITLE", "Honest Click Bait Headlines");
    include("functions.php");

    if (isset($_POST["fix_submit"])){ 
        checkForClickBait();
    }
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
            <p class="lead">Hate click bait? Turn thos annoying headlines into realistic
                and honest ones using this simple program.
            </p>

            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg float-end" name="fix_submit">
                        Make honest!
                    </button>
                </form>
            </div>
        <?php
            //click bait headline example: scientists and doctors hate him, 10 simple tricks to hack your sleep. number 7 shocked me 


            if (isset($_POST["fix_submit"])){
                // get first value in array returned by checkForClickBait() function
                // store it in a variable
                $clickBait = checkForClickBait()[0];
                
                // get second value in array returned by checkForClickBait() function
                // store it in a variable
                $honestHeadline = checkForClickBait()[1];
                
                // call function
                // pass two arguments in the function
                displayHonestHeadline( $clickBait, $honestHeadline );
            }
        ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>