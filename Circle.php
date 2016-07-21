<?php
/**
 * Created by PhpStorm.
 * User: challenger
 * Date: 7/20/16
 * Time: 3:59 PM
 */

namespace figureNameSpace;


class Circle extends Ellipse
{

    public function __construct($x, $y, $color, $radius)
    {
        parent::__construct($x, $y, $color, $radius, $radius);
    }

}

?>