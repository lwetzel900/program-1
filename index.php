<!DOCTYPE html>
<?php
//1525 Program 1

//Create a PHP script that generates and displays a random math question and a form that allows the user to answer the 
//  question. Once the user has submitted the answer, tell the user the answer and whether they were correct or not.
//Error-trap the user entry to make sure the answer field is filled in. If not, respond back with the question/form again, including an error message on the page.
//The program doesn't need to repeat and ask multiple questions. That will be added in later.
//Use an external css file and apply some reasonable styling. Make it look like a real website and not just plain 
//  left aligned black text on a white background. I use the "I know it when I see it" standard.
//Hint: Store the answer and/or the problem in the form as hidden inputs. 
//  This will enable your script to "remember" the original problem when the user submits the answer.
    $var = 4;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loren Wetzel</title>
    </head>
    <body>
        
        <form action="target.php" method="get">
            
        <h1>Answer the question below.</h1>
        <label>2+2 = </label>
        <input type="text" name="answer"><br>
        
        <input type="hidden" name="answerHide"
               value="<?php echo $var; ?>">
        
        <label>&nbsp;</label>
                <input type="submit" value="Send"><br>
        
        </form>
    </body>
</html>
