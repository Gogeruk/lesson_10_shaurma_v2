<?php

/**
 * Setters for shaurmas
 */
abstract class ShauramaSet
{

    protected $_name;
    protected $_price;
    protected $_ingredients;

    function __construct($data, $choose_a_food_item)
    {
        if(!is_array($data)){
            throw new InvalidArgumentException("First value must be an array");
        }
        if(!is_numeric($choose_a_food_item)){
            throw new InvalidArgumentException("Second value must be a number!");
        }
        if(!array_key_exists($choose_a_food_item, $data)){
            throw new InvalidArgumentException("This item does not exist, sorry...");
        }

        $this->setName($data, $choose_a_food_item);
        $this->setPrice($data, $choose_a_food_item);
        $this->setIngredients($data, $choose_a_food_item);
    }

    protected function setName($data, $choose_a_food_item)
    {
        $this->_name = $data[$choose_a_food_item]['name'];
    }
    protected function setPrice($data, $choose_a_food_item)
    {
        $this->_price = $data[$choose_a_food_item]['price'];
    }
    protected function setIngredients($data, $choose_a_food_item)
    {
        $this->_ingredients = $data[$choose_a_food_item]['ingredients'];
    }
}
