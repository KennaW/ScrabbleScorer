<?php
    class Scrabbler
    {

        function calculateScore($input)
        {
            $one_point = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
            $point_counter = 0;
            if(in_array($input, $one_point)){
                $point_counter += 1;
            }
            return "Score: " . $point_counter;
        }
    }
?>
