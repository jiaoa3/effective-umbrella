<?php

class PlayersJsonString implements IPlayersCollection
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

}