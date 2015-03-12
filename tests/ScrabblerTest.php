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

        function testK()
        {

            //Arrange
            $single_letter_k = new Scrabbler;
            $input = "K";

            //Act
            $result = $single_letter_k-> calculateScore($input);

            //Assert
            $this->assertEquals("Score: 5", $result);
        }

        function testSingleLetterEightPoints()
        {
            //Arrange
            $single_letter_eight_points = new Scrabbler;
            $input = "J";

            //Act
            $result = $single_letter_eight_points->calculateScore($input);

            //Assert
            $this->assertEquals("Score: 8", $result);
        }

        function testSingleLetterTenPoints()
        {
            //Arrange
            $single_letter_ten_points = new Scrabbler;
            $input = "Q";

            //Act
            $result = $single_letter_ten_points->calculateScore($input);

            //Assert
            $this->assertEquals("Score: 10", $result);
        }

        function testLowerCase()
        {
            //Arrange
            $test_lowercase = new Scrabbler;
            $input = "a";

            //Act
            $result = $test_lowercase->calculateScore($input);

            //Assert
            $this->assertEquals("Score: 1", $result);
        }
    }
?>
