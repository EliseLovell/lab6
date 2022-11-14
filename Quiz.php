<?php
        $answer1 = $_POST['q1'];
        $answer2 = $_POST['q2'];
        $answer3 = $_POST['q3'];
        $answer4 = $_POST['q4'];
        $answer5 = $_POST['q5'];

        $totalCorrect = 0;

        if ($answer1 == "South Pole") { $totalCorrect++; }
        if ($answer2 == "120 cm") { $totalCorrect++; }
        if ($answer3 == "Atlantic Silverfish") { $totalCorrect++; }
        if ($answer4 == "62-67 days") { $totalCorrect++; }
        if ($answer5 == "564 m") { $totalCorrect++; }

        $percent = (($totalCorrect / 5) * 100);

        echo nl2br("Question 1: Where do emperor penguins live?\n");
        echo nl2br("    Your answer: $answer1\n");
        echo nl2br("    Correct answer: South Pole\n<br>");

        echo nl2br("Question 2: What is the average height of an emperor penguin?\n");
        echo nl2br("    Your answer: $answer2\n");
        echo nl2br(     "Correct answer: 120 cm\n<br>");

        echo nl2br("Question 3: What is the most common thing in an emperor penguin's diet?\n");
        echo nl2br("    Your answer: $answer3\n");
        echo nl2br("    Correct answer: Atlantic Silverfish\n<br>");

        echo nl2br("Question 4: How long does an emperor penguin egg take to hatch?\n");
        echo nl2br("    Your answer: $answer4\n");
        echo nl2br("    Correct answer: 62-67 days\n<br>");

        echo nl2br("Question 5: What is the deepest recorded dive for an emperor penguin?\n");
        echo nl2br("    Your answer: $answer5\n");
        echo nl2br("    Correct answer: 564 m\n<br>");

        echo nl2br("You got $totalCorrect out of 5 points\n");
        echo nl2br("You're score is $percent %\n");

?>
