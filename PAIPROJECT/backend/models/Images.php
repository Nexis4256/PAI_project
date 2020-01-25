<?php

class Images
{
    private $id;
    private $country_name;
    private $directory;

    public function __construct(
        int $id,
        int $gallery_id,
        string $image_name,
        string $image_directory
    )
    {
        $this->id = $id;
        $this->gallery_id=$gallery_id;
        $this->image_name = $image_name;
        $this->image_directory = $image_directory;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getGalleryId():int
    {
        return $this->gallery_id;
    }

    public function getName(): string
    {
        return $this->image_name;
    }

    public function getDirectory(): string
    {
        return $this->image_directory;
    }


}
