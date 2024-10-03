<?php

class Bird extends Animal
{
    protected bool $migrate;

    /**
     * @param string $name
     * @param int $age
     * @param int $nbPalette
     * @param array $listAliment
     * @param bool $migrate
     */
    public function __construct(string $name, int $age, int $nbPalette, array $listAliment, bool $migrate)
    {
        parent::__construct($name, $age, $nbPalette, $listAliment);
        $this->migrate = $migrate;
    }



    /**
     * @return bool
     */
    public function getMigrate(): bool
    {
        return $this->migrate;
    }


    /**
     * @param bool $migrate
     * 
     * @return self
     */
    public function setMigrate(bool $migrate): self
    {
        $this->migrate = $migrate;

        return $this;
    }


    /**
     * @return string
     */
    public function describe(): string
    {
        if ($this->migrate) {
            return "I am a migrate bird";
        } else {
            return "I am not a migrate bird";
        }
    }
}
