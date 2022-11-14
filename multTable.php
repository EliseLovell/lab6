<?php
        echo "<title>Multiplication Table</title>";
        echo "<p align='center'>100x100 Table</p>";
        echo "<table>";
                for($i=1;$i<=100;$i++)
                {
                        echo "<tr>";
                        for($j=1;$j<=100;$j++)
                        {
                                echo ("<td>" .$i*$j. " </td>");
                        }
                        echo "</tr>";
                 }
        echo "</table>";
?>

