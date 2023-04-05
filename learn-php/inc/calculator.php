<?php
function addition($a = 0, $b = 0) {
    return $a + $b;
}

function substraction($a = 0, $b = 0) {
    return $a - $b;
}

function multiplication($a = 0, $b = 0) {
    return $a * $b;
}

function division($a = 0, $b = 1) {
    
    if($b != 0) {
        return $a / $b;
    }
    return null;
}

?>