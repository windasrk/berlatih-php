<?php

function papancatur($baris) {
    $x=1;
    echo "<table align=center border=0 cellspacing=0>";
    while ($x <= $baris) {
        echo "<tr>";
        $y=1;
        while ($y <= $baris) {
            if (($x+$y) %2 > 0)
            echo "<td><br>
                </td>";
            else
            echo "<td>#
                </td>";
            $y++;
        }
        echo "</tr>";
        $x++;
    }
    echo "</table><br><br>";
} 

// TEST CASES
echo papancatur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */
echo papancatur(5); 
?>