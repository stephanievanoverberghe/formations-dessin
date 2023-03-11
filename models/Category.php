<?php

require_once(__DIR__ . '/../helpers/database.php');

class Category
{
    private int $id;
    private string $title;
    private string $slug;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la class
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID GETTER AND SETTER ************************************************************************
    /**
     * @param int $id
     * 
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    // TITLE GETTER AND SETTER ************************************************************************
    /**
     * @param string $title
     * 
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    // SLUG GETTER AND SETTER ************************************************************************
    /**
     * @param string $slug
     * 
     * @return void
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
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
        $sql = 'INSERT INTO `categories` (`title`, `slug`)
                    VALUE (:title, :slug);';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':slug', $this->getSlug(), PDO::PARAM_STR);
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
}