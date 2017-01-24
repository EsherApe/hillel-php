<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.12.2016
 * Time: 14:45
 */
class User
{
    public $fullName;
    public $phoneNumber;
    public $email;
    public $role;
    const ROLE = 'user';

    /**
     * User constructor.
     * @param $fullName
     * @param $phoneNumber
     * @param $email
     * @param $role
     */
    public function __construct($fullName, $phoneNumber, $email, $role)
    {
        $this->fullName = $fullName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->role = $role;
    }

    public function setRole($role)
    {
        $this->ROLE = $role;
    }

    /**
     * @param $role
     * @param PDO $pdo
     * @return Admin|null|Student|Teacher|User
     */
    public static function getInstance($role, PDO $pdo)
    {
        $stmt = $pdo->prepare("SELECT * FROM USERS WHERE ROLE = :role");
        $stmt->bindValue(":role", $role);
        $result = $stmt->execute();
        $row = $stmt->fetch();
        if (empty($row)) {
            die('Set one of the following roles: student, teacher, admin, user');
        }

        switch ($row['role']) {
            case 'student':
                $user = new Student(
                    $row['fullName'],
                    $row['phone'],
                    $row['email'],
                    $row['role'],
                    $row['score'],
                    $row['visits']
                );
                break;
            case 'teacher':
                $user = new Teacher(
                    $row['fullName'],
                    $row['phone'],
                    $row['email'],
                    $row['role'],
                    $row['subject']
                );
                break;
            case 'admin':
                $user = new Admin(
                    $row['fullName'],
                    $row['phone'],
                    $row['email'],
                    $row['role'],
                    $row['schedule']
                );
                break;
            default:
                $user = new User(
                    $row['fullName'],
                    $row['phone'],
                    $row['email'],
                    $row['role']
                );
        }

        $user->setRole($row['role']);
        return $user;
    }

    /**
     * @return string
     */
    public function getVisitCard()
    {
        $visitCard = "<b>" . "Name: " . "</b>" . $this->fullName . "<br>" .
            "<b>" . "Phone: " . "</b>" . $this->phoneNumber . "<br>" .
            "<b>" . "Email: " . "</b>" . $this->email . "<br>" .
            "<b>" . "Role: " . "</b>" . $this->role;
        return $visitCard;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return static::ROLE;
    }
}