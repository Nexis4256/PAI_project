<?php

class News
{
    private $id;
    private $nickname;
    private $news_short_post;
    private $country_flag_dir;
    private $news_file_dir;

    public function __construct(
        int $id,
        string $nickname,
        string $news_short_post,
        string $country_flag_dir,
        string $news_file_dir
    )
    {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->news_short_post = $news_short_post;
        $this->country_flag_dir = $country_flag_dir;
        $this->news_file_dir = $news_file_dir;
    }


    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNewsShortPost(): string
    {
        return $this->news_short_post;
    }

    public function getCountryFlagDir(): string
    {
        return $this->country_flag_dir;
    }

    public function getNewsFileDir(): string
    {
        return $this->news_file_dir;
    }
}