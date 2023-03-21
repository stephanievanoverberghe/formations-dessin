<?php

require_once(__DIR__ . '/../helpers/database.php');

class Module
{
    private int $id_modules;
    private string $title;
    private string $content;
    private string $created_at;
    private string $updated_at;
    private string $disabled_at;
    private int $id_trainings;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la classe
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID_MODULES GETTER AND SETTER ************************************************************************
    public function setId_modules(int $id_modules): void
    {
        $this->id_modules = $id_modules;
    }
    public function getId_modules(): int
    {
        return $this->id_modules;
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
    // ID_TRAINING GETTER AND SETTER ************************************************************************
    public function setId_trainings(int $id_trainings): void
    {
        $this->id_trainings = $id_trainings;
    }
    public function getId_trainings(): int
    {
        return $this->id_trainings;
    }

    /**
     * 
     * Méthode qui permet d'ajouter un module à la base de données
     * 
     * @return bool
     */
    public function insert(): bool
    {
        // CREATE REQUEST
        $sql = 'INSERT INTO `modules` (`title`, `content`, `id_trainings`)
                VALUE (:title, :content, :id_trainings)';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        $sth->bindValue(':id_trainings', $this->getId_trainings(), PDO::PARAM_STR);

        if($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
    /**
     * 
     * Méthode statique qui permet de lister tous les modules existants
     * 
     * @return array
     */
    public static function getAll(): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `modules`;';
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
     * Méthode permettant de récupérer toutes les données d'un module
     * 
     * @param int $id_modules
     * 
     * @return object
     */
    public static function getData(int $id_modules): object|bool
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `modules`
                    WHERE `id_modules` = :id_modules';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_modules', $id_modules, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return $sth->fetch();
        }
    }
    /**
     * 
     * Méthode permettant de modifier le module
     * 
     * @param int $id_modules
     * 
     * @return bool
     */
    public function update(int $id_modules): bool
    {
        // CREATE REQUEST
        $sql = 'UPDATE `modules` SET
                        `title` = :title,
                        `content` = :content,
                        `id_trainings` = :id_trainings
                WHERE `id_modules` = :id_modules;';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        $sth->bindValue(':id_trainings', $this->getId_trainings(), PDO::PARAM_INT);
        $sth->bindValue(':id_modules', $id_modules, PDO::PARAM_INT);

        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
    /**
     * 
     * Méthode permettant de supprimer un module
     * 
     * @param int $id_modules
     * 
     * @return bool
     */
    public static function delete(int $id_modules): bool
    {
        // CREATE REQUEST
        $sql = 'DELETE FROM `modules`
                    WHERE `modules`.`id_modules` = :id_modules;';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_modules', $id_modules, PDO::PARAM_INT);
        // EXECUTE REQUEST
        $sth->execute();
        $result = $sth->rowCount();
        return ($result > 0) ? true : false;

    }
}