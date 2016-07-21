<?php
/**
 * Created by PhpStorm.
 * User: challenger
 * Date: 7/20/16
 * Time: 4:24 PM
 */


//include "Ellipse.php";
//include "Square.php";

namespace figureNameSpace;

Main::mainMethod();

class Main
{
    static function mainMethod(){
        $ellipse = new Ellipse(20, 30, "color", 30, 49);
        $ellipse->draw();

        $rec = new Square(20, 30, "color", 30);
        $rec->draw();

        $ellipse->showImage();

    }
}


?>