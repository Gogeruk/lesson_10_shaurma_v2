<?php

/**
 * Создать класс ShawarmaCalculator
 */
class ShawarmaCalculator
{
    protected $shoping_cart;

    public function add(object $food)
    {
        $this->shoping_cart[] = $food;
        return ($this->shoping_cart);
    }

    public function ingredients()
    {
        foreach ($this->shoping_cart as $key => $value) {
            $unique_ingrediants[] = $this->shoping_cart[$key]->getIngredients();
        }
        foreach ($unique_ingrediants as $childArray)
        {
            foreach ($childArray as $value)
            {
                $result[] = $value;
            }
        }
        return(array_unique($result));
    }

    public function price()
    {
        $price = 0;
        foreach ($this->shoping_cart as $key => $value) {
            $price += $this->shoping_cart[$key]->getCost();
        }
        return($price);
    }
}
