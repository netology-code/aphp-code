<?php

/**
 * Class Student
 */
class Student implements PersonInterface
{
    /**
     * @param string $name
     * @param string $surname
     * @return string
     */
    public function getHello(string $name, string $surname): string
    {
        return "Hello, $name $surname";
    }
}

