<?php
declare(strict_types=1);

/**
 * Class Student
 */
class Student
{
    public $age;
    public $name;
    public $surname;

    /**
     * Student constructor.
     * @param int $age
     * @param string $name
     * @param string $surname
     */
    public function __construct(int $age, string $name, string $surname)
    {
        $this->age = $age;
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}

$student = new Student(20, 'Аркадий', 'Иванов');
echo $student->name;
echo $student->getAge();
