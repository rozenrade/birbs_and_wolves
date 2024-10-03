<?php

abstract class Animal
{
    protected string $name;

    protected int $age;

    protected int $nbPalette;

    protected array $listAliment;


    /**
     * @param string $name
     * @param int $age
     * @param int $nbPalette
     * @param array $listAliment
     */
    public function __construct(string $name, int $age, int $nbPalette, array $listAliment)
    {
        $this->name = $name;
        $this->age = $age;
        $this->nbPalette = $nbPalette;
        $this->listAliment = $listAliment;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param string $name
     * 
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * 
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return int
     */
    public function getNbPalette(): int
    {
        return $this->nbPalette;
    }


    /**
     * @param int $nbPalette
     * 
     * @return self
     */
    public function setNbPalette(int $nbPalette): self
    {
        $this->nbPalette = $nbPalette;

        return $this;
    }


    /**
     * @return array
     */
    public function getListAliment(): array
    {
        return $this->listAliment;
    }


    /**
     * @param array $listAliment
     * 
     * @return self
     */
    public function setListAliment(array $listAliment): self
    {
        $this->listAliment = $listAliment;

        return $this;
    }
}
