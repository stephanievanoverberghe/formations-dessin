<?php

require_once(__DIR__ . '/../helpers/database.php');

class Article
{
    private int $id_articles;
    private string $title;
    private string $hook;
    private string $subtitle;
    private string $content;
    private string $conclusion;
    private string $created_at;
    private string $updated_at;
    private string $archived_at;
    private int $id_users;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la class
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID_ARTICLES GETTER AND SETTER ************************************************************************
    public function setId_articles(int $id_articles): void
    {
        $this->id_articles = $id_articles;
    }
    public function getId_articles(): int
    {
        return $this->id_articles;
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
    // HOOK GETTER AND SETTER ************************************************************************
    public function setHook(string $hook): void
    {
        $this->hook = $hook;
    }
    public function getHook(): string
    {
        return $this->hook;
    }
    // SUBTITLE GETTER AND SETTER ************************************************************************
    public function setSubtitle(string $subtitle): void
    {
        $this->subtitle = $subtitle;
    }
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }
    // CONTENT GETTER AND SETTER ************************************************************************
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    public function getContent(): string
    {
        return $this->content;
    }
    // CONCLUSION GETTER AND SETTER ************************************************************************
    public function setConclusion(string $conclusion): void
    {
        $this->conclusion = $conclusion;
    }
    public function getConclusion(): string
    {
        return $this->conclusion;
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
    public function setUpdated_at(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
    public function getUpdated_at(): string
    {
        return $this->updated_at;
    }
    // ARCHIVED_AT GETTER AND SETTER ************************************************************************
    public function setArchived_at(string $archived_at): void
    {
        $this->archived_at = $archived_at;
    }
    public function getArchived_at(): string
    {
        return $this->archived_at;
    }
    // ID_USERS GETTER AND SETTER ************************************************************************
    public function setId_users(int $id_users): void
    {
        $this->id_users = $id_users;
    }
    public function getId_users(): int
    {
        return $this->id_users;
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
        $sql = 'INSERT INTO `articles` (`title`, `hook`, `subtitle`, `content`, `conclusion`, `created_at`)
                    VALUE (:title, :hook, :subtitle, :content, :conclusion, :created_at);';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':hook', $this->getHook(), PDO::PARAM_STR);
        $sth->bindValue(':subtitle', $this->getSubtitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        $sth->bindValue(':conclusion', $this->getConclusion(), PDO::PARAM_STR);
        $sth->bindValue(':created_at', $this->getCreated_at(), PDO::PARAM_STR);
        // RETURN TRUE IF REQUEST EXECUTE OR FALSE IF NOT EXECUTE
        return $sth->execute();
    }
    /**
     * 
     * Méthode statique qui permet de lister tous les articles existants
     * 
     * @return array
     */
    public static function getAll(): array
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
