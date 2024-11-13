-- Inserting data into the Pets table
INSERT INTO Pets (Name, PhotoUrl, Breed, Gender, Size, Weight, Age, Description, AvailableForAdoption) VALUES
('Rex', '', 'Labrador', 'Male', 'Large', 30.50, 5, 'Friendly and energetic dog', TRUE),
('Luna', '', 'Poodle', 'Female', 'Medium', 12.20, 3, 'Very affectionate and ideal for apartments', TRUE),
('Thor', '', 'Bulldog', 'Male', 'Medium', 22.00, 4, 'Calm and sociable, great with kids', TRUE),
('Mia', '', 'Chihuahua', 'Female', 'Small', 3.00, 2, 'Smart and curious, but a bit shy', TRUE),
('Max', '', 'German Shepherd', 'Male', 'Large', 35.00, 6, 'Protective and loyal, excellent guard dog', TRUE);

-- Inserting data into the Characteristics table for each pet
INSERT INTO Characteristics (PetID, GoodWithChildren, GoodWithOtherAnimals, RequiresPhysicalActivity, Trained) VALUES
(1, TRUE, TRUE, TRUE, TRUE),  -- Rex
(2, TRUE, TRUE, FALSE, TRUE),  -- Luna
(3, TRUE, TRUE, FALSE, TRUE),  -- Thor
(4, FALSE, TRUE, FALSE, FALSE), -- Mia
(5, TRUE, FALSE, TRUE, TRUE);   -- Max
