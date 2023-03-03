<?php
namespace App\models\users;
abstract class UserEntity{
    protected int $id;
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected string $password;
    protected string $is_activated;

    /**
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     * @param string $is_activated
     */
    public function __construct(int $id, string $firstName, string $lastName, string $email, string $password, string $is_activated)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->is_activated = $is_activated;
    }


}