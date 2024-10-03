<?php

class Wolf extends Animal implements SavageAnimal
{
    protected bool $alone;

    public function __construct($name, $age, $nbPalette, $listAliment, $alone)
    {
        parent::__construct($name, $age, $nbPalette, $listAliment);
        $this->alone = $alone;
    }

    /**
     * Get the value of alone
     * 
     * @return bool
     */
    public function getAlone(): bool
    {
        return $this->alone;
    }

    /**
     * Set the value of alone
     *
     * @return  self
     */
    public function setAlone($alone): self
    {
        $this->alone = $alone;

        return $this;
    }

    public function devore(): string
    {
        return "Je viens de manger";
    }

    public function eatBird(Bird $bird): string
    {
        return "Je viens de manger l'oiseau qui s'appellait : $bird->name";
    }
}
