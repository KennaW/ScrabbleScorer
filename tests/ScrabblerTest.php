<?php

    require_once "src/Scrabbler.php";

    Class ScrabblerTest extends PHPUnit_Framework_TestCase
    {

        function testScrabblerSingleLetter()
        {

            //Arrange
            $single_letter = new Scrabbler;
            $input = "A";

            //Act
            $result = $single_letter->calculateScore($input);

            //
            $this->assertEquals("Score: 1", $result);

        }

        // function testSingleLetterHigherScore()
        // {
        //     //Arrange
        //     $single_letter_higher_score = new Scrabbler;
        //     $input = "D";
        //
        //     //Act
        //     $result = $single_letter_higher_score->calculateScore($input);
        //
        //     //Assert
        //     $this->assertEquals("Score: 2", $result);
        // }
    }
?>
