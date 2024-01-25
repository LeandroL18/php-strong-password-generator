<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password generator</title>

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

                $charSet = "";

                for ($x=ord('a');$x<=ord('z');$x++) {

                    $charSet .= chr($x);
                }
                for ($x=ord('A');$x<=ord('Z');$x++) {

                    $charSet .= chr($x);
                }
                for ($x=ord('0');$x<=ord('9');$x++) {

                    $charSet .= chr($x);
                }
                for ($x=ord('!');$x<=ord('/');$x++) {

                    $charSet .= chr($x);
                }

                $pws = "";
                
                for ($x=0;$x<$lng;$x++) {

                    $rndCharIndex = rand(0, strlen($charSet)-1);
                    $rndChar = $charSet[$rndCharIndex];

                    $pws .= $rndChar;
                }

            }
        ?>

    <h2 style="color:black;">
        Ecco la tua password: 
        <?php echo $pws; ?>
    </h2>

    </body>
</html>