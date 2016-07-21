<?php
/**
 * Created by PhpStorm.
 * User: challenger
 * Date: 7/20/16
 * Time: 4:01 PM
 */

//include "Figure.php";
namespace figureNameSpace;

class Rectangle extends Figure
{

    private $height;
    private $width;

    public function __construct($x, $y, $color, $width, $height)
    {
        parent::__construct($x, $y, $color);
        $this->height = $height;
        $this->width = $width;
    }

    public function draw()
    {

// Рисование прямоугольника
        imagefilledrectangle($this->getImage(), $this->getX(), $this->getY(), $this->getWidth(), $this->getHeight(), $this->getColor());

    }


    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }


    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

}