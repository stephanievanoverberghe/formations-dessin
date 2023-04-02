<?php

require_once(__DIR__ . '/../helpers/database.php');

class Video
{
    private int $id;
    private string $title;
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
        $sql = 'INSERT INTO `videos` (`title`)
                VALUE (:title)';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        // EXECUTE REQUEST
        return $sth->execute();
    }
    /**
     * 
     * Méthode statique qui permet de lister toutes les videos existantes
     * 
     * @return array
     */
    public static function getAll($search = '', int $limit = null, int $offset = 0): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * 
                    FROM `videos`
                    WHERE `title` LIKE :search
                    ORDER BY `title` ASC';

        if (!is_null($limit)) {
            $sql .= ' LIMIT :limit OFFSET :offset';
        }
        $sql .= ';';

        // PREPARE REQUEST
        $sth = Database::getInstance()->prepare($sql);
        // AFFECT VALUES
        $sth->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        // EXECUTE REQUEST
        if (!is_null($limit)) {
            $sth->bindValue(':offset', $offset, PDO::PARAM_INT);
            $sth->bindValue(':limit', $limit, PDO::PARAM_INT);
        }
        if ($sth->execute()) {
            return ($sth->fetchAll());
        } else {
            return [];
        }
    }
    /**
         * 
         * Méthode qui permet d'afficher le nombre de videos dans la recherche
         * 
         * @param string $search
         * 
         * @return [type]
         */
        public static function getAllCount($search = ""): array
        {
            // CREATE REQUEST
            $sql = 'SELECT * FROM `videos`
                        WHERE `title` LIKE :search;';
            // PREPARE REQUEST
            $sth = Database::getInstance()->prepare($sql);
            // AFFECT VALUE
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
                WHERE `id_videos` = :id_videos;';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle());
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
