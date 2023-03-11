<?php

require_once(__DIR__ . '/../helpers/database.php');

class Article
{
    private int $id;
    private string $title;
    private string $slug;
    private string $content;
    private string $created_at;
    private string $archived_at;

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
    // CONTENT GETTER AND SETTER ************************************************************************
    /**
     * @param string $content
     * 
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    // CREATED_AT GETTER AND SETTER ************************************************************************
    /**
     * @param string $created_at
     * 
     * @return void
     */
    public function setCreated_at(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getCreated_at(): string
    {
        return $this->created_at;
    }
    // ARCHIVED_AT GETTER AND SETTER ************************************************************************
    /**
     * @param string $archived_at
     * 
     * @return void
     */
    public function setArchived_at(string $archived_at): void
    {
        $this->archived_at = $archived_at;
    }

    /**
     * @return string
     */
    public function getArchived_at(): string
    {
        return $this->archived_at;
    }
    /**
     * 
     * Méthode qui permet de créer une nouveau article
     * 
     * @return bool
     */
    public function insert(): bool
    {
        // CREATE REQUEST
        $sql = 'INSERT INTO `articles` (`title`, `slug`, `content`, `created_at`, `archived_at`)
                    VALUE (:title, :slug, :content, :created_at, :archived_at);';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':slug', $this->getSlug(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getSlug(), PDO::PARAM_STR);
        $sth->bindValue(':created_at', $this->getSlug(), PDO::PARAM_STR);
        $sth->bindValue(':archived_at', $this->getSlug(), PDO::PARAM_STR);
        // RETURN TRUE IF REQUEST EXECUTE OR FALSE IF NOT EXECUTE
        return $sth->execute();
    }
    /**
     * 
     * Méthode statique qui permet de lister tous les articles existants
     * 
     * @return array
     */
    public static function getAll() : array
    {
        // CREATE REQUEST
        $sql = '    SELECT * FROM `articles`
                        ORDER BY `created_at`
                        DESC
                        LIMIT 12;';
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