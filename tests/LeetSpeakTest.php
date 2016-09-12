<?php
    require_once "src/LeetSpeak.php";

    class LeetSpeakTest extends PHPUnit_Framework_TestCase
    {
        // function test_eTo3Converter ()
        // {
        //     //Arrange
        //     $test_eTo3Converter = new LeetSpeak;
        //     $input = "Hello";
        //
        //     //Act
        //     $result = $test_eTo3Converter->eTo3Converter($input);
        //
        //     //Assert
        //     $this->assertEquals("H3llo", $result);
        //
        // }

        // function test_oConverter()
        // {
        //     // Arrange
        //     $test_oConverter = new LeetSpeak;
        //     $input = "Hello Interesting Sun Soccer Isn't";
        //
        //     //Act
        //     $result = $test_oConverter->oConverter($input);
        //
        //     //Assert
        //     $this->assertEquals("Hell0 Interesting Sun S0ccer Isn't", $result);
        // }

        // function test_iTo1Converter()
        // {
        //     // Arrange
        //     $test_iTo1Converter = new LeetSpeak;
        //     $input = "Interesting";
        //
        //     //Act
        //     $result = $test_iTo1Converter->iTo1Converter($input);
        //
        //     //Assert
        //     $this->assertEquals("1nteresting", $result);
        // }

        // function test_sToZConverter()
        // {
        //     // Arrange
        //     $test_sToZConverter = new LeetSpeak;
        //     $input = "Interesting Sun Soccer Isn't";
        //
        //     //Act
        //     $result = $test_sToZConverter->sToZConverter($input);
        //
        //     //Assert
        //     $this->assertEquals("Interezting Sun Soccer Izn't", $result);
        // }

        function test_leetSpeakConvert()
        {
            // Arrange
            $test_leetSpeakConvert = new LeetSpeak;
            $input = "Hello Interesting Sun Soccer Isn't";

            //Act
            $result = $test_leetSpeakConvert->leetSpeakConvert($input);

            //Assert
            $this->assertEquals("H3ll0 1nt3r3zting Sun S0cc3r 1zn't", $result);
        }


    }

?>
