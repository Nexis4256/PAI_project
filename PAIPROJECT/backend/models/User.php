<?php

class User
{
    private $email;
    private $nickname;
    private $id;
    private $role;

    public function __construct(
            int $id,
            string $email,
            string $role,
            string $nickname
    )
    {
        $this->email = $email;
        $this->role = $role;
        $this->nickname = $nickname;
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function getId(): string
    {
        return $this->id;
    }
}