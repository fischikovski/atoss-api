<?php
declare(strict_types=1);
namespace App\Atoss\Model;

class Employee
{
    protected ?string $email;
    protected ?string $firstname;
    protected ?string $lastname;
    protected string $employee;
    protected ?string $city;

    public function getEmail(): ?string
    {
        return $this->email;
    }
//    protected ?string $email;
//
//    /**
//     * @return string|null
//     */
//    public function getEmail(): ?string
//    {
//        return $this->email;
//    }
//
//    /**
//     * @param string|null $email
//     */
//    public function setEmail(?string $email): void
//    {
//        $this->email = $email;
//    }
}