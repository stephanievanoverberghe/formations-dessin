<?php

require_once(__DIR__ . '/../helpers/database.php');

class Training
{
    private int $id;
    private string $title;
    private string $content;
    private string $created_at;
    private string $updated_at;
    private string $disabled_at;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la classe
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID GETTER AND SETTER ************************************************************************
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }
    // TITLE GETTER AND SETTER ************************************************************************
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    // CONTENT GETTER AND SETTER ************************************************************************
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    public function getcontent(): string
    {
        return $this->content;
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
    // UPDATED_AT GETTER AND SETTER ************************************************************************
    public function setUpdate_at(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
    public function getUpdated_at(): string
    {
        return $this->updated_at;
    }
    // DISABLED_AT GETTER AND SETTER ************************************************************************
    public function setDisabled_at(string $disabled_at): void
    {
        $this->disabled_at = $disabled_at;
    }
    public function getDisabled_at(): string
    {
        return $this->disabled_at;
    }

    /**
     * 
     * Méthode qui permet d'ajouter une formation à la base de données
     * 
     * @return bool
     */
    public function insert(): bool
    {
        // CREATE REQUEST
        $sql = 'INSERT INTO `trainings` (`title`, `content`)
                VALUE (:title, :content)';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);

        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);

        return $sth->execute();
    }
    /**
     * 
     * Méthode statique qui permet de lister toutes les formations existantes
     * 
     * @return array
     */
    public static function getAll(): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `trainings`;';

        // PREPARE REQUEST
        $sth = Database::getInstance()->prepare($sql);

        if ($sth->execute()) {
            return ($sth->fetchAll());
        } else {
            return [];
        }
    }
    /**
     * 
     * Méthode static qui permet de récupérer l'ID training
     * 
     * @param int $id
     * 
     * @return [type]
     */
    public static function existsId(int $id_trainings)
    {
        $pdo = Database::getInstance();
        $sql = 'SELECT `id_trainings` FROM `trainings` WHERE `id_trainings` = ?;';
        $sth = $pdo->prepare($sql);
        if ($sth->execute([$id_trainings])) {
            return $sth->fetchAll();
        }
    }
    /**
     * 
     * Méthode permettant de récupérer toutes les données de la formation
     * 
     * @param int $id
     * 
     * @return mixed
     * Retourne un objet issu de la class Training ou false
     */
    public static function get(int $id_trainings): object|bool
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `trainings` 
                WHERE `id_trainings` = :id_trainings';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_trainings', $id_trainings, PDO::PARAM_INT);
        
        if ($sth->execute()) {
            return $sth->fetch();
        }
    }
    
    
}