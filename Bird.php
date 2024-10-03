<?php

class Bird extends Animal
{
    protected bool $migrate;

    public function __construct($name, $age, $nbPalette, $listAliment, $migrate)
    {
        parent::__construct($name, $age, $nbPalette, $listAliment);
        $this->migrate = $migrate;
    }


    /**
     * Set the value of migrate
     *
     * @return  bool
     */
    public function getMigrate(): bool
    {
        return $this->migrate;
    }

    /**
     * Set the value of migrate
     *
     * @return  self
     */
    public function setMigrate($migrate): self
    {
        $this->migrate = $migrate;

        return $this;
    }


    public function describe(): string
    {
        if ($this->migrate) {
            return "I am a migrate bird";
        } else {
            return "I am not a migrate bird";
        }
    }
}
