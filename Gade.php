<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
</head>

<body>
    


		<h1>Final Quiz </h1>
		
     <?php
            
            
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
   


    $score = 0;
    
    if ($answer1 == "B") {$score++;}
    if ($answer2 == "A") { $score++; }
    if ($answer3 == "C") { $score++; }
    if ($answer4 == "A") { $score++; }
    if ($answer5 == "A") { $score++; }
    if ($answer6 == "C") { $score++; }
    if ($answer7 == "D") { $score++; }

   echo "<h2> TOTAL SCORE = $score / 7 <h2>"
    
 
     ?>
	
	



</body>
</html>
