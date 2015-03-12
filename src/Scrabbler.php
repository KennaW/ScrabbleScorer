<?php
    class Scrabbler
    {
        private $one_point = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
        private $two_point = array('D', 'G');
        private $three_point = array('B', 'C', 'M', 'P');
        private $four_point = array('F', 'H', 'V', 'W', 'Y');
        //k is in its own if statement

        function calculateScore($input)
        {
            $point_counter = 0;
            if(in_array($input, $this->one_point)){
                $point_counter += 1;
            }
            if(in_array($input, $this->two_point)){
                $point_counter += 2;
            }
            if(in_array($input, $this->three_point)){
                $point_counter += 3;
            }
            if(in_array($input, $this->four_point)){
                $point_counter += 4;
            }
            return "Score: " . $point_counter;
        }
    }
?>
