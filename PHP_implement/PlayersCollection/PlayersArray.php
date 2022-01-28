<?php

class PlayersArray implements IPlayersCollection
{
        private $playersArray;

        public function __construct(){
            $this->playersArray = [];
    }
        function add($player){
            $this->playersArray[] = $player;
        }

}