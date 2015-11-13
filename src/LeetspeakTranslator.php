<?php
    class LeetspeakTranslator
    {
        function translate($phrase)
        {
            $e = 'e';
            $ee = '3';
            $o = 'o';
            $oo = '0';
            $i = 'I';
            $ii = '1';
            $phrase = str_replace($e, $ee, $phrase);
            $phrase = str_replace($o, $oo, $phrase);
            $phrase = str_replace($i, $ii, $phrase);
            return $phrase;
        }
    }

 ?>
