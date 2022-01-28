<?php

class PlayersFile implements IPlayersCollection
{
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
}