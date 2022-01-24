<?php

/**
 * Class Person
 */
abstract class Person
{
    protected $name;
    protected $surname;

    /**
     * Person constructor.
     * @param string $name
     * @param string $surname
     */
    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    abstract public function getHello(): string;
}


