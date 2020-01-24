<?php

class Flags
{
    private $id;
    private $country_name;
    private $directory;

    public function __construct(
        int $id,
        string $country_name,
        string $directory
    )
    {
        $this->id = $id;
        $this->country_name = $country_name;
        $this->directory = $directory;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getCountryName(): string
    {
        return $this->country_name;
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }


}
