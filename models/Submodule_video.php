<?php

require_once(__DIR__ . '/../helpers/database.php');

class Submodule_video
{
    private int $id_sub_modules;
    private int $id_videos;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la classe
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID_SUBMODULES GETTER AND SETTER ************************************************************************
    public function setId_sub_modules(int $id_sub_modules): void
    {
        $this->id_sub_modules = $id_sub_modules;
    }
    public function getId_sub_modules(): int
    {
        return $this->id_sub_modules;
    }
    // ID_VIDEOS GETTER AND SETTER ************************************************************************
    public function setId_videos(int $id_videos): void
    {
        $this->id_videos = $id_videos;
    }
    public function getId_videos(): int
    {
        return $this->id_videos;
    }

    /**
     * 
     * Méthode permettant d'ajouter un sous module et une video à la base de données
     * 
     * @return bool
     */
    public function insert(): bool
    {
        // CREATE REQUEST
        $sql = 'INSERT INTO `submodules_videos` (`id_sub_modules`, `id_videos`)
                VALUE (:id_sub_modules, :id_videos)';
        // PREPARE REQUEST
        $sth = $this->pdo->prepare($sql);
        // AFFECT VALUE
        $sth->bindValue(':id_sub_modules', $this->getId_sub_modules(), PDO::PARAM_STR);
        $sth->bindValue(':id_videos', $this->getId_videos(), PDO::PARAM_STR);
        // EXECUTE REQUEST
        if($sth->execute()) {
            return ($sth->rowCount() > 0) ? true : false;
        }
    }
    /**
     * 
     * 
     * Méthode statique qui permet de lister toutes les vidéos et les sous-modules
     * 
     * @return array
     */
    public static function getAll(): array
    {
        // CREATE REQUEST
        $sql = 'SELECT * FROM `submodules_videos`;';
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