<?php

require_once(__DIR__ . '/../helpers/database.php');

class User
{
    private int $id_users;
    private string $lastname;
    private string $firstname;
    private string $email;
    private string $password;
    private string $pseudo;
    private string $birthdate;
    private string $country;
    private string $created_at;
    private string $updated_at;
    private string $validated_at;
    private string $deleted_at;
    private string $admin;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la classe
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID GETTER AND SETTER ************************************************************************
    public function setId_users(int $id_users): void
    {
        $this->id_users = $id_users;
    }
    public function getId_users(): int
    {
        return $this->id_users;
    }
    // LASTNAME GETTER AND SETTER ************************************************************************
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }
    public function getLastname(): string
    {
        return $this->lastname;
    }
    // FIRSTNAME GETTER AND SETTER ************************************************************************
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    // EMAIL GETTER AND SETTER ************************************************************************
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    // PASSWORD GETTER AND SETTER ************************************************************************
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    // PSEUDO GETTER AND SETTER ************************************************************************
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }
    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    // BIRTHDATE GETTER AND SETTER ************************************************************************
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }
    // COUNTRY GETTER AND SETTER ************************************************************************
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
    public function getCountry(): string
    {
        return $this->country;
    }
    // CREATED_AT GETTER AND SETTER ************************************************************************
    public function setCreated_at(string $created_at): void
    {
        $this->created_at = $created_at;
    }
    public function getCreated_at(): string
    {
        return $this->created_at;
    }
    // UPDATE_AT GETTER AND SETTER ************************************************************************
    public function setUpdated_at(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
    public function getUpdated_at(): string
    {
        return $this->updated_at;
    }
    // VALIDATED_AT GETTER AND SETTER ************************************************************************
    public function setValidated_at(string $validated_at): void
    {
        $this->validated_at = $validated_at;
    }
    public function getValidated_at(): string
    {
        return $this->validated_at;
    }
    // DELETE_AT GETTER AND SETTER ************************************************************************
    public function setDeleted_at(string $deleted_at): void
    {
        $this->deleted_at = $deleted_at;
    }
    public function getDeleted_at(): string
    {
        return $this->deleted_at;
    }
    // ADMIN GETTER AND SETTER ************************************************************************
    public function setAdmin(string $admin): void
    {
        $this->admin = $admin;
    }
    public function getAdmin(): string
    {
        return $this->admin;
    }

    /**
     * 
     * Méthode permettant de vérifier si un mail est présent en BDD
     * 
     * @param string $email
     * 
     * @return bool
     */
    public static function isEmailExists(string $email): bool|object
    {
        $sql = 'SELECT * FROM `users` WHERE `email` = :email';

        $sth = Database::getInstance()->prepare($sql);
        $sth->bindValue(':email', $email, PDO::PARAM_STR);
        $sth->execute();

        return $sth->fetch();
    }

    /**
     * 
     * Méthode permettant d'ajouter un utilisateur à la base de données
     * 
     * @return bool
     */
    public function insert(): bool
    {
        // CREATE REQUEST
        $sql = 'INSERT INTO `users` (`lastname`, `firstname`, `email`, `password`, `pseudo`, `birthdate`, `country`)
                VALUE (:lastname, :firstname, :email, :password, :pseudo, :birthdate, :country)';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);

        // AFFECT VALUE
        $sth->bindValue(':lastname', $this->getLastname(), PDO::PARAM_STR);
        $sth->bindValue(':firstname', $this->getFirstname(), PDO::PARAM_STR);
        $sth->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
        $sth->bindValue(':password', $this->getPassword(), PDO::PARAM_STR);
        $sth->bindValue(':pseudo', $this->getPseudo(), PDO::PARAM_STR);
        $sth->bindValue(':birthdate', $this->getBirthdate(), PDO::PARAM_STR);
        $sth->bindValue(':country', $this->getCountry(), PDO::PARAM_STR);
        // $sth->bindValue(':admin', $this->getAdmin(), PDO::PARAM_STR);

        return $sth->execute();
    }

    /**
     * 
     * Méthode statique permettant de lister tous les utilisateurs existants
     * 
     * @return array
     */
    public static function getAll($search = ''): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * 
                    FROM `users`
                    WHERE `lastname` LIKE :search;
                    OR `firstname` LIKE :search
                    ORDER BY `lastname`';
        // PREPARE REQUEST
        $sth = Database::getInstance()->prepare($sql);
        // AFFECT VALLUE
        $sth->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->fetchAll());
        } else {
            return [];
        }
    }
    /**
     * 
     * Méthode statique permettant de lister tous les utilisateurs existants
     * 
     * @return array
     */
    public static function getUser(): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `users`';
        // PREPARE REQUEST
        $sth = Database::getInstance()->prepare($sql);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->fetch());
        } else {
            return [];
        }
    }
    /**
     * 
     * Méthode permettant de récupérer toutes les données d'un utilisateur
     * 
     * @param int $id_users
     * 
     * @return object
     */
    public static function getData(int $id_users): object|bool
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `users`
                WHERE `id_users` = :id_users';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_users', $id_users, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if($sth->execute()) {
            return $sth->fetch();
        }
    }

    public static function getByEmail(string $email) {

        // CREATE REQUEST
        $sql = 'SELECT * FROM `users`
            WHERE `email` = :email';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':email', $email);
        // EXECUTE REQUEST
        if($sth->execute()) {
            return $sth->fetch();
        }
    }

    public static function validateEmail(string $email) {
        // CREATE REQUEST
        $sql = 'UPDATE `users` SET
                        `validated_at` = NOW()
                WHERE `email` = :email';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':email', $email);
        // EXECUTE REQUEST
        if($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
}