<?php
    class Scrabbler
    {
        private $one_point = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
        private $two_point = array('D', 'G');

        function calculateScore($input)
        {
            $point_counter = 0;
            if(in_array($input, $this->one_point)){
                $point_counter += 1;
            }
            if(in_array($input, $this->two_point)){
                $point_counter += 2;
            }
            return "Score: " . $point_counter;
        }
    }
?>
