<?php
/**
 * Created by PhpStorm.
 * User: challenger
 * Date: 7/20/16
 * Time: 3:59 PM
 */

namespace figureNameSpace;
//include "Figure.php";

class Ellipse extends  Figure
{
    private $radius1;
    private $radius2;

    public function __construct($x, $y, $color, $radius1, $radius2)
    {
        $this->radius1 = $radius1;
        $this->radius2 = $radius2;
        parent::__construct($x, $y, $color);
    }


    public function draw()
    {
// рисование белого эллипса
        imagefilledellipse($this->getImage(), $this->getX(), $this->getY(), $this->getRadius1(), $this->getRadius2(), $this->getColor());

    }



    /**
     * @return mixed
     */
    public function getRadius1()
    {
        return $this->radius1;
    }

    /**
     * @param mixed $radius1
     */
    public function setRadius1($radius1)
    {
        $this->radius1 = $radius1;
    }


    /**
     * @return mixed
     */
    public function getRadius2()
    {
        return $this->radius2;
    }

    /**
     * @param mixed $radius2
     */
    public function setRadius2($radius2)
    {
        $this->radius2 = $radius2;
    }

    function __toString()
    {
        return "wwwwwww";
    }


}
?>