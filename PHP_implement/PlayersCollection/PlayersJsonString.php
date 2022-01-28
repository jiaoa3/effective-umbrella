<?php

class PlayersJsonString implements IPlayersCollection, IViewable
{
    private $playersJsonString;

    function add($player){
        $players = [];
        if ($this->playersJsonString) {
            $players = json_decode($this->playersJsonString);
        }
        $players[] = $player;
        $this->playersJsonString = json_encode($players);
    }

    function toArray(){
        $players = json_decode(file_get_contents($this->filename));
        if (!$players) {
            $players = [];
        }
        return $players;
    }
}