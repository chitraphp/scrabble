<?php


   require_once "src/Scrabble.php";




    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {


        function test_scrabble_letter()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "A";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(1,$result);


        }

        function test_scrabble_LowerCase_letter()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "a";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(1,$result);


        }


        function test_scrabble_Two_letter()
        {   //Arrange
            $test_scrabble = new Scrabble;
            $input = "Aa";
            //Act
            $result = $test_scrabble->ScrabbleChecker($input);

            //Assert
            $this->assertEquals(2,$result);


        }




    }



?>
