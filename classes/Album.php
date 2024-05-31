<?php

class album
{
    /** @var int|null Het ID van de persoon */
    private ?int $id;

    /** @var string De voornaam van de persoon */
    private string $Naam;

    /** @var string De achternaam van de persoon */
    private string $Artiesten;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /** @var string|null Het telefoonnummer van de persoon */
    private ?string $Release_datum;

    /** @var string|null Het e-mailadres van de persoon */
    private ?string $URL;

    /** @var string|null Eventuele opmerkingen over de persoon */
    private ?string $PRijs;
}