<?php
declare(strict_types=1);

/**
 * Class Person
 */
class Person
{
    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        echo "Мы вызвали __set для '$name' с входными данными: $value";
    }

    /**
     * @param $name
     */
    public function __get($name)
    {
        echo "Мы вызвали __get для '$name'";
    }

    /**
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        echo "Мы вызвали метод '$name' с входными данными: " . implode(', ', $arguments) . PHP_EOL;
    }

    /**
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        echo "Мы вызвали статический метод '$name' с входными данными: " . implode(', ', $arguments) . PHP_EOL;
    }
}

$person = new Person();
$person->sayHello('Ivan', 'Andrew');
Person::sayHello('Andrew', 'Alex');

echo $person->userName;
echo $person->userName = 'userName';
