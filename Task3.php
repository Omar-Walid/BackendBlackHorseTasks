<?php

$names = ["Osama", "Ahmed", "Ali", "Mohamed", "Hossam", "Amr", "Mohamed"];
for( $i = 0; $i < count( $names ); $i++ ) {
    if( strlen($names[$i]) == 5 ) {
        echo $names[$i] . "<br>";
    }
    
}

?>