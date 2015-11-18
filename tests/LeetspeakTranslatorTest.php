<?php
    require_once "src/LeetspeakTranslator.php";

    class LeetspeakTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_translate_E()
        {
            //Arrange
            $test_translate = new LeetspeakTranslator;
            $input = 'me';

            //Act
            $result = $test_translate->translate($input);

            //Assert
            $this->assertEquals('m3', $result);
        }

        function test_translate_o()
        {
            //Arrange
            $test_translate = new LeetspeakTranslator;
            $input = 'rookie';

            //Act
            $result = $test_translate->translate($input);

            //Assert
            $this->assertEquals('r00ki3', $result);
        }

        function test_translate_i()
        {
            //Arrange
            $test_translate = new LeetspeakTranslator;
            $input = 'Ivan';

            //Act
            $result = $test_translate->translate($input);

            //Assert
            $this->assertEquals('1van', $result);
        }

        function test_translate_s()
        {
            //Arrange
            $test_translate = new LeetspeakTranslator;
            $input = 'rookies';

            //Act
            $result = $test_translate->translate($input);

            //Assert
            $this->assertEquals('r00ki3z', $result);
        }

        function test_translate_firstS()
        {
            //Arrange
            $test_translate = new LeetspeakTranslator;
            $input = 'streets';

            //Act
            $result = $test_translate->translate($input);

            //Assert
            $this->assertEquals('str33tz', $result);
        }
    }

 ?>
