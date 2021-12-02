<?php

class Hooman
{
    protected int $age = 100;
}

class Child extends Hooman
{
    public function getAge()
    {
        return $this->age;
    }
}

$child = new Child();

echo $child->getAge();
