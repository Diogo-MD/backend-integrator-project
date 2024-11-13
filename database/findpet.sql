CREATE TABLE Pets (
    PetID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(25) NOT NULL,
    PhotoUrl VARCHAR(255),
    Breed VARCHAR(25),
    Gender ENUM('Male', 'Female') NOT NULL,
    Size ENUM('Small', 'Medium', 'Large') NOT NULL,
    Weight DECIMAL(5,2),
    Age INT,
    Description VARCHAR(255),
    AvailableForAdoption BOOLEAN DEFAULT TRUE,
    DateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Characteristics (
    CharacteristicID INT PRIMARY KEY AUTO_INCREMENT,
    PetID INT,
    GoodWithChildren BOOLEAN,
    GoodWithOtherAnimals BOOLEAN,
    RequiresPhysicalActivity BOOLEAN,
    Trained BOOLEAN,
    FOREIGN KEY (PetID) REFERENCES Pets(PetID) ON DELETE CASCADE
);
