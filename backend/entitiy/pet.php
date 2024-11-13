<?php
class Pet {
    public int $petId;
    public string $name;
    public ?string $photoUrl;
    public ?string $breed;
    public string $gender;
    public string $size;
    public float $weight;
    public int $age;
    public ?string $description;
    public bool $availableForAdoption;
    public string $dateAdded;

    public function __construct($petId, $name, $photoUrl, $breed, $gender, $size, $weight, $age, $description, $availableForAdoption, $dateAdded) {
        $this->petId = $petId;
        $this->name = $name;
        $this->photoUrl = $photoUrl;
        $this->breed = $breed;
        $this->gender = $gender;
        $this->size = $size;
        $this->weight = $weight;
        $this->age = $age;
        $this->description = $description;
        $this->availableForAdoption = $availableForAdoption;
        $this->dateAdded = $dateAdded;
    }
}