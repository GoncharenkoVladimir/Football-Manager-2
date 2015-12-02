<?php

namespace AppBundle\Entity;

class Players extends PeopleAbstract{
    protected $number;
    protected $command;
    protected $country;
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSecondName()
    {
        return $this->secondName;
    }

    public function getAge()
    {
        return $this->age;
    }


    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setCommand($command)
    {
        $this->command = $command;
    }
    public function getNumber()
    {
        return $this->number;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getCommand()
    {
        return $this->command;
    }
}