<?php

abstract class Animal
{
    protected string $name;

    protected int $age;

    protected int $nbPalette;

    protected array $listAliment;


    public function __construct($name, $age, $nbPalette, $listAliment)
    {
        $this->name = $name;
        $this->age = $age;
        $this->nbPalette = $nbPalette;
        $this->listAliment = $listAliment;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of age
     * 
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of nbPalette
     * 
     * @return int
     */
    public function getNbPalette(): int
    {
        return $this->nbPalette;
    }

    /**
     * Set the value of nbPalette
     *
     * @return  self
     */
    public function setNbPalette($nbPalette): self
    {
        $this->nbPalette = $nbPalette;

        return $this;
    }

    /**
     * Get the value of listAliment
     * 
     * @return array
     */
    public function getListAliment(): array
    {
        return $this->listAliment;
    }

    /**
     * Set the value of listAliment
     *
     * @return  self
     */
    public function setListAliment($listAliment): self
    {
        $this->listAliment = $listAliment;

        return $this;
    }
}
