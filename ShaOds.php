<?php

require_once 'ShauramaSet.php';

/**
 * Шаурма Одесская
 */
class ShaOds extends ShauramaSet implements ShawarmaInterface
{

    public function getTitle(): string
    {
        if (!is_string($this-> _name)) {
            return (strval($this-> _name));
        }
        return $this-> _name;
    }
    public function getCost(): float
    {
        if (!is_float($this-> _price)) {
            return (float) $this-> _price;
        }
        return $this-> _price;
    }
    public function getIngredients(): array
    {
        if(!is_array($this-> _ingredients)){
            return (array) $this-> _ingredients;
        }
        return $this-> _ingredients;
    }
}
