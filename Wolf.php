<?php

class Wolf extends Animal implements SavageAnimal
{
    protected bool $alone;

    /**
     * @param mixed $name
     * @param mixed $age
     * @param mixed $nbPalette
     * @param mixed $listAliment
     * @param mixed $alone
     */
    public function __construct($name, $age, $nbPalette, $listAliment, $alone)
    {
        parent::__construct($name, $age, $nbPalette, $listAliment);
        $this->alone = $alone;
    }


    /**
     * @return bool
     */
    public function getAlone(): bool
    {
        return $this->alone;
    }


    /**
     * @param bool $alone
     * 
     * @return self
     */
    public function setAlone(bool $alone): self
    {
        $this->alone = $alone;

        return $this;
    }

    /**
     * @return string
     */
    public function devore(): string
    {
        return "Je viens de manger";
    }

    /**
     * @param Bird $bird
     * 
     * @return string
     */
    public function eatBird(Bird $bird): string
    {
        return "Je viens de manger l'oiseau qui s'appellait : $bird->name";
    }
}
