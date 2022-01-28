<?php

class JsonParser implements IDataParser
{
    function parse($input)
    {
        return json_decode($input);
    }
}