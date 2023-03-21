<?php

require_once(__DIR__ . '/../helpers/database.php');

class Training
{
    private int $id_trainings;
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
    public function setId_trainings(int $id_trainings): void
    {
        $this->id_trainings = $id_trainings;
    }
    public function getId_trainings(): int
    {
        return $this->id_trainings;
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

        if($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
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
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->fetchAll());
        } else {
            return [];
        }
    }
    /**
     * 
     * Méthode permettant de récupérer toutes les identifiants
     * 
     * @param int $id_trainings
     * 
     * @return mixed
     */
    public static function getData(int $id_trainings, int $id_modules): mixed
    {
        // CREATE REQUEST
        $sql = 'SELECT  `trainings`.`title` AS `training_title`, 
                        `modules`.`title` AS `modules_title`, 
                        `modules`.`content` AS `modules_content`,
                        `submodules`.`title` AS `submodules_title`,
                        `submodules`.`content` AS `submodules_content`
                FROM `trainings`
                JOIN `modules` ON `modules`.`id_trainings` = `trainings`.`id_trainings`
                JOIN `submodules` ON `submodules`.`id_modules` = `modules`.`id_modules`
                WHERE `trainings`.`id_trainings` = :id_trainings AND `modules`.`id_modules` = :id_modules;';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_trainings', $id_trainings, PDO::PARAM_INT);
        $sth->bindValue(':id_modules', $id_modules, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return $sth->fetchAll();
        }
    }
    /**
     * 
     * Méthode permettant de récupérer toutes les données d'une formation
     * 
     * @param int $id_modules
     * 
     * @return object
     */
    public static function getDataTraining(int $id_trainings): object|bool
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `trainings`
                    WHERE `id_trainings` = :id_trainings';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_trainings', $id_trainings, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return $sth->fetch();
        }
    }
    /**
     * 
     * Méthode permettant de modifier la formation
     * 
     * @param int $id_trainings
     * 
     * @return bool
     */
    public function update(int $id_trainings): bool
    {
        // CREATE REQUEST
        $sql = 'UPDATE `trainings` SET
                        `title` = :title,
                        `content` = :content
                WHERE `id_trainings` = :id_trainings;';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle());
        $sth->bindValue(':content', $this->getContent());
        $sth->bindValue(':id_trainings', $id_trainings, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
    /**
     * 
     * Méthode permettant de supprimer une formation
     * 
     * @param int $id_trainings
     * 
     * @return bool
     */
    public static function delete(int $id_trainings): bool
    {
        // CREATE REQUEST
        $sql = 'DELETE FROM `trainings`
                    WHERE `trainings`.`id_trainings` = :id_trainings;';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_trainings', $id_trainings, PDO::PARAM_INT);
        // EXECUTE REQUEST
        $sth->execute();
        $result = $sth->rowCount();
        return ($result > 0) ? true : false;
    }

}
