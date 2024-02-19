<?php
namespace AT\RestfulApi;

class User
{
    public function __construct(private string $name, private string $email, private string $phoneNumber){

    }

    public function retrieveAll(): array
    {
        # code...
    }

    public function create(): void
    {

    }

    public function retrieve(int $userId): User
    {
        # code...
    }
    public function update(): User
    {
        # code...
    }
    public function remove(): bool
    {
        # code...
    }
}