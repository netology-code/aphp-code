<?php

$people[] = new Person('Petr', 'Petrov');
$people[] = new Student('Petr', 'Petrov');
$people[] = new Teacher('Andrey', 'Andreev');

foreach ($people as $person) {
    if ($person instanceof Person) {
        echo $person->getHello();
    }
}


