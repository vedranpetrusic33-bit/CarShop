<?php


class Address{

    protected string $city;
    protected string $country;
    protected string $street;
    protected string $postalCode;

    public function __construct(
        string $city,
        string $country,
        string $street,
        string $postalCode
    ) {
        $this->city = $city;
        $this->country = $country;
        $this->street = $street;
        $this->postalCode = $postalCode;
    }

    //city
    public function getCity(): string
    {
        return $this->city;   
    }
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    //country
    public function getCountry(): string
    {
        return $this->country;
    }
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    //street
    public function getStreet(): string
    {
        return $this->street;
    }
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    //postalcode
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }
    
}

?>
