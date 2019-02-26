<?php

//public class SeparateNode
class SeparateNode
{
    private $value;
    private $top = null;
    private $lowerLeft = null;
    private $lowerRight = null;


    public function getLowerRight()
    {
        return $this->lowerRight;
    }

    public function setLowerRight($lowerRight): void
    {
        $this->lowerRight = $lowerRight;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value): void
    {
        $this->value = $value;
    }

    public function getTop()
    {
        return $this->top;
    }

    public function setTop($top): void
    {
        $this->top = $top;
    }

    public function getLowerLeft()
    {
        return $this->lowerLeft;
    }

    public function setLowerLeft($lowerLeft): void
    {
        $this->lowerLeft = $lowerLeft;
    }


}