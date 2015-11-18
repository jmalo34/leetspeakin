<?php
    class LeetspeakTranslator
    {
        function translate($phrase)
        {
            $originals = array('e', 'o', 'I');
            $replacements = array('3', '0', '1');
            $s = 's';
            $ss = 'z';

            // $phrase = str_replace($originals, $replacements, $phrase);

            $phrase = explode(" ", (str_replace($originals, $replacements, $phrase)));

            $phrase_back = array();

            foreach ($phrase as $word)
            {

$re_phrased = array();


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

    //at this point, i've done what i need to do to each individual letter of a word, so the next step is to piece the letters back into a single word
                $the_converted = implode($re_phrased);
}
    //take this array of individual letters and implode it into a single string
                array_push($phrase_back, $the_converted);

    //that string containing a single word, needs to be placed back into an array, which will contain the other words in the sentence, converted as strtings in the same way

        }
    //done with what is to be done to each individual word, so i've closed the foreach loop here. it should repeat this again until each word is "translated", then moved onto the implode equations below
                $translation_is = implode(" ", $phrase_back);
                //
                // $newt = implode(" ", $re_phrased);
                // array_push($phrase_back, $newt);

            // $new_phrase = implode(" ", $re_phrased);
            return $translation_is;
        }
    }
 ?>
