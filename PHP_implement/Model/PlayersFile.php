<?php

require_once "IPlayersCollection.php";
require_once "View/IViewable.php";

class PlayersFile implements IPlayersCollection, IViewable{
    private $filename;

    public function __construct($filename){
        $this->filename = $filename;
    }

    function add($player){
        $players = json_decode(file_get_contents($this->filename));
        if (!$players) {
            $players = [];
        }
        $players[] = $player;
        file_put_contents($this->filename, json_encode($players));
        }

    function toArray(){
        $players = [];
        if ($this->playersJsonString) {
            $players = json_decode($this->playersJsonString);
        }
        return $players;
    }
}