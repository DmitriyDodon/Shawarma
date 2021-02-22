<?php

namespace Shawarma\Calculator;

use Shawarma\Interfaces\ShawarmaInterface;

class ShawarmaCalculator
{
    protected $shawarma = [];

    public function add(ShawarmaInterface ...$shawarma)
    {
       return $this->shawarma =  $shawarma;
    }

    public function price()
    {
        $price = 0;
        foreach ($this->shawarma as $shawarma) {
            $price += $shawarma->getCost();
        }
        return $price;
    }

    public function ingredients()
    {
        $array = [];
        foreach ($this->shawarma as $shawarma){
            $array =  array_merge($array , $shawarma->getIngredients() );
        }

        return array_unique($array);
    }

}