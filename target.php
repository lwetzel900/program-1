<?php

$answer = filter_input(INPUT_GET, 'answer');


if ($stuff === $password){
    $message = 'you guessed it!';
}else {
    $message = 'nope';
}

var_dump($answer);
        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>  
    <body>
        <h2>
            <?php
            echo $answer
            ?>
        </h2>
        
<!--        <p><?php echo $password ?></p>-->
    </body>
</html>