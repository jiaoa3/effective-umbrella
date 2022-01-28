<?php

class FileParser implements IDataParser
{

    function parse($input)
    {
        return json_decode(file_get_contents($input));
    }
}