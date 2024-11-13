<?php
class Characteristic {
    public int $characteristicId;
    public int $petId;
    public bool $goodWithChildren;
    public bool $goodWithOtherAnimals;
    public bool $requiresPhysicalActivity;
    public bool $trained;

    public function __construct($characteristicId, $petId, $goodWithChildren, $goodWithOtherAnimals, $requiresPhysicalActivity, $trained) {
        $this->characteristicId = $characteristicId;
        $this->petId = $petId;
        $this->goodWithChildren = $goodWithChildren;
        $this->goodWithOtherAnimals = $goodWithOtherAnimals;
        $this->requiresPhysicalActivity = $requiresPhysicalActivity;
        $this->trained = $trained;
    }
}
