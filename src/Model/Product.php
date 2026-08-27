<?php

class Product 
{
    protected string $brand ;
    protected string $model;
    protected int $price;
    protected int $year;
    protected string $color;
    protected int $mileage;

    public function __construct(
        string $brand,
        string $model,
        int $price,
        int $year,
        string $color,
        int $mileage
    )
    {
    $this->brand = $brand;
    $this->model = $model;
    $this->price = $price;
    $this->year = $year;
    $this->color = $color;
    $this->mileage = $mileage;
}

// brand
public function getBrand(): string
{
    return $this->brand;
}
public function setBrand(string $brand): void
{
    $this->brand = $brand;
}

// model
public function getModel(): string
{
    return $this->model;
}
public function setModel(string $model): void
{
    $this->model = $model;
}

//price
public function getPrice(): int
{
    return $this->price;
}
public function setPrice(int $price): void
{
    $this->price = $price;
}

//year
public function getYear(): int
{
    return $this->year;
}
public function setYear(int $year): void
{
    $this->year = $year;
}

//color
public function getColor(): string
{
    return $this->color;
}
public function setColor(string $color): void
{
    $this->color = $color;
}

//mileage
public function getMileage(): int
{
    return $this->mileage;
}
public function setMileage(int $mileage): void
{
    $this->mileage = $mileage;
}

}

?>