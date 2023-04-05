<?php

        $prices = [45, 78, 20, 30, 2];
        
        $step = 2;

        $result = array_map(function ($item) use ($step) {
                        return $item * $step; 
                  }, $prices);

        print_r($result);

?>