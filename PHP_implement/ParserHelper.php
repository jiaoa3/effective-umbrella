<?php

require_once "ParserUtility/ArrayParser.php";
require_once "ParserUtility/JsonParser.php";
require_once "ParserUtility/FileParser.php";
require_once "data.php";

class ParserHelper{
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