<?php

interface Article
{
    public function getPrice(): int;
}

class Keyboard implements Article
{
    public function getPrice(): int
    {
        return 49.99;
    }
}

$keyboard = new Keyboard();

echo $keyboard->getPrice();
