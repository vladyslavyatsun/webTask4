<?php
/**
 * Created by PhpStorm.
 * User: challenger
 * Date: 7/20/16
 * Time: 4:00 PM
 */
namespace figureNameSpace;
//include "Rectangle.php";


class Square extends Rectangle
{

    public function __construct($x, $y, $color, $width)
    {
        parent::__construct($x, $y, $color, $width, $width);
    }


}