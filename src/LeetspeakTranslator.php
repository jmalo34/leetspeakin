<?php
    class LeetspeakTranslator
    {
        function translate($phrase)
        {
            $originals = array('e', 'o', 'I');
            $replacements = array('3', '0', '1');
            $s = 's';
            $ss = 'z';
            $phrase_back = array();

            $phrase = explode(" ", (str_replace($originals, $replacements, $phrase)));

            foreach ($phrase as $word)
            {
                $re_phrased = array();

                $letters = str_split($word);
                foreach ($letters as $key => $value)
                {
                    if ($key !=0)
                    {
                        array_push($re_phrased, (str_replace($s, $ss, $value)));
                    }
                    else
                    {
                        array_push($re_phrased, $value);
                    }
                $translation = implode($re_phrased);
                }

                array_push($phrase_back, $translation);
            }

            $transleeted = implode(" ", $phrase_back);
            return $transleeted;
        }
    }
 ?>
