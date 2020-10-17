<?php

class HumanBeign
{
    private string $name;

    public function sayHi(string $name): string
    {
        return 'Hi, ' . $name;
    }
}