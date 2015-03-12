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

        function testSingleLetterTwoPoints()
        {
            //Arrange
            $single_letter_two_points = new Scrabbler;
            $input = "D";

            //Act
            $result = $single_letter_two_points->calculateScore($input);

            //Assert
            $this->assertEquals("Score: 2", $result);
        }

        function testSingleLetterThreePoints()
        {
            //Arrange
            $single_letter_three_points = new Scrabbler;
            $input = "B";

            //Act
            $result = $single_letter_three_points->calculateScore($input);

            //Assert
            $this->assertEquals("Score: 3", $result);
        }

        function testSingleLetterFourPoints()
        {
            //Arrange
            $single_letter_four_points = new Scrabbler;
            $input = "F";

            //Act
            $result = $single_letter_four_points->calculateScore($input);

            //Assert
            $this->assertEquals("Score: 4", $result);
        }
    }
?>
