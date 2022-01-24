<?php

/**
 * Interface PersonInterface
 */
interface PersonInterface
{
    /**
     * @param string $name
     * @param string $surname
     * @return string
     */
    public function getHello(string $name, string $surname): string;
}



