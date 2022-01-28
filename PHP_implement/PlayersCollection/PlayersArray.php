<?php

class PlayersArray implements IPlayersCollection, IViewable
{
        private $playersArray;

        public function __construct(){
            $this->playersArray = [];
    }
        function add($player){
            $this->playersArray[] = $player;
        }

        function toArray()
        {
            return $this->playersArray;
        }
}