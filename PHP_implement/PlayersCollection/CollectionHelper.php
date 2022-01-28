<?php

class CollectionHelper
{
    static private $playersArray;
    static private $playersFile;
    static private $playersJsonString;

    public static function write($source, $player, $filename = null){
        switch ($source){
            case "array":
                if (!self::$playersArray) {
                    self::$playersArray = new PlayersArray();
                }
                self::$playersArray->add($player);
                break;
            case "json":
                if (!self::$playersJsonString) {
                    self::$playersJsonString = new PlayersJsonString();
                }
                self::$playersJsonString->add($player);
                break;
            case "file":
                if (!self::$playersFile) {
                    self::$playersFile = new PlayersFile($filename);
                }
                self::$playersFile->add($player);
                break;
        }
    }

    public static function getCollection($source){
        switch ($source) {
            case "array":
                return self::$playersArray;
            case "json":
                return self::$playersJsonString;
            case "file":
                return self::$playersFile;
        }
        return self::$playersArray;
    }
}