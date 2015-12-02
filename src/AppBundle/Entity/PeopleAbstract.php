<?php

namespace AppBundle\Entity;

abstract class PeopleAbstract
{
    protected $name;
    protected $secondName;
    protected $age;

    abstract public function setName($name);
    abstract public function setSecondName($secondName);
    abstract public function setAge($age);
    abstract public function getName();
    abstract public function getSecondName();
    abstract public function getAge();
}