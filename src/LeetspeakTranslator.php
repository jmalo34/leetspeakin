<?php
    class LeetspeakTranslator
    {
        function translate($phrase)
        {
            $e = 'e';
            $ee = '3';
            $phrase = str_replace($e, $ee, $phrase);

            return $phrase;
        }
    }

 ?>
