<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function testAnagramOneCharacter()
        {
            //Arrange
            $test_anagram_one_character = new Anagram;
            $input_word = 'i';
            $possible_match = 'i';

            //Act
            $result = $test_anagram_one_character->generateAnagram($input_word, $possible_match);

            //Assert
            $expected = array(true);
            $this->assertEquals($expected, $result);
        }


        function testAnagramOneWrongCharacter()
        {
            //Arrange
            $test_anagram_one_wrong_character = new Anagram;
            $input_word = 'i';
            $possible_match = 'a';

            //Act
            $result = $test_anagram_one_wrong_character->generateAnagram($input_word, $possible_match);

            //Assert
            $expected = array(false);
            $this->assertEquals($expected, $result);
        }

        function testAnagramMultipleCharacters()
        {
            //Arrange
            $test_anagram_multiple_characters = new Anagram;
            $input_word = 'abc';
            $possible_match = 'bac';

            //Act
            $result = $test_anagram_multiple_characters->generateAnagram($input_word, $possible_match);

            //Assert
            $expected = array(true);
            $this->assertEquals($expected, $result);
        }

        function testAnagramMultipleWords()
        {
            //Arrange

            $test_anagram_multiple_words = new Anagram;
            $input_word = 'abc';
            $possible_matches ='bca acb cab';

            //Act
            $result = $test_anagram_multiple_words->generateAnagram($input_word, $possible_matches);

            //Assert
            $expected = array(true, true, true);
            $this->assertEquals($expected, $result);
        }
    }


?>
