<?php
include_once  'Iplayers.php';

class PlayersObject implements IReadWritePlayers{

    private $playersArray;

    private $playerJsonString;

    public function __construct() {
        //We're only using this if we're storing players as an array.
        $this->playersArray = [];

        //We'll only use this one if we're storing players as a JSON string
        $this->playerJsonString = null;
    }

    function readPlayer($source, $player, $filename = NULL){

    }

    function writePlayer($source, $player, $filename = NULL){

    }


}
?>