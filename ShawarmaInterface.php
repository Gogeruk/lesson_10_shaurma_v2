<?php

/**
 * Дан интерфейс шаурмы
 */
interface ShawarmaInterface
{

   /**
    * @return float
    */
    public function getCost(): float;

   /**
    * @return array
    */
    public function getIngredients(): array;

   /**
    * @return string
    */
    public function getTitle(): string;
}
