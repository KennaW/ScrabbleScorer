<?php

    require_once "src/Scrabbler.php";

    Class ScrabblerTest extends PHPUnit_Framework_TestCase
    {

        function test_ScrabblerSingleLetter()
        {

            //Arrange
            $single_letter = new Scrabbler;
            $input = "A";

            //Act
            $result = $single_letter->calculateScore($input);

            //
            $this->assertEquals("Score: 1", $result);

        }
    }
