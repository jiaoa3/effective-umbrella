<?php

require_once "IDataParser.php";

class ArrayParser implements IDataParser
{
    function parse($input)
    {
        return ($input);
    }
}