<?php

class Customer
{
    protected string $name;
    protected string $surname;
    protected string $email;
    protected string $phoneNumber;
    protected Address $address;

    public function __construct(
        string $name,
        string $surname,
        string $email,
        string $phoneNumber,
        Address $address
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }

    //name
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    //surname
    public function getSurname(): string
    {
        return $this->surname;
    }
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    //email
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    //phonenumber
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    //addres
    public function getAddress(): Address
    {
        return $this->address;
    }
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
}