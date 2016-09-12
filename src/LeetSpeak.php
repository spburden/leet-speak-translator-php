<?php
class LeetSpeak
{
    function eTo3Converter($input_word)
    {
        $letter_array = str_split($input_word);
        for ($i=0; $i < sizeof($letter_array); $i++) {
            if ($letter_array[$i] == "e" || $letter_array[$i] == "E") {
                $letter_array[$i] = "3";
            }
        }
        $output_word = implode("", $letter_array);
        return $output_word;
    }

    function oConverter($input_word)
    {
        $letter_array = str_split($input_word);
        for ($i=0; $i < sizeof($letter_array); $i++) {
            if ($letter_array[$i] == "o" || $letter_array[$i] == "O") {
                $letter_array[$i] = "0";
            }
        }
        $output_word = implode("", $letter_array);
        return $output_word;
    }

    function iTo1Converter($input_word)
    {
        $letter_array = str_split($input_word);
        for ($i=0; $i < sizeof($letter_array); $i++) {
            if ($letter_array[$i] == "I") {
                $letter_array[$i] = "1";
            }
        }
        $output_word = implode("", $letter_array);
        return $output_word;
    }

    function sToZConverter($input_word)
    {
        $letter_array = str_split($input_word);
        for ($i=1; $i < sizeof($letter_array); $i++) {
            if ($letter_array[$i] == "s" && $letter_array[$i-1] != " ") {
                $letter_array[$i] = "z";
            }
        }
        $output_word = implode("", $letter_array);
        return $output_word;
    }

    function leetSpeakConvert($input)
    {
        $letter_array = str_split($input);
        for ($i=0; $i < sizeof($letter_array); $i++) {
            if ($letter_array[$i] == "e" || $letter_array[$i] == "E") {
                $letter_array[$i] = "3";
            } elseif ($letter_array[$i] == "o" || $letter_array[$i] == "O") {
                 $letter_array[$i] = "0";
            } elseif ($letter_array[$i] == "I") {
                $letter_array[$i] = "1";
            } elseif ($letter_array[$i] == "s" && $letter_array[$i-1] !== " ") {
                $letter_array[$i] = "z";
            }
        }
        $output = implode("", $letter_array);
        return $output;
    }

}
?>
