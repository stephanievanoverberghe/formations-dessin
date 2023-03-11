<?php

require_once(__DIR__ . '/../helpers/database.php');

class Video
{
    private int $id;
    private string $title;
    private string $file;
    private string $deleted_at;

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
    // FILE GETTER AND SETTER ************************************************************************
    public function setFile(string $file): void
    {
        $this->file = $file;
    }
    public function getFile(): string
    {
        return $this->file;
    }
    // DELETED_AT GETTER AND SETTER ************************************************************************
    public function setDeleted_at(string $deleted_at): void
    {
        $this->deleted_at = $deleted_at;
    }
    public function getDeleted_at(): string
    {
        return $this->deleted_at;
    }

    /**
     * 
     * Méthode qui permet d'ajouter une video à la base de données
     * 
     * @return bool
     */
    public function insert(): bool
    {
        // CREATE REQUEST
        $sql = 'INSERT INTO `trainings` (`title`, `file`, `deleted_at`)
                VALUE (:title, :file, :deleted_at)';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);

        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':file', $this->getFile(), PDO::PARAM_STR);
        $sth->bindValue(':deleted_at', $this->getDeleted_at(), PDO::PARAM_STR);

        return $sth->execute();
    }
    /**
     * 
     * Méthode statique qui permet de lister toutes les videos existantes
     * 
     * @return array
     */
    public static function getAll(): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `videos`;';

        // PREPARE REQUEST
        $sth = Database::getInstance()->prepare($sql);

        if ($sth->execute()) {
            return ($sth->fetchAll());
        } else {
            return [];
        }
    }
    
    
}