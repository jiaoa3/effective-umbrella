<?php

class ViewHelper
{
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