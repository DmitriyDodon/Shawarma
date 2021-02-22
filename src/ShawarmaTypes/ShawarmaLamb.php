<?php


namespace Shawarma\ShawarmaTypes;


use Shawarma\Interfaces\ShawarmaInterface;

class ShawarmaLamb implements ShawarmaInterface
{
    protected $cost;
    protected $ingredients;
    protected $title;

    public function __construct(float $cost , array $ingredients , string $title)
    {
        $this->setCost($cost);
        $this->setIngredients($ingredients);
        $this->setTitle($title);
    }

    protected function setCost(float $cost)
    {
        $this->cost = $cost;
    }
    protected function setIngredients(array $ingredients)
    {
        $this->ingredients = $ingredients;
    }
    protected function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}