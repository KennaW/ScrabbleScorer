<?php
    class Scrabbler
    {
        private $one_point = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');

        function calculateScore($input)
        {
            $point_counter = 0;
            if(in_array($input, $this->one_point)){
                $point_counter += 1;
            }
            return "Score: " . $point_counter;
        }
    }
?>
