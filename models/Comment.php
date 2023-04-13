<?php

require_once(__DIR__ . '/../helpers/database.php');

class Comment
{
    private int $id_comments;
    private string $title;
    private string $content;
    private string $created_at;
    private string $updated_at;
    private string $deleted_at;
    private int $id_forums;
    private int $id_users;
    private int $id_articles;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la class
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID_COMMENTS GETTER AND SETTER ************************************************************************
    public function setId_comments(int $id_comments): void
    {
        $this->id_comments = $id_comments;
    }
    public function getId_comments(): int
    {
        return $this->id_comments;
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
    // TITLE GETTER AND SETTER ************************************************************************
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    public function getContent(): string
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
    public function setUpdated_at(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
    public function getUpdated_at(): string
    {
        return $this->updated_at;
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
    // ID_FORUMS GETTER AND SETTER ************************************************************************
    public function setId_forums(int $id_forums): void
    {
        $this->id_forums = $id_forums;
    }
    public function getId_forums(): int
    {
        return $this->id_forums;
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
    // ID_ARTICLES GETTER AND SETTER ************************************************************************
    public function setId_articles(int $id_articles): void
    {
        $this->id_articles = $id_articles;
    }
    public function getId_articles(): int
    {
        return $this->id_articles;
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
        $sql = 'INSERT INTO `comments` (`title`, `content`, `id_users`, `id_articles`)
                    VALUE (:title, :content, :id_users, :id_articles);';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        $sth->bindValue(':id_users', $this->getId_users(), PDO::PARAM_INT);
        $sth->bindValue(':id_articles', $this->getId_articles(), PDO::PARAM_INT);

        // RETURN TRUE IF REQUEST EXECUTE OR FALSE IF NOT EXECUTE
        return $sth->execute();
    }
    public static function getAll($search = '', int $limit = null, int $offset = 0): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * 
                    FROM `comments`
                    WHERE `title` LIKE :search
                    ORDER BY `created_at` DESC';

        if (!is_null($limit)) {
            $sql .= ' LIMIT :limit OFFSET :offset';
        }
        // PREPARE REQUEST
        $sth = Database::getInstance()->prepare($sql);
        // AFFECT VALUE
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
    public static function getAllCount($search = ""): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `comments`
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
    public static function getData(int $id_comments): object|bool
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `comments`
                WHERE `id_comments` = :id_comments';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_comments', $id_comments, PDO::PARAM_INT);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return $sth->fetch();
        }
    }
    public static function validateComment($id_comments)
    {
        // CREATE REQUEST
        $sql = 'UPDATE `comments` SET
                        `validated_at` = NOW()
                WHERE `id_comments` = :id_comments';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_comments', $id_comments);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
    public static function getUnvalidatedComment(): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `comments` 
                    WHERE `validated_at` IS NULL;';
        // PREPARE REQUEST
        $sth = Database::getInstance()->prepare($sql);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->fetchAll());
        } else {
            return [];
        }
    }
    public static function getAllValidateComments()
    {
        // CREATE REQUEST
        $sql = 'SELECT * 
                    FROM `comments`
                    WHERE `validated_at` IS NOT NULL
                        ORDER BY `validated_at` DESC';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        // EXECUTE REQUEST
        $sth->execute();
        $comments = $sth->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }
    public static function delete(int $id_comments): bool
    {
        // CREATE REQUEST
        $sql = 'DELETE FROM `comments`
                    WHERE `comments`.`id_comments` = :id_comments;';
        // PREPARE REQUEST
        $pdo = Database::getInstance();
        $sth = $pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_comments', $id_comments, PDO::PARAM_INT);
        // EXECUTE REQUEST
        $sth->execute();
        $result = $sth->rowCount();
        return ($result > 0) ? true : false;
    }
    
}
