<?php

/**
 * Class Person
 */
class Person
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
    public function getHello(): string
    {
        return "Hello, Person $this->name $this->surname";
    }
}


