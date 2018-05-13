<?php

namespace Service;

/**
 *  class StringTools
 */
class StringTools
{
    public static function trimWhiteSpaces(string $str):string
    {
        $text = str_split($str);
        while ($text[0] === ' ') {
            array_shift($text);
        }
        return implode('', $text);
    }
}
