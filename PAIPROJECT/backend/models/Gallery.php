<?php

require_once "backend/models/Images.php";

class Gallery
{
    private $id;
    private $gallery_name;
    private $gallery_sources;

    public function __construct(
        int $id,
        string $gallery_name,
        array $gallery_sources,
        string $gallery_dir
    )
    {
        $this->id = $id;
        $this->gallery_name = $gallery_name;
        $this->gallery_sources=$gallery_sources;
        $this->gallery_dir=$gallery_dir;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->gallery_name;
    }

    public function getGallerySources(): array
    {
        return $this->gallery_sources;
    }

    public function getGallerySize(): int
    {
        return count($this->gallery_sources);
    }

    public function getGalleryImageDirectoryByIndex(int $index):string
    {
        if($index<0 or $index>=($this->getGallerySize()))
        {
            return "NULL";
        }
        return $this->gallery_sources[$index]->getDirectory();

    }

    public function getGalleryDir()
    {
        return $this->gallery_dir;
    }







}
