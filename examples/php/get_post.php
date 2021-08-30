<?php
    define("TITLE", "GET &amp; POST");

    if (isset ($_POST["post_submit"])){
        //build a function that validates data
        function validateFormData($formData){
            $formData = trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }

        // check if inputs are empty
        if (!$_POST["post_name"]){
            $nameError = "Please enter your name<br>";
        } else{
            $name = validateFormData($_POST["post_name"]);
        }

        if (!$_POST["post_email"]){
            $emailError = "Please enter your email<br>";
        } else{
            $email = validateFormData($_POST["post_email"]);
        }
    }
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
            <h4>Submitted via $_GET</h4>
            <form action="form_get.php" method="get">
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="email" name="email">
                <input type="submit" name="form_submit">
            </form>
            <br>
            <h4>Submitted via $_POST</h4>
            <form action="form_post.php" method="post">
                <input type="text" placeholder="Name" name="post_name">
                <input type="text" placeholder="email" name="post_email">
                <input type="submit" name="post_submit">
            </form>
            <br>
            <h4>Submitted to current page</h4>
            <p class="text-danger">*Required fields</p>
            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]) ?>" method="post">
                <small class="text-danger">*<?php echo $nameError;?></small>
                <input type="text" placeholder="Name" name="post_name"><br><br>
                <small class="text-danger">*<?php echo $emailError;?></small>
                <input type="text" placeholder="email" name="post_email"><br><br>
                <input type="submit" name="post_submit" class="btn btn-primary btn-sm">
            </form>
            <?php 
                if (isset($_POST["post_submit"])){
                    echo "<h4>Your info</h4>";
                    echo "$name <br> $email";
                }
            ?>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>