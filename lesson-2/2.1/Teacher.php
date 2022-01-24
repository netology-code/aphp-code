<?php

/**
 * Class Teacher
 */
class Teacher extends Person
{
    /**
     * @return string
     */
    public function getHello(): string
    {
        return "Hello, teacher $this->name $this->surname";
    }
}
