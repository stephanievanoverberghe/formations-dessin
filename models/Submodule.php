<?php

require_once(__DIR__ . '/../helpers/database.php');

class Submodule
{
    private int $id_submodules;
    private string $title;
    private string $content;
    private string $created_at;
    private string $updated_at;
    private string $disabled_at;
    private int $id_modules;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la classe
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID_SUBMODULES GETTER AND SETTER ************************************************************************
    public function setId_submodules(int $id_submodules): void
    {
        $this->id_submodules = $id_submodules;
    }
    public function getId_submodules(): int
    {
        return $this->id_submodules;
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
    // ID_MODULES GETTER AND SETTER ************************************************************************
    public function setId_modules(int $id_modules): void
    {
        $this->id_modules = $id_modules;
    }
    public function getId_modules(): int
    {
        return $this->id_modules;
    }

    /**
     * 
     * Méthode qui permet d'ajouter un sous module à la base de données
     * 
     * @return bool
     */
    public function insert(): bool
    {
        // CREATE REQUEST
        $sql = 'INSERT INTO `submodules` (`title`, `content`, `id_modules`)
                VALUE (:title, :content, :id_modules)';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);

        // AFFECT VALUE
        $sth->bindValue(':title', $this->getTitle(), PDO::PARAM_STR);
        $sth->bindValue(':content', $this->getContent(), PDO::PARAM_STR);
        $sth->bindValue(':id_modules', $this->getId_modules(), PDO::PARAM_STR);

        return $sth->execute();
    }
    /**
     * 
     * Méthode statique qui permet de lister tous les sous modules existants
     * 
     * @return array
     */
    public static function getAll($search = ''): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * 
                    FROM `submodules`
                    WHERE `title` LIKE :search;';
        // PREPARE REQUEST
        $sth = Database::getInstance()->prepare($sql);
        // AFFECT VALUES
        $sth->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        // EXECUTE REQUEST
        if ($sth->execute()) {
            return ($sth->fetchAll());
        } else {
            return [];
        }
    }
}