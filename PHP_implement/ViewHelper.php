<?php

require_once "ParserHelper.php";
require_once "CollectionHelper.php";
require_once "View/CLIView.php";
require_once "View/DefaultView.php";

class ViewHelper{
    public static function display($isCLI, $source, $filename = null){
        $players = ParserHelper::parse($source, $filename = null);
        foreach ($players as $player){
            CollectionHelper::write($source, $player,$filename);
        }
        if ($isCLI){
            $view = new CLIView();
        } else {
            $view = new DefaultView();
        }
        $view->display(CollectionHelper::getCollection($source));
    }
}