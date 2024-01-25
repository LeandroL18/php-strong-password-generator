<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password generator</title>

        <?php
            require_once __DIR__ . "/partials/functions.php";

            session_start();

            $color = "red";
        ?>

    </head>
    <body style="text-align:center; padding-top:3%">
        <h1 style="margin-bottom:50px;">Password generator</h1>

        <form>
            <input type="number" name="pws_lng"> 

            <input type="submit" value="GENERA">
        </form>

        <?php

            $pws_lng = $_GET["pws_lng"] ?? -1;

            if ($pws_lng > 0) {

                $pws = getPws($pws_lng);

            }
        ?>

    <h2>
        La tua password e': 
        <?php echo $pws; ?>
    </h2>

    </body>
</html>