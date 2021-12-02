<?php

class City
{
    public function __construct(public string $name) {}
}

$cities = [
    new City('Angers'),
    new City('Paris'),
];

foreach ($cities as $city) {
    echo $city->name;
}
