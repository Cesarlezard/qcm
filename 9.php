<?php

abstract class Article
{
    abstract public function getPrice(): int;

    protected function getQuantity(): int
    {
        return 5;
    }
}

class Keyboard extends Article
{
    private int $price = 10;

    public function getPrice(): int
    {
        return $this->getQuantity() * $this->price;
    }
}

$keyboard = new Keyboard();

echo $keyboard->getPrice();
