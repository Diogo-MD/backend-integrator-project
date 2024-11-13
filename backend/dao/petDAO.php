<?php
class PetDAO {
    private PDO $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    // Method to fetch all pets
    public function getAllPets(): array {
        $sql = "SELECT * FROM Pets WHERE AvailableForAdoption = true";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $pets = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $pets[] = new Pet(
                $row['PetID'],
                $row['Name'],
                $row['PhotoUrl'],
                $row['Breed'],
                $row['Gender'],
                $row['Size'],
                $row['Weight'],
                $row['Age'],
                $row['Description'],
                $row['AvailableForAdoption'],
                $row['DateAdded']
            );
        }
        return $pets;
    }

    // Method to fetch characteristics for a specific pet
    public function getCharacteristicsByPetId(int $petId): ?Characteristic {
        $sql = "SELECT * FROM Characteristics WHERE PetID = :petId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':petId', $petId, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Characteristic(
                $row['CharacteristicID'],
                $row['PetID'],
                $row['GoodWithChildren'],
                $row['GoodWithOtherAnimals'],
                $row['RequiresPhysicalActivity'],
                $row['Trained']
            );
        }
        return null;
    }
}
