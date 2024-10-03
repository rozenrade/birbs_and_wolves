<?php

class Wolf extends Animal implements SavageAnimal
{
    protected bool $alone;


    /**
     * @param string $name
     * @param int $age
     * @param int $nbPalette
     * @param array $listAliment
     * @param bool $alone
     */
    public function __construct(string $name, int $age, int $nbPalette, array $listAliment, bool $alone)
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
