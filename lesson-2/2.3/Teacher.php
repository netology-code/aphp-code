<?php

/**
 * Class Teacher
 */
class Teacher implements PersonInterface
{
    /**
     * @param string $name
     * @param string $surname
     * @return string
     */
    public function getHello(string $name, string $surname): string
    {
        return "Hello, teacher $name $surname";
    }
}
