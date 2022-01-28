<?php

require_once "ArrayParser.php";
require_once "JsonParser.php";
require_once "FileParser.php";
require_once "data.php";

class ParserHelper
{
    public static function parse($source, $filename = null) {
        switch ($source) {
            case "array":
                $parser = new ArrayParser();
                return $parser->parse(getPlayerDataArray());
            case "json":
                $parser = new JsonParser();
                return $parser->parse(getPlayerDataJson());
            case "file":
                $parser = new FileParser();
                return $parser->parse(getPlayerDataFromFile($filename));
        }
    }
}