<?php

require_once(__DIR__ . '/../helpers/database.php');

class Subcategory
{
    private int $id_sub_categories;
    private string $title;
    private string $content;
    private int $id_categories;


    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la class
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID_SUB_CATEGORIES GETTER AND SETTER ************************************************************************
    public function setId_sub_categories(int $id_sub_categories): void
    {
        $this->id_sub_categories = $id_sub_categories;
    }
    public function getId_sub_categories(): int
    {
        return $this->id_sub_categories;
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
    // ID_SUB_CATEGORIES GETTER AND SETTER ************************************************************************
    public function setId_categories(int $id_categories): void
    {
        $this->id_categories = $id_categories;
    }
    public function getId_categories(): int
    {
        return $this->id_categories;
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
        $sql = 'INSERT INTO `subcategories` (`title`, `content`, `id_categories`)
                    VALUE (:title, :content, :id_categories);';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        $sth->bindValue(':id_categories', $this->getId_categories(), PDO::PARAM_STR);
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
        $sql = '    SELECT * FROM `subcategories`;';
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
     * Méthode permettant de récupérer toutes les données d'une sous-catégorie
     * 
     * @param int $id_sub_categories
     * 
     * @return object
     */
    public static function getData(int $id_sub_categories): object|bool
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `subcategories`
                    WHERE `id_sub_categories` = :id_sub_categories';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_sub_categories', $id_sub_categories, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return $sth->fetch();
        }
    }
    /**
     * 
     * Méthode permettant de modifier la sous-catégorie
     * 
     * @param int $id_sub_categories
     * 
     * @return bool
     */
    public function update(int $id_sub_categories): bool
    {
        // CREATE REQUEST
        $sql = 'UPDATE `subcategories` SET
                        `title` = :title,
                        `content` = :content,
                        `id_categories` = :id_categories
                WHERE `id_sub_categories` = :id_sub_categories;';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        $sth->bindValue(':id_categories', $this->getId_categories(), PDO::PARAM_INT);
        $sth->bindValue(':id_sub_categories', $id_sub_categories, PDO::PARAM_INT);

        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
    /**
     * 
     * Méthode permettant de supprimer une sous-catégorie
     * 
     * @param int $id_subcatégorie
     * 
     * @return bool
     */
    public static function delete(int $id_sub_categories): bool
    {
        // CREATE REQUEST
        $sql = 'DELETE FROM `subcategories`
                    WHERE `subcategories`.`id_sub_categories` = :id_sub_categories;';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_sub_categories', $id_sub_categories, PDO::PARAM_INT);
        // EXECUTE REQUEST
        $sth->execute();
        $result = $sth->rowCount();
        return ($result > 0) ? true : false;

    }

}