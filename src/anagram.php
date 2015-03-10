<?php
    class Anagram
    {


        function generateAnagram($input_word, $possible_match)
        {
            $result = array();

            $split_input = array();
            $split_match = array();

            $split_input = str_split($input_word);
            $split_match = str_split($possible_match);

            sort($split_input);
            sort($split_match);


            if( $split_input == $split_match)
            {
                array_push($result, true);
            } else {
                array_push($result, false);
            }

            return $result;

            // foreach ($split_input_sorted as $character)
                // if (array_intersect($character, $split_match_sorted))
                // {
                //     array_push($result, true);
                //     return true;
                // } else {
                //     return false;
                // }


                // $compare_two_arrays_result = array_intersect($split_input_sorted, $split_match_sorted);



    }

    }



?>
