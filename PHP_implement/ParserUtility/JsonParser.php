<?php

require_once "IDataParser.php";

class JsonParser implements IDataParser
{
    function parse($input)
    {
        return json_decode($input);
    }
}