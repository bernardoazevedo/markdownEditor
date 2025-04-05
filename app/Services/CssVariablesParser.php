<?php

namespace App\Services;

class CssVariablesParser {

    public static function parseAllFromArray(String $css, array $variables_array){
        foreach($variables_array as $key => $value){
            $css = str_replace("var($key)", $value, $css);
        }
        return $css;
    }
}
