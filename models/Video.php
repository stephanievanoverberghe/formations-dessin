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
        $sql = 'INSERT INTO `videos` (`title`, `file`)
                VALUE (:title, :file)';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':file', $this->getFile(), PDO::PARAM_STR);
        // EXECUTE REQUEST
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
    /**
     * 
     * Méthode permettant de récupérer toutes les données d'une video
     * 
     * @param int $id_videos
     * 
     * @return object
     */
    public static function getData(int $id_videos): object|bool
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `videos` 
                WHERE `id_videos` = :id_videos';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_videos', $id_videos, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return $sth->fetch();
        }
    }
    /**
     * 
     * Méthode permettant de modifier la video
     * 
     * @param int $id_videos
     * 
     * @return bool
     */
    public function update(int $id_videos): bool
    {
        // CREATE REQUEST
        $sql = 'UPDATE `videos` SET
                        `title` = :title,
                        `file` = :file
                WHERE `id_videos` = :id_videos;';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle());
        $sth->bindValue(':file', $this->getFile());
        $sth->bindValue(':id_videos', $id_videos, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
    /**
     * 
     * Méthode permettant de supprimer une video
     * 
     * @param int $id_videos
     * 
     * @return bool
     */
    public static function delete(int $id_videos): bool
    {
        // CREATE REQUEST
        $sql = 'DELETE FROM `videos`
                    WHERE `videos`.`id_videos` = :id_videos;';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_videos', $id_videos, PDO::PARAM_INT);
        // EXECUTE REQUEST
        $sth->execute();
        $result = $sth->rowCount();
        return ($result > 0) ? true : false;
    }

    
}