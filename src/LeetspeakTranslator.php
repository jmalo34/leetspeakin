<?php
    class LeetspeakTranslator
    {
        function translate($phrase)
        {
            $originals = array('e', 'o', 'I');
            $replacements = array('3', '0', '1');
            $s = 's';
            $ss = 'z';

            $phrase = str_replace($originals, $replacements, $phrase);

            $phrase = explode(" ", $phrase);
    //as of here, phrase has been translated for specs 1-4 and turned into an array, where each key has a string value where each string is a word from the phrase

            $re_phrased = array();

            $phrase_back = array();

            foreach ($phrase as $word)
            {
//foreach word/string in the phrase/array, we're going to split it into individual letters
                $letters = str_split($word);
//so, should i now do what i need to do to the letters, based on key placement (if key is 0, leave the s alone?)
//i need to iterate through the array of an idividual word, rejoin letters into individual word, push that word into rephrase array, and continue through cycle, as i don't want to have all individual letters being pushed into one single array without spaces
                foreach ($letters as $key => $value)
                {
                    if ($key !=0)
                    {
                        $convert = str_replace($s, $ss, $value);
                        array_push($re_phrased, $convert);
                    }
                    else
                    {
                        $convert = $value;
                        array_push($re_phrased, $convert);
                    }
                }
                $the_converted = implode($re_phrased);
                array_push($phrase_back, $the_converted);
                $translation_is = implode(" ", $re_phrased);
            }
                //
                // $newt = implode(" ", $re_phrased);
                // array_push($phrase_back, $newt);

            // $new_phrase = implode(" ", $re_phrased);
            return $translation_is;
        }
    }
 ?>
