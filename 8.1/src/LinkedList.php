<?php

class LinkedList
{
    private $top = null;

    public function addIn($value)
    {
        $newElement = new SeparateNode();
        $newElement->setValue($value);

        if (!empty($this->top)) {
            $setNext = $this->insertLeftRight($this->top);

            if (empty($setNext->getLowerLeft())) {
                $this->top->setLowerLeft($newElement);
                $newElement->setTop($setNext);
                return;
            }

            $this->top->setLowerRight($newElement);
            $newElement->setTop($setNext);
            return;
        }

        $this->top = $newElement;
    }


    private function insertLeftRight(object $top) : object
    {
        if (!empty($top->getLowerLeft())) {
            $top = $top->getLowerLeft();
            $this->insertLeftRight($top);
        }

        if (!empty($top->getLowerRight())) {
            $top = $top->getLowerRight();
            $this->insertLeftRight($top);
        }
        return $this;

    }
}

