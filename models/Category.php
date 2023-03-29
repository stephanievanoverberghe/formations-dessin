<?php

require_once(__DIR__ . '/../helpers/database.php');

class Category
{
    private int $id_categories;
    private string $title;
    private string $content;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la class
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID_CATEGORIES GETTER AND SETTER ************************************************************************
    public function setId_categories(int $id_categories): void
    {
        $this->id_categories = $id_categories;
    }
    public function getId_categories(): int
    {
        return $this->id_categories;
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

    /**
     * 
     * Méthode qui permet de créer une nouvelle catégorie
     * 
     * @return bool
     */
    public function insert(): bool
    {
        // CREATE REQUEST
        $sql = 'INSERT INTO `categories` (`title`, `content`)
                    VALUE (:title, :content);';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        // RETURN TRUE IF REQUEST EXECUTE OR FALSE IF NOT EXECUTE
        return $sth->execute();
    }
    /**
     * 
     * Méthode statique qui permet de lister toutes les catégories existantes
     * 
     * @return array
     */
    public static function getAll() : array
    {
        // CREATE REQUEST
        $sql = '    SELECT * FROM `categories`;';
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
     * Méthode permettant de récupérer toutes les données d'une catégorie
     * 
     * @param int $id_categories
     * 
     * @return object
     */
    public static function getData(int $id_categories): object|bool
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `categories`
                    WHERE `id_categories` = :id_categories';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_categories', $id_categories, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return $sth->fetch();
        }
    }
    /**
     * 
     * Méthode permettant de modifier la catégorie
     * 
     * @param int $id_categories
     * 
     * @return bool
     */
    public function update(int $id_categories): bool
    {
        // CREATE REQUEST
        $sql = 'UPDATE `categories` SET
                        `title` = :title,
                        `content` = :content
                WHERE `id_categories` = :id_categories;';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        $sth->bindValue(':id_categories', $id_categories, PDO::PARAM_INT);

        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
    public static function delete(int $id_categories): bool
    {
        // CREATE REQUEST
        $sql = 'DELETE FROM `categories`
                    WHERE `categories`.`id_categories` = :id_categories;';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_categories', $id_categories, PDO::PARAM_INT);
        // EXECUTE REQUEST
        $sth->execute();
        $result = $sth->rowCount();
        return ($result > 0) ? true : false;

    }
}