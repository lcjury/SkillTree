<?php

class Skill
{
    private $name;
    private $dependencies = [];
    private $dependants = [];

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function addDependency(Skill $dependency)
    {
        $this->dependencies[] = $dependency;
    }

    public function addDependant(Skill $dependant)
    {
        $this->dependants[] = $dependant;
    }

    public function getDependencies()
    {
        return $this->dependencies;
    }

    public function getDependants()
    {
        return $this->dependants;
    }
}
