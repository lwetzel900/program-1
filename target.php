<?php

$answer = filter_input(INPUT_GET, 'answer', FILTER_VALIDATE_INT);
$rightAnswer = filter_input(INPUT_GET, 'answerHide');

if ($answer === $rightAnswer){
    $message = 'You got it right!!!';
}else {
    $message = 'Try again!!!';
}

var_dump($answer);
        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loren Wetzel</title>
    </head>  
    <body>
        <h1><?PHP echo $message?></h1>
        <h2>
            <?php
            echo $answer
            ?>
        </h2>
        
<!--        <p><?php echo $password ?></p>-->
    </body>
</html>