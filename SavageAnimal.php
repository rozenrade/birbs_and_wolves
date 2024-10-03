<?php

interface SavageAnimal
{
    /**
     * @return string
     */
    public function devore(): string;

    /**
     * @param Bird $bird
     * 
     * @return string
     */
    public function eatBird(Bird $bird): string;
}
