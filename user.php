<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    public $confirm_password;


    public function getId(){
        return $this->id;
    }

    public function getEmail():?string
{
    return $this->email;
}
    public function setEmail(string $email): self {
        return $this->email;
    }

    public function getUsername():?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self {
        return $this->username;
    }


    public function getPassword():?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self {
        return $this->password;
    }
