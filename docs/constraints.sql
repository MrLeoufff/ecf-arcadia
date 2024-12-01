USE arcadia_db;

ALTER TABLE animal
    ADD CONSTRAINT fk_animal_habitat
        FOREIGN KEY (habitat_id) REFERENCES habitat(id)
            ON DELETE SET NULL
            ON UPDATE CASCADE;

ALTER TABLE veterinary_report
    ADD CONSTRAINT fk_vet_report_animal
        FOREIGN KEY (animal_id) REFERENCES animal(id)
            ON DELETE CASCADE
            ON UPDATE CASCADE;

ALTER TABLE veterinary_report
    ADD CONSTRAINT fk_vet_report_user
        FOREIGN KEY (user_id) REFERENCES user(id)
            ON DELETE SET NULL
            ON UPDATE CASCADE;

ALTER TABLE animal_feeding
    ADD CONSTRAINT fk_animal_feeding_animal
        FOREIGN KEY (animal_id) REFERENCES animal(id)
            ON DELETE CASCADE
            ON UPDATE CASCADE;

ALTER TABLE animal_feeding
    ADD CONSTRAINT fk_animal_feeding_user
        FOREIGN KEY (user_id) REFERENCES user(id)
            ON DELETE SET NULL
            ON UPDATE CASCADE;

