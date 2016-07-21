<?php
/**
 * Created by PhpStorm.
 * User: challenger
 * Date: 7/20/16
 * Time: 3:58 PM
 */

namespace figureNameSpace;


abstract class Figure
{
    private $x;
    private $y;
    private $color;
    private $image;


    protected abstract function draw();

    public function __construct($x, $y, $color)
    {
        $this->x = $x;
        $this->y = $y;
        //$this->color = $color;
        $this->color = imagecolorallocate($this->getImage(), 255, 255, 255);
    }


    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return resource
     */
    public function getImage()
    {
        if($this->image == null)
        {
            $this->image = imagecreatetruecolor(400, 300);
            imagecolorallocate($this->image, 0, 0, 0);
        }
        return $this->image;
    }

    /**
     * @param resource $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function showImage()
    {

// вывод картинки
        header("Content-type: image/png");
        imagepng($this->getImage());

     //   imagepng($this->getImage(), './imagefilledrectangle.png');

    }

}
?>