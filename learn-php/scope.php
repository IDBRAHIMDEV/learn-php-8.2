<?php
  
    // Local Scope
    // function saySalam($age) {
    //     $name = "Mohamed";
    //     echo "Salam $name age : $age";
    // }

    
    // saySalam(36);
    // echo $age;

    // Global Scope
    // $name = "Mohamed";

    // function saySalam($age) {
    //     global $name;
    //     $name = "basma";
    //     echo "Salam $name age : $age";
    // }

    
    // saySalam(36);
    // echo 'overide: ' . $name;

    // Reference Scope

    function saySalam(&$nom, $age) {
        $nom = "basma";
        echo "Salam $nom age : $age";
    }

    $name = "Mohamed";

    saySalam($name, 36);

    echo ' overide: ' . $name;

?>